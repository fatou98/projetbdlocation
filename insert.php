<?php
/**
 * Created by PhpStorm.
 * User: camara
 * Date: 1/19/18
 * Time: 7:31 PM
 */
require_once("db.php");
print_r($_POST);

global $dbh;
$stmt = $dbh->prepare("INSERT INTO Contrat (datesignature, datedebutcontrat, datefincontrat, etat, idutilisateur) VALUES (?, ?, ?, ?, ?)");
$stmt->bindParam(1, $_POST['date_sign']);
$stmt->bindParam(2, $_POST['date_debut']);
$stmt->bindParam(3, $_POST['date_fin']);
$stmt->bindParam(4, $_POST['etat']);
$stmt->bindParam(5, $idUilisateur);
$idUilisateur = 30;
$stmt->execute();