@extends('layout.master')

@section('content')
    <h1>กรุณากรอกข้อมูล</h1>
    <form action="/post/store" method="post">
        @csrf
        หัวข้อข่าว: <input type="text" name="title" required><br>
        รูปประจำข่าว: <input type="file" name="thumbnail" ><br>
        หมวดหมู่ข่าว:
        <select name="category_id" id="">
            <option value="">เอามาจากฐานข้อมูล</option>
        </select><br>
        รายละเอียดข่าว:
        <textarea name="detail" id="" cols="30" rows="10"></textarea><br>
        <button type="submit">บันทึก</button>
    </form>
@endsection
