<!-- Фиксированная нижняя панель (Toolbar) -->
<div class="user-toolbar shadow-lg border-top border-warning">
    <div class="container d-flex justify-content-between align-items-center py-2">
        
        <!-- ЛЕВО: Корзина -->
        <div class="toolbar-item">
            <a href="cart.php" class="text-white d-flex align-items-center gap-2 text-decoration-none">
                <div class="position-relative bg-dark rounded-circle p-2" style="width: 45px; height: 45px; display: flex; align-items: center; justify-content: center;">
                    <span style="font-size: 1.2rem;">🛒</span>
                    <span class="badge rounded-pill bg-danger position-absolute top-0 start-100 translate-middle">
                        <?= getCartCount() ?>
                    </span>
                </div>
                <div class="d-none d-md-block">
                    <small class="d-block text-warning" style="font-size: 0.7rem; line-height: 1;">Мой заказ</small>
                    <span class="fw-bold"><?= getCartTotal() ?> ₽</span>
                </div>
            </a>
        </div>

        <!-- ПРАВО: Аккаунт -->
        <div class="toolbar-item">
            <?php if (isLogged()): ?>
                <div class="dropup">
                    <button class="btn btn-orange-gradient dropdown-toggle btn-sm fw-bold px-3" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        👤 <?= htmlspecialchars($_SESSION['user_name']) ?>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end shadow border-0 mb-2">
                        <li><h6 class="dropdown-header">Личный кабинет</h6></li>
                        <li><a class="dropdown-item" href="profile.php">📦 Мои заказы</a></li>
                        <?php if (isAdmin()): ?>
                            <li><a class="dropdown-item text-danger" href="admin.php">⚙️ Админка</a></li>
                        <?php endif; ?>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item text-secondary" href="logout.php">🚪 Выйти</a></li>
                    </ul>
                </div>
            <?php else: ?>
                <div class="d-flex gap-2">
                    <a href="login.php" class="btn btn-sm btn-outline-light px-3">Вход</a>
                    <a href="register.php" class="btn btn-sm btn-warning px-3 fw-bold">Регистрация</a>
                </div>
            <?php endif; ?>
        </div>

    </div>
</div>

<style>
.user-toolbar {
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    background: #1c1c1c; /* Глубокий темный цвет */
    z-index: 10000;
    color: white;
}
.user-toolbar .btn-orange-gradient {
    background: linear-gradient(45deg, #ff9800, #ff5722);
}
/* Чтобы контент не прятался за панелью */
body {
    padding-bottom: 80px !important;
}
</style>