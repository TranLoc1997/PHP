<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="../public/css/style.css">
</head>
<body>
        <div id="content">
            <h1>Thêm Khách Hàng</h1>
            <form method="post" action="them">
                @csrf
                <div id="data">
                    
                    <label>Họ và tên:</label>
                    <input type="text" name="name"><br>
                    <label>Số điện thoại:</label>
                    <input type="text" name="phone"><br>
                </div>
                <div id="buttons">
                    <label>&nbsp;</label>
                    <input type="submit" value="Them">
                </div>
            </form>
        </div>
    
</body>
</html>
