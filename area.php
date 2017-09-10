<?php

include("connection.php");
include("header.php");

   

    if( isset( $_POST["post_submit"] ) )
    {
        
        // build a function that validates data
        function validateFormData( $formData ) {
            $formData = trim( stripslashes( htmlspecialchars( $formData ) ) );
            return $formData;
        }
        
        // check to see if inputs are empty
        // create variables with form data
        // wrap the data with our function
        
        if ( !$_POST["post_area"] ) {
            $areaError = "Please Enter Your Area <br>";
        } else {
            $area =validateFormData( $_POST["post_area"] );
            
        }
        
        $query = "SELECT * FROM loc WHERE uloc='$area'";
        $result = mysqli_query( $conn, $query );

        //if result is returned
        if( mysqli_num_rows( $result) > 0 ) {

            //we have data!
            //set some variables
            while( $row = mysqli_fetch_assoc($result) ) {
               $x  = $row['psname'];
                
            }

        } else {  //no results returned
            $alertMessage = "<div class='alert alert-warning'>Nothing to see here.<a href='clients.php'>Head back</a>.</div>";
        }
    }
?>


                <div class="container-fluid" id="modalknow" class="form-group input-lg">

                <form action="<?php echo htmlspecialchars( $_SERVER["PHP_SELF"] ); ?>" method="post"> 
                <?php echo $areaError; ?>
                <input type="text" name="post_area"><br><br>
                
                
                <input type="submit"  name="post_submit" class="btn btn-warning"  required>
                <?php
                    echo "Your Area Is Survilience Under :" .$x ;
                    ?>
                
                
                
            </form>
            
         </div>
    
    

<?php include("footer.php");  ?>