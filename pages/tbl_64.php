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
<?php 
    include("navbar.php"); /* Navigation */
?>
<div id="page-wrapper">
    <div class="container-fluid">
        <br>
     

     <div class="row1">
                      <label class="col-sm-12" style="font-weight:bold; margin-left:-15px; letter-spacing:1px; font-family:Calibri;font-size: 18px; color:#FE4A49;"> SELECT A RECORDS</label>

               
                            <select class="form-control" onchange="myFunction()" id="mySelect" required style="border:1px solid gray; letter-spacing: 2px; font-size:17px;">
                           
                              <option selected value="1" class="title-op">Tenurial Instruments, Region 10</option>
                              <option value="" class="title-op" disabled>----</option>
                              <option value="1" class="title-op">Apprehended Conveyances, By Year, Region 10</option>
                              <option value="2" class="title-op">Apprehended Finished Products, By Year, Region 10</option>
                              <option value="3" class="title-op">Apprehended Forest Products, By Year, Region 10</option>
                              <option value="4" class="title-op">Apprehended Implements/Equipment, By Year, Region 10</option>
                              <option value="5" class="title-op">Apprehended Rattan Poles, By Year, Region 10</option>
                              <option value="6" class="title-op">Apprehended Wood Charcoal, By Year, Region 10</option>
                              <option value="7" class="title-op">Area Developed in hectares, Region 10</option>
                              <option value="8" class="title-op">Baseline for Certificate of Stewardship Contract (CSC), Region 10</option>
                              <option value="9" class="title-op">Cadastral Survey, Region 10</option>
                              <option value="10" class="title-op">Certificate of Stewardship Contract (CSC) Evaluated/Assessed outside CBFMA, Region 10</option>
                              <option value="11" class="title-op">Certificate of Stewardship Contract (CSC) Evaluated/Assessed within CBFMA, Region 10</option>
                              <option value="12" class="title-op">Certificate of Stewardship Contract (CSC) Issued, Region 10</option>
                              <option value="13" class="title-op">Classified Coastal Waters/Bay & Lakes, Region 10</option>
                              <option value="14" class="title-op">Classified Major Rivers, Region 10</option>
                              <option value="15" class="title-op">Classified Minor Rivers, Region 10</option>
                              <option value="16" class="title-op">Classified Principal Rivers, Region 10</option>
                              <option value="17" class="title-op">Community-Based Employment (CBEP): Extension Officers Hired, By Province, Region 10</option>
                              <option value="18" class="title-op">Community-Based Employment (CBEP): Jobs Generated , By Province, Region 10</option>
                              <option value="19" class="title-op">Community-Based Employment (CBEP): Persons Employed, By Province, Region 10</option>
                              <option value="20" class="title-op">Confiscated Conveyances, By Year, Region 10</option>
                              <option value="21" class="title-op">Confiscated Forest Products, By Year, Region 10</option>
                              <option value="22" class="title-op">Confiscated Implements/Equipment, By Year, Region 10</option>
                              <option value="23" class="title-op">Confiscated Rattan Poles, By Year, Region 10</option>
                              <option value="24" class="title-op">Critical Watersheds, Region 10</option>
                              <option value="25" class="title-op">Existing Community-Based Forest Management Agreement (CFBMA), Region 10</option>
                              <option value="26" class="title-op">Existing Forest Land Grazing Lease Agreement (FLGLA), Region 10</option>
                              <option value="27" class="title-op">Existing Forest Land Grazing Management Agreement (FLGMA), Region 10</option>
                              <option value="28" class="title-op">Existing Industrial Forest Management Area (IFMA), Region 10</option>
                              <option value="29" class="title-op">Existing Protected Area Community-Based Resource Management Agreement (PACBRMA), Region 10</option>
                              <option value="30" class="title-op">Existing Socialized Industrial Forest Management Area (SIFMA), Region 10</option>
                              <option value="31" class="title-op">Existing Special Land Use Plan (SLUP), Region 10</option>
                              <option value="32" class="title-op">Existing Tree Farm Lease Agreement (TFLA), Region 10</option>
                              <option value="33" class="title-op">Fireline Maintained, By Year, Region 10</option>
                              <option value="34" class="title-op">Forest Cover in hectares, Region 10</option>
                              <option value="35" class="title-op">Forest Land Use Plan Formulation and Adoption, Region 10</option>
                              <option value="36" class="title-op">Forest Protection Officers and Program Extension Officers, Region 10</option>
                              <option value="37" class="title-op">INREMP-Natural Resource Management Area Developed in hectares, By Year, Region 10</option>
                              <option value="38" class="title-op">Integrated Watershed Management Plan Prepared, Region 10</option>
                              <option value="39" class="title-op">Inventory of CWR Monitored, By Year, Region 10</option>
                              <option value="40" class="title-op">Key Biodiversity Areas, Region 10</option>
                              <option value="41" class="title-op">Land Classification and Distribution in hectares, Region 10</option>
                              <option value="42" class="title-op">Land Disposition Issued (Residential & Agricultural), By Province, Region 10</option>
                              <option value="44" class="title-op">List of Checkpoint in Region 10</option>
                              <option value="45" class="title-op">Major River Basins, Region 10</option>
                              <option value="46" class="title-op">Management of Foreshore Areas-Processed and Endorsed, Region 10</option>
                              <option value="47" class="title-op">NGP: Area Planted in hectares, By Year, Region 10</option>
                              <option value="48" class="title-op">NGP: Number of Polygons, Sites & Beneficiaries, Region 10</option>
                              <option value="49" class="title-op">NGP: Seedling Planted, By Year, Region 10</option>
                              <option value="50" class="title-op">NGP: Seedling Production, By Year, Region 10</option>
                              <option value="51" class="title-op">NGP: Seedlings Planted, By Commodity, Region 10</option>
                              <option value="52" class="title-op">NGP: Survival Rate in Percentage, By Province, Region 10</option>
                              <option value="53" class="title-op">NGP: Validated Project Sites, By Year, Region 10</option>
                              <option value="54" class="title-op">NIPAS and Locally-managed Marine Protected Areas, Region 10</option>
                              <option value="55" class="title-op">Number of Forest Rangers, Region 10</option>
                              <option value="56" class="title-op">Number of Incidents on Apprehended/Seized Forest Products, Conveyances, Machineries and Implements, By Year, Region 10</option>
                              <option value="57" class="title-op">Number of Waterbodies, Region 10</option>
                              <option value="58" class="title-op">Proclaimed Protected Areas under E-NIPAS, Region 10</option>
                              <option value="59" class="title-op">Proclaimed Protected Areas under NIPAS, Region 10</option>
                              <option value="60" class="title-op">Status of Community Resource Management Framework, Region 10</option>
                              <option value="61" class="title-op">Summary of CWR Monitored, By Year, Region 10</option>
                              <option value="62" class="title-op">Summary of Forest Land Use Plan Formulation and Adoption, Region 10</option>
                              <option value="63" class="title-op">Summary of Watershed Characterization, VA and IWMP, Region 10</option>
                              <option value="64" class="title-op">Tenurial Instruments, Region 10</option>
                              <option value="65" class="title-op">Watershed Characterization/Profiling, Region 10</option>
                              <option value="67" class="title-op">Watershed Forest Reserve (Proclaimed Watershed) in hectares, Region 10</option>
                              <option value="68" class="title-op">Watershed Supporting River Irrigation System of NIA, Region 10</option>
                              <option value="69" class="title-op">Watershed Vulnerability Assessment, Region 10</option>
                            </select>


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


     
      <button class="btn btn-default btn btn-md" data-toggle="modal" data-target="#tbl64-add" style="height:40px; background:#001730; color:white; opacity:0.8;"><span class="fa fa-plus"></span> Add</button>

      <button class="btn btn-default btn btn-md"  data-toggle="modal" data-target="#tbl64-total"  style="background:#FE4A49; color:white; height:40px;"><span class="fa fa-calculator"></span> Total</button>


      <a href="report/tbl64.php">
      <button class="btn btn-default btn btn-md" style="background:#4AD7D1; color:white; height:40px;"><span class="fa fa-file-excel-o"></span> Export</button>
      </a>
 
 <br>     
