<?php require_once("../includes/session.php") ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php include("../includes/layouts/admin_header.php"); ?>
<?php is_loggedIn(); ?>


<?php
get_selected_page();
if(!$current_category){
  $_SESSION["msg"] = "Not valid category ";
    redirect("manage_content.php");
}

$query = "DELETE FROM categories WHERE id = {$_GET["category"]}
LIMIT 1";
$result_del_cat = mysqli_query($conn,$query);

if($result_del_cat && mysqli_affected_rows($conn) === 1){
    $_SESSION["msg"] = "The Category {$current_category["cat_name"]} was Deleted successfuly";
    redirect("manage_content.php");
}else{
  $_SESSION["msg"] = "The Category {$current_category["cat_name"]} Delete operation was Failed";
  redirect("manage_content.php");
}

// chek this category is empty from pages before del it
$pages_result = get_pages_of($current_category["id"]);
if(mysqli_num_rows($pages_result)>0){
  $_SESSION["msg"] = "category canwt be deleted with pages";
  redirect("manage_content.php?category=$current_page["id"]")
}
?>
<?php include("../includes/layouts/admin_footer.php");?>
