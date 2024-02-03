<?php
include ("..\database\connection.php");
session_start();

$action = isset($_POST['action']) ? $_POST['action'] : '';

switch ($action) {
        case 'login':
            $email = $_POST['e-mail'];
            $password = $_POST['password'];
            
            $select_user = "SELECT * FROM admin WHERE email='$email'";
            $run_query = mysqli_query($conn, $select_user);
    
            if ($run_query && mysqli_num_rows($run_query) > 0) {
                $row = mysqli_fetch_assoc($run_query);
                $storedPasswordHash = $row['password'];
    
                if (password_verify($password, $storedPasswordHash)) {
                    $_SESSION['username'] = $email;
                    header("location:../admin/index.php");
                    exit();
                } else {
                    $_SESSION['login_error'] = "Invalid email or password.";
                    header("location:login.php");
                    exit();
                }
            } else {
                $_SESSION['login_error'] = "User not found.";
                header("location:login.php");
                exit();
            }
            case 'registration':
                $email = $_POST['e-mail'];
                $number = $_POST['number'];
                $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            
                // Check if the email is already registered
                $check_sql = "SELECT * FROM admin WHERE email = '$email'";
                $check_query = mysqli_query($conn, $check_sql);
            
                if (mysqli_num_rows($check_query) > 0) {
                    // Email already registered
                    $_SESSION['register_error'] = "E-mail already registered. You can login direclty";
                    // header("location:login.php");
                } else {
                    // Email not registered, proceed with registration
                    $sql = "INSERT INTO admin(email, contact, password) VALUES('$email','$number','$password')";
                    $run_query = mysqli_query($conn, $sql);
            
                    if ($run_query) {
                        header("location:../admin/index.php");
                        exit();
                    } else {
                        echo "Registration failed.";
                    }
                }
                header("location:login.php");
                exit();
            break;
    
        // ... (rest of your existing cases) ...
    }
?>