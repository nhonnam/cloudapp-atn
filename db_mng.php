<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="db_mng.css">
</head>
<body>
    <header>ATN Toy Stores Database</header>
<?php
    session_start();
    $page = $_SERVER['PHP_SELF'];
    if (isset($_POST["submit_time"]))
        $_SESSION["refresh"] = $_POST["refresh_time"];
    if (isset($_POST["selected_shop"])){
        $_SESSION["selected_shop"] = $_POST["shop"];
    }
?>
<div class="nav-bar">
	<div><a class="nav" id="signout" href="logout.php"><b>Log Out</b></a></div>
</div>
<?php
    include("db_config.php");
    include("product.php");
    $dbconn = pg_connect($db_conn_string);
    $role = $_SESSION["role"];
    if ($role == "director")
        include("director.php");
    else
        $product_query = "SELECT * FROM product WHERE shop='".$role."' ORDER BY product_id";
    $product = pg_query($dbconn,$product_query);
    $num_field = pg_num_fields($product);
    $update_btn = "Edit";
    $update_btn_name = "edit";
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        if (isset($_POST['insert'])){
            $add_query="INSERT INTO product VALUES ('".$role."',";
            for ($i=0;$i<$num_field;$i++){
                $field_name = pg_field_name($product,$i);
                if ($field_name!='shop'){
                    $field_value = $_POST[$field_name];
                    if($i!=$num_field-1)                
                        $add_query=$add_query."'".$field_value."',";               
                    else $add_query=$add_query."'".$field_value."'"; 
                }        
            }
        $add_query=$add_query.")";
        $add_result=pg_query($dbconn, $add_query);
    }
    if (isset($_POST['delete'])){
        $del_query="DELETE FROM product WHERE product_id="."'".$_POST['product_id']."'";
        $del_result=pg_query($dbconn,$del_query);
    }
    if (isset($_POST['save'])){
        $edit_query="UPDATE product SET product_name="."'".$_POST['product_name']."', price="."'".$_POST['price']."', quantity="."'".$_POST['quantity']."' WHERE product_id="."'".$_POST['product_id']."'";
        $edit_result=pg_query($dbconn,$edit_query);
        $update_btn = "Edit";
        $update_btn_name = "edit";
    }
    if (isset($_POST['edit'])){
        $update_btn = "Save";
        $update_btn_name = "save";
    }
    $product = pg_query($dbconn,$product_query);
    $num_field = pg_num_fields($product);
}
display_table($product,$role,$update_btn,$update_btn_name);
?>
</body>
</html>