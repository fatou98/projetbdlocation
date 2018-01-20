<?php
require_once("db.php");
print_r($_POST);

global $dbh;
$stmt = $dbh->prepare("DELETE FROM Contrat WHERE (datesignature, datedebutcontrat, datefincontrat, etat, idutilisateur) VALUES (?, ?, ?, ?, ?)");
$stmt->bindParam(1, $_POST['datesignat']);
$stmt->bindParam(2, $_POST['datedebut']);             // Oooops!! thiangg naa: Requete pour supprimer un contract//
$stmt->bindParam(3, $_POST['datefin']);
$stmt->bindParam(4, $_POST['etat']);
$stmt->bindParam(5, $idUilisateur);
$idUilisateur = n;
$stmt->execute();






/*
   Requete pour Update un Contact
  
function updateUser($id, $login, $password)
{
    $db=getConnection();
    $sql='UPDATE user SET login=?,password=? WHERE id=?';
    $resultat=$db->prepare($sql);
    $resultat->execute(array($login, $password, $id));
    return $resultat;
}*/