<?php   session_start();
$dbase = mysqli_connect('localhost', 'root', 'phpM&4dmin', 'meetup');

    $elog = $_SESSION['emailloggedIN'];
   
   
    if(isset($_POST['logout'])){session_unset(); header("location","index.php");die();}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MeetUp</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-cover"></div>
        <header>
                            <nav>
                                <a href="#" align="left">Home</a>
                                <a href="index.php" ><input type="button" name="logout" value="Logout"></a>
                                <a href="#" >Profile</a>
                            </nav>
                            <br>
                            <img src="images/pic1.jpg" id="profilepic" alt="Image cannot be displayed. Check your file path and/or your 
                            browser's compatibility." height="300" width="100%"/>
        </header>	

   
    <center>
        <script>for(var i = 1; i <= 2; i++){document.write("<em style='float:left;'>Hello</em>");}</script>
        <fieldset style="float:right;">
            <form method="POST"  enctype="multipart/form-data">
            <input  type="file" name="chooseFile">
            <input  type="submit" name ="changeP" value="Change profile">
            </form>
        </fieldset>
   
       <?php

        $sql = "SELECT * FROM users WHERE email = '$elog'";
        $ret = mysqli_query($dbase,$sql);
        $userID = mysqli_num_rows($ret);
        if($userID > 0){
                while($row = mysqli_fetch_array($ret)){
                        echo "<h1>".$row['fullname']."</h1>";
                        $sql = "SELECT * FROM profileIMG WHERE email = '$elog'";
                        if($result = mysqli_query($dbase, $sql)){ 
                        if(mysqli_num_rows($result) > 0){
                            //echo "<table style='width: 50px; height: 100px;'>"; 
                            
                            $row = mysqli_fetch_array($result);
                                // echo '<img src="';
                                    //echo $row['imagename']; 
                                // echo '">';
                                echo "<script>
                                    var pic = document.getElementById('profilepic');
                                    pic.src = '".$row['imagename']."';
                                </script>";
                    }
                }
            }
        }
        
        if(isset($_POST['changeP'])){
            echo "<script>alert('Profile pic changed');</script>";
            //$bio = $_POST['bio'];
            //$picID = $_SESSION['email'];
            $target = 'images/'.time().'_'.$_FILES['chooseFile']['name'];
            $image = $target;
            $pDate = date('Y-m-d');
    
            if(move_uploaded_file($_FILES['chooseFile']['tmp_name'],$target)){
                $sql = "INSERT INTO profileIMG (email, imagename, date) VALUES ('$elog','$image','$pDate')";
                mysqli_query($dbase, $sql);
            }else{
                echo "No imaged selected!";
            }

            $sql = "SELECT * FROM profileIMG WHERE email = '$elog' ORDER BY id DESC";
            if($result = mysqli_query($dbase, $sql)){ 
                if(mysqli_num_rows($result) > 0){
                       //echo "<table style='width: 50px; height: 100px;'>"; 
                    
                       $row = mysqli_fetch_array($result);
                           // echo '<img src="';
                            //echo $row['imagename']; 
                           // echo '">';
                        echo "<script>
                            var pic = document.getElementById('profilepic');
                            pic.src = '".$row['imagename']."';
                        </script>";
                            // Free result  set
                             mysqli_free_result($result);
                             //echo $row['imagename'];
                     } else{ 
                         echo "No records were found."; 
                        } 
                } else{ 
                    echo "ERROR: Could not able to execute $sql. " . mysqli_error($dbase); 
                } 
                // Close connection 
            mysqli_close($dbase);

    
        }   
                
       ?>
     
    <hr><table>
        <tr>
            <td>
                <div id="upload-div">
                        <form method="POST"   enctype="multipart/form-data">
                        <h3>
                        <fieldset><legend><h1>Profile IMG</h1></legend>
                            <input type="file" name="profileIMG" id="profileIMG">
                            <p>Bio</p>
                            <textarea name="bio" id="bio"></textarea>
                            <p></p>
                            <button type="submit" name="save-user">Save To E-mail</button>
                            <button type="submit" name="viewIMG" >View IMG</button>
                            </h3>
                            </fieldset>
                        </form>
                </div>
            </td>

            <td>
                <div id="upload-div">
                    
                    <form method="POST">
                    <h3> 
                        <fieldset><legend><h1>Share Post</h1></legend>
                    <textarea name="comment"></textarea></p>
                        <button type="submit" name="commentBTN">post</button>
                        <button type="submit" name="viewcomments">view posts</button> 
                        </fieldset> 
                    </h3>     
                    </form>
                </div>
            </td>

            <td>
            <div id="upload-div">
            
                <form  method="POST">
               <h3>
               <fieldset><legend><h1>Messages</h1></legend>
               say: <textarea name="message"></textarea>
                   <p>to: <input type="text" name="toWho"></p>
                   <input type="submit" name="messageBtn"><input type="submit" value="Check" name="check-messages">
                    </fieldset>
               </h3>
                </form>
            </div>
            </td>

            <td>
                
                
            </td>
        </tr>
    </table> <hr>
    </center> 
    <!--strong><a href="#top" style="text-decoration: none; float: right;"><img src="images/back_to_top.png" 
			class="back_to_top" height="30" width="50"/></a></strong-->
		<br><br>
		<footer>&COPY; All rights reserved. Website designed by Mr Phindile  &TRADE; 2020.</footer>
</body>
</html>