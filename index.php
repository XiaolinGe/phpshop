<html>
<head>

    <?php include("header.php"); ?>

</head>

<body>
<div>
    <div class="main_1">

        <div style="float:right; position:absolute; top:10px; right:10px;">
            <button class="login_button">Log In</button>
            <a href="registration.html" target="_blank">
                <button class="login_button">Sign Up</button>
            </a>
            <form></form>
            <div style="clear:both"></div>
            <table>
                <tr>
                    <td class="login_text">Name:</td>
                    <td><input style="text" class="login_input"/></td>
                </tr>
                <tr>
                    <td class="login_text">Password:</td>
                    <td><input style="text" class="login_input"/></td>
                </tr>
            </table>
        </div>


        <p>VEREX Electronics</p>
    </div>
    <div>
        <?php include("top.php"); ?>
        <div>
            <?php include("menu.php"); ?>
            <table border="5">
                <?php
                try {
                    $num = 1;
                    $resultSet = $dbh->query('SELECT * from product where isHot = 1');
                    $number_of_rows = $resultSet->rowCount();
                    foreach ($resultSet as $row) {
                        if ($num % 4 == 1) {
                            echo "<tr>";
                        }
                        ?>

                        <td><img src="<?php echo $row['pic'] ?>" width="245px" height="275px"/>

                            <h2><?php echo $row['price'] ?></h2>

                            <p><?php echo $row['description'] ?></p>
                        </td>
                        <?php
                        if ($num % 4 == 0 || $num == $number_of_rows) {
                            echo "</tr>";
                        }
                        $num++;
                    }
                    $dbh = null;
                } catch (PDOException $e) {
                    print "Error!: " . $e->getMessage() . "<br/>";
                    die();
                }
                ?>
            </table>
        </div>
    </div>
</div>
</body>
</html>
