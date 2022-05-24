<!DOCTYPE html>
<html>
 <head>
  <title>online questin</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
 </head>
 <body>
  <br /><br />
  <div class="container">
   <br />
   <h2 align="center">online manage question</h2>
   <br />
   <div class="table-responsive">
    <table class="table table-bordered" id="crud_table">
     <tr>
      <th width="30%">question name</th>
      <th width="10%">option1</th>
      <th width="10%">option2</th>
      <th width="10%">option3</th>
      <th width="10%">option4</th>
      <th width="10%">class name</th>
      <th width="10%">duration</th>
      <th width="10%">starting time</th>
      <th width="10%"></th>
     </tr>
     <tr>
      <td contenteditable="true" class="question_name"></td>
      <td contenteditable="true" class="option1"></td>
      <td contenteditable="true" class="option2"></td>
      <td contenteditable="true" class="option3"></td>
      <td contenteditable="true" class="option4"></td>
      <td contenteditable="true" class="class_name"></td>
      <td contenteditable="true" class="duration"></td>
      <td contenteditable="true" class="starting_time"></td>
      <td></td>
     </tr>
    </table>
    <div align="right">
     <button type="button" name="add" id="add" class="btn btn-success btn-xs">+</button>
    </div>
    <div align="center">
     <button type="button" name="save" id="save" class="btn btn-info">Save</button>
    </div>
    <br />
    <div id="inserted_item_data"></div>
   </div>
   
  </div>
 </body>
</html>

<script>
$(document).ready(function(){
 var count = 1;
 $('#add').click(function(){
  count = count + 1;
  var html_code = "<tr id='row"+count+"'>";
   html_code += "<td contenteditable='true' class='question_name'></td>";
   html_code += "<td contenteditable='true' class='option1'></td>";
   html_code += "<td contenteditable='true' class='option2'></td>";
   html_code += "<td contenteditable='true' class='option3' ></td>";
   html_code += "<td contenteditable='true' class='option4' ></td>";
   html_code += "<td contenteditable='true' class='class_name' ></td>";
   html_code += "<td contenteditable='true' class='duration' ></td>";
   html_code += "<td contenteditable='true' class='starting_time' ></td>";
   html_code += "<td><button type='button' name='remove' data-row='row"+count+"' class='btn btn-danger btn-xs remove'>-</button></td>";   
   html_code += "</tr>";  
   $('#crud_table').append(html_code);
 });
 
 $(document).on('click', '.remove', function(){
  var delete_row = $(this).data("row");
  $('#' + delete_row).remove();
 });
 
 $('#save').click(function(){
  var question_name = [];
  var option1 = [];
  var option2 = [];
  var option3 = [];
  var option4 = [];
  var class_name = [];
  var duration = [];
  var starting_time = [];
  $('.question_name').each(function(){
   question_name.push($(this).text());
  });
  $('.option1').each(function(){
   option1.push($(this).text());
  });
  $('.option2').each(function(){
   option2.push($(this).text());
  });
  $('.option3').each(function(){
   option3.push($(this).text());
  });
  $('.option4').each(function(){
   option4.push($(this).text());
  });
   $('.class_name').each(function(){
   class_name.push($(this).text());
  });
    $('.duration').each(function(){
   duration.push($(this).text());
  });
     $('.starting_time').each(function(){
   starting_time.push($(this).text());
  });
  $.ajax({
   url:"insert.php",
   method:"POST",
   data:{question_name:question_name, option1:option1, option2:option2, option3:option3, option4:option4, class_name:class_name, duration:duration, starting_time:starting_time},
   success:function(data){
    alert(data);
    $("td[contentEditable='true']").text("");
    for(var i=2; i<= count; i++)
    {
     $('tr#'+i+'').remove();
    }
    fetch_item_data();
   }
  });
 });
 
 function fetch_item_data()
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   success:function(data)
   {
    $('#inserted_item_data').html(data);
   }
  })
 }
 fetch_item_data();
 
});
</script>