<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <?php include_once '../config.php' ?>
  <head>
    <?php include_once '../head.php' ?>
    <title><?php echo $title ?></title>
  </head>

  <?php
  $do=$db->prepare("select count(booking_id) from reservation");          
  $do->execute();
  $reservationCount = $do->fetchColumn();
  ?>

  <?php
  $do=$db->prepare("select sum(price) from reservation a left join property b on a.property=b.property_id;");          
  $do->execute();
  $totalIncome = $do->fetchColumn();
  ?>

  <body>
  <div class="settingsBg"></div>
  <?php include_once 'sidebar.php' ?>
    <div class="workBoard">
      <h1>Dashboard</h1>
      <div class="divider"></div>
      <p>Hello admin, check out today's stats:</p>

        <div class="dashboardCard">
          <h1>Reservations:<br /> <div class="dashboardNumbers"><?php echo $reservationCount; ?></div></h1>  
        </div>

        <div class="dashboardCard">
          <h1>total income:<br /> <div class="dashboardNumbers"><?php echo $totalIncome; ?> €</div></h1>  
        </div>

    </div>
   <?php include_once '../script.php'; ?>
  </body>
</html>


    