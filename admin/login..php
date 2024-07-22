<?php
session_start();
include('includes/db_connection.php'); // Include your database connection script

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    try {
        // Retrieve hashed password from database
        $sql = "SELECT email, password FROM admin WHERE email = :email";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();
        $admin = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($admin) {
            // Verify password
            if ($password == $admin['password']) {
                // Password correct, start session
                $_SESSION['admin_email'] = $admin['email'];
                header("Location: dashboard.php");
                exit;
            } else {
                // Password incorrect
                header("Location: index.php?error=invalid");
                exit;
            }
        } else {
            // Admin not found
            header("Location: index.php?error=invalid");
            exit;
        }
    } catch (PDOException $e) {
        die("Error: " . $e->getMessage());
    }
}
?>
