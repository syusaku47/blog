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
  <form method="POST" action="{{ route('posts.destroy',['id' => $post->id]) }}">
  @csrf
<div class="text-right">
  <input type="submit" class="btn btn-outline-denger" value="削除" data-id="{{ $post->id }}" onclick="deletePost(this);">
</div>
  </form>

  <div class="row">
    <div class="col col-md-offset-3 col-md-10">
      <nav class="panel panel-default">
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
          </div>
      </nav>
    </div>
  </div>
        <div class="row">
          <div class="col col-md-offset-3 col-md-10">
            <div class="p-comment__item">
              <div class="p-comment__bottomLine">
                コメント
                @foreach ($comments as $comment)
                <div class="border-bottom mt-3">
                  <ul>
                    <li>{{$comment->text}}</li>
                    <li class="text-right">{{$comment->name}}{{$comment->created_at}} 
                    <form method="POST" action="{{ route('comments.destroy',['id' => $comment->id, 'post_id' => $post->id]) }}">
                    @csrf 
                    <input type="submit" class="btn btn-outline-denger" value="削除" data-id="{{ $comment->id }}" onclick="deletePost(this);">
                    </form>
                    </li>
                  </ul>
                </div>
                @endforeach
                <br>
              </div>
            </div>
          </div>
        </div>

        <div class="comment card p-4">
          <div class="comment-header">
            <h4>コメント記入欄</h4>
          </div>
            <form method="POST" action="{{ route('comments.create',['id' => $post->id]) }}">
                @csrf
                <div class="form-group">
                  <label for="name">氏名</label>
                  <input type="text" class="form-control mb-4" name="name" id="name" />
                  
                  <label for="text">コメント</label>
                  <textarea type="text" class="form-control pb-5" name="text" id="text" /></textarea>
                </div>
                <div class="text-right">
                  <button type="submit" class="btn btn-primary">送信</button>
                </div>
            </form>
        </div>


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