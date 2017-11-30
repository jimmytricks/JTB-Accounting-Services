<!DOCTYPE html>

<html lang="en">
<head>
   <meta charset="utf-8" />
   <title>JTB Accounting Services - Contact</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Contact JTB Accounting Services Inc today for a free consultation.">
    <!-- Stylesheets -->
   <link rel="stylesheet" href="style.css" type="text/css"/>
   <link rel="icon" href="/images/favicon.ico?" type="image/x-icon">
   <script src="https://use.fontawesome.com/2a68af6cf1.js"></script>
   
</head>
<body>
   
<!--   page wrapper -->
  <div id="wrapper">

   <!-- Header -->
   	<header class="top-nonmain">
   		<div class="jtblogo">
         	<img src="images/jtblogo.png">
        </div>
        <nav class="top-nav">
        	<ul>
        		<li>
        			<a href="index.php">Home</a>
        		</li>
        		<li>
        			<a href="about.html">About</a>
        		</li>
        		<li>
        			<a href="services.html">Services</a>
        		</li>
        		<li>
        			<a class="current-link" href="contact.php">Contact</a>
        		</li>
        	</ul>
        </nav>

    <div class="down-arrow">
      <a href="#down"><img src="images/downwhitearrow.png"></a>
    </div>
   </header>

   <!-- Main Body -->
    <a id="down"></a>
    <main class="main-content">
      <section class="main-text">
        <h2>Contact</h2>
        <p>Touch base with the JTB Accounting Services Inc by filling out the contact form below.</p>
      </section>
        <!--  contact form -->
      <div class="form-container">
      <?php 
if ($_POST["email"]<>'') { 
    $ToEmail = 'jack.couzens@icloud.com'; 
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

          <div class="half-border">
          
          </div>
    </main>        
   <!-- footer -->
   <footer class="footer">
      <p>Lovingly designed by: <a href="PRZU.com">PRZU.com</a></p>
   </footer>
  </div> 
</body>
</html>