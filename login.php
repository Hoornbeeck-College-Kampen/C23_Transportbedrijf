<?php

include 'inc/header.php';
?>
<main class="main-content">
    <div id="login">
        <div>  
            <h1>Login</h1>
            <form action="autorisatie.php" method="post" class="frmlogin">
                <label for="username">Gebruiker</label>
                <input type="text" name="username" id="username" placeholder="username" required>
                <label for="password">Wachtwoord</label>
                <input type="password" name="password" id="password" placeholder="password" required>
                <input type="submit" name="submit" value="Login">
            </form>
        </div>
    </div>
</main>
<?php
include 'inc/footer.php';
?>
