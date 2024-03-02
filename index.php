<?php
include('include/header.php');
?>

<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="row border rounded-5 p-3 bg-white shadow box-area">
        <div class="col-md-6 rounder-4 d-flex justify-content-center flex-column left-box">
            <div class="featured-image mb-3">
                <div class="image">
                    <img src="assets/3094352.jpg" class="img-fluid" style="width: 500px;">
                </div>
            </div>
        </div>
        <div class="col-md-6 right-box">
            <div class="row align-items-center">
                <div class="header-text mb-4">
                    <p class="fs-4 text-center">Welcome back!</p>
                </div>
                <form action="" method="post">
                    <div class="input-group mb-3">
                        <input type="email" class="form-control form-control-lg bg-light fs-6" placeholder="Email address">
                    </div>
                    <div class="input-group mb-1">
                        <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password">
                    </div>
                    <div class="input-group mb-5 d-flex justify-content-between">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="formCheck">
                            <label for="formCheck" class="form-check-label text-secondary"><small>Show Password</small></label>
                        </div>
                        <div class="forgot">
                            <a href="forgot-password.php"><small>Forgot Password?</small></a>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <button type="submit" class="btn btn-lg btn-primary w-100 fs-6">Login</button>
                    </div>
                    <a href="" class="btn btn-lg btn-secondary w-100 fs-6">Register</a>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
include('include/footer.php');
?>