@extends('layout.master')

@section('content')
    <h1>กรุณากรอกข้อมูล</h1>
    <form action="/user/update/{{$post->id}}" method="post">
        @csrf
        <input type="text" name="name" value="{{$post->name}}" required>
        <button type="submit">บันทึก</button>
    </form>
@endsection
