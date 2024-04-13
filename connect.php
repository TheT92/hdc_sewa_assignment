<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <?php 
        $conn = mysqli_connect("localhost", "root", "root"); 

        while($row = mysqli_fetch_array($result)) {
            echo"<h1>{$row['film_title']}</h1>";
        }

        $capital['ireland'];
        $capital['france'];
        $capital['usa'];
        extract($capital);
        $ireland;
        $france;
        $usa;


        while($row = mysqli_fetch_array($result)) {
            extract($row);
            echo"<h1>$film_title</h1>";
        }

        if(!empty($_POST["film_title"])) {
            $film_title = $_POST["film_title"];
        } else {
        }
    ?>
</body>

</html>