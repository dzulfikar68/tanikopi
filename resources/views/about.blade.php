@extends('template')

@section('main')
<section id="section-about" class="section pad-bot30 bg-green-amoeba">
  <div class="container">
      <h1 class="my-4 text-center text-lg-left" style="color: #000;">About Us</h1>
      <br>
      <div class="well well-lg" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);background: rgb(255, 255, 255);">
          <div class="row text-center text-lg-left">
              <div class="col-md-4">
                  <a href="#" class="d-block mb-4 h-100">
                  <img class="img-fluid img-thumbnail" src="{{ asset('image/kopi1.jpg') }}" alt="">
                  </a>
              </div>
              <div class="col-md-4">
                  <a href="#" class="d-block mb-4 h-100">
                  <img class="img-fluid img-thumbnail" src="{{ asset('image/kopi2.jpg') }}" alt="">
                  </a>
              </div>
              <div class="col-md-4">
                  <a href="#" class="d-block mb-4 h-100">
                  <img class="img-fluid img-thumbnail" src="{{ asset('image/kopi3.jpg') }}" alt="">
                  </a>
              </div>
          </div>
          <br>
          <div class="row text-lg-left">
              <div class="col-md-12">
                  <p style="color: #000;">
                    <b>tanikopi</b> adalah sebuah platform yang membantu petani kopi lokal dalam memasarkan hasil tani mereka.
                    Para petani kopi lokal akan dibina dan diarahkan oleh koperasi yang tergabung dalam jaringan mitra <b>tanikopi</b>.
                    Tidak hanya menyalurkan hasil panen para petani, bersama koperasi, <b>tanikopi</b> akan memberikan edukasi pertanian dengan
                    teknologi pertanian yang berkelanjutan sehingga hasil pertanian petani kopi lokal bisa lebih meningkat dari
                    segi kualitas maupun kuantitas.<br/><br/>
                    Indonesia adalah salah satu penghasil kopi terbesar, tetapi bukan negara yang memiliki peminum kopi terbanyak.
                    Dalam sebuah artikel yang dimuat oleh BBC Indonesia, disebutkan pada tahun 2017-2018 dihasilkan 51 juta karung
                    berisi biji kopi dari negara-negara yang penghasil kopi di dunia. Dalam data tersebut, Indonesia masuk kedalam
                    empat besar penghasil biji kopi terbesar di dunia dibawah Columbia, Vietnam, dan Brazil. Hal ini tidak terlepas
                    dari letak Indonesia yang memiliki iklim tropis yang cocok untuk pertanian kopi.<br/><br/>
                    Dari data lain yang dirilis oleh Fairtrade Foundation, sebuah organisasi charity yang berbasis di United Kingdom,
                    lebih dari 125 juta orang di seluruh dunia menggantungkan hidup mereka pada kopi. Bahkan, sekitar 25 juta
                    pertanian kecil memproduksi sekitar 80% dari produksi kopi sedunia.<br/><br/>
                    Petani-petani kopi yang tergabung dalam Fairtrade Foundation, dapat menjual kopi mereka secara adil atau Fairtrade,
                    yang memungkinkan konsumen bisa melacak biji kopi yang mereka beli. Adapun para petani kopi dijamin mendapat harga
                    dengan rentang yang memiliki batas bawah. Louisa Cox selaku salah satu direktur di Fairtrade Foundation, mengatakan,
                    petani yang bergabung di dalam cap Fairtrade dapat mengakses pelatihan, peralatan keselamatan, dan perlindungan.<br/><br/>
                    Namun beberapa peneliti berpendapat bahwa skema Fairtrade cukup mahal bagi petani untuk bisa bergabung dan hal itu bisa
                    mengganggu potensi profit. Mendorong produksi kopi dengan insentif uang juga dinilai bisa membuat pasokan berlebihan
                    sehingga harga pun merosot.<br/><br/>
                    Di Indonesia sendiri, saat ini belum banyak petani kopi yang tergabung dalam jaringan Fairtrade Foundation.
                    Dari data yang dirilis oleh Fairtrade Asia Pacific Region, pada tahun 2014 jumlah petani dan pekerja yang
                    tergabung dalam jaringan Fairtrade baru sekitar 28,500 orang, itupun masih data umum, belum yang hanya di sektor pertanian kopi.<br/><br/>
                    Sulitnya para petani kecil untuk tergabung dalam jaringan Fairtrade membuat petani kopi kecil di Indonesia masih belum bisa
                    merasakan kesejahteraan dari hasil panen mereka. Selain karena adanya ketidakpastian harga, juga karena belum adanya platform
                    seperti organisasi Fairtrade Foundation yang mengumpulkan para petani kopi kecil Indonesia dalam satu naungan pemasaran produk
                    yang menjamin kepastian harga jual kopi. Dalam sebuah berita yang dirilis oleh CNBC Indonesia pada 25 November 2018,
                    petani kopi Indonesia mengeluhkan harga yang jatuh ketika masa panen. Meskipun kopi Indonesia sudah terkenal di manca negara
                    dan dihargai cukup tinggi, namun ada sebagian petani yang belum merasakan rezeki yang optimal dari komoditas pertanian kopi.<br/><br/>
                    Dari latar belakang masalah tersebut kami membentuk <b>tanikopi</b> sebagai sebuah solusi untuk menyatukan petani kecil kopi di Indonesia agar
                    petani kopi Indonesia dapat merasakan kesejahteraan dari hasil panen kopi mereka. Di dalam platform <b>tanikopi</b> kami akan membentuk
                    jaringan pemasaran hasil panen petani kopi melalui koperasi-koperasi yang ada di daerah. Selain bekerjasama dengan koperasi daerah,
                    tanikopi juga akan bermitra dengan para pengolah kopi yang akan mengolah produk hasil panen dari petani kopi menjadi produk jadi
                    yang siap jual. Platform pemasaran <b>tanikopi</b> diharapkan dapat membantu petani kopi Indonesia untuk membentuk pertanian kopi yang mandiri
                    dan berkelanjutan. Dalam pelaksanaannya <b>tanikopi</b> juga akan melakukan pembinaan dan edukasi kepada para petani agar hasil panen
                    para petani bisa lebih meningkat dari segi kuantitas dan kualitas.<br/><br/>
                    Kami yakin, <b>tanikopi</b> akan membentuk jaringan petani kopi yang luas yang tersebar di seluruh Indonesia. Harapannya dengan adanya
                    <b>tanikopi</b> akan membantu persebaran dan pemerataan kesejahteraan petani kopi di Indonesia.<br/><br/>
                    Dalam waktu dekat, kami akan memulai pembentukan mitra <b>tanikopi</b> dari daerah Temanggung, Jawa Tengah, Indonesia.
                    Dimana Temanggung adalah salah satu penghasil kopi, yang mana kualitas kopinya sudah terkenal hingga ke Eropa.
                    Beberapa tahun yang lalu, sempat ada perkumpulan pengusaha kopi Eropa yang jauh-jauh pergi ke Temanggung untuk melihat
                    secara langsung pengolahan hasil kopi di Temanggung.<br/><br/>

                    Sumber:<br/>
                    [1] <a href="https://www.bbc.com/indonesia/majalah-43772934" target="_blank">https://www.bbc.com/indonesia/majalah-43772934</a><br/>
                    [2] <a href="https://www.fairtrade.org.uk/What-is-Fairtrade/Who-we-are" target="_blank">https://www.fairtrade.org.uk/What-is-Fairtrade/Who-we-are</a><br/>
                    [3] <a href="http://www.fairtradenapp.org/regions/" target="_blank">http://www.fairtradenapp.org/regions/</a><br/>
                    [4] <a href="https://www.cnbcindonesia.com/news/20181125110821-4-43593/petani-kopi-keluhkan-harga-jatuh-ketika-panen" target="_blank">https://www.cnbcindonesia.com/news/20181125110821-4-43593/petani-kopi-keluhkan-harga-jatuh-ketika-panen</a><br/>
                  </p>
              </div>
          </div>
      </div>
  </div>
  <!-- /.container -->
</section>
@endsection
