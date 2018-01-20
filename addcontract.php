<?php
require_once("db.php");
print_r($_POST);

global $dbh;
$stmt = $dbh->prepare("INSERT INTO Contrat (datesignature, datedebutcontrat, datefincontrat, etat, idutilisateur) VALUES (?, ?, ?, ?, ?)");
$stmt->bindParam(1, $_POST['datesignat']);
$stmt->bindParam(2, $_POST['datedebut']);
$stmt->bindParam(3, $_POST['datefin']);
$stmt->bindParam(4, $_POST['etat']);
$stmt->bindParam(5, $idUilisateur);
$idUilisateur = n;
$stmt->execute();