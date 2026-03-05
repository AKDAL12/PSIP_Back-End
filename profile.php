<?php
require_once 'functions.php';

// Если не вошел — выкидываем на логин
if (!isLogged()) {
    header("Location: login.php");
    exit;
}

$user_id = $_SESSION['user_id'];

// Получаем заказы пользователя из базы
$stmt = $pdo->prepare("SELECT * FROM orders WHERE user_id = ? ORDER BY created_at DESC");
$stmt->execute([$user_id]);
$my_orders = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Мой профиль - Стандарт Экспресс</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row">
            <!-- Информация о пользователе -->
            <div class="col-md-4">
                <div class="card shadow p-4 mb-4">
                    <h4>Профиль</h4>
                    <hr>
                    <p><b>Имя:</b> <?= htmlspecialchars($_SESSION['user_name']) ?></p>
                    <p><b>Email:</b> <?= htmlspecialchars($_SESSION['user_email'] ?? 'Не указан') ?></p>
                    <p><b>Статус:</b> <span class="badge bg-primary"><?= $_SESSION['user_role'] ?></span></p>
                    <hr>
                    <a href="logout.php" class="btn btn-danger btn-sm w-100">Выйти</a>
                    <a href="index.php" class="btn btn-outline-secondary btn-sm w-100 mt-2">На главную</a>
                </div>
            </div>

            <!-- Список заказов -->
            <div class="col-md-8">
                <div class="card shadow p-4">
                    <h4>Мои заказы</h4>
                    <hr>
                    <?php if (count($my_orders) > 0): ?>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>№</th>
                                        <th>Услуга</th>
                                        <th>Статус</th>
                                        <th>Дата</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($my_orders as $order): ?>
                                    <tr>
                                        <td><?= $order['id'] ?></td>
                                        <td><?= htmlspecialchars($order['service_name']) ?></td>
                                        <td>
                                            <span class="badge bg-info text-dark"><?= $order['status'] ?></span>
                                        </td>
                                        <td><?= date("d.m.Y H:i", strtotime($order['created_at'])) ?></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    <?php else: ?>
                        <p class="text-center text-muted py-4">У вас еще нет ни одного заказа.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>