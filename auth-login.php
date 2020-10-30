<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>One Night</title>
    <link rel="stylesheet" href="/assets/css/app.min.css">
</head>
<body class="page__auth">
<main class="main">
    <div class="container">
        <div class="page__auth-wrap">
            <a href="/" class="auth__logo">
                <img src="/assets/files/icons/svg/logo.svg" alt="">
            </a>
            
            <div class="page__auth-title">
                АВТОРИЗОВАТЬСЯ
            </div>

            <div class="page__auth-form login">
                <form>
                    <div class="page__auth-form-field">
                        <div class="page__auth-form-field-item page__auth-form-field-item-error">
                            <label>имя пользователя</label>
                            <input type="text" class="error" placeholder="имя пользователя">
                        </div>
                        <div class="page__auth-form-field-item">
                            <label>пароль</label>
                            <input type="password" placeholder="пароль">
                        </div>
                        <div class="page__auth-form-field-item">
                            <a href="#" class="page__auth-repass">Забыли Ваш пароль?</a>
                        </div>
                            
                        <div class="page__auth-form-field-item recapcha">
                            <img src="/assets/images/google_recapcha.png" alt="">
                        </div>

                        <div class="page__auth-form-field-item btn-width">
                            <a class="btn btn-accent btn-signin" href="/admin.php">Вход</a>
                            <a class="btn btn-nofocus btn-signup" href="/auth-signup.php">Регистрация</a>
                        </div>
                            
                        <div class="page__auth-form-field-item">
                            <a href="/">
                                <span class="btn btn-text btn-backpage"><ins>&#8249;</ins> Вернуться назад</span>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

    <script src="/assets/js/app.libs.min.js"></script>
    <script src="/assets/js/app.min.js"></script>
</body>
</html>