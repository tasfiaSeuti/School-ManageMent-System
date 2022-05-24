<?php
//update course
include '../connection.php';
if (isset($_POST['update_course'])) {
	$title=$_POST['titlee'];
	$description=$_POST['descriptionn'];
	$course_id=$_POST['course_id'];
	//echo $course_id;
	//echo $title;
	//echo $description;
	$editQuery = "UPDATE admin_course SET title='$title', description='$description' WHERE id=$course_id";
    $result = $con->query($editQuery);
    if($result){
      echo "successful update";
    }else{
    	echo "not successful update";
    }
}
?>
<?php
if (isset($_POST['delete_course']))
{
	$course_id=$_POST['course_id'];
	$sql = "DELETE FROM admin_course WHERE id=$course_id";
	$result = $con->query($sql);
	if($result){
		echo "Successfully deleted";
	}else{
		echo "Delete operation failed";
	}
}
?>

<?php
include '../connection.php';
if (isset($_POST['submit_course'])){
	$title=$_POST["title"];
	$description=$_POST["description"];
    //hash tag for image name change..
    date_default_timezone_set('Asia/Dhaka');
	date_default_timezone_set('Asia/Dhaka');
	$date=date('l,jS F,Y,g:i a');
	date_default_timezone_set("America/New_York");
    $string = "The time is " . date("h:i:sa");
    $imageFileName =  hash('md5', $string);


    $_FILES['file']['name'] = $imageFileName.'.jpg';
    $name=$_FILES['file']['name'];
   	$temp=$_FILES['file']['tmp_name'];
   	$type=$_FILES['file']['type'];
   	if ($type === "image/jpeg" || $type === "image/jpg" || $type === "image/png" || $type === "image/ANI" || $type === "image/BMP" || $type === "image/CAL" || $type === "image/FAX" || $type === "image/GIF" || $type === "image/IMG" || $type === "image/JBG" || $type === "image/JPE" || $type === "image/MAC" || $type === "image/PBM" || $type === "image/PCD" || $type === "image/PCX" || $type === "image/PCT" || $type === "image/PGM" || $type === "image/PPM"
      || $type === "image/PSD" || $type === "image/RAS" || $type === "image/TGA" || $type === "image/TIFF" || $type === "image/WMF") { //check image extantion..
   		move_uploaded_file($temp, "../uploads/".$name);
   	}
   	else
   	{
   		echo "only .jpeg or .jpg or .png image upload";
   	}
   		$sql="INSERT INTO admin_course VALUES ('','$name','$title','$description','$date')";
	   	    $result=$con->query($sql);
	   	    if($result){
	   		echo "insert";
	   	    	
	   		}else{
	   			echo "Failed";
	   			 }

}

?>
<?php
$sql_for_show_course="SELECT * FROM admin_course";
$result_for_show_course=$con->query($sql_for_show_course);
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 <form method="post" action="" enctype="multipart/form-data">
 	<input type="file" name="file" value="">
 	<input type="text" name="title" placeholder ="course title">
 	<input type="text" name="description" placeholder ="course description">
 	<input type="submit" name="submit_course">
 </form>
<?php  
			         
			            while ($row_for_show_course= $result_for_show_course->fetch_assoc()) {
			                    
			        ?>
 <form method="post" action="">
 	                
			        <img src="../uploads/<?php echo $row_for_show_course['image']?>"  height="42" width="42">
 	               <input type="text" name="titlee" value="<?php echo $row_for_show_course['title']?>">
 	               <input type="text" name="descriptionn" value="<?php echo $row_for_show_course['description']?>">
 	               <input type="text" name="hidden" value="<?php echo $row_for_show_course['id']?>">
 	                	               
 	               <input type="submit" name="update_course" value="update">
 	               <input type="submit" name="delete_course" value="delete"> 
		 		
 </form>
 <?php
	             
	               }
	            ?>
</body>
</html> 