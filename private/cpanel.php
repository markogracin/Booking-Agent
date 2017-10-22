<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once '../config.php'; ?>
    <?php include_once '../head.php'; ?>
    <?php loginCheck(); ?>
    <title><?php echo $title ?></title>
  </head>
  <body>
  <div class="settingsBg"></div>
  <?php include_once 'sidebar.php' ?>
    <div class="workBoard">
      <h1>Dashboard</h1>
      <div class="divider"></div>
      <p>Hello admin, check out today's stats:</p>



        <div class="dashboardCard">
          <h1>Reservations:<br /> <div class="dashboardNumbers">1</div></h1>  
        </div>

        <div class="dashboardCard">
          <h1>total income:<br /> <div class="dashboardNumbers">0€</div></h1>  
        </div>

    </div>
   <?php include_once '../script.php'; ?>
  </body>
</html>
