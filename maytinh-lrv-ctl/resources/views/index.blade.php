<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="../public/css/style.css">
</head>
<body>
        <div id="content">
            <h1>Thêm Khách Hàng</h1>
            <form method="get" >
                @csrf
                <div id="data">
                    
                    <label>Nhâp a:</label>
                    <input type="number" name="soa"><br>
                    <label>Nhập b:</label>
                    <input type="number" name="sob"><br>
                </div>
                <div id="buttons">
                    <label>&nbsp;</label>
                    <input type="submit" value="cong" name="ketqua">
                    <input type="submit" value="tru" name="ketqua">
                    <input type="submit" value="nhan" name="ketqua">
                    <input type="submit" value="chia" name="ketqua">
                </div>
            </form>
        </div>
        ket qua :{{$ketqua}}
    
</body>
</html>
