<?php
// مسیر پایه تعریف شده است
define('BASE_PATH', dirname(__FILE__));
require_once BASE_PATH . '/includes/header.php';
?>

<div class="container">
    <div class="row">
        <div class="col-md-3">
            <?php require_once BASE_PATH . '/includes/sidebar.php'; ?>
        </div>
        <div class="col-md-9">
            <h1>خوش آمدید به برنامه حسابداری پاره سنگ</h1>
        </div>
    </div>
</div>

<?php require_once BASE_PATH . '/includes/footer.php'; ?>