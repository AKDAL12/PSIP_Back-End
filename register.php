<?php
require_once 'functions.php';
require_once 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = strip_tags($_POST['username']);
    $email = strip_tags($_POST['email']);
    $pass = password_hash($_POST['password'], PASSWORD_DEFAULT); // Безопасное хеширование

    $stmt = $pdo->prepare("INSERT INTO users (username, email, password, role) VALUES (?, ?, ?, 'user')");
    try {
        $stmt->execute([$name, $email, $pass]);
        header("Location: login.php?registered=1");
    } catch (Exception $e) {
        $error = "Этот Email уже занят!";
    }
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4 card p-4 shadow-sm">
                <h3 class="text-center">Регистрация</h3>
                <?php if(isset($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>
                <form method="POST">
                    <input type="text" name="username" class="form-control mb-2" placeholder="Ваше Имя" required>
                    <input type="email" name="email" class="form-control mb-2" placeholder="Email" required>
                    <input type="password" name="password" class="form-control mb-3" placeholder="Пароль" required>
                    <button class="btn btn-primary w-100">Создать аккаунт</button>
                </form>
                <p class="mt-3 text-center">Уже есть аккаунт? <a href="login.php">Войти</a></p>
            </div>
        </div>
    </div>
</body>
</html>