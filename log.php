<?php
// ajax_handler.php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Handle form data
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Include DB connection and error handling
    require_once './DB.php';

    // Check if the database connection is successful
    if ($mysqli->connect_error) {
        http_response_code(500); // Internal Server Error
        echo json_encode(["error" => "Database connection failed"]);
        exit;
    }

    // Retrieve the hashed password from the database based on the username
    $stmt = $mysqli->prepare("SELECT userid, fullname, hash, utype FROM tbl_user WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->bind_result($userid, $fullname, $password_hash, $utype);
    $stmt->fetch();
    $stmt->close();

    // Verify the password and proceed if it's correct
    if ($password_hash !== null && password_verify($password, $password_hash)) {
        session_start();
        $_SESSION['sys_user_dir'] = $utype;
        $_SESSION['userid'] = $userid;
        $_SESSION['full_name'] = $fullname;
        
        // header('location:./app/');
        echo json_encode(["success" => "<strong class='text-success'>Login successful</strong>"]);
    } else {
        echo json_encode(["error" => "<strong class='text-danger'>Invalid username or password</strong>"]);
    }

    $mysqli->close();
} else {
}
