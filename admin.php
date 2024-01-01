
<?php
session_start();
include_once 'apps/config/connection.php';
include_once 'apps/config/function.php';

if(!isset($_SESSION['name'])){
echo '<script>
            window.location = "http://localhost/barisal/login"
            </script>';
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
        <title></title>
        <link type="text/css" rel="stylesheet" href="apps/css/bootstrap.min.css"/>
        <link type="text/css" rel="stylesheet" href="apps/css/font-awesome.min.css">
        <link type="text/css" rel="stylesheet" href="apps/css/admin.css"/>
    </head>
    <body>
        <header>
            <div class="container-fluid">
                <div class="col-md-12 header_area">
                    <div class="row">
                    <div class="col-md-6 logo_area">
                        <div class="logo_part">
                            <img src="apps/images/admin_logo.jpg" alt="logo"/>
                        </div>
                        <ul>
                            <li><p>CSL Training</p></li>
                            <li><a href="#">www.csltraining.com</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 login_area">
                        <ul>
                            <li>
                            <?php
                            if(isset($_SESSION['Authontication'])){
                            if($_SESSION['Authontication'] == "teacher"){
                                echo '<img src="apps/teacherimg/'.$_SESSION['image'].'" width="30"/>';

                            }else if($_SESSION['Authontication'] == "employee"){
                                        echo '<img src="apps/employeeimg/'.$_SESSION['image'].'" width="30"/>';
                                    }
                            if($_SESSION['Authontication'] == "student"){
                                        echo '<img src="apps/studentimg/'.$_SESSION['image'].'" width="30"/>';
                                        
                                    }

                            }


                            ?>


                            



                            </li>
                            <li><p><?php echo $_SESSION['name'];?></p></li>
                            <li><a href="?admin=logout">Log Out</a></li>
                        </ul>
                    </div>
                </div>
                </div>
            </div>
        </header>
        <nav class="navbar navbar-default menu_area">
            <div class="col-md-12">
                <ul class="nav navbar-nav">
                    <li><img src="apps/images/dash.png"/><a href="apps/admin/dashboard.php">Dashboard</a></li>
                    <li><img src="apps/images/user_pro.png"/><a href="#">User Profile</a></li>
                    <li><a href="#">Change Password</a></li>
                    <li><img src="apps/images/inbox.png"/><a href="#">Inbox</a></li>
                    <li><img src="apps/images/visit.png"/><a href="#">Visit Website</a></li>
                </ul>
            </div>
        </nav>
        <section class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                    <div class="site-option">
                        <p>Site Option</p>
                        <ul class="nav navbar-nav">
                            <?php
                           

                                if(isset($_SESSION['Authontication'])){

                                    if($_SESSION['Authontication'] == "teacher"){
                                            if($_SESSION['admin'] == 'A'){
                                                echo '<li><a href="">Change Password</a></li>
                                            <li><a href="#">Teacher Profile</a></li>

                                            <li><a href="#">add Country</a></li>

                                            <li><a href="#">display Country</a></li>

                                            <li><a href="#">Add City</a></li>
                                            <li><a href="#">Display City</a></li>
                                            <li><a href="?admin=addResult">add Result</a></li>
                                            <li><a href="#">Display Result</a></li>
                                            <li><a href="?admin=addSyllbus">add Syllabus</a></li>
                                            <li><a href="#">Display Syllabus</a></li>
                                            <li><a href="#">add Notice</a></li>
                                            <li><a href="#">display Notice</a></li>


                                            ';
                                            }
                                            else{
                                                echo '<li><a href="">Change Password</a></li>
                                            <li><a href="#">Teacher Profile</a></li>';
                                            }



                                        
                                    }
                                    else if($_SESSION['Authontication'] == "employee"){
                                        echo '<li><a href="">employee insert </a></li>
                                            <li><a href="#">employee menu</a></li>';
                                    }
                                     if($_SESSION['Authontication'] == "student"){
                                        echo '<li><a href="">Student Profile</a></li>
                                            <li><a href="#">Student Result</a></li>
                                            <li><a href="#">Student Syllabus</a></li>
                                            <li><a href="#">Student Attendence</a></li>';
                                    }
                                   

                                    

                                }


                            ?>
                        </ul>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="content_area">
                        
                       
                      <?php
                    
                      if(isset($_GET['admin'])){
                        echo '<p>'.$_GET['admin'].'</p>';
                        if(file_exists('apps/admin/'.$_GET['admin'].'.php')){
                            include_once ('apps/admin/'.$_GET['admin'].'.php');
                        }
                        else
                        {
                            include_once ('apps/user/404.php');
                        }
                      }
                      else
                      {
                        include_once ('apps/admin/home.php');
                      }
                      
                      
                     







                        
                      ?> 


                  



					   
					   
					   
					   
					   
					   
					   
					   
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer_area">
            <div class="col-md-12">
                <i class="fa fa-copyright" aria-hidden="true"></i>
                <p>Copyright <a href="#">csl Training </a>All rights reserved.</p>
            </div>
        </footer>
    </body>
    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/bootstrap.min.js"></script>
</html>