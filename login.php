<?php
require_once 'functions.php';
require_once 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($user && password_verify($pass, $user['password'])) {
        // Записываем данные в сессию
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['username'];
        $_SESSION['user_role'] = $user['role'];
        header("Location: index.php");
    } else {
        $error = "Неверный Email или пароль";
    }
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Вход</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4 card p-4 shadow-sm">
                <h3 class="text-center">Вход</h3>
                <?php if(isset($_GET['registered'])) echo "<div class='alert alert-success'>Регистрация успешна! Войдите.</div>"; ?>
                <?php if(isset($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>
                <form method="POST">
                    <input type="email" name="email" class="form-control mb-2" placeholder="Email" required>
                    <input type="password" name="password" class="form-control mb-3" placeholder="Пароль" required>
                    <button class="btn btn-success w-100">Войти</button>
                </form>
                <p class="mt-3 text-center">Нет аккаунта? <a href="register.php">Регистрация</a></p>
            </div>
        </div>
    </div>
</body>
</html>