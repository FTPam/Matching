<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css.css">
    <title>西南交通大学换课匹配系统</title>
</head>
<body>
<script src="forIndex.js"></script>

<div class="head">
    <noscript>本系统需要JavaScript的支持，请您使用支持JavaScript的浏览器或启用浏览器的JavaScript解析器</noscript>
    <h1>西南交通大学换课匹配系统</h1>
    <p>请填写下方表格，并点击“提交”按钮提交信息，<br/>
        我们将会在为您匹配到换课对象后发邮件通知您。<br/>
        目前仅支持相同课程代码的换课匹配！</p>
</div>

<div class="body">
    课程代码：<input type="text" id="classCode" style="width:200px"><br/><br/>
    <!--replace(/(?:(?:^|.*;\s*)classCode\s*\=\s*([^;]*).*$)|^.*$/, "$1") 引用自MDN document-->
    <script >document.getElementById('classCode').value=document.cookie.replace(/(?:(?:^|.*;\s*)classCode\s*\=\s*([^;]*).*$)|^.*$/, "$1");</script>
    <table border="0" class="indexTable" valign="middle">
        <tr>
            <td align="center" class="indexTableTitle">你当前的上课时间</td>
            <td align="left" class="indexTableTitle"><span id="myTime"><script>createSelectionBox('myTime')</script></span>
            </td>
        </tr>
    </table>
    <hr/>
    <table border="0" class="indexTable" valign="middle">
        <tr>
            <td align="center" class="indexTableTitle">你想要的上课时间</td>
            <td align="left" class="indexTableTitle"><span id="wantTime"><script>createSelectionBox('wantTime')</script></span>
                <button id="addButton" onclick="addTimeSelectionBox('wantTime');"> +</button>
            </td>
        </tr>
    </table>

    <br/><br/>
    <input type="submit" style="width: 100px" onclick="checkForm();">
    </form>
</div>
</body>
</html>