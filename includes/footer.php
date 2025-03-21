</div><!-- پایان .wrapper -->

<!-- اسکریپت‌های اصلی -->
<script src="<?php echo BASE_PATH; ?>/assets/js/jquery-3.6.0.min.js"></script>
<script src="<?php echo BASE_PATH; ?>/assets/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo BASE_PATH; ?>/assets/js/sweetalert2.all.min.js"></script>
<script src="<?php echo BASE_PATH; ?>/assets/js/app.js"></script>

<?php if (isset($page_scripts)): ?>
    <?php foreach ($page_scripts as $script): ?>
        <script src="<?php echo BASE_PATH . $script; ?>"></script>
    <?php endforeach; ?>
<?php endif; ?>

<script>
    // اسکریپت‌های عمومی
    $(document).ready(function() {
        // فعال کردن تولتیپ‌ها
        $('[data-bs-toggle="tooltip"]').tooltip();

        // فعال کردن پاپ‌اورها
        $('[data-bs-toggle="popover"]').popover();

        // نمایش پیام‌های فلش
        <?php if (isset($_SESSION['flash_message'])): ?>
            Swal.fire({
                icon: '<?php echo $_SESSION['flash_type']; ?>',
                title: '<?php echo $_SESSION['flash_title']; ?>',
                text: '<?php echo $_SESSION['flash_message']; ?>',
                timer: 3000,
                timerProgressBar: true
            });
            <?php
            unset($_SESSION['flash_message']);
            unset($_SESSION['flash_type']);
            unset($_SESSION['flash_title']);
            ?>
        <?php endif; ?>
    });
</script>
</body>
</html>