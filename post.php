<?php 

$name= $_POST['name'];
$email= $_POST['email'];
$address= $_POST['address'];
$phone= $_POST['phone'];
$product= $_POST['product'];

if(empty($_POST['address'])){
	$address=NULL;
}


if($name==NULL || $email==NULL || $address==NULL || $phone==NULL || $product==NULL)

{

	if($name==NULL)
	{
		echo 1;
	}
	else if($email==NULL)
	{
		echo 2;
	}
	else if($address==NULL)
	{
		echo 3;
	}
	else if($phone==NULL)
	{
		echo 4;
	}
	else if($product==NULL)
	{
		echo 5;
	}

}

else {
	/* 	echo $name, $email, $address, $phone, $product ; */
	$subject="Hi I'm ".$name."I need information about ".$product;
	$message="I need information about ".$product."<br> My Address : <br>".$address."<br>".$phone;
	$to="jaishankarsteelsambattur@gmail.com";



	$headers = "From: " . $email . "\r\n";
	$headers .= "Reply-To: ". $email . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


	mail($to,$subject,$message,$headers);
	echo "Thank You ".$name." For your message !";
}
?>