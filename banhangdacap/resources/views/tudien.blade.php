<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="../public/css/style.css">
</head>
<body>
    <div id="content">
        <h1>Tu Dien</h1>
        <form method="post" action="tudien">
            @csrf
            <div id="data">
                <label>Tieng anh:</label>
                <input type="text" name="anh"><br>
                <div id="buttons">
                    <label>&nbsp;</label>
                    <input type="submit" value="dich">
                </div>
            </div>

        </form>
    </div>
    
</body>
</html>