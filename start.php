<html>
<head>
<style type="text/css">

 .main {
    width: 100%;
    padding: 0;
    margin: 0 auto;
    background: #292C4F;
    background-color: rgba(41, 44, 79, 0.5);
}
h1 {
    color: #fff;
    font: normal 44px/0em Arial, "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
    font-weight: 300;
    letter-spacing: -2px;
}
h3 {
    text-decoration: underline;
    text-align: center;
    color: white;
    font: normal 30px/1.2em Arial, "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
    font-weight: 300;
    letter-spacing: -1px;
    opacity: 0.9;
}
h2 {
    padding: 10px 0 0 0;
    margin: 0px;
    background: #292C4F;
    color: #fff;
    font-size: 21px;
    font-weight: bold;
    line-height: 1.3em;
    border: 2px dashed #fff;
    border-radius: 5px;
    box-shadow: 0 0 0 4px #292C4F, 2px 1px 6px 4px rgba(10, 10, 0, 0.5);
    text-shadow: -1px -1px #000000;
    font-weight: normal;
    opacity: 0.8;
    text-align: center;
}
body {
    background: #292C4F url(images/bck.jpg);
    background-size: 100% 100%;
    background-repeat: no-repeat;
    color: white;
    font-size: 14px;
}
.contact {
    position: fixed;
     top: 200px;
     left: 100px;
     width: 180px;
     height: 280px;
     transition: all .2s ease-in-out;
     text-align: center;
     background: #292C4F;
     opacity: 0.75;
     padding: 20px 10px;
     box-shadow: 0 0 0 4px #292C4F, 4px 4px 200px rgba(242, 243, 104, 1);
     border-radius: 100px;
     border-top-right-radius: 1px;
     border-bottom-left-radius: 1px;
     width: 520px;
     border: 2px dashed #FFFFF2;
}
.contact:hover{
	transform: scale(1);
     box-shadow: 0 0 0 4px #292C4F, 4px 4px 40px rgba(242, 243, 104, 1);
     border-radius: 1px;
}

.contact1 {
    border: 2px dashed #FFFFF2;
     position: fixed;
     top: 200px;
     left: 690px;
     width: 180px;
     height: 280px;
     transition: all .2s ease-in-out;
     text-align: center;
     background: #292C4F;
     opacity: 0.75;
     padding: 20px 10px;
     box-shadow: 0 0 0 4px #292C4F, 4px 4px 200px rgba(242, 243, 104, 1);
     border-radius: 1px;
     border-top-right-radius: 100px;
     border-bottom-left-radius: 100px;
     width: 520px;
}
.contact1:hover{
	transform: scale(1);
     box-shadow: 0 0 0 4px #292C4F, 4px 4px 40px rgba(242, 243, 104, 1);
     border-radius: 1px;
}
#name,
#password,
#mail {
    width: 250px;
    margin-bottom: 15px;
    background: none repeat scroll 0% 0% #FFFFF2;
    border: 2px solid #999999;
    height: 30px;
    color: #000000;
    border-radius: 0px;
    opacity: 1.0;
    text-size: 4;
 box-shadow:0 0 20px #FFFF26;
}



#submit {     
                 font-size: 20px;          
	position:relative;
background:none repeat scroll 0% 0% #292C4F;
    display: inline-block;
    padding: 12px 25px;
    line-height: 1.05em;
 box-shadow: 1px 2px 30px #CECEBF;
    border-radius: 1px;
    border: 1px solid #FFFFF2;
    text-decoration: none;
    opacity: 0.9;
    cursor: pointer;
 color:white;
 transition:all 0.2s ease-in-out;
}
#submit:hover {
     box-shadow: 0px 0px 0 #F6F89D;
transform: scale(0.9); }
#er {
    color: #FFFFF2;
    text-align: center;
    margin: 10px 0px;
    font-size: 17px;
}
</style>

</head>
<body>

<?php
 error_reporting('E_ALL ^ E_NOTICE');
 if(isset($_POST['submit']))
 {
  mysql_connect('localhost','root','') or die(mysql_error());
  mysql_select_db('new') or die(mysql_error());
  $name=$_POST['name'];
  $password=$_POST['password'];
  $mail=$_POST['mail'];
  $q=mysql_query("select * from login where name='".$name."' or mail='".$mail."' ") or die(mysql_error());
  $n=mysql_fetch_row($q);
  if($n>0)
  {
   $er='The username name '.$name.' or mail '.$mail.' is already present in our database';
  }
  else
  {
   $insert=mysql_query("insert into login values('".$name."','".$password."','".$mail."')") or die(mysql_error());
   if($insert)
   {
    $er='You are registered successfully';
   }
   else
   {
    $er='Please try again';
   }
  }
 }
?>
<div class="main">

<div class="contact">
<h1>Register with us</h1>
     <div id="er"><?php echo $er; ?></div>
     <form action="#" method="post">
      <table id="tbl" align="center">
       <tr><td>Name:</td><td><input type="text" name="name" id="name" required></td></tr>
       <tr><td>Password:</td><td><input type="text" name="password" id="password" required></td></tr>
    <tr><td>Email:</td><td><input type="email" name="mail" id="mail" required></td></tr>
       <tr><td></td><td><input type="submit" name="submit" id="submit" value="Signup"></td></tr>
      </table>
     </form>
</div>
<div class="contact1">
<?php
session_start();
if(isset($_POST['lsubmit']))
{
 mysql_connect('localhost','root','') or die(mysql_error());
 mysql_select_db('new') or die(mysql_error());
 $name=$_POST['lname'];
 $pwd=$_POST['lpwd'];
 if($name!=''&&$pwd!='')
 {
   $query=mysql_query("select * from login where name='".$name."' and password='".$pwd."'") or die(mysql_error());
   $res=mysql_fetch_row($query);
   if($res)
   {
    $_SESSION['name']=$name;
    header('location:index.php');
   }
   else
   {
    $er1='You entered username or password is incorrect';
   }
 }
 else
 {
  $er1='Enter both username and password';
 }
}
?>
<h1>Login</h1>
  <div id="er"><?php echo $er1; ?></div>
<form action='#' method='post'>
<table cellspacing='5' align='center'>
<tr><td>User name:</td><td><input type='text' name='lname' id="name" required></td></tr>
<tr><td>Password:</td><td><input type='password' name='lpwd'id="password"required></td></tr>
<tr><td></td><td><input type='submit' name='lsubmit' value='Login'id="submit" /></td></tr>
</table>

</form>
</div>
<div class="footer"><h2>Welcome to Mumbai.com<br>Please SignUp | Login </h2></div>
</div>


</body>
</html>