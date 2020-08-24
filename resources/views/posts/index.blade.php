@extends('layout')

  @section('content')
  
  <div class="d-flex align-items-center">
    <h1>掲示板一覧</h1>
    <div class="ml-auto posts__linkBox">
      <a href="{{ route('posts.new') }}" class="btn btn-outline-dark">新規作成</a>
    </div>
  </div>
  <table class="table table-hover posts__table">
    <thead class="thead-dark">
      <tr>
        <th>No</th>
        <th>タイトル</th>
        <th>内容</th>
        <th>作成日時</th>
        <th>更新日時</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($posts as $post)
      <tr>
        <th>{{$post->id}}</th>
        <td><a href=" {{ route('posts.show', ['id' => $post->id]) }}" class="text-muted"> {{$post->title}} </a></td>
        <td><a href=" {{ route('posts.show', ['id' => $post->id]) }}" class="text-muted"> {{$post->text}} </a></td>
        <td>{{$post->created_at}}</td>
        <td>{{$post->updated_at}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  @endsection