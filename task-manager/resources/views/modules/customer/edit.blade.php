<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="../public/css/style.css">
</head>
<body>
        <div id="content">
            <h1>Sữa Khách Hàng</h1>
            <form method="post">
                @csrf
                <div id="data">
                    <label>STT:</label>
                    <input type="text" name="STT" value="{{$customer['STT']}}" ><br>
                    <label>Họ và tên:</label>
                    <input type="text" name="name" value="{{$customer['name']}}" ><br>
                    <label>Số điện thoại:</label>
                    <input type="text" name="phone" value="{{$customer['phone']}}"><br>
                </div>
                <div id="buttons">
                    <label>&nbsp;</label>
                    <input type="submit" value="Sữa">
                </div>
            </form>
        </div>
    
</body>
</html>
