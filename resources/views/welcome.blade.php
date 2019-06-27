@extends('template')

@section('main')
<section class="featured" style="background:linear-gradient(rgba(0, 0, 0, 0.5) 100%, rgba(0, 0, 0, 0.5)100%),url({{ asset('image/featured_kopi.jpg') }}); background-position:left;" >
    <div class="container">
        <div class="row mar-bot40">
            <div class="col-md-8 col-md-offset-2">
                <div class="align-center">
                    <h2><img class="img-responsive" src="{{ asset('image/white_tanikopi.png') }}" alt="" style="width: 60%; height: auto; margin-left:auto; margin-right:auto;"></h2>
                    <h3 style="color:white;">
                      Platform pemasaran hasil panen petani kopi seluruh Indonesia
                    </h3>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- services -->
<section id="section-services" class="section pad-bot30 bg-white">
    <div class="container">
        <div class="row mar-bot40">
            <div class="col-md-offset-2 col-md-8">
                <div class="section-header">
                    <h2 class="section-heading animated" data-animation="bounceInUp">Misi tanikopi</h2>
                    <h3>
                      Kami menyatukan petani kopi seluruh Indonesia yang memiliki keyakinan sama bahwa kopi Indonesia dapat menjadi nomor satu di dunia. Kami berharap dapat meningkatkan kesejahteraan dan pemerataan ekonomi petani kopi di Indonesia.
                    </h3>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- spacer section:testimonial -->
<section id="testimonials" class="section" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="align-center">
                    <div class="testimonial pad-top40 pad-bot40 clearfix">
                        <h3 style="color:white;">
                            Kopi yang baik akan selalu menemukan penikmatnya
                        </h3>
                        <br/>
                        <span class="author">&mdash; Ben Filosopi Kopi</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- about -->
<section id="section-about" class="section appear clearfix">
    <div class="container">

        <div class="row mar-bot40">
            <div class="col-md-offset-1 col-md-10">
                <div class="section-header">
                    <h2 class="section-heading animated" data-animation="bounceInUp">Apa yang tanikopi lakukan?</h2>
                    <p>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="row" style="height: 40vh;display: flex;align-items: center;justify-content: center;">
                            <div class="col-md-6 hidden-xs" >
                              <div style="margin-bottom:auto;">
                                <img style="vertical-align: middle; max-width:200px;width: 100%; height: auto;" class="img-responsive" src="{{ asset('image/petani_kopi.png') }}" alt="">
                              </div>
                            </div>
                            <div class="col-md-6 hidden-xs">
                              <div style="margin-bottom:auto;">
                                <img style="vertical-align: middle; max-width:200px;width: 100%; height: auto;" class="img-responsive" src="{{ asset('image/koperasi.png') }}" alt="">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="row" style="height: 40vh;display: flex;align-items: center;justify-content: center;">
                            <div class="col-md-6 hidden-xs">
                              <div style="margin-bottom:auto;">
                                <img style="vertical-align: middle; max-width:200px;width: 100%; height: auto;" class="img-responsive" src="{{ asset('image/tanikopi.png') }}" alt="">
                              </div>
                            </div>
                            <div class="col-md-6 hidden-xs">
                              <div style="margin-bottom:auto;" class="hidden-xs">
                                <img style="vertical-align: middle; max-width:200px;width: 100%; height: auto;" class="img-responsive" src="{{ asset('image/pengolah_kopi.png') }}" alt="">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="row">
                            <div class="col-md-6">
                              <h3 style="margin-top:15px;color:#0da857;">Petani Kopi</h3>
                              <ul class="list-group">
                                <li class="list-group-item"><b>petani kopi</b> dikumpulkan tiap daerah di Indonesia dalam wadah <b>koperasi</b> unit daerah</li>
                                <li class="list-group-item">petani kecil mendapatkan edukasi dan pembinaan pertanian kopi melalui <b>koperasi</b></li>
                                <li class="list-group-item"><b>petani kopi</b> mendapatkan kepastian harga dari <b>koperasi</b> sehingga dapat menstabilkan harga pasar</li>
                              </ul>
                            </div>
                            <div class="col-md-6">
                              <h3 style="margin-top:15px;color:#0da857;">Koperasi</h3>
                              <ul class="list-group">
                                <li class="list-group-item"><b>tanikopi</b> bekerjasama dengan <b>koperasi</b> untuk edukasi dan pembinaan <b>petani kopi</b></li>
                                <li class="list-group-item">edukasi dan pembinaan bertujuan meningkatkan kualitas dan hasil pertanian kopi</li>
                                <li class="list-group-item"><b>koperasi</b> mengumpulkan dan menyalurkan hasil panen <b>petani kopi</b> kepada <b>tanikopi</b></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="row">
                            <div class="col-md-6">
                              <h3 style="margin-top:15px;color:#0da857;">Platform Pemasaran</h3>
                              <ul class="list-group">
                                <li class="list-group-item"><b>tanikopi</b> adalah platform pemasaran penghubung antara <b>pengolah kopi</b> dan pembeli</li>
                                <li class="list-group-item">produk yang dipasarkan di <b>tanikopi</b> merupakan hasil olahan dari mitra <b>pengolah kopi</b></li>
                                <li class="list-group-item">pembeli produk <b>tanikopi</b> adalah individu, coffee shop, UMKM ataupun perusahaan besar</li>
                              </ul>
                            </div>
                            <div class="col-md-6">
                              <h3 style="margin-top:15px;color:#0da857;">Pengolah Kopi</h3>
                              <ul class="list-group">
                                <li class="list-group-item"><b>tanikopi</b> bermitra dengan <b>pengolah kopi</b> dalam pemasaran produk hasil olahan kopi</li>
                                <li class="list-group-item"><b>pengolah kopi</b> menyediakan produk olahan kopi untuk pembeli</li>
                                <li class="list-group-item"><b>pengolah kopi</b> dapat menjangkau pasar tingkat nasional hingga internasional melalui <b>tanikopi</b></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /about -->

