<div id="login">
    <h1>Mensa Applikation</h1>
    <form action="index.php" method="POST" class="form">
        <small class="error"><?php if(isset($error)){echo $error;} ?></small><br>
        <label class="label">Benutzername</label><br>
        <input type="text" name="username" placeholder="Benutzername" class="input" required><br>
        <label class="label">Passwort</label><br>
        <input type="password" name="passwort" class="input" placeholder="Passwort" required><br>
        <input type="submit" value="login" name="login" class="button">
        <p class="link"><a href="#">Passwort vergessen</a></p>
        <p class="link"><a href="mailto:pebs@gmx.ch?cc=andreas@umbricht.net&AMP;subject=Support für die Mensa Applikation">Hilfe</a></p>
    </form>
    <hr class="separator">
    <p><small>&COPY; Peter Schmucki, pebs@gmx.ch</small></p>
    <p><small>&COPY; Andreas Umbricht, andreas@umbricht.net</small></p>
</div>

