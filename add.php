<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Guestbook</title>
</head>

<body>
    <?php
        //Including the settings
        include_once 'settings.php';

        //Making the variables with the information the user put in the form in index.php
        $name = $_POST['name'];
        $comment = $_POST['comment'];

        //Making the date format. You can edit this if you want english date format, this is the danish date format
        $date = date("l d-m-Y H:i");

        //Making the sql string to insert the comment in the database.
        $sql = "INSERT INTO comments (`Id`, `Name`, `Comment`, `Date`) VALUES ('','$name','$comment','$date')";

        //Sending the sql string to the database
        $result = mysqli_query($conn, $sql);

        //Checking if the sql string was ran without errors
        if($result === TRUE) {
            //Then if not, we send a success message
            echo "Thanks for the comment!";
        } else {
            //If not, we send an error message
            echo '<br>';
            echo '<br>';
            echo "There was a error, pls try again in a minute or contact the administration";
        }
    ?>
    <br>
    <a href="index.php">Go back?</a>
</body>
</html>
