<?php
if (isset($_POST['frmContact'])) {
  $nom = checkInput($_POST['nom']);
  $prenom = checkInput($_POST['prenom']);
  $mail = checkInput($_POST['mail']);
  $tel = checkInput($_POST['tel']);
  $mesg = checkInput($_POST['msg']);
  $erreur = array();

  if ($nom === "")
  array_push($erreur, "Le nom Bordel de merde");
  if ($prenom === "")
  array_push($erreur, "T'as honte de ton prénom");
  if ($mail === "")
  array_push($erreur, "Ca aussi ca mank");
  if ($tel === "")
  array_push($erreur, "Avoue, c'est celui du Berghoff !?!");
  if ($mesg === "")
  array_push($erreur, "Geben Sie Ihre Nachrichten ein");

  if (count($erreur) > 0) {
    $msg = '<ul>';
    for($i = 0 ; $i < count($erreur) ; $i++) {
      $msg .= '<li>';
      $msg .= $erreur[$i];
      $msg .= '</li>';
    }
    $msg .= '</ul>';
    echo $msg;
    require 'frmContact.php';
  }
  else {
    $sqlVerif = "SELECT COUNT(*) FROM fredeval
    WHERE mail='" . $mail ."'";
    $nbrOccurences = $pdo->query($sqlVerif)->fetchColumn();
    if ($nbrOccurences > 0) {
      echo "Geschlossene Tür";
    }
    else {
      $sql = "INSERT INTO fredeval (nom, prenom, mail, tel, msg) VALUES  ('" . $nom . "', '" . $prenom . "', '" . $mail ."', '" . $tel ."', '" . $mesg ."')";
      $query = $pdo->prepare($sql);
      $query->bindValue(':nom', $nom, PDO::PARAM_STR);
      $query->bindValue(':prenom', $prenom, PDO::PARAM_STR);
      $query->bindValue(':mail', $mail, PDO::PARAM_STR);
      $query->bindValue(':tel', $tel, PDO::PARAM_STR);
      $query->bindValue(':msg', $mesg, PDO::PARAM_STR);
      $query->execute();
      echo "Projektil gesendet";
    }
  }
}
else {
  $nom = $prenom = $mail = $tel = $mesg = "";
  require 'frmContact.php';
}
