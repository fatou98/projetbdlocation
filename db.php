







 <?php
$dsn = 'mysql:dbname=BDLocation;host=killrman007';
$user = 'root';
$password = 'killrman007';
try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}