<?php
$msg="";
if(isset($_POST['submit']))
{
  $from = $_POST['email']; 
  $to = "eric.j.gift@gmail.com";
  $subject = "Message Received!";
  $name = $_POST['firstname'] . " " . $_POST['lastname'];
  $content = $_POST['question'];
  
  foreach ($_POST['service'] as $service){
    $services .= "\t" . $service . "\n";
  }
  
  $proposal = $_POST['project'];
  $startdate = date("m-d-Y", strtotime($_POST['start']));
  $enddate = date("m-d-Y", strtotime($_POST['end']));
  
  $message1 = "A new message has been submitted! \n \n Name: " . $name . "\n Email: " . $from . "\n Message: \n" . $content . "\n \n Services: \n \n" . $services . "\n Proposal: \n \n" . $proposal . "\n Start:" . $startdate . "\n End:" . $enddate;
	
	$headers = "From: $from \r\n";
	$headers .= "Reply-To: $from \r\n";
	$headers .= "Return-Path: $from\r\n";
	$headers .= "X-Mailer: PHP \r\n";
	
	if(mail($to,$subject,$message1,$headers))
	{
		$msg = "Mail sent OK";
	} 
	else 
	{
 	   $msg = "Error sending email!";
	}
}

?>

<!DOCTYPE html>

<html>
  <head>
    <title>Eric J. Gift - Contact</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="app.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link type="text/css" rel="stylesheet" href="style.css"/>
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" media="only screen and (max-width: 480px), only screen and (max-device-width: 480px)" href="/mobile.css" />
    <meta name="description" content="Eric. J. Gift Personal Website">
    <meta name="keywords" content="Eric, J, Gift, photography, development, videography, portfolio">
    <meta name="author" content="Eric Gift">
  </head>
  <body>
  <div class="leftnav">
    <img id="dets" src="/images/details.png" alt="menu" />
    <div id="navmenu">
      <img id="close" src="/images/close-button.png" alt="close" />
      <a href="/index" class="fixednav" id="homenav">Home</a>
      <a href="/videography" class="fixednav">Videography</a>
      <a href="/development" class="fixednav">Development</a>
      <a href="/photography" class="fixednav">Photography</a>
      <a id="current" href="/contact" class="fixednav">Contact</a>
    </div>
  </div>
  <div class="title">
    <h1>
      Contact Me
    </h1>
    <p>
      Interested in working with me? Have a general question? Fill out the form below!
    </p>
  </div>
    <div class="form">
      <form class="contactform" action='<?php echo htmlentities($_SERVER['PHP_SELF']); ?>' method='post'>
        <input type="radio" name="kind" value="inquiry" id="inquiry" checked="checked">Inquiry
        <input type="radio" name="kind" value="proposal" id="proposal">Proposal
        <br> <br>
        <div class="inquiry">
          <input type="text" name="firstname" placeholder="First Name"><br>
          <input type="text" name="lastname" placeholder="Last Name"><br>
          <input type="text" name="email" placeholder="Email"><br>
          <textarea id="question" name="question" placeholder="Your Question"></textarea> <br>
          <input class="submit" type="submit" name="submit" value="Submit" onclick="return confirm('Your message has been received!  I will reply as soon as I can.')">
        </div>
      </form>
        <div class="proposal">
          <div class="services">
            <p>
              Services<br>Requested
            </p>
          </div>
          <div class="services" id="approx">
            <p>
              Approximate<br>Timeline
            </p>
          </div>
          <form class="contactform" action='<?php echo htmlentities($_SERVER['PHP_SELF']); ?>' method='post'>
          <input type="text" name="firstname" placeholder="First Name"><br>
          <input type="text" name="lastname" placeholder="Last Name"><br>
          <input type="text" name="email" placeholder="Email"><br> <br>
          <div class="types">
            <input type="checkbox" name="service[]" value="Web Design">Web Design <br>
            <input type="checkbox" name="service[]" value="Web Development">Web Development <br>
            <input type="checkbox" name="service[]" value="Photography">Photography <br>
            <input type="checkbox" name="service[]" value="Videography">Videography <br>
          </div>
          <br></br>
          <textarea id="question" name="project" placeholder="Tell me about the project"></textarea> <br> <br>
          <div class="dates">
          Start Date: <input type="date" name="start"> <br>
          End Date: <input type="date" name="end"> <br> <br>
          </div>
          <input class="submit" type="submit" name="submit" value="Submit" onclick="return confirm('Your message has been received!  I will reply as soon as I can.')">
        </form>
       </div>
    </div>
  <div class="footer">
      <h3>
        &copy; Eric Gift, 2016 
      </h3>
    </div>
  </body>
</html>
    