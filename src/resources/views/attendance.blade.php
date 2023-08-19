@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/attendance.css') }}">
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


<div class="date_display">
  <div>
    <form action="/attendance/sub" method="post">
      @csrf
      <button class="date__btn--right" id="prevDay">＜</button>
      <h1>{{$dateDisplay}}</h1>
      <input type="hidden" name="date_Display" value="{{$dateDisplay}}" />
    </form>
  </div>

  <div>
    <form action="/attendance/add" method="post">
      @csrf
      <button class="date__btn--left" id="nextDay">＞</button>
      <input type="hidden" name="date_Display" value="{{$dateDisplay}}" />
    </form>
  </div>
</div>

<div class="form-table">
  <table>
    <tr class="table-title">
      <th>名前</th>
      <th>勤務開始</th>
      <th>勤務終了</th>
      <th>休憩時間</th>
      <th>勤務時間</th>
    </tr>
    @foreach ($forms as $form)
    <tr>
      <input type="hidden" name="firstPage" value="{{ $forms->url(1) }}">
      <input type="hidden" name="currentPage" value="{{ $forms->currentPage() }}">
      <td>{{ $form->getUser()}}</td>
      <td>{{ $form->start_time }}</td>
      <td>{{ $form->end_time }}</td>
      <td>{{ $form->breakTime }}</td>
      <td>{{ $form->workingTime }}</td>
    </tr>
    @endforeach
  </table>
  <div class="table-page">
    <div>
      {{ $forms->appends(request()->input())->links('pagination::bootstrap-4') }}
    </div>
  </div>
</div>
@endsection