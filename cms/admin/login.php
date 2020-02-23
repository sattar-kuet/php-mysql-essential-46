<?php $_COOKIE['title'] = 'login'; ?>
<?php session_start();
   if(isset($_SESSION['user']['id'])){
    header('Location:dashboard.php');
   }
?>
<?php include('../include/header.php');?>



    <div class="wrapper">
        <!-- Sidebar Holder -->
        <?php //include('partial/sidebar.php'); ?>

        <!-- Page Content Holder -->
        <div id="content">
            <!-- top nav bar -->
            <div class="container">
              <h2>Admin Login</h2>
              <?php 
               if(isset($_SESSION['warning_msg'])){?>
                <div class="alert alert-danger">
                  <?php echo $_SESSION['warning_msg'];?>
                </div>
              <?php 
               }
               unset($_SESSION['warning_msg']);
              ?>
              <form action="process/login.php" method="post">

    
              <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="email" class="form-control" placeholder="Enter email" name="email">
              </div>

              <div class="form-group">
                  <label for="password">Password:</label>
                  <input type="password" class="form-control" placeholder="Enter password" name="password">
              </div>

              <button type="submit" class="btn btn-default">Login</button>
          </form>
      </div>

  </div>
</div>





<?php include('../include/footer.php');?>
