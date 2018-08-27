<?php
// get the data from the form
$product_description = $_POST['product_description'];
$list_price = $_POST['list_price'];
$discount_percent = $_POST['discount_percent'];
if ($product_description != "Guitars" && $product_description != "Pianos" && $product_description != "Other") {
	echo '<h1> Product description must be Guitars or Pianos or Other <h1>';
	exit();
}

if (!is_numeric($list_price) || $list_price < 0) {
	echo '<h1> List price must be a positive number.<h1>';
	exit();
}

if (!is_numeric($discount_percent) || $discount_percent < 0 || $discount_percent > 100) {
	echo '<h1> Discount percent must be a positive number less than 100. <h1>';
	exit();
}

// calculate the discount
$discount = $list_price * $discount_percent * .01;
$discount_price = $list_price - $discount;

// apply currency formatting to the dollar and percent amounts
$list_price_formatted = "$" . number_format($list_price, 2);
$discount_percent_formatted = $discount_percent . "%";
$discount_formatted = "$" . number_format($discount, 2);
$discount_price_formatted = "$" . number_format($discount_price, 2);

// escape the unformatted input
$product_description_escaped = htmlspecialchars($product_description);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>


<body>
    <main>
        <h1>Product Discount Calculator</h1>

        <label>Product Description:</label>
        <span><?php echo $product_description_escaped; ?></span><br>

        <label>List Price:</label>
        <span><?php echo $list_price_formatted; ?></span><br>

        <label>Standard Discount:</label>
        <span><?php echo $discount_percent_formatted; ?></span><br>

        <label>Discount Amount:</label>
        <span><?php echo $discount_formatted; ?></span><br>

        <label>Discount Price:</label>
        <span><?php echo $discount_price_formatted; ?></span><br>
        
        <nav>
        	<button onclick="goBack()">Return to Hell</button>
        </nav>
        <script>
			function goBack() {
				window.history.back();
			}
		</script>
    </main>
</body>
</html>