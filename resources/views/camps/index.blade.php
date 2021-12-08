<html>
<head>
    <meta charset="UTF-8"/>
    <title>顯示所有陣營資料</title>
</head>
<body>
<h1>顯示所有陣營資料</h1>
<table border="1">
    <tr>
        <th>編號</th>
        <th>所屬陣營</th>
        <th>統治</th>
        <th>操作</th>
        <th>操作2</th>
    </tr>
    @foreach($camps as $camp)
        <tr>
            <td>{{$camp ->id}}</td>
            <td>{{$camp ->camp}}</td>
            <td>{{$camp ->rule}}</td>
            <td>
                <a href = "camps/{{$camp->id}}" >
                    詳細
                </a>
            </td>
            <td>
                <a href = "camps/{{$camp->id}}/edit">
                    修改
                </a>
            </td>
        </tr>
    @endforeach
</table>
</body>
</html>
