<?php include("top.php"); ?>
  <div id="content-contact" class="override">
  <table width="800" align="center">
   <tr>
    <td>
     <br /> 
      <div id="body" align="left">
        <h2>Do you have questions?</h2>
        You can email directly to:  <b>contact[at]codejobs.org</b><br /><br />
        Or you can fill next form with your questions. 
        <hr width="400"><br />
	<form action="sendcontact.php" method="post" >
        Subject:<br />
        <input type="text" name="subject"><br /><br />
        Message:<br /><textarea name="message" rows="10" cols="60"></textarea><br /><br />
        Email: <br /><input type="text" name="contact"><br /><br />
	<input type="submit" value="Send">
      </div>
    </td>
   </tr> 
   </table>
</center>
</div>
<?php include("foot.php"); ?>
