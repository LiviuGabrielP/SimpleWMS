<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
  <?php echo $pagename ?>
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="./assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="./assets/css/table.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <!-- Sidebar NAV -->
  <?php require 'views/partials/sidenav.php'; ?>

    <div class="main-panel" style="height: 100vh;">
      <!-- TOPNAV -->
      <?php require 'views/partials/topnav.php'; ?>
      <!-- End TOPNavbar -->

      
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            
  
          <form>
    <label for="search">Search:</label>
    <input type="text" id="search" name="search">

    <label for="filter">Filter by:</label>
    <select id="filter" name="filter">
        <option value="name">Name</option>
        <option value="age">Age</option>
    </select>

    <label for="order">Order by:</label>
    <select id="order" name="order">
        <option value="asc">Ascending</option>
        <option value="desc">Descending</option>
    </select>

    <input type="submit" value="Apply">
</form>
          <?php
    
    $numEntries = count($entries);
    
    echo "<table>";
    
    echo "<tr>";
    echo "<th>Name</th>";
    echo "<th>Age</th>";
    echo "<th>Gender</th>";
    echo "<th>Pay</th>";

    echo "</tr>";
    
    for ($i = 0; $i < $numEntries; $i++) {
        echo "<tr>";
        echo "<td>" . $entries[$i]['Name'] . "</td>";
        echo "<td>" . $entries[$i]['Age'] . "</td>";
        echo "<td>" . $entries[$i]['Gender'] . "</td>";
        echo "<td>" . $entries[$i]['Pay'] . "</td>";
        echo "</tr>";
    }
    
    echo "</table>";
?>



          </div>
        </div>
      </div>


<?php require 'views/partials/footer.php'; ?>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="./assets/js/core/jquery.min.js"></script>
  <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap.min.js"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  
  <!-- Chart JS -->
  <script src="./assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    
  <script src="./assets/js/plugins/bootstrap-notify.js"></script>-->
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script>
</body>

</html>