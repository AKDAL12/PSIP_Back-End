<?php
require_once 'logic.php';      // Проверка сессий
require_once 'db_connect.php'; // Подключение к БД

// Логика входа
if (isset($_POST['login'])) {
    if ($_POST['password'] === $admin_pass) {
        $_SESSION['admin_logged_in'] = true;
    } else {
        $error = "Неверный пароль!";
    }
}

// Логика выхода
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: admin.php");
    exit;
}

$message = "";

// 2. ЛОГИКА УДАЛЕНИЯ (Delete)
if (isset($_GET['delete_id'])) {
    $id = (int)$_GET['delete_id'];
    $stmt = $pdo->prepare("DELETE FROM services WHERE id = ?");
    if ($stmt->execute([$id])) {
        $message = "Услуга успешно удалена!";
    }
}

// 3. ЛОГИКА ДОБАВЛЕНИЯ (Create)
if (isset($_POST['add_service'])) {
    $title = strip_tags($_POST['title']);
    $price = (int)$_POST['price'];
    $category = strip_tags($_POST['category']);

    $stmt = $pdo->prepare("INSERT INTO services (title, price, category) VALUES (?, ?, ?)");
    if ($stmt->execute([$title, $price, $category])) {
        $message = "Новая услуга добавлена!";
    }
}

// 4. ЛОГИКА РЕДАКТИРОВАНИЯ (Update)
if (isset($_POST['edit_service'])) {
    $id = (int)$_POST['id'];
    $title = strip_tags($_POST['title']);
    $price = (int)$_POST['price'];
    $category = strip_tags($_POST['category']);

    $stmt = $pdo->prepare("UPDATE services SET title = ?, price = ?, category = ? WHERE id = ?");
    if ($stmt->execute([$title, $price, $category, $id])) {
        $message = "Данные услуги обновлены!";
    }
}

// 5. ПОЛУЧЕНИЕ ДАННЫХ ДЛЯ РЕДАКТИРОВАНИЯ
$edit_data = null;
if (isset($_GET['edit_id'])) {
    $id = (int)$_GET['edit_id'];
    $stmt = $pdo->prepare("SELECT * FROM services WHERE id = ?");
    $stmt->execute([$id]);
    $edit_data = $stmt->fetch();
}

// 6. ПОЛУЧЕНИЕ СПИСКА ВСЕХ УСЛУГ
$stmt = $pdo->query("SELECT * FROM services ORDER BY id DESC");
$services = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Управление услугами - Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-dark bg-dark mb-4">
    <div class="container">
        <a class="navbar-brand" href="index.php">Стандарт Экспресс - Панель управления</a>
        <a href="?logout=1" class="btn btn-outline-danger btn-sm">Выйти</a>
    </div>
</nav>

<div class="container">
    <?php if ($message): ?>
        <div class="alert alert-success"><?= $message ?></div>
    <?php endif; ?>

    <div class="row">
        <!-- ФОРМА (Добавление или Редактирование) -->
        <div class="col-md-4">
            <div class="card shadow-sm p-3 mb-4">
                <h4><?= $edit_data ? "Редактировать" : "Добавить услугу" ?></h4>
                <form method="POST" action="admin.php">
                    <?php if ($edit_data): ?>
                        <input type="hidden" name="id" value="<?= $edit_data['id'] ?>">
                    <?php endif; ?>
                    
                    <div class="mb-2">
                        <label class="small">Название</label>
                        <input type="text" name="title" class="form-control" value="<?= $edit_data['title'] ?? '' ?>" required>
                    </div>
                    <div class="mb-2">
                        <label class="small">Цена (руб)</label>
                        <input type="number" name="price" class="form-control" value="<?= $edit_data['price'] ?? '' ?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="small">Категория</label>
                        <input type="text" name="category" class="form-control" value="<?= $edit_data['category'] ?? '' ?>" placeholder="Напр: Бизнес" required>
                    </div>
                    
                    <?php if ($edit_data): ?>
                        <button type="submit" name="edit_service" class="btn btn-primary w-100">Сохранить изменения</button>
                        <a href="admin.php" class="btn btn-link btn-sm w-100 mt-2 text-secondary">Отмена</a>
                    <?php else: ?>
                        <button type="submit" name="add_service" class="btn btn-success w-100">Добавить в базу</button>
                    <?php endif; ?>
                </form>
            </div>
        </div>

        <!-- ТАБЛИЦА СПИСКА (Просмотр и Удаление) -->
        <div class="col-md-8">
            <div class="card shadow-sm p-3">
                <h4>Список услуг в базе</h4>
                <table class="table table-hover mt-3">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Название</th>
                            <th>Цена</th>
                            <th>Действия</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($services as $s): ?>
                        <tr>
                            <td><?= $s['id'] ?></td>
                            <td><?= htmlspecialchars($s['title']) ?></td>
                            <td><?= $s['price'] ?>₽</td>
                            <td>
                                <a href="?edit_id=<?= $s['id'] ?>" class="btn btn-sm btn-outline-primary">🖉</a>
                                <a href="?delete_id=<?= $s['id'] ?>" class="btn btn-sm btn-outline-danger" onclick="return confirm('Удалить?')">✕</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</body>
</html>