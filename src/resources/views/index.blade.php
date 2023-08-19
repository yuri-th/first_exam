@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('nav')
<nav class="header-nav">
    <ul class="header-nav-list">
        <li class="header-nav-item"><a href="/">ホーム</a></li>
        <li class="header-nav-item">
            <form class="form" action="/attendance" method="get">
                @csrf<button class="header-nav__button">日付一覧</button>
            </form>
        </li>
        <li class="header-nav-item">
            <form class="form" action="/logout" method="post">
                @csrf<button class="header-nav__button">ログアウト</button>
            </form>
        </li>
    </ul>
</nav>
@endsection

@section('content')

<div class="greeting__alert">
    <?php $user = Auth::user(); ?>{{ $user->name }}さんお疲れ様です！
</div>


<div class="attendance__content">
    <div class="attendance__time">
        <form class="timestamp" action="/attendance/start" method="post">
            @csrf
            <button class="attendance__time--start" @if($startDisabled)disabled @endif>勤務開始</button>
        </form>
        <form class="timestamp" action="/attendance/end" method="post">
            @csrf
            <button class="attendance__time--end" @if($endDisabled)disabled @endif>勤務終了</button>
        </form>
    </div>
    <div class="break__time">
        <form class="timestamp" action="/break/start" method="post">
            @csrf
            <button class="break__time--start" @if($rest_sDisabled)disabled @endif>休憩開始</button>
        </form>
        <form class="timestamp" action="/break/end" method="post">
            @csrf
            <button class="break__time--end" @if($rest_eDisabled)disabled @endif>休憩終了</button>
        </form>
    </div>
</div>
@endsection

