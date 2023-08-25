<?php  
//export.php  
$connect = mysqli_connect("localhost", "root", "", "mdk2");
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM users";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
  <tr>  
    <th>Id</th>  
    <th>full_name</th>  
    <th>E-mail</th>  
    <th>Password</th>
    <th>Ban</th>
  </tr>
  ';
  while($user = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
      <td>'.$user["id"].'</td>  
      <td>'.$user["full_name"].'</td>  
      <td>'.$user["email"].'</td>  
      <td>'.$user["password"].'</td>  
      <td>'.$user["banned"].'</td>
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