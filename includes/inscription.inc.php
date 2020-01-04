  <h1>Inschriften</h1>
  <?PHP

  if(isset($_POST['submit'])){

      $mail=checkInput($_POST['mail']);
      $mdp=checkInput($_POST['mdp']);
      $mdp=sha1($mdp);


      $connect = mysqli_connect("127.0.0.1", "root", "", "noelphp");

      if(!$connect){
          echo "Echec de la connexion ".mysqli_connect_error();
          exit();

      }


      $mailrequete="SELECT COUNT(*) FROM information WHERE mail='".$mail."'";
      $result = $connect->query($mailrequete);//requete par rapport a la bdd
      $row = $result->fetch_array(MYSQLI_NUM);//stock numeriqument dans un tableaux
      printf ("%s (%s)\n", $row[0], $row[0]);  //affiche le resultat du tableaux
      $result -> free_result();

      if($row[0]>0){

          echo "Déjà dans la base !";

      }

      else{

          echo "je l'insere dans la base";
          $requete = "INSERT INTO information (mdp, mail) VALUES ('".$mdp."','".$mail."')";
          $resultat = mysqli_query($connect,$requete);

      }

  }

  else{

      require 'frminscription.php';

  }
