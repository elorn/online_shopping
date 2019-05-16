<!-- Navigation  -->

<nav class="navbar navbar-expand-sm navbar-dark bg-dark p-3">
  <a class="navbar-brand" href="admin.php">Admin</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navMenu">
    <span class="navbar-toggler-icon"></span>
  </button>
<div class="collapse navbar-collapse" id="navMenu">
    <ul class="navbar-nav">
      <?php
      //Static navigation not from DB
      $navItems = [
        "Home "=> "index.php",
        "Manage Content" => "manage_content.php",
        "Manage Admins" => "manage_admins.php"
      ];
      foreach ($navItems as $navItem => $navLink) {
        echo "<li class=\"nav-item\">";
        echo "<a class=\"nav-link\" href=\"{$navLink}\">";
        echo $navItem;
        echo "</a> </li>";
      }
      ?>

      <!-- <li class="nav-item">
          <a class="nav-link active" href="#">Home</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="#">Manage Content</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="#">Manage Admins</a>
      </li> -->

    </ul>

    <ul class="navbar-nav ml-auto">
      <li class="nav-item px2 dropdown">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
          <i class="fa fa-user"> Welcome <?php echo $_SESSION["admin_firstName"]; ?> </i>
        </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">
              <i class="fa fa-user-circle">Profile</i>
            </a>
            <a class="dropdown-item" href="#">
              <i class="fa fa-cogs">Settings</i>
            </a>
          </div>
          <li class="nav-item px2">
            <a href="logout.php" class="nav-link">
              <i class="fa fa-user-times"> Logout </i>
            </a>
          </li>
      </li>
    </ul>


  </div>
</nav>
