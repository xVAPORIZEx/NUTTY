@extends('layout.master')

@section('content')
    <h1>ชื่อบุคคล</h1>
    <a href="/post/create">+เพิ่มชื่อใหม่</a>
    <table>
        <thead>
            <tr>
                <td>ลำดับ</td>
                <td>ชื่อ</td>
                <td>อีเมลล์</td>
                <td>สร้างเมื่อ</td>
                <td>จัดการ</td>
            </tr>
        </thead>
        <tbody>
            @foreach($post as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->created_at}}</td>
                <td><a href="/post/edit/{{$item->id}}">แก้ไข</a> | <a href="/post/delete/{{$item->id}}">ลบ</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
