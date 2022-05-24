<?php
include '../connection.php';
if (isset($_POST['approved_submit'])) {
	$student_id=$_POST['student_id'];
	$approved=$_POST['approved'];
	//echo $student_id;
	$editQuery = "UPDATE student SET approved='$approved' WHERE st_id=$student_id";
    $result = $con->query($editQuery);
    if($result){
      echo "successful approved";
    }else{
    	echo "not successful approved";
    }
      
}
?>

<?php
include '../connection.php';
$sql_for_student_register="SELECT * FROM student";
$result_for_student_register=$con->query($sql_for_student_register);
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body> 	

                <?php  
			          $i = 1;
			            while ($row_for_student_register= $result_for_student_register->fetch_assoc()) {
			                    
			        ?>
			        <h5>email:</h5>
			        <h6><?php echo $row_for_student_register['st_email']?></h6>
			        <h5>father name:</h5>
			        <h6><?php echo $row_for_student_register['father_name']?></h6>
			        <h5>mother name:</h5>
			        <h6><?php echo $row_for_student_register['mother_name']?></h6>
			        <h5>date of birth:</h5>
			        <h6><?php echo $row_for_student_register['date_of_birth']?></h6>
			        <h5>present address:</h5>
			        <h6><?php echo $row_for_student_register['present_address']?></h6>
			        <h5>permanent address:</h5>
			        <h6><?php echo $row_for_student_register['permanent_name']?></h6></br>
			        <?php $approve=$row_for_student_register['approved'];
                       if ($approve=='yes') {?>
                       	
                       	<input type="submit" name="" value="approved">
                      <?php
                       }
                       else{


			        ?>
			        <form method="post" action="">
			        <input type="hidden" name="student_id" value="<?php echo $row_for_student_register['st_id'];?>">	
		 			<input type="hidden" name="approved" value="<?php echo 'yes'?>">
		 			<input type="submit" name="approved_submit" value="approve">
		 		    </form>
		 		    <?php
	                    }
		 		    ?>
			    <?php
	              $i++;
	               }
	            ?>
		 		

</body>
</html>