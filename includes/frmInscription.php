<form action="index.php?page=inscription" method="post">

  <div class="imghtch">
    <img src="./assets/img/hotchkiss.gif" class="imghtch" title="hotchkiss"/>
  </div>

  <fieldset class="michelfield">
    <legend class="amour">Anmeldung</legend>
    <div>
      <label class="monmail" for="email">e-mail</label>
      <input type="text" name="email" />
    </div>
    <div>
      <label class="monpass"for="pwd">Passwort</label>
      <input type="password" name="pwd" />
    </div>
    <input type="submit" value="Eine Nachricht" />
    <input type="hidden" name="frmInscription" />
  </fieldset>

</form>
