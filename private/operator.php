<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <?php include_once '../config.php' ?>
  <head>
    <?php include_once '../head.php' ?>
    <title><?php echo $title ?></title>
  </head>
  <body>
  <div class="operatorBg"></div>
  <?php include_once 'sidebar.php' ?>
    <div class="workBoard">
    	<h1>Add a new operator</h1>
    	<div class="divider"></div>
        <form method="post" id="operatorForm" autocomplete="off" action="operatorInsert.php" class="addForm">
              <input type="text" placeholder="First name" id="name" name="name" class="formDetails">
              <input type="text" placeholder="Last name" id="surname" name="surname" class="formDetails">
              <input type="text" placeholder="Email" id="email" name="email">
              <input type="text" placeholder="Password" id="password" name="password">
              <input type="submit" value="Submit" id="submit" name="submit">
        <?php
          if(isset($_GET['oh_gosh!'])){
          echo "<p class='error'>*All fields are required!<p>";
          }
        ?>
		    </form>

        <table class="results">
        <tr class ="tableDesc">
        	<td>First name</td>
        	<td>Last name</td>
        	<td>Email</td>
        </tr>
            <?php
			$do = $db->prepare("select * from operator");
			$do->execute();
			$operator = $do->fetchAll(PDO::FETCH_OBJ);
			foreach ($operator as $operator) :
			?>
						<tr>
						<td><?php echo $operator->name; ?></td>
						<td><?php echo $operator->surname; ?></td>
						<td><?php echo $operator->email; ?></td>
						<!--td><a href="#" class="primaryColor">EDIT</a></td-->
						<td><a href="operatorDel.php?operator_id=<?php echo $operator->operator_id;?>" class="alert">DEL</a></td>	
						</tr>
			<?php endforeach; ?>
		</div>
   <?php include_once '../script.php' ?>
  </body>
</html>
