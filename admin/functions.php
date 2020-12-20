<?php
function insert_category(){
    global $connection;
 if(isset($_POST['submit'])){
                            $cat_title = $_POST['cat_title'];
                            if(empty($cat_title))
                            echo "Ce Champ Doit Etre Rempli";
                            else {
                                $qry = "INSERT INTO categories(cat_title) VALUES ('{$cat_title}')";
                                $result = mysqli_query($connection, $qry);
                                if(!$result)
                                die("QUERY FAILED".mysqli_error($connection));
                            }
                        }
                        }
    
function update_category (){
    global $connection;
    if(isset($_POST['update_category'])){
             $cat_id = $_GET['update'];
             $cat_title = $_POST['cat_title'];
             $qry = "UPDATE categories set cat_title = '$cat_title' WHERE cat_id = '$cat_id'";
             $result = mysqli_query($connection, $qry);

         }
}

function delete_category (){
    global $connection;
    //DELETE FROM category
                           if(isset($_GET['delete'])){
                             $delete_id = $_GET['delete'];
                             $qry = "DELETE FROM categories where cat_id = $delete_id";
                             $result = mysqli_query($connection, $qry);
                             header("Location: categories.php");
                           }
}

?>