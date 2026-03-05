<?php
require_once 'functions.php'; // Здесь уже есть session_start и db_connect
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Корзина заказов - Стандарт Экспресс</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="стили/styles.css">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow p-4">
            <h2>🛒 Ваша корзина</h2>
            <hr>

            <?php if (!empty($_SESSION['cart'])): ?>
                <table class="table align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>Услуга</th>
                            <th>Цена</th>
                            <th>Действие</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($_SESSION['cart'] as $key => $item): ?>
                            <tr>
                                <td><?= htmlspecialchars($item['name']) ?></td>
                                <td><?= $item['price'] ?> ₽</td>
                                <td>
                                    <!-- Ссылка на удаление одного товара (необязательно, но полезно) -->
                                    <a href="cart.php?remove=<?= $key ?>" class="text-danger text-decoration-none">❌ Удалить</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

                <div class="d-flex justify-content-between align-items-center mt-4">
                    <h4>Итого: <?= getCartTotal() ?> ₽</h4>
                    <div>
                        <a href="index.php#catalog" class="btn btn-outline-secondary me-2">Продолжить выбор</a>
                        <a href="send_order.php" class="btn btn-orange-gradient text-white fw-bold">Оформить заказ</a>
                    </div>
                </div>

            <?php else: ?>
                <div class="text-center py-5">
                    <p class="text-muted fs-4">Ваша корзина пуста</p>
                    <a href="index.php#catalog" class="btn btn-primary">Перейти к услугам</a>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <?php
    // Логика удаления товара из корзины
    if (isset($_GET['remove'])) {
        $id_to_remove = (int)$_GET['remove'];
        unset($_SESSION['cart'][$id_to_remove]);
        header("Location: cart.php");
        exit;
    }
    ?>
</body>
</html>