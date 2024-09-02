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
                    <h2 class="mt-2 text-center text-2xl font-bold leading-9 tracking-tight text-white">Register for an account</h2>
                    </div>
                    
                    <form class="space-y-6" method="POST">

                    <div class="mb-3 form-box">
                                <select id="lic_code" name="lic_code" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                <option value="" disabled selected>Select a licensee code</option>
                                <option value="wonpager">wonpager</option>
                                <option value="gtr">gtr</option>
                                <option value="mii">mii</option>
                                <option value="demo">demo</option>
                                </select>
                    </div>
                    <div class="mb-3 form-box">
                        <input   class="form-control" id="user_name" name="user_name" placeholder="Enter  user_name" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter Your Password" required>
                    </div>
 
                    <button type="submit" class="btn btn-outline-secondary login-btn w-100 mb-3">Register</button>
                     
                    </form>

                    <!-- Register Link -->
                    <p class="text-center register-test mt-3"> Already have a Account? <a href="login.php" class="text-decoration-none">Sing In</a></p>
                </div>
            </div>
        </div>
    </body>
</html>



<!-- PHP Backend -->
<?php
 
if (isset($_POST['user_name']) && isset($_POST['password']) && isset($_POST['lic_code'])) {
    // Get form data
    $username = $_POST['user_name'];
    $pass = $_POST['password'];
    $lic_code =  $_POST['lic_code'];

    // Hash the password
    $hashed_pass = password_hash($pass, PASSWORD_DEFAULT);

    // Escape special characters for SQL
    $username = $conn->real_escape_string($username);
    $hashed_pass = $conn->real_escape_string($hashed_pass);
    $lic_code = $conn->real_escape_string($lic_code);

    // Check if username already exists
    $sql_check = "SELECT * FROM users WHERE user_name='$username' and lic_code='$lic_code'";
    $result = $conn->query($sql_check);

    if ($result->num_rows > 0) {
        die("User already registered.");
    }

    // Construct the SQL query
    $sql = "INSERT INTO users (user_name, password, lic_code) VALUES ('$username', '$hashed_pass', '$lic_code')";

    if ($conn->query($sql) === TRUE) {
        echo "<script> window.location.href = 'login.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
} else {
    echo "** All form fields are required.";
}

$conn->close();
?>
