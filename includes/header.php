<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title . ' - پاره سنگ' : 'پاره سنگ'; ?></title>
    
    <!-- استایل‌های اصلی -->
    <link rel="stylesheet" href="<?php echo BASE_PATH; ?>/assets/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="<?php echo BASE_PATH; ?>/assets/css/sweetalert2.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/apexcharts@3.35.3/dist/apexcharts.css">
    <link rel="stylesheet" href="<?php echo BASE_PATH; ?>/assets/css/style.css">

    <!-- استایل‌های اختصاصی صفحه -->
    <?php if (isset($page_styles)): ?>
        <?php foreach ($page_styles as $style): ?>
            <link rel="stylesheet" href="<?php echo BASE_PATH . $style; ?>">
        <?php endforeach; ?>
    <?php endif; ?>

    <style>
        :root {
            --primary-color: #4e73df;
            --secondary-color: #858796;
            --success-color: #1cc88a;
            --info-color: #36b9cc;
            --warning-color: #f6c23e;
            --danger-color: #e74a3b;
            --light-color: #f8f9fc;
            --dark-color: #5a5c69;
        }

        /* استایل‌های عمومی */
        body {
            background-color: #f8f9fc;
            font-family: 'IRANSans', 'Vazir', sans-serif;
        }

        /* استایل‌های داشبورد */
        .main-content {
            margin-right: 250px;
            padding: 1.5rem;
            transition: all 0.3s;
        }

        .stat-card {
            border-radius: 0.75rem;
            box-shadow: 0 0.15rem 1.75rem rgba(58, 59, 69, 0.15);
            transition: transform 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-5px);
        }

        .stat-card .icon {
            font-size: 2rem;
            opacity: 0.7;
        }

        .card {
            border: none;
            box-shadow: 0 0.15rem 1.75rem rgba(58, 59, 69, 0.15);
            border-radius: 0.75rem;
            margin-bottom: 1.5rem;
        }

        .card-header {
            background-color: transparent;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            padding: 1rem 1.25rem;
        }

        .table {
            margin-bottom: 0;
        }

        .table th {
            font-weight: 600;
            border-top: 0;
        }

        .badge {
            padding: 0.5em 1em;
            font-size: 0.75rem;
        }

        /* انیمیشن‌ها */
        .fade-in {
            animation: fadeIn 0.5s ease-in;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* رسپانسیو */
        @media (max-width: 768px) {
            .main-content {
                margin-right: 0;
            }
            .stat-card {
                margin-bottom: 1rem;
            }
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <?php if (isset($_SESSION['success'])): ?>
            <div class="alert alert-success">
                <?php echo $_SESSION['success']; ?>
                <?php unset($_SESSION['success']); ?>
            </div>
        <?php endif; ?>

        <?php if (isset($_SESSION['error'])): ?>
            <div class="alert alert-danger">
                <?php echo $_SESSION['error']; ?>
                <?php unset($_SESSION['error']); ?>
            </div>
        <?php endif; ?>