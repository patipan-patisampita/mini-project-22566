<?php include("includes/header.php"); ?>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-4">
            <div class="card shadow">
                <div class="card-header p-0">
                    <img src="assets/images/img.jpg" class="card-img-top" alt="img">
                </div>
                <div class="card-body">
                    <p class="card-text text-end">Information Technology 2023.</p>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header">
                    <h5>ระบบลงทะเบียนผู้ใช้งาน</h5>
                </div>
                <div class="card-body">
                    <p class="card-text text-end">การสมัครสมาชิกเพื่อใช้บริการ ระบบออนไลน์</p>
                    <hr>
                    <form action="">
                        <div class="mb-3">
                            <label for="" class="form-label">ชื่อผู้สมัคร</label>
                            <input type="text" class="form-control" name="name" placeholder="กรุณาใส่ ชื่อผู้สมัคร">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">อีเมล์ผู้สมัคร</label>
                            <input type="text" class="form-control" name="email" placeholder="กรุณาใส่ อีเมล์ผู้สมัคร">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">รหัสผ่านผู้สมัคร</label>
                            <input type="text" class="form-control" name="password" placeholder="กรุณาใส่ รหัสผ่านผู้สมัคร">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">ยีนยันรหัสผ่านผู้สมัคร</label>
                            <input type="text" class="form-control" name="c_password" placeholder="กรุณาใส่ ยีนยันรหัสผ่านผู้สมัคร">
                        </div>
                        <button type="submit" class="btn btn-primary">สมัครสมาชิก</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include("includes/footer.php"); ?>