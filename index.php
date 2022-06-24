<?php session_start();


    //echo $_SESSION['emailloggedIN'];
    session_destroy();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Welcome</title>
		<meta charset="utf-8"/>
		<meta name="keywords" content="Web Technology, Web Tech, HTML5, CSS3, 511, website development"/>
		<link rel="stylesheet" href="style.css" type="text/css"/>
		
	</head>
	<body>
			<center><p id='welcome'></p></center>
			
			<a name="top"></a>
			<header>
					<nav>
						<a href="index.php" align="left">Home</a>
                        <a href="#" style ="float: left" >Contact Us</a>
                        <a href="#" onclick="LogIN();" style="float: right">Log In</a>
						<a href="#" onclick="SignIN();" style="float: right">Sign Up</a>
					</nav>
					<br>
					<img src="images\pic1.jpg" alt="Image cannot be displayed. Check your file path and/or your 
					browser's compatibility." height="300" width="100%"/>
			</header>		

		
	<div id="home">
		<center><h1>Introduction</h1></center>
		
		<font color="blue"><p><em>Web technologies</em> is a general 
		term referring to the many languages and multimedia 
		packages that are used in conjunction with one another, to produce dynamic web sites 
		such as this one. </br> Each separate technology is fairly limited on it's own, and tends to 
		require the dual use of at least one other such technology. </br> Therefore we can conclude 
		that all of the components that make up a site are <strong>interdependent on one another</strong>.</br>
		Let's have a look at some of these components/technologies.
		</p>
		<p>
		This guide is intended to briefly introduce the beginner to each of these separate 
		technologies, without attempting to teach anyone how to program. If you intend to 
		study web design further, check our links section for many useful tutorial sites.
		</p>

		<p>
			To get more information from us and our weekly newsletter <b><em><a href="#" onclick="contactUs()">Click here</a></em></b>
		</p>
		</font>
    </div>
    
	<div id="sign-up">
		<h1>Sign Up</h1>
        <center>
		<span style="color:red" id="message"></span>
        
        <form name="regForm" action="error.php" method="POST">
            <br>
                <fieldset style="width: 70%">
                        <legend><b>Personal Details</b></legend>
                        
            <table>
              
                <tr>
                    <td width="45%"><label>Full Names</label></td>
                    <td width="10%"> : </td>
                    <td width="45%"><input type="text" name="fullname" placeholder="Full Names" required/></td>
                </tr>
                <tr>
                    <td width="45%"><label>Email Address</label></td>
                    <td width="10%"> : </td>
                    <td width="45%"><input type="email" name="email" placeholder="Email" required/></td>
                </tr>
                <tr>
                    <td width="45%"><label>Password</label></td>
                    <td width="10%"> : </td>
                    <td width="45%">
                    <input type="password" name="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                        title="Must contain at least one number and one uppercase and lowercase letter, 
                        and at least 8 or more characters" required/></td>
                </tr>
                <tr>
                    <td width="45%"><label>Confirm Password</label></td>
                    <td width="10%"> : </td>
                    <td width="45%"><input type="password" name="conPassword" placeholder="Confirm Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                        title="Must contain at least one number and one uppercase and lowercase letter, 
                        and at least 8 or more characters" required/></td>
                </tr>
                <tr>
                    <td width="45%"><label>Cell Number</label></td>
                    <td width="10%"> : </td>
                    <td width="45%"><input type="tel" name="cellnumber" placeholder="Cell Phone Number" required/></td>
                </tr>
                <tr>
                    <td width="45%"><label>Gender</label></td>
                    <td width="10%"> : </td>
                    <td width="45%"><input type="radio" name="gender" value="Male" required>Male</input>
                    <input type="radio" name="gender" value="Female" required>Female</input></td>
                </tr>
            
        </table>

        </fieldset><br>
        <!--fieldset style="width: 70%">
                <legend><b>Web Tech Course Info</b></legend>
                <table>
                <tr>
                    <td colspan="3"><label>Which Web Technologies are you familiar with?</label></td>
                </tr>
                <tr>
                    <td colspan="3">
                        <input type="checkbox" name="Tech" value="HTML">HTML</input>
                        <br><input type="checkbox" name="Tech" value="CSS">CSS</input>
                        <br><input type="checkbox" name="Tech" value="JS">JavaScript</input>
                    </td>
                </tr>
                <tr>
                        <br><td><label>Which Online Courses are you most interested in?</label></td>
                        <td width="10%"> : </td>
                        <td>
                            <select>
                                <option>HTML5 - Full Course</option>
                                <option>CSS3 - Introductory Course</option>
                                <option>CSS3 - Advanced</option>
                                <option>JavaScript - Introductory Course</option>
                                <option>JavaScript - Advanced</option>
                            </select>
                        </td>
                    </tr>
            
            </table>
        </fieldset-->
            
        <input type="submit" name="sign-up" value="Register"/>
        </form>
        </center>
    </div>
    
	<div id="login">
		<form action="error.php" method="POST">
            <fieldset>
            <table>
                <h1>Log In</h1>
                <tr>
                    <td width="45%"><label>Email Address</label></td>
                    <td width="10%"> : </td>
                    <td width="45%"><input type="email" name="loginEmail" placeholder="Email" required/></td>
                </tr>
                <tr>
                    <td width="45%"><label>Password</label></td>
                    <td width="10%"> : </td>
                    <td width="45%"><input type="password" name="loginPassword" placeholder="Password"
                        title="Must contain at least one number and one uppercase and lowercase letter, 
                        and at least 8 or more characters" required/></td>
                </tr>
            </table><br><br>
            <center> <input type = "submit" onclick="hide3()" Value="LOG IN" name ="loginBtn"></center>
            </fieldset>
		</form>
    </div>

    <div id="loggedIn">
    </div>
    
		
		<strong><a href="#top" style="text-decoration: none; float: right;"><img src="images/back_to_top.png" 
			class="back_to_top" height="30" width="50"/></a></strong>
		<br><br>
		<footer>&COPY; All rights reserved. Website designed by Mr Phindile  &TRADE; 2020.</footer>
	</body>

	<script src="script.js"></script>
</html>
