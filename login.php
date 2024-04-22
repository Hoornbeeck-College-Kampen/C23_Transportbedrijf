<?php
include 'inc/header.php';
?>
<main class="main-content">
    <div id="login">
        <div>
            <h1>Login</h1>
            <form action="authorisatie.php" method="post" class="frmlogin">
                <label for="gebruikersnaam">Gebruiker</label>
                <input type="text" name="gebruikersnaam" id="gebruikersnaam" required>
                <label for="wachtwoord">Wachtwoord</label>
                <input type="password" name="wachtwoord" id="wachtwoord" required>
                <input type="submit" name="submit" value="Login">
            </form>
        </div>
    </div>
</main>
<?php
include 'inc/footer.php';
?>