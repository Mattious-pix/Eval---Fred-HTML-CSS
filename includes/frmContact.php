<img src="./assets/img/Somua S-35.jpg">
  <form action="index.php?page=contact" method="post">
    <fieldset>
      <legend>Öffne die Grenzen</legend>
    <div>
      <label for="nom">Name :</label>
      <input type="text" name="nom" id="nom" value="<?=$nom ?>" />
    </div>
    <div>
      <label for="prenom">Nachname :</label>
      <input type="text" name="prenom" id="prenom" value="<?=$prenom ?>" />
    </div>
    <div>
      <label for="mail">e-mail :</label>
      <input type="email" name="mail" id="mail" value="<?=$mail ?>" />
    </div>
    </fieldset>
    <fieldset>
    <div>
      <label for="msg">Eine Nachricht:</label>
      <textarea name="msg" id="msg"><?=$msg ?></textarea>
    </div>
    <div>
      <input type="submit" value="Drücken Sie den Auslöser" />
    </div>
    </fieldset>
    <input type="hidden" name="frmContact" />
  </form>
