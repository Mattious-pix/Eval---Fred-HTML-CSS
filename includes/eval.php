  <!DOCTYPE html>

  <html lang="fr">

  <head>

  <title>Achtung Panzer !</title>
  <link rel="shortcut icon" href="./assets/img/tank1.jpg" />

  <meta charset="utf-8" />
  <link rel="stylesheet" type="text/css" href="css/project.css"/>
  <link rel="stylesheet" type="text/css" href="css/header.css"/>
  <link rel="stylesheet" type="text/css" href="css/footer.css"/>

  <!------------------------------------------------->
  <body>

  <header role="header">
<div>
    <h1 id="titre"> Il était un petit Panzer I devenu Panther !</h1>
    <img src="./assets/img/Tigre.jpg">
</div>
    <nav>
      <ul>
        <li class="accueil"><a id="pacc" href="index.php?page=Accueil" title="Page d'accueil">Willkommen</a></li>

        <li class="histoire"><a id="phist" href="index.php?page=CV">Verrückte Geschichte</a>
         <ul class="menu-deroulant">
            <li><a id="frCV" href="includes/CV français.inc.php">French CV</a></li>
            <li><a id="espCV" href="includes/CV espagnol.inc.php">CV espaÑol</a></li>
         </ul>
        </li>

        <li class="contact"><a id="pcon" href="index.php?page=contact" title="Nous contacter">Kontact !</a></li>
        <li class="inscription"><a id="pins" href="index.php?page=inscription" title="Vous inscriver">Join Bestellungen</a></li>
        <li class="mentions"><a id="pmen" href="index.php?page=mentions" title="Les mentions légales">Rechtliche Hinweise</a></li>

      </ul>
    </nav>

  </header>

  <br><br>

  <div class="contenu gnrl">

    <h1 id=" chp 6">CHAPITRE VI :</h1>
    <br><br>
    <!---Mais qu'est ce donc que tout ceci ?--->

<div id="titre chp">

  <h2 id="princis"> Des principautés nouvelles acquises par les armes et par l’habileté de l’acquéreur.</h2>

<p id="text chp 6"> Qu’on ne s’étonne point si, en parlant de principautés tout à fait nouvelles de princes et d’État, j’allègue de très-grands exemples. Les hommes marchent presque toujours dans des sentiers déjà battus ; presque toujours ils agissent par imitation ; mais il ne leur est guère possible de suivre bien exactement les traces de celui qui les a précédés, ou d’égaler la vertu de celui qu’ils ont entrepris d’imiter. Ils doivent donc prendre pour guides et pour modèles les plus grands personnages, afin que, même en ne s’élevant pas au même degré de grandeur et de gloire, ils puissent en reproduire au moins le parfum. Ils doivent faire comme ces archers prudents, qui, jugeant que le but proposé est au delà de la portée de leur arc et de leurs forces, visent encore plus loin, pour que leur flèche arrive au point qu’ils désirent atteindre.</p>

</div>

<!--------------------------------------->

<!--Caractéristiques-->

<div id="presentation">
  <br>
  <h1 id="caractech">Caractéristiques techniques !</h1>

    <div id="panzershreck">
      <img src="./assets/img/Panzershreck.jpg"/>
      <p> Ca envoi du lourd hein ! Feuer </p>
    </div>

  <!--Panzerkampfwagen-->
    <div id="Pzkwg">
      <h1> Panzerkampfwagen</h1>
      <p>Ca veut dire : <br />TAAAANK !</p>
    </div>

  <!--Panzerfaust-->
      <div id="Pzrft">
        <h2> <mark> Panzerfaust </mark> </h2>

        <p> Weight : 2.9kg </p>
        <p> Range : 100m </p>
        <p> Penetration : 200m à 30m </p>
      </div>

    <div id="Pzrsch">
        <h2> <mark> Panzerschreck </mark> </h2>

        <p> Weight : 5.1kg </p>
        <p> Range : 150m </p>
        <p> Penetration : 150m à 200m é_-_é</p>
    </div>
</div>

<!--Fin caractéristiques-->

<!--Footer-->
<footer>
  <?php
  $year = date('Y');
?>
<p>&copy; <?=$year ?> Klaus Duval Korpo</p>
</footer>
</body>
</html>
</footer>


</div>
