@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/exclusive.css')}}">
@endsection

@section('content')
<div class="title--cover">
    <p class="title1">THANK YOU FOR...</p>
    <div class="title2--cover">
        <img class="title2-img" src="{{asset('storage/exclusive-page.png')}}">
        <div class="title2-text--cover">
            <p class="title2-text" id="title2--left">MY</p>
            <p class="title2-text" id="title2--right">COACH</p>
        </div>
    </div>
    <div class="title2--cover">
        <div class="title2-text-shadow--cover">
            <p class="title2-text-shadow" id="title2-shadow--left">MY</p>
            <p class="title2-text-shadow" id="title2-shadow--right">COACH</p>
        </div>
    </div>
</div>
<!--ここから内容。  -->
<section class="present">
    <div class="present--content" id="message-cover">
        <div class="present--title-cover">
            <p class="present--title">小西より</p>
        </div>
        <div class="present--text-cover" id="message-text">
            <p class="present--text">
                9ヶ月間、本当にお世話になりました。<br>
                教材の理解が難しかったり相手に物事をうまく伝えられなかったりと、大変なことも多かったですが、コーチがSlackでの質問の仕方を褒めてくださったり、ゆっくりでいいのでコツコツと進めるのが大事とアドバイスをくださって、心を落ち着けることができています。<br>
                アプリやサイトの完成をみたクライアントにこれだ！と喜んでもらえるような、閲覧者や使用者が見やすいデザインを追求していけるような、そんな仕事に巡り合えるように、ゆっくりでも自発的に学習を進めて行こうと思います。<br>
                もっと面談で趣味などお話ししたかった〜<br>
                出会えて嬉しかったです！<br>
                今後もお時間の余裕のある時にアドバイスなどいただけると嬉しいです。<br>
                ありがとうございました！
            </p>
        </div>
    </div>
    <div class="present--content" id="illust-cover">
        <div class="present--title-cover">
            <p class="present--title">コーチへのイラスト</p>
        </div>
        <div class="present--illust">
            <div class="present--img-cover">
                <img class="present--img" src="{{asset('storage/illust.jpg')}}">
            </div>
            <div class="present--download-cover">
                <a class="present--download" href="img/illust.jpg" download="コーチへ.png">画像をダウンロード</a>
            </div>
        </div>
        <div class="present--text-cover" id="illust-text">
            <p class="present--text">
                プログラミングのコーチということで、コーチが電子世界に溶け込むようなイラストにしました。<br>
                後ろの記述はバックエンドではありませんが、HTMLのみでイラストを描いている人を知り、それの真似をする感じでコーチの顔の要素の一部をdivタグで並べたものです。
            </p>
        </div>
    </div>
</section>
<section class="thanks-cover">
    <div class="thanks">
        <p class="thanks--text">
            コーチにありがとうを伝えよう！ ☞ ☞ ☞
        </p>
        <div class="thanks-button-cover">
            <div class="thanks-button--count">
                <div class="thanks-button--count-num">
                    <!-- いいねされた数をカウント。 -->
                </div>
                <div class="thanks-button--heart">
                    <div class="thanks-button--shape"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="button--cover">
    <button class="button" id="top">画面トップへ</button>
    <button class="button" id="other">名前を入力し直す</button>
</div>
@endsection