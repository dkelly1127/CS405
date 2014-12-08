<?php
require_once ("../../../../files/database/db_connect.php");
?>
<section id="removeCategory">
<!--Feedback messages for errors and success-->
<p id="successMessage" class="successMessage" hidden>The category has been removed successfully</p>
<p class="noBottomMargin">Please select the category you wish to remove.</p>
<select id="categoryToRemove">

<!--Query to populate the dropdown menu for selecting a category to delete-->
<?php
$getCategoryQuery = "SELECT * FROM category;";
$getCategoryTable = mysqli_query($link, $getCategoryQuery) or die("getCategoryQuery in\nfiles/php/pages/removeCategory.php\r\n".mysqli_error($link));
while ($getCategoryRow = mysqli_fetch_assoc($getCategoryTable)) {
	foreach ($getCategoryRow as $key => $value) {
		$$key = $value;
	}
	echo "<option value=\"$category_name\">$category_name</option>\r\n";
}
?>

</select>
<input id="submit" type="button" value="Submit" /><img id="loadingImage" src="files/images/loading.gif" alt="loading" hidden/></p>
</section>
