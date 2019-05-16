<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php is_loggedIn(); ?>


<?php
get_selected_page(false);
//After get_selected_page runs we have accsess to the
// current_page global variable which holds assoc array of the spesifc page
?>
<?php include_once("../includes/layouts/admin_navigation.php"); ?>
<?php include_once("../includes/layouts/admin_header.php"); ?>
<?php require_once("../includes/layouts/admin_manage_navigation.php"); ?>

    <!-- Main Section  -->
    <?php echo message(); ?>
    <?php echo show_error(); ?>
    <section id="main" class="mt-5">
      <div class="container">
        <div class="row">
          <div class="col">
              <div class="card text-center">
                <?php if($current_page) { ?>
                  <div class="card-header bg-info">
                        <h2><?php echo $current_page["page_name"] ;?></h2>
                    </div>
                    <div class="card-body">
                      <p>
                        Position: <?php echo $current_page["position"]; ?>
                        <br/>
                        Visible: <?php echo $current_page["visible"]==1 ? "Public" : "Private" ; ?>
                      </p>
                      <p>
                        <?php echo nl2br($current_page["content"]); ?>
                      </p>
                      </div>
                      <div class="card-footer">
                        <a class="btn btn-primary" href="edit_page.php?page=<?php echo $current_page["id"]; ?>">Edit</a>
                      </div>
              <?php }elseif($current_category) {     // end of if current page ?>
                <div class="card-header bg-info">
                      <h2><?php echo $current_category["cat_name"] ;?></h2>
                  </div>
                  <div class="card-body">
                    <p>
                      Position: <?php echo $current_category["position"]; ?>
                      <br/>
                      Visible: <?php echo $current_category["visible"]==1 ? "Public" : "Private" ; ?>
                    </p>
                    </div>
                    <div class="card-footer">
                      <a class="btn btn-primary" href="edit_category.php?category=<?php echo $current_category["id"]; ?>">Edit</a>
                    </div>
                  <?php  }else {?>
                    <div class="card-header bg-info">
                          <h2>Please choose a Department / Company</h2>
                      </div>
                  <?php } ?>
                </div>
            </div>
          </div>
        </div>
      </section>
    <?php include_once("../includes/layouts/admin_footer.php"); ?>
