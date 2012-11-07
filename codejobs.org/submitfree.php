<?php include("top.php"); ?>
  <div id="content" class="override">
   <table align="center" width="800">
   <tr>
    <td>
     <br />
      <div id="body" align="left">
        <h2>Do you wanna offer yourself?</h2>

        <p>Firstly, be patient, this is the start of the way to take a job. <br /><br /> 
        Look, you must fill the form below to submit your experience and to be <u>promoted publically</u> on <a href="freelancers.php" target="_blank">Freelancers</a>. Thats great!,<br /> 
because all people demanding solutions will see your skills.<br /><br />
        Finally, is question of <u>update your CV</u> (Curriculum Vitae) periodically.</p>
        <hr width="400">
        <h3>Upload your profile:</h3>
        <form action="sendfreelance.php" method="post" enctype="multipart/form-data">
        <p>With this form, you will retrieve all the information necesary to explain your skills to the people who needs solve <br />
        something. Also, we will generate a dynamic website page with detailed info about you, that will be <u>public on the Internet</u>.
        <br /><br />
        You have an explanation before input data.
        If you have any question, please follow <a href="contact.php">this link</a>.</p>
        <hr width="400">
        <h3>Name or Nick (required):</h3>
        <p><i>First, you must put your name. May be a nickname if you want to maintain your anonymity.</i></p>
        <input type="text" name="nick">
        <h3>Disciplines (Required):</h3>
        <p><i>Now, you need to specify which are your main skills. You can choose more than one. Try to be realistic.</i></p>
        <p><i>This will create a double process. On one side, it will be more easy for people demanding solutions to find you<br />
        by specialization. On the other side, you will contribute to the global <a href="services.php" target="_blank">Services</a> offered by CodeJobs.org Community.</i></p>
       <table id="skills" align="center" border="1" width="90%">
         <tr>
          <td width="200">
            <input type="checkbox" name="skill1" value="Designer">Designer <br />
          </td>
          <td width="200">
            <input type="checkbox" name="skill2" value="Programmer">Programmer <br />
          </td>
          <td width="200">
            <input type="checkbox" name="skill3" value="Auditor">Auditor <br />
          </td>
          <td width="200">
            <input type="checkbox" name="skill4" value="Auditor">Other <br />
          </td>
         </table><br />
         <p><i>If you choose 'Other', you can specify it manually on the input form below. For example: "Cartographer", "Pentester",<br /> 
         "Comercial", etc. If is the first proposition and you recieve on task because of it, we will promote this discipline to appear<br /> 
         dinamically on the website.</i></p>
         <input type="text" name="skills_other">
         <h3>Languages/Skills (required):</h3>
         <p><i>You must specify more concretly, which are your technical skills. This is important, because people will demand you jobs<br /> 
         reading about your experience. For example, you can put languages that you dominate "php", "css", "python", "C++"<br /> 
         or special skills related, like "reversing", "forencsis", etc.</i></p>
         <textarea name="languageskills" rows="4" cols="40"></textarea>
         <h3>PDF CV. (optional):</h3>
         <p><i>If you want it, you can upload a PDF file with a Curriculum Vitae in your own format.</i></p>
         <input type="file" name="filecv">
         <h3>Picture (optional):</h3>
         <p><i>Also, you can upload a picture that will appear in your profile. (size: 150x150 pixels)</i></p>
        <input type="file" name="filepicture">
	<h3>Ways to pay you (optional):</h3>
        <p><i>Can be interesting specify which form of recieve resources you accept. You can choose more than one.</i></p>
       <table id="payaccepted" align="center" border="1" width="90%">
         <tr>
          <td width="200">
            <input type="checkbox" name="pay1" value="Euro">Euro <br />
          </td>
          <td width="200">
            <input type="checkbox" name="pay2" value="Dollar">Dollar <br />
          </td>
          <td width="200">
            <input type="checkbox" name="pay3" value="Bitcoin">Bitcoin <br />
          </td>
          <td width="200">
            <input type="checkbox" name="pay4" value="Hours">Hours <br />
          </td>
         <td width="200">
            <input type="checkbox" name="pay5" value="Hours">Paypal <br />
          </td>
         <td width="200">
            <input type="checkbox" name="pay6" value="Hours">Other <br />
          </td>
         </table><br />
         <p><i>If you choose 'Other', you can specify it manually on the input form below. For example: "Beer", "Kisses", etc.</i></p>
         <input type="text" name="payaccepted_other">
        <h3>Email/Phone/Contact (required):</h3>
        <p><i>This information will not be public. It is used to put you in contact with people demanding tasks or with us, if is required.</i></p>
        <input type="text" name="email" />
        <h3>Send:</h3>
        <p><i>Congratulations!, you finished to fill the form. Now, is time to validate your inputs. If all is ok, you will recieve an email<br /> 
        from our system with the information of your CV.</i></p>
        <p>Thanks for use CodeJobs.org!</p>
        <input type="submit" value="Send">

	</form>  
       <hr width="400">
      </div>
    </td>
   </tr> 
   </table>
</center>
</div>
<?php include("foot.php"); ?>
