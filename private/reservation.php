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

              <span>
                <select name="property" id="property">
                 <option value="" class="agentOption">Select property*</option>

                  <?php
                  $do = $db->prepare("select * from property");
                  $do->execute();
                  $property = $do->fetchAll(PDO::FETCH_OBJ);
                  foreach ($property as $property):?>
                  <option class="agentOption"><?php echo $property->property_name; ?></option>
                  <?php endforeach; ?>

                </select>
              </span>

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
          $do = $db->prepare("select * from reservation");
          $do->execute();
          $reservation = $do->fetchAll(PDO::FETCH_OBJ);
          foreach ($reservation as $reservation):
        ?>
            <tr>
            <td><?php echo $reservation->guest_name; ?></td>
            <td><?php echo $reservation->guest_email; ?></td>
            <td><?php echo $reservation->property; ?></td>
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
