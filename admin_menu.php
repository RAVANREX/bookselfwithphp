<?php require('check_seesion.php')?>
<?php require ('count/unread-message-count.php');?>
<?php require ('count/new-doc-count.php');?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.php">Welcome To Administration Panel</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="index.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Category">
          <a class="nav-link" href="view-category.php">
            <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">Category</span>
          </a>
			
       
        </li>
		  <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Documents ">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-sitemap"></i>
            <span class="nav-link-text">Documents</span>
            <span class="badge badge-light"><?php echo $x;?></span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti">
            <li>
              <a href="new-uploaded-doc.php">New Uploaded Document</a>
            </li>
            <li>
              <a href="app-doc.php">Approve Document</a>
            </li>
            <li>
              <a href="suspend-doc.php">Suspended Document</a>
            </li>
			  
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="All users">
          <a class="nav-link" href="admin-userlist.php">
            <i class="fa fa-fw fa-users"></i>
            <span class="nav-link-text">All users</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="All messages">
          <a class="nav-link"   data-parent="#exampleAccordion" href="admin-message.php">
            <i class="fa fa-fw fa-envelope"></i>
            <span class="nav-link-text">Messages</span>
            <span class="badge badge-light"><?php echo $s;?></span>
          </a>
        </li>
      </ul>
 
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
       <li class="nav-item">
       <a class="nav-link text-center" href="admin-update.php">
       <i class="fa fa-fw fa-user"></i><?php echo $_SESSION['inf']['fname']?></a>
       </li>
        <li class="nav-item">
          <a class="nav-link text-center" href="log_out.php">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
     
        </li>
      </ul>
    </div>
  </nav>