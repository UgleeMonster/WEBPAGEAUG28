

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Activity - Product Purchase</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-lg p-4">
        <h2 class="mb-4 text-center">🛒 Product Purchase</h2>
        <form method="POST" action="">
            <div class="mb-3">
                <label class="form-label">Customer Name</label>
                <input type="text" class="form-control" name="name" required value="">
            </div>
            <div class="mb-3">
                <label class="form-label">Quantity</label>
                <input type="number" class="form-control" name="quantity" required min="1" value="">
            </div>
            <div class="mb-3">
                <label class="form-label">Price per Item</label>
                <input type="number" class="form-control" name="price" required min="1" value="">
            </div>

            <div class="mb-3">
                <label class="form-label">Optional Add-ons</label><br>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="addons[]" value="Gift Wrap"
                        >
                    <label class="form-check-label">Gift Wrap (+₱50)</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="addons[]" value="Express Shipping"
                        >
                    <label class="form-check-label">Express Shipping (+₱100)</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="addons[]" value="Warranty"
                        >
                    <label class="form-check-label">Warranty (+₱200)</label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary w-100">Compute Total</button>
            <div class="mt-4">
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $name = htmlspecialchars($_POST['name']);
                    $quantity = (int)$_POST['quantity'];
                    $price = (float)$_POST['price'];
                    $addons = isset($_POST['addons']) ? $_POST['addons'] : [];

                    $base_total = $quantity * $price;
                    $addons_total = 0;

                    foreach ($addons as $addon) {
                        if ($addon == "Gift Wrap") {
                            $addons_total += 50;
                        } elseif ($addon == "Express Shipping") {
                            $addons_total += 100;
                        } elseif ($addon == "Warranty") {
                            $addons_total += 200;
                        }
                    }

                    $final_total = $base_total + $addons_total;

                    echo "<h4>Purchase Summary<h4>";
                    echo "<p><strong>Name:</strong> "  . $name . "</p>";
                    echo "<p><strong>Quantity:</strong> " . $quantity . "</p>";
                    echo "<p><strong>Price per Item:</strong> ₱" . number_format($price, 2) . "</p>";
                    echo "<p><strong>Base Total:</strong> ₱" . number_format($base_total, 2) . "</p>";
                    if (!empty($addons)) {
                        echo "<p><strong>Add-ons Total:</strong> ₱" . number_format($addons_total, 2) . "</p>";
                    } else {
                        echo "<p>No Add-ons Selected.</p>";
                    }
                    echo "<p><strong>Final Total Amount: ₱" . number_format($final_total, 2) . "<strong></p>";
                }
                ?>
        </form>

            </div>
</div>

</body>
</html>
