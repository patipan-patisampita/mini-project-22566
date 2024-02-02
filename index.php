<?php session_start(); ?>
<?php include("includes/header.php"); ?>
<div class="pt-4">
    <div class="container">
        <div class="col-md-12">
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
        </div>
    </div>
</div>

<div class="container">
    <h1>Hello,world!</h1>
</div>

<?php include("includes/footer.php"); ?>