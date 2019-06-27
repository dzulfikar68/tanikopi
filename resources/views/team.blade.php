@extends('template')

@section('main')
<section id="section-team" class="section pad-bot30 bg-green-amoeba">
  <div class="container">
    <h1 class="my-4 text-center text-lg-left" style="color: #000;">Team</h1>
      <br>
      <div class="well well-lg" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);background: rgb(255, 255, 255);">
          <h3>Our Profile</h3>
          <div class="row text-lg-left">
              <div class="col-md-12">
                  <p style="color: #000;">
                      <b>tanikopi</b> terbentuk karena kami adalah pecinta dan penikmat kopi. Kami melihat adanya kesenjangan ekonomi antara petani kecil dan petani besar. Dimana petani kecil sering mengalami ketidakpastian harga jual hasil panen mereka. Maka dari itu kami berinisiatif untuk membentuk <b>tanikopi</b> agar kesejahteraan petani lokal di Indonesia bisa lebih meningkat dan merata.
                  </p>
              </div>
          </div>
          <h3>Our Team</h3>
          <div class="row text-lg-left">
              <div class="col-md-12">
                  <p style="color: #000;">
                      Kami tim tanikopi terdiri dari empat orang pecinta dan penikmat kopi:
                  </p>
                  <br>
                  <div class="row">

                      <div class="col-md-3 col-sm-3">
                          <div class="team-member">
                              <div class="team-img">
                                  <img src="{{asset('image/fikar.jpg')}}" alt="team member" class="img-responsive" style="height:auto">
                              </div>
                          </div>
                          <div class="team-title">
                              <h5>Dzulfikar Fauzi</h5>
                              <span>dzulfikar@tanikopi.com</span>
                          </div>
                      </div>
                      <div class="col-md-3 col-sm-3">
                          <div class="team-member">
                              <div class="team-img">
                                  <img src="{{asset('image/eko.jpeg')}}" alt="team member" class="img-responsive" style="height:auto">
                              </div>
                          </div>
                          <div class="team-title">
                              <h5>Eko Wahyudi</h5>
                              <span>eko@tanikopi.com</span>
                          </div>
                      </div>
                      <div class="col-md-3 col-sm-3">
                          <div class="team-member">
                              <div class="team-img">
                                  <img src="{{asset('image/fajar.jpg')}}" alt="team member" class="img-responsive" style="height:auto">
                              </div>
                          </div>
                          <div class="team-title">
                              <h5>Fajar Ainul</h5>
                              <span>fajar@tanikopi.com</span>
                          </div>
                      </div>
                      <div class="col-md-3 col-sm-3">
                          <div class="team-member">
                              <div class="team-img">
                                  <img src="{{asset('image/yasir.jpg')}}" alt="team member" class="img-responsive" style="height:auto">
                              </div>
                          </div>
                          <div class="team-title">
                              <h5>Yasir Abdurrohman</h5>
                              <span>yasirabd@tanikopi.com</span>
                          </div>
                      </div>

                  </div>
              </div>
          </div>
      </div>

  </div>
</div>
<!-- /.container -->
</section>
@endsection
