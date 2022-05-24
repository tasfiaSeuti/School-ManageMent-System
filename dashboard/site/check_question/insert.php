<?php
//insert.php
$connect = mysqli_connect("localhost", "root", "", "student_projectt");
if(isset($_POST["question_name"]))
{
 $question_name = $_POST["question_name"];
 $option1 = $_POST["option1"];
 $option2 = $_POST["option2"];
 $option3 = $_POST["option3"];
 $option4 = $_POST["option4"];
 $class_name = $_POST["class_name"];
 $duration = $_POST["duration"];
 $starting_time = $_POST["starting_time"];
 $query = '';
 for($count = 0; $count<count($question_name); $count++)
 {
  $question_name_clean = mysqli_real_escape_string($connect, $question_name[$count]);
  $option1_clean = mysqli_real_escape_string($connect, $option1[$count]);
  $option2_clean = mysqli_real_escape_string($connect, $option2[$count]);
  $option3_clean = mysqli_real_escape_string($connect, $option3[$count]);
  $option4_clean = mysqli_real_escape_string($connect, $option4[$count]);
  $class_name_clean = mysqli_real_escape_string($connect, $class_name[$count]);
  $duration_clean = mysqli_real_escape_string($connect, $duration[$count]);
  $starting_time_clean = mysqli_real_escape_string($connect, $starting_time[$count]);
  
   $query .= '
   INSERT INTO question(question_name, option1, option2, option3, option4, class_name, duration, starting_time) 
   VALUES("'.$question_name_clean.'", "'.$option1_clean.'", "'.$option2_clean.'", "'.$option3_clean.'", "'.$option4_clean.'", "'.$class_name_clean.'", "'.$duration_clean.'", "'.$starting_time_clean.'"); 
   ';
 
 }
 if($query != '')
 {
  if(mysqli_multi_query($connect, $query))
  {
   echo 'Item Data Inserted';
  }
  else
  {
   echo 'Error';
  }
 }
 
}
?>