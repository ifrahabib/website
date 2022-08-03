<?php 
require_once("config.php");
if((isset($_POST['your_name'])&& $_POST['your_name'] !='') && (isset($_POST['your_email'])&& $_POST['your_email'] !=''))
{

$sql = "INSERT INTO  contact_form_info set name='$_POST[your_name]',phone='$_POST[your_phone]', email='$_POST[your_email]', service='$_POST[your_service]', price='$_POST[your_price]', message='$_POST[comments]'";
if (@mysqli_query($con,$sql)) {
    echo('Your Information has Successfully saved');
  } else {
    echo('Error in registration: ' . mysqli_error($con) );
  } 
mysqli_close($con);

}
else
{
echo "Please fill Name and Email";
}
?>