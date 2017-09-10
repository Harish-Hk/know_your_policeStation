<?php

	include('includes/connection.php');

	include('includes/functions.php');

	if( isset( $_POST['submit'])) {
		
		//set all variable to empty by default
		$sub = $des = $fname = $faddr = $fph = $femail = "";
		
		$error = "";
		
		// check to see if inputs are empty
		// create variables with form data
		// wrap the data with our function
		
		if( $_POST["id"] == '1' ) {
            
            if( !$_POST["sub"] ) {
			
			$error .= "&#9679; Subject: &nbsp;";
			
		    } else {
			
			$sub = validateFormData( $_POST["sub"] );
			
            }

            if( !$_POST["des"] ) {

                $error .= "&#9679; Description: &nbsp;";

            }  else {

                $des = validateFormData( $_POST["des"] );
                
                if( !$_POST["fname"] ) {
			
			$error .= "&#9679; Name: &nbsp;";
			
		    } else {
			
			$fname = validateFormData( $_POST["fname"] );
			
            }

            if( !$_POST["faddr"] ) {

                $error .= "&#9679; Address: &nbsp;";

            }  else {

                $faddr = validateFormData( $_POST["faddr"] );
                

            }
                if( !$_POST["fph"] ) {
			
			$error .= "&#9679; Phone Number: &nbsp;";
			
		    } else {
			
			$fph = validateFormData( $_POST["fph"] );
			
            }

            if( !$_POST["femail"] ) {

                $error .= "&#9679; Email: &nbsp;";

            }  else {

                $femail = validateFormData( $_POST["femail"] );

            }

            }

            
            
            else if( $_POST["id"] == '2' ) 
        {
                
                if( !$_POST["sub"] ) {
			
			$error .= "&#9679; Subject: &nbsp;";
			
		    } else {
			
			$sub = validateFormData( $_POST["sub"] );
			
            }

            if( !$_POST["des"] ) {

                $error .= "&#9679; Description: &nbsp;";

            }  else {

                $des = validateFormData( $_POST["des"] );
                
                if( !$_POST["fname"] ) {
			
			$error .= "&#9679; Name: &nbsp;";
			
		    } else {
			
			$fname = validateFormData( $_POST["fname"] );
			
            }

            if( !$_POST["faddr"] ) {

                $error .= "&#9679; Address: &nbsp;";

            }  else {

                $faddr = validateFormData( $_POST["faddr"] );
                

            }
                if( !$_POST["fph"] ) {
			
			$error .= "&#9679; Phone Number: &nbsp;";
			
		    } else {
			
			$fph = validateFormData( $_POST["fph"] );
			
            }

            if( !$_POST["femail"] ) {

                $error .= "&#9679; Email: &nbsp;";

            }  else {

                $femail = validateFormData( $_POST["femail"] );

            }

            }

         
                
            else if( $_POST["id"] == '3' ) 
        {
                
                if( !$_POST["sub"] ) {
			
			$error .= "&#9679; Subject: &nbsp;";
			
		    } else {
			
			$sub = validateFormData( $_POST["sub"] );
			
            }

            if( !$_POST["des"] ) {

                $error .= "&#9679; Description: &nbsp;";

            }  else {

                $des = validateFormData( $_POST["des"] );
                
                if( !$_POST["fname"] ) {
			
			$error .= "&#9679; Name: &nbsp;";
			
		    } else {
			
			$fname = validateFormData( $_POST["fname"] );
			
            }

            if( !$_POST["faddr"] ) {

                $error .= "&#9679; Address: &nbsp;";

            }  else {

                $faddr = validateFormData( $_POST["faddr"] );
                

            }
                if( !$_POST["fph"] ) {
			
			$error .= "&#9679; Phone Number: &nbsp;";
			
		    } else {
			
			$fph = validateFormData( $_POST["fph"] );
			
            }

            if( !$_POST["femail"] ) {

                $error .= "&#9679; Email: &nbsp;";

            }  else {

                $femail = validateFormData( $_POST["femail"] );

            }

            }
                
                
            else if( $_POST["id"] == '4' ) 
        {
                
                if( !$_POST["sub"] ) {
			
			$error .= "&#9679; Subject: &nbsp;";
			
		    } else {
			
			$sub = validateFormData( $_POST["sub"] );
			
            }

            if( !$_POST["des"] ) {

                $error .= "&#9679; Description: &nbsp;";

            }  else {

                $des = validateFormData( $_POST["des"] );
                
                if( !$_POST["fname"] ) {
			
			$error .= "&#9679; Name: &nbsp;";
			
		    } else {
			
			$fname = validateFormData( $_POST["fname"] );
			
            }

            if( !$_POST["faddr"] ) {

                $error .= "&#9679; Address: &nbsp;";

            }  else {

                $faddr = validateFormData( $_POST["faddr"] );
                

            }
                if( !$_POST["fph"] ) {
			
			$error .= "&#9679; Phone Number: &nbsp;";
			
		    } else {
			
			$fph = validateFormData( $_POST["fph"] );
			
            }

            if( !$_POST["femail"] ) {

                $error .= "&#9679; Email: &nbsp;";

            }  else {

                $femail = validateFormData( $_POST["femail"] );

            }

            }
                
                
                
                
            else if( $_POST["id"] == '5' ) 
        {
                
                if( !$_POST["sub"] ) {
			
			$error .= "&#9679; Subject: &nbsp;";
			
		    } else {
			
			$sub = validateFormData( $_POST["sub"] );
			
            }

            if( !$_POST["des"] ) {

                $error .= "&#9679; Description: &nbsp;";

            }  else {

                $des = validateFormData( $_POST["des"] );
                
                if( !$_POST["fname"] ) {
			
			$error .= "&#9679; Name: &nbsp;";
			
		    } else {
			
			$fname = validateFormData( $_POST["fname"] );
			
            }

            if( !$_POST["faddr"] ) {

                $error .= "&#9679; Address: &nbsp;";

            }  else {

                $faddr = validateFormData( $_POST["faddr"] );
                

            }
                if( !$_POST["fph"] ) {
			
			$error .= "&#9679; Phone Number: &nbsp;";
			
		    } else {
			
			$fph = validateFormData( $_POST["fph"] );
			
            }

            if( !$_POST["femail"] ) {

                $error .= "&#9679; Email: &nbsp;";

            }  else {

                $femail = validateFormData( $_POST["femail"] );

            }

            }
                
            else if( $_POST["id"] == '6' ) 
        {
                
                if( !$_POST["sub"] ) {
			
			$error .= "&#9679; Subject: &nbsp;";
			
		    } else {
			
			$sub = validateFormData( $_POST["sub"] );
			
            }

            if( !$_POST["des"] ) {

                $error .= "&#9679; Description: &nbsp;";

            }  else {

                $des = validateFormData( $_POST["des"] );
                
                if( !$_POST["fname"] ) {
			
			$error .= "&#9679; Name: &nbsp;";
			
		    } else {
			
			$fname = validateFormData( $_POST["fname"] );
			
            }

            if( !$_POST["faddr"] ) {

                $error .= "&#9679; Address: &nbsp;";

            }  else {

                $faddr = validateFormData( $_POST["faddr"] );
                

            }
                if( !$_POST["fph"] ) {
			
			$error .= "&#9679; Phone Number: &nbsp;";
			
		    } else {
			
			$fph = validateFormData( $_POST["fph"] );
			
            }

            if( !$_POST["femail"] ) {

                $error .= "&#9679; Email: &nbsp;";

            }  else {

                $femail = validateFormData( $_POST["femail"] );

            }

            }
         if($error != "") {
			
			$error = "<br><br><br><p>The following fields are required:<p>".$error;
			
		} else {
			
			$query = "SELECT id FROM `users` WHERE email = '".$pemail."'";
			
			$result = mysqli_query($conn, $query);
			
			if (mysqli_num_rows($result) > 0) {
				
				$error = "<br><br><br><p>This email address is taken.<p>";
				
			} else {
				
				
				
        

								
				$query = "INSERT INTO `users` (`sub`, `des`,`fname`, `faddr`, `fph`, `femail`) VALUES (NULL, '$name', '$sub', '$des',$fname', '$faddr', '$fph', '$femail')";
				
				$result = mysqli_query( $conn, $query );
				
            if( $result ) {
					
					header("Location: index.php?alert=success");
					
				} else {
					
					echo "Error: ". $query . "<br>" . mysqli_error($conn);
				}
				
			}
			
		}
	}