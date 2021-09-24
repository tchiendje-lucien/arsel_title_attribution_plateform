<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connexion Administrateur</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="../fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="../css/styleLogin.css">
</head>

<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form" action="{{ URL::to('/login_admin') }}"
                        method="POST">
                        @csrf
                        <h2 class="form-title">se Connecter</h2>
                        @if (session('error_login'))
                        <div class="msg msg-error z-depth-3 scale-transition">
                                {{ session('error_login') }}
                            </div>
                        @endif
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" value="{{ @old("email") }}"
                                placeholder="Votre adresse email" required/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="password" id="password"
                                placeholder="Votre mot de passe" required/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>Se souvenir de moi</label>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="se Connecter" />
                        </div>
                    </form>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="../js/jqueryLogin.min.js"></script>
    <script src="../js/mainLogin.js"></script>
</body>

</html>
