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
        <input type="checkbox" name="subject[]" value="Math">Mathematics<br>
        <input type="checkbox" name="subject[]" value="Science">Science<br>
        <input type="checkbox" name="subject[]" value="Physics">Physics<br>
        <input type="checkbox" name="subject[]" value="Geography">Geography<br>
        <input type="checkbox" name="subject[]" value="Chemistry">Chemistry<br>
        <input type="checkbox" name="subject[]" value="Arts">Art<br>
        <input type="submit" value="Submit" namne="submit">
    </form>
    <?php
    if (isset($_POST['subject'])) {
        if (!empty($_POST['subject'])){
            $total = 0;
        echo "<h3>You have selected: </h3>";
        foreach ($POST['subjects'] as $subject){
            echo $subject; "<br>";
        }
    }
    } 
    else {
        echo "<h3>No subjects selected.</h3>";
    }
    ?>
</body>
</html>