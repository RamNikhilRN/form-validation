<?php
   
    // Database connection
    include('db.php');
    
    // Error & success messages
    global $success_msg, $email_exist, $emptyError1, $emptyError2, $emptyError3, $emptyError4;
    

    if(isset($_POST["submit"])) {
        $username     = $_POST["username"];
        $fullname      = $_POST["fullname"];
        $email         = $_POST["email"];
        $password      = $_POST["password"];

        // verify if email exists
        $emailCheck = $connection->query( "SELECT * FROM users WHERE email = '{$email}' ");
        $rowCount = $emailCheck->fetchColumn();

        // PHP validation
        if(!empty($username) && !empty($fullname) && !empty($email)  && !empty($password)){
            
            // check if user email already exist
            if($rowCount > 0) {
                $email_exist = '
                    <div class="alert alert-danger" role="alert">
                        User with email already exist!
                    </div>
                ';
            } else {

            // Password hash
            $password_hash = password_hash($password, PASSWORD_BCRYPT);

            $sql = $connection->query("INSERT INTO users (username, fullname, email, password) 
            VALUES ('{$username}', '{$fullname}', '{$email}', '{$password_hash}' )");
            
                if(!$sql){
                    die("MySQL query failed!" . mysqli_error($connection));
                } else {
                    $success_msg = '<div class="alert alert-success">
                        User registered successfully!
                </div>';
                }
            }
        } else {
            if(empty($username)){
                $emptyError1 = '<div class="alert alert-danger">
                    user name is required.
                </div>';
            }
            if(empty($fullname)){
                $emptyError2 = '<div class="alert alert-danger">
                    full name is required.
                </div>';
            }
            if(empty($email)){
                $emptyError3 = '<div class="alert alert-danger">
                    Email is required.
                </div>';
              
            }
            if(empty($password)){
                $emptyError4 = '<div class="alert alert-danger">
                    Password is required.
                </div>';
            }            
        }
    }
?>