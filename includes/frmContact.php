<form action="index.php?page=contact" method="post">
  <img src="./assets/img/omaha.gif" class="imgomh" title="omaha"/>

  <fieldset>
    <legend class="munition">Öffne die Grenzen</legend>
    <div>
      <label for="nom">Name :</label>
      <input type="text" name="nom" class="nom" value="<?=$nom ?>" />
    </div>
    <div>
      <label for="prenom">Nachname :</label>
      <input type="text" name="prenom" class="prenom" value="<?=$prenom ?>" />
    </div>
    <div>
      <label for="mail">e-mail :</label>
      <input type="mail" name="mail" class="mail" value="<?=$mail ?>" />
    </div>
    <div>
      <label for="tel">Telefon :</label>
      <input type="tel" name="tel" class="tel" value="<?=$mail ?>" />
    </div>
  </fieldset>

  <fieldset>
    <div>
      <label for="msg">Eine Nachricht:</label>
      <textarea name="msg" class="msg"><?=$msg ?></textarea>
    </div>
    <div>
      <input type="submit" value="Drücken Sie den Auslöser" />
    </div>
  </fieldset>
  <input type="hidden" name="frmContact" />

</form>
