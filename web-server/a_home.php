<?php
  session_start();
  $con = mysqli_connect("localhost", "root", "");
  mysqli_select_db($con, "id4493440_citypark");
  if(isset($_SESSION['loggedin']))
  {
?>
<!DOCTYPE html>
<html lang="en">
  
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Park_Me | Admin_home </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
   <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title"><i class="fa fa-paw"></i> <span>Park Me!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <!-- <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div> -->
              <div class="profile_info">
                <span>Welcome!</span>
                
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="a_home.php"><i class="fa fa-home"></i> Home <!-- <span class="fa fa-chevron-down"></span> --></a>
                    <!-- <ul class="nav child_menu">
                      <li><a href="index.php">Dashboard</a></li>
                      <li><a href="index2.php">Dashboard2</a></li>
                      <li><a href="index3.php">Dashboard3</a></li>
                    </ul> -->
                  </li>
                  <li><a><i class="fa fa-edit"></i> Operations <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="add_sa.php">Add Sub-admin</a></li>
                      <li><a href="rel_sa.php">Relocate Sub-admin</a></li>
                      <li><a href="build.php">Edit Building</a></li>
                    </ul>
                  </li>
                </ul>
              </div>

            </div>
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                   <!--  <img src="images/img.jpg" alt=""> --><i class="fa fa-user"></i>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <!-- <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li> -->
                    <li><a href="index.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              
 			  <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Sub-admin details </h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                <?php
                  $con = mysqli_connect("localhost", "root", "");
                  mysqli_select_db($con, "id4493440_citypark");
                  
                  $data=mysqli_query($con,"SELECT * FROM subadmin");
                  if(mysqli_num_rows($data)>0)
                  { ?>
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>S_id</th>
                          <th>Building No.</th>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Gender</th>
                          <th>E-mail</th>
                          <th>Contact</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                            while($row = mysqli_fetch_assoc($data))
                            { 
                              ?>
                              
                            <table class="table table-hover">
                            
                            <td><?php echo "{$row['s_id']}"?></td>
                            <td><?php echo "{$row['b_id']}"?></td>
                            <td><?php echo "{$row['first_name']}"?></td>
                            <td><?php echo "{$row['last_name']}"?></td>
                            <td><?php echo "{$row['gender']}"?></td>
                            <td><?php echo "{$row['email']}"?></td>
                            <td><?php echo "{$row['contact']}"?></td>
                            </table>
                          <?php
                         }
                      }
                    ?>
                      
                        
                          
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
<!-- Google Analytics -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-23581568-13', 'auto');
ga('send', 'pageview');

</script>
  </body>

</html>

<?php
  }
  else
  {
    header("Location:index.php");
  }
?>