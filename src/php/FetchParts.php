<!DOCTYPE html>
<html>
<body>
<?php
        $servername = "localhost";
        $username = "root";
        $password = "ZCyRjkU4JWTRnmQy";
        $dbname = "aerobasegroup";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT * FROM nsn LIMIT 25";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                echo "Name: " . $row["name"]. " " . $row["niin"]. "<br>";
            }
        } else {
            echo "0 results";
        }

        mysqli_close($conn);
?>

</body>
</html>