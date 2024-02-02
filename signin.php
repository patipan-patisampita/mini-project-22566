<?php session_start(); ?>
<?php 
if(isset($_SESSION["auth"])){
    $_SESSION['message'] = 'You are already logged In';
    header("Location: index.php");
    exit();
} 
?>

<?php include("includes/header.php"); ?>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-5">
            <div class="card shadow">
                <div class="card-header p-0">
                    <img src="assets/images/img.jpg" class="card-img-top" alt="img">
                </div>
                <div class="card-body">
                    <p class="card-text text-end">Information Technology 2023.</p>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <?php
            if (isset($_SESSION["message"])) {
            ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Holy guacamole! </strong><?php echo $_SESSION["message"]; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

            <?php
                unset($_SESSION["message"]);
            }
            ?>

            <div class="card shadow">
                <div class="card-header">
                    <h5>การเข้าสู่ระบผู้ใช้งาน</h5>
                </div>
                <div class="card-body">
                    <p class="card-text text-left">การเข้าสู่ระบบเพื่อใช้บริการ ระบบออนไลน์</p>
                    <hr>
                    <form action="functions/authcode.php" method="post">

                        <div class="mb-3">
                            <label for="" class="form-label">อีเมล์ผู้สมัคร</label>
                            <input type="email" class="form-control" name="email" placeholder="กรุณาใส่ อีเมล์ผู้สมัคร" required>
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">รหัสผ่านผู้สมัคร</label>
                            <input type="password" class="form-control" name="password" placeholder="กรุณาใส่ รหัสผ่านผู้สมัคร" required>
                        </div>

                        <button type="submit" class="btn btn-primary" name="login_btn">เข้าสู่ระบบสมาชิก</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include("includes/footer.php"); ?>