<br>
<b style="letter-spacing:1px; font-size:20px; font-family:'Calibri'">Title Selected : <l style="text-decoration:underline; color:#20B2AA;">Tenurial Instruments, Region 10</l> </b>
<br>

                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example" style="margin-top:-40px;">
                    <thead>
                   
                    <br>
                        <tr>
                            <th style="width:90px; background-color:#FE4A49; color:white;"> Options </th>
                            <th style="background-color:#FE4A49; color:white;"> Tenurial Instruments</th>
                            <th style="background-color:#FE4A49; color:white;"> No. of Holders</th>
                            <th style="background-color:#FE4A49; color:white;"> Area (ha)</th>
           
                        
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        include('connect.php');
                        $result = $db->prepare("SELECT * FROM Tenurial_Instruments");
                        $result->execute();
                        for($i=0; $row = $result->fetch(); $i++){
                            ?>

                        <tr onclick="window.location='Tenurial-Instruments-edit?id=<?= $row['id'] ?>';" class="record">
                                <td><img src="img/Settings_96px.png" height="32" style="margin-left:20px;"></td>
                                <td><?php echo $row['Tenurial_Instruments']; ?></td>
                                <td><?php echo $row['No_of_Holders']; ?></td>
                                <td><?php echo $row['Area_ha']; ?></td>
                             
                            </tr>   
                            <?php } ?>
                    </tbody>
                </table>
<hr>




<script src="vendor-table/datatables/js/jquery.dataTables.min.js"></script>
<script src="vendor-table/datatables-plugins/dataTables.bootstrap.min.js"></script>


<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
</script>







      </div>
    <!-- /#wrapper -->
    </div>


</body>

</html>



