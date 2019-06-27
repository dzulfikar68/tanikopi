@extends('template')

@section('main')
<section id="section-about" class="section pad-bot30 bg-green-amoeba">
    <div class="container">
        <h1 class="my-4 text-center text-lg-left" style="color: #000;">Our Products</h1>
        <br>
        <div class="well well-lg"
             style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);background: rgb(255, 255, 255);">
            <div class="row">
                @foreach($products as $key=>$product)

                <div class="col-md-3">
                    <div class="product-item img-fluid img-thumbnail">
                        <div class="pi-img-wrapper">
                            <img
                                src="{{$product->image}}"
                                class="img-responsive" alt="Berry Lace Dress">
                        </div>
                        <h3><a href="#">{{$product->name_product}}</a></h3>
                        <h5>Tersedia <span>{{$product->qty_available}}</span> item</h5>
                        <div class="pi-price">IDR {{$product->price}} -,</div>
                        <a href="{{$product->link_gsheet}}" class="btn add2cart" target="_blank">Beli</a>
                        @if($key<2)
                            <div class="sticker sticker-new"></div>
                        @endif
                    </div>
                </div>

                @endforeach
            </div>

        </div>

    </div>

</section>
@endsection
