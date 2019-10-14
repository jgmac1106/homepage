<html>
 <head>
    <title>INTERTEXTrEVOLUTION</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/reset.css">
    
    <link rel="stylesheet" href="/styles.css">
     <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-9ralMzdK1QYsk4yBY680hmsb4/hJ98xK3w0TIaJ3ll4POWpWUYaA2bRjGGujGT8w" crossorigin="anonymous">

    <script src="/script.js" defer></script>
    <link rel="webmention" href="https://webmention.io/jgmac1106homepage.glitch.me/webmention" />
<link rel="pingback" href="https://webmention.io/jgmac1106homepage.glitch.me/xmlrpc" />
    <link rel="authorization_endpoint" href="https://indieauth.com/auth">
<link rel="token_endpoint" href="https://tokens.indieauth.com/token">
    <link rel="webmention" href="https://webmention.io/jgregorymcverry.com/webmention" />
<link rel="pingback" href="https://webmention.io/jgregorymcverry.com/xmlrpc" />
  </head>
  <body>
    <header>
       <a href="index.html">
   <div class="leading">
     <h1>
       INTERTEXTrEVOLUTION
     </h1>
     <h2>
       Make.Hack.Play.Learn
     </h2>
      </div>
     </a>  
          <nav>
    <div class="1">
    <a href="aboutme.html" class="navLinks">About</a>
    </div>
    <div class="2">
    <a href="https://quickthoughts.jgregorymcverry.com" class="navLinks">Blog</a>
    </div>
    <div class="3">
    <a href="articles.html" rel="feed" class="navLinks">Articles</a>
    </div>

        <div class="4">
    <a href="resume.html" class="navLinks">Vita</a>
    </div>
      <div class="5">
    <a href="https://consulting.jgregorymcverry.com/" class="navLinks">Consulting</a>
    </div>
        <div class="6">
    <a href="2toPonder.html" class="navLinks">Podcasts</a>
    </div>
        <div class="7">
    <a href="following.html" class="navLinks">Following</a>
    </div>
            <div class="8">
    <a href="annotations.html" class="navLinks">Annotations</a>
    </div>
            <div class="8">
    <a href="imagecredits.html" class="navLinks">Img Credits</a>
    </div>
  </nav>
    </header>
<?php
//include the function to clean data

//create an array for errors
$errors=array();
//start cleaning the data

//set an array to hold valid choice values

//main logic of what to do when



//--------begin functions--------------
function validate($name, $note){
  global $errors;
  if($name=="")
    $errors[0]= "You must fill in a name.";
 if($note=="")
    $errors[0]= "You must have something to say.";
  
//see if there are errors
$size = count($errors);
	if($size > 0)
  	  addForm($name, $email, $url; $instagram, $twitter,  $errors);
  	else
  	  addGuestbook($name, $email, $url, $instagram, $twitter, $note);  
}//end validate

function addGuestbook(){
	// include header file
	include "header.html";

	//open textfile and write data to file
	print "adding guestbook function";
	
	//include html footer file
	include "footer.html";
}//end addGuestbook

function addForm($name, $email, $url, $instagram, $twitter; $note $errors){
	// include header file
	$self = $_SERVER['PHP_SELF'];
	include "header.html";
print <<<HERE
	<form method="post" action="$self">
	<div class="form-group">
	<p> Sign the Guestbook: </p>
	<p>Name: <input name="name" type="text" id="name" size="80" value="$name" />$errors[0]
	<br />
	EMAIL: <input name="name" type="email" id="email" size="80" value="$email" />
	<br />
    Website: <input name="url" type="text" id="url" size="80" value="$url" />
    <br />
    INSTAGRAM: <input type="text" id="instagram" name="instagram" value="$instagram" >
    <br>
    TWITTER: <input type="text" class="form-control" id="twitter" name="twitter" value="$twitter">
	</p>

	</div>
	NOTE: <textarea class="form-control" id="body" name="body" placeholder="Expresss Love!!" rows="3" value="$note" required></textarea>$errors[0]
		<p>
	<input name="choice" type="submit" id="choice" value="Sign Guestbook" />
	</p>
	</form>
HERE;
	//include html footer file
	include "footer.html";
}//end addForm

function displayForm(){
	// include header file

	//include html footer file

} //end displayForm

function showGuestbook(){
	// include header file
	include "header.html";

	//open the guestbook file, read in and display
	print "displaying guestbook function";
	print "< div class="guestbook">
	<p class="dt-published dates"><?php
echo  date("Y/m/d") date("h:i:sa") ;
?></p>
<ul class="h-card deets"
<li class="p-author">NAME</>
<li> <a class="p-email" href="mailto:EMAIL">EMAIL</a></li>
<li> <a class="u-url" href=https://instagram.com/INSTAGRAM>INSTAGRAM</a></li>
<li> <a class="u-url" href=https://twitter.com/TWITTER>INSTAGRAM</a></li>
</ul>
<p class="p-content notes">
NOTE
</p>
	";

	//include html footer file
	include "footer.html";
}//end showguestbook



?>

</body>
</html>