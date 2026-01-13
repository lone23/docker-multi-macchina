<?php
$host = "db";
$user = "web_user";
$pass = "web_password";
$db   = "web_server";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}

$sql = "SELECT id, nome, email FROM utenti LIMIT 10";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Connessione DB Test</title>
    <link rel="stylesheet" href="style.css">
</head> 
<body>
    <h1>Test Connessione DB</h1>
    <table>
        <tr>
            <th>ID</th><th>Nome</th><th>Email</th>
        </tr>
        <?php
        if ($result && $result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>{$row['id']}</td><td>{$row['nome']}</td><td>{$row['email']}</td></tr>";
            }
        } else {
            echo "<tr><td colspan='3'>Nessun dato</td></tr>";
        }
        ?>
    </table>
</body>
</html>
<?php $conn->close(); ?>
