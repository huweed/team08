<html>
<head>
    <meta charset="UTF-8"/>
    <title>顯示單一陣營資料編輯</title>
</head>
<body>
<h1>顯示單一陣營資料編輯</h1>
<form method="post" action="/camps/{{$camp->id}}">
    @csrf
        @method("put")
    <table border="1">
        <tr>
            <td>編號</td>
            <td>{{$camp ->id}}</td>
        </tr>
        <tr>
            <td>所屬陣營</td>
            <td><input type="text" name="camp" value="{{$camp ->camp}}"/></td>
        </tr>
        <tr>
            <td>統治</td>
            <td><input type="text" name="rule" value="{{$camp ->rule}}"/></td>
        </tr>
        <tr>
            <td>主要城市</td>
            <td><input type="text" name="city" value="{{$camp ->city}}"/></td>
        </tr>
        <tr>
            <td>整體環境</td>
            <td><input type="text" name="environment" value="{{$camp ->environment}}"/></td>
        </tr>
        <tr>
            <td>科技水平</td>
            <td>
            <select name="level" required>
                <option value="低">低</option>
                <option value="中">中</option>
                <option value="高">高</option>
                <option value="未知">未知</option>
            </select>
            </td>
        </tr>
    </table>
    <input type="submit" value="修改"/><input type="reset" value="重新輸入"/>
</form>

</body>
</html>
