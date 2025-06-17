<?php
session_start();
$id=$_SESSION["teacher"];
if(empty($_SESSION["teacher"]))
{
	header("location:index.php");
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Literary Hub</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
  </head>
  <body>
  <div class="container-scroller">
      
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">

        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="search-field d-none d-md-block">
            <form class="d-flex align-items-center h-100" action="#">
              <div class="input-group">
                <div class="input-group-prepend bg-transparent">
                  <i class="input-group-text border-0 mdi mdi-magnify"></i>
                </div>
                <input type="text" id="searchInput"class="form-control bg-transparent border-0" placeholder="Search Here">
              </div>
            </form>
          </div>
         
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            
          <li class="nav-item">
              <a class="nav-link" href="dashboard.php">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
              <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">View Here</span>
                <i class="menu-arrow"></i>
               

              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="readers.php">Readers</a></li>
                  <li class="nav-item"> <a class="nav-link" href="writers.php">Writers</a></li>
                  <li class="nav-item"> <a class="nav-link" href="stories.php">Stories</a></li>
                  <li class="nav-item"> <a class="nav-link" href="comments.php">Comments</a></li>
                  <li class="nav-item"> <a class="nav-link" href="logout.php">Logout</a></li>
                 
                 
                </ul>
              </div>
            </li>
           

            
          </ul>
        </nav>
		
		
		
		
		
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Writers Details</h3>
              
            </div>
         
            
              <div class="col-12 grid-margin stretch-card">
              <div style="overflow-x: auto; overflow-y: auto;">

              <table class="table table-bordered table-striped table-hover" id="dataTable">
              <thead class="thead-dark">
                  <?php
					  require("connection.php");
					  $res=$con->query("select * from `tb_jlogin`");
					  $count=$res->num_rows;
            
					  ?>

	<tr>
	  <th>Sl.no</th>
	  <th>Name</th>
	  <th>Email</th>
	  <th>Phone No</th>
    <th>Password</th>
   
    <th>Delete</th>

	</tr>
  </thead>
  <tbody>
	<?php
						if($count>0)
						{					  $i=1;

							while($row=$res->fetch_assoc())
							{
								?>
					
<tr>
            <td><?php echo $i++;?></td>
            <td><?php echo $row["jname"];?></td>
            <td><?php echo $row["jemail"];?></td>
            <td><?php echo $row["jphoneno"];?></td>
            <td><?php echo str_repeat('*', strlen($row["jpassword"])); ?></td>
           
    <td><a href="deletewriter.php?del=<?php echo $row["id"];?>" onclick="return confirm('Do you want to delete?')" class="btn btn-outline-danger" >DELETE</a></td>
       
          
</tr>

<?php
              }
            }
            ?>
  </tbody>
</table>
          </div>
                 
              </div>
              
              
              
                       
                     
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->

    <script>
  document.getElementById("searchInput").addEventListener("input", function() {
    let filterValue = this.value.toLowerCase();
    let rows = document.querySelectorAll("#dataTable tbody tr");

    rows.forEach(row => {
      let rowData = row.textContent.toLowerCase();
      if (rowData.includes(filterValue)) {
        row.style.display = "";
      } else {
        row.style.display = "none";
      }
    });
  });
</script>
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/file-upload.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>