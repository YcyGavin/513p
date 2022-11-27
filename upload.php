
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link href="default.css" rel="stylesheet" type="text/css" media="all" />

</head>
<body>
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h1><a href="#">Welcome to Luca’s Loaves</a></h1>
		</div>
		<div id="menu">
			<ul>
                <li ><a href="index2.php" accesskey="1" title="">Home</a></li>
				<li><a href="aboutus.php" accesskey="2" title="">About US</a></li>
				<li class="active"><a href="upload.php" accesskey="3" title="">Careers </a></li>
				<li><a href="orderonline.php" accesskey="4" title="">Order online </a></li>
				<li><a href="contactus.php" accesskey="5" title="">Contact Us</a></li>
                <li><a href="register2.php" accesskey="6" title="">Register</a></li>
			</ul>
		</div>
	</div>
</div>
<div class="wrapper">
	<div id="welcome" class="container">
		<div class="title">
            <h1>Join our team</h1>
            <p> We are expanding our branches and need experienced baker regularly.</n>
                Send us your detail with the form below</br>
            and we will be in contact shortly</p>

            <div id="three-column" class="container">
           
                <div class="title">
                    <h2>Fill out the form below and upload your cover letter and resume</h2>
                    <form action="file_upload.php" method="POST"
            enctype="multipart/form-data">
 

         
        <label for="name">First name:</label>
        <input type="text" id="name" name="name"/><br>
        <label for="email">Last name:</label>
        <input type="text" id="email"name="email" /><br>
        <label for="telephone">Email Address:</label>
        <input type="text" id="telephone" name="telephone"/><br>
        <label for="message">Work experience</label>
        <textarea name="message" id="message" cols="30" rows="10"></textarea><br />
<p>
            Select files to upload:
             
            <!-- name of the input fields are going to
                be used in our php script-->
            <input type="file" name="files[]" multiple><br>
            <input type="file" name="files[]" multiple>
            <br><br>
             
            <input type="submit" name="submit" value="Upload" >
        </p>
 
    </form>
                
                </div>
            
				
				
            </div>
            </div>
            </div>

            <footer  class="footer2">  
        The creator of this website is IT20_1 Hangzhou Qiandao Lake
          </footer>
</body>
</html>

           
  
