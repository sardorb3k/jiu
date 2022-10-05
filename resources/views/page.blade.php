@extends('layouts.app')
@if (App::getLocale() == 'en')
    @section('title', $page->title_en)
@elseif (App::getLocale() == 'ru')
    @section('title', $page->title_ru)
@else
    @section('title', $page->title_uz)
@endif
@section('content')
    @if (App::getLocale() == 'en')
        <x-breadcrumb title="{{ $page->title_en }}" />
    @elseif (App::getLocale() == 'ru')
        <x-breadcrumb title="{{ $page->title_ru }}" />
    @else
        <x-breadcrumb title="{{ $page->title_uz }}" />
    @endif
    {{-- <section class="ptb-100">
        <div class="container">
            <div class="main-default-content"> --}}
    @if (App::getLocale() == 'en')
        {!! htmlspecialchars_decode(nl2br($page->content_en)) !!}
    @elseif (App::getLocale() == 'ru')
        {!! htmlspecialchars_decode(nl2br($page->content_ru)) !!}
    @else
        {!! htmlspecialchars_decode(nl2br($page->content_uz)) !!}
    @endif
    {{-- </div>
        </div>
    </section> --}}
@endsection
