<!DOCTYPE html>

<html lang="en">
<head>
   <meta charset="utf-8" />
   <title>JTB Accounting Services</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="JTB Accounting Services Inc - Providing precise and dependable finance and accounting services.">

    <!-- Stylesheets -->
    <link rel='shortcut icon' type='image/x-icon' href='favicon.ico' />
   <link rel="stylesheet" href="style.css" type="text/css"/>
   <script src="https://use.fontawesome.com/2a68af6cf1.js"></script>
   
</head>
<body>
   
<!--   page wrapper -->
  <div id="wrapper">

   <!-- Header -->
   	<header class="top">
   		<div class="jtblogo">
         	<img src="images/jtblogo.png">
        </div>
        <nav class="top-nav">
        	<ul>
        		<li>
        			<a class="current-link" href="index.php">Home</a>
        		</li>
        		<li>
        			<a href="about.html">About</a>
        		</li>
        		<li>
        			<a href="services.html">Services</a>
        		</li>
        		<li>
        			<a href="contact.php">Contact</a>
        		</li>
        	</ul>
        </nav>
      	<div class="title-container">
        	<h2>Precise & Dependable</h2>
        	    <div class="half-border">
        		</div>
        	<p>Accounting services without the tears</p>
      	</div>

    <div class="down-arrow">
      <a href="#down"><img src="images/downwhitearrow.png"></a>
    </div>
   </header>

   <!-- Main Body -->
    <a id="down"></a>
    <main class="main-content">
      <section class="main-text">
        <h2>Welcome</h2>
        <p>JTB Accounting Services Inc provide a wide range of accounting-related services to the Metro Vancouver area.</p>
        <p>Whether you are looking to get your taxes up to date, are looking for a financial consultant to streamline your business or have any other questions, get in contact with JTB Accounting Services Inc today for a free consultation. </p>
      </section>
     
      	<section class="skill-container">
      	<h2 class="blockheading">Services Offered</h2>
        	<ul>
        		<li>
        			<p>Financial Planning</p>
        			<i class="fa fa-pencil-square-o fa-3x" aria-hidden="true"></i>
        		</li>
        		<li>
        			<p>Consultancy</p>
        			<i class="fa fa-lightbulb-o fa-3x" aria-hidden="true"></i>
        		</li>
        		<li>
        			<p>Tax Returns</p>
        			<i class="fa fa-money fa-3x" aria-hidden="true"></i>
        		</li>
        		<li>
        			<p>Bookeeping</p>
        			<i class="fa fa-calculator fa-3x" aria-hidden="true"></i>

        		</li>
        	</ul>
        </section>
        <h2 class="blockheading">Contact</h2>

        <div class="main-text"><p>Looking to get in contact with JTB Accounting Services? Fill out the contact form below and we'll be in touch shortly.</p></div>

		<!--  contact form -->
      <div class="form-container">
      <?php 
if ($_POST["email"]<>'') { 
    $ToEmail = 'jhixie4@gmail.com'; 
    $EmailSubject = 'Site contact form'; 
    $mailheader = "From: ".$_POST["email"]."\r\n"; 
    $mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
    $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
    $MESSAGE_BODY = "Name: ".$_POST["name"].""; 
    $MESSAGE_BODY .= "Email: ".$_POST["email"].""; 
    $MESSAGE_BODY .= "Comment: ".nl2br($_POST["comment"]).""; 
    mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 
?> 
Your message was sent
<?php 
} else { 
?> 
      <form method="post" action="">
    	<div class="form-name">
    		<label for="name">Name:</label>
    		<input type="text" id="name" name="name">
    	</div>
    	<div class="form-email">
    		<label for="mail">E-mail:</label>
    		<input type="email" id="mail" name="email">
    	</div>
    	<div class="form-message">
    		<label for="msg">Message:</label>
    		<textarea id ="msg" name="comment"></textarea>
    	</div>
    	<div class="form-button">
  			<button type="submit">Send Your E-mail</button>
		</div>
	</form>
	<?php 
}; 
?>
	</div>
	<div class="half-border"></div>
   </main>


   <!-- footer -->
   <footer class="footer">
      <p>Website crafted by: <a href="PRZU.com">PRZU.com</a></p>
   </footer>
  </div> 
</body>
</html>