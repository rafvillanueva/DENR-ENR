<?php
  session_start();
  require_once '../config/dbcon.php';
  
  if(!ISSET($_SESSION['user_id'])){
    header('location: ../login');
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>DENR10 | Enr Profile</title>
    <link rel=icon href="img/denr.png">
    <link href="vendor-table/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor-table/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="vendor-table/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="vendor-table/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">
    <link href="vendor-table/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
    <link href="dist/css/sb-admin-2.css" rel="stylesheet"> 
</head>

<body>


<style type="text/css">
    @import url('https://fonts.googleapis.com/css?family=Montserrat');

    #kiao:hover {background-color: transparent;}
    a {color: #000; font-family: font-family: 'Montserrat', sans-serif;}
    a:active {background-color: transparent;}

    body {font-family: 'Montserrat', sans-serif;}
    @media only screen and (max-width: 600px) {
        .fontz{ font-size: 14px !important;}
        .imagez{ height: 32px !important; width: 32px !important; position: relative; top: 5px; }
    }
    @media only screen and (max-width: 400px) {
        .fontzz{ font-size: 11px !important;}
        .imagezz{ height: 22px !important; width: 22px !important; position: relative; top: 5px; }
    }
    
</style>
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0; background-color:#001730; border-bottom-color: black; border: 0px; height: 127px; box-shadow: 2px 2px 2px #e1e1e1;">
    <div class="navbar-header">
        <button type="button" style="background-color: #fff !important;" class="navbar-toggle btn-danger btn" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="" style="color: #fff;">
            <img src="img/logo.png" height="97" width="525">
        </a> 
    </div><br><br><br><br>



    <div class="navbar-default sidebar" role="navigation" style="">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li class="sidebar-search">
                    <div class="">
                       <center>
                            <l style="letter-spacing:1px; font-size:13px;">
                                <?php 
                                      date_default_timezone_set("Asia/Manila");
                                      echo "Today is " . date("l") . "<br>"; echo date("h:i a");
                                      echo " (";echo  date("m-d-Y"); echo ")";         
                                 ?>    
                            </l>
                        </center>
                      
                    </div>

                </li>
                <li style="border: 0px;"><br>
                    <a href="Summary-of-Watershed-Characterization-VA-an-IWMP">
                        <img src="img/Double Left_96px.png" height="32" style="position: relative;">
                        <b> &nbsp; Return</b>
                    </a>
                     <a href="../logout/logout.php">
                        <img src="img/Shutdown_96px.png"  height="32" style="position: relative;">
                        <b> &nbsp; Logout </b>
                    </a>
          
             
                </li>
       
            </ul>
        </div>
    </div>
</nav>



<div id="page-wrapper">
    <div class="container-fluid">
        <br>
         
        
<?php
if(isset($_GET['id'])){
  $id = $_GET['id'];
  $edit = mysqli_query($conn, "SELECT * FROM Summary_of_Watershed_Characterization WHERE id = '$id'");
  $row = mysqli_fetch_array($edit);
}elseif(isset($_GET['del'])){
    $id = $_GET['del'];
    $sql = mysqli_query($conn, "DELETE FROM Summary_of_Watershed_Characterization WHERE id = '$id'");
    header("location:Summary-of-Watershed-Characterization-VA-an-IWMP");
} 
?>

<?php  
if (isset($_POST['x-changes'])){
$PENRO=$_POST['PENRO'];
$Total_Number_of_River_Basin_Watershed_Sub_Watershed=$_POST['Total_Number_of_River_Basin_Watershed_Sub_Watershed'];
$Status_Profiling_Characterization=$_POST['Status_Profiling_Characterization'];
$Status_Vulnerability_Assessment=$_POST['Status_Vulnerability_Assessment'];
$Status_IWMP_Prepared=$_POST['Status_IWMP_Prepared'];
$Baseline_Profiling_Characterization=$_POST['Baseline_Profiling_Characterization'];
$Baseline_Vulnerability_Assessment=$_POST['Baseline_Vulnerability_Assessment'];
$Baseline_IWMP=$_POST['Baseline_IWMP'];


mysqli_query($conn,"UPDATE Summary_of_Watershed_Characterization set PENRO='$PENRO',Total_Number_of_River_Basin_Watershed_Sub_Watershed='$Total_Number_of_River_Basin_Watershed_Sub_Watershed',Status_Profiling_Characterization='$Status_Profiling_Characterization',Status_Vulnerability_Assessment='$Status_Vulnerability_Assessment',Status_IWMP_Prepared='$Status_IWMP_Prepared',Baseline_Profiling_Characterization='$Baseline_Profiling_Characterization',Baseline_Vulnerability_Assessment='$Baseline_Vulnerability_Assessment',Baseline_IWMP='$Baseline_IWMP' where id='$id'");
echo "<script>alert('Success! Record Updated.'); window.location='Summary-of-Watershed-Characterization-VA-an-IWMP'</script>";

}
?>

 <div class="form-group">     
    <div class="panel panel-default">
            <div class="panel-heading" style="letter-spacing:2px; font-size:20px; font-weight: bold;"><img src="img/Info Squared_96px.png"  height="40px" width="40px">EDIT RECORD</div>
                  <div class="panel-body">
                       <form method="POST" class="form-horizontal" autocomplete="off">


                              <div class="form-group container-fluid">
                                      <label><small>PENRO</small></label>
                                          <select name="PENRO" class="form-control" required>
                                                    <option selected><?= $row['PENRO'] ?></option>
                                                    <option value="" disabled>---</option>
                                                    <option value="Bukidnon">Bukidnon</option>
                                                    <option value="Camiguin">Camiguin</option>
                                                    <option value="Lanao del Norte">Lanao del Norte</option>
                                                    <option value="Misamis Occidental">Misamis Occidental</option>
                                                    <option value="Misamis Oriental">Misamis Oriental</option>
                                          </select>
                              </div>


                               <div class="form-group container-fluid">
                                      <label><small>Total Number of River Basin/Watershed/Sub-Watershed</small></label>
                                      <input name="Total_Number_of_River_Basin_Watershed_Sub_Watershed" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control" required value="<?= $row['Total_Number_of_River_Basin_Watershed_Sub_Watershed']; ?>">
                              </div>

                               <div class="form-group container-fluid">
                                      <label><small>Status Profiling/Characterization</small></label>
                                      <input name="Status_Profiling_Characterization" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control" required value="<?= $row['Status_Profiling_Characterization']; ?>">
                              </div>


                               <div class="form-group container-fluid">
                                      <label><small>Status Vulnerability Assessment</small></label>
                                      <input name="Status_Vulnerability_Assessment" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control" required value="<?= $row['Status_Vulnerability_Assessment']; ?>">
                              </div>

                               <div class="form-group container-fluid">
                                      <label><small>Status IWMP Prepared</small></label>
                                       <input name="Status_IWMP_Prepared" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control" required value="<?= $row['Status_IWMP_Prepared']; ?>">
                              </div>

                               <div class="form-group container-fluid">
                                      <label><small>Status Profiling/Characterization</small></label>
                                      <input name="Baseline_Profiling_Characterization" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control" required value="<?= $row['Baseline_Profiling_Characterization']; ?>">
                              </div>


                              <div class="form-group container-fluid">
                                      <label><small>Status Vulnerability Assessment</small></label>
                                       <input name="Baseline_Vulnerability_Assessment" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control" required value="<?= $row['Baseline_Vulnerability_Assessment']; ?>">
                              </div>    

                              <div class="form-group container-fluid">
                                      <label><small>Status IWMP</small></label>
                                       <input name="Baseline_IWMP" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control" required value="<?= $row['Baseline_IWMP']; ?>">
                              </div> 
                                          
                                                  
                              <div class="form-group">        
                                    <div class="col-sm-offset-2 col-sm-10">
                                         <button type="submit" name="x-changes" class="btn btn-primary pull-right" style="font-weight: bold; letter-spacing: 1px;"><span class="fa fa-save"></span> Save changes</button>
                                          <a href="?del=<?php echo $_GET['id'] ?>" onclick="return confirm('Are you sure you want to remove this Record ?');" style="margin-right:4px; background-color:#FE4A49; color:white; " class="btn btn-default pull-right"><span class="fa fa-trash"></span> Remove</a>
                                    </div>
                              </div>
                         
  </form>

    </div>
  </div>


</div>






    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>


    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

   
        
        <!-- /#page-wrapper -->

   
<!--Table number 1--> 
<br> 
<!--Additional Function button/switch table-->
<script src="vendor/k-switch/myjavascript.js"></script>
<?php include'modal/modal-add.php';?>
<?php include'modal/view-total.php'; ?>
<!--/ end -->





    </div>
    <!-- /#wrapper -->
    </div>


</body>

</html>



