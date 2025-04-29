<?php require_once('../../private/initialize.php'); ?>


<?php $page_title = 'Staff Menu'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>
	
<div id="content">
  <div id="main-menu">
    <h2>Main Menu</h2>
    <ul>
      <li><a href="subjects/index.php">Subjects</a>
	<li><a href="subjects/add.php">Add</a></h3>
        <li><a href="subjects/delete.php">Delete</a></h3>
        <li><a href="subjects/search.php">Search</a></h3>
        <li><a href="subjects/list.php">List All</a></h3>

      </li>
    </ul>
  </div>
</div>
	
<?php include(SHARED_PATH . '/staff_footer.php'); ?>
	
