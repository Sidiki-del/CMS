<form action="" method="post">
                        <div class="form-group">
                        <label for="cat_title">Edit Category</label>
                        <?php 
                        if(isset($_GET['update'])){
                            $cat_id = $_GET['update'];
                            $qry = "SELECT * FROM categories where cat_id = $cat_id";
                            $result = mysqli_query($connection, $qry);
                            while($row = mysqli_fetch_assoc($result)){
                                $cat_title = $row['cat_title'];
                                ?>
                        <input type="text" value="<?php echo $cat_title; ?>" class="form-control" name="cat_title">
                            <?php
                            }
                        }
                        ?>
                        </div>
                        <div class="form-group">
                        <input type="submit" class="btn btn-primary" name="update_category" value="Update Categorie"></div>
         </form>

         <?php
         update_category();
         ?>