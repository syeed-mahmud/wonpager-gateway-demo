<?php
if (isset($_SESSION['user_name'])){
    $username = $_SESSION['user_name'];
    header('Location: dashboard.php');
}

include_once("header.php");

?>
        <div class="container">
            <div class="row">
                <!-- Left Blank Side -->
                <div class="col-lg-6"></div>

                <!-- Right Side Form -->
                <div class="col-lg-6 d-flex align-items-center justify-content-center right-side">
                <div class="form-2-wrapper">
                    <div class="logo text-center">
                    <img class="mx-auto h-40 w-40" src="Logo.png" alt="WONPager Logo">
                    <h2 class="mt-2 text-center text-2xl font-bold leading-9 tracking-tight text-white">Sign Into Your Account</h2>
                    </div>
                    
                    <form class="space-y-6" method="POST">
                    <div class="mb-3 form-box">
                        <input   class="form-control" id="email" name="user_name" placeholder="Enter  user_name" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter Your Password" required>
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                        <a href="forget-3.html" class="text-decoration-none float-end">Forget Password</a>
                        </div>

                    </div>
                    <button type="submit" class="btn btn-outline-secondary login-btn w-100 mb-3">Login</button>
                    <div class="social-login mb-3 type--A">
                        <h5 class="text-center mb-3">Social Login</h5>
                        <button class="btn btn-outline-secondary  mb-3"><i class="fa-brands fa-google text-danger"></i> Sign With Google</button>
                        <button class="btn btn-outline-secondary mb-3"><i class="fa-brands fa-facebook-f text-primary"></i> Sign With Facebook</button>
                    </div>
                    </form>

                    <!-- Register Link -->
                    <p class="text-center register-test mt-3">Don't have an account? <a href="register.php" class="text-decoration-none">Register here</a></p>
                </div>
            </div>
        </div>
    </body>
</html>




<!-- PHP Backend -->

<?php
 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['user_name'];
    $password = $_POST['password'];
     
 
    // Create connection
 

    // Prepare and bind
    $stmt = $conn->prepare("SELECT password, lic_code FROM users WHERE user_name = ?");
    $stmt->bind_param( 's', $username);
    $stmt->execute();
    $stmt->store_result();
     
    if ($stmt->num_rows ==1) {
        $stmt->bind_result($hashed_password, $lic_code);
        while ($stmt->fetch()) {
            // Verify the password
            if (password_verify($password, $hashed_password)) {
                $_SESSION['user_name'] = $username;
                $_SESSION['lic_code'] = $lic_code;
                header('Location: dashboard.php');
            } 
            else {
                echo "Invalid password.";
            }
        }
    } else {
        echo "No user found with that User Name and Module.";
    }

    $stmt->close();
    $conn->close();
}
?>
