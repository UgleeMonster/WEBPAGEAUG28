<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Select your Facorite Subjects</h2>
    <form action="" method="POST">
        <input type="checkbox" name="items[]" value="30">Gucshich (secretprice)<br>
        <input type="checkbox" name="items[]" value="50">Balenbaga (riching)<br>
        <input type="checkbox" name="items[]" value="60">Luis Tulmok (expenshive)<br>
        <input type="checkbox" name="items[]" value="20">Roice (very expemshive)<br>
        <input type="checkbox" name="items[]" value="80">BIG BLACK CLOCK (super duper expenshive)<br>
        <input type="checkbox" name="items[]" value="2">Ginger (200 of them cost only 2 pounds)<br>
        <input type="submit" value="submit" name="submit" >
    </form>
    <?php
    if (isset($_POST['submit'])){
        if (!empty($_POST['items'])){
            $total = 0;
            echo "<h3>You have selected: </h3>";

            foreach($_POST['items'] as $item){
                echo "P$items<br>";
                $total += $item;
            }
        }
    }
    else {
        echo "<h3>No Rich Milliunier Eyy eyy.... BOMBOOOCLATTTT selected.</h3>";
    }
    ?>
</body>
</html>