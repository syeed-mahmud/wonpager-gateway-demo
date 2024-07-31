<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlantVerse</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="w-full h-full bg-no-repeat bg-cover bg-left" style="background-image: url(bg.jpg);">
    <div class="flex min-h-full  justify-center items-center px-6 py-5 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-40 w-40" src="Logo.png" alt="WONPager">
            
        </div>

        <div class="mt-1 sm:mx-auto sm:w-full sm:max-w-sm pt-10">
            <h2 class=" text-center text-2xl font-bold leading-9 tracking-tight text-white">Sign up</h2>
            <form class="space-y-6" method="POST">
            <div>
             <label for="module" class="block text-sm font-medium leading-6 text-white">Select Module</label>
                 <div class="mt-2">
                     <select id="module" name="module" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                      <option value="" disabled selected>Select a module</option>
                      <option value="module1">Module 1</option>
                      <option value="module2">Module 2</option>
                      <option value="module3">Module 3</option>
                      <option value="module4">Module 4</option>
                     </select>
                </div>
           </div>
                <div>
                    <label for="user_name" class="block text-sm font-medium leading-6 text-white">User Name</label>
                    <div class="mt-2">
                        <input id="user_name" name="user_name" type="text" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium leading-6 text-white">Password</label>
                    <div class="mt-2">
                        <input id="password" name="password" type="password" autocomplete="new-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div>
                    <button type="submit" class="flex w-full justify-center rounded-md bg-orange-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-orange-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-600">Sign up</button>
                </div>
            </form>
            <p class="mt-4 text-center text-sm text-gray-500">
                Already have a Account?
                <a href="login.php" class="font-semibold leading-6 text-orange-400 hover:text-orange-600">Sign up</a>
            </p>
        </div>
    </div>
</body>
</html>



<!-- PHP Backend -->

<?php
$host = 'localhost';
$db = 'wonpager';
$user = 'root';
$pass = '';
$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Ensure the form data is set before accessing
if (isset($_POST['user_name']) && isset($_POST['password']) && isset($_POST['module'])) {
    // Get form data
    $username = $_POST['user_name'];
    $pass = $_POST['password'];
    $module = $_POST['module'];

    // Hash the password
    $hashed_pass = password_hash($pass, PASSWORD_DEFAULT);

    // Escape special characters for SQL
    $username = $conn->real_escape_string($username);
    $hashed_pass = $conn->real_escape_string($hashed_pass);
    $module = $conn->real_escape_string($module);

    // Check if username already exists
    $sql_check = "SELECT * FROM userlist WHERE user_name='$username' and module='$module'";
    $result = $conn->query($sql_check);

    if ($result->num_rows > 0) {
        die("User already registered.");
    }

    // Construct the SQL query
    $sql = "INSERT INTO userlist (user_name, password, module) VALUES ('$username', '$hashed_pass', '$module')";

    if ($conn->query($sql) === TRUE) {
        echo "<script> window.location.href = 'login.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
} else {
    echo "All form fields are required.";
}

$conn->close();
?>
