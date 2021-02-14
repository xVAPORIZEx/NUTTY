@extends('layout.master')

@section('content')
    <h1>กรุณากรอกข้อมูล</h1>
    <form action="/user/store" method="post">
        @csrf
        Name: <input type="text" name="name" required>
        Username: <input type="text" name="username" required>
        Email: <input type="text" name="email" required>
        Password: <input type="text" name="password" required>
        <button type="submit">บันทึก</button>
    </form>
@endsection
