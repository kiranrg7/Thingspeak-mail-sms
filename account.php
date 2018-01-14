<head>
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="assignment.css">
  <link rel="stylesheet" href="account.css">
  
  
   <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
  <title>Servelots</title>
                 
  
  <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
  <script type="text/javascript" charset="utf-8" src="js/jquery.leanModal.min.js"></script>

 </head>

 
 <body >
  
 
  <div class="jumbotron">
   <center>
     <h2>Servelots Messaging Service </h2>  
   </center>
    </div>
    <div id="wrap">       
                                    
                     <ul class="navbar">
					 
                      <ul class="nav navbar-nav navbar-right">   
                        <li> <a href="#"> <span class="glyphicon glyphicon-user"/> Welcome  <?php  session_start(); echo $_SESSION["name"]; ?></font> </a>
                              <ul>
            
                              <li><a href="assignment.html">Log out</a></li>
			        	</ul>  
                          </li>
                           
                           </ul>
                     </ul>
     </div>
	 
<center>	 
	
	<form name="data" class="form-horizontal"  action="data_display.php" method="post">

   <div class="form-group">
        <br><br>
		<div class="col-sm-offset-4 col-sm-4">
  		  <input type="number" class="form-control" name="chid" placeholder="Enter your thingspeak channel id"  value="366625" required>
	</div>
	
	<div class="col-sm-offset-4 col-sm-4">
  		  <input type="text" class="form-control" name="readapi" placeholder="Enter your thingspeak Read Key"  value="DUK51CCVLPB5QO3A"  required>
		
    </div>
	     
	  <div class="col-sm-offset-2 col-sm-8">
       <input type="submit" class="btn btn-success" style="width:35%" value="View"/>  
      </div>
    
    	  
	</div>
	</form>
   
   

 
 </body>
 