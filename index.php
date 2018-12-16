<?php
    //Including the database connecting
    include_once 'settings.php';
?>
<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $sitename; ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <center><h1>This is our Guestbook</h1></center>
    <br>
    <center><h3>Here is what our customers have wrote about us!</h3></center>
    <br>

    <?php
        // Checking connection
        if ($conn == FALSE) {
            //If the connection fails then it sends out an error code.
            echo "Connection Failed: " . mysqli_connect_error();
            exit();
        }

        //If the connection not failed, then we are making a sql string 
        $sql = "SELECT * FROM comments";

        //Then we are sending the sql string to the database
        $result = mysqli_query($conn, $sql);

        //After we sent it, we will count the rows there matches with the sql string
        $count = mysqli_num_rows($result);

        //Checking if there is more then 0 rows
        if ($count > 0) {
            //Outputting the rows one by one
            while($row = mysqli_fetch_array($result)) {
                echo '<div class="comments">';

                echo $row['Comment'] . '<br><br>';

                echo '<div class="msg">' . $row['Name'] . '</div>' . '<br>';

                echo '<div class="msg">' . $row['Date'] . '</div>' .  '<br>';

                echo '</div>';

                echo '<br>';
                echo '<br>';


            }
            echo "</table>";
        } else {
            //If there is no rows, we will print out that there is no rows.
            echo '<center>' . "0 results, No comments has been created." . '</center>';
            echo '<br>';
            echo '<br>';
        }
        //Then we close the connection
        mysqli_close($conn);
    ?>
    <center><form action="add.php" method="POST">
        Name:<br>
        <input type="text" name="name"><br><br>
        Comment:<br>
        <textarea style="overflow:auto;resize:none" name="comment" rows="7" cols="50" maxlength="1000"></textarea><br><br>
        <input type="submit" value="Send Comment">
    </form></center>
</body>
</html>
