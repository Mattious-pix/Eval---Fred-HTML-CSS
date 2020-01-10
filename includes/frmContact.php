<form action="index.php?page=contact" method="post">

  <div class="imgomh">
    <img src="./assets/img/omaha.gif" title="omaha" width="80%"/>
  </div>

  <fieldset class="kontact">
    <legend class="munition">ÖFFNE DIE GREZEN</legend> <br></br>
    <div>
      <label class="nom" for="nom">Name :</label>
      <input type="text" name="nom" value="<?=$nom ?>" />
    </div>
    <div>
      <label class="prenom" for="prenom">Nachname :</label>
      <input type="text" name="prenom"  value="<?=$prenom ?>" />
    </div>
    <div>
      <label class="mail" for="mail">e-mail :</label>
      <input type="mail" name="mail"  value="<?=$mail ?>" />
    </div>
    <div>
      <label class="tel" for="tel">Telefon :</label>
      <input type="tel" name="tel"  value="<?=$mail ?>" />
    </div>
  </fieldset>

  <fieldset class="dasmsg">
    <div>
      <label class="msg" for="msg">Eine Nachricht:</label>
      <textarea name="msg" ><?=$mesg ?></textarea>
    </div>
  </fieldset>

  <fieldset class="clikclik">
    <input type="submit" value="Drücken Sie den Auslöser" />
  </fieldset>
  <input type="hidden" name="frmContact" />

  <audio autoplay loop; no repeat> <!--Evidemment le tout ne se fait pas en boucle. C'est qu'une mise en bouc ! -->
    <source src="./assets/sounds/Welcome_to_Europe.mp3" type="audio/mpeg">
      <source src="./assets/sounds/Welcome_to_Europe.mp3" type="audio/ogg">

      </audio>
    </form>
