<?php
     

    if ($_SERVER['REQUEST_METHOD']=='POST'){
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $company=$_POST['company'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $employees=$_POST['employees'];
        $department=$_POST['department'];

        //var_dump($_POST);// die();
        
        if(strlen($firstname)==0 || strlen($lastname)==0 || strlen($company)==0 || strlen($email)==0 || strlen($phone)==0){
            header("Location:login.php?error=blank");
            die('here');
        }
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "users";
        
        // Create connection
        $conn =  mysqli_connect($servername, $username, $password, $dbname);
        $sql = "SELECT id, firstname, lastname, company, email, phone, employees, department FROM contacts";
       $result = $conn->query($sql);
   
   if ($result->num_rows > 0) {
       
       while($row = $result->fetch_assoc()) {
           if($firstname==$row['firstname'] && $lastname==$row['lastname'] && $company==$row['company'] && $email==$row['email'] && $phone==$row['phone'] && $employees==$row['employees'] && $department==$row['department']){
           
            header("Location:index.php");
           die();
           //uspeshno logiran
           }
       }
   } 
   $sql = "INSERT INTO contacts (firstname, lastname,company, email,phone,employees,department)
   VALUES ('$firstname', '$lastname', '$company','$email','$phone','$employees','$department')";
   $conn->query($sql);
   header("Location:index.php");
   die();
}
?>