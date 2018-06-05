<?php
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
        // Check connection
        if ($conn == FALSE) {
            echo "Connection Failed: " . mysqli_connect_error();
            exit();
        }

        $sql = "SELECT * FROM comments";

        $result = mysqli_query($conn, $sql);

        $count = mysqli_num_rows($result);

        if ($count > 0) {
            // output data of each row
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
            echo '<center>' . "0 results, No comments has been created." . '</center>';
            echo '<br>';
            echo '<br>';
        }
        mysqli_close($conn);
    ?>
    <center><form action="add.php" method="POST">
        Name:<br>
        <input type="text" name="name"><br><br>
        Comment:<br>
        <textarea style="overflow:auto;resize:none" name="comment" rows="7" cols="50" maxlength="1000" required></textarea><br><br>
        <input type="submit" value="Send Comment">
    </form></center>
</body>
</html>
