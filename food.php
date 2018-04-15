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
        <li class="active"><a href="index.php">Home<br />
<span>home page</span></a></li>
       <li><a href="contact.php">Contact Us<br />
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
        <div class="article">
          <h2><u>Get to know Mumbai through its diverse and delicious food!</u></h2>
          <div class="clr"></div>
         <p>The Maximum City is famous across India for its outstanding street food but discovering good eateries on your own is not always easy. Not to worry, that’s where we come in! We’ll help you experience all the flavours the city has to offer by guiding you through Mumbai’s
best street food areas. You’ll get to try Mumbai classics such as bhel puri and pav bhaji, as well as some lesser-known foods unique to the bustling Mohammed Ali khao gaullis (eating lanes). Hope you’re hungry!
Note: many foods we’ll pass by, and a few items we’ll try in the Mohammed Ali Road area are non-vegetarian. However, there are plenty of options for vegetarians so just please let us know when booking. All snacks at Chowpatty Beach are vegetarian.</p>
          <div class="clr"></div>
					<div id="highlight" style="width:50%;height:600px;border:10px; float:left"><img src="images/9.png"height="400px";width="400px"><h2>Chowpatty Beach</h2>
<h7><p text-align="center;"width="300px">A foodie’s visit to Mumbai is not complete without a stop at Chowpatty Beach - the best place to taste Mumbai’s (vegetarian) favourites such as pav bhaji and pani puri.</p></h7></div>
   <div id="highlight" style="width:50%;height:600px;border:10px;float:right"><img src="images/1.png"height="400px";width="400px"><h2>Sev Puri</h2>
<h7><p text-align="center;"width="300px">Munch on this classic Mumbai street food while you watch the sun set over Chowpatty Beach. It's potato, herbs, chutneys, and sev (thin strips of fried chickpea flour) served on round discs.</p></h7></div>
         
   


        </div>
        <div class="article">
          <h2><span><hr></hr></span></h2>
          
          
          <div class="clr"></div>
            <div id="highlight" style="width:50%;height:600px;border:10px; float:left"><img src="images/2.png"height="400px";width="400px"><h2>Indian Sweets</h2>
<h7><p text-align="center;"width="300px">Sample hand-churned ice cream in unfamiliar flavours at a 120-year-old shop and satisfy your sweet tooth with sugary, bright orange jalebi, the national sweet of India</p></h7></div>
<div id="highlight" style="width:50%;height:600px;border:10px;float:right"><img src="images/3.png"height="400px";width="400px"><h2>Kulfi</h2>
<h7><p text-align="center;"width="300px"> Still on Chowpatty, sample Kulfi, a frozen dairy dessert very similar to ice cream, but much denser and creamier. Popular flavours include rose, mango, pistachio, cardamom and saffron.</p></h7></div>
<h2><span><hr></hr></span></h2>
<div id="highlight" style="width:50%;height:600px;border:10px;float:left"><img src="images/4.png"height="400px";width="400px"><h2>Mohammed Ali Road</h2>
<h7><p text-align="center;"width="300px">Witness the buzz of activity surrounding Mohammed Ali Road, an area with several important mosques and the epicentre of the city’s Ramadan celebrations.</p></h7></div><br><br><br><br><br>
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
<a href="http://www.facebook.com/" target="_blank"><img src="images/facebook.png" alt="Facebook" id="f"/></a>
 
<!-- Twitter -->
<a href="http://twitter.com/" target="_blank"><img src="images/twitter.png" alt="Twitter" id="t"/></a>
 
<!-- Google+ -->
<a href="https://plus.google.com" target="_blank"><img src="images/google.png" alt="Google" id="g"/></a>
 
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
