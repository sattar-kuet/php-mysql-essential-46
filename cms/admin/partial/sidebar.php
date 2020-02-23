  <?php $base_url = 'http://'.$_SERVER['SERVER_NAME'];?>
  <nav id="sidebar">
    <div class="sidebar-header">
        <h3><a href="<?php echo $base_url;?>/cms/admin/dashboard.php"> CMS </a></h3>
        <strong><a href="<?php echo $base_url;?>/cms/admin/dashboard.php"> CMS </a></strong>
    </div>

    <ul class="list-unstyled components">
        <li>
            <a href="<?php echo $base_url;?>/cms/admin/new_post.php">
                <i class="glyphicon glyphicon-pencil"></i>
                New Post
            </a>
        </li>

    </ul>
</nav>