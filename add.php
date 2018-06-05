<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Guestbook</title>
</head>

<body>
    <?php
        include_once 'settings.php';

        $name = $_POST['name'];
        $comment = $_POST['comment'];

        $date = date("l d-m-Y H:i");

        $sql = "INSERT INTO comments (`Id`, `Name`, `Comment`, `Date`) VALUES ('','$name','$comment','$date')";

        $result = mysqli_query($conn, $sql);

        if($result === TRUE) {
            echo "Thanks for the comment!";
        } else {
            echo '<br>';
            echo '<br>';
            echo "There was a error, pls try again in a minute or contact the administration";
        }
    ?>
    <br>
    <a href="index.php">Go back?</a>
</body>
</html>
