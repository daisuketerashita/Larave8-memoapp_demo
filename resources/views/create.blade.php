@extends('layout')

@section('content')
<form action="{{ route('store') }}" method="post">
@csrf
@if($errors->any())
    @foreach($errors->all() as $error)
    <p>{{ $error }}</p>
    @endforeach
@endif
<textarea name="content" id="" cols="30" rows="10"></textarea>
<button type="submit">作成</button>
<a href="{{ route('index') }}">戻る</a>
</form>
@endsection