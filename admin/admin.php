<?php

// affiche le numéro de version courante du PHP.
echo 'Version PHP courante : ' . phpversion();

$link = mysql_connect('sql.free.fr', 'vaincils', 'twenty66');
mysql_query("SET NAMES 'utf8'");
if (!$link) {
   echo 'Impossible de se connecter : ' . mysql_error();
} elseif ($link) {
    echo ' -- Connexion réussie avec la base de données ! <br><br>';
}

if (isset($_POST['login']) AND isset($_POST['pass']))
{
	$login = htmlspecialchars($_POST['login']);
	$pass_crypte = crypt($_POST['pass'], '4kp'); // On crypte le mot de passe

	echo '<p>Ligne à copier dans le .htpasswd :<br />' . $login . ':' . $pass_crypte . '</p>';
}

else // On n'a pas encore rempli le formulaire
{
?>
    <div class="container">
        <div class="row">
            <div class="col">
                <p>Entrez votre login et votre mot de passe pour le crypter.</p>

                <form method="post">
                    <p>
                        Login : <input type="text" name="login"><br /> Mot de passe : <input type="text" name="pass"><br /><br />

                        <input type="submit" value="Crypter !">
                    </p>
                </form>
            </div>
        </div>
    </div>


    <?php
}

?>
