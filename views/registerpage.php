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
            <form id="msform" action="../controller/user-controller.php" method="POST">
                <!-- progressbar -->
                <ul id="progressbar">
                    <li class="active">Conta</li>
                    <li>Perfil</li>
                    <li>Detalhes da conta</li>
                </ul>
                <!-- fieldsets -->
                <fieldset>
                    <h2 class="fs-title">Crie sua consta</h2>
                    <?php
                    if (isset($_GET['err'])) {
                        echo "<h4 style='color: red;'>{$_GET['err']}</h4>";
                    }
                    ?>
                    <h3 class="fs-subtitle">Primeiro passo</h3>
                    <input type="text" name="email" placeholder="Email" />
                    <input type="password" name="password" placeholder="Senha" />
                    <input type="button" name="next" class="next action-button" value="Próximo" />
                </fieldset>
                <fieldset>
                    <h2 class="fs-title">Siga para o próximo passo</h2>
                    <h3 class="fs-subtitle">Precisamos de mais algumas informações suas.</h3>
                    <input type="button" name="previous" class="previous action-button" value="Anterior" />
                    <input type="button" name="next" class="next action-button" value="Próximo" />
                </fieldset>
                <fieldset>
                    <h2 class="fs-title">informações pessoais</h2>
                    <h3 class="fs-subtitle">Suas informações nunca serão vazadas</h3>
                    <input type="text" name="name" placeholder="Primeiro Nome" />
                    <input type="text" name="phone" placeholder="Telefone" />
                    <input type="button" name="previous" class="previous action-button" value="Anterior" />
                    <input type="submit" value="Concluir" />
                </fieldset>
            </form>
        </section>
    </div>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="../public/js/jquery.js"></script>
</body>

</html>