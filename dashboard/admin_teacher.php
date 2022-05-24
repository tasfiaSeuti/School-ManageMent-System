
<?php
include '../connection.php';
$sql_for_show_teacher="SELECT * FROM admin_teacher";
$result_for_show_teacher=$con->query($sql_for_show_teacher);
?>

<?php
include '../connection.php';
if (isset($_POST['update_teacher'])) {
  $name=$_POST['name'];
  $profession=$_POST['profession'];
  $details=$_POST['details'];

  $teacher_id=$_POST['teacher_id'];
  $editQuery = "UPDATE admin_teacher SET name='$name', profession='$profession', details='$details' WHERE id=$teacher_id";
    $result = $con->query($editQuery);
    if($result){
      echo "successful update";
    }else{
      echo "not successful update";
    }
}
?>
<?php
if (isset($_POST['delete_teacher']))
{
  $teacher_id=$_POST['teacher_id'];
  $sql = "DELETE FROM admin_teacher WHERE id=$teacher_id";
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
if (isset($_POST['submit_teacher'])){
	//$name=$_POST["name"];
	$teacher_name=$_POST['teacher_name'];
	$profession=$_POST["profession"];
	$details=$_POST["datails"];
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
   		$sql="INSERT INTO admin_teacher VALUES ('','$name','$teacher_name','$profession','$details','$date')";
	   	    $result=$con->query($sql);
	   	    if($result){
	   		echo "insert";
	   	    	
	   		}else{
	   			echo "Failed";
	   			 }

}

?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 <form method="post" action="" enctype="multipart/form-data">
 	<input type="file" name="file">
 	<input type="text" name="teacher_name" placeholder="teacher name">
 	<input type="text" name="profession" placeholder="teacher profession">
 	<input type="text" name="datails" placeholder="teacher details"> 
 	<input type="submit" name="submit_teacher">
 </form>


 <?php  
               
                  while ($row_for_show_teacher= $result_for_show_teacher->fetch_assoc()) {
                          
              ?>
 <form method="post" action="">
                  
              <img src="../uploads/<?php echo $row_for_show_teacher['image']?>"  height="42" width="42">
                 <input type="text" name="name" value="<?php echo $row_for_show_teacher['name']?>">
                 <input type="text" name="profession" value="<?php echo $row_for_show_teacher['profession']?>">
                 <input type="text" name="details" value="<?php echo $row_for_show_teacher['details']?>">
                 <input type="hidden" name="teacher_id" value="<?php echo $row_for_show_teacher['id']?>">
                                   
                 <input type="submit" name="update_teacher" value="update">
                 <input type="submit" name="delete_teacher" value="delete"> 
        
 </form>
 <?php
               
                 }
              ?>
</body>
</html>