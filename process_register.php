<?php
session_start();
require_once 'config/database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);

    // اعتبارسنجی داده‌ها
    if (empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
        $_SESSION['error'] = 'لطفاً تمامی فیلدها را پر کنید.';
        header('Location: register.php');
        exit();
    }

    if ($password !== $confirm_password) {
        $_SESSION['error'] = 'رمز عبور و تکرار آن یکسان نیستند.';
        header('Location: register.php');
        exit();
    }

    // هش کردن رمز عبور
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // ذخیره‌سازی اطلاعات کاربر
    try {
        $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
        $stmt->execute([$username, $email, $hashed_password]);

        $_SESSION['success'] = 'ثبت نام با موفقیت انجام شد. حالا می‌توانید وارد شوید.';
        header('Location: login.php');
        exit();
    } catch (PDOException $e) {
        $_SESSION['error'] = 'خطا در ثبت نام. لطفاً دوباره تلاش کنید.';
        header('Location: register.php');
        exit();
    }
}