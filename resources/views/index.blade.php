@extends('layout')

@section('content')

<div>
<h3><a href="{{ route('create') }}" style="color: skyblue;">メモを作成</a></h3>
@foreach($memos as $memo)
<p>{{ $memo->content }}
<span><a href="{{ route('edit',['id' => $memo->id]) }}">編集</a></span>
<span><a href="{{ route('delete',['id' => $memo->id]) }}">削除</a></span>
</p>
@endforeach
</div>
@endsection