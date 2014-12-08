<?php
 require_once ("../../../../files/database/db_connect.php");
 ?>


<section id="addProduct">
<p>Please use the form below to add a new product.</p>
<!--Feedback messages for success or errors.-->
<p id="successMessage" class="successMessage" hidden>The product has been submitted successfully!!!</p>
<p id="nameValidation" class="errorValidation" hidden>A product name is required.</p>
<p>Product Name: <input type="textarea" id="product_name"/></p>
<p>Product Description: <input type="textarea" id="description"/></p>
<!--//Uploading images form and iframe-->
<p id="uploadProcess">Uploading image...<br/><img src="files/images/upload.gif" /></p>
	  <p id="result"></p>
	  <form action="files/php/submit/upload.php" method="post" enctype="multipart/form-data" target="uploadTarget" onsubmit="startUpload();" >
	  File: <input name="myfile" type="file" id="myfile"/>
	  <input type="submit" name="submitBtn" value="Upload" />
	  </form>
	  <iframe id="uploadTarget" name="uploadTarget" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>
	  
<?php

//Query to populate the dropdown menu for choosing categories
$getCategories="SELECT * FROM category";
$result=mysqli_query($link, $getCategories);

echo "<p>Pick a category:</p>\r\n";
echo "<select id='categorySelect' length='15'>";
while($row=mysqli_fetch_array($result)){
    $category_id=$row['category_id'];
    $category_name=$row['category_name'];
    echo "<option value=".$category_id." >".$category_name."</option>";
}
echo "</select>";
?>

<p>Quantity: <input type="textarea" id="quantity"></p>
<p>Price:$   <input type="textarea" id="price"/></p>
<p>Discount Price:$ <input type="textarea" id="discount"/></p>
<p><input id="submit" type="button" value="Submit"/><img id="loadingImage" src="files/images/loading.gif" alt="loading" hidden/></p>
</section>
