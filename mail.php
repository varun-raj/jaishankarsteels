<?php 

$name= $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$phone= $_POST['phone'];



if($name==NULL || $email==NULL || $phone==NULL || $message==NULL)

{

	if($name==NULL)
	{
		echo 1;
	}
	else if($email==NULL)
	{
		echo 2;
	}

	else if($phone==NULL)
	{
		echo 3;
	}
	else if($message==NULL)
	{
		echo 4;
	}

}

else {
	$subject="Message from Website";
	$to="jaishankarsteelsambattur@gmail.com";
	$headers = "From:" . $email;
	mail($to,$subject,$message,$headers);
	echo "Thank You ".$name." For your message !";


}
?>