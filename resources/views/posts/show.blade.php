@extends('layout')

  @section('content')
  <div class="d-flex align-items-center mt-4 mb-4">
  <div class="ml-auto boards__linkBox">
    <a href="{{ route('posts.index')}}" class="btn btn-outline-dark">一覧</a>
    <a href="{{ route('posts.edit',['id' => $post->id]) }}" class="btn btn-outline-dark">編集</a>
  </div>
</div>

<div class="card">
  <div class="card-header">
    <h4>{{ $post->title}}</h4>
  </div>
  <div class="card-body">
    <p class="card-text">{{ $post->text}}</p>
    <!-- <p class="text-right font-weight-bold mr-10">作成者名</p> -->
  </div>
</div>
  <form method="POST" action="{{ route('posts.delete',['id' => $post->id]) }}">
  @csrf
<div class="text-right">
  <input type="submit" class="btn btn-outline-denger" value="削除" data-id="{{ $post->id }}" onclick="deletePost(this);">
</div>
  </form>

  
  <form method="POST" action="{{ route('posts.delete',['id' => $post->id]) }}">
  @csrf
<div class="text-right">
  <input type="submit" class="btn btn-outline-denger" value="削除" data-id="{{ $post->id }}" onclick="deletePost(this);">
</div>
  </form>


<script>
<!--
/************************************
削除ボタンを押してすぐにレコードが削除されないように
javascriptで確認メッセージを流します。
*************************************/
//-->
function deletePost(e) {
    'use strict';
    if (confirm('本当に削除していいですか?')) {
    document.getElementById('delete_' + e.dataset.id).submit();
    }
}
</script>
@endsection