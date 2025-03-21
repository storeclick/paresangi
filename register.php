<?php
require_once 'includes/header.php';
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4>ثبت نام</h4>
                </div>
                <div class="card-body">
                    <form action="process_register.php" method="post">
                        <div class="form-group mb-3">
                            <label for="username">نام کاربری</label>
                            <input type="text" name="username" id="username" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="email">ایمیل</label>
                            <input type="email" name="email" id="email" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="password">رمز عبور</label>
                            <input type="password" name="password" id="password" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="confirm_password">تکرار رمز عبور</label>
                            <input type="password" name="confirm_password" id="confirm_password" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">ثبت نام</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once 'includes/footer.php';
?>