<!-- start course details here...................-->
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
<!-- end course details here...................-->

<!-- admin teacher start here...................-->
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
<!--admin teacher end here.............-->

<!--admin approved student here.......-->
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
<!--admin approved student end here........-->


<!DOCTYPE html>
<html lang="en">
<head>
  <title>school management system</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      position: relative;
  }
  ul.nav-pills {
      top: 20px;
      position: fixed;
  }
  div.col-sm-9 div {
      height: 250px;
      font-size: 28px;
  }
  #section1 {}
  #section2 {}
  #section3 {}
  #section41 {color: #fff; background-color: #00bcd4;}
  #section42 {color: #fff; background-color: #009688;}
  
  @media screen and (max-width: 810px) {
    #section1, #section2, #section3, #section41, #section42  {
        margin-left: 150px;
    }
  }
  </style>
</head>
<body data-spy="scroll" data-target="#myScrollspy" data-offset="20">

 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">school management system</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">admin login</a></li>
       <!--  <li><a href="joy1.php?id=<?php //echo  $_SESSION['session_student'];?>">view post</a></li> -->
       <!--  <li><a href="student_profile_view.php">view profile</a></li> -->
        <!-- <li><a href="#">Contact</a></li> -->
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <!-- <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> logout</a></li> -->
      </ul>
    </div>
  </div>
</nav>
  





<div class="container">
  <div class="row">
    <nav class="col-sm-3" id="myScrollspy">
      <ul class="nav nav-pills nav-stacked">
        <li class="active" style="margin-top: 100px;"><a href="#section1">add course</a></li>
        <li><a href="#section2">add teacher</a></li>
        <li><a href="#section3">approved student</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Section 4 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#section41">Section 4-1</a></li>
            <li><a href="#section42">Section 4-2</a></li>                     
          </ul>
        </li>
      </ul>
    </nav>
    <div class="col-sm-9">
      <div id="section1" class="pre-scrollable">    
        <form method="post" action="" enctype="multipart/form-data">
            <input type="file" name="file" value="">
            <input type="text" name="title" placeholder ="course title">
            <input type="text" name="description" placeholder ="course description">
            <input type="submit" name="submit_course"></br>
        </form>
          <?php  
          //show course php start here....................
            while ($row_for_show_course= $result_for_show_course->fetch_assoc()) {
          ?>
        <form method="post" action="">
                  
                <img src="../uploads/<?php echo $row_for_show_course['image']?>"  height="42" width="42">
                 <input type="text" name="titlee" value="<?php echo $row_for_show_course['title']?>">
                 <input type="text" name="descriptionn" value="<?php echo $row_for_show_course['description']?>">
                 <input type="hidden" name="hidden" value="<?php echo $row_for_show_course['id']?>">
                                   
                 <input type="submit" name="update_course" value="update">
                 <input type="submit" name="delete_course" value="delete"> 
        </form>
          <?php
           //show course end here.........................    
            }
          ?>
  </div>
  <div id="section2" class="pre-scrollable" style="margin-top: 30px;"> 
        <form method="post" action="" enctype="multipart/form-data">
          <input type="file" name="file">
          <input type="text" name="teacher_name" placeholder="teacher name">
          <input type="text" name="profession" placeholder="teacher profession">
          <input type="text" name="datails" placeholder="teacher details"> 
          <input type="submit" name="submit_teacher">
        </form>
            <?php  
              //admin teacher add start here  
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
                //admin teacher add end here
               
                  }
                ?>
  </div>        
  <div id="section3" class="pre-scrollable" style="margin-top: 30px;">         
        
                <?php  
                //admin approved student start here..........
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
          //student approved end here......
                $i++;
                 }
              ?>
  </div>
  <div id="section41">         
        <h1>Section 4-1</h1>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
  </div>      
  <div id="section42">         
        <h1>Section 4-2</h1>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
  </div>
    </div>
  </div>
</div>

</body>
</html>
