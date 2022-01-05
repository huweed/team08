@extends('app')

@section('title', '顯示單一角色資料')

@section('lol_contents')
    <h1>顯示單一角色資料</h1>
    <a href="{{ route('characters.index') }}">所有角色</a>
    <table border="1">
    <tr>
        <td>編號</td>
        <td>{{$character ->id}}</td>
    </tr>
    <tr>
        <td>角色名稱</td>
        <td>{{$character ->name}}</td>
    </tr>
    <tr>
        <td>角色稱號</td>
        <td>{{$character ->title}}</td>
    </tr>
    <tr>
        <td>所屬陣營</td>
        <td>{{$character ->cid}}</td>
    </tr>
    <tr>
        <td>位置</td>
        <td>{{$character ->position}}</td>
    </tr>
    <tr>
        <td>難易度</td>
        <td>{{$character ->difficulty}}</td>
    </tr>
</table>
@endsection
