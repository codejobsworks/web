<?php include("top.php"); ?>
  <div id="content" class="override">
  <table align="center" width="800">
   <tr>
    <td>
     <br>
      <div id="body" align="left">
        <h2>Needs a solution to a problem?</h3>

        <p>Firstly, don't worry, this is the way to solve it.</p> 
        <p>Look, you must fill the form below to submit the task to the <a href="worktank.php" target="_blank">WorkTank</a>.
           Thats great!, because all the <a href="freelancers.php" target="_blank">Freelancers</a> will see <br />
           your proposition. Finally, is question of time and make a just bussines.</p>
        <hr width="400">
        <h2>Request task:</h2>
        <form action="sendtask.php" method="post" enctype="multipart/form-data">
        With this form, you will retrieve all the information necesary to explain your task to the people searching for a job. <br /><br />
        Also, we will generate a dynamic website page with detailed info about your task, that will be <u>publically promoted</u>.<br /><br />

        You have an explanation before input data. If you have any question, please follow <a href="contact.php">this link</a>.
        <br /><br />
        <hr width="400">
        <h3>Name of task (required):</h3>
        <p><i>First, you must put a name to your task. Try to explain it choosing a good one. For example: "create website",<br />
         "code patch for App", "pentesting to network", etc.</i></p>
        <input type="text" name="titletask">
        <h3>Description (required):</h3>
        <p><i>Now, you need to explain your task. You must to be clear. For example, you can talk about technologies required,<br /> 
         people involved, dates to start and finish, forms of pay for the job, contacts, etc.</i></p>
        <textarea name="descriptiontask" rows="8" cols="88"></textarea>
        <h3>PDF Anex. (optional):</h3>
        <p><i>If you need it, you can upload a PDF file with the task in your own format, also, with more information than <br />
        description if is required.</i></p>
	<input type="file" name="filetask">
        <h3>Type of expert (optional):</h3>
        <p><i>Maybe is interesting to define the type of professional discipline that your task will require. Don't worry if they are mixed.<br /> 
        This information is to create a better search result of solutions for you. Freelancers define their 'tags' on Codejobs.org <br />
        services when sign so the results that you can choose on the list menu below, are generated dinamically. <br />
        That means, that will be more easy for you to meet them by specialization.</i></p>
	<select id="typetask">
  	<option>Designer</option>
  	<option>Programmer</option>
  	<option>Auditor</option>
	</select>
        <h3>Start date (required):</h3>
        <p><i>You must specify the date to start the task.</i></p>
        <input type="datetime" name="startdatetask">
        <h3>End date (optional):</h3>
        <p><i>You can specify the date to end the task, if is required.</i></p>
        <input type="datetime" name="enddatetask">
        <h3>Desired resources (optional):</h3>
        <p><i>If you are interested in one or more <a href="freelancers.php" target="_blank">Freelancers</a> to realize your task, <u>you must specify their ID's below</u> to send <br />your offer directly to them.</i></p>
        <textarea name="resourcestask" rows="4" cols="40"></textarea>
        <h3>Offer (required):</h3>
        <p><i>This is important. Is your offer to change goods/services because of the task. You can use different currencies to pay.<br /> Also, you can pay with hours of time.</i></p>
     <select name="thelist" onChange="combo(this, 'theinput')" onMouseOut="comboInit(this, 'theinput')" >
      <optgroup label="Currencies">
        <option value="Euros">Euro</option>
        <option value="Dollars">Dollar</option>
        <option value="Bitcoins">Bitcoin</option>
      </optgroup>
      <optgroup label="Time">
        <option value="Hours">Hours</option>
      </optgroup>
      <optgroup label="Others">
        <option value="Paypal">PayPal</option>
        <option value="Resources">Resources</option>
      </optgroup>
    </select>
        <p><i>If you choose 'Resources', you can specify them manually on the input form below. For example: "tomatoes",<br />
        "sofa", "beers", etc.</i></p>
        <input type="text" name="offertask_other">
        <p><i>Now, specify the quantity. For time, use <b>hours</b>. Remember that <u>you will talk with candidates directly later.</u></p>
        <input type="text" name="offertask_quantity">
        <h3>Email/Phone/Contact (required):</h3>
        <p><i>This information will not be public. It is used to put you in contact with Freelancers or with us, if is required.</i></p>
        <input type="text" name="email" />
        <h3>Send:</h3>
        <p><i>Congratulations!, you finished to fill the form. Now, is time to validate your inputs. If all is ok, you will recieve<br /> 
        an email from our system with the information of your task.</i></p>
        <p>Thanks for use CodeJobs.org!</p>
	<input type="submit" value="Send">	
	</form>  
       <hr>
      </div>
    </td>
   </tr> 
   </table>
</center>
</div>
<?php include("foot.php"); ?>
