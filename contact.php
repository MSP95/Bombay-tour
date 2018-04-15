<html>
<head>
<title>Mumbai</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="images/favicon.png" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>

<script>
function initialize()
{
  var mapProp = {
    center: new google.maps.LatLng(18.5830,72.4933),
    zoom:7,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}

function loadScript()
{
  var script = document.createElement("script");
  script.type = "text/javascript";
  script.src = "http://maps.googleapis.com/maps/api/js?key=&sensor=false&callback=initialize";
  document.body.appendChild(script);
}

window.onload = loadScript;
</script>
</head>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="logo">
        <h1><a href="index.php"> Mumbai</a><small> Know more about</small></h1>
      </div>

      <div class="menu_nav">
       <ul>
        <li><a href="index.php">Home<br />
<span>home page</span></a></li>
       <li class="active"><a href="contact.php">Contact Us<br />
<span>Call me now</span></a></li><li>
          
         
          <li><a href=""">
		  <?php     
         session_start();
         $name=$_SESSION['name'];     
         echo'Welcome  '. $name.'<br><span>Explore</span>';
		 echo'<a href="signout.php">Signout<br><span>Thank You</span></a>';
         ?></a>
		</li>
      </ul>     
        <div class="clr"></div>
      </div>
      <div class="clr"></div>
      <div class="header_img"><img src="images/main_img.jpg" alt="image" width="1349" height="320" /></div>
      <div class="menu_nav1">
       <ul>
	   <li class="active"><a href="index.php">Home<br />
								<span>home page</span></a></li>
        <li><a href="gateway.php">Gateway<br />
								<span>Of India</span></a></li>
		
		<li><a href="siddhivinayak.php">Siddhivinayak <br />
								<span>Temple</span></a></li> 
		<li><a href="marine.php">Marine<br />
								<span>Lines</span></a></li> 
		<li><a href="elephanta.php">Elephanta <br />
								<span>Caves</span></a></li>
        <li><a href="sealink.php">Bandra-Worli<br />
								<span>Sea Link</span></a></li>
        <li><a href="mary.php">Mount Mary<br />
								<span>Church</span></a></li>
        <li><a href="cst.php">Chhtatrapati Shivaji<br />
								<span>Terminus</span></a></li>
        <li><a href="adlabs.php" class="last">Adlabs<br />
								<span>Imagica</span></a></li>
		<li><a href="pagoda.php" class="last">Pagoda<br />
								<span>Temple</span></a></li>
		<li><a href="kanheri.php" class="last">kanheri<br />
								<span>Caves</span></a></li>
		<li><a href="essel.php" class="last">Essel World<br />
								<span>Water kingdom</span></a></li>
      </ul>     
        <div class="clr"></div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="clr"></div>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
	  <?php
 error_reporting('E_ALL ^ E_NOTICE');
 if(isset($_POST['submit']))
 {
  
    $er='Mail Sent. Thank you. We will contact you soon.';
 
 }
?>
        <div class="article">
          <h2><span>Contact Us</span></h2><div class="clr"></div>
          <p>If you want to join us,or for any further queries</p>
        </div>
        <div class="article">
          <h2><span>Send us</span> mail</h2><div class="clr"></div>
		   <div id="er"><h2><?php echo $er; ?></h2></div>
          <form action="#" method=post" id="sendemail">
          <ol><li>
            <label for="name">Name (required)</label>
            <input id="name" name="name" class="text" />
          </li><li>
            <label for="email">Email Address (required)</label>
            <input id="email" name="email" class="text" />
          </li><li>
            <label for="website">Website</label>
            <input id="website" name="website" class="text" />
          </li><li>
            <label for="message">Your Message</label>
            <textarea id="message" name="message" rows="8" cols="50"></textarea>
          </li><li>
            <input type="submit" name="submit" id="submit" value="send">
            <div class="clr"></div>
          </li></ol>
          </form>
        </div>
       
      </div>
      <div class="sidebar">
  
      <div class="gadget">
          <h2>Menu</h2>
          <div class="clr"></div>
          <ul class="sb_menu">
            <li><a href="index.php"><b>Home</b></a></li>
            <li><a href="lifeline.php">Mumbai's Lifeline</a></li>
            <li><a href="food.php">Tour to Food</a></li>
            <li><a href="hotels.php">Hotels to Stay</a></li>
           
         
          </ul>
        </div>
        <div class="gadget">
          <h2><span>Info:</span></h2>
          <div class="clr"></div>
          <ul class="ex_menu">
            <li>Country:	 India<br>
State:	Maharashtra<br>
District:	Mumbai City<br>
Former name:	Bombay<br>
Official Language:	Marathi<br>
First settled:	1507<br>
Named for:	Mumbadevi<br>

Area:<br>
 • Metropolis: 603 km2<br>
 • Metro:	4,355[3][4] km<br>
Elevation: 14 m (46 ft)<br>
Population (2011):<br>
 • Metropolis :12,478,447<br>
 • Rank:	1st<br>
 • Density:	21,000/km<br>
 • Urban:	18,414,288 (1st)<br>
 • Metro:    20,748,395<br>
Demonym:Mumbaikar<br>
Time zone:IST (UTC+5:30)<br>
ZIP code(s):400 001 to 400 107<br>
Area code(s):+91-22<br>
Vehicle registration:MH- 01,02,03,47<br></li>
            
          </ul>
        </div>
        <div class="gadget">
          <h3><u>Thought of the Day:</u></h3>
          <div class="clr"></div>
          <p>   <img src="images/test_1.gif" alt="image" width="19" height="20" /> <em>“I found Bombay and opium, the drug and the city, the city of opium and the drug Bombay” 
</em>.<img src="images/test_2.gif" alt="image" width="19" height="20" /></p>
          <p style="float:right;"><strong>― Jeet Thayil, Narcopolis</strong></p>
          </div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="fbg">
    <div class="fbg_resize">
      <div class="col c1">
        <h2><span>Image Gallery</span></h2>
        <a href="#"><img src="images/gallery_1.jpg" width="58" height="58" alt="pix" /></a> <a href="#"><img src="images/gallery_2.jpg" width="58" height="58" alt="pix" /></a> <a href="#"><img src="images/gallery_3.jpg" width="58" height="58" alt="pix" /></a> <a href="#"><img src="images/gallery_4.jpg" width="58" height="58" alt="pix" /></a> <a href="#"><img src="images/gallery_5.jpg" width="58" height="58" alt="pix" /></a> <a href="#"><img src="images/gallery_6.jpg" width="58" height="58" alt="pix" /></a> </div>
      <div class="col c2">
        <!-- Facebook -->
<a href="http://www.facebook.com/" target="_blank"><img src="images/facebook.png" alt="Facebook" id="Facebook"/></a>
 
<!-- Twitter -->
<a href="http://twitter.com/" target="_blank"><img src="images/twitter.png" alt="Twitter" id="Twitter"/></a>
 
<!-- Google+ -->
<a href="https://plus.google.com" target="_blank"><img src="images/google.png" alt="Google" id="Google"/></a>
 
        <p><br />
          </p>
      </div>
      <div class="col c3">
        <h2><span>Contact</span></h2>
        <p>Hello. I'm Manish Sunil Patil. <br>Currently studying Engineering in Mumbai University.<br>Ramrao adik Institute of Technology[Nerul].<br><a href="#">manishpatilandroid@gmail.com</a><br>
          <a href="#">+91 9619702248</a></p>
      </div>
      <div class="clr"></div>
    </div>
    <div class="footer">
      <p class="lr"> Copyright @<a href="#">MANISH</a>.</p>
      <p class="lf">Layout by <a href="#">MANISH</a>.</p>
      <div class="clr"></div>
    </div>
  </div>
</div>
</body>
</html>
