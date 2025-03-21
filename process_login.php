<?php
session_start();
require_once 'config/database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // اعتبارسنجی داده‌ها
    if (empty($username) || empty($password)) {
        $_SESSION['error'] = 'لطفاً نام کاربری و رمز عبور را وارد کنید.';
        header('Location: login.php');
        exit();
    }

    // بررسی اطلاعات کاربر
    try {
        $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->execute([$username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['success'] = 'ورود با موفقیت انجام شد.';
            header('Location: index.php');
            exit();
        } else {
            $_SESSION['error'] = 'نام کاربری یا رمز عبور اشتباه است.';
            header('Location: login.php');
            exit();
        }
    } catch (PDOException $e) {
        $_SESSION['error'] = 'خطا در ورود. لطفاً دوباره تلاش کنید.';
        header('Location: login.php');
        exit();
    }
}