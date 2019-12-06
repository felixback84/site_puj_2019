//This is the jQuery script which will connect to the Arduino 
let timeOut; //This variable is responsible for the frequency of data acquisition
let myUrl = '';
//let myUrl1 = 'http://192.168.0.3'; 

jQuery(document).ready(function{
	//Populate the options for the IP address drop-down boxes.
	for(j=0; j<256; j++){
	for(i=0; i<4; i++){
      	$('#Addr'+i)
	        .append($("<option></option>")
	        .attr("value",j)
	        .text(j));
	  	} 
	}   

	//Set the default IP address in the drop down boxes.
	$('#Addr0').val('10');
	$('#Addr1').val('1');
	$('#Addr2').val('1');
	$('#Addr3').val('99');

	});

	//When the start button is clicked - get the data from the Arduino
	jQuery("#startData").click(function(){
	jQuery(document).ready(function(){
	  getMyData(); //get data once the document is ready
	});
	});  

	//Stop collecting data when the stop button is clicked.
	jQuery("#stopData").click(function(){
	clearTimeout(timeOut); //This clears any future requests for data (until the Start button is pressed again)
	});

	function getMyData(){ 
	//get the IP address from the drop-down boxes
	var x0 = $('#Addr0 option:selected').text();
	var x1 = $('#Addr1 option:selected').text();
	var x2 = $('#Addr2 option:selected').text();
	var x3 = $('#Addr3 option:selected').text();
	     
	//Construct the URL of the Arduino Server we plan to connect to
	var myUrl = 'http://' + x0 + "." + x1 + "." + x2 + "." + x3 + "/";

	var myData = $.ajax({

	  url: myUrl, // eg.  http://10.1.1.99:8081/
	  //data: { tag: 'GetDataFromArduino'},
	  dataType : "json", //We will be requesting data in JSON format
	  timeout : 10000,  //this will cancel the request if it has not received a reply within 10 seconds.
	  
	  success: function(data){

	    console.log('Success - you are a legend');
	    console.log(data);

	    const {counter_registers_value, unixtime, date, user_name, temperature, pain_level, pain_location, name_color  } = data 

	    document.getElementById('counter_registers_value').textContent = counter_registers_value;
	    document.getElementById('unixtime').textContent = unixtime;
	    document.getElementById('date').textContent = date;
	    document.getElementById('user_name').textContent = user_name;
	    document.getElementById('temperature').textContent = temperature;
	    document.getElementById('pain_level').textContent = pain_level;
	    document.getElementById('pain_location').textContent = pain_location;
	    document.getElementById('name_color').textContent = name_color;

	    $("#FailureStatus").html("<h2>Status: OK</h2>");  //clear any failure messages.

	}});
	    
	myData.error(function(xhr, status, errorThrown){
	     
  	$("#FailureStatus").html("<span><h2>Status:¡¡ Failed to get data from the user device !! </h2></span>"); 
   
  	console.log('Failure'); 
  	console.log("Error: " + errorThrown); 
  	console.log("Status: " + status);
  	console.dir(xhr);

	});

	timeOut = setTimeout('getMyData()', 10000); //this will request data again in 1 second.
}
