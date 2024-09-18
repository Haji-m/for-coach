@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{asset('css/other.css')}}">
@endsection

@section('content')
    <main class="content-cover">
        <div class="content">
            <h3 class="content-name">コーチの方々へ。</h3>
            <div class="content-comment--cover">
                <div class="content-comment">
                    <p class="content-comment--text">
                        大変お世話になりました。<br>
                        Slackの質問スペースのアドバイスもいただき、ありがとうございます。
                    </p>
                    <p class="content-comment--text">
                        在学中は特にバックエンドの学習が難しかったですが、現在は学習を進めるうちに<br>
                        自分の作りたいもののアイデアが浮かび、思い通りにつくる・・・<br>
                        のはまだ難しいですが、少しづつ形になっていくところをみると嬉しいし楽しいです。
                    </p>
                    <p class="content-comment--text">
                        今まで学んだことを活かしながら、自主的に知識を得たりして、今後も学習を続けて行く所存です。<br>
                        ハムスタンプともども、これからもよろしくお願いいたします！
                    </p>
                </div>
            </div>
        </div>
        <div class="button">
            <button class="content-button">名前を入力し直す</button>
        </div>
    </main>
@endsection