<!-- spacer section:stats -->
<section id="parallax1" class="section pad-top40 pad-bot40" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="align-center pad-top40 pad-bot40">
            <h2 style="color: white;" class="section-heading animated" data-animation="bounceInUp"><b>Apa yang bisa kita lakukan di tanikopi?</b></h2>
            <div class="row" style="margin-top:80px;">
              <div class="col-md-6">
                <a href="{{ url('login') }}" type="button" class="btn btn-success btn-lg" style="border-radius: 8px;background-color:#0da857;"><span style="font-size:24px;">Gabung Mitra tanikopi</span></a>
                <p style="color: white;margin:15px;">
                  Bekerjasama untuk meningkatkan kesejahteraan petani kopi
                </p>
              </div>
              <div class="col-md-6">
                <a href="{{ url('shop') }}" type="button" class="btn btn-success btn-lg" style="border-radius: 8px;background-color:#0da857;"><span style="font-size:24px;">Beli Produk tanikopi</span></a>
                <p style="color: white;margin:15px;">
                  Bantu petani kopi dengan membeli hasil olahan kopi terbaik
                </p>
              </div>
            </div>
        </div>
    </div>
</section>

<!-- section works -->
<section id="section-works" class="section appear clearfix">
    <div class="container">
        <div class="row mar-bot40 align-center">
            <div class="col-md-offset-3 col-md-6">
                <div class="section-header">
                    <h2 class="section-heading animated" data-animation="bounceInUp">Partner</h2>
                    <br/>
                    <p>
                      <img class="img-responsive" src="{{ asset('image/tani_mesem.png') }}" alt="" style="margin-left:auto;margin-right:auto;width: 50%; height: auto;">
                      <h4><b>Tani Mesem</b> - Perusahaan pengembangan produk pertanian dengan teknologi nano untuk meningkatkan produksi hasil tani</h4>
                    </p>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection
