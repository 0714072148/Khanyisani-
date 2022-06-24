<Doctype html>
<html>
<head>
<Title>Restaurant Bill System</title>
<style type = "text/css"> 

.style1
{
	border-width:0;
	border: solid gray 5px;
	width 90;
	border-radius:5px
	margin: 5px auto;
	background: white;
}

.style2
{
	border-width:0;
	border: solid gray 10px;
	width 90;
	border-radius:5px
	margin: 5px auto;
	background: gray;
	color:#ddd333;
}

.btn
{
	width: 202px;
	height:30px;
	padding:5px;
	background:gray;
	font-size:20px;
	color:white;
}

.cbtn
{
	width:50px;
	height:40px;
	font-size:20px;
	border-radius:8px;
}

</style>
</head>
<body bgcolor = "000000">
<center><img src ="C:\Users\Khanyisani\Desktop\NOLU">
<b><font color="white" style="font-size:80">Billing System</font></b>
</center>
<hr size = 5 color= "gray">
<div>
<table class = "style1">
<tr>
<td>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">

<table class = "style1">
<tr>
<td>Firstname:</td>
<td><input type="text" name="firstname" placeholder="Firstname" style="width:200px"></td>
</tr>

<tr>
<td>Surname: </td>
<td><input type="text" name="surname" placeholder="Surname" style="width:200px"></td>
</tr>

<tr>
<td>Date_of_Birth: </td>
<td><input type="text" name="dateofbirth" style="width:200px" style= "width:200px" placeholder="optional"></td>
</tr>

<tr>
<td>Gender: </td>
<td>
<input type="radio" name="gender" value="m">Male
<input type="radio" name="gender" value="f">Female
</td>
</tr>

<tr>
<td>Telephone:</td>
<td><input type="text" name="telephone" style="width:200px"></td>
</tr>

<tr>
<td>E-mail:</td>
<td>
<textarea cols="22"></textarea></td>
</tr>

<tr>
<td>Address:</td>
<td><input type="text" name="city" style="width:200px"></td>
</tr>

<tr>
<td>City:</td>
<td><input type="text" name="city" style="width:200px"></td>
</tr>

<tr>
<td>Borough:</td>
<td><input type="text" name="borough" style="width:200px"></td>
</tr>

<tr>
<td>Postcode:</td>
<td><input type="text" name="postcode" style="width:200px"></td>
</tr>

<tr>
<td style = "width: 250px">&nbsp;</td><td align = "left" style="width:400px">
<input type="reset" name="reset" value="Reset" class= 'btn'></td>
</tr>
</table>
<!--==========================================================-->

<td>
<table class="style1" width="700px">
     <tr><td>&nbsp;</td>
     <td><b><u>Make an Order</u></b></td>

</tr>

<tr>
<td>Burger Meal_(R19.95):</td>
    <td>
    <input type ="text" name ="bmeal" style="width:200px" value="<?php echo $_POST["bmeal"]* 19.95; ?>">
    </td>
</tr>

<tr>
<td>Large Fries_(R26.10):</td>
    <td>
    <input type ="text" name ="lfries" style="width:200px" value="<?php echo $_POST["lfries"]* 26.10; ?>">
    </td>
</tr>

<tr>
<td>Filet_o_Meal_(R45.30):</td>
    <td>
    <input type ="text" name ="fmeal" style="width:200px" value="<?php echo $_POST["fmeal"]* 45.30; ?>">
    </td>
</tr>

<tr>
<td>Chicken Meal_(R29.45):</td>
    <td>
    <input type ="text" name ="cmeal" style="width:200px" value="<?php echo $_POST["cmeal"]* 29.45; ?>">
    </td>
</tr>

<tr>
<td>Cheese Meal_(R87.00):</td>
    <td>
    <input type ="text" name ="mcheese" style="width:200px" value="<?php echo $_POST["mcheese"]* 87.00; ?>">
    </td>
</tr>

<tr>
<td>Drinks_(R10.20):</td>
    <td>
    <input type ="text" name ="drinks" style="width:200px" value="<?php echo $_POST["drinks"]* 10.20; ?>">
    </td>
</tr>

  <tr><td>&nbsp;</td>
  <td style="width:480px"><b><u>Total Cost</u></b></td>
  </tr>
    <!--=================================================================-->

  <tr>
  <td>Tax</td>
  <td>
  <input type="text" name="tax" style="width:200px"
  value="<?php echo (($_POST["bmeal"]* 19.95)
  + ($_POST["lfries"]* 26.10)
  + ($_POST["fmeal"]* 45.30)
  + ($_POST["cmeal"]* 29.45)
  + ($_POST["mcheese"]* 87.00)
  + ($_POST["drinks"]* 10.20))*0.15;?>">
  </td>
</tr>

<tr>
  <td>Subtotal:</td>
  <td>
  <input type="text" name="subtotal" style="width:200px"
  value="<?php echo (($_POST["bmeal"]* 19.95)
  + ($_POST["lfries"]* 26.10)
  + ($_POST["fmeal"]* 45.30)
  + ($_POST["cmeal"]* 29.45)
  + ($_POST["mcheese"]* 87.00)
  + ($_POST["drinks"]* 10.20));?>">
  </td>
</tr>

<tr>
  <td>Total</td>
  <td>
  <input type="text" name="total" style="width:200px"
  
  value="<?php echo (($_POST["bmeal"]* 19.95)
  + ($_POST["lfries"]* 26.10)
  + ($_POST["fmeal"]* 45.30)
  + ($_POST["cmeal"]* 29.45)
  + ($_POST["mcheese"]* 87.00)
  + ($_POST["drinks"]* 10.20))
  
  +((($_POST["bmeal"]* 19.95)
  + ($_POST["lfries"]* 26.10)
  + ($_POST["fmeal"]* 45.30)
  + ($_POST["cmeal"]* 29.45)
  + ($_POST["mcheese"]* 87.00)
  + ($_POST["drinks"]* 10.20))*0.15)
  
  ;?>">
 
  </td>
</tr>

<tr>

<td>&nbsp;</td><td align= "left" style="width:400px">
    <input type ="submit" value = "submit" name ="add" class = "btn"></td>

  </tr>
  
</table>
</form>
</td>

<!--===================Calculator=====================================-->

<td>
<form name ="Calculator" class ="style2">
<input name="display" Placeholder="0" style="width:212px; height:40px;text-align:right; font-size:30; border-radius:8px; margin:3px;"/>
<br>
<input type = "button" value="7"  onclick="document.Calculator.display.value +='7'" class = "cbtn"/>
<input type = "button" value="8"  onclick="document.Calculator.display.value +='8'" class = "cbtn"/>
<input type = "button" value="9"  onclick="document.Calculator.display.value +='9'" class = "cbtn"/>
<input type = "button" value="+"  onclick="btnplus()" class = "cbtn"/>
<br>
<input type = "button" value="4"  onclick="document.Calculator.display.value +='4'" class = "cbtn"/>
<input type = "button" value="5"  onclick="document.Calculator.display.value +='5'" class = "cbtn"/>
<input type = "button" value="6"  onclick="document.Calculator.display.value +='6'" class = "cbtn"/>
<input type = "button" value="-"  onclick="btnsub()" class = "cbtn"/>
<br>
<input type = "button" value="1"  onclick="document.Calculator.display.value +='1'" class = "cbtn"/>
<input type = "button" value="2"  onclick="document.Calculator.display.value +='2'" class = "cbtn"/>
<input type = "button" value="3"  onclick="document.Calculator.display.value +='3'" class = "cbtn"/>
<input type = "button" value="*"  onclick="btnmult()" class = "cbtn"/>
<br>
<input type = "button" value="0"  onclick="document.Calculator.display.value +='0'" class = "cbtn"/>
<input type = "button" value="%"  onclick="btnMod()" class = "cbtn"/>
<input type = "button" value="."  onclick="btndot()" class = "cbtn"/>
<input type = "button" value="/"  onclick="btndiv()" class = "cbtn"/>
<br>
<input type = "button" value="="  onclick="document.Calculator.display.value = eval(document.Calculator.display.value)" style = "width:101px; height:40px; font-size:30; border-radius:8px; margin:3px"/>
<input type = "button" value="c"  onclick="btnclear()" style = "width:101px; height:40px; font-size:30; border-radius:8px"/>

</form></td>

</tr>

</table></div>

<hr size = 5 color = "gray">
<script>

function btnplus()
{    document.Calculator.display.value +="+";
document.Calculator.display.style.textAlign="right";}
function btnsub()
{    document.Calculator.display.value +="-";
document.Calculator.display.style.textAlign="right";}
function btnmult()
{    document.Calculator.display.value +="*";
document.Calculator.display.style.textAlign="right";}
function btnpMod()
{    document.Calculator.display.value +="%";
document.Calculator.display.style.textAlign="right";}
function btndot()
{    document.Calculator.display.value +=".";
document.Calculator.display.style.textAlign="right";}
function btndiv()
{    document.Calculator.display.value +="/";
document.Calculator.display.style.textAlign="right";}
function btnclear()
{    document.Calculator.display.value +="";
document.Calculator.display.style.textAlign="right";}
</script>
<!--===================================================================-->
</td>
</tr>
</table>
</body>
</html>
