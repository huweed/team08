<html>
<head>
    <meta charset="UTF-8"/>
    <title>顯示單一陣營資料</title>
</head>
<body>
<h1>顯示單一陣營資料</h1>
<table border="1">
    <tr>
        <td>編號</td>
        <td>{{$camp ->id}}</td>
    </tr>
    <tr>
        <td>所屬陣營</td>
        <td>{{$camp ->camp}}</td>
    </tr>
    <tr>
        <td>統治</td>
        <td>{{$camp ->rule}}</td>
    </tr>
    <tr>
        <td>主要城市</td>
        <td>{{$camp ->city}}</td>
    </tr>
    <tr>
        <td>整體環境</td>
        <td>{{$camp ->environment}}</td>
    </tr>
    <tr>
        <td>科技水平</td>
        <td>{{$camp ->level}}</td>
    </tr>
</table>
</body>
</html>
