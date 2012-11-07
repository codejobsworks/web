<?php include("top.php"); ?>
<?php

// Get params

$status = $_POST["statustask"]; 
$type = $_POST["typetask"]; 
$title = $_POST["title"];
$desc = $_POST["description"];
$file_name = $_FILES["userfile"]["name"];
$file_type= $_FILES["userfile"]["type"];
$file_size= $_FILES["userfile"]["size"];
$file_dir= $_FILES["userfile"]["tmp_name"];
$reqdate = $_POST["reqdate"];
$enddate = $_POST["enddate"];
$resources = $_POST["resources"];
$offers = $_POST["offers"];

// Validating the size and extension of the uploaded file

$max_allowed_file_size = 100; // size in KB
$allowed_extensions = array("pdf", "doc", "txt");
//Validations
if($file_size > $max_allowed_file_size )
{
  $errors .= "\n Size of file should be less than $max_allowed_file_size";
}

// Validate the file extension

$allowed_ext = false;
for($i=0; $i<sizeof($allowed_extensions); $i++)
{
  if(strcasecmp($allowed_extensions[$i],$file_type) == 0)
  {
    $allowed_ext = true;
  }
}
if(!$allowed_ext)
{
  $errors .= "\n The uploaded file is not supported file type. ".
  " Only the following file types are supported: ".implode(',',$allowed_extensions);
}

// Copy the temp uploaded file to uploads folder

$upload_folder = "uploads/";
$path_of_uploaded_file = $upload_folder . $file_name;
$tmp_path = $_FILES["user_file"]["tmp_name"];
if(is_uploaded_file($tmp_path))
{
  if(!copy($tmp_path,$path_of_uploaded_file))
  {
    $errors .= '\n error while copying the uploaded file';
  }
}

// Compose message

$to="contact@codejobs.org"
$subject="Task Request"

$mensaje = "Task Submit Information";
$mensaje .= "-----------------------\n"
$mensaje .= "Status: " . $statustask . "\n";
$mensaje .= "Type: " . $typetask . \n";
$mensaje .= "Title: " . $title . \n"; 
$mensaje .= "Description: " . $description . \n"; 
$mensaje .= "Request Date: " . $reqdate . \n"; 
$mensaje .= "End Date: " . $enddate . \n"; 
$mensaje .= "Resources: " . $resources . \n"; 
$mensaje .= "Offers: " . $offers . \n"; 

// Uniqid session 
$strSid = md5(uniqid(time()));

$headers = "";
$headers .= "From: ".$_POST["email"]."<".$_POST["email"].">\nReply-To: ".$_POST["email"]."";

$headers .= "MIME-Version: 1.0\n";
$headers .= "Content-Type: multipart/mixed; boundary=\"".$strSid."\"\n\n";
$headers .= "This is a multi-part message in MIME format.\n";

$headers .= "--".$strSid."\n";
$headers .= "Content-type: text/html; charset=utf-8\n";
$headers .= "Content-Transfer-Encoding: 7bit\n\n";
$headers .= $message."\n\n";

//  Attachment
if($_FILES["userfile"]["name"] != "")
{
$strFilesName = $_FILES["userfile"]["name"];
$strContent = chunk_split(base64_encode(file_get_contents($_FILES["userfile"]["tmp_name"])));
$headers .= "--".$strSid."\n";
$headers .= "Content-Type: application/octet-stream; name=\"".$strFilesName."\"\n";
$headers .= "Content-Transfer-Encoding: base64\n";
$headers .= "Content-Disposition: attachment; filename=\"".$strFilesName."\"\n\n";
$headers .= $strContent."\n\n";
}

// Send mail

$ok = @mail($to, $subject, null, $headers);    

if ($ok) {    
 echo "<p>Mail sent! Yay PHP!</p>";    
} else {    
 echo "<p>Mail could not be sent. Sorry!</p>";    
}

?>
<?php include("foot.php"); ?>
