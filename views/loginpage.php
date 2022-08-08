<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/57a78e002b.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="../public/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../public/css/logreg.css">
    <title>AutoBoot-Register</title>
</head>

<body>
    <div class="regBar">
        <section>
            <!-- multistep form -->
            <form id="msform" action="../controller/login-controller.php" method="POST">
                <fieldset>
                    <h2 class="fs-title">Faça seu login</h2>
                    <?php
                    if (isset($_GET['err'])) {
                        echo "<h3 style='color: red;'>{$_GET['err']}</h3>";
                    }
                    ?>
                    <h3 class="fs-subtitle">execute seu login para ter acesso ao conteúdo</h3>
                    <input type="text" name="email" placeholder="Email" />
                    <input type="password" name="password" placeholder="Senha" />
                    <input type="submit" name="submit" value="Login" />
                </fieldset>
            </form>
        </section>
    </div>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="../public/js/jquery.js"></script>
</body>

</html>