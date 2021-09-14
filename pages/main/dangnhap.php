<?php
if (isset($_POST['dangnhap'])) {
    $email = $_POST['email'];
    $matkhau = $_POST['password'];
    $sql = "SELECT * FROM tbl_dangky WHERE email='" . $email . "' AND matkhau='" . $matkhau . "' LIMIT 1";
    $row = mysqli_query($mysqli, $sql);
    $count = mysqli_num_rows($row);
    if ($count > 0) {
        $row_data = mysqli_fetch_array($row);
        $_SESSION['dangky'] = $row_data['tenkhachhang'];
        $_SESSION['id_khachhang'] = $row_data['id_dangky'];
        // header("Location:index.php?quanly=giohang");
?>
        <script>
            window.location.href = "index.php?quanly=giohang";
        </script>
<?php
    } else {
        echo '<p style="color:red">Mật khẩu hoặc Email sai ,vui lòng nhập lại.</p>';
    }
}
?>
<!--div class="modal" id="modal">
        <div class="modal__overlay" id="modal__overlay"></div>
        <div class="modal__body"-->
        
            <!-- login form -->
            <form class="auth-form" id="auth-form-log-in" action="" autocomplete="off" method="POST">
                <div class="auth-form__container">
                    <div class="auth-form__header">
                        <h3 class="auth-form__heading">Đăng nhập</h3>
                        <span class="auth-form__switch-btn" id="auth-form__switch-btn-register">
                            <a href="index.php?quanly=dangky">Đăng ký</a>
                        </span>
                    </div>

                    <div class="auth-form__form">
                        <div class="auth-form__group">
                            <input class="auth-form__input" type="text" name="email" onblur="checkEmail()" id="text_email" placeholder="Email của bạn" required>
                        </div>
                        <div class="auth-form__group">
                            <input class="auth-form__input" type="password" onblur="checkPass()" id="text_pass" name="password" placeholder="Mật khẩu của bạn" required>
                        </div>
                    </div>

                    <div class="auth-form__aside">
                        <div class="auth-form-help">
                            <a href="#" class="auth-form__help-link auth-form-help-fogot">Quên mật khẩu</a>
                            <span class="auth-form-help-separate">
                            </span>
                            <a href="#" class="auth-form__help-link">Cần trợ giúp?</a>
                        </div>
                    </div>

                    <div class="auth-form__controls">
                        <button class="btn auth-form__controls-back" id="auth-form__controls-back-2">TRỞ LẠI</button>
                        <button class="btn btn--primary" name="dangnhap">Đăng nhập</button>
                    </div>
                </div>

                <div class="auth-form__socials">
                    <a href="#" class="btn btn--with-icon btn--size-s auth-form__socials--facebook">
                        <i class="fab fa-facebook-square auth-form__socials-icon"></i>
                        <span class="auth-form__socials-title">
                            Đăng nhập với Facebook
                        </span>
                    </a>
                    <a href="#" class="btn btn--with-icon btn--size-s auth-form__socials--google">
                        <i class="fab fa-google auth-form__socials-icon"></i>
                        <span class="auth-form__socials-title">
                            Đăng nhập với google
                        </span>
                    </a>
                </div>
            </form>
            <script src="/assets/js/index.js"></script>
        <!--/div>
</div-->
