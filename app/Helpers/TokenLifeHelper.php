<?php
/**
 * Created by IntelliJ IDEA.
 * User: OSD-1
 * Date: 9/12/2018
 * Time: 11:39 PM
 */

namespace App\Helpers;


use App\Models\TokenModel;
use TheSeer\Tokenizer\Token;

class TokenLifeHelper
{
    /**
     * Checking masa aktif token berdasarkan inputan customer id
     *
     * @param $id_user
     * @return bool
     */
    public function checkLifetimeTokenById($id_user)
    {

        $dataToken = TokenModel::where([
            ['expired_date', '>=', date('Y-m-d H:i:s', time())],
            ['userid', $id_user]
        ])->orderBy('id', 'desc')->get()->first();

        if ($dataToken != null) {

            $this->addTokenLifeTime($dataToken);

            return true;
        } else {
            return false;
        }
    }

    /**
     * Checking masa aktif token berdasarkan inputan token itu sendiri
     *
     * @param $token
     * @return bool
     */
    public function checkLifetimeTokenByToken($token)
    {
        $dataToken = TokenModel::where([
            ['expired_date', '>=', date('Y-m-d H:i:s', time())],
            ['token', $token]
        ])->orderBy('id', 'desc')->get()->first();

        if ($dataToken != null) {

            $this->addTokenLifeTime($dataToken);

            return true;
        } else {
            return false;
        }
    }

    public function addTokenLifeTime($dataToken){

        $new_active_token = date('Y-m-d H:i:s', time() + 36000);

        $dataToken->expired_date = $new_active_token;

        $dataToken->save();


    }


    /**
     * Generate random token
     *
     * @param $length
     * @return string
     */
    public static function getToken($length)
    {
        $token        = "";
        $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $codeAlphabet .= "abcdefghijklmnopqrstuvwxyz";
        $codeAlphabet .= "0123456789";
        $max = strlen($codeAlphabet) - 1;

        for ($i = 0; $i < $length; $i++) {
            $token .= $codeAlphabet[self::setCryptoRandSecure(0, $max)];
        }

        return $token;
    }

    /**
     * Generate security token
     *
     * @param $min
     * @param $max
     * @return mixed
     */
    public static function setCryptoRandSecure($min, $max)
    {
        $range = $max - $min;

        if ($range < 1) {
            return $min;
        }

        $log    = ceil(log($range, 2));
        $bytes  = (int) ($log / 8) + 1;
        $bits   = (int) $log + 1;
        $filter = (int) (1 << $bits) - 1;

        do {
            $rnd = hexdec(bin2hex(openssl_random_pseudo_bytes($bytes)));
            $rnd = $rnd & $filter;
        } while ($rnd >= $range);

        return $min + $rnd;
    }

    public static function getUserByToken($token){

        $user = TokenModel::where('token', $token)->first()->user;

        return $user;

    }

}
