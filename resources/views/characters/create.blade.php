@extends('app')

@section('title', '新增一筆角色資料')

@section('lol_contents')
    <h1>新增角色</h1>
    <form method="post" action="/characters">
    @csrf
    <table border="1">
        <tr>
            <td>角色名稱</td>
            <td><input type="text" name="name" /></td>
        </tr>
        <tr>
            <td>角色稱號</td>
            <td><input type="text" name="title" /></td>
        </tr>
        <tr>
            <td>所屬陣營</td>
            <td>
                <select name="cid" required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>位置</td>
            <td>
                <input type="radio" name="position" value="輔助"/>
                <label for="html">輔助</label>
                <input type="radio" name="position" value="射手"/>
                <label for="html">射手</label>
                <input type="radio" name="position" value="坦克"/>
                <label for="html">坦克</label>
                <input type="radio" name="position" value="法師"/>
                <label for="html">法師</label>
                <input type="radio" name="position" value="鬥士"/>
                <label for="html">鬥士</label>
                <input type="radio" name="position" value="刺客"/>
                <label for="html">刺客</label>
            </td>
        </tr>
        <tr>
            <td>難易度</td>
            <td>
                <select name="difficulty" required>
                    <option value="簡單">簡單</option>
                    <option value="普通">普通</option>
                    <option value="困難">困難</option>
                </select>
            </td>
        </tr>
    </table>
    <input type="submit" value="新增"/><input type="reset" value="重新輸入"/>


    </form>
@endsection
