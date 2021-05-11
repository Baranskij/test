<?php
$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$last_name = filter_var(trim($_POST['last_name']), FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
$company_name = filter_var(trim($_POST['company_name']), FILTER_SANITIZE_STRING);
$position = filter_var(trim($_POST['position']), FILTER_SANITIZE_STRING);
$telephone_1 = filter_var(trim($_POST['telephone_1']), FILTER_SANITIZE_STRING);
$telephone_2 = filter_var(trim($_POST['telephone_2']), FILTER_SANITIZE_STRING);
$telephone_3 = filter_var(trim($_POST['telephone_3']), FILTER_SANITIZE_STRING);



$mysql = new mysqli('localhost', 'root', 'root', 'registration_bd');


$sql = "INSERT INTO `users` (`name`, `last_name`, `email`, `company_name`, `position`, `telephone1`, 
`telephone2`, `telephone3`) 
VALUES ('$name', '$last_name', '$email', '$company_name', '$position', '$telephone_1', '$telephone_2', '$telephone_3')";


$result = mysqli_query($mysql, $sql);

if ($result == false) {
    print("error");
}






$mysql-> close();

?>


