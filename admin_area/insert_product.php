<?php
    include("includes/db.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
    <script  src="https://cloud.tinymce.com/5/tinymce.main.js"></script>
    <script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
    <script >
        tinymce.init({selector:'textarea'});
    </script>
    </head>
    
<body bgcolor="#a4b0be">
    <form method="POST" action="insert_product.php" enctype="multipart/form-data" >
        <table width="700px" align="center" border="1" bgcolor="#70a1ff">
            <tr align="center">
                <td colspan="2">
                    <h2>Insert New Cake</h2>
                </td>
            </tr>
            </tr>
            <tr>
                <td align="center"> <b> Cake Title </b></td>
                <td><input type="text" name="cake_title"/></td>
            </tr>
            <tr>
            <td align="center"> <b>  Categories </b></td>
                <td>
                    <select name="cake_cat">
                     <option>select a catagory</option>
                    
            
                         <?php
                            $get_Categorie="select * from Categorie";
                            $run_Categorie = mysqli_query($con, $get_Categorie);

                            while($row_Categorie=mysqli_fetch_array($run_Categorie)){

                                $cat_id = $row_Categorie['cat_id'];
                                $cat_title = $row_Categorie['cat_title'];

                               echo "<option value='$cat_id'>$cat_title</option>";
                            }
                            
                        ?>
                        </select>

                    </td>
            </tr>
            <tr>
            <td align="center"> <b>  Branch </b></td>
                <td> 
                    <select name="cake_branch">
                     <option>select brand</option>
                        <?php
                              $get_branch="select * from branch";
                              $run_branch = mysqli_query($con, $get_branch);

                              while($row_branch=mysqli_fetch_array($run_branch)){

                                     $branch_id = $row_branch['branch_id'];
                                    $branch_title = $row_branch['branch_title'];

                                    echo "<option value='$branch_id'>$branch_title</option>";
                                }
                            
                        ?>
                    </select>
                    </td>
            </tr>

            <tr>
                <td align="center"> <b>Cake Image1 </b></td>
                <td><input type="file" name="image1" value=""/></td>
            </tr>
           
            <tr>
                 <td align="center"> <b> Cake price </b></td>
                <td><input type="int" name="cake_price"/></td>
            </tr>
            <tr>
                  <td align="center"> <b> Cake Description </b></td>
                <td><textarea name="cake_desc" id="" cols="50" rows="10"></textarea></td>
            </tr>
            <tr>
                 <td align="center"> <b> Cake Keyword </b></td>
                <td><input type="text" name="cake_keyword"/></td>
            </tr>
            
            <tr align="center"> 
                <td colspan="3"><input type="submit" name="submit" /></td> <!-- value="insert product" -->
            </tr>
        </table>

    </form>
	<?php    
    if(isset($_POST['submit']))
	{
			$cake_title = $_POST['cake_title'];
			$cake_cat = $_POST['cake_cat'];
			$cake_branch = $_POST['cake_branch'];
			$cake_price = $_POST['cake_price'];
			$cake_desc = $_POST['cake_desc'];
			$status='on';
			$cake_keyword = $_POST['cake_keyword'];
				if($cake_title!='' OR $cake_cat !=''  OR $cake_branch !=''OR $cake_price !='' OR $cake_desc !='' OR $cake_keyword !='')// OR  $cake_img1 ==''echo "<script>alert('Please fill all this field');</script>"; exit();
                {
                    
					
		
					$image1 = ($_FILES['image1']['name']); // image was temp_name1
					
					
                    //move_uploaded_file($image,"admin_area/cake_img/");
					
					
					
                   // move_uploaded_file($temp_name1,"cake_img/$cake_img2");
                   // move_uploaded_file($temp_name1,"cake_img/$cake_img3");


                
                   $insert_cakes= mysqli_query($con,"INSERT INTO cakes (cat_id,branch_id,date,cake_title,cake_img1,cake_price,cake_desc,status)
                    VALUES('$cat_id','$branch_id',NOW(),'$cake_title','$image1','$cake_price','$cake_desc','$status')");
					
                   if($insert_cakes)
					{
						echo "Inserted";
					}
                   else
				   {
                    echo"not Inserted ";
                   }
                }
        
        
       
    
				
                else 
				{
					?>
					<script> alert ("Invalid"); </script>
					<?php
                   // $run_cakes=mysqli_query($con,$insert_cakes);
                    /*if($run_cakes){
                  echo"<script>alert('successfully')</script>";
					}*/
				}
    }
	?>
	
</body>
</html>

