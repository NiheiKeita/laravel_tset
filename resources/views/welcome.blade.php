<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>あんこ</title>
    <style>
        .red-text {
            color: red;
        }

        .blue-text {
            color: blue;
        }
        table {
                width: 30%; /* 表全体の横幅を50%に設定 */
                table-layout: fixed; /* 列の幅を均等に分配 */
                border-collapse: collapse; /* セルの間に余分なスペースをなくす */
            }
            th, td {
                border: 1px solid black; /* セルに枠線を表示 */
                padding: 8px; /* セル内の余白を設定 */
                text-align: left; /* テキストを左寄せにする */
            }
    </style>
</head>
<body>

    <h1>はろーあんこ！</h1>
    <p>これはチョーシンプルなあんこ</p>
    <p><font color="red">りんご</font></p>

    <p class="red-text">りんご２😀</p>
    <p class="blue-text">青りんご</p>

    <p>This is a happy face: 😀</p>
    <p>Another example: 🌍</p>

    <h2>あほすけテーブル</h2>
    <table border="1">
        <tr>
            <th class="red-text">ばか</th>
            <th>あほ</th>
            <th>まぬけ</th>
        </tr>
        <tr>
            <td>１</td>
            <td>２</td>
            <td>３</td>
        </tr>
        <tr>
            <td>赤</td>
            <td>青</td>
            <td>緑</td>
        </tr>
        <!-- 他の行やセルを追加 -->
    </table>

</body>
</html>
