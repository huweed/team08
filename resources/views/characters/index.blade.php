<html>
<head>
    <meta charset="UTF-8"/>
    <title>顯示所有角色資料</title>
</head>
<body>
<h1>顯示所有角色資料</h1>
<table border="1">
    <tr>
        <th>編號</th>
        <th>角色名稱</th>
        <th>角色稱號</th>
        <th>操作</th>
        <th>操作2</th>
    </tr>
    @foreach($characters as $character)
        <tr>
            <td>{{$character ->id}}</td>
            <td>{{$character ->name}}</td>
            <td>{{$character ->title}}</td>
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
        </tr>
    @endforeach
</table>
</body>
</html>
