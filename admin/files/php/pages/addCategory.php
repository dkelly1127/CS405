 <?php
require_once ("../../../../files/database/db_connect.php");
?>

<section id=\"addCategory\">
<p>Please use the form below to add a new category.</p>

<!--Feedback messages for success or errors-->
<p id="successMessage" class="successMessage" hidden>The category has been submitted successfully</p>
<p id="nameValidation" class="errorValidation" hidden>A category name is required.</p>

<p>Category Name: <input type="textarea" id="categoryName"/></p>

<p><input id="submit" type="button" value="Submit"/><img id="loadingImage" src="files/images/loading.gif" alt="loading" hidden/></p> 


</section>

