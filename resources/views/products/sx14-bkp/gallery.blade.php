@extends('layout.app')

@section('title', 'VAIO SX14')

@section('product_nav')
    @include('products.sx14.product_nav')
@stop

@section('content')
<div class="navbar-product-page d-lg-flex justify-content-lg-end" style="border-top: 1px solid #fff; border-bottom: 1px solid #fff;">
    <ul class="navbar-nav flex-wrap flex-row col col-lg-4 p-0">

        <li class="nav-item text-center" style="flex-grow: 1; border-left: 1px solid white;">
            <a href="{{ route('product.overview_sx14') }}" class="nav-link py-3 py-lg-2">@lang('common.overview')</a>
        </li>
        <li class="nav-item text-center" style="flex-grow: 1; border-left: 1px solid white;">
            <a href="{{ route('product.spec_sx14') }}" class="nav-link py-3 py-lg-2">@lang('common.spec')</a>
        </li>
        <li class="nav-item text-center" style="flex-grow: 1; border-left: 1px solid white;">
            <a href="{{ route('product.gallery_sx14') }}" class="nav-link py-3 py-lg-2">@lang('common.gallery')</a>
        </li>

        @if( $store_enabled )
            <li class="nav-item-preorder nav-item text-center" style="flex-grow: 4; border-left: 1px solid white;">
                <a href="javascript:void(0);" class="nav-link py-3 py-lg-2">Out of Stock</a>
            </li>
        @endif

    </ul>
</div>

<style>
.html5gallery{
	width:100% !important;	
}

.html5gallery-thumbs-0{
   /* margin: auto !important;*/
}


