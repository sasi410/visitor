<!DOCTYPE html> 
<html> 
	<head> 
	<title>demo web page</title> 
	<style> 
		h1 { 
			color:#009900; 
			font-size:46px; 
		} 
		p { 
			font-size:17px; 
			margin-top:-25px; 
			margin-left:15px; 
		} 
		a {
		 background-color: #f44336;
  		 color: white;
  		padding: 14px 25px;
 		text-align: center;
  		text-decoration: none;
  		display: inline-block;
		}
		

	</style> 
        <title>Capture webcam image with php and jquery - ItSolutionStuff.com</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <style type="text/css">
        #results { padding:20px; border:1px solid; background:#ccc; }
    </style>
	</head> 
	 <a HREF="searchdata.php"> Search By Date </a>
         <br> <br> 
	 <a HREF="namesearch.php"> Search By Name </a>
	<body> 
          <center>
		<h1> Visitor Pass</h1> 
		<p> K L University</p>
		<br> <br> <br> <br>

		 <form method="POST" action="upload.php">



		<p> Visitor Name :
		<input type="text" id="fn1" maxlength="10"  placeholder=" Enter Visitor Name"  name="fn" required> </p>

		<br>
		
		<p> Visitor Mobile Number :
		<input type="number"  id="fn2" placeholder=" Mobile Number" name="ph" required> </p>
		
		<br>
		<p> Purpose of Visit :
		 <select name="purpose" required>
		 <option value="" selected="selected" disabled="disabled">Visiting purpose</option>
		 <option value="parentvisit"> Parent_Visit </option>
   		 <option value="feepayment">Fee_payment</option>
   		 <option value="Certificates">College_Certificates</option>
   		 <option value="adimission">Admission</option>
		 <option value="other">Other_Purposes</option>
  		</select>
 		 <br><br>
		<br> <br> <br> 
           

<div class="container">
    
   
   
        <div class="row">
            <div class="col-md-6">
                <div id="my_camera"></div>
                <br/>
                <input type=button value="Take Snapshot" onClick="take_snapshot()">
                <input type="hidden" name="image" class="image-tag">
            </div>
            <div class="col-md-6">
                <div id="results">Your captured image will appear here...</div>
            </div>
            <div class="col-md-12 text-center">
                <br/>
                
		<input type="submit" value="submit">
               
            </div>
        </div>
    </form>
</div>
  
<!-- Configure a few settings and attach camera -->
<script language="JavaScript">
    Webcam.set({
        width: 490,
        height: 390,
        image_format: 'jpeg',
        jpeg_quality: 90
    });
  
    Webcam.attach( '#my_camera' );
  
    function take_snapshot() {
        Webcam.snap( function(data_uri) {
            $(".image-tag").val(data_uri);
            document.getElementById('results').innerHTML = '<img src="'+data_uri+'"/>';
        } );
    }
</script>
 

                 <br> <br> <br> 
                

</form>
 	  </center> 

<a HREF="mainpage.html"> Log Out </a>

 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
	</body> 
</html>					 












