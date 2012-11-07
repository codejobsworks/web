<?php include("top.php"); ?>
<?php

// Get params

$name = $_POST["name"]; 
$spec = $_POST["spec"]; 
$conf = $_POST["conf"];
$games = $_POST["games"];
$email = $_POST["email"];
$cv_name = $_FILES["cv"]["name"];
$cv_type= $_FILES["cv"]["type"];
$cv_size= $_FILES["cv"]["size"];
$cv_dir= $_FILES["cv"]["tmp_name"];
$pic_name = $_FILES["pic"]["name"];
$pic_type= $_FILES["pic"]["type"];
$pic_size= $_FILES["pic"]["size"];
$pic_dir= $_FILES["pic"]["tmp_name"];

// Validating the size and extension of the uploaded file

$max_allowed_cv_size = 100; // size in KB
$allowed_extensions_cv = array("pdf", "doc", "txt");
//Validations
if($cv_size > $max_allowed_cv_size )
{
  $errors .= "\n Size of file should be less than $max_allowed_cv_size";
}

// Validate the file extension

$allowed_ext_cv = false;
for($i=0; $i<sizeof($allowed_extensions_cv); $i++)
{
  if(strcasecmp($allowed_extensions_cv[$i],$cv_type) == 0)
  {
    $allowed_ext_cv = true;
  }
}
if(!$allowed_ext_cv)
{
  $errors .= "\n The uploaded file is not supported file type. ".
  " Only the following file types are supported: ".implode(',',$allowed_extensions_cv);
}

// Copy the temp uploaded file to uploads folder

$upload_folder = "uploads/";
$path_of_uploaded_cv = $upload_folder . $cv_name;
$tmp_path_cv = $_FILES["cv"]["tmp_name"];
if(is_uploaded_file($tmp_path_cv))
{
  if(!copy($tmp_path_cv,$path_of_uploaded_cv))
  {
    $errors .= '\n error while copying the uploaded file';
  }
}

// Compose message

$to="contact@codejobs.org"
$subject="Freelancer Request"

$mensaje = "Freelancer Submit Information";
$mensaje .= "-----------------------\n"
$mensaje .= "Name: " . $name . "\n";
$mensaje .= "Specialization: " . $spec . \n";
$mensaje .= "Conferences: " . $conf . \n"; 
$mensaje .= "Games: " . $games . \n"; 
$mensaje .= "Email: " . $email . \n"; 

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
if($_FILES["cv"]["name"] != "")
{
$strFilesName = $_FILES["cv"]["name"];
$strContent = chunk_split(base64_encode(file_get_contents($_FILES["cv"]["tmp_name"])));
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
