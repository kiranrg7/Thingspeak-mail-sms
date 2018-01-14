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
                 
  <script type="text/javascript" src="data.js"></script>
  <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
  <script type="text/javascript" charset="utf-8" src="js/jquery.leanModal.min.js"></script>

  <script>
  		 
$(document).ready(function(){
  
  $.ajax( 'http://api.thingspeak.com/channels/366625/field/field1/last.json?key=DUK51CCVLPB5QO3A', {
  type: 'GET',
  dataType: 'json',
  
  success: function( resp ) {
    console.log( resp.field1);
    var val = parseInt(resp.field1);
    $("#data").html(val);
	document.getElementById("sdata1").value = val;
    document.getElementById("mdata").value = val;

   
  },
  
  error: function( req, status, err ) {
    console.log( 'something went wrong', status, err );
   }
 });

 });


$(document).ready(function(){

  $.ajax( 'http://api.thingspeak.com/channels/366625/field/field1/last.json?key=DUK51CCVLPB5QO3A', {
  type: 'GET',
  dataType: 'json',
  
  success: function( resp ) {
    console.log( resp.field1);
    var val2 = parseInt(resp.field1);
    $("#data2").html(val2);
	
  },
  
  error: function( req, status, err ) {
    console.log( 'something went wrong', status, err );
   }
 });
	
	});
 
</script> 
 
 </head>

 
 <body>
 
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
            
                              <li><a href="index.html">Log out</a></li>
			        	</ul>  
                          </li>
                           
                           </ul>
                     </ul>
     </div>
	 
	 
	 
<center>	
<div class="container">
  <table class="table table-bordered">
    <th colspan="2"> Thingspeak recorded temperature data are</th>
  <tr> <td>  First data </td>  <td id="data"> </td></tr> 
   <tr> <td> Second data <td id="data2"> </td></tr> 
   
   <tr><td> <input type="submit" class="btn btn-info" value="Email data"  data-toggle="modal" data-target="#mailModal"></td>
    <td> <input type="submit" class="btn btn-success" value="Sms Data"   data-toggle="modal" data-target="#smsModal" ></td>
   </tr>
</table>
 </div>
 
  <form name="sms" method="post" action="sms.php">
  
  <input type="hidden" id="sdata1" name="data1">
 
  
 <div class="modal fade" id="smsModal" role="dialog">
    <div class="modal-dialog">
     <!-- Modal content-->
	  <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Enter Recievers phone number</h4>
        </div>
        <div class="modal-body">
          <input type="number" class="form-control"  name="phno"  min="1111111111" max="9999999999"required></input>
        <button type="submit" class="btn btn-success" >Send Sms</button>

		</div>
	 </div>      
    </div>
  </div>
  
   </form>
   
  <form name="mail1" method="post" action="mail.php">
  <input type="hidden" id="mdata" name="mdata1">
 
  <div class="modal fade" id="mailModal" role="dialog">
     <div class="modal-dialog">
     <!-- Modal content-->
	   <div class="modal-content">
         <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal">&times;</button>
           <h4 class="modal-title">Enter your gmail id</h4>
		   <input type="email" class="form-control"  name="smailid" required></input>
         
		   <h4 class="modal-title">Enter your gmail password</h4>
		   <input type="password" class="form-control"  name="mpwd" required></input>
         
		 <h4 class="modal-title">Enter Reciever's mail id</h4>
		   <input type="email" class="form-control"  name="rmailid" required></input>
         
		 </div>
        <div class="modal-body">
          
        <button type="submit" class="btn btn-success" >Mail</button>

		</div>
	 </div>      
    </div>
  </div>
  </form> 
</body>

</html>
  
	
     
      
	  
	  
    