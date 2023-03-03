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
                    <a href="Land-Classification-and-Distribution">
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
  $edit = mysqli_query($conn, "SELECT * FROM Land_Classification_and_Distribution WHERE id = '$id'");
  $row = mysqli_fetch_array($edit);
}elseif(isset($_GET['del'])){
    $id = $_GET['del'];
    $sql = mysqli_query($conn, "DELETE FROM Land_Classification_and_Distribution WHERE id = '$id'");
    header("location:Land-Classification-and-Distribution");
}
?>

<?php  

if (isset($_POST['x-changes'])){
          $Province=$_POST['Province'];
          $Total_land_area=$_POST['Total_land_area'];
          $Certified_alienable_and_Disposable_land=$_POST['Certified_alienable_and_Disposable_land'];
          $Total_forestland=$_POST['Total_forestland'];
          $Unclassified_forestland=$_POST['Unclassified_forestland'];
          $total_classified_forestland=$_POST['total_classified_forestland'];
          $Established_forest_reserves=$_POST['Established_forest_reserves'];
          $Established_timberland=$_POST['Established_timberland'];
          $National_parks_and_grbs_wa=$_POST['National_parks_and_grbs_wa'];
          $Military_and_naval_reservations=$_POST['Military_and_naval_reservations'];
          $civil_reservations=$_POST['civil_reservations'];
          $fishpond=$_POST['fishpond'];

          mysqli_query($conn,"UPDATE Land_Classification_and_Distribution set Province='$Province',Total_land_area='$Total_land_area',Certified_alienable_and_Disposable_land='$Certified_alienable_and_Disposable_land',Total_forestland='$Total_forestland',Unclassified_forestland='$Unclassified_forestland',total_classified_forestland='$total_classified_forestland',Established_forest_reserves='$Established_forest_reserves',Established_timberland='$Established_timberland',National_parks_and_grbs_wa='$National_parks_and_grbs_wa',Military_and_naval_reservations='$Military_and_naval_reservations',civil_reservations='$civil_reservations',fishpond='$fishpond' where id='$id'");
          echo "<script>alert('Success! Record Updated.'); window.location='Land-Classification-and-Distribution'</script>";

}
?>

 <div class="form-group">     
    <div class="panel panel-default">
            <div class="panel-heading" style="letter-spacing:2px; font-size:20px; font-weight: bold;"><img src="img/Info Squared_96px.png"  height="40px" width="40px">EDIT RECORD</div>
                <div class="panel-body">
            <form method="POST" class="form-horizontal" autocomplete="off" style="margin-left: 20px; margin-right: -20px;">

                <div class="form-group col-xs-4">
                  <label style="letter-spacing:2px;"><small>Province</small></label>
                    <select required name="Province" class="form-control" style="letter-spacing:1px;">
                          <option selected><?= $row['Province'] ?></option>
                          <option value="Bukidnon">Bukidnon</option>
                          <option value="Camiguin">Camiguin</option>
                          <option value="Lanao del Norte">Lanao del Norte</option>
                          <option value="Misamis Occidental">Misamis Occidental</option>
                          <option value="Misamis Oriental">Misamis Oriental</option>

                    </select>
                </div>

                <div class="form-group col-xs-4" style="margin-left:5px;">
                  <label style="letter-spacing:2px;"><small>Total Land Area</small></label>
                  <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Total Land Area here.." name="Total_land_area" required value="<?= $row['Total_land_area']; ?>">
                </div>

                <div class="form-group col-xs-4" style="margin-left:5px;">
                  <label style="letter-spacing:1px;"><small>Certified Alienable and Disposable Land</small></label>
                  <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Certified Alienable and Disposable Land here.." name="Certified_alienable_and_Disposable_land" required value="<?= $row['Certified_alienable_and_Disposable_land']; ?>">
                </div>

                <div class="form-group col-xs-4">
                  <label style="letter-spacing:2px;"><small>Total Forestland</small></label>
                  <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Total Forestland here.." name="Total_forestland" required value="<?= $row['Total_forestland']; ?>">
                </div>

                <div class="form-group col-xs-4" style="margin-left:5px;">
                  <label style="letter-spacing:2px;"><small>Unclassified Forestland</small></label>
                  <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Unclassified Forestland here.." name="Unclassified_forestland" required value="<?= $row['Unclassified_forestland']; ?>">
                </div>


                <div class="form-group col-xs-4" style="margin-left:5px;">
                  <label style="letter-spacing:2px;"><small>Total Classified Forestland</small></label>
                  <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Total Classified Forestland here.." name="total_classified_forestland" required value="<?= $row['total_classified_forestland']; ?>">
                </div>



                <div class="form-group col-xs-4">
                  <label style="letter-spacing:2px;"><small>Established Forest Reserves</small></label>
                  <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Established Forest Reserves here.." name="Established_forest_reserves" required value="<?= $row['Established_forest_reserves']; ?>">
                </div>

                <div class="form-group col-xs-4" style="margin-left:5px;">
                  <label style="letter-spacing:2px;"><small>Established Timberland</small></label>
                  <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Established Timberland here.." name="Established_timberland" required value="<?= $row['Established_timberland']; ?>">
                </div>


                <div class="form-group col-xs-4" style="margin-left:5px;">
                  <label style="letter-spacing:2px;"><small>National Parks and GRBS/WA</small></label>
                  <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter National Parks and GRBS/WA here.." name="National_parks_and_grbs_wa" required value="<?= $row['National_parks_and_grbs_wa']; ?>">
                </div>

                <div class="form-group col-xs-4">
                  <label style="letter-spacing:2px;"><small>Military and Naval Reservations</small></label>
                  <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Military and Naval Reservations here.." name="Military_and_naval_reservations" required value="<?= $row['Military_and_naval_reservations']; ?>">
                </div>

                <div class="form-group col-xs-4" style="margin-left:5px;">
                  <label style="letter-spacing:2px;"><small>Civil Reservations</small></label>
                  <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Civil Reservations here.." name="civil_reservations" required value="<?= $row['civil_reservations']; ?>">
                </div>


                <div class="form-group col-xs-4" style="margin-left:5px;">
                  <label style="letter-spacing:2px;"><small>Fishpond</small></label>
                  <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Fishpond here.." name="fishpond" required value="<?= $row['fishpond']; ?>">
                </div>

                              <div class="form-group">        
                                    <div class="col-sm-offset-2 col-sm-10">
                                         <button type="submit" name="x-changes" class="btn btn-primary pull-right" style="font-weight: bold; letter-spacing:1px; margin-right:6%;"><span class="fa fa-save"></span> Save changes</button>
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



