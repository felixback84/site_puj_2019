<?php
get_header();

	while(have_posts()) {
	    the_post();?>
	<script src="https://kit.fontawesome.com/93326de4d1.js" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>

	<main id="content" role="main" style="padding-top: 150px;">
	  <div class="container">
	    <div class="w-lg-60 text-center mx-lg-auto mb-1">
	  		<!-- Author -->
	    	<img class="rounded-circle mb-3" src="<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url('avatarCover');}?>" alt="Image Description">
	    	<!-- End Author -->
	    	<!-- Title -->
	    	<div class="mb-7">
	      	<h2 class="text-muted font-weight-medium">Hola, <?php the_title();?></h2>
	      </div>
	    	<!-- End Title -->
	    </div>
	  </div>

		<!-- Tab Nav -->
	  <div class="nav nav-tabs justify-content-center tab-modern" id="navbar-paciente" aria-orientation="vertical">
	    <a class="nav-link h5 tab-modern__nav-link mb-4" 
	     id="h-tab-info-tab" 
	     href="#info">
	     <h3><i class="far fa-smile-wink"></i></h3>
	      Info
	    </a>
	    <a class="nav-link h5 tab-modern__nav-link mb-4" 
	      id="h-tab-productos-hilda-tab" 
	      href="#productos-hilda">
	      <h3><i class="fas fa-satellite-dish"></i></h3>
	      Productos Hilda      
	    </a>
	    <a class="nav-link h5 tab-modern__nav-link mb-4" 
	     id="h-tab-sesiones-tab" 
	     href="#sesiones">
	     <h3><i class="fas fa-play"></i></h3>
	      Sesiones
	    </a>
	    <a class="nav-link h5 tab-modern__nav-link mb-4" 
	     id="h-tab-tablas-tab" 
	     href="#tablas">
	     <h3><i class="fas fa-info"></i></h3>
	      Tablas
	    </a>
	    <a class="nav-link h5 tab-modern__nav-link mb-4" 
	     id="h-tab-terapias-tab" 
	     href="#terapias">
	     <h3><i class="fas fa-notes-medical"></i></h3>
	      Terapias
	    </a>
	  </div>
	  <!--  End Tab Nav -->	 

	  <div data-spy="scroll" class="container" data-target="#navbar-paciente" data-offset="0">
    	<!--info -->
	    <div id="info">
	      	<div class="row align-items-lg-center">
	        	<div class="col-md-12 order-md-2 mb-5 mb-md-0">
	         	 	<div class="mb-4">
	            		<h2><i class="far fa-smile-wink"></i></h2>
	            		<hr class="my-2">
	            		<h2 class="h3">Info</h2>
	            		<div class="py-2">
				            <?php
				            dataUser('field_5dd99cc312651');
				            dataUser('field_5ddbe04650e66');
				            dataUser('field_5ddbe1201b79b');
				            dataUser('field_5ddbe0901b799');
				            dataUser('field_5ddbe0fe1b79a');
				            ?>
	            		</div>
            		</div>
          		</div>
       		 </div>
      	</div>        
    	<!--  end info --> 

	    <!--productos hilda -->
	    <div id="productos-hilda">
	      	<div class="row align-items-lg-center">
	        	<div class="col-md-12 order-md-2 mb-5 mb-md-0">
	          		<div class="mb-4">
	            		<h2><i class="fas fa-satellite-dish"></i></h2>
	            		<hr class="my-2">
	            		<h2 class="h3">Productos Hilda</h2>
	            		<div class="py-2">
              				<div class="card-mb card-sm-columns card-sm-2-count">
			              		<?php productosUser('field_5dd99d1e12652');?>
			              		<?php productosUser('field_5dd99d4512653');?>
			              		<?php productosUser('field_5ddbf1635c85d');?>
			              		<?php productosUser('field_5ddbf1ab5c85e');?>
              				</div>
	            		</div>
	          		</div>
	        	</div>
	      	</div>
	    </div> 
	    <!--  end productos hilda -->

	    <!--sesiones -->
	    <div id="sesiones">
	      <div class="row align-items-lg-center">
	        <div class="col-md-12 order-md-2 mb-5 mb-md-0">
	          	<div class="mb-4">
	            	<h2><i class="fas fa-satellite-dish"></i></h2>
	            	<hr class="my-2">
	            	<h2 class="h3">Productos Hilda</h2>
	            	<div class="py-2">
              			<div align= "center" style="background: #eeeeee; padding: 10px;">
				      		<h4>Hilda device data viewer</h4>

				      		<form style="display: block;" class="js-validate">
					      		<div class="row">
						      		<div class="col-sm-3 mb-3">
							       		<select class="form-control form__input" id="Addr0"></select> 
							       	</div>	
							       	<div class="col-sm-3 mb-3">
							       		<select class="form-control form__input" id="Addr1"></select> 
							       	</div>
							       	<div class="col-sm-3 mb-3">
							       		<select class="form-control form__input" id="Addr2"></select> 
							       	</div>
							       	<div class="col-sm-3 mb-3">
							       		<select class="form-control form__input" id="Addr3"></select> 
							       	</div>
						        </div>
						    </form>

						    <hr class="my-2">

				        	<div class="container"> 
				        		<div style="display: block;">
						        	<a class="btn btn-outline-info btn-wide mb-2 mb-md-0 mr-sm-2" id="startData">Get data</a>
						        	<a class="btn btn-outline-info btn-wide mb-2 mb-md-0 mr-sm-2" id="stopData">Stop data</a>
						        </div>	
				        	</div>
				        	<hr class="my-2">
				        	<div id="FailureStatus">
				        		<h4>Status:</h4>
				      		</div>
					    </div>    	
				    </div>

				    <div id="chart-data">
				    	<div class="card border-1" align="center">
		                	<!-- Header -->
		                	<script>

							let timeOut; //This variable is responsible for the frequency of data acquisition
					      	let myUrl = '';
					      	//let myUrl1 = 'http://192.168.0.17'; 
					      
					      	jQuery(document).ready(function(){
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
					        	$(document).ready(function(){
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
					            //document.getElementById('unixtime').textContent = unixtime;
					            document.getElementById('date').textContent = date;
					            //document.getElementById('user_name').textContent = user_name;
					            document.getElementById('temperature').textContent = temperature;
					            document.getElementById('pain_level').textContent = pain_level;
					            document.getElementById('pain_location').textContent = pain_location;
					            document.getElementById('name_color').textContent = name_color;

					            $("#FailureStatus").html("<h2>Status: OK</h2>");  //clear any failure messages.

					          }});
					            
					          myData.error(function(xhr, status, errorThrown){
					             
					          $("#FailureStatus").html("<span><h2>Status:FAILED to get DATA !! </h2></span>"); 
					           
					          console.log('Failure'); 
					          console.log("Error: " + errorThrown); 
					          console.log("Status: " + status);
					          console.dir(xhr);

					          });
					        
					        timeOut = setTimeout('getMyData()', 10000); //this will request data again in 1 second.
					      	}
		                	</script>

		                	<header class="card-header text-center p-5">
			                  	<h4 class="h4">Hilda Sesions viewer</h4>
			                  	<p>Todos los datsos son proporcionados por Hilda Device</p>
			                  	<span class="d-block">
			                    	<span class="display-4 text-dark"> 
			                    		Nº de Sesión: <span id="counter_registers_value" class="display-4 text-dark"></span>
			                    	</span>
			                    	<span class="d-block text-secondary font-size-14">Actualizados automáticamente cada 10 segs.
			                    	</span>
			                  	</span>
		                	</header>
		                	<!-- End Header -->

		                	<!-- Content -->
		                	<div class="card-body p-5">
		                  		<ul class="list-unstyled mb-4">
		                    		<li class="font-size-18 py-2">Fecha: <span id="date"></span></li>
		                    		<li class="font-size-18 py-2">Temperatura: <span id="temperature"></span></li>
		                    		<li class="font-size-18 py-2">Nivel de dolor: <span id="pain_level"></span></li>
		                    		<li class="font-size-18 py-2">Ubicación de dolor: <span id="pain_location"></span></li>
		                    		<li class="font-size-18 py-2">Color: <span id="name_color"></span></li>
		                  		</ul>
		                	</div>
		              	</div> 
		            </div>  
	            </div>
	        </div>
	    </div> 
	    <!--  end sesiones -->

	    <!--terapias -->
	    <div id="tablas">
	      	<div class="row align-items-lg-center">
	        	<div class="col-md-12 order-md-2 mb-5 mb-md-0">
	          		<div class="mb-4">
	            		<h2><i class="fas fa-info"></i></h2>
	            		<hr class="my-2">
	            		<h2 class="h3">Tablas</h2>
	            		<div class="py-2">
	            			<canvas id="myChart"></canvas>         		
							<script>
							var ctx = document.getElementById('myChart').getContext('2d');
							var myChart = new Chart(ctx, {
							    type: 'bar',
							    data: {
							        labels: ['Rojo', 'Azul', 'Amarillo', 'Verde', 'Purpura', 'Naranaja', 'Azul oceano'],
							        datasets: [{
							            label: '# de registros de zonas de dolor',
							            data: [12, 19, 3, 5, 2, 3],
							            backgroundColor: [
							                'rgba(255, 99, 132, 0.2)',
							                'rgba(54, 162, 235, 0.2)',
							                'rgba(255, 206, 86, 0.2)',
							                'rgba(75, 192, 192, 0.2)',
							                'rgba(153, 102, 255, 0.2)',
							                'rgba(255, 159, 64, 0.2)',
							                'rgba(255, 159, 64, 0.2)'
							            ],
							            borderColor: [
							                'rgba(255, 99, 132, 1)',
							                'rgba(54, 162, 235, 1)',
							                'rgba(255, 206, 86, 1)',
							                'rgba(75, 192, 192, 1)',
							                'rgba(153, 102, 255, 1)',
							                'rgba(255, 159, 64, 1)',
							                'rgba(255, 159, 64, 1)'

							            ],
							            borderWidth: 1
							        }]
							    },
							    options: {
							        scales: {
							            yAxes: [{
							                ticks: {
							                    beginAtZero: true
							                }
							            }]
							        }
							    }
							});

							</script>
	            		</div>
	          		</div>
	        	</div>
	      	</div>
	    </div> 
	    <!--  end terapias -->

	    <!--terapias -->
	    <div id="terapias">
	      	<div class="row align-items-lg-center">
	        	<div class="col-md-12 order-md-2 mb-5 mb-md-0">
	          		<div class="mb-4">
	            		<h2><i class="fas fa-notes-medical"></i></h2>
	            		<hr class="my-2">
	            		<h2 class="h3">Terapias</h2>
	            		<div class="py-2">
              				<div class="card-mb card-sm-columns card-sm-2-count">
			              	
              					<?php terapiasUser('field_5ddca4f073843');?>
              				</div>
	            		</div>
	          		</div>
	        	</div>
	      	</div>
	    </div> 
	    <!--  end terapias -->

  	</div>
  </div>
    
<?php }
get_footer();
?>     