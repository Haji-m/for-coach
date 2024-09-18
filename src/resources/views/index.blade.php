@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/index.css')}}">
@endsection

@section('content')
<!-- ローディング画面 -->
<div class="loading">
    <div class="loading-shape--cover">
        <img id="shape1" src="{{asset('storage/tool.png')}}">
    </div>
    <div class="loading-shape--cover">
        <img id="shape2" src="{{asset('storage/web-illust.png')}}">
    </div>
    <div class="loading-text--cover">
        <p class="loading-text--blink">now loading...</p>
    </div>
</div>
<main class="content-cover">
    <form action="{{route('exclusive')}}" method="get">
        <div class="content">
            <p class="content-explanation">お名前をひらがなで入力してください。</p>
            <input class="content-form" type="text" placeholder="例：みつき" name="search-text" />
        </div>
        <div class="button">
            <button class="content-button" type="submit">送信</button>
        </div>
    </form>
</main>
@endsection