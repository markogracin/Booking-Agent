<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <?php include_once '../config.php' ?>
  <head>
    <?php include_once '../head.php' ?>
    <title><?php echo $title ?></title>
  </head>
  <body>
  <div class="propertyBg"></div>
  <?php include_once 'sidebar.php' ?>
    <div class="workBoard">
        <h1>Add a new property</h1>
        <div class="divider"></div>
        <form method="post" id="propertyForm" autocomplete="off" action="propertyInsert.php" class="addForm">
              <input type="text" placeholder="Property name" id="property_name" name="property_name" class="formDetails">
              <input type="text" placeholder="Price(€)" id="price" name="price" class="formDetails">
              <input type="text" placeholder="Description" id="description" name="description">
              <input type="submit" value="Submit" id="submit" name="submit">
              <?php
              if(isset($_GET['oh_gosh!'])){
                echo "<p class='error'>*All fields are required!<p>";
                }
              ?>

        </form>
        <table class="results">
        <tr class ="tableDesc">
          <td>Property name</td>
          <td>Price(€)</td>
          <td>Description</td>
        </tr>
            <?php
      $do = $db->prepare("select * from property");
      $do->execute();
      $property = $do->fetchAll(PDO::FETCH_OBJ);
      foreach ($property as $property) :
      ?>
            <tr>
            <td><?php echo $property->property_name; ?></td>
            <td><?php echo $property->price; ?></td>
            <td><?php echo $property->description; ?></td>
            <!--td><a href="#" class="primaryColor">EDIT</a></td-->
            <td><a href="propertyDel.php?property_id=<?php echo $property->property_id;?>" class="alert">DEL</a></td> 
            </tr>
      <?php endforeach; ?>
    </div>
   <?php include_once '../script.php' ?>
  </body>
</html>
