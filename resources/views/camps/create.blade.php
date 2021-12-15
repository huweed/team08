<html>
<head>
    <meta charset="UTF-8"/>
    <title>顯示新增陣營資料</title>
</head>
<body>
<h1>顯示新增陣營資料</h1>
    @csrf
    <table border="1">
        <tr>
            <td>所屬陣營</td>
            <td><input type="text" name="camp" /></td>
        </tr>
        <tr>
            <td>統治</td>
            <td><input type="text" name="rule" /></td>
        </tr>
        <tr>
            <td>主要城市</td>
            <td><input type="text" name="city" /></td>
        </tr>
        <tr>
            <td>整體環境</td>
            <td><input type="text" name="environment" /></td>
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


</body>
</html>
