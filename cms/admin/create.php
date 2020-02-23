<?php $_COOKIE['title'] = 'Create New Admin'; ?>
<?php include('../include/admin_header.php');?>



    <div class="wrapper">
        <!-- Sidebar Holder -->
        <?php include('partial/sidebar.php'); ?>

        <!-- Page Content Holder -->
        <div id="content">
            <!-- top nav bar -->
            <?php include('partial/top-nav.php'); ?>
            <div class="container">
              <h2>Create New Admin</h2>
              <form action="process/create_admin.php" method="post">

                <div class="form-group">
                  <label for="name">Name:</label>
                  <input type="text" class="form-control"  placeholder="Enter Name" name="name">
              </div>

              <div class="form-group">
                  <label for="district">District:</label>
                  <input type="text" class="form-control" placeholder="Enter District" name="district">
              </div>

              <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="email" class="form-control" placeholder="Enter email" name="email">
              </div>

              <div class="form-group">
                  <label for="password">Password:</label>
                  <input type="password" class="form-control" placeholder="Enter password" name="password">
              </div>

              <button type="submit" class="btn btn-default">Create Post</button>
          </form>
      </div>

  </div>
</div>

<?php include('../include/footer.php');?>

