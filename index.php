  
	<?php 
include("includes/connection.php");
include("includes/functions.php");
include("firform.php");
include("header.php");   ?>
	<!-- Modal -->
	<div class="modal fade" id="memberModal7" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="memberModalLabel7">Registration successful!</h4>
		  </div>
		  <div class="modal-body">
				<p>Thank you for registering with us</p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
		  </div>
		</div>
	  </div>
	</div>

      <div class="jumbotron bg-inverse" id="jumbotron">
          <div class="jumbotron-text">
			  <h1 class="display-3">Welcome to the People's Police</h1>
			  <p class="lead"><img src="images/logo.png"></p>
			  <hr class="m-y-2 bg-faded">
			 
          </div>      
      </div>
	  
	  <section class="testimonial">
        <div class="container">
            <blockquote>
                &ldquo; The police are the public and the public are the police; the police being only members of the public who are paid to give full time attention to duties which are incumbent on every citizen in the interests of community welfare and existence. &rdquo;
                <cite>&mdash;  Robert Peel</cite>
            </blockquote>  
        </div>
      </section>

	<section id="adventure" class="container-fluid">
		   <h3 class="section-title">Choose Our Feature</h3>
			<div class="row">
				<div class="col-sm-6">
					<button type="button" class="btn btn-warning btn-lg action-box" id="event1" data-toggle="modal" data-target="#myModal1">
						<span class="action-box-content">
							<strong> Know Your Police Station</strong>
						</span>
					</button>
				</div>
				<div class="col-sm-6">
					<button type="button" class="btn btn-warning btn-lg action-box" id="event2" data-toggle="modal" data-target="#myModal2">
						<span class="action-box-content">
							<strong> Online FIR Filling.</strong>
						</span>
					</button>
				</div>
				
			</div>
			
				
		<!--		<div class="col-sm-4">
					<button type="button" class="btn btn-primary btn-lg action-box" id="event5" data-toggle="modal" data-target="#myModal5">
							<span class="action-box-content">
								<b>Lan</b><strong> Gaming</strong>
							</span>
					</button>
				</div>
			</div>
		-->
		
		
		<div class="modal fade bd-example-modal-lg" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg">
			<div class="modal-content">
			  	<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title" id="myModalLabel2"><b>Fill Your FIR</b></h4>
                    
				  </div>
				  <div class="modal-body">
					
                      <form action="firform.php" method="post"><br>
         
         <br>
                 <div class="form-group">
                     <label>Topic</label>
            <select class="form-control" id="exampleFormControlSelect1" required>
              
              <option id="1">Child Labour</option>
              <option id="2">Corruption</option>
              <option id="3">Harrassment</option>
                <option id="4">Kidnapping</option>
                <option id="5">Murder</option>
                <option id="6">Others</option>
                
                
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Subject</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" required >
          </div>
 
          
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" required></textarea>
          </div>
        
         
        
         
         <h2>Filer Details:</h2>
         
         <div class="form-group">
            <label for="exampleFormControlInput1">Name:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" required>
          </div>

         <div class="form-group">
            <label for="exampleFormControlTextarea1">Address:</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" required></textarea>
          </div>
         
         <div class="form-group">
            <label for="exampleFormControlInput1">Phone:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" required>
          </div>
         
         <div class="form-group">
            <label for="exampleFormControlInput1">E-Mail Id:</label>
            <input type="email" class="form-control" id="exampleFormControlInput1"  required>
          </div>
         
    
        <button type="submit"  name="submit" class="btn btn-success">Submit</button>
<button type="reset" class="btn btn-danger">Reset</button>
         
        
        
        
        </form>   
				  </div>
				  <div class="modal-footer">
						...
				  </div>
			</div>
		  </div>
		</div>
		
		<div class="modal fade bd-example-modal-lg" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg">
			<div class="modal-content">
			  	<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
					<a href="area.php"><h4 class="modal-title" ><b>Know Your Police Station</b></h4></a>
				  </div>
				  <div class="modal-body">
					   
                      
                      
                      
                      
                      
                      
                      
                      
				 
			</div>
		  </div>
		</div>
		
		
	<!--	<div class="modal fade bd-example-modal-lg" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg">
			<div class="modal-content">
			  	<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">Lan Gaming</h4>
				  </div>
				  <div class="modal-body">
					...
				  </div>
				  <div class="modal-footer">
						...
				  </div>
			</div>
		  </div>
		</div>
    -->
	
	<?php include("footer.php");   ?>
          
      
   