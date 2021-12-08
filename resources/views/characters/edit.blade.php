<html>
<head>
    <meta charset="UTF-8"/>
    <title>顯示單一角色資料編輯</title>
</head>
<body>
<h1>顯示單一角色資料編輯</h1>
<form method="post" action="/characters/{{$character->id}}">
    @csrf
    @method("put")
    <table border="1">
        <tr>
            <td>編號</td>
            <td>{{$character ->id}}</td>
        </tr>
        <tr>
            <td>角色名稱</td>
            <td><input type="text" name="name" value="{{$character ->name}}"/></td>
        </tr>
        <tr>
            <td>角色稱號</td>
            <td><input type="text" name="title" value="{{$character ->title}}"/></td>
        </tr>
        <tr>
            <td>所屬陣營</td>
            <td><input type="text" name="cid" value="{{$character ->cid}}"/></td>
        </tr>
        <tr>
            <td>位置</td>
            <td><input type="text" name="position" value="{{$character ->position}}"/></td>
        </tr>
        <tr>
            <td>難易度</td>
            <td><input type="text" name="difficulty" value="{{$character ->difficulty}}"/></td>
        </tr>
    </table>
    <input type="submit" value="修改"/><input type="reset" value="重新輸入"/>
</form>



</body>
</html>
