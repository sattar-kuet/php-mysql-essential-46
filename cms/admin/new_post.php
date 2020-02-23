<?php $_COOKIE['title'] = 'Create New Post'; ?>
<?php include('../include/admin_header.php');?>


    <div class="wrapper">
    <?php include('partial/sidebar.php'); ?> 
      <!-- Page Content Holder -->
      <div id="content">
          <!-- top nav bar -->
          <?php include('partial/top-nav.php');?>
          <div class="container">
              <h2>Create New Post</h2>

              <?php if(isset($_SESSION['success_message'])){ ?>
                <div class="alert alert-success">
                  <?php echo $_SESSION['success_message']?>
                </div>
              <?php }?>
             
              <form action="process/create_post.php" method="post" enctype="multipart/form-data">

                <div class="form-group">
                  <label for="title">Title:</label>
                  <input type="text" class="form-control"  placeholder="Enter Title" name="title">
              </div>

              <div class="form-group">
                  <label for="description">Description:</label>
                  <textarea cols="50" class="form-control" placeholder="Enter District" name="description"></textarea>
                  
              </div>

              <div class="form-group">
                  <label for="image">Image:</label>
                  <input type="file" class="form-control"  name="image">
              </div>


              <button type="submit" class="btn btn-default">Create Post</button>
          </form>
      </div>

  </div>
</div>

  <?php include('../include/footer.php');?>
