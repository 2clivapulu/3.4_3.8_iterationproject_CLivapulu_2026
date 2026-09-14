<!-- The Host Address for my Website Form goes here -->
<html>
	
  <head>
	<title>Wellington Samoan Seventh-Day Adventist Church</title>
	  <link rel="icon" type="image/x-icon" href="images/logo_v2.png"/>
	<link rel="stylesheet" href="css/style_v6.css">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  
	  
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		
		<!-- import code needed for site to be responsive -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- import keywords for search engines -->
		<meta name="Keywords" content="html5, layout, Responsive Design"/>
		<meta name="Author" content="Cherish Livapulu">
		<meta name="Description" content="Responsive Design Tutorial for Websites"/>
	  
  </head>
	
  <body>
	  <div class="grid-container">
			  
      <div class="nav">
		<nav role="navigation">
			<div id="menuToggle">
				<input type="checkbox"/>
				
				<span></span>
				<span></span>
				<span></span>
								
			    <ul id="menu">
				  <a href="index_v6.html"><li>Home</li></a>
				  <a href="page2_v4.html"><li>Events</li></a>
				  <a href="contact.php"><li>Contact</li></a>
			    </ul>
			</div>
		</nav>
		</div>
		  
		   <div class="header">
			  <a href ="index_v6.html">
				  <img src="images/logo_v2.png" alt="placeholder"></a>
			  <h1>Wellington Samoan</h1>
			  <br><br><h4>Seventh-Day Adventist Church</h4>
			  </div>
			  
	
		
		      <div class="content">
				  
				 				 <div class="container">
  <img src="images/church_v2.jpg" alt="placeholder" style="width:100%;">
  <div class="centered">FA'AFESO'OTA'I MAI</div>
</div>
	    
      
	  <?php
	  //Get the connection to the database in phpMyAdmin.
	  require_once("phpForm_mysqli.php");
	  ?>
	    
	
	    <!-- Form -->
	    <div class="contact_container">
			<form action = "connect.php" method="post">
				
			<!-- Name Field -->	
				<h5> CONTACT US! </h5>
				
		    <div class="row">
			     <div class="column">
				 <label for="name">Full Name</label>
		  		 </div>
				 <div class="column2">
			     <input type="text" id="name" name="name" placeholder="Your full name">
			     </div>
		    </div>
				
			<!-- Email Field -->
				
		    <div class="row">
			     <div class="column">
			     <label for="email">Email Address</label>
			     </div>
			     <div class="column2">
			     <input type="text" id="email" name="email" placeholder="Your email address">
			     </div>
		    </div>	
			
			<!-- Contact Number Field -->
				
		    <div class="row">
			     <div class="column">
			     <label for="phone">Contact Number</label>
			     </div>
			     <div class="column2">
			     <input type="text" id="phone" name="phone" placeholder="A contact number">
			     </div>
		    </div>					
			
			<!-- Subject Field -->
			
		    <div class="row">
				<div class="column">
				<label for="message">What are the core values or principles that guide your life?</label>
				</div>
				<div class="column2">
				  <textarea id="message" name="message" placeholder="Write something.." style="height:200px"></textarea>
				</div>
			</div>					
			<!-- Submit Field -->
				
			<div class="row">
			<input type="submit" value="SUBMIT">
			</div>
				
			</form>
	    </div>
				 <button onclick="topFunction()" id="myBtn" title="Go to top">&#x2B06;</button>
		  </div>
		       				  <div class="footer"><p>FOLLOW US!</p><a href="https://www.facebook.com/wellingtonsamoansdachurch/" target="_blank" class="fa fa-facebook"></a><a href="https://www.youtube.com/@wellingtonsamoansdachurch/featured" target="_blank" class="fa fa-youtube">								</a><a href="https://www.instagram.com/wssdayouth?utm_source=ig_web_button_share_sheet&igsi=ZDNlZDc0MzIxNw==" target="_blank" class="fa fa-instagram"></a><br><p>
				  &copy; Cherish Livapulu 2026, All rights reserved.</p>
			  </div>	
		  
			   <!-- Import the back to top JavaScript goes here -->
		  	     <!-- The source code link to JavaScript needs to go end of the body tag to allow to -->
		  	          <script type="text/javascript" src="js/backtotop.js"></script>
	  </div>
	  <!-- copyright statement -->

  </body>
	  
</html>
