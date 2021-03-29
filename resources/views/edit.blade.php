@extends('layout')

@section('content')
<form action="{{ route('update',['id' => $memo->id]) }}" method="post">
@csrf
<textarea name="content" id="" cols="30" rows="10">{{ $memo->content }}</textarea>
<button type="submit">編集</button>
<a href="{{ route('index') }}">戻る</a>
</form>
@endsection