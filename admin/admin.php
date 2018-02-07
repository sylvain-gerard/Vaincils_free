<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="../css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div id="main">
        <nav class="nav-extended teal">
            <div class="nav-wrapper">
                <a href="#" class="brand-logo center">Logo</a>
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="../angular.html">Angular</a></li>
                    <li><a href="../typescript.html">TypeScript</a></li>
                    <li><a href="../java.html">Java</a></li>
                    <li><a href="admin.php">Admin</a></li>
                </ul>
                <ul class="side-nav" id="mobile-demo">
                    <li><a href="../angular.html">Angular</a></li>
                    <li><a href="../typescript.html">TypeScript</a></li>
                    <li><a href="../java.html">Java</a></li>
                    <li><a href="admin.php">Admin</a></li>
                </ul>
            </div>
        </nav>
        <section>
            <?php

// affiche le numéro de version courante du PHP.
echo 'Version PHP courante : ' . phpversion();
            
if (isset($_POST['login']) AND isset($_POST['pass']))
{
	$login = htmlspecialchars($_POST['login']);
	$pass_crypte = crypt($_POST['pass'], '4kp'); // On crypte le mot de passe

	echo '<p>Ligne à copier dans le .htpasswd :<br />' . $login . ':' . $pass_crypte . '</p>';
}

else // On n'a pas encore rempli le formulaire
{
?>
                <p>Entrez votre login et votre mot de passe pour le crypter.</p>

                <form method="post">
                    <p>
                        Login : <input type="text" name="login"><br /> Mot de passe : <input type="text" name="pass"><br /><br />

                        <input type="submit" value="Crypter !">
                    </p>
                </form>

                <?php
}

?>
        </section>
        <footer class="page-footer teal">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Footer Content</h5>
                        <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
                    </div>
                    <div class="col l4 offset-l2 s12">
                        <h5 class="white-text">Links</h5>
                        <ul>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    © 2017 Copyright Twenty
                    <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
                </div>
            </div>
        </footer>
    </div>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <script src="../js/init.js"></script>
</body>

</html>