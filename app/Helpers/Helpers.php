<?php

function isUrlContain($string){
    return (strpos(\Request::path(), $string) !== false);
}

function getRole()
{
    return session('role', null);
}

//check is user superAdmin?
function isSuperAdmin(){
    $role = getRole();

    if($role!=null){

        if($role==='admin'){
            return true;
        }

    }

    return false;
}


//check is user koperasi?
function isKoperasi(){
    $role = getRole();

    if($role!=null){

        if($role==='koperasi'){
            return true;
        }

    }

    return false;
}

//check is user pengolah?
function isPengolah(){
    $role = getRole();

    if($role!=null){

        if($role==='pengolah'){
            return true;
        }

    }

    return false;
}

