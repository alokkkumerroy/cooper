<?php
    include("includes/config.php");
    
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
        <title>My Shop</title>
        <link rel="stylesheet" href="styles/style.css" media="all"/>
    </head>
    <body>
        
        <div class="main_wrapper">
                
            <div class="header_wrapper">
                <img src="img/main.png" style="float:left" width="500px" height="100px">
                <img src="img/13.png" style="float: right;"width="500px" height="100px">
            
            </div>
            

            
            <div id="navbar">
               <ul id="menu">
                   <li><a href="index.php"><button type="button"  id="">Home</button></a></li>
        <li><a  href="log/login.html"><button type="button"  id="">Login</button></a></li>
        <li><a  href="log/SIGNIN.HTML"><button type="button"  id="">Sign Up</button></a></li>
        <li><a  href="log/j.html"><button type="button"  id="">Order</button></a></li>
        <li><a href="#"><button type="button"  id="">My account</button></a></li>
        <li><a href="log/login.html"><button type="button"  id="">Logout</button></a></li>
        <li><a href="log/logout.html"><button type="button"  id="">Contact us</button></a></li>
      
               </ul>
               <div id="form">
                   <form method="GET"  >

                    <input type="text" name="user_query" placeholder="search a product" />
                    <input type="submit" name="search" value="search"/> 
                </form> 
               </div>
            </div>
            

             
            <div class="contant_wrapper">
                <div id="left_sidebar">
                    <div id="sidebar_title"><center>Categories</center></div>
                        <ul id="cats">

                        <?php
                            $get_cat="select * from Categorie";
                            $run_cat = mysqli_query($con, $get_cat);

                            while($row_cat=mysqli_fetch_array($run_cat)){

                                $cat_id = $row_cat['cat_id'];
                                $cat_title = $row_cat['cat_title'];

                               echo "<li><a href='index.php?cat=$cat_id'>$cat_title</a></li>";
                            }
                            
                        ?>
                            
							 
                        </ul>
                        <div id="sidebar_title"><center>Branchs</center></div>
                        <ul id="cats">
                        <?php
                            $get_branch="select * from branch";
                            $run_branch = mysqli_query($con, $get_branch);

                            while($row_branch=mysqli_fetch_array($run_branch)){

                                $branch_id = $row_branch['branch_id'];
                                $branch_title = $row_branch['branch_title'];

                               echo "<li><a href='index.php?branch=$branch_id'>$branch_title</a></li>";
                            }
                            
                            ?>
                            </ul>
                </div>
                <div id="right_content">
                <div id="product_box">
                    </div>

                  <?php
                  $get_cakes="select * from cakes order by rand() LIMIT 0,6";
                            $run_cakes = mysqli_query($con, $get_cakes);

                            while($row_cakes=mysqli_fetch_array($run_cakes)){

                                $cake_id = $row_cakes['cake_id'];
                                $cake_title = $row_cakes['cake_title'];
                                $cat_id = $row_cakes['cat_id'];
                                $branch_id = $row_cakes['branch_id'];
                                $cake_desc = $row_cakes['cake_desc'];
                                $cake_price = $row_cakes['cake_price'];
                                $cake_image = $row_cakes['cake_img1'];

                                echo" <div id='single_product'>
                                <h3>$cake_title</h3>
                                <img class='img-responsive' src='admin_area/cake_img/$cake_image' width='130' height='130'><br>
                                <p><b>Price:$cake_price</b></p>
                                <a href='detaails.php?cake_id=$cake_id'style='float:left;'>Details</a>
                                <a href='index.php?add_cart=&cake_id'><button style='float:right;'>Add to cart</button></a>
                                </div>";

                                
                              }
                                ?>
                  
                </div>
              </div>

                  

                       
      
            </div>

            


        </div>

        
        

    </body>
</html>