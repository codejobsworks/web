<?php include("top.php"); ?>
<?php
$to = "contact@codejobs.org";
$subject = $_REQUEST['subject'];
$message = $_REQUEST['message'] ;
$from = $_REQUEST['contact'] ;
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);
?>
 <div id="content" class="override">
   <table width="800" align="center">
   <tr>
    <td>
     <br />
      <div id="body" align="left">
       <h2> Mail sent correctly! </h2>
        We will reply you as soon as possible. You can follow next links:<br /><br />
          <table align="center">
          <tr>
           <td style="padding-right:35px">
          <ul>
           <li>Check <a href="worktank.php">jobs</a></li>
           <li>Check <a href="freelancers.php">freelancers</a></li>
           <li>Check <a href="services.php">services</a></li>
          </ul>
           </td>
           <td style="padding-right:10px">
           <li>Submit your <a href="submittask.php">tasks</a></li>
           <li>Submit your <a href="submitfree.php">CV</a></li>
           </td>
           </tr>
         </table>
        <hr width="400">
       <h3> Or you can wait to be redirected in 10 seconds..</h3>
       Thanks for use CodeJobs.org!
      </div>
    </td>
   </tr>
   </table>
 </div>
<meta http-equiv="refresh" content="10;url=/">
<?php include("foot.php"); ?>
