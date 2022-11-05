{{-- J.O.Y --}}
@extends('layouts.applain')
@section('title', 'J.O.Y')

@php
$ogp = [
	'title'			=> 'J.O.Y',
	'image'			=> asset('/fw/public/images/event/2212joy/twitter.png'),
	'url'			=> url()->current(),
	'description'	=> 'これはあなた自身が「J.O.Y」の番組参加者として閉園後の「東京ジョイポリス」で難関なステージを攻略し、難攻不落の近未来遊園地からの脱出を目指すゲーム',
];
$urlTicket      = "https://t.livepocket.jp/";

// ドラマチックルームGoogleマップ
$mapRoom        = "https://www.google.com/maps/search/%E3%82%88%E3%81%A0%E3%81%8B%E3%81%AE%E3%83%AC%E3%82%B3%E3%83%BC%E3%83%89%E3%83%89%E3%83%A9%E3%83%9E%E3%83%81%E3%83%83%E3%82%AF%E3%83%AB%E3%83%BC%E3%83%A0/@35.697345,139.6886464,17z";
// ドラマチックホールGoogleマップ
$mapHole        = "https://www.google.co.jp/maps/place/%E3%82%88%E3%81%A0%E3%81%8B%E3%81%AE%E3%83%89%E3%83%A9%E3%83%9E%E3%83%81%E3%83%83%E3%82%AF%E3%83%9B%E3%83%BC%E3%83%AB%EF%BC%88%E3%82%88%E3%81%A0%E3%81%8B%E3%81%AE%E3%83%AC%E3%82%B3%E3%83%BC%E3%83%892%E5%8F%B7%E5%BA%97%EF%BC%89/@35.6990131,139.6943931,17z/data=!3m2!4b1!5s0x60188cd78eda52b7:0x611ed66c17198a39!4m5!3m4!1s0x60188d0d570c807b:0x28d48b79511cd39b!8m2!3d35.6990131!4d139.6965818";
@endphp

@include('layouts.htmlhead', [ 'ogp' => $ogp ])
@include('gtm.head')
@include('gtm.body')

@push('head-css')
  <link href="{{ asset('/fw/public/css/legacy/margin.css') }}" rel="stylesheet">
  <link href="{{ asset('/fw/public/css/event/2212joy/event.css') }}" rel="stylesheet">
@endpush

@section('content')
<div class="event2019">
  <div class="container">
    <div class="area-contents">
      {{-- トップ --}}
      <div>
        <img src="{{ asset('/fw/public/images/event/2212joy/top.png') }}" class="top img-fluid" alt="J.O.Y">
      </div>
      {{-- キービジュアル --}}
      <div>
        <img src="{{ asset('/fw/public/images/event/2212joy/kv.png') }}" class="kv img-fluid" alt="キービジュアル">
      </div>
      {{-- ストーリー --}}
      <div class="frame frame-story">f
        <img src="{{ asset('/fw/public/images/event/2212joy/story/title.png') }}" class="title title-story " alt="ストーリー">
        <img src="{{ asset('/fw/public/images/event/2212joy/story/contents.png') }}" class="contents-story " alt="ストーリー">
      </div>
      {{-- ポイント --}}
      <div class="frame frame-point">ff
        <img src="{{ asset('/fw/public/images/event/2212joy/point/title.png') }}" class="title title-point " alt="ポイント">
        <img src="{{ asset('/fw/public/images/event/2212joy/point/contents.png') }}" class="contents-point " alt="ポイント">
      </div>
      {{-- 流れ --}}
      <div class="frame frame-howto">
        <img src="{{ asset('/fw/public/images/event/2212joy/howto/title.png') }}" class="title title-howto " alt="流れ">
        <img src="{{ asset('/fw/public/images/event/2212joy/howto/contents.png') }}" class="contents-howto " alt="流れ">
      </div>
      {{-- インフォメーション --}}
      <div class="frame frame-information">
        <img src="{{ asset('/fw/public/images/event/2212joy/information/title.png') }}" class="title title-information " alt="インフォメーション">
        <img src="{{ asset('/fw/public/images/event/2212joy/information/contents.png') }}" class="contents-information " alt="インフォメーション">
      </div>
      {{-- スケジュール --}}
      <div class="frame frame-schedule">
        <img src="{{ asset('/fw/public/images/event/2212joy/schedule/title.png') }}" class="title title-schedule " alt="スケジュール">
        <img src="{{ asset('/fw/public/images/event/2212joy/schedule/contents.png') }}" class="contents-schedule " alt="スケジュール">
      </div>
      {{-- マップ --}}
      <div class="frame frame-map">
        <img src="{{ asset('/fw/public/images/event/2212joy/map/title.png') }}" class="title title-map " alt="マップ">
        <img src="{{ asset('/fw/public/images/event/2212joy/map/address.png') }}" class="address " alt="マップ">
        <img src="{{ asset('/fw/public/images/event/2212joy/map/contents.png') }}" class="contents-map " alt="マップ">
      </div>
      {{-- 注意事項 --}}
      <div class="frame frame-notice">
        <img src="{{ asset('/fw/public/images/event/2212joy/notice/title.png') }}" class="title title-notice " alt="注意事項">
        <img src="{{ asset('/fw/public/images/event/2212joy/notice/contents.png') }}" class="contents-notice " alt="注意事項">
      </div->
      {{-- -ロゴ --}}
      <div class="frame frame-logo">
        <a href="{{ url('/') }}"><img src="{{ asset('/fw/public/images/event/2212joy/logo.png') }}" class="logo img-fluid" alt="ロゴ"></a>
      </div>
    </div>
  </div>
</div>

@endsection
