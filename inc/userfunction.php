<?php 

function redirection($path)
{
	echo '<script> window.location.href="'.$path.'" </script>';
}


$server = DB_HOST;
$db = DB_NAME;
try {
	$conn = new PDO("mysql:host=$server;dbname=$db", DB_USERNAME, DB_PASSWORD);
	// set the PDO error mode to exception
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
}
catch(PDOException $e)
{
	echo  $e->getMessage();
}

//get user data
function getUser($conn,$id)
 {
 	$stmtSelect = $conn->prepare("SELECT * FROM a_user WHERE oauth_uid=:oauth_uid");
 	$stmtSelect->bindParam(':oauth_uid',$id);
 	$stmtSelect->execute();
 	return $info = $stmtSelect->fetch();
 }

//update the data
function updateuser($conn,$data,$id)
 {
 	print_r($data);
    $stmtUpdate = $conn->prepare("UPDATE  a_user SET first_name=:first_name, company=:company, zip=:zip, address1=:address1, address2=:address2, tel=:tel, email=:email WHERE oauth_uid=:oauth_uid");
 
    $stmtUpdate->bindParam('first_name',$data['first_name']);
    $stmtUpdate->bindParam('company',$data['company']);
    $stmtUpdate->bindParam('zip',$data['zip']);
    $stmtUpdate->bindParam('address1',$data['address1']);
    $stmtUpdate->bindParam('address2',$data['address2']);
    $stmtUpdate->bindParam('tel',$data['tel']);
    $stmtUpdate->bindParam('email',$data['email']);
    $stmtUpdate->bindParam('oauth_uid',$id);
    if($stmtUpdate->execute())
        return true;

    return false;
                                
 }

 //update the photto
function updatephoto($conn,$data,$image,$id)
 {
 	$newimg = 'img/'.$image;
 	print_r($data);
    $stmtUpdate = $conn->prepare("UPDATE  a_user SET picture=:picture WHERE oauth_uid=:oauth_uid");
 
    $stmtUpdate->bindParam('picture',$newimg);
    $stmtUpdate->bindParam('oauth_uid',$id);
    if($stmtUpdate->execute())
        return true;

    return false;
                                
 }
