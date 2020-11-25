<html>
    <body>
        <h1>Connect to MariaDB Servers</h1>
        <?php
            $dbhosts = array("db_log", "db_user", "db_dict", "db_not_exist");
            $dbuser = "root";
            $dbpassword = "admin";

            foreach($dbhosts as $host){
                $conn = mysqli_connect($host, $dbuser, $dbpassword);
                echo "<li>";
                if (! $conn) {
                    die($host .": Could not connect: " . mysqli_error($conn));
                }
                echo $host . ": Connected successfully";
                echo "</li>\n";
                mysqli_close($conn);
            }
        ?>
    </body>
</html>