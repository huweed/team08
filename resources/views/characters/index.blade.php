<html>
<head>
    <meta charset="UTF-8"/>
    <title>顯示所有角色資料</title>
</head>

<h1>顯示所有角色資料</h1>
<a href ="{{route('camps.index')}}" > 所有陣營 </a>
<a href ="{{route('characters.create')}}" > 新增角色 </a>
<a href ="{{route('characters.difficulty')}}" >  簡單 </a>
<table border="1">
    <tr>
        <th>編號</th>
        <th>角色名稱</th>
        <th>所屬陣營</th>
        <th>難易度</th>
        <th>操作</th>
        <th>操作2</th>
        <th>操作3</th>
    </tr>
    @foreach($characters as $character)
        <tr>
            <td>{{$character ->id}}</td>
            <td>{{$character ->name}}</td>
            <td>{{$character ->cid}}</td>
            <td>{{$character ->difficulty}}</td>
            <td>
                <a href = "characters/{{$character->id}}" >
                    詳細
                </a>

            </td>
            <td>
                <a href = "characters/{{$character->id}}/edit">
                    修改
                </a>
            </td>
            <td>
                <form method="post" action="characters/{{$character->id}}">
                    @csrf
                    @method("delete")
                    <input type="submit" value="刪除"/>
                </form>
            </td>
        </tr>
    @endforeach
</table>
</body>
</html>
