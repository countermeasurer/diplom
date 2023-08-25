<?php  
//export.php  
$connect = mysqli_connect("localhost", "root", "", "mdk2");
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM output4";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
  <tr>  
    <th>calc_id</th>  
    <th>user_id</th>  
    <th>date</th>  
    <th>input_name</th>
    <th>data_type</th>
    <th>discription</th>
    <th>unit</th>
    <th>value</th>
  </tr>
  ';
  while($user = mysqli_fetch_array($result))
  {
   $output.= '
    <tr>  
      <td>'.$user["calc_id"].'</td>  
      <td>'.$user["user_id"].'</td>  
      <td>'.$user["date"].'</td>  
      <td>'.$user["input_name"].'</td>  
      <td>'.$user["data_type"].'</td>
      <td>'.$user["discription"].'</td>
      <td>'.$user["unit"].'</td>
      <td>'.$user["value"].'</td>
    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 }
}
?>