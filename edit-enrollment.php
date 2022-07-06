<?php
    require_once('logics/dbconnection.php');
    $querystudent=mysqli_query($conn,"SELECT * FROM enrollment WHERE no= '".$_GET['id']."' ");
    while($fetchstudent = mysqli_fetch_array($querystudent))
    {
        $fullname = $fetchstudent['fullname'];
    }
?>
<!DOCTYPE html>
<html lang="en">
    <!-- header file -->
<?php
    require_once('includes/headers.php')
?>
<body>
    <!--navbar file-->
    <?php
    require_once('includes/navbar.php')
?>
    <!-- sidebar file -->
    <?php
    require_once('includes/sidebar.php')
?>
    <!-- code for main content -->
    <div class="main-content">
        
    </div>
    <div class="main-content pt-2">
        <div class="container-fluid">
           <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-dark text-center text-white">
                            <h4>Edit Student <?php echo "$fullname"?></h4>
                        
                        </div>
                    </div>

                </div>
           </div>
        </div>
    </div>
 
<!-- scripts file -->
<?php
    require_once('includes/scripts.php')
?>
</body>
</html>