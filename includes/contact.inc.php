<?php
if (isset($_POST['frmContact'])) {
  $nom = checkInput($_POST['nom']);
  $prenom = checkInput($_POST['prenom']);
  $mail = checkInput($_POST['mail']);
  $tel = checkInput($_POST['tel']);
  $msg = checkInput($_POST['msg']);
  $erreur = array();

  if ($nom === "")
    array_push($erreur, "Veuillez saisir votre nom");
  if ($prenom === "")
    array_push($erreur, "Veuillez saisir un prénom");
  if ($mail === "")
    array_push($erreur, "Veuillez saisir une adresse mail");
    if ($tel === "")
    array_push($erreur, "Veuillez saisir un numéro de téléphone");
  if ($msg === "")
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
        $sql = "INSERT INTO fredeval (nom, prenom, mail, tel, msg) VALUES  ('" . $nom . "', '" . $prenom . "', '" . $mail ."', '" . $tel ."', '" . $msg ."')";
        $query = $pdo->prepare($sql);
        $query->bindValue(':nom', $nom, PDO::PARAM_STR);
        $query->bindValue(':prenom', $prenom, PDO::PARAM_STR);
        $query->bindValue(':mail', $mail, PDO::PARAM_STR);
        $query->bindValue(':tel', $tel, PDO::PARAM_STR);
        $query->bindValue(':msg', $msg, PDO::PARAM_STR);
        $query->execute();
        echo "Projektil gesendet";
        }
      }
    }
    else {
      $nom = $prenom = $mail = $tel = $msg = "";
      require 'frmContact.php';
    }
