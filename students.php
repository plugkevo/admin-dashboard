<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>students page</title>
    <link rel="stylesheet" href="students.css">
    <link rel="stylesheet" href="bootstrap-5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
</head>
<body>
    <!--All our code to be written here-->
    <div class="header">
        <!-- code for header information -->
        <a href="index.php">
            <img src="images/images.jpg" alt="zalego" height="50" width="50" class="rounded-circle">
        </a>
    </div>
    <div class="sidebar">
        <!-- code for sidebar -->
        <nav>
            <ul>
                <li>
                    <a href="#">
                        <span> <i class="fa fa-group"></i> </span>
                        
                        <span>students</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span> <i class="fa fa-folder-open"></i> </span>
                        <span>Courses</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span> <i class="fa fa-graduation-cap"></i></span>
                        <span>Campus</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <!-- code for main content -->
   
    <div class="main-content">
        <div class="container-fluid">
            <table class="table table-striped table-hover table-responsive"  >
                <thead>
                    <tr>
                        <th scope="col">no.</th>
                        <th scope="col">fullname</th>
                        <th scope="col">phone</th>
                        <th scope="col">email</th>
                        <th scope="col">course</th>
                        <th scope="col">Enrolled on</th>
                        <th scope="col">Action</th>
      
                    </tr>
                </thead>
                <tbody>
                     <tr>
                        <th scope="row">1</th>
                        <td>Kevin Munene</td>
                        <td>0740682192</td>
                        <td>munenekevin366@gmail.com</td>
                        <td>Web development</td>
                        <td>Friday</td>
                        <td>
                            <a href="" class="btn btn-primary btn-sm">
                            <i class="fa fa-edit"></i>
                            </a>
                            <a href="" class="btn btn-info btn-sm">
                            <i class="fa fa-eye"></i> 
                            </a>
                            <a href="" class="btn btn-danger btn-sm">
                            <i class="fa fa-trash"></i> 
                                
                            </a>
                        </td>
      

                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Fosi Amana</td>
                        <td>0745683292</td>
                        <td>fosi123@gmail.com</td>
                        <td>Android development</td>
                        <td>Thursday</td>
                        <td>
                        <a href="" class="btn btn-primary btn-sm">
                            <i class="fa fa-edit"></i>
                        </a>
                        <a href="" class="btn btn-info btn-sm">
                            <i class="fa fa-eye"></i>
                        </a>
                        <a href="" class="btn btn-danger btn-sm">
                        <i class="fa fa-trash"></i>
                        </a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                        <a href="" class="btn btn-primary btn-sm">
                        <i class="fa fa-edit"></i>
                        </a>
                        <a href="" class="btn btn-info btn-sm">
                        <i class="fa fa-eye"></i>
                        </a>
                        <a href="" class="btn btn-danger btn-sm">
                        <i class="fa fa-trash"></i>
                        </a>
                        </td>
                    </tr>
                </tbody>
            </table>   
        
    
    
        </div>
    </div>
 
<script src="jquery.min.js"></script>
<script src="bootstrap-5.2.0/js/bootstrap.bundle.min.js"></script>
<script src="bootstrap-5.2.0/js/bootstrap.min.js"></script>   
</body>
</html>