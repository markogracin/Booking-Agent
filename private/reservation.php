<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <?php include_once '../config.php' ?>
  <head>
    <?php include_once '../head.php' ?>
    <title><?php echo $title ?></title>
  </head>
  <body>
  <div class="reservationBg"></div>
  <?php include_once 'sidebar.php' ?>
    <div class="workBoard">
      <h1>Create a new reservation</h1>
      <div class="divider"></div>

        <form method="post" id="reservationForm" autocomplete="off" action="reservationInsert.php" class="addForm">
              <input type="text" placeholder="Name" id="guest_name" name="guest_name" class="formDetails">
              <input type="text" placeholder="Email" id="guest_email" name="guest_email">

                <select name="property_option" id="property_option">
                 <option class="agentOption">Select property*</option>

                  <?php 
                  $do = $db->prepare("select * from property");
                  $do->execute();
                  $property = $do->fetchAll(PDO::FETCH_OBJ);
                  //$properties = $do->fetchAll(PDO::FETCH_OBJ);
                  foreach ($property as $properties):
                  ?>

                  <option value="<?php echo $properties->property_id; ?>" class="agentOption"><?php echo $properties->property_name; ?></option>
                  <?php endforeach; ?>
                </select>

              <input type="date" placeholder="Start" id="date_from" name="date_from">
              <input type="date" placeholder="End" id="date_to" name="date_to">
              <input type="submit" value="Submit" id="submit" name="submit">
        <?php
          if(isset($_GET['oh_gosh!'])){
          echo "<p class='error'>*All fields are required!<p>";
          }
        ?>
        </form>

        <table class="results">
        <tr class ="tableDesc">
          <td>Guest name</td>
          <td>Email</td>
          <td>Property</td>
          <td>From</td>
          <td>To</td>
          <td></td>
        </tr>

        <?php
          $do = $db->prepare("select * from reservation a left join property b on a.property=b.property_id");
          $do->execute();
          $reservation = $do->fetchAll(PDO::FETCH_OBJ);
          foreach ($reservation as $reservation):
        ?>
            <tr>
            <td><?php echo $reservation->guest_name; ?></td>
            <td><?php echo $reservation->guest_email; ?></td>
            <td><?php echo $reservation->property_name; ?></td>
            <td><?php echo $reservation->date_from; ?></td>
            <td><?php echo $reservation->date_to; ?></td>
            <!--td><a href="#" class="primaryColor">EDIT</a></td-->
            <td><a href="reservationDel.php?booking_id=<?php echo $reservation->booking_id;?>" class="alert">DEL</a></td> 
            </tr>
      <?php endforeach; ?>
    </div>
   <?php include_once '../script.php' ?>
  </body>
</html>
