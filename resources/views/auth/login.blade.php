@extends('layout.master')

@section('content')
    <h1>กรุณากรอกข้อมูล</h1>
    <form action="/auth/doLogin" method="post">
        @csrf
        Email: <input type="email" name="email" required>
        Password: <input type="password" name="password" required>
        <button type="submit">บันทึก</button>
    </form>
@endsection
