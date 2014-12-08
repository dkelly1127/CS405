			<nav>
				<ul>
					 <?php
					 	//Creates the main navigation menu

					    //Sets top level to not perform as a link
					    echo "<li> Browse by Category";
					    echo "<ul>";
						
					    $getCategoriesById="SELECT * FROM Category";
					    $result2=mysqli_query($link, $getCategoriesById) or die(mysqli_error($link));

					    while($row=mysqli_fetch_array($result2)){
					     $subCategoryId=$row['category_id'];
					     $subCategoryName=$row['category_name'];
					     echo "<li><a href='index.php?cat=$subCategoryId'>".$subCategoryName."</a></li>";
					    }
					    echo "</ul>";
					    echo "</li>";
					  
					   
					  ?>
				</ul>
			</nav>