<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pizza Shop Ordering System</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
  <div class="card shadow-lg p-4">
    <h2 class="text-center mb-4">Pizza Shop Order Form</h2>
    <form method="POST">
      <div class="mb-3">
        <label class="form-label">Customer Name</label>
        <input type="text" class="form-control" name="name" required
        value="<?php if (isset($_POST['name'])) echo htmlspecialchars($_POST['name']); ?>">
      </div>
      <div class="mb-3">
        <label class="form-label">Contact Number</label>
        <input type="text" class="form-control" name="contact" required
        value="<?php if (isset($_POST['contact'])) echo htmlspecialchars($_POST['contact']); ?>">
      </div>
      <div class="mb-3">
        <label class="form-label">Pizza Size</label><br>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="size" value="Small" required
          <?php if (isset($_POST['sizes']) && in_array('Small', $_POST['sizes'])) echo 'checked'; ?>>
          <label class="form-check-label">Small (₱150)</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="size" value="Medium" required
          <?php if (isset($_POST['sizes']) && in_array('Medium', $_POST['sizes'])) echo 'checked'; ?>>
          <label class="form-check-label">Medium (₱250)</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="size" value="Large" required
          <?php if (isset($_POST['sizes']) && in_array('Large', $_POST['sizes'])) echo 'checked'; ?>>
          <label class="form-check-label">Large (₱350)</label>
        </div>
      </div>
      <div class="mb-3">
        <label class="form-label">Extra Toppings (+₱30 each)</label><br>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="toppings[]" value="Pepperoni"
            <?php if (isset($_POST['toppings']) && in_array('Pepperoni', $_POST['toppings'])) echo 'checked'; ?>>
            <label class="form-check-label">Pepperoni</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="toppings[]" value="Mushrooms"
            <?php if (isset($_POST['toppings']) && in_array('Mushrooms', $_POST['toppings'])) echo 'checked'; ?>>
            <label class="form-check-label">Mushrooms</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="toppings[]" value="Onions"
            <?php if (isset($_POST['toppings']) && in_array('Onions', $_POST['toppings'])) echo 'checked'; ?>>
            <label class="form-check-label">Onions</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="toppings[]" value="Extra Cheese"
            <?php if (isset($_POST['toppings']) && in_array('Extra Cheese', $_POST['toppings'])) echo 'checked'; ?>>
            <label class="form-check-label">Extra Cheese</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="toppings[]" value="Sausage"
            <?php if (isset($_POST['toppings']) && in_array('Sausage', $_POST['toppings'])) echo 'checked'; ?>>
            <label class="form-check-label">Sausage</label>
        </div>
        </div>
      <div class="mb-3">
        <label class="form-label">Choose a Drink</label>
        <select class="form-select" name="drink" required>
          <option value="Coke">Coke (₱50)
            <?php if (isset($_POST['drinks']) && in_array('Coke', $_POST['drinks'])) echo 'checked'; ?>
          </option>
          <option value="Sprite">Sprite (₱45)
            <?php if (isset($_POST['drinks']) && in_array('Sprite', $_POST['drinks'])) echo 'checked'; ?>
          </option>
          <option value="Iced Tea">Iced Tea (₱40)
            <?php if (isset($_POST['drinks']) && in_array('Iced Tea', $_POST['drinks'])) echo 'checked'; ?>
          </option>
          <option value="Water">Water (₱20)
            <?php if (isset($_POST['drinks']) && in_array('Water', $_POST['drinks'])) echo 'checked'; ?>
          </option>
        </select>
      </div>
      <div class="text-center">
        <button type="submit" name="submit" class="btn btn-primary">Order Now</button>
      </div>
    </form>
  </div>

<?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = htmlspecialchars($_POST['name']);
                $contact = (float)$_POST['contact'];
                $toppings = isset($_POST['toppings']) ? $_POST['toppings'] : [];
                $sizes = $_POST['size'];
                $drinks = $_POST['drink'];
                $pizza_total = 0;
                $drink_total = 0;
                $toppings_total = 0;

                if ($sizes == "Small") {
                    $pizza_total = 150;
                } elseif ($sizes == "Medium") {
                    $pizza_total = 250;
                } elseif ($sizes == "Large") {
                    $pizza_total = 350;
                }
                
                foreach ($toppings as $topping) {
                    if ($topping == "Pepperoni") {
                        $toppings_total += 30;
                    } elseif ($topping == "Mushrooms") {
                        $toppings_total += 30;
                    } elseif ($topping == "Onions") {
                        $toppings_total += 30;
                    } elseif ($topping == "Extra Cheese") {
                        $toppings_total += 30;
                    } elseif ($topping == "Sausage") {
                        $toppings_total += 30;
                    }
                }

                if ($drinks == "Coke") {
                    $drink_total = 50;
                } elseif ($drinks == "Sprite") {
                    $drink_total = 45;
                } elseif ($drinks == "Iced Tea") {
                    $drink_total = 40;
                } elseif ($drinks == "Water") {
                    $drink_total = 20;
                }

                $final_total = $pizza_total + $toppings_total + $drink_total;

                echo '<div class="alert alert-success mt-4">';
                echo "<h3>Purchase Summary</h3>";
                echo "<p><strong>Name:</strong> "  . $name . "</p>";
                echo "<p><strong>Contact:</strong> " . $contact . "</p>";
                echo "<p><strong>Pizza Size:</strong> ₱" .$sizes. "</p>";
                if (!empty($addons)) {
                    echo "<p><strong>Toppings Total:</strong> ₱" . number_format($toppings_total, 2) . "</p>";
                } 
                if (isset($_POST['submit'])){
                    if (!empty($_POST['toppings'])){
                        echo "<h3>You have selected: </h3>";

                        foreach($_POST['toppings'] as $toppings){
                            echo "$toppings<br><br> ";
                        }
                }
                else {
                    echo "<p>No Add-ons Selected.</p>";
                }
                echo "<p><strong>Drink:</strong> ₱" .$drinks. "</p>";
                echo "<p><strong>Total Amount: ₱" . $final_total. "</strong></p>";
                echo '</div>';
            }
        }
        
        ?>
    </div>
  </div>

</body>
</html>
