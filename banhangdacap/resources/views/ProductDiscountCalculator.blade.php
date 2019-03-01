<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="../public/css/style.css">
</head>
<body>
        <div id="content">
            <h1>Product Discount Calculator</h1>
            <form method="post" action="ProductDiscountCalculator">
                @csrf
                <div id="data">
                    <label>Product Description:</label>
                    <input type="text" name="description"><br>
                    <label>List Price:</label>
                    <input type="text" name="price"><br>
                    <label>Discount Percent:</label>
                    <input type="text" name="discount_percent">(%)<br>
                </div>
                <div id="buttons">
                    <label>&nbsp;</label>
                    <input type="submit" value="Calculate Discount">
                </div>
            </form>
        </div>
    
</body>
</html>