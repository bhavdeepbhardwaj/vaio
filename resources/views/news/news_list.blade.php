@extends('layout.app')

@section('title', __('common.nav.about.news'))

@section('content')

    <section class="top-nav-padding ls-0" style="background-color:white;">
        <div class="container py-5">
            <h2 class="page-title mb-5">@lang('common.news.title')</h2>
            <div class="row">

                @foreach($feature_news as $item )
                    @component('news.cards.news_card', ['item' => $item]) @endcomponent
                @endforeach

            </div>
        </div>
    </section>

    <section class="older-news-section ls-0" style="background-color:#f9f9f9;">
    <div class="container py-5">
            <h2 class="page-title mb-5">@lang('common.news.article')</h2>
            <div class="row">

                @foreach($article as $item )
           <a class="list-item d-flex flex-column col-12 col-md-6 col-lg-4 mb-4" target="_blank" href="{{ $item->url }}">

             <div class="list-pic-wrapper">
                <div class="bg-item" style="background-image: url('{{ $item->image_path }}')"></div>
             </div>
            <div class="list-item-content p-3">
                <p class="list-item-title font-weight-bold">{{ $item->title }}</p>
                <p class="list-item-para">
                    {{ $item->caption }} 
                </p>
             </div>
            </a>
                @endforeach

            </div>
        </div>
      
    </section>

    <section class="top-nav-padding ls-0" style="background-color:white;">
         <div class="container py-5">
            <div class="container row mb-5">
                <h2 class="page-title justify-content-center">@lang('common.news.old_news')</h2>
                {{--<div class="col-12 col-lg-3 ml-auto mt-1">--}}
                    {{--<select id="news_month_field" name="type" class="form-control">--}}
                        {{--<option value="" disabled selected>@lang('common.news.select_month')</option>--}}
                    {{--</select>--}}
                {{--</div>--}}
            </div>

            @foreach($news as $item )
                @component('news.cards.news_row', ['item' => $item]) @endcomponent
            @endforeach

            {{ $news->links() }}

        </div>
    </section>
@stop
