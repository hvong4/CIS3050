<?php

 $con=mysqli_connect("localhost","directsalesites","p@ssw0rd%^","directsa_GitHubBCIS305");

 // Check connection
 if (mysqli_connect_errno())
   {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }

 // Create table
 $sql="CREATE TABLE job_zone_reference_2 (
  level DECIMAL(1,0) NOT NULL,
  level_name CHARACTER VARYING(50) NOT NULL,
  education CHARACTER VARYING(500) NOT NULL,
  experience CHARACTER VARYING(300) NOT NULL,
  level_of_job_training CHARACTER VARYING(300) NOT NULL)";

 // Execute query
 if (mysqli_query($con,$sql))
  {
  echo "Table persons created successfully";
  }
else
  {
  echo "Error creating table: " . mysqli_error($con);
  }
 ?>
