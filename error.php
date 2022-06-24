<?php
    session_start(); 
    //$fullname = $_POST['fullname']; 
   // $email = $_POST['email']; 
    
    //
   
    $dbase = mysqli_connect('localhost', 'root', 'phpM&4dmin', 'meetup');

    if(isset($_POST['sign-up'])){

        if ($dbase){

           $fullname = $_POST['fullname']; 
           $email = $_POST['email']; 
            $password = $_POST['password']; 
            $conPassword = $_POST['conPassword']; 
            $cellNumber = $_POST['cellnumber']; 
            $gender = $_POST['gender'];
            $regDate = date('Y-m-d');

            if($password === $conPassword){
                $mail = mysqli_query($dbase,"SELECT email FROM users WHERE email = '$email'");
                $result = mysqli_num_rows($mail);

                if($result > 0)
                {   //if the user email has been used before...terminate the script!
                    echo "<script> alert('Hey man... your email has been used!!!');</script>";
                }
                else
                {
                    //continue to sign up the NEW user.
                    $enc_pass = md5($password);
                    $sql = "INSERT INTO users(fullname,email,password,phone,gender,regdate)VALUES('$fullname','$email','$enc_pass','$cellNumber','$gender','$regDate')";
                    mysqli_query($dbase,$sql);
                    echo "<script> alert('Hey man... You have successfully been signed up!!!');</script>";
                    header("Location: index.php");
                }

            }else{
                echo "<script> alert('Hey man... your passwords do not match!!!');</script>";
            }

            echo "Hi";
        } else{
            echo "ERROR";
        }
    }

    if(isset($_POST['loginBtn'])){
        
        $loginEmail = $_POST['loginEmail'];
        $loginPassword = $_POST['loginPassword'];
        $_SESSION['emailloggedIN'] = $loginEmail;
        $dec_password = md5($loginPassword);
        $checkmailpass = mysqli_query($dbase,"SELECT email FROM users WHERE email = '$loginEmail' AND password ='$dec_password'");
        $results = mysqli_num_rows($checkmailpass);
        if ($results > 0){
            echo $_SESSION['emailloggedIN'];
                       echo '<script>
                       alert("hi Logged IN");
                       </script>';
            header("Location:logged.php");

                
        }else{
            echo  '<script>alert("Eish NOt looged... retry.");</script>';
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>450ERROR</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<p><h1>ERROR :C</h1><a href="index.php"> retry</a></p>
    <center>
        <script>
            var age = parseInt(prompt("How old are you?"));

            for(var i = 1; i <= age; i++){
                    document.write("<h1 style='color: yellow; font-size: larger;'>Error</h1>");
                
            }

        </script>
    </center>    
</body>
</html>




 


