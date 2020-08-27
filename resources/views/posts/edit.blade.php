@extends('layout')

  @section('content')

<div class="d-flex align-items-center">
  <h1>掲示板編集</h1>
  <div class="ml-auto boards__linkBox">
    <a href=" {{ route('posts.index') }} " class="btn btn-outline-dark">一覧</a>
  </div>
</div>

<form action="{{ route('posts.update', ['id' => $post->id]) }}" method="POST">
  @csrf
  <div class="form-group">
    <label for="title">タイトル</label>
    <input type="text" class="form-control" name="title" id="title"
          value="{{ old('title') ?? $post->title }}" />
  </div>

  <div class="form-group">
    <label for="due_date">内容</label>
    <input type="text" class="form-control" name="text" id="text"
          value="{{ old('text') ?? $post->text }}" />
  </div>
  <div class="text-right">
    <button type="submit" class="btn btn-primary">送信</button>
  </div>
</form>

@endsection