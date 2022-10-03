@extends('layouts.app')

@section('content')
    <x-breadcrumb title="{{ $page->title }}" />
    <section class="ptb-100">
        <div class="container">
            <div class="main-default-content">
                @if (App::getLocale() == 'en')
                    {!! htmlspecialchars_decode(nl2br($page->content_en)) !!}
                @elseif (App::getLocale() == 'ru')
                    {!! htmlspecialchars_decode(nl2br($page->content_ru)) !!}
                @else
                    {!! htmlspecialchars_decode(nl2br($page->content_uz)) !!}
                @endif
            </div>
        </div>
    </section>
@endsection
