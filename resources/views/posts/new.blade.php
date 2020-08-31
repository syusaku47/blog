@extends('layout')

@section('content')
<div class="d-flex align-items-center">
  <h1>今日のご飯は？</h1>
  <div class="ml-auto posts__linkBox">
    <a href="/index" class="btn btn-outline-dark">戻る</a>
  </div>
</div>
    <div class="row">
      <div class="col col-md-offset-3 col-md-10">
        <nav class="panel panel-default">
          <div class="panel-heading">フォルダを追加する</div>
            <div class="panel-body">
            @if ($errors->any())
              <div class="alert alert danger">
                <ul >
                  @foreach ($errors->all() as $error)
                  <li>{{$error}}</li>
                  @endforeach
                </ul>
              </div>
            @endif
              <form action="{{ route('posts.create') }}" method="post">
                @csrf
                <div class="form-group">
                  <label for="title">タイトル</label>
                  <input type="text" class="form-control mb-4" name="title" id="title" />
                  
                  <label for="text">内容</label>
                  <textarea type="text" class="form-control pb-5" name="text" id="text" /></textarea>
                </div>
                <div class="text-right">
                  <button type="submit" class="btn btn-primary">送信</button>
                </div>
              </form>
            </div>
          </nav>
        </div>
      </div>
@endsection