@media(max-width: 991px){
	.html5gallery{
		margin:auto !important;
    	height: 500px !important;
	}
	
	.html5gallery-box,
	.html5gallery-car { 
		bottom:10px !important;
		
	}
	
	.html5gallery-elem-image{
		top:0px !important;		
	}
}
</style>
 

    <div style="text-align:center;">
    
     <div style="display:none;margin:0px auto 0px;" 
	class="html5gallery"
	data-responsive="true"
	data-responsivefullscreen="true"
    data-mobileresizeevent="true"
    data-enabletouchswipe="true" 
	data-html5player="true"
	data-autoslide="false" 
	data-skin="gallery" 
	data-showtitle="false" 
    data-thumbshowtitle="false" 
    data-thumbheight="120" 
	data-showsocialmedia="false" 
	data-showfullscreenbutton="false"   
	data-autoplayvideo="false" 
	data-width="800" 
	data-height="450" 
	data-effect="slide" 
	data-resizemode="fit" 
	data-padding="0"
	data-galleryshadow="false"
	data-slideshadow="false"
	data-carouselmargin="-150"
    data-showplaybutton="false"
	>
            <a href="https://hk.vaio.com/images/gallery/sx14/sx14-silver01.jpg">
                <img src="https://hk.vaio.com/images/gallery/sx14/sx14-silver01.jpg" alt="VAIO SX14" >
            </a>
            <a href="https://hk.vaio.com/images/gallery/sx14/sx14-silver02.jpg">
                <img src="https://hk.vaio.com/images/gallery/sx14/sx14-silver02.jpg" alt="VAIO SX14" >
            </a>
            <a href="https://hk.vaio.com/images/gallery/sx14/sx14-silver03.jpg">
                <img src="https://hk.vaio.com/images/gallery/sx14/sx14-silver03.jpg" alt="VAIO SX14" >
            </a>
            <a href="https://hk.vaio.com/images/gallery/sx14/sx14-silver04.jpg">
                <img src="https://hk.vaio.com/images/gallery/sx14/sx14-silver04.jpg" alt="VAIO SX14" >
            </a>
            <a href="https://hk.vaio.com/images/gallery/sx14/sx14-silver05.jpg">
                <img src="https://hk.vaio.com/images/gallery/sx14/sx14-silver05.jpg" alt="VAIO SX14" >
            </a>
            <a href="https://hk.vaio.com/images/gallery/sx14/sx14-silver06.jpg">
                <img src="https://hk.vaio.com/images/gallery/sx14/sx14-silver06.jpg" alt="VAIO SX14" >
            </a>
            <a href="https://hk.vaio.com/images/gallery/sx14/sx14-silver07.jpg">
                <img src="https://hk.vaio.com/images/gallery/sx14/sx14-silver07.jpg" alt="VAIO SX14" >
            </a>
            <a href="https://hk.vaio.com/images/gallery/sx14/sx14-silver08.jpg">
                <img src="https://hk.vaio.com/images/gallery/sx14/sx14-silver08.jpg" alt="VAIO SX14" >
            </a>
            <a href="https://hk.vaio.com/images/gallery/sx14/sx14-silver09.jpg">
                <img src="https://hk.vaio.com/images/gallery/sx14/sx14-silver09.jpg" alt="VAIO SX14" >
            </a>
            <a href="https://hk.vaio.com/images/gallery/sx14/sx14-silver10.jpg">
                <img src="https://hk.vaio.com/images/gallery/sx14/sx14-silver10.jpg" alt="VAIO SX14" >
            </a>
            <a href="https://hk.vaio.com/images/gallery/sx14/sx14bottom.jpg">
                <img src="https://hk.vaio.com/images/gallery/sx14/sx14bottom.jpg" alt="VAIO SX14" >
            </a>

            <a href="https://hk.vaio.com/images/gallery/sx14/sx14-brown01.jpg">
                <img src="https://hk.vaio.com/images/gallery/sx14/sx14-brown01.jpg" alt="VAIO SX14" >
            </a>
            <a href="https://hk.vaio.com/images/gallery/sx14/sx14-brown02.jpg">
                <img src="https://hk.vaio.com/images/gallery/sx14/sx14-brown02.jpg" alt="VAIO SX14" >
            </a>
            <a href="https://hk.vaio.com/images/gallery/sx14/sx14-brown03.jpg">
                <img src="https://hk.vaio.com/images/gallery/sx14/sx14-brown03.jpg" alt="VAIO SX14" >
            </a>
            <a href="https://hk.vaio.com/images/gallery/sx14/sx14-brown04.jpg">
                <img src="https://hk.vaio.com/images/gallery/sx14/sx14-brown04.jpg" alt="VAIO SX14" >
            </a>
            <a href="https://hk.vaio.com/images/gallery/sx14/sx14-brown05.jpg">
                <img src="https://hk.vaio.com/images/gallery/sx14/sx14-brown05.jpg" alt="VAIO SX14" >
            </a>
            <a href="https://hk.vaio.com/images/gallery/sx14/sx14-brown06.jpg">
                <img src="https://hk.vaio.com/images/gallery/sx14/sx14-brown06.jpg" alt="VAIO SX14" >
            </a>
            <a href="https://hk.vaio.com/images/gallery/sx14/sx14-brown07.jpg">
                <img src="https://hk.vaio.com/images/gallery/sx14/sx14-brown07.jpg" alt="VAIO SX14" >
            </a>
            <a href="https://hk.vaio.com/images/gallery/sx14/sx14-brown08.jpg">
                <img src="https://hk.vaio.com/images/gallery/sx14/sx14-brown08.jpg" alt="VAIO SX14" >
            </a>
            <a href="https://hk.vaio.com/images/gallery/sx14/sx14-brown09.jpg">
                <img src="https://hk.vaio.com/images/gallery/sx14/sx14-brown09.jpg" alt="VAIO SX14" >
            </a>
            <a href="https://hk.vaio.com/images/gallery/sx14/sx14-brown10.jpg">
                <img src="https://hk.vaio.com/images/gallery/sx14/sx14-brown10.jpg" alt="VAIO SX14" >
            </a>

            <a href="https://hk.vaio.com/images/gallery/sx14/sx14-black01.jpg">
                <img src="https://hk.vaio.com/images/gallery/sx14/sx14-black01.jpg" alt="VAIO SX14" >
            </a>
            <a href="https://hk.vaio.com/images/gallery/sx14/sx14-black02.jpg">
                <img src="https://hk.vaio.com/images/gallery/sx14/sx14-black02.jpg" alt="VAIO SX14" >
            </a>
            <a href="https://hk.vaio.com/images/gallery/sx14/sx14-black03.jpg">
                <img src="https://hk.vaio.com/images/gallery/sx14/sx14-black03.jpg" alt="VAIO SX14" >
            </a>
            <a href="https://hk.vaio.com/images/gallery/sx14/sx14-black04.jpg">
                <img src="https://hk.vaio.com/images/gallery/sx14/sx14-black04.jpg" alt="VAIO SX14" >
            </a>
            <a href="https://hk.vaio.com/images/gallery/sx14/sx14-black05.jpg">
                <img src="https://hk.vaio.com/images/gallery/sx14/sx14-black05.jpg" alt="VAIO SX14" >
            </a>
            <a href="https://hk.vaio.com/images/gallery/sx14/sx14-black06.jpg">
                <img src="https://hk.vaio.com/images/gallery/sx14/sx14-black06.jpg" alt="VAIO SX14" >
            </a>
            <a href="https://hk.vaio.com/images/gallery/sx14/sx14-black07.jpg">
                <img src="https://hk.vaio.com/images/gallery/sx14/sx14-black07.jpg" alt="VAIO SX14" >
            </a>
            <a href="https://hk.vaio.com/images/gallery/sx14/sx14-black08.jpg">
                <img src="https://hk.vaio.com/images/gallery/sx14/sx14-black08.jpg" alt="VAIO SX14" >
            </a>
            <a href="https://hk.vaio.com/images/gallery/sx14/sx14-black09.jpg">
                <img src="https://hk.vaio.com/images/gallery/sx14/sx14-black09.jpg" alt="VAIO SX14" >
            </a>
            <a href="https://hk.vaio.com/images/gallery/sx14/sx14-black10.jpg">
                <img src="https://hk.vaio.com/images/gallery/sx14/sx14-black10.jpg" alt="VAIO SX14" >
            </a>





        </div>
    
    </div>  

 


@stop

@section('css')
    <link type="text/css" rel="stylesheet" href="{{ asset('css/product.css') }}" />
@stop

@section('js')
<script defer src="{{ asset('js/html5gallery.js') }}"></script>
    <script defer src="{{ asset('js/product.js') }}"></script>
@stop
