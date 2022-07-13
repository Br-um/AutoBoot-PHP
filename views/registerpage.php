<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/57a78e002b.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="public/img/favicon.png" type="image/x-icon">
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
                    <li class="active">Account Setup</li>
                    <li>Social Profiles</li>
                    <li>Personal Details</li>
                </ul>
                <!-- fieldsets -->
                <fieldset>
                    <h2 class="fs-title">Create your account</h2>
                    <h3 class="fs-subtitle">This is step 1</h3>
                    <input type="text" name="email" placeholder="Email" />
                    <input type="password" name="password" placeholder="Password" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <fieldset>
                    <h2 class="fs-title">Siga para o próximo passo</h2>
                    <h3 class="fs-subtitle">Precisamos de mais algumas informações suas.</h3>
                    <input type="button" name="previous" class="previous action-button" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <fieldset>
                    <h2 class="fs-title">Personal Details</h2>
                    <h3 class="fs-subtitle">We will never sell it</h3>
                    <input type="text" name="name" placeholder="First Name" />
                    <input type="text" name="phone" placeholder="Phone" />
                    <input type="button" name="previous" class="previous action-button" value="Previous" />
                    <input type="submit" value="Submit"/>
                </fieldset>
            </form>
        </section>
    </div>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="../public/js/jquery.js"></script>
</body>

</html>