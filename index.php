<!DOCTYPE html>
<html>
<head>
    <title>Docker Compose</title>
</head>
<body>
    <h1>Hello World con Docker Compose</h1>
    <p>Adrian De Jesus Matricula: 2022-2041</p>
    <?php
        $servername = getenv("MYSQL_HOST");
        $username = getenv("MYSQL_USER");
        $password = getenv("MYSQL_PASSWORD");
        $database = getenv("MYSQL_DATABASE");

        $conn = new mysqli($servername, $username, $password, $database);

        if ($conn->connect_error) {
            die("Conexión a MySQL fallida: " . $conn->connect_error);
        } else {
            echo "Conexión a MySQL exitosa!";
        }
    ?>
</body>
</html>