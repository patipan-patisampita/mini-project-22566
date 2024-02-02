<nav class="navbar navbar-expand-lg navbar-dark shadow" style="background: #8427DC;">
    <div class="container">
        <a class="navbar-brand" href="index.php">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">หน้าแรก</a>
                </li>

                <?php
                if (isset($_SESSION['auth'])) {
                ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php print $_SESSION['auth_user']['name']; ?>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="https://www.trattc.ac.th/" target="_blank">วท.ตราด</a></li>
                            <li><a class="dropdown-item" href="https://www.vec.go.th/" target="_blank">อาชีวศึกษา</a></li>
                            <li><a class="dropdown-item" href="https://www.moe.go.th/" target="_blank">กระทรวงศึกษาธิการ</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="logout.php">ออกจากระบบ</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-disabled="true" href="#" target="_blank">ที่ตั้ง</a>
                    </li>
                <?php
                } else {
                ?>
                    <li class="nav-item">
                        <a href="signup.php" class="nav-link">ลงทะเบียน</a>
                    </li>
                    <li class="nav-item">
                        <a href="signin.php" class="nav-link">เข้าสู่ระบบ</a>
                    </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>
</nav>