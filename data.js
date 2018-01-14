

$.ajax('http://api.thingspeak.com/channels/335418/field/field1/last.json?key=WYACO3T89W0TBNOK',{
  type: 'GET',
  dataType: 'json',
  success: function( resp ) {
    var val = parseInt(resp.field1);
   	document.getElementById("data").innerHTML = val;
  },
  
  error: function( req, status, err ) {
    console.log( 'something went wrong', status, err );
  }
}
