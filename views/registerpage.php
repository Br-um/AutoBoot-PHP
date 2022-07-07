<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/indentation.css">
    <link rel="stylesheet" href="../public/css/logreg.css">
    <title>AutoBoot-Register</title>
</head>

<body>
    <div class="regBar">
        <section>
            <form class="form" action="../controller/user-controller.php" method="POST">
                <fieldset>
                    <input type="text" name="name" placeholder="Digite seu nome: ">
                </fieldset>
                <fieldset>
                    <input type="email" name="email" placeholder="Digite seu email: ">
                </fieldset>
                <fieldset>
                    <input type="password" name="password" placeholder="Digite sua senha: ">
                </fieldset>
                <fieldset>
                    <input type="tel" name="phone" placeholder="Digite seu número de celular: ">
                </fieldset>
                <button type="submit">Cadastrar</button>
            </form>
        </section>
    </div>
</body>

</html>