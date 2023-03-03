
<style type="text/css">
  label{
    letter-spacing:1px;
    font-size:15px;
  }
  p{
    color:#FE4A49;
    font-weight: bold;
    font-size:18px;
  }
 
</style>
<div class="modal fade"  id="tbl7-total" role="dialog">
    <div class="modal-dialog modal-lg">    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><span class="fa fa-calculator"></span> Total records</h4>
        </div>
        <div class="modal-body">

            <table class="table">
              <thead>
                <tr>
                  <th>Province</th>
                  <th>Universe</th>
                  <th>Baseline </th>
                  <th>NGP Accomplishment</th>
                  <th>Inremp</th>
                  <th>CBFM-CARP</th>
                  <th>Tenurial Instrument</th>
                  <th>Total</th>
                </tr>
              </thead>
              <tbody>
                <tr class="active">
                  <td>Regional Total </td>
                  <?php
                      $result = mysqli_query($conn,"SELECT sum(Universe) FROM area_developed") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(Universe)']); ?></td><?php } ?>

                  <?php
                      $result = mysqli_query($conn,"SELECT sum(Baseline) FROM area_developed") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(Baseline)']); ?></td><?php } ?>


                  <?php
                      $result = mysqli_query($conn,"SELECT sum(NGP_Accomplishment) FROM area_developed") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(NGP_Accomplishment)']); ?></td><?php } ?>

                  <?php
                      $result = mysqli_query($conn,"SELECT sum(Inremp) FROM area_developed") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(Inremp)']); ?></td><?php } ?>
             
                  <?php
                      $result = mysqli_query($conn,"SELECT sum(CBFM_CARP) FROM area_developed") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(CBFM_CARP)']); ?></td><?php } ?>
             
                  <?php
                      $result = mysqli_query($conn,"SELECT sum(Tenurial_Instrument) FROM area_developed") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(Tenurial_Instrument)']); ?></td><?php } ?>
   
                     <?php
                      $result = mysqli_query($conn,"SELECT sum(Total) FROM area_developed") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(Total)']); ?></td><?php } ?>
   

                </tr>
                <tr>
                  <td>Bukidnon</td>
                  <?php
                      $result = mysqli_query($conn,"SELECT sum(Universe) FROM area_developed where Province='Bukidnon'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(Universe)']); ?></td><?php } ?>

                  <?php
                      $result = mysqli_query($conn,"SELECT sum(Baseline) FROM area_developed where Province='Bukidnon'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(Baseline)']); ?></td><?php } ?>


                  <?php
                      $result = mysqli_query($conn,"SELECT sum(NGP_Accomplishment) FROM area_developed where Province='Bukidnon'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(NGP_Accomplishment)']); ?></td><?php } ?>

                  <?php
                      $result = mysqli_query($conn,"SELECT sum(Inremp) FROM area_developed where Province='Bukidnon'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(Inremp)']); ?></td><?php } ?>
             
                  <?php
                      $result = mysqli_query($conn,"SELECT sum(CBFM_CARP) FROM area_developed where Province='Bukidnon'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(CBFM_CARP)']); ?></td><?php } ?>
             
                  <?php
                      $result = mysqli_query($conn,"SELECT sum(Tenurial_Instrument) FROM area_developed where Province='Bukidnon'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(Tenurial_Instrument)']); ?></td><?php } ?>
   
                     <?php
                      $result = mysqli_query($conn,"SELECT sum(Total) FROM area_developed where Province='Bukidnon'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(Total)']); ?></td><?php } ?>
   
                </tr>

                <tr>
                  <td>Camiguin</td>
                  <?php
                      $result = mysqli_query($conn,"SELECT sum(Universe) FROM area_developed where Province='Camiguin'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(Universe)']); ?></td><?php } ?>

                  <?php
                      $result = mysqli_query($conn,"SELECT sum(Baseline) FROM area_developed where Province='Camiguin'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(Baseline)']); ?></td><?php } ?>


                  <?php
                      $result = mysqli_query($conn,"SELECT sum(NGP_Accomplishment) FROM area_developed where Province='Camiguin'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(NGP_Accomplishment)']); ?></td><?php } ?>

                  <?php
                      $result = mysqli_query($conn,"SELECT sum(Inremp) FROM area_developed where Province='Camiguin'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(Inremp)']); ?></td><?php } ?>
             
                  <?php
                      $result = mysqli_query($conn,"SELECT sum(CBFM_CARP) FROM area_developed where Province='Camiguin'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(CBFM_CARP)']); ?></td><?php } ?>
             
                  <?php
                      $result = mysqli_query($conn,"SELECT sum(Tenurial_Instrument) FROM area_developed where Province='Camiguin'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(Tenurial_Instrument)']); ?></td><?php } ?>
   
                     <?php
                      $result = mysqli_query($conn,"SELECT sum(Total) FROM area_developed where Province='Camiguin'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(Total)']); ?></td><?php } ?>
                </tr>

                <tr>
                  <td>Lanao del Norte </td>
                  <?php
                      $result = mysqli_query($conn,"SELECT sum(Universe) FROM area_developed where Province='Lanao del Norte'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(Universe)']); ?></td><?php } ?>

                  <?php
                      $result = mysqli_query($conn,"SELECT sum(Baseline) FROM area_developed where Province='Lanao del Norte'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(Baseline)']); ?></td><?php } ?>


                  <?php
                      $result = mysqli_query($conn,"SELECT sum(NGP_Accomplishment) FROM area_developed where Province='Lanao del Norte'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(NGP_Accomplishment)']); ?></td><?php } ?>

                  <?php
                      $result = mysqli_query($conn,"SELECT sum(Inremp) FROM area_developed where Province='Lanao del Norte'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(Inremp)']); ?></td><?php } ?>
             
                  <?php
                      $result = mysqli_query($conn,"SELECT sum(CBFM_CARP) FROM area_developed where Province='Lanao del Norte'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(CBFM_CARP)']); ?></td><?php } ?>
             
                  <?php
                      $result = mysqli_query($conn,"SELECT sum(Tenurial_Instrument) FROM area_developed where Province='Lanao del Norte'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(Tenurial_Instrument)']); ?></td><?php } ?>
   
                     <?php
                      $result = mysqli_query($conn,"SELECT sum(Total) FROM area_developed where Province='Lanao del Norte'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(Total)']); ?></td><?php } ?>
                </tr>

                <tr>
                  <td>Misamis Occidental</td>
                  <?php
                      $result = mysqli_query($conn,"SELECT sum(Universe) FROM area_developed where Province='Misamis Occidental'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(Universe)']); ?></td><?php } ?>

                  <?php
                      $result = mysqli_query($conn,"SELECT sum(Baseline) FROM area_developed where Province='Misamis Occidental'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(Baseline)']); ?></td><?php } ?>


                  <?php
                      $result = mysqli_query($conn,"SELECT sum(NGP_Accomplishment) FROM area_developed where Province='Misamis Occidental'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(NGP_Accomplishment)']); ?></td><?php } ?>

                  <?php
                      $result = mysqli_query($conn,"SELECT sum(Inremp) FROM area_developed where Province='Misamis Occidental'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(Inremp)']); ?></td><?php } ?>
             
                  <?php
                      $result = mysqli_query($conn,"SELECT sum(CBFM_CARP) FROM area_developed where Province='Misamis Occidental'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(CBFM_CARP)']); ?></td><?php } ?>
             
                  <?php
                      $result = mysqli_query($conn,"SELECT sum(Tenurial_Instrument) FROM area_developed where Province='Misamis Occidental'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(Tenurial_Instrument)']); ?></td><?php } ?>
   
                     <?php
                      $result = mysqli_query($conn,"SELECT sum(Total) FROM area_developed where Province='Misamis Occidental'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(Total)']); ?></td><?php } ?>
                </tr>

                <tr>
                  <td>Misamis Oriental</td>
                  <?php
                      $result = mysqli_query($conn,"SELECT sum(Universe) FROM area_developed where Province='Misamis Oriental'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(Universe)']); ?></td><?php } ?>

                  <?php
                      $result = mysqli_query($conn,"SELECT sum(Baseline) FROM area_developed where Province='Misamis Oriental'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(Baseline)']); ?></td><?php } ?>


                  <?php
                      $result = mysqli_query($conn,"SELECT sum(NGP_Accomplishment) FROM area_developed where Province='Misamis Oriental'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(NGP_Accomplishment)']); ?></td><?php } ?>

                  <?php
                      $result = mysqli_query($conn,"SELECT sum(Inremp) FROM area_developed where Province='Misamis Oriental'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(Inremp)']); ?></td><?php } ?>
             
                  <?php
                      $result = mysqli_query($conn,"SELECT sum(CBFM_CARP) FROM area_developed where Province='Misamis Oriental'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(CBFM_CARP)']); ?></td><?php } ?>
             
                  <?php
                      $result = mysqli_query($conn,"SELECT sum(Tenurial_Instrument) FROM area_developed where Province='Misamis Oriental'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(Tenurial_Instrument)']); ?></td><?php } ?>
   
                     <?php
                      $result = mysqli_query($conn,"SELECT sum(Total) FROM area_developed where Province='Misamis Oriental'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(Total)']); ?></td><?php } ?>
                </tr>


              </tbody>
            </table>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:#FE4A49; color: white;">Close</button>
        </div>
      </div>
      
    </div>
  </div>






    <div class="modal fade"  id="tbl33-total" role="dialog">
    <div class="modal-dialog modal-lg">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><span class="fa fa-calculator"></span> Total records</h4>
        </div>
        <div class="modal-body">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th><small>Province</small></th>
                        <th><center>Area (ha)</center></th>
                        <th><center>Length (m) </center></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><b>Regional Total</b></td>
                        <?php
                          $result = mysqli_query($conn,"SELECT sum(Area_ha) FROM fireline_maintained") or die(mysql_error());
                            while($rows = mysqli_fetch_array($result)){?> 
                        <td style="font-weight: bold; color:#FE4A49;"><center><?php echo number_format($rows['sum(Area_ha)']); ?></center></td><?php }?>
                        <?php
                          $result = mysqli_query($conn,"SELECT sum(Length_m) FROM fireline_maintained") or die(mysql_error());
                            while($rows = mysqli_fetch_array($result)){?> 
                        <td style="font-weight: bold; color:#FE4A49;"><center><?php echo number_format($rows['sum(Length_m)']); ?></center></td><?php }?>               
                  
   
                      </tr>

                      <tr>
                        <td>Bukidnon</td>
                        <?php
                          $result = mysqli_query($conn,"SELECT sum(Area_ha) FROM fireline_maintained where Penro_Cenro='Valencia City' OR Penro_Cenro='Manolo Fortich' OR Penro_Cenro='Don Carlos' OR Penro_Cenro='Talakag' OR Penro_Cenro='Sub-Office Pangantucan' OR Penro_Cenro='Mt. Kitanglad RNP' OR Penro_Cenro='Mt. Kalatungan RNP' OR Penro_Cenro='Mt. Pantaron' OR Penro_Cenro='Mt. Tago RNP' OR Penro_Cenro='BFI' OR Penro_Cenro='Hineleban Foundation'") or die(mysql_error());
                            while($rows = mysqli_fetch_array($result)){?> 
                        <td style="font-weight: bold; color:#FE4A49;"><center><?php echo number_format($rows['sum(Area_ha)']); ?></center></td><?php }?>
                        <?php
                          $result = mysqli_query($conn,"SELECT sum(Length_m) FROM fireline_maintained where Penro_Cenro='Valencia City' OR Penro_Cenro='Manolo Fortich' OR Penro_Cenro='Don Carlos' OR Penro_Cenro='Talakag' OR Penro_Cenro='Sub-Office Pangantucan' OR Penro_Cenro='Mt. Kitanglad RNP' OR Penro_Cenro='Mt. Kalatungan RNP' OR Penro_Cenro='Mt. Pantaron' OR Penro_Cenro='Mt. Tago RNP' OR Penro_Cenro='BFI' OR Penro_Cenro='Hineleban Foundation'") or die(mysql_error());
                            while($rows = mysqli_fetch_array($result)){?> 
                        <td style="font-weight: bold; color:#FE4A49;"><center><?php echo number_format($rows['sum(Length_m)']); ?></center></td><?php }?>               
                       
                      </tr>


                      <tr>
                        <td>Camiguin</td>
                        <?php
                          $result = mysqli_query($conn,"SELECT sum(Area_ha) FROM fireline_maintained where Penro_Cenro='Non-PA' OR Penro_Cenro='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
                            while($rows = mysqli_fetch_array($result)){?> 
                        <td style="font-weight: bold; color:#FE4A49;"><center><?php echo number_format($rows['sum(Area_ha)']); ?></center></td><?php }?>
                        <?php
                          $result = mysqli_query($conn,"SELECT sum(Length_m) FROM fireline_maintained where Penro_Cenro='Non-PA' OR Penro_Cenro='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
                            while($rows = mysqli_fetch_array($result)){?> 
                        <td style="font-weight: bold; color:#FE4A49;"><center><?php echo number_format($rows['sum(Length_m)']); ?></center></td><?php }?>               
     
                      </tr>


                      <tr>
                        <td>Lanao del Norte</td>
                        <?php
                          $result = mysqli_query($conn,"SELECT sum(Area_ha) FROM fireline_maintained where Penro_Cenro='Iligan City' OR Penro_Cenro='CENRO Kolambugan' OR Penro_Cenro='Siad Hindang' OR Penro_Cenro='Siad Nunungan' OR Penro_Cenro='Mt. Inayawan RNP' OR Penro_Cenro='Bacolod Kauswagan PLS' OR Penro_Cenro='Lake Lanao WPDP'") or die(mysql_error());
                            while($rows = mysqli_fetch_array($result)){?> 
                        <td style="font-weight: bold; color:#FE4A49;"><center><?php echo number_format($rows['sum(Area_ha)']); ?></center></td><?php }?>
                        <?php
                          $result = mysqli_query($conn,"SELECT sum(Length_m) FROM fireline_maintained where Penro_Cenro='Iligan City' OR Penro_Cenro='CENRO Kolambugan' OR Penro_Cenro='Siad Hindang' OR Penro_Cenro='Siad Nunungan' OR Penro_Cenro='Mt. Inayawan RNP' OR Penro_Cenro='Bacolod Kauswagan PLS' OR Penro_Cenro='Lake Lanao WPDP'") or die(mysql_error());
                            while($rows = mysqli_fetch_array($result)){?> 
                        <td style="font-weight: bold; color:#FE4A49;"><center><?php echo number_format($rows['sum(Length_m)']); ?></center></td><?php }?>               
                      
                      </tr>
          
                      <tr>
                        <td>Misamis Occidental</td>
                        <?php
                          $result = mysqli_query($conn,"SELECT sum(Area_ha) FROM fireline_maintained where Penro_Cenro='CENRO Ozamiz City' OR Penro_Cenro='CENRO Oroquieta City' OR Penro_Cenro='Mt. Malindang RNP' OR Penro_Cenro='Mt. Baliangao PLS'") or die(mysql_error());
                            while($rows = mysqli_fetch_array($result)){?> 
                        <td style="font-weight: bold; color:#FE4A49;"><center><?php echo number_format($rows['sum(Area_ha)']); ?></center></td><?php }?>
                        <?php
                          $result = mysqli_query($conn,"SELECT sum(Length_m) FROM fireline_maintained where Penro_Cenro='CENRO Ozamiz City' OR Penro_Cenro='CENRO Oroquieta City' OR Penro_Cenro='Mt. Malindang RNP' OR Penro_Cenro='Mt. Baliangao PLS'") or die(mysql_error());
                            while($rows = mysqli_fetch_array($result)){?> 
                        <td style="font-weight: bold; color:#FE4A49;"><center><?php echo number_format($rows['sum(Length_m)']); ?></center></td><?php }?>               
                        
                      </tr>

                      <tr>
                        <td>Misamis Oriental</td>
                        <?php
                          $result = mysqli_query($conn,"SELECT sum(Area_ha) FROM fireline_maintained where Penro_Cenro='CENRO Initao' OR Penro_Cenro='CENRO Gingoog City' OR Penro_Cenro='Mt. Balatukan' OR Penro_Cenro='Mimbilisan' OR Penro_Cenro='Initao Libertad'") or die(mysql_error());
                            while($rows = mysqli_fetch_array($result)){?> 
                        <td style="font-weight: bold; color:#FE4A49;"><center><?php echo number_format($rows['sum(Area_ha)']); ?></center></td><?php }?>
                        <?php
                          $result = mysqli_query($conn,"SELECT sum(Length_m) FROM fireline_maintained where Penro_Cenro='CENRO Initao' OR Penro_Cenro='CENRO Gingoog City' OR Penro_Cenro='Mt. Balatukan' OR Penro_Cenro='Mimbilisan' OR Penro_Cenro='Initao Libertad'") or die(mysql_error());
                            while($rows = mysqli_fetch_array($result)){?> 
                        <td style="font-weight: bold; color:#FE4A49;"><center><?php echo number_format($rows['sum(Length_m)']); ?></center></td><?php }?>               
                      
                      </tr>

                    </tbody>
                  </table>
        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:#FE4A49; color: white;">Close</button>
        </div>
      </div>
      
    </div>
  </div>






    <div class="modal fade"  id="tbl8-total" role="dialog">
    <div class="modal-dialog modal-lg" style="width: 1100px;">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><span class="fa fa-calculator"></span> Total records</h4>
        </div>
        <div class="modal-body">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th><small>Province</small></th>
                        <th><small>Within CBFM Area (No.)</small></th>
                        <th><small>Within CBFM Area (Area ha)</small></th>
                        <th><small>DENR Jurisdiction (No.)</small></th>
                        <th><small>DENR Jurisdiction Area (ha)</small></th>
                        <th><small>Devolved to LGUs (No.)</small></th>
                        <th><small>Devolved to LGUs Area (ha)</small></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><b>Regional Total</b></td>
                        <?php
                          $result = mysqli_query($conn,"SELECT sum(Within_CBFM_Area_No) FROM baseline_for_csc") or die(mysql_error());
                            while($rows = mysqli_fetch_array($result)){?> 
                        <td style="font-weight: bold; color:#FE4A49;"><center><?php echo number_format($rows['sum(Within_CBFM_Area_No)']); ?></center></td><?php }?>
                        <?php
                          $result = mysqli_query($conn,"SELECT sum(Within_CBFM_Area_ha) FROM baseline_for_csc") or die(mysql_error());
                            while($rows = mysqli_fetch_array($result)){?> 
                        <td style="font-weight: bold; color:#FE4A49;"><center><?php echo number_format($rows['sum(Within_CBFM_Area_ha)']); ?></center></td><?php }?>               
                        <?php
                          $result = mysqli_query($conn,"SELECT sum(DENR_Jurisdiction_Area_No) FROM baseline_for_csc") or die(mysql_error());
                            while($rows = mysqli_fetch_array($result)){?> 
                        <td style="font-weight: bold; color:#FE4A49;"><center><?php echo number_format($rows['sum(DENR_Jurisdiction_Area_No)']); ?></center></td><?php }?>  
                        <?php
                          $result = mysqli_query($conn,"SELECT sum(DENR_Jurisdiction_ha) FROM baseline_for_csc") or die(mysql_error());
                            while($rows = mysqli_fetch_array($result)){?> 
                        <td style="font-weight: bold; color:#FE4A49;"><center><?php echo number_format($rows['sum(DENR_Jurisdiction_ha)']); ?></center></td><?php }?> 

                        <?php
                          $result = mysqli_query($conn,"SELECT sum(Devolved_to_LGUs_No) FROM baseline_for_csc") or die(mysql_error());
                            while($rows = mysqli_fetch_array($result)){?> 
                        <td style="font-weight: bold; color:#FE4A49;"><center><?php echo number_format($rows['sum(Devolved_to_LGUs_No)']); ?></center></td><?php }?> 

                        <?php
                          $result = mysqli_query($conn,"SELECT sum(Devolved_to_LGUs_ha) FROM baseline_for_csc") or die(mysql_error());
                            while($rows = mysqli_fetch_array($result)){?> 
                        <td style="font-weight: bold; color:#FE4A49;"><center><?php echo number_format($rows['sum(Devolved_to_LGUs_ha)']); ?></center></td><?php }?>
                      </tr>

                      <tr>
                        <td>Bukidnon</td>
                        <?php
                          $result = mysqli_query($conn,"SELECT sum(Within_CBFM_Area_No) FROM baseline_for_csc where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
                            while($rows = mysqli_fetch_array($result)){?> 
                        <td style="font-weight: bold; color:#FE4A49;"><center><?php echo number_format($rows['sum(Within_CBFM_Area_No)']); ?></center></td><?php }?>
                        <?php
                          $result = mysqli_query($conn,"SELECT sum(Within_CBFM_Area_ha) FROM baseline_for_csc where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
                            while($rows = mysqli_fetch_array($result)){?> 
                        <td style="font-weight: bold; color:#FE4A49;"><center><?php echo number_format($rows['sum(Within_CBFM_Area_ha)']); ?></center></td><?php }?>               
                        <?php
                          $result = mysqli_query($conn,"SELECT sum(DENR_Jurisdiction_Area_No) FROM baseline_for_csc where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
                            while($rows = mysqli_fetch_array($result)){?> 
                        <td style="font-weight: bold; color:#FE4A49;"><center><?php echo number_format($rows['sum(DENR_Jurisdiction_Area_No)']); ?></center></td><?php }?>  
                        <?php
                          $result = mysqli_query($conn,"SELECT sum(DENR_Jurisdiction_ha) FROM baseline_for_csc where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
                            while($rows = mysqli_fetch_array($result)){?> 
                        <td style="font-weight: bold; color:#FE4A49;"><center><?php echo number_format($rows['sum(DENR_Jurisdiction_ha)']); ?></center></td><?php }?> 

                        <?php
                          $result = mysqli_query($conn,"SELECT sum(Devolved_to_LGUs_No) FROM baseline_for_csc where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
                            while($rows = mysqli_fetch_array($result)){?> 
                        <td style="font-weight: bold; color:#FE4A49;"><center><?php echo number_format($rows['sum(Devolved_to_LGUs_No)']); ?></center></td><?php }?> 

                        <?php
                          $result = mysqli_query($conn,"SELECT sum(Devolved_to_LGUs_ha) FROM baseline_for_csc where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
                            while($rows = mysqli_fetch_array($result)){?> 
                        <td style="font-weight: bold; color:#FE4A49;"><center><?php echo number_format($rows['sum(Devolved_to_LGUs_ha)']); ?></center></td><?php }?>
                      </tr>


                      <tr>
                        <td>Camiguin</td>
                        <?php
                          $result = mysqli_query($conn,"SELECT sum(Within_CBFM_Area_No) FROM baseline_for_csc where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
                            while($rows = mysqli_fetch_array($result)){?> 
                        <td style="font-weight: bold; color:#FE4A49;"><center><?php echo number_format($rows['sum(Within_CBFM_Area_No)']); ?></center></td><?php }?>
                        <?php
                          $result = mysqli_query($conn,"SELECT sum(Within_CBFM_Area_ha) FROM baseline_for_csc where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
                            while($rows = mysqli_fetch_array($result)){?> 
                        <td style="font-weight: bold; color:#FE4A49;"><center><?php echo number_format($rows['sum(Within_CBFM_Area_ha)']); ?></center></td><?php }?>               
                        <?php
                          $result = mysqli_query($conn,"SELECT sum(DENR_Jurisdiction_Area_No) FROM baseline_for_csc where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
                            while($rows = mysqli_fetch_array($result)){?> 
                        <td style="font-weight: bold; color:#FE4A49;"><center><?php echo number_format($rows['sum(DENR_Jurisdiction_Area_No)']); ?></center></td><?php }?>  
                        <?php
                          $result = mysqli_query($conn,"SELECT sum(DENR_Jurisdiction_ha) FROM baseline_for_csc where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
                            while($rows = mysqli_fetch_array($result)){?> 
                        <td style="font-weight: bold; color:#FE4A49;"><center><?php echo number_format($rows['sum(DENR_Jurisdiction_ha)']); ?></center></td><?php }?> 

                        <?php
                          $result = mysqli_query($conn,"SELECT sum(Devolved_to_LGUs_No) FROM baseline_for_csc where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
                            while($rows = mysqli_fetch_array($result)){?> 
                        <td style="font-weight: bold; color:#FE4A49;"><center><?php echo number_format($rows['sum(Devolved_to_LGUs_No)']); ?></center></td><?php }?> 

                        <?php
                          $result = mysqli_query($conn,"SELECT sum(Devolved_to_LGUs_ha) FROM baseline_for_csc where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
                            while($rows = mysqli_fetch_array($result)){?> 
                        <td style="font-weight: bold; color:#FE4A49;"><center><?php echo number_format($rows['sum(Devolved_to_LGUs_ha)']); ?></center></td><?php }?>
                      </tr>


                      <tr>
                        <td>Lanao del Norte</td>
                        <?php
                          $result = mysqli_query($conn,"SELECT sum(Within_CBFM_Area_No) FROM baseline_for_csc where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
                            while($rows = mysqli_fetch_array($result)){?> 
                        <td style="font-weight: bold; color:#FE4A49;"><center><?php echo number_format($rows['sum(Within_CBFM_Area_No)']); ?></center></td><?php }?>
                        <?php
                          $result = mysqli_query($conn,"SELECT sum(Within_CBFM_Area_ha) FROM baseline_for_csc where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
                            while($rows = mysqli_fetch_array($result)){?> 
                        <td style="font-weight: bold; color:#FE4A49;"><center><?php echo number_format($rows['sum(Within_CBFM_Area_ha)']); ?></center></td><?php }?>               
                        <?php
                          $result = mysqli_query($conn,"SELECT sum(DENR_Jurisdiction_Area_No) FROM baseline_for_csc where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
                            while($rows = mysqli_fetch_array($result)){?> 
                        <td style="font-weight: bold; color:#FE4A49;"><center><?php echo number_format($rows['sum(DENR_Jurisdiction_Area_No)']); ?></center></td><?php }?>  
                        <?php
                          $result = mysqli_query($conn,"SELECT sum(DENR_Jurisdiction_ha) FROM baseline_for_csc where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
                            while($rows = mysqli_fetch_array($result)){?> 
                        <td style="font-weight: bold; color:#FE4A49;"><center><?php echo number_format($rows['sum(DENR_Jurisdiction_ha)']); ?></center></td><?php }?> 

                        <?php
                          $result = mysqli_query($conn,"SELECT sum(Devolved_to_LGUs_No) FROM baseline_for_csc where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
                            while($rows = mysqli_fetch_array($result)){?> 
                        <td style="font-weight: bold; color:#FE4A49;"><center><?php echo number_format($rows['sum(Devolved_to_LGUs_No)']); ?></center></td><?php }?> 

                        <?php
                          $result = mysqli_query($conn,"SELECT sum(Devolved_to_LGUs_ha) FROM baseline_for_csc where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
                            while($rows = mysqli_fetch_array($result)){?> 
                        <td style="font-weight: bold; color:#FE4A49;"><center><?php echo number_format($rows['sum(Devolved_to_LGUs_ha)']); ?></center></td><?php }?>
                      </tr>
          
                      <tr>
                        <td>Misamis Occidental</td>
                        <?php
                          $result = mysqli_query($conn,"SELECT sum(Within_CBFM_Area_No) FROM baseline_for_csc where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
                            while($rows = mysqli_fetch_array($result)){?> 
                        <td style="font-weight: bold; color:#FE4A49;"><center><?php echo number_format($rows['sum(Within_CBFM_Area_No)']); ?></center></td><?php }?>
                        <?php
                          $result = mysqli_query($conn,"SELECT sum(Within_CBFM_Area_ha) FROM baseline_for_csc where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
                            while($rows = mysqli_fetch_array($result)){?> 
                        <td style="font-weight: bold; color:#FE4A49;"><center><?php echo number_format($rows['sum(Within_CBFM_Area_ha)']); ?></center></td><?php }?>               
                        <?php
                          $result = mysqli_query($conn,"SELECT sum(DENR_Jurisdiction_Area_No) FROM baseline_for_csc where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
                            while($rows = mysqli_fetch_array($result)){?> 
                        <td style="font-weight: bold; color:#FE4A49;"><center><?php echo number_format($rows['sum(DENR_Jurisdiction_Area_No)']); ?></center></td><?php }?>  
                        <?php
                          $result = mysqli_query($conn,"SELECT sum(DENR_Jurisdiction_ha) FROM baseline_for_csc where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
                            while($rows = mysqli_fetch_array($result)){?> 
                        <td style="font-weight: bold; color:#FE4A49;"><center><?php echo number_format($rows['sum(DENR_Jurisdiction_ha)']); ?></center></td><?php }?> 

                        <?php
                          $result = mysqli_query($conn,"SELECT sum(Devolved_to_LGUs_No) FROM baseline_for_csc where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
                            while($rows = mysqli_fetch_array($result)){?> 
                        <td style="font-weight: bold; color:#FE4A49;"><center><?php echo number_format($rows['sum(Devolved_to_LGUs_No)']); ?></center></td><?php }?> 

                        <?php
                          $result = mysqli_query($conn,"SELECT sum(Devolved_to_LGUs_ha) FROM baseline_for_csc where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
                            while($rows = mysqli_fetch_array($result)){?> 
                        <td style="font-weight: bold; color:#FE4A49;"><center><?php echo number_format($rows['sum(Devolved_to_LGUs_ha)']); ?></center></td><?php }?>
                      </tr>

                      <tr>
                        <td>Misamis Oriental</td>
                        <?php
                          $result = mysqli_query($conn,"SELECT sum(Within_CBFM_Area_No) FROM baseline_for_csc where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
                            while($rows = mysqli_fetch_array($result)){?> 
                        <td style="font-weight: bold; color:#FE4A49;"><center><?php echo number_format($rows['sum(Within_CBFM_Area_No)']); ?></center></td><?php }?>
                        <?php
                          $result = mysqli_query($conn,"SELECT sum(Within_CBFM_Area_ha) FROM baseline_for_csc where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
                            while($rows = mysqli_fetch_array($result)){?> 
                        <td style="font-weight: bold; color:#FE4A49;"><center><?php echo number_format($rows['sum(Within_CBFM_Area_ha)']); ?></center></td><?php }?>               
                        <?php
                          $result = mysqli_query($conn,"SELECT sum(DENR_Jurisdiction_Area_No) FROM baseline_for_csc where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
                            while($rows = mysqli_fetch_array($result)){?> 
                        <td style="font-weight: bold; color:#FE4A49;"><center><?php echo number_format($rows['sum(DENR_Jurisdiction_Area_No)']); ?></center></td><?php }?>  
                        <?php
                          $result = mysqli_query($conn,"SELECT sum(DENR_Jurisdiction_ha) FROM baseline_for_csc where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
                            while($rows = mysqli_fetch_array($result)){?> 
                        <td style="font-weight: bold; color:#FE4A49;"><center><?php echo number_format($rows['sum(DENR_Jurisdiction_ha)']); ?></center></td><?php }?> 

                        <?php
                          $result = mysqli_query($conn,"SELECT sum(Devolved_to_LGUs_No) FROM baseline_for_csc where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
                            while($rows = mysqli_fetch_array($result)){?> 
                        <td style="font-weight: bold; color:#FE4A49;"><center><?php echo number_format($rows['sum(Devolved_to_LGUs_No)']); ?></center></td><?php }?> 

                        <?php
                          $result = mysqli_query($conn,"SELECT sum(Devolved_to_LGUs_ha) FROM baseline_for_csc where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
                            while($rows = mysqli_fetch_array($result)){?> 
                        <td style="font-weight: bold; color:#FE4A49;"><center><?php echo number_format($rows['sum(Devolved_to_LGUs_ha)']); ?></center></td><?php }?>
                      </tr>

                    </tbody>
                  </table>
        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:#FE4A49; color: white;">Close</button>
        </div>
      </div>
      
    </div>
  </div>





<div class="modal fade"  id="tbl59-total" role="dialog">
    <div class="modal-dialog modal-lg">    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><span class="fa fa-calculator"></span> Total records</h4>
        </div>
        <div class="modal-body">
      <table class="table table-striped">
    <thead>
      <tr>
        <th></th>
        <th style="letter-spacing: 1px;">PA Area(ha)</th>
        <th style="letter-spacing: 1px;">Bufferzone Area(ha)</th>
        <th style="letter-spacing: 1px;">Total Area(ha)</th>

      
      </tr>
    </thead>
    <tbody>

      <tr>
        <td style="font-weight:bold;">Regional Total </td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Pa) FROM Proclaimed_Protected_Areas_under_NIPAS") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Pa)']); ?></td><?php } ?>

        <?php
            $result = mysqli_query($conn,"SELECT sum(Bufferzone) FROM Proclaimed_Protected_Areas_under_NIPAS") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Bufferzone)']); ?></td><?php } ?>


        <?php
            $result = mysqli_query($conn,"SELECT sum(Total_area_ha) FROM Proclaimed_Protected_Areas_under_NIPAS") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Total_area_ha)']); ?></td><?php } ?>

      </tr>
      <tr>
        <td>Bukidnon</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Pa) FROM Proclaimed_Protected_Areas_under_NIPAS where Province='Bukidnon'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Pa)']); ?></td><?php } ?>

        <?php
            $result = mysqli_query($conn,"SELECT sum(Bufferzone) FROM Proclaimed_Protected_Areas_under_NIPAS where Province='Bukidnon'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Bufferzone)']); ?></td><?php } ?>


        <?php
            $result = mysqli_query($conn,"SELECT sum(Total_area_ha) FROM Proclaimed_Protected_Areas_under_NIPAS where Province='Bukidnon'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Total_area_ha)']); ?></td><?php } ?>

      </tr>
      <tr>
        <td>Camiguin</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Pa) FROM Proclaimed_Protected_Areas_under_NIPAS where Province='Camiguin'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Pa)']); ?></td><?php } ?>

        <?php
            $result = mysqli_query($conn,"SELECT sum(Bufferzone) FROM Proclaimed_Protected_Areas_under_NIPAS where Province='Camiguin'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Bufferzone)']); ?></td><?php } ?>


        <?php
            $result = mysqli_query($conn,"SELECT sum(Total_area_ha) FROM Proclaimed_Protected_Areas_under_NIPAS where Province='Camiguin'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Total_area_ha)']); ?></td><?php } ?>

      </tr>
      <tr>
        <td>Lanao Del Norte</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Pa) FROM Proclaimed_Protected_Areas_under_NIPAS where Province='Lanao del Norte'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Pa)']); ?></td><?php } ?>

        <?php
            $result = mysqli_query($conn,"SELECT sum(Bufferzone) FROM Proclaimed_Protected_Areas_under_NIPAS where Province='Lanao del Norte'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Bufferzone)']); ?></td><?php } ?>


        <?php
            $result = mysqli_query($conn,"SELECT sum(Total_area_ha) FROM Proclaimed_Protected_Areas_under_NIPAS where Province='Lanao del Norte'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Total_area_ha)']); ?></td><?php } ?>
      </tr>

      <tr>
        <td>Misamis Oriental</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Pa) FROM Proclaimed_Protected_Areas_under_NIPAS where Province='Misamis Oriental'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Pa)']); ?></td><?php } ?>

        <?php
            $result = mysqli_query($conn,"SELECT sum(Bufferzone) FROM Proclaimed_Protected_Areas_under_NIPAS where Province='Misamis Oriental'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Bufferzone)']); ?></td><?php } ?>


        <?php
            $result = mysqli_query($conn,"SELECT sum(Total_area_ha) FROM Proclaimed_Protected_Areas_under_NIPAS where Province='Misamis Oriental'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Total_area_ha)']); ?></td><?php } ?>
       
      </tr>
      <tr>
        <td>Misamis Occidental</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Pa) FROM Proclaimed_Protected_Areas_under_NIPAS where Province='Misamis Occidental'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Pa)']); ?></td><?php } ?>

        <?php
            $result = mysqli_query($conn,"SELECT sum(Bufferzone) FROM Proclaimed_Protected_Areas_under_NIPAS where Province='Misamis Occidental'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Bufferzone)']); ?></td><?php } ?>


        <?php
            $result = mysqli_query($conn,"SELECT sum(Total_area_ha) FROM Proclaimed_Protected_Areas_under_NIPAS where Province='Misamis Occidental'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Total_area_ha)']); ?></td><?php } ?>
 
      </tr>
    </tbody>
  </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:#FE4A49; color: white;">Close</button>
        </div>
      </div>
      
    </div>
  </div>

<div class="modal fade"  id="tbl34-total" role="dialog">
    <div class="modal-dialog modal-lg">    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><span class="fa fa-calculator"></span> Total records</h4>
        </div>
        <div class="modal-body">
                  <table class="table">
    <thead>
      <tr>
        <th>Province </th>
        <th>Closed </th>
        <th>Open</th>
        <th>Mangrove</th>
        <th>Total</th>
      </tr>
    </thead>
    <tbody>
      <tr class="active">
            <td style="font-weight:bold;">Regional Total </td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Close) FROM forest_cover") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Close)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Open) FROM forest_cover") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Open)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Mangrove) FROM forest_cover") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Mangrove)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Total) FROM forest_cover") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Total)']); ?></td><?php } ?>

      </tr>
      <tr>
        <td>Bukidnon</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Close) FROM forest_cover where  Province='Bukidnon'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Close)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Open) FROM forest_cover where Province='Bukidnon'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Open)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Mangrove) FROM forest_cover where Province='Bukidnon'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Mangrove)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Total) FROM forest_cover where  Province='Bukidnon'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Total)']); ?></td><?php } ?>

      </tr>
      <tr>
        <td>Camiguin</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Close) FROM forest_cover where  Province='Camiguin'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Close)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Open) FROM forest_cover where Province='Camiguin'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Open)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Mangrove) FROM forest_cover where Province='Camiguin'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Mangrove)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Total) FROM forest_cover where  Province='Camiguin'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Total)']); ?></td><?php } ?>
  
      </tr>


      <tr>
        <td>Lanao del Norte</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Close) FROM forest_cover where  Province='Lanao del Norte'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Close)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Open) FROM forest_cover where Province='Lanao del Norte'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Open)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Mangrove) FROM forest_cover where Province='Lanao del Norte'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Mangrove)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Total) FROM forest_cover where  Province='Lanao del Norte'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Total)']); ?></td><?php } ?>
  
      </tr>


      <tr>
        <td>Misamis Oriental</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Close) FROM forest_cover where  Province='Misamis Oriental'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Close)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Open) FROM forest_cover where Province='Misamis Oriental'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Open)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Mangrove) FROM forest_cover where Province='Misamis Oriental'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Mangrove)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Total) FROM forest_cover where  Province='Misamis Oriental'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Total)']); ?></td><?php } ?>
       
      </tr>
      <tr>
        <td>Misamis Occidental</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Close) FROM forest_cover where  Province='Misamis Occidental'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Close)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Open) FROM forest_cover where Province='Misamis Occidental'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Open)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Mangrove) FROM forest_cover where Province='Misamis Occidental'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Mangrove)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Total) FROM forest_cover where  Province='Misamis Occidental'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Total)']); ?></td><?php } ?>
 
      </tr>
    </tbody>
  </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:#FE4A49; color: white;">Close</button>
        </div>
      </div>
      
    </div>
  </div>


<div class="modal fade"  id="tbl49-total" role="dialog">
    <div class="modal-dialog">    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><span class="fa fa-calculator"></span> Total records</h4>
        </div>
        <div class="modal-body">
                  <table class="table">
    <thead>
      <tr>
        <th>Regional Total </th>
        <th>Number of Seedling planted</th>
      
      </tr>
    </thead>
    <tbody>
      <tr class="active">
        <td>Regional Total</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(number_of_seedlings_planted) FROM ngp_seedling_planted") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(number_of_seedlings_planted)']); ?></td><?php } ?>

      </tr>


            <tr>
        <td>Bukidnon</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(number_of_seedlings_planted) FROM ngp_seedling_planted where Province='Bukidnon'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(number_of_seedlings_planted)']); ?></td><?php } ?>

      </tr>
      <tr>
        <td>Camiguin</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(number_of_seedlings_planted) FROM ngp_seedling_planted where Province='Camiguin'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(number_of_seedlings_planted)']); ?></td><?php } ?>

      </tr>
      <tr>
        <td>Lanao Del Norte</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(number_of_seedlings_planted) FROM ngp_seedling_planted where Province='Lanao Del Norte'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(number_of_seedlings_planted)']); ?></td><?php } ?>
  
      </tr>

      <tr>
        <td>Lake Lanao WPDP</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(number_of_seedlings_planted) FROM ngp_seedling_planted where Province='Lake Lanao WPDP'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(number_of_seedlings_planted)']); ?></td><?php } ?>
  
      </tr>


      <tr>
        <td>Misamis Oriental</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(number_of_seedlings_planted) FROM ngp_seedling_planted where Province='Misamis Oriental'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(number_of_seedlings_planted)']); ?></td><?php } ?>
       
      </tr>
      <tr>
        <td>Misamis Occidental</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(number_of_seedlings_planted) FROM ngp_seedling_planted where Province='Misamis Occidental'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(number_of_seedlings_planted)']); ?></td><?php } ?>
 
      </tr>
    </tbody>
  </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:#FE4A49; color: white;">Close</button>
        </div>
      </div>
      
    </div>
  </div>







<div class="modal fade"  id="tbl50-total" role="dialog">
    <div class="modal-dialog">    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><span class="fa fa-calculator"></span> Total records</h4>
        </div>
        <div class="modal-body">
                  <table class="table">
    <thead>
      <tr>
        <th>Province </th>
        <th>Number of Seedling production</th>
      
      </tr>
    </thead>
    <tbody>

        <tr class="active">
        <td style="font-weight: bold;">Regional Total</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(number_of_seedlings_production) FROM ngp_seedling_production") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(number_of_seedlings_production)']); ?></td><?php } ?>

      </tr>
      <tr>
        <td>Bukidnon</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(number_of_seedlings_production) FROM ngp_seedling_production where Province='Bukidnon'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(number_of_seedlings_production)']); ?></td><?php } ?>

      </tr>
      <tr>
        <td>Camiguin</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(number_of_seedlings_production) FROM ngp_seedling_production where Province='Camiguin'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(number_of_seedlings_production)']); ?></td><?php } ?>

      </tr>
      <tr>
        <td>Lanao Del Norte</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(number_of_seedlings_production) FROM ngp_seedling_production where Province='Lanao Del Norte'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(number_of_seedlings_production)']); ?></td><?php } ?>
  
      </tr>

      <tr>
        <td>Lake Lanao WPDP</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(number_of_seedlings_production) FROM ngp_seedling_production where Province='Lake Lanao WPDP'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(number_of_seedlings_production)']); ?></td><?php } ?>
  
      </tr>


      <tr>
        <td>Misamis Oriental</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(number_of_seedlings_production) FROM ngp_seedling_production where Province='Misamis Oriental'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(number_of_seedlings_production)']); ?></td><?php } ?>
       
      </tr>
      <tr>
        <td>Misamis Occidental</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(number_of_seedlings_production) FROM ngp_seedling_production where Province='Misamis Occidental'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(number_of_seedlings_production)']); ?></td><?php } ?>
 
      </tr>
    </tbody>
  </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:#FE4A49; color: white;">Close</button>
        </div>
      </div>
      
    </div>
  </div>


<div class="modal fade"  id="tbl47-total" role="dialog">
    <div class="modal-dialog">    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><span class="fa fa-calculator"></span> Total records</h4>
        </div>
        <div class="modal-body">
                  <table class="table">
    <thead>
      <tr>
        <th>Province</th>
        <th>Area (ha)</th>
      
      </tr>
    </thead>
    <tbody>
      <tr class="active">
        <td>Regional Total</td>
      <?php
            $result = mysqli_query($conn,"SELECT sum(area_ha) FROM ngp_area_planted") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(area_ha)']); ?></td><?php } ?>

      </tr>
      <tr>
        <td>Bukidnon</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(area_ha) FROM ngp_area_planted where Province='Bukidnon'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(area_ha)']); ?></td><?php } ?>

      </tr>
      <tr>
        <td>Camiguin</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(area_ha) FROM ngp_area_planted where Province='Camiguin'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(area_ha)']); ?></td><?php } ?>

      </tr>
      <tr>
        <td>Lanao Del Norte</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(area_ha) FROM ngp_area_planted where Province='Lanao Del Norte'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(area_ha)']); ?></td><?php } ?>
  
      </tr>

      <tr>
        <td>Lake Lanao WPDP</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(area_ha) FROM ngp_area_planted where Province='Lake Lanao WPDP'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(area_ha)']); ?></td><?php } ?>
  
      </tr>


      <tr>
        <td>Misamis Oriental</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(area_ha) FROM ngp_area_planted where Province='Misamis Oriental'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(area_ha)']); ?></td><?php } ?>
       
      </tr>
      <tr>
        <td>Misamis Occidental</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(area_ha) FROM ngp_area_planted where Province='Misamis Occidental'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(area_ha)']); ?></td><?php } ?>
 
      </tr>
    </tbody>
  </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:#FE4A49; color: white;">Close</button>
        </div>
      </div>
      
    </div>
  </div>






<div class="modal fade"  id="tbl48-total" role="dialog">
    <div class="modal-dialog modal-lg">    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><span class="fa fa-calculator"></span> Total records</h4>
        </div>
        <div class="modal-body">
                  <table class="table">
    <thead>
      <tr>
        <th>Province</th>
        <th>No. of Polygons</th>
        <th>No. of Sites</th>
        <th>No. of Beneficiaries</th>
      </tr>
    </thead>
    <tbody>
      <tr class="active">
        <td>Regional Total</td>
      <?php
            $result = mysqli_query($conn,"SELECT sum(no_of_polygons) FROM ngp_number_of_polygons") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(no_of_polygons)']); ?></td><?php } ?>

      <?php
            $result = mysqli_query($conn,"SELECT sum(no_of_sites) FROM ngp_number_of_polygons") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(no_of_sites)']); ?></td><?php } ?>


      <?php
            $result = mysqli_query($conn,"SELECT sum(no_of_beneficiaries) FROM ngp_number_of_polygons") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(no_of_beneficiaries)']); ?></td><?php } ?>



      </tr>
      <tr>
        <td>Bukidnon</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(no_of_polygons) FROM ngp_number_of_polygons where Province='Bukidnon'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(no_of_polygons)']); ?></td><?php } ?>

        <?php
            $result = mysqli_query($conn,"SELECT sum(no_of_sites) FROM ngp_number_of_polygons where Province='Bukidnon'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(no_of_sites)']); ?></td><?php } ?>

        <?php
            $result = mysqli_query($conn,"SELECT sum(no_of_beneficiaries) FROM ngp_number_of_polygons where Province='Bukidnon'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(no_of_beneficiaries)']); ?></td><?php } ?>





      </tr>
      <tr>
        <td>Camiguin</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(no_of_polygons) FROM ngp_number_of_polygons where Province='Camiguin'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(no_of_polygons)']); ?></td><?php } ?>


        <?php
            $result = mysqli_query($conn,"SELECT sum(no_of_sites) FROM ngp_number_of_polygons where Province='Camiguin'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(no_of_sites)']); ?></td><?php } ?>



        <?php
            $result = mysqli_query($conn,"SELECT sum(no_of_beneficiaries) FROM ngp_number_of_polygons where Province='Camiguin'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(no_of_beneficiaries)']); ?></td><?php } ?>


      </tr>
      <tr>
        <td>Lanao Del Norte</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(no_of_polygons) FROM ngp_number_of_polygons where Province='Lanao Del Norte'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(no_of_polygons)']); ?></td><?php } ?>
  
        <?php
            $result = mysqli_query($conn,"SELECT sum(no_of_sites) FROM ngp_number_of_polygons where Province='Lanao Del Norte'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(no_of_sites)']); ?></td><?php } ?>
  

  
        <?php
            $result = mysqli_query($conn,"SELECT sum(no_of_beneficiaries) FROM ngp_number_of_polygons where Province='Lanao Del Norte'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(no_of_beneficiaries)']); ?></td><?php } ?>
  


      </tr>

      <tr>
        <td>Lake Lanao WPDP</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(no_of_polygons) FROM ngp_number_of_polygons where Province='Lake Lanao WPDP'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(no_of_polygons)']); ?></td><?php } ?>

        <?php
            $result = mysqli_query($conn,"SELECT sum(no_of_sites) FROM ngp_number_of_polygons where Province='Lake Lanao WPDP'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(no_of_sites)']); ?></td><?php } ?>
  
        <?php
            $result = mysqli_query($conn,"SELECT sum(no_of_beneficiaries) FROM ngp_number_of_polygons where Province='Lake Lanao WPDP'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(no_of_beneficiaries)']); ?></td><?php } ?>


      </tr>


      <tr>
        <td>Misamis Oriental</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(no_of_polygons) FROM ngp_number_of_polygons where Province='Misamis Oriental'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(no_of_polygons)']); ?></td><?php } ?>
       
        <?php
            $result = mysqli_query($conn,"SELECT sum(no_of_sites) FROM ngp_number_of_polygons where Province='Misamis Oriental'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(no_of_sites)']); ?></td><?php } ?>
       
        <?php
            $result = mysqli_query($conn,"SELECT sum(no_of_beneficiaries) FROM ngp_number_of_polygons where Province='Misamis Oriental'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(no_of_beneficiaries)']); ?></td><?php } ?>

      </tr>
      <tr>
        <td>Misamis Occidental</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(no_of_polygons) FROM ngp_number_of_polygons where Province='Misamis Occidental'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(no_of_polygons)']); ?></td><?php } ?>
         <?php
            $result = mysqli_query($conn,"SELECT sum(no_of_sites) FROM ngp_number_of_polygons where Province='Misamis Occidental'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(no_of_sites)']); ?></td><?php } ?>
          <?php
            $result = mysqli_query($conn,"SELECT sum(no_of_beneficiaries) FROM ngp_number_of_polygons where Province='Misamis Occidental'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(no_of_beneficiaries)']); ?></td><?php } ?>
 
      </tr>
    </tbody>
  </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:#FE4A49; color: white;">Close</button>
        </div>
      </div>
      
    </div>
  </div>



<div class="modal fade"  id="tbl62-total" role="dialog">
    <div class="modal-dialog modal-lg">    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><span class="fa fa-calculator"></span> Total records</h4>
        </div>
        <div class="modal-body">
                  <table class="table">
    <thead>
      <tr>
        <th></th>
        <th><small>Total Municipality/City</small></th>
        <th><small>Municipality with Forestland (Universe for FLUP)</small></th>
        <th><small>Accomplishment (Formulation)</small></th>
        <th><small>Accomplishment (Adoption)</small></th>
        <th><small>Baseline (Formulation)</small></th>
        <th><small>Baseline (Adoption)</small></th>
      
      </tr>
    </thead>
    <tbody>


      <tr class="active">
        <td>Regional Total</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Total_Municipality_City) FROM Summary_of_Forest_Land_Use_Plan_Formulation_and_Adoption") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Total_Municipality_City)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Municipality_with_Forestland) FROM Summary_of_Forest_Land_Use_Plan_Formulation_and_Adoption") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Municipality_with_Forestland)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Accomplishment_Formulation) FROM Summary_of_Forest_Land_Use_Plan_Formulation_and_Adoption") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Accomplishment_Formulation)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Accomplishment_Adoption) FROM Summary_of_Forest_Land_Use_Plan_Formulation_and_Adoption") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Accomplishment_Adoption)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Baseline_Formulation) FROM Summary_of_Forest_Land_Use_Plan_Formulation_and_Adoption") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Baseline_Formulation)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Baseline_Adoption) FROM Summary_of_Forest_Land_Use_Plan_Formulation_and_Adoption") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Baseline_Adoption)']); ?></td><?php } ?>
          

      </tr>



      <tr>
        <td>Bukidnon</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Total_Municipality_City) FROM Summary_of_Forest_Land_Use_Plan_Formulation_and_Adoption where Province='Bukidnon'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Total_Municipality_City)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Municipality_with_Forestland) FROM Summary_of_Forest_Land_Use_Plan_Formulation_and_Adoption where Province='Bukidnon'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Municipality_with_Forestland)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Accomplishment_Formulation) FROM Summary_of_Forest_Land_Use_Plan_Formulation_and_Adoption where Province='Bukidnon'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Accomplishment_Formulation)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Accomplishment_Adoption) FROM Summary_of_Forest_Land_Use_Plan_Formulation_and_Adoption where Province='Bukidnon'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Accomplishment_Adoption)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Baseline_Formulation) FROM Summary_of_Forest_Land_Use_Plan_Formulation_and_Adoption where Province='Bukidnon'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Baseline_Formulation)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Baseline_Adoption) FROM Summary_of_Forest_Land_Use_Plan_Formulation_and_Adoption where Province='Bukidnon'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Baseline_Adoption)']); ?></td><?php } ?>
          

      </tr>



      <tr>
        <td>Camiguin</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Total_Municipality_City) FROM Summary_of_Forest_Land_Use_Plan_Formulation_and_Adoption where Province='Camiguin'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Total_Municipality_City)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Municipality_with_Forestland) FROM Summary_of_Forest_Land_Use_Plan_Formulation_and_Adoption where Province='Camiguin'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Municipality_with_Forestland)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Accomplishment_Formulation) FROM Summary_of_Forest_Land_Use_Plan_Formulation_and_Adoption where Province='Camiguin'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Accomplishment_Formulation)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Accomplishment_Adoption) FROM Summary_of_Forest_Land_Use_Plan_Formulation_and_Adoption where Province='Camiguin'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Accomplishment_Adoption)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Baseline_Formulation) FROM Summary_of_Forest_Land_Use_Plan_Formulation_and_Adoption where Province='Camiguin'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Baseline_Formulation)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Baseline_Adoption) FROM Summary_of_Forest_Land_Use_Plan_Formulation_and_Adoption where Province='Camiguin'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Baseline_Adoption)']); ?></td><?php } ?>
          

      </tr>

      <tr>
        <td>Lanao del Norte</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Total_Municipality_City) FROM Summary_of_Forest_Land_Use_Plan_Formulation_and_Adoption where Province='Lanao del Norte'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Total_Municipality_City)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Municipality_with_Forestland) FROM Summary_of_Forest_Land_Use_Plan_Formulation_and_Adoption where Province='Lanao del Norte'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Municipality_with_Forestland)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Accomplishment_Formulation) FROM Summary_of_Forest_Land_Use_Plan_Formulation_and_Adoption where Province='Lanao del Norte'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Accomplishment_Formulation)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Accomplishment_Adoption) FROM Summary_of_Forest_Land_Use_Plan_Formulation_and_Adoption where Province='Lanao del Norte'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Accomplishment_Adoption)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Baseline_Formulation) FROM Summary_of_Forest_Land_Use_Plan_Formulation_and_Adoption where Province='Lanao del Norte'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Baseline_Formulation)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Baseline_Adoption) FROM Summary_of_Forest_Land_Use_Plan_Formulation_and_Adoption where Province='Lanao del Norte'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Baseline_Adoption)']); ?></td><?php } ?>
          

      </tr>







      <tr>
        <td>Misamis Occidental</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Total_Municipality_City) FROM Summary_of_Forest_Land_Use_Plan_Formulation_and_Adoption where Province='Misamis Occidental'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Total_Municipality_City)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Municipality_with_Forestland) FROM Summary_of_Forest_Land_Use_Plan_Formulation_and_Adoption where Province='Misamis Occidental'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Municipality_with_Forestland)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Accomplishment_Formulation) FROM Summary_of_Forest_Land_Use_Plan_Formulation_and_Adoption where Province='Misamis Occidental'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Accomplishment_Formulation)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Accomplishment_Adoption) FROM Summary_of_Forest_Land_Use_Plan_Formulation_and_Adoption where Province='Misamis Occidental'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Accomplishment_Adoption)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Baseline_Formulation) FROM Summary_of_Forest_Land_Use_Plan_Formulation_and_Adoption where Province='Misamis Occidental'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Baseline_Formulation)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Baseline_Adoption) FROM Summary_of_Forest_Land_Use_Plan_Formulation_and_Adoption where Province='Misamis Occidental'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Baseline_Adoption)']); ?></td><?php } ?>
          

      </tr>




      <tr>
        <td>Misamis Oriental</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Total_Municipality_City) FROM Summary_of_Forest_Land_Use_Plan_Formulation_and_Adoption where Province='Misamis Oriental'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Total_Municipality_City)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Municipality_with_Forestland) FROM Summary_of_Forest_Land_Use_Plan_Formulation_and_Adoption where Province='Misamis Oriental'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Municipality_with_Forestland)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Accomplishment_Formulation) FROM Summary_of_Forest_Land_Use_Plan_Formulation_and_Adoption where Province='Misamis Oriental'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Accomplishment_Formulation)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Accomplishment_Adoption) FROM Summary_of_Forest_Land_Use_Plan_Formulation_and_Adoption where Province='Misamis Oriental'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Accomplishment_Adoption)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Baseline_Formulation) FROM Summary_of_Forest_Land_Use_Plan_Formulation_and_Adoption where Province='Misamis Oriental'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Baseline_Formulation)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Baseline_Adoption) FROM Summary_of_Forest_Land_Use_Plan_Formulation_and_Adoption where Province='Misamis Oriental'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Baseline_Adoption)']); ?></td><?php } ?>
          

      </tr>



    </tbody>
  </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:#FE4A49; color: white;">Close</button>
        </div>
      </div>
      
    </div>
  </div>





<div class="modal fade"  id="tbl9-total" role="dialog">
    <div class="modal-dialog">    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><span class="fa fa-calculator"></span> Total records</h4>
        </div>
        <div class="modal-body">
                  <table class="table">
    <thead>
      <tr>
        <th></th>
        <th>Uncontested (ha)</th>
        <th>Contested (ha)</th>
      </tr>
    </thead>
    <tbody>
      <tr class="active">
        <td>Regional Total</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Uncontested) FROM cadastral_survey") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Uncontested)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Contested) FROM cadastral_survey") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Contested)']); ?></td><?php } ?>
      </tr> 
      <tr>
        <td>Bukidnon</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Uncontested) FROM cadastral_survey where Province='Bukidnon'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Uncontested)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Contested) FROM cadastral_survey where Province='Bukidnon'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Contested)']); ?></td><?php } ?>
      </tr>
      <tr>
        <td>Camiguin</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Uncontested) FROM cadastral_survey where Province='Camiguin'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Uncontested)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Contested) FROM cadastral_survey where Province='Camiguin'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Contested)']); ?></td><?php } ?>
      </tr>
      <tr>
        <td>Lanao Del Norte</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Uncontested) FROM cadastral_survey where Province='Lanao Del Norte'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Uncontested)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Contested) FROM cadastral_survey where Province='Lanao Del Norte'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Contested)']); ?></td><?php } ?>
      </tr>
      <tr>
        <td>Misamis Oriental</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Uncontested) FROM cadastral_survey where Province='Misamis Oriental'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Uncontested)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Contested) FROM cadastral_survey where Province='Misamis Oriental'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Contested)']); ?></td><?php } ?>
      </tr>
      <tr>
        <td>Misamis Occidental</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Uncontested) FROM cadastral_survey where Province='Misamis Occidental'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Uncontested)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Contested) FROM cadastral_survey where Province='Misamis Occidental'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Contested)']); ?></td><?php } ?>
      </tr>
    </tbody>
  </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:#FE4A49; color: white;">Close</button>
        </div>
      </div>
      
    </div>
  </div>







<div class="modal fade"  id="tbl63-total" role="dialog">
    <div class="modal-dialog modal-lg" style="width:1200px;">    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><span class="fa fa-calculator"></span> Total records</h4>
        </div>
        <div class="modal-body">
                  <table class="table">
    <thead>
      <tr>
        <th>PENRO</th>
        <th>Total Number of River Basin/Watershed/Sub-Watershed</th>
        <th>Status Profiling/Characterization</th>
        <th>Status Vulnerability Assessment</th>
        <th>Status IWMP Prepared</th>        
        <th>Status Profiling/Characterization</th>
        <th>Status Vulnerability Assessment</th>
        <th>Status IWMP</th>       
      </tr>
    </thead>
    <tbody>

        <tr class="active">
          <td>Regional Total </td>

        <?php
            $result = mysqli_query($conn,"SELECT sum(Total_Number_of_River_Basin_Watershed_Sub_Watershed) FROM Summary_of_Watershed_Characterization") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Total_Number_of_River_Basin_Watershed_Sub_Watershed)']); ?></td><?php } ?>

        <?php
            $result = mysqli_query($conn,"SELECT sum(Status_Profiling_Characterization) FROM Summary_of_Watershed_Characterization") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Status_Profiling_Characterization)']); ?></td><?php } ?>

        <?php
            $result = mysqli_query($conn,"SELECT sum(Status_Vulnerability_Assessment) FROM Summary_of_Watershed_Characterization") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Status_Vulnerability_Assessment)']); ?></td><?php } ?>

        <?php
            $result = mysqli_query($conn,"SELECT sum(Status_IWMP_Prepared) FROM Summary_of_Watershed_Characterization") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Status_IWMP_Prepared)']); ?></td><?php } ?>

        <?php
            $result = mysqli_query($conn,"SELECT sum(Baseline_Profiling_Characterization) FROM Summary_of_Watershed_Characterization") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Baseline_Profiling_Characterization)']); ?></td><?php } ?>

        <?php
            $result = mysqli_query($conn,"SELECT sum(Baseline_Vulnerability_Assessment) FROM Summary_of_Watershed_Characterization") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Baseline_Vulnerability_Assessment)']); ?></td><?php } ?>

        <?php
            $result = mysqli_query($conn,"SELECT sum(Baseline_IWMP) FROM Summary_of_Watershed_Characterization") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Baseline_IWMP)']); ?></td><?php } ?>


        </tr>


      <tr>
        <td>Bukidnon</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Total_Number_of_River_Basin_Watershed_Sub_Watershed) FROM Summary_of_Watershed_Characterization where PENRO='Bukidnon'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Total_Number_of_River_Basin_Watershed_Sub_Watershed)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Status_Profiling_Characterization) FROM Summary_of_Watershed_Characterization where PENRO='Bukidnon'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Status_Profiling_Characterization)']); ?></td><?php } ?>
    
        <?php
            $result = mysqli_query($conn,"SELECT sum(Status_Vulnerability_Assessment) FROM Summary_of_Watershed_Characterization where PENRO='Bukidnon'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Status_Vulnerability_Assessment)']); ?></td><?php } ?>
    
        <?php
            $result = mysqli_query($conn,"SELECT sum(Status_IWMP_Prepared) FROM Summary_of_Watershed_Characterization where PENRO='Bukidnon'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Status_IWMP_Prepared)']); ?></td><?php } ?>
    
        <?php
            $result = mysqli_query($conn,"SELECT sum(Baseline_Profiling_Characterization) FROM Summary_of_Watershed_Characterization where PENRO='Bukidnon'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Baseline_Profiling_Characterization)']); ?></td><?php } ?>
    
        <?php
            $result = mysqli_query($conn,"SELECT sum(Baseline_Vulnerability_Assessment) FROM Summary_of_Watershed_Characterization where PENRO='Bukidnon'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Baseline_Vulnerability_Assessment)']); ?></td><?php } ?>
    
        <?php
            $result = mysqli_query($conn,"SELECT sum(Baseline_IWMP) FROM Summary_of_Watershed_Characterization where PENRO='Bukidnon'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Baseline_IWMP)']); ?></td><?php } ?>
    


      </tr>



      <tr>
        <td>Camiguin</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Total_Number_of_River_Basin_Watershed_Sub_Watershed) FROM Summary_of_Watershed_Characterization where PENRO='Camiguin'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Total_Number_of_River_Basin_Watershed_Sub_Watershed)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Status_Profiling_Characterization) FROM Summary_of_Watershed_Characterization where PENRO='Camiguin'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Status_Profiling_Characterization)']); ?></td><?php } ?>
         <?php
            $result = mysqli_query($conn,"SELECT sum(Status_Vulnerability_Assessment) FROM Summary_of_Watershed_Characterization where PENRO='Camiguin'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Status_Vulnerability_Assessment)']); ?></td><?php } ?>
         <?php
            $result = mysqli_query($conn,"SELECT sum(Status_IWMP_Prepared) FROM Summary_of_Watershed_Characterization where PENRO='Camiguin'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Status_IWMP_Prepared)']); ?></td><?php } ?>
         <?php
            $result = mysqli_query($conn,"SELECT sum(Baseline_Profiling_Characterization) FROM Summary_of_Watershed_Characterization where PENRO='Camiguin'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Baseline_Profiling_Characterization)']); ?></td><?php } ?>
         <?php
            $result = mysqli_query($conn,"SELECT sum(Baseline_Vulnerability_Assessment) FROM Summary_of_Watershed_Characterization where PENRO='Camiguin'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Baseline_Vulnerability_Assessment)']); ?></td><?php } ?>
         <?php
            $result = mysqli_query($conn,"SELECT sum(Baseline_IWMP) FROM Summary_of_Watershed_Characterization where PENRO='Camiguin'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Baseline_IWMP)']); ?></td><?php } ?>
      
      </tr>






      <tr>
        <td>Lanao Del Norte</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Total_Number_of_River_Basin_Watershed_Sub_Watershed) FROM Summary_of_Watershed_Characterization where PENRO='Lanao Del Norte'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Total_Number_of_River_Basin_Watershed_Sub_Watershed)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Status_Profiling_Characterization) FROM Summary_of_Watershed_Characterization where PENRO='Lanao Del Norte'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Status_Profiling_Characterization)']); ?></td><?php } ?>
      
        <?php
            $result = mysqli_query($conn,"SELECT sum(Status_Vulnerability_Assessment) FROM Summary_of_Watershed_Characterization where PENRO='Lanao Del Norte'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Status_Vulnerability_Assessment)']); ?></td><?php } ?>
      
        <?php
            $result = mysqli_query($conn,"SELECT sum(Status_IWMP_Prepared) FROM Summary_of_Watershed_Characterization where PENRO='Lanao Del Norte'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Status_IWMP_Prepared)']); ?></td><?php } ?>
      
        <?php
            $result = mysqli_query($conn,"SELECT sum(Baseline_Profiling_Characterization) FROM Summary_of_Watershed_Characterization where PENRO='Lanao Del Norte'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Baseline_Profiling_Characterization)']); ?></td><?php } ?>
      
        <?php
            $result = mysqli_query($conn,"SELECT sum(Baseline_Vulnerability_Assessment) FROM Summary_of_Watershed_Characterization where PENRO='Lanao Del Norte'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Baseline_Vulnerability_Assessment)']); ?></td><?php } ?>
      
        <?php
            $result = mysqli_query($conn,"SELECT sum(Baseline_IWMP) FROM Summary_of_Watershed_Characterization where PENRO='Lanao Del Norte'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Baseline_IWMP)']); ?></td><?php } ?>
      

      </tr>
    

      <tr>
        <td>Misamis Oriental</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Total_Number_of_River_Basin_Watershed_Sub_Watershed) FROM Summary_of_Watershed_Characterization where PENRO='Misamis Oriental'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Total_Number_of_River_Basin_Watershed_Sub_Watershed)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Status_Profiling_Characterization) FROM Summary_of_Watershed_Characterization where PENRO='Misamis Oriental'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Status_Profiling_Characterization)']); ?></td><?php } ?>
     
        <?php
            $result = mysqli_query($conn,"SELECT sum(Status_Vulnerability_Assessment) FROM Summary_of_Watershed_Characterization where PENRO='Misamis Oriental'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Status_Vulnerability_Assessment)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Status_IWMP_Prepared) FROM Summary_of_Watershed_Characterization where PENRO='Misamis Oriental'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Status_IWMP_Prepared)']); ?></td><?php } ?>
     
        <?php
            $result = mysqli_query($conn,"SELECT sum(Baseline_Profiling_Characterization) FROM Summary_of_Watershed_Characterization where PENRO='Misamis Oriental'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Baseline_Profiling_Characterization)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Baseline_Vulnerability_Assessment) FROM Summary_of_Watershed_Characterization where PENRO='Misamis Oriental'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Baseline_Vulnerability_Assessment)']); ?></td><?php } ?>
     
        <?php
            $result = mysqli_query($conn,"SELECT sum(Baseline_IWMP) FROM Summary_of_Watershed_Characterization where PENRO='Misamis Oriental'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Baseline_IWMP)']); ?></td><?php } ?>


      </tr>
     

      <tr>
        <td>Misamis Occidental</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Total_Number_of_River_Basin_Watershed_Sub_Watershed) FROM Summary_of_Watershed_Characterization where PENRO='Misamis Occidental'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Total_Number_of_River_Basin_Watershed_Sub_Watershed)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Status_Profiling_Characterization) FROM Summary_of_Watershed_Characterization where PENRO='Misamis Occidental'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Status_Profiling_Characterization)']); ?></td><?php } ?>
            <?php
            $result = mysqli_query($conn,"SELECT sum(Status_Vulnerability_Assessment) FROM Summary_of_Watershed_Characterization where PENRO='Misamis Occidental'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Status_Vulnerability_Assessment)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Status_IWMP_Prepared) FROM Summary_of_Watershed_Characterization where PENRO='Misamis Occidental'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Status_IWMP_Prepared)']); ?></td><?php } ?>
            <?php
            $result = mysqli_query($conn,"SELECT sum(Baseline_Profiling_Characterization) FROM Summary_of_Watershed_Characterization where PENRO='Misamis Occidental'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Baseline_Profiling_Characterization)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Baseline_Vulnerability_Assessment) FROM Summary_of_Watershed_Characterization where PENRO='Misamis Occidental'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Baseline_Vulnerability_Assessment)']); ?></td><?php } ?>
      
        <?php
            $result = mysqli_query($conn,"SELECT sum(Baseline_IWMP) FROM Summary_of_Watershed_Characterization where PENRO='Misamis Occidental'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold; color:#FE4A49;"><?php echo number_format($rows['sum(Baseline_IWMP)']); ?></td><?php } ?>
      



      </tr>
    </tbody>
  </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:#FE4A49; color: white;">Close</button>
        </div>
      </div>
      
    </div>
  </div>

















   <div class="modal fade" id="tbl23-total" role="dialog">
    <div class="modal-dialog modal-lg">    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="letter-spacing:1px;"><span class="fa fa-calculator"></span> Total records</h4>
        </div>
        <div class="modal-body">
        <table class="table">
    <thead>
        <tr>
            <th><small>Province</small></th>
            <th style="color:#FE4A49;">Volume (in Lineal Meters)</th>
            <th style="color:#FE4A49;"> Est.Value (P)</th>
       
        </tr>
    </thead>
  <tbody>
    <tr class="active">
        <td>Regional Total</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Volume_inLinealMeters) FROM confiscated_rattan_poles") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(Volume_inLinealMeters)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(EstValue) FROM confiscated_rattan_poles") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(EstValue)']); ?></td><?php } ?>
    </tr>    
    <tr>
        <td>Bukidnon</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Volume_inLinealMeters) FROM confiscated_rattan_poles where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(Volume_inLinealMeters)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(EstValue) FROM confiscated_rattan_poles where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(EstValue)']); ?></td><?php } ?>
    </tr>

    <tr>
        <td>Camiguin </td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Volume_inLinealMeters) FROM confiscated_rattan_poles where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(Volume_inLinealMeters)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(EstValue) FROM confiscated_rattan_poles where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(EstValue)']); ?></td><?php } ?>

    </tr>
 

     <tr>
        <td>Lanao del Norte</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Volume_inLinealMeters) FROM confiscated_rattan_poles where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(Volume_inLinealMeters)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(EstValue) FROM confiscated_rattan_poles  where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(EstValue)']); ?></td><?php } ?>

    </tr>
 
     <tr>
        <td>Misamis Occidental</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Volume_inLinealMeters) FROM confiscated_rattan_poles where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(Volume_inLinealMeters)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(EstValue) FROM confiscated_rattan_poles where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(EstValue)']); ?></td><?php } ?>

    </tr>


     <tr>
        <td>Misamis Oriental</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Volume_inLinealMeters) FROM confiscated_rattan_poles where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(Volume_inLinealMeters)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(EstValue) FROM confiscated_rattan_poles where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
          <td style="font-weight: bold;"><?php echo number_format($rows['sum(EstValue)']); ?></td><?php } ?>
    </tr>

    </tbody>
  </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:#FE4A49; color: white;">Close</button>
        </div>
      </div>
      
    </div>
  </div>




   <div class="modal fade" id="tbl60-total" role="dialog">
    <div class="modal-dialog modal-lg">    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="letter-spacing:1px;"><span class="fa fa-calculator"></span> Total records</h4>
        </div>
        <div class="modal-body">
        <table class="table">
    <thead>
        <tr>
            <th><small></small></th>
            <th style="color:#FE4A49;">No. of CBFMA</th>
            <th style="color:#FE4A49;">CBFMA With No CRMF</th>
            <th style="color:#FE4A49;">CBFMA With CRMF Needs Updating</th>
            <th style="color:#FE4A49;">CBFMA With Updated CRMF</th> 
            <th style="color:#FE4A49;">CBFMA With Affirmed CRMF</th>       
        </tr>
    </thead>
  <tbody>

    <tr class="active">
      <td style="color:#FE4A49;">Regional Total</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(No_of_CBFMA) FROM Status_of_Community_Resource_Management_Framework") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(No_of_CBFMA)']); ?></td><?php } ?>

        <?php
            $result = mysqli_query($conn,"SELECT sum(CBFMA_With_No_CRMF) FROM Status_of_Community_Resource_Management_Framework") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(CBFMA_With_No_CRMF)']); ?></td><?php } ?>

        <?php
            $result = mysqli_query($conn,"SELECT sum(CBFMA_With_CRMF_Needs_Updating) FROM Status_of_Community_Resource_Management_Framework") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(CBFMA_With_CRMF_Needs_Updating)']); ?></td><?php } ?>

        <?php
            $result = mysqli_query($conn,"SELECT sum(CBFMA_With_Updated_CRMF) FROM Status_of_Community_Resource_Management_Framework") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(CBFMA_With_Updated_CRMF)']); ?></td><?php } ?>

          <?php
            $result = mysqli_query($conn,"SELECT sum(CBFMA_With_Affirmed_CRMF) FROM Status_of_Community_Resource_Management_Framework") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(CBFMA_With_Affirmed_CRMF)']); ?></td><?php } ?>      

    </tr>


    <tr>
        <td>Bukidnon</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(No_of_CBFMA) FROM Status_of_Community_Resource_Management_Framework where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(No_of_CBFMA)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(CBFMA_With_No_CRMF) FROM Status_of_Community_Resource_Management_Framework where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(CBFMA_With_No_CRMF)']); ?></td><?php } ?>

        <?php
            $result = mysqli_query($conn,"SELECT sum(CBFMA_With_CRMF_Needs_Updating) FROM Status_of_Community_Resource_Management_Framework where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(CBFMA_With_CRMF_Needs_Updating)']); ?></td><?php } ?>

        <?php
            $result = mysqli_query($conn,"SELECT sum(CBFMA_With_Updated_CRMF) FROM Status_of_Community_Resource_Management_Framework where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(CBFMA_With_Updated_CRMF)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(CBFMA_With_Affirmed_CRMF) FROM Status_of_Community_Resource_Management_Framework where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(CBFMA_With_Affirmed_CRMF)']); ?></td><?php } ?>


    </tr>

    <tr>
        <td>Camiguin </td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(No_of_CBFMA) FROM Status_of_Community_Resource_Management_Framework where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(No_of_CBFMA)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(CBFMA_With_No_CRMF) FROM Status_of_Community_Resource_Management_Framework where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(CBFMA_With_No_CRMF)']); ?></td><?php } ?>

        <?php
            $result = mysqli_query($conn,"SELECT sum(CBFMA_With_CRMF_Needs_Updating) FROM Status_of_Community_Resource_Management_Framework where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(CBFMA_With_CRMF_Needs_Updating)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(CBFMA_With_Updated_CRMF) FROM Status_of_Community_Resource_Management_Framework where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(CBFMA_With_Updated_CRMF)']); ?></td><?php } ?>

        <?php
            $result = mysqli_query($conn,"SELECT sum(CBFMA_With_Affirmed_CRMF) FROM Status_of_Community_Resource_Management_Framework where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(CBFMA_With_Affirmed_CRMF)']); ?></td><?php } ?>


    </tr>
 

     <tr>
        <td>Lanao del Norte</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(No_of_CBFMA) FROM Status_of_Community_Resource_Management_Framework where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(No_of_CBFMA)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(CBFMA_With_No_CRMF) FROM Status_of_Community_Resource_Management_Framework  where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(CBFMA_With_No_CRMF)']); ?></td><?php } ?>

        <?php
            $result = mysqli_query($conn,"SELECT sum(CBFMA_With_CRMF_Needs_Updating) FROM Status_of_Community_Resource_Management_Framework where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(CBFMA_With_CRMF_Needs_Updating)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(CBFMA_With_Updated_CRMF) FROM Status_of_Community_Resource_Management_Framework  where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(CBFMA_With_Updated_CRMF)']); ?></td><?php } ?>

        <?php
            $result = mysqli_query($conn,"SELECT sum(CBFMA_With_Affirmed_CRMF) FROM Status_of_Community_Resource_Management_Framework  where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(CBFMA_With_Affirmed_CRMF)']); ?></td><?php } ?>





    </tr>
 
     <tr>
        <td>Misamis Occidental</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(No_of_CBFMA) FROM Status_of_Community_Resource_Management_Framework where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(No_of_CBFMA)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(CBFMA_With_No_CRMF) FROM Status_of_Community_Resource_Management_Framework where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(CBFMA_With_No_CRMF)']); ?></td><?php } ?>


        <?php
            $result = mysqli_query($conn,"SELECT sum(CBFMA_With_CRMF_Needs_Updating) FROM Status_of_Community_Resource_Management_Framework where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(CBFMA_With_CRMF_Needs_Updating)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(CBFMA_With_Updated_CRMF) FROM Status_of_Community_Resource_Management_Framework where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(CBFMA_With_Updated_CRMF)']); ?></td><?php } ?>


        <?php
            $result = mysqli_query($conn,"SELECT sum(CBFMA_With_Affirmed_CRMF) FROM Status_of_Community_Resource_Management_Framework where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(CBFMA_With_Affirmed_CRMF)']); ?></td><?php } ?>

    </tr>


     <tr>
        <td>Misamis Oriental</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(No_of_CBFMA) FROM Status_of_Community_Resource_Management_Framework where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(No_of_CBFMA)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(CBFMA_With_No_CRMF) FROM Status_of_Community_Resource_Management_Framework where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
          <td style="font-weight: bold;"><?php echo number_format($rows['sum(CBFMA_With_No_CRMF)']); ?></td><?php } ?>

        <?php
            $result = mysqli_query($conn,"SELECT sum(CBFMA_With_CRMF_Needs_Updating) FROM Status_of_Community_Resource_Management_Framework where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(CBFMA_With_CRMF_Needs_Updating)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(CBFMA_With_Updated_CRMF) FROM Status_of_Community_Resource_Management_Framework where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
          <td style="font-weight: bold;"><?php echo number_format($rows['sum(CBFMA_With_Updated_CRMF)']); ?></td><?php } ?>


        <?php
            $result = mysqli_query($conn,"SELECT sum(CBFMA_With_Affirmed_CRMF) FROM Status_of_Community_Resource_Management_Framework where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
          <td style="font-weight: bold;"><?php echo number_format($rows['sum(CBFMA_With_Affirmed_CRMF)']); ?></td><?php } ?>


    </tr>

    </tbody>
  </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:#FE4A49; color: white;">Close</button>
        </div>
      </div>
      
    </div>
  </div>



   <div class="modal fade" id="tbl55-total" role="dialog">
    <div class="modal-dialog modal-md">    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="letter-spacing:1px;"><span class="fa fa-calculator"></span> Total records</h4>
        </div>
        <div class="modal-body">
        <table class="table">
    <thead>
        <tr>
            <th><small>Province</small></th>
            <th style="color:#FE4A49;">Forest Rangers (No.)</th>
            <th style="color:#FE4A49;">Teams (No.)</th>
       
        </tr>
    </thead>
  <tbody>
    <tr>
        <td>Bukidnon</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(forest_rangers_no) FROM number_of_forest_ranger where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(forest_rangers_no)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(teams_no) FROM number_of_forest_ranger where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(teams_no)']); ?></td><?php } ?>
    </tr>

    <tr>
        <td>Camiguin </td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(forest_rangers_no) FROM number_of_forest_ranger where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(forest_rangers_no)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(teams_no) FROM number_of_forest_ranger where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(teams_no)']); ?></td><?php } ?>

    </tr>
 

     <tr>
        <td>Lanao del Norte</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(forest_rangers_no) FROM number_of_forest_ranger where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(forest_rangers_no)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(teams_no) FROM number_of_forest_ranger  where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(teams_no)']); ?></td><?php } ?>

    </tr>
 
     <tr>
        <td>Misamis Occidental</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(forest_rangers_no) FROM number_of_forest_ranger where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(forest_rangers_no)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(teams_no) FROM number_of_forest_ranger where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(teams_no)']); ?></td><?php } ?>

    </tr>


     <tr>
        <td>Misamis Oriental</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(forest_rangers_no) FROM number_of_forest_ranger where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(forest_rangers_no)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(teams_no) FROM number_of_forest_ranger where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
          <td style="font-weight: bold;"><?php echo number_format($rows['sum(teams_no)']); ?></td><?php } ?>
    </tr>

    </tbody>
  </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:#FE4A49; color: white;">Close</button>
        </div>
      </div>
      
    </div>
  </div>







   <div class="modal fade" id="tbl61-total" role="dialog">
    <div class="modal-dialog modal-md">    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="letter-spacing:1px;"><span class="fa fa-calculator"></span> Total records</h4>
        </div>
        <div class="modal-body">
        <table class="table">
    <thead>
        <tr>
            <th><small></small></th>
            <th style="color:#FE4A49;">No. of CWR/WFP</th>
           
       
        </tr>
    </thead>
  <tbody>
    <tr class="active">
      <td >Regional Total </td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(No_of_CWR_WFP) FROM Summary_of_CWR_Monitored") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(No_of_CWR_WFP)']); ?></td><?php } ?>
    </tr>

    <tr>
        <td>Bukidnon</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(No_of_CWR_WFP) FROM Summary_of_CWR_Monitored where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(No_of_CWR_WFP)']); ?></td><?php } ?>
   
    </tr>

    <tr>
        <td>Camiguin </td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(No_of_CWR_WFP) FROM Summary_of_CWR_Monitored where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(No_of_CWR_WFP)']); ?></td><?php } ?>
  

    </tr>
 

     <tr>
        <td>Lanao del Norte</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(No_of_CWR_WFP) FROM Summary_of_CWR_Monitored where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(No_of_CWR_WFP)']); ?></td><?php } ?>
 

    </tr>
 
     <tr>
        <td>Misamis Occidental</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(No_of_CWR_WFP) FROM Summary_of_CWR_Monitored where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(No_of_CWR_WFP)']); ?></td><?php } ?>


    </tr>


     <tr>
        <td>Misamis Oriental</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(No_of_CWR_WFP) FROM Summary_of_CWR_Monitored where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(No_of_CWR_WFP)']); ?></td><?php } ?>

    </tr>

    </tbody>
  </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:#FE4A49; color: white;">Close</button>
        </div>
      </div>
      
    </div>
  </div>






   <div class="modal fade" id="tbl56-total" role="dialog">
    <div class="modal-dialog modal-md">    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="letter-spacing:1px;"><span class="fa fa-calculator"></span> Total records</h4>
        </div>
        <div class="modal-body">
        <table class="table">
    <thead>
        <tr>
            <th><small>Province</small></th>
            <th style="color:#FE4A49;">No. of Incidents</th>
  
       
        </tr>
    </thead>
  <tbody>
    <tr>
        <td>Bukidnon</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(No_of_Incidents) FROM number_of_incidents_on_apprehended where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(No_of_Incidents)']); ?></td><?php } ?>
       
    </tr>

    <tr>
        <td>Camiguin </td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(No_of_Incidents) FROM number_of_incidents_on_apprehended where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(No_of_Incidents)']); ?></td><?php } ?>
       

    </tr>
 

     <tr>
        <td>Lanao del Norte</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(No_of_Incidents) FROM number_of_incidents_on_apprehended where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(No_of_Incidents)']); ?></td><?php } ?>
     

    </tr>
 
     <tr>
        <td>Misamis Occidental</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(No_of_Incidents) FROM number_of_incidents_on_apprehended where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(No_of_Incidents)']); ?></td><?php } ?>


    </tr>


     <tr>
        <td>Misamis Oriental</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(No_of_Incidents) FROM number_of_incidents_on_apprehended where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(No_of_Incidents)']); ?></td><?php } ?>
    
    </tr>

    </tbody>
  </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:#FE4A49; color: white;">Close</button>
        </div>
      </div>
      
    </div>
  </div>



   <div class="modal fade" id="tbl25-total" role="dialog">
    <div class="modal-dialog modal-md">    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="letter-spacing:1px;"><span class="fa fa-calculator"></span> Regional Total </h4>
        </div>
        <div class="modal-body">
        <table class="table">
    <thead>
        <tr>
          
            <th style="color:#FE4A49;">No. of CFBMA Holders</th>
            <th style="color:#FE4A49;">Area (ha)</th>
  
       
        </tr>
    </thead>
  <tbody>
    <tr>
       
        <?php
            $result = mysqli_query($conn,"SELECT sum(No_cbfma) FROM existing_cfbma") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(No_cbfma)']); ?></td><?php } ?>

        <?php
            $result = mysqli_query($conn,"SELECT sum(Area_ha) FROM existing_cfbma") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(Area_ha)']); ?></td><?php } ?>
       
    </tr>


 


    </tbody>
  </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:#FE4A49; color: white;">Close</button>
        </div>
      </div>
      
    </div>
  </div>



   <div class="modal fade" id="tbl26-total" role="dialog">
    <div class="modal-dialog modal-md">    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="letter-spacing:1px;"><span class="fa fa-calculator"></span> Regional Total </h4>
        </div>
        <div class="modal-body">
        <table class="table">
    <thead>
        <tr>
          
            <th style="color:#FE4A49;">Regional Total</th>
        
  
       
        </tr>
    </thead>
  <tbody>
    <tr>
       
        <td style="font-weight:bold;">Area (ha)</td>

        <?php
            $result = mysqli_query($conn,"SELECT sum(Area_ha) FROM existing_flgla") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(Area_ha)']); ?></td><?php } ?>
       
    </tr>


 


    </tbody>
  </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:#FE4A49; color: white;">Close</button>
        </div>
      </div>
      
    </div>
  </div>





   <div class="modal fade" id="tbl27-total" role="dialog">
    <div class="modal-dialog modal-md">    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="letter-spacing:1px;"><span class="fa fa-calculator"></span> Regional Total </h4>
        </div>
        <div class="modal-body">
        <table class="table">
    <thead>
        <tr>
          
            <th style="color:#FE4A49;">Regional Total</th>
        
  
       
        </tr>
    </thead>
  <tbody>
    <tr>
       
        <td style="font-weight:bold;">Area (ha)</td>

        <?php
            $result = mysqli_query($conn,"SELECT sum(Area_ha) FROM existing_flgma") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(Area_ha)']); ?></td><?php } ?>
       
    </tr>
    </tbody>
  </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:#FE4A49; color: white;">Close</button>
        </div>
      </div>
      
    </div>
  </div>


   <div class="modal fade" id="tbl28-total" role="dialog">
    <div class="modal-dialog modal-md">    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="letter-spacing:1px;"><span class="fa fa-calculator"></span> Regional Total </h4>
        </div>
        <div class="modal-body">
        <table class="table">
    <thead>
        <tr>
            <th style="color:#FE4A49;">Regional Total</th>
            <th></th>
        </tr>
    </thead>
  <tbody>
    <tr>
        <td style="font-weight:bold;">Area (ha)</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Area_ha) FROM existing_industrial_forest_management_area") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(Area_ha)']); ?></td><?php } ?>   
    </tr>
    <tr>
        <td style="font-weight:bold;">Area Planted (ha)</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Area_planted_ha) FROM existing_industrial_forest_management_area") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(Area_planted_ha)']); ?></td><?php } ?>   
    </tr>
    </tbody>
  </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:#FE4A49; color: white;">Close</button>
        </div>
      </div>
      
    </div>
  </div>



   <div class="modal fade" id="tbl57-total" role="dialog">
    <div class="modal-dialog modal-md">    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="letter-spacing:1px;"><span class="fa fa-calculator"></span> Total records</h4>
        </div>
        <div class="modal-body">
        <table class="table">
    <thead>
        <tr>
            <th><small></small></th>
            <th style="color:#FE4A49;">Total Number of Waterbodies</th>
  
       
        </tr>
    </thead>
  <tbody>
    <tr>
        <td>No. of Waterbodies</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(no_of_waterbodies) FROM number_of_waterbodies") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(no_of_waterbodies)']); ?></td><?php } ?>
       
    </tr>

    <tr>
        <td>No. Classified Waterbodies </td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(no_classified_waterbodies) FROM number_of_waterbodies") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(no_classified_waterbodies)']); ?></td><?php } ?>
       

    </tr>
 

     <tr>
        <td>No. of Unclassified Waterbodies</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(no_of_unclassified_waterbodies) FROM number_of_waterbodies") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(no_of_unclassified_waterbodies)']); ?></td><?php } ?>
     

    </tr>
 


    </tbody>
  </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:#FE4A49; color: white;">Close</button>
        </div>
      </div>
      
    </div>
  </div>


   <div class="modal fade" id="tbl58-total" role="dialog">
    <div class="modal-dialog modal-md">    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="letter-spacing:1px;"><span class="fa fa-calculator"></span> Total records</h4>
        </div>
        <div class="modal-body">
        <table class="table">
    <thead>
        <tr>
            <th><small></small></th>
            <th style="color:#FE4A49;">Proclaimed Protected Areas under E-NIPAS</th>
  
       
        </tr>
    </thead>
  <tbody>
    <tr>
        <td>E-NIPAS Area (ha)</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(E_NIPAS_Area_ha) FROM proclaimed_propected_areas_under") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(E_NIPAS_Area_ha)']); ?></td><?php } ?>
       
    </tr>

    <tr>
        <td>PASA Area (ha)</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(PASA_Area_ha) FROM proclaimed_propected_areas_under") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(PASA_Area_ha)']); ?></td><?php } ?>
       

    </tr>
 

     <tr>
        <td>Terrestrial (ha)</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Terrestrial_ha) FROM proclaimed_propected_areas_under") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(Terrestrial_ha)']); ?></td><?php } ?>
    </tr>

      <tr>
        <td>Seascape (ha)</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Seascape_ha) FROM proclaimed_propected_areas_under") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(Seascape_ha)']); ?></td><?php } ?>
    </tr>

      <tr>
        <td>Mangroves (ha)</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Mangroves_ha) FROM proclaimed_propected_areas_under") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(Mangroves_ha)']); ?></td><?php } ?>
    </tr>

      <tr>
        <td>Forestland (ha)</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Forestland_ha) FROM proclaimed_propected_areas_under") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(Forestland_ha)']); ?></td><?php } ?>
    </tr>

      <tr>
        <td>Lakes (ha)</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Lakes_ha) FROM proclaimed_propected_areas_under") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(Lakes_ha)']); ?></td><?php } ?>
    </tr>

      <tr>
        <td>Rivers (ha)</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Rivers_ha) FROM proclaimed_propected_areas_under") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(Rivers_ha)']); ?></td><?php } ?>
    </tr>

    </tbody>
  </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:#FE4A49; color: white;">Close</button>
        </div>
      </div>
      
    </div>
  </div>






   <div class="modal fade" id="tbl39-total" role="dialog">
    <div class="modal-dialog modal-md">    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="letter-spacing:1px;"><span class="fa fa-calculator"></span> Total records</h4>
        </div>
        <div class="modal-body">
        <table class="table">
    <thead>
        <tr>
            <th><small>Province</small></th>
            <th style="color:#FE4A49;">No. of CWR Holders</th>

       
        </tr>
    </thead>
  <tbody>
    <tr class="active">
        <td>Regional Total</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(No_of_CWR_holders) FROM Inventory_of_CWR_Monitored") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(No_of_CWR_holders)']); ?></td><?php } ?>
    </tr>


    <tr>
        <td>Bukidnon</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(No_of_CWR_holders) FROM Inventory_of_CWR_Monitored where Province='Valencia City' OR Province='Manolo Fortich' OR Province='Don Carlos' OR Province='Talakag' OR Province='Sub-Office Pangantucan' OR Province='Mt. Kitanglad RNP' OR Province='Mt. Kalatungan RNP' OR Province='Mt. Pantaron' OR Province='Mt. Tago RNP' OR Province='BFI' OR Province='Hineleban Foundation'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(No_of_CWR_holders)']); ?></td><?php } ?>
    </tr>

    <tr>
        <td>Camiguin </td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(No_of_CWR_holders) FROM Inventory_of_CWR_Monitored where Province='Non-PA' OR Province='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(No_of_CWR_holders)']); ?></td><?php } ?>
     

    </tr>
 

     <tr>
        <td>Lanao del Norte</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(No_of_CWR_holders) FROM Inventory_of_CWR_Monitored where Province='Iligan City' OR Province='CENRO Kolambugan' OR Province='Siad Hindang' OR Province='Siad Nunungan' OR Province='Mt. Inayawan RNP' OR Province='Bacolod Kauswagan PLS' OR Province='Lake Lanao WPDP'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(No_of_CWR_holders)']); ?></td><?php } ?>
     

    </tr>
 
     <tr>
        <td>Misamis Occidental</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(No_of_CWR_holders) FROM Inventory_of_CWR_Monitored where Province='CENRO Ozamiz City' OR Province='CENRO Oroquieta City' OR Province='Mt. Malindang RNP' OR Province='Mt. Baliangao PLS'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(No_of_CWR_holders)']); ?></td><?php } ?>
  

    </tr>


     <tr>
        <td>Misamis Oriental</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(No_of_CWR_holders) FROM Inventory_of_CWR_Monitored where Province='CENRO Initao' OR Province='CENRO Gingoog City' OR Province='Mt. Balatukan' OR Province='Mimbilisan' OR Province='Initao Libertad'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(No_of_CWR_holders)']); ?></td><?php } ?>

    </tr>

    </tbody>
  </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:#FE4A49; color: white;">Close</button>
        </div>
      </div>
      
    </div>
  </div>




















   <div class="modal fade" id="tbl10-total" role="dialog">
    <div class="modal-dialog" style="width:1100px;">    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="letter-spacing:1px;"><span class="fa fa-calculator"></span> Total records</h4>
        </div>
        <div class="modal-body">
        <table class="table">
    <thead>
        <tr>
            <th><small>Province</small></th>
            <th style="color:#FE4A49;">For Renewal Renewed</th>
            <th style="color:#FE4A49;">For Re-Evaluation</th>
            <th style="color:#FE4A49;">For Transfer</th>
            <th style="color:#FE4A49;">For Cancellation</th>
            <th style="color:#FE4A49;">Total</th>
            <th style="color:#FE4A49;">Area (ha)</th>
        </tr>
    </thead>
  <tbody>


    <tr class="active">
        <td style="font-weight:bold;">Regional Total</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(For_Renewal_Renewed) FROM CSC_outside_CBFMA") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(For_Renewal_Renewed)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(For_ReEvaluation) FROM CSC_outside_CBFMA") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(For_ReEvaluation)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(For_Transfer) FROM CSC_outside_CBFMA") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(For_Transfer)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(For_Cancellation) FROM CSC_outside_CBFMA") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(For_Cancellation)']); ?></td><?php } ?>

        <?php
            $result = mysqli_query($conn,"SELECT sum(Total) FROM CSC_outside_CBFMA") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(Total)']); ?></td><?php } ?>

        <?php
            $result = mysqli_query($conn,"SELECT sum(area_ha) FROM CSC_outside_CBFMA") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(area_ha)']); ?></td><?php } ?>
    </tr>



    <tr>
        <td>Bukidnon</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(For_Renewal_Renewed) FROM CSC_outside_CBFMA where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(For_Renewal_Renewed)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(For_ReEvaluation) FROM CSC_outside_CBFMA where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(For_ReEvaluation)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(For_Transfer) FROM CSC_outside_CBFMA where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(For_Transfer)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(For_Cancellation) FROM CSC_outside_CBFMA where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(For_Cancellation)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Total) FROM CSC_outside_CBFMA where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(Total)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(area_ha) FROM CSC_outside_CBFMA where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(area_ha)']); ?></td><?php } ?>
    </tr>

    <tr>
        <td>Camiguin </td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(For_Renewal_Renewed) FROM CSC_outside_CBFMA where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(For_Renewal_Renewed)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(For_ReEvaluation) FROM CSC_outside_CBFMA where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(For_ReEvaluation)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(For_Transfer) FROM CSC_outside_CBFMA where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(For_Transfer)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(For_Cancellation) FROM CSC_outside_CBFMA where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(For_Cancellation)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Total) FROM CSC_outside_CBFMA where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(Total)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(area_ha) FROM CSC_outside_CBFMA where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(area_ha)']); ?></td><?php } ?>
    </tr>
 

     <tr>
        <td>Lanao del Norte</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(For_Renewal_Renewed) FROM CSC_outside_CBFMA where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(For_Renewal_Renewed)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(For_ReEvaluation) FROM CSC_outside_CBFMA  where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(For_ReEvaluation)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(For_Transfer) FROM CSC_outside_CBFMA  where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(For_Transfer)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(For_Cancellation) FROM CSC_outside_CBFMA  where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(For_Cancellation)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Total) FROM CSC_outside_CBFMA  where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(Total)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(area_ha) FROM CSC_outside_CBFMA  where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(area_ha)']); ?></td><?php } ?>
    </tr>
 
     <tr>
        <td>Misamis Occidental</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(For_Renewal_Renewed) FROM CSC_outside_CBFMA where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(For_Renewal_Renewed)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(For_ReEvaluation) FROM CSC_outside_CBFMA where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(For_ReEvaluation)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(For_Transfer) FROM CSC_outside_CBFMA where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(For_Transfer)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(For_Cancellation) FROM CSC_outside_CBFMA where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(For_Cancellation)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Total) FROM CSC_outside_CBFMA where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(Total)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(area_ha) FROM CSC_outside_CBFMA where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(area_ha)']); ?></td><?php } ?>
    </tr>


     <tr>
        <td>Misamis Oriental</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(For_Renewal_Renewed) FROM CSC_outside_CBFMA where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(For_Renewal_Renewed)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(For_ReEvaluation) FROM CSC_outside_CBFMA where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(For_ReEvaluation)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(For_Transfer) FROM CSC_outside_CBFMA where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(For_Transfer)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(For_Cancellation) FROM CSC_outside_CBFMA where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(For_Cancellation)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Total) FROM CSC_outside_CBFMA where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(Total)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(area_ha) FROM CSC_outside_CBFMA where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(area_ha)']); ?></td><?php } ?>
    </tr>

    </tbody>
  </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:#FE4A49; color: white;">Close</button>
        </div>
      </div>
      
    </div>
  </div>






   <div class="modal fade" id="tbl11-total" role="dialog">
    <div class="modal-dialog" style="width:1100px;">    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="letter-spacing:1px;"><span class="fa fa-calculator"></span> Total records</h4>
        </div>
        <div class="modal-body">
        <table class="table">
    <thead>
        <tr>
            <th><small>Province</small></th>
            <th style="color:#FE4A49;">For Renewal Renewed</th>
            <th style="color:#FE4A49;">For Re-Evaluation</th>
            <th style="color:#FE4A49;">For Transfer</th>
            <th style="color:#FE4A49;">For Cancellation</th>
            <th style="color:#FE4A49;">Total</th>
            <th style="color:#FE4A49;">Area (ha)</th>
        </tr>
    </thead>
  <tbody>


    <tr class="active">
        <td style="font-weight:bold;">Regional Total</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(For_Renewal_Renewed) FROM csc_within_cbfma") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(For_Renewal_Renewed)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(For_ReEvaluation) FROM csc_within_cbfma") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(For_ReEvaluation)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(For_Transfer) FROM csc_within_cbfma") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(For_Transfer)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(For_Cancellation) FROM csc_within_cbfma") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(For_Cancellation)']); ?></td><?php } ?>

        <?php
            $result = mysqli_query($conn,"SELECT sum(Total) FROM csc_within_cbfma") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(Total)']); ?></td><?php } ?>

        <?php
            $result = mysqli_query($conn,"SELECT sum(area_ha) FROM csc_within_cbfma") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(area_ha)']); ?></td><?php } ?>
    </tr>



    <tr>
        <td>Bukidnon</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(For_Renewal_Renewed) FROM csc_within_cbfma where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(For_Renewal_Renewed)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(For_ReEvaluation) FROM csc_within_cbfma where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(For_ReEvaluation)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(For_Transfer) FROM csc_within_cbfma where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(For_Transfer)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(For_Cancellation) FROM csc_within_cbfma where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(For_Cancellation)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Total) FROM csc_within_cbfma where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(Total)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(area_ha) FROM csc_within_cbfma where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(area_ha)']); ?></td><?php } ?>
    </tr>

    <tr>
        <td>Camiguin </td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(For_Renewal_Renewed) FROM csc_within_cbfma where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(For_Renewal_Renewed)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(For_ReEvaluation) FROM csc_within_cbfma where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(For_ReEvaluation)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(For_Transfer) FROM csc_within_cbfma where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(For_Transfer)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(For_Cancellation) FROM csc_within_cbfma where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(For_Cancellation)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Total) FROM csc_within_cbfma where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(Total)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(area_ha) FROM csc_within_cbfma where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(area_ha)']); ?></td><?php } ?>
    </tr>
 

     <tr>
        <td>Lanao del Norte</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(For_Renewal_Renewed) FROM csc_within_cbfma where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(For_Renewal_Renewed)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(For_ReEvaluation) FROM csc_within_cbfma  where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(For_ReEvaluation)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(For_Transfer) FROM csc_within_cbfma  where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(For_Transfer)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(For_Cancellation) FROM csc_within_cbfma  where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(For_Cancellation)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Total) FROM csc_within_cbfma  where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(Total)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(area_ha) FROM csc_within_cbfma  where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(area_ha)']); ?></td><?php } ?>
    </tr>
 
     <tr>
        <td>Misamis Occidental</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(For_Renewal_Renewed) FROM csc_within_cbfma where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(For_Renewal_Renewed)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(For_ReEvaluation) FROM csc_within_cbfma where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(For_ReEvaluation)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(For_Transfer) FROM csc_within_cbfma where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(For_Transfer)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(For_Cancellation) FROM csc_within_cbfma where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(For_Cancellation)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Total) FROM csc_within_cbfma where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(Total)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(area_ha) FROM csc_within_cbfma where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(area_ha)']); ?></td><?php } ?>
    </tr>


     <tr>
        <td>Misamis Oriental</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(For_Renewal_Renewed) FROM csc_within_cbfma where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(For_Renewal_Renewed)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(For_ReEvaluation) FROM csc_within_cbfma where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(For_ReEvaluation)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(For_Transfer) FROM csc_within_cbfma where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(For_Transfer)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(For_Cancellation) FROM csc_within_cbfma where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(For_Cancellation)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Total) FROM csc_within_cbfma where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(Total)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(area_ha) FROM csc_within_cbfma where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(area_ha)']); ?></td><?php } ?>
    </tr>

    </tbody>
  </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:#FE4A49; color: white;">Close</button>
        </div>
      </div>
      
    </div>
  </div>






    <div class="modal fade"  id="tbl12-total" role="dialog">
     <div class="modal-dialog" style="width:1200px;">    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="letter-spacing:1px;"><span class="fa fa-calculator"></span> Total records</h4>
        </div>
        <div class="modal-body">
        <table class="table">
    <thead>
        <tr>
            <th><small>Province</small></th>
            <th style="color:#FE4A49;">Within CBFM Area No.</th>
            <th style="color:#FE4A49;">Within CBFM Area (ha)</th>
            <th style="color:#FE4A49;">DENR Jurisdiction No.</th>
            <th style="color:#FE4A49;">DENR Jurisdiction Area (ha)</th>
            <th style="color:#FE4A49;">Devolved to LGUs No.</th>
            <th style="color:#FE4A49;">Devolved to LGUs Area (ha)</th>
            <th style="color:#FE4A49;">Total No.</th>
            <th style="color:#FE4A49;">Total Area (ha)</th>
        </tr>
    </thead>
  <tbody>


    <tr class="active">
        <td style="font-weight:bold;">Regional Total</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Within_CBFM_Area_No) FROM csc_issued") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(Within_CBFM_Area_No)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Within_CBFM_Area_ha) FROM csc_issued") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(Within_CBFM_Area_ha)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(DENR_Jurisdiction_Area_No) FROM csc_issued") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(DENR_Jurisdiction_Area_No)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(DENR_Jurisdiction_ha) FROM csc_issued") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(DENR_Jurisdiction_ha)']); ?></td><?php } ?>

        <?php
            $result = mysqli_query($conn,"SELECT sum(Devolved_to_LGUs_No) FROM csc_issued") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(Devolved_to_LGUs_No)']); ?></td><?php } ?>

        <?php
            $result = mysqli_query($conn,"SELECT sum(Devolved_to_LGUs_ha) FROM csc_issued") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(Devolved_to_LGUs_ha)']); ?></td><?php } ?>

        <?php
            $result = mysqli_query($conn,"SELECT sum(Total_no) FROM csc_issued") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(Total_no)']); ?></td><?php } ?>

        <?php
            $result = mysqli_query($conn,"SELECT sum(Total_area_ha) FROM csc_issued") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(Total_area_ha)']); ?></td><?php } ?>
    </tr>



    <tr>
        <td>Bukidnon</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Within_CBFM_Area_No) FROM csc_issued where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(Within_CBFM_Area_No)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Within_CBFM_Area_ha) FROM csc_issued where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(Within_CBFM_Area_ha)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(DENR_Jurisdiction_Area_No) FROM csc_issued where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(DENR_Jurisdiction_Area_No)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(DENR_Jurisdiction_ha) FROM csc_issued where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(DENR_Jurisdiction_ha)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Devolved_to_LGUs_No) FROM csc_issued where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(Devolved_to_LGUs_No)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Devolved_to_LGUs_ha) FROM csc_issued where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(Devolved_to_LGUs_ha)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Total_no) FROM csc_issued where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(Total_no)']); ?></td><?php } ?>
          <?php
            $result = mysqli_query($conn,"SELECT sum(Total_area_ha) FROM csc_issued where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(Total_area_ha)']); ?></td><?php } ?>
    </tr>

    <tr>
        <td>Camiguin </td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Within_CBFM_Area_No) FROM csc_issued where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(Within_CBFM_Area_No)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Within_CBFM_Area_ha) FROM csc_issued where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(Within_CBFM_Area_ha)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(DENR_Jurisdiction_Area_No) FROM csc_issued where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(DENR_Jurisdiction_Area_No)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(DENR_Jurisdiction_ha) FROM csc_issued where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(DENR_Jurisdiction_ha)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Devolved_to_LGUs_No) FROM csc_issued where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(Devolved_to_LGUs_No)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Devolved_to_LGUs_ha) FROM csc_issued where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(Devolved_to_LGUs_ha)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Total_no) FROM csc_issued where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(Total_no)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Total_area_ha) FROM csc_issued where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?>         
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(Total_area_ha)']); ?></td><?php } ?>
    </tr>
 

     <tr>
        <td>Lanao del Norte</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Within_CBFM_Area_No) FROM csc_issued where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(Within_CBFM_Area_No)']); ?></td><?php } ?>

        <?php
            $result = mysqli_query($conn,"SELECT sum(Within_CBFM_Area_ha) FROM csc_issued where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(Within_CBFM_Area_ha)']); ?></td><?php } ?>

        <?php
            $result = mysqli_query($conn,"SELECT sum(DENR_Jurisdiction_Area_No) FROM csc_issued where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(DENR_Jurisdiction_Area_No)']); ?></td><?php } ?>

        <?php
            $result = mysqli_query($conn,"SELECT sum(DENR_Jurisdiction_ha) FROM csc_issued where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(DENR_Jurisdiction_ha)']); ?></td><?php } ?>

        <?php
            $result = mysqli_query($conn,"SELECT sum(Devolved_to_LGUs_No) FROM csc_issued where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(Devolved_to_LGUs_No)']); ?></td><?php } ?>

        <?php
            $result = mysqli_query($conn,"SELECT sum(Devolved_to_LGUs_ha) FROM csc_issued where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(Devolved_to_LGUs_ha)']); ?></td><?php } ?>

        <?php
            $result = mysqli_query($conn,"SELECT sum(Total_no) FROM csc_issued where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(Total_no)']); ?></td><?php } ?>

        <?php
            $result = mysqli_query($conn,"SELECT sum(Total_area_ha) FROM csc_issued where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(Total_area_ha)']); ?></td><?php } ?>


    </tr>
 
     <tr>
        <td>Misamis Occidental</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Within_CBFM_Area_No) FROM csc_issued where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(Within_CBFM_Area_No)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Within_CBFM_Area_ha) FROM csc_issued where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(Within_CBFM_Area_ha)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(DENR_Jurisdiction_Area_No) FROM csc_issued where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(DENR_Jurisdiction_Area_No)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(DENR_Jurisdiction_ha) FROM csc_issued where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(DENR_Jurisdiction_ha)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Devolved_to_LGUs_No) FROM csc_issued where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(Devolved_to_LGUs_No)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Devolved_to_LGUs_ha) FROM csc_issued where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(Devolved_to_LGUs_ha)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Total_no) FROM csc_issued where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(Total_no)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Total_area_ha) FROM csc_issued where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(Total_area_ha)']); ?></td><?php } ?>

    </tr>


     <tr>
        <td>Misamis Oriental</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Within_CBFM_Area_No) FROM csc_issued where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(Within_CBFM_Area_No)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Within_CBFM_Area_ha) FROM csc_issued where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(Within_CBFM_Area_ha)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(DENR_Jurisdiction_Area_No) FROM csc_issued where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(DENR_Jurisdiction_Area_No)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(DENR_Jurisdiction_ha) FROM csc_issued where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(DENR_Jurisdiction_ha)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Devolved_to_LGUs_No) FROM csc_issued where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(Devolved_to_LGUs_No)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Devolved_to_LGUs_ha) FROM csc_issued where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(Devolved_to_LGUs_ha)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Total_no) FROM csc_issued where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(Total_no)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Total_area_ha) FROM csc_issued where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold;"><?php echo number_format($rows['sum(Total_area_ha)']); ?></td><?php } ?>

    </tr>

    </tbody>
  </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:#FE4A49; color: white;">Close</button>
        </div>
      </div>
      
    </div>
  </div>






<div class="modal fade"  id="tbl44-total" role="dialog">
    <div class="modal-dialog">    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><span class="fa fa-calculator"></span> Total records</h4>
        </div>
        <div class="modal-body">
                  <table class="table table-striped">
    <thead>
      <tr>
        <th style="letter-spacing:1px;">PENROs</th>
        <th style="letter-spacing:1px;">Number of Look-Out Tower</th>

      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Bukidnon</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Number_of_look_out_tower) FROM List_of_checkpoint where Cenro='Valencia City' OR Cenro='Manolo Fortich' OR Cenro='Don Carlos' OR Cenro='Talakag' OR Cenro='Sub-Office Pangantucan' OR Cenro='Mt.Kitanglad RNP' OR Cenro='Mt.Kalatungan RNP' OR Cenro='Mt.Pantaron' OR Cenro='Mt.Tago RNP' OR Cenro='BFI' OR Cenro='Hineleban Foundation'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo ($rows['sum(Number_of_look_out_tower)']); ?></td><?php } ?>
      </tr>
      <tr>
        <td>Camiguin</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Number_of_look_out_tower) FROM List_of_checkpoint where Cenro='Non-PA' OR Cenro='Mt.Timpoong'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo ($rows['sum(Number_of_look_out_tower)']); ?></td><?php } ?>
 
      </tr>
      <tr>
        <td>Lanao Del Norte</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Number_of_look_out_tower) FROM List_of_checkpoint where Cenro='Iligan City' OR Cenro='CENRO Kolambugan' OR Cenro='Siad Hindang' OR Cenro='Siad Nunungan' OR Cenro='Mt.Inayawan' OR Cenro='Bacolod Kauswagan' OR  Cenro='LakeLanao WPDP'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo ($rows['sum(Number_of_look_out_tower)']); ?></td><?php } ?>

      </tr>
      <tr>
        <td>Misamis Occidental</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Number_of_look_out_tower) FROM List_of_checkpoint where Cenro='Ozamiz City' OR Cenro='Oroquieta City' OR Cenro='Mt.Malindang' OR Cenro='Mt.Baliangao'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo ($rows['sum(Number_of_look_out_tower)']); ?></td><?php } ?>
        
      </tr>
      <tr>
        <td>Misamis Oriental</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Number_of_look_out_tower) FROM List_of_checkpoint where Cenro='CENRO Initao' OR Cenro='CENRO GingoogCity' or Cenro='Mt.Balatukan' OR Cenro='Mimbilisan' OR Cenro='Initao Libertad'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:#FE4A49;"><?php echo ($rows['sum(Number_of_look_out_tower)']); ?></td><?php } ?>

      </tr>
    </tbody>
  </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:#FE4A49; color: white;">Close</button>
        </div>
      </div>
      
    </div>
  </div>





<div class="modal fade"  id="tbl53-total" role="dialog">
    <div class="modal-dialog">    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><span class="fa fa-calculator"></span> Total records</h4>
        </div>
        <div class="modal-body">
                  <table class="table table-striped">
    <thead>
      <tr>
        <th style="letter-spacing:1px;">Field's Title</th>
        <th style="letter-spacing:1px;">Field's Total</th>

      </tr>
    </thead>
    <tbody>

      <tr>
        <td>Area (ha)</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(area_ha) FROM ngp_validated_project_sites") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:green;"><?php echo number_format($rows['sum(area_ha)']); ?></td><?php } ?>
 
      </tr>
      <tr>
        <td>No. of Seedlings Validated</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(no_of_seedlings_validated) FROM ngp_validated_project_sites") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:green;"><?php echo number_format($rows['sum(no_of_seedlings_validated)']); ?></td><?php } ?>

      </tr>
      <tr>
        <td>No. of Seedlings Planted</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(no_of_seedlings_planted) FROM ngp_validated_project_sites") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:green;"><?php echo number_format($rows['sum(no_of_seedlings_planted)']); ?></td><?php } ?>
        
      </tr>
      <tr>
        <td>No. of Seedlings Contracted</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(no_of_seedlings_contracted) FROM ngp_validated_project_sites") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:green;"><?php echo number_format($rows['sum(no_of_seedlings_contracted)']); ?></td><?php } ?>
      </tr>
<tr>
  <td>Survival Rate</td>
          <?php
            $result = mysqli_query($conn,"SELECT sum(survival) FROM ngp_validated_project_sites") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
 <td style="font-weight: bold; color:green;"><?php echo number_format($rows['sum(survival)']); echo " (%)"; ?></td><?php } ?>
</tr>



    </tbody>
  </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:#FE4A49; color: white;">Close</button>
        </div>
      </div>
      
    </div>
  </div>

<div class="modal fade"  id="tbl54-total" role="dialog">
    <div class="modal-dialog">    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><span class="fa fa-calculator"></span> Total records</h4>
        </div>
        <div class="modal-body">
                  <table class="table table-striped">
    <thead>
      <tr>
        <th style="letter-spacing:1px;">Field's Status</th>
        <th style="letter-spacing:1px;">No. of MPA's</th>
        <th style="letter-spacing:1px;">Total Area (ha)</th>

      </tr>
    </thead>
    <tbody>

      <tr>
        <td>NIPAS</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(No_of_MPAs) FROM Nipas_and_locally_managed_marine_protected_areas where a_status='NIPAS'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:green;"><?php echo number_format($rows['sum(No_of_MPAs)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(total_area_ha) FROM Nipas_and_locally_managed_marine_protected_areas where a_status='NIPAS'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:green;"><?php echo number_format($rows['sum(total_area_ha)']); ?></td><?php } ?>


      </tr>
      <tr>
        <td>LGU-Managed MPAs</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(No_of_MPAs) FROM Nipas_and_locally_managed_marine_protected_areas where a_status='LGU-Managed MPAs'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:green;"><?php echo number_format($rows['sum(No_of_MPAs)']); ?></td><?php } ?>
        <?php
            $result = mysqli_query($conn,"SELECT sum(total_area_ha) FROM Nipas_and_locally_managed_marine_protected_areas where a_status='LGU-Managed MPAs'") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:green;"><?php echo number_format($rows['sum(total_area_ha)']); ?></td><?php } ?>
      </tr>



    </tbody>
  </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:#FE4A49; color: white;">Close</button>
        </div>
      </div>
      
    </div>
  </div>


<div class="modal fade"  id="tbl24-total" role="dialog">
    <div class="modal-dialog">    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><span class="fa fa-calculator"></span> Total records</h4>
        </div>
        <div class="modal-body">
          <table class="table">

    <tbody>

      <tr>
        <td style="font-weight: bold;">Regional Total </td>
        <td style="font-weight: bold;">Area (ha)</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Area_ha) FROM critical_watersheds") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(Area_ha)']); ?></td><?php } ?>
 
      </tr>
    



    </tbody>
  </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:#FE4A49; color: white;">Close</button>
        </div>
      </div>
      
    </div>
  </div>





<div class="modal fade"  id="tbl20-total" role="dialog">
    <div class="modal-dialog modal-lg">    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><span class="fa fa-calculator"></span> Total records</h4>
        </div>
        <div class="modal-body">

            <table class="table">
              <thead>
                <tr>
                  <th>Province</th>
                  <th>No. of Units</th>
                  <th>Est. Value (P) </th>
                </tr>
              </thead>
              <tbody>
                <tr class="active">
                  <td>Regional Total </td>
                  <?php
                      $result = mysqli_query($conn,"SELECT sum(NoUnits) FROM confiscated_conveyances") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(NoUnits)']); ?></td><?php } ?>

                  <?php
                      $result = mysqli_query($conn,"SELECT sum(EstValue) FROM confiscated_conveyances") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(EstValue)']); ?></td><?php } ?>
                </tr>
                <tr>
                  <td>Bukidnon</td>
                  <?php
                      $result = mysqli_query($conn,"SELECT sum(NoUnits) FROM confiscated_conveyances where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(NoUnits)']); ?></td><?php } ?>

                  <?php
                      $result = mysqli_query($conn,"SELECT sum(EstValue) FROM confiscated_conveyances where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(EstValue)']); ?></td><?php } ?>
                </tr>

                <tr>
                  <td>Camiguin</td>
                  <?php
                      $result = mysqli_query($conn,"SELECT sum(NoUnits) FROM confiscated_conveyances where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(NoUnits)']); ?></td><?php } ?>

                  <?php
                      $result = mysqli_query($conn,"SELECT sum(EstValue) FROM confiscated_conveyances where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(EstValue)']); ?></td><?php } ?>
                </tr>

                <tr>
                  <td>Lanao del Norte </td>
                  <?php
                      $result = mysqli_query($conn,"SELECT sum(NoUnits) FROM confiscated_conveyances where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(NoUnits)']); ?></td><?php } ?>

                  <?php
                      $result = mysqli_query($conn,"SELECT sum(EstValue) FROM confiscated_conveyances where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(EstValue)']); ?></td><?php } ?>
                </tr>

                <tr>
                  <td>Misamis Occidental</td>
                  <?php
                      $result = mysqli_query($conn,"SELECT sum(NoUnits) FROM confiscated_conveyances where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(NoUnits)']); ?></td><?php } ?>

                  <?php
                      $result = mysqli_query($conn,"SELECT sum(EstValue) FROM confiscated_conveyances where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(EstValue)']); ?></td><?php } ?>
                </tr>

                <tr>
                  <td>Misamis Oriental</td>
                  <?php
                      $result = mysqli_query($conn,"SELECT sum(NoUnits) FROM confiscated_conveyances where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(NoUnits)']); ?></td><?php } ?>

                  <?php
                      $result = mysqli_query($conn,"SELECT sum(EstValue) FROM confiscated_conveyances where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(EstValue)']); ?></td><?php } ?>
                </tr>


              </tbody>
            </table>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:#FE4A49; color: white;">Close</button>
        </div>
      </div>
      
    </div>
  </div>


<div class="modal fade"  id="tbl22-total" role="dialog">
    <div class="modal-dialog modal-lg">    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><span class="fa fa-calculator"></span> Total records</h4>
        </div>
        <div class="modal-body">

            <table class="table">
              <thead>
                <tr>
                  <th>Province</th>
                  <th>No. of Units</th>
                  <th>Est. Value (P) </th>
                </tr>
              </thead>
              <tbody>
                <tr class="active">
                  <td>Regional Total </td>
                  <?php
                      $result = mysqli_query($conn,"SELECT sum(NoUnits) FROM confiscated_implements_equipment") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(NoUnits)']); ?></td><?php } ?>

                  <?php
                      $result = mysqli_query($conn,"SELECT sum(EstValue) FROM confiscated_implements_equipment") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(EstValue)']); ?></td><?php } ?>
                </tr>
                <tr>
                  <td>Bukidnon</td>
                  <?php
                      $result = mysqli_query($conn,"SELECT sum(NoUnits) FROM confiscated_implements_equipment where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(NoUnits)']); ?></td><?php } ?>

                  <?php
                      $result = mysqli_query($conn,"SELECT sum(EstValue) FROM confiscated_implements_equipment where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(EstValue)']); ?></td><?php } ?>
                </tr>

                <tr>
                  <td>Camiguin</td>
                  <?php
                      $result = mysqli_query($conn,"SELECT sum(NoUnits) FROM confiscated_implements_equipment where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(NoUnits)']); ?></td><?php } ?>

                  <?php
                      $result = mysqli_query($conn,"SELECT sum(EstValue) FROM confiscated_implements_equipment where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(EstValue)']); ?></td><?php } ?>
                </tr>

                <tr>
                  <td>Lanao del Norte </td>
                  <?php
                      $result = mysqli_query($conn,"SELECT sum(NoUnits) FROM confiscated_implements_equipment where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(NoUnits)']); ?></td><?php } ?>

                  <?php
                      $result = mysqli_query($conn,"SELECT sum(EstValue) FROM confiscated_implements_equipment where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(EstValue)']); ?></td><?php } ?>
                </tr>

                <tr>
                  <td>Misamis Occidental</td>
                  <?php
                      $result = mysqli_query($conn,"SELECT sum(NoUnits) FROM confiscated_implements_equipment where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(NoUnits)']); ?></td><?php } ?>

                  <?php
                      $result = mysqli_query($conn,"SELECT sum(EstValue) FROM confiscated_implements_equipment where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(EstValue)']); ?></td><?php } ?>
                </tr>

                <tr>
                  <td>Misamis Oriental</td>
                  <?php
                      $result = mysqli_query($conn,"SELECT sum(NoUnits) FROM confiscated_implements_equipment where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(NoUnits)']); ?></td><?php } ?>

                  <?php
                      $result = mysqli_query($conn,"SELECT sum(EstValue) FROM confiscated_implements_equipment where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(EstValue)']); ?></td><?php } ?>
                </tr>


              </tbody>
            </table>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:#FE4A49; color: white;">Close</button>
        </div>
      </div>
      
    </div>
  </div>


<div class="modal fade"  id="tbl21-total" role="dialog">
    <div class="modal-dialog modal-lg">    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><span class="fa fa-calculator"></span> Total records</h4>
        </div>
        <div class="modal-body">

            <table class="table">
              <thead>
                <tr>
                  <th>Province</th>
                  <th>Volume (in Board Feet)</th>
                  <th>Est. Value (P) </th>
                </tr>
              </thead>
              <tbody>
                <tr class="active">
                  <td>Regional Total </td>
                  <?php
                      $result = mysqli_query($conn,"SELECT sum(Volume_inBoardFeet) FROM confiscated_forest_products") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(Volume_inBoardFeet)']); ?></td><?php } ?>

                  <?php
                      $result = mysqli_query($conn,"SELECT sum(EstValue) FROM confiscated_forest_products") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(EstValue)']); ?></td><?php } ?>
                </tr>
                <tr>
                  <td>Bukidnon</td>
                  <?php
                      $result = mysqli_query($conn,"SELECT sum(Volume_inBoardFeet) FROM confiscated_forest_products where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(Volume_inBoardFeet)']); ?></td><?php } ?>

                  <?php
                      $result = mysqli_query($conn,"SELECT sum(EstValue) FROM confiscated_forest_products where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(EstValue)']); ?></td><?php } ?>
                </tr>

                <tr>
                  <td>Camiguin</td>
                  <?php
                      $result = mysqli_query($conn,"SELECT sum(Volume_inBoardFeet) FROM confiscated_forest_products where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(Volume_inBoardFeet)']); ?></td><?php } ?>

                  <?php
                      $result = mysqli_query($conn,"SELECT sum(EstValue) FROM confiscated_forest_products where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(EstValue)']); ?></td><?php } ?>
                </tr>

                <tr>
                  <td>Lanao del Norte </td>
                  <?php
                      $result = mysqli_query($conn,"SELECT sum(Volume_inBoardFeet) FROM confiscated_forest_products where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(Volume_inBoardFeet)']); ?></td><?php } ?>

                  <?php
                      $result = mysqli_query($conn,"SELECT sum(EstValue) FROM confiscated_forest_products where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(EstValue)']); ?></td><?php } ?>
                </tr>

                <tr>
                  <td>Misamis Occidental</td>
                  <?php
                      $result = mysqli_query($conn,"SELECT sum(Volume_inBoardFeet) FROM confiscated_forest_products where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(Volume_inBoardFeet)']); ?></td><?php } ?>

                  <?php
                      $result = mysqli_query($conn,"SELECT sum(EstValue) FROM confiscated_forest_products where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(EstValue)']); ?></td><?php } ?>
                </tr>

                <tr>
                  <td>Misamis Oriental</td>
                  <?php
                      $result = mysqli_query($conn,"SELECT sum(Volume_inBoardFeet) FROM confiscated_forest_products where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(Volume_inBoardFeet)']); ?></td><?php } ?>

                  <?php
                      $result = mysqli_query($conn,"SELECT sum(EstValue) FROM confiscated_forest_products where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(EstValue)']); ?></td><?php } ?>
                </tr>


              </tbody>
            </table>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:#FE4A49; color: white;">Close</button>
        </div>
      </div>
      
    </div>
  </div>


<div class="modal fade"  id="tbl1-total" role="dialog">
    <div class="modal-dialog modal-lg">    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><span class="fa fa-calculator"></span> Total records</h4>
        </div>
        <div class="modal-body">

            <table class="table">
              <thead>
                <tr>
                  <th>Province</th>
                  <th>No. of Units</th>
                  <th>Est. Value (P) </th>
                </tr>
              </thead>
              <tbody>
                <tr class="active">
                  <td>Regional Total </td>
                  <?php
                      $result = mysqli_query($conn,"SELECT sum(NoUnits) FROM apprehended_conveyances") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(NoUnits)']); ?></td><?php } ?>

                  <?php
                      $result = mysqli_query($conn,"SELECT sum(EstValue) FROM apprehended_conveyances") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(EstValue)']); ?></td><?php } ?>
                </tr>
                <tr>
                  <td>Bukidnon</td>
                  <?php
                      $result = mysqli_query($conn,"SELECT sum(NoUnits) FROM apprehended_conveyances where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(NoUnits)']); ?></td><?php } ?>

                  <?php
                      $result = mysqli_query($conn,"SELECT sum(EstValue) FROM apprehended_conveyances where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(EstValue)']); ?></td><?php } ?>
                </tr>

                <tr>
                  <td>Camiguin</td>
                  <?php
                      $result = mysqli_query($conn,"SELECT sum(NoUnits) FROM apprehended_conveyances where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(NoUnits)']); ?></td><?php } ?>

                  <?php
                      $result = mysqli_query($conn,"SELECT sum(EstValue) FROM apprehended_conveyances where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(EstValue)']); ?></td><?php } ?>
                </tr>

                <tr>
                  <td>Lanao del Norte </td>
                  <?php
                      $result = mysqli_query($conn,"SELECT sum(NoUnits) FROM apprehended_conveyances where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(NoUnits)']); ?></td><?php } ?>

                  <?php
                      $result = mysqli_query($conn,"SELECT sum(EstValue) FROM apprehended_conveyances where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(EstValue)']); ?></td><?php } ?>
                </tr>

                <tr>
                  <td>Misamis Occidental</td>
                  <?php
                      $result = mysqli_query($conn,"SELECT sum(NoUnits) FROM apprehended_conveyances where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(NoUnits)']); ?></td><?php } ?>

                  <?php
                      $result = mysqli_query($conn,"SELECT sum(EstValue) FROM apprehended_conveyances where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(EstValue)']); ?></td><?php } ?>
                </tr>

                <tr>
                  <td>Misamis Oriental</td>
                  <?php
                      $result = mysqli_query($conn,"SELECT sum(NoUnits) FROM apprehended_conveyances where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(NoUnits)']); ?></td><?php } ?>

                  <?php
                      $result = mysqli_query($conn,"SELECT sum(EstValue) FROM apprehended_conveyances where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(EstValue)']); ?></td><?php } ?>
                </tr>


              </tbody>
            </table>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:#FE4A49; color: white;">Close</button>
        </div>
      </div>
      
    </div>
  </div>









<div class="modal fade"  id="tbl67-total" role="dialog">
    <div class="modal-dialog">    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><span class="fa fa-calculator"></span> Regional Total</h4>
        </div>
        <div class="modal-body">
                  <table class="table">

    <tbody>


      <tr>
        <td style="font-size:17px;">Area (ha)</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Area_ha) FROM Watershed_Forest_Reserve_Proclaimed_Watershed") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:green; font-size:17px;"><?php echo number_format($rows['sum(Area_ha)']); ?></td><?php } ?>

      </tr>



    </tbody>
  </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:#FE4A49; color: white;">Close</button>
        </div>
      </div>
      
    </div>
  </div>




<div class="modal fade"  id="tbl64-total" role="dialog">
    <div class="modal-dialog">    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><span class="fa fa-calculator"></span> Total records</h4>
        </div>
        <div class="modal-body">
                  <table class="table">

    <tbody>

      <tr>
        <td>No. of Holders</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(No_of_Holders) FROM Tenurial_Instruments") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:green;"><?php echo number_format($rows['sum(No_of_Holders)']); ?></td><?php } ?>
 
      </tr>
      <tr>
        <td>Area (ha</td>
        <?php
            $result = mysqli_query($conn,"SELECT sum(Area_ha) FROM Tenurial_Instruments") or die(mysql_error());
            while ($rows = mysqli_fetch_array($result)){
        ?> 
        <td style="font-weight: bold; color:green;"><?php echo number_format($rows['sum(Area_ha)']); ?></td><?php } ?>

      </tr>



    </tbody>
  </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:#FE4A49; color: white;">Close</button>
        </div>
      </div>
      
    </div>
  </div>



<div class="modal fade"  id="tbl2-total" role="dialog">
    <div class="modal-dialog modal-lg">    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><span class="fa fa-calculator"></span> Total records</h4>
        </div>
        <div class="modal-body">

            <table class="table">
              <thead>
                <tr>
                  <th>Province</th>
                  <th>Volume (in Pcs)</th>
                  <th>Est. Value (P) </th>
                </tr>
              </thead>
              <tbody>
                <tr class="active">
                  <td>Regional Total </td>
                  <?php
                      $result = mysqli_query($conn,"SELECT sum(Volume_inPcs) FROM apprehended_finished_products") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(Volume_inPcs)']); ?></td><?php } ?>

                  <?php
                      $result = mysqli_query($conn,"SELECT sum(EstValue) FROM apprehended_finished_products") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(EstValue)']); ?></td><?php } ?>
                </tr>
                <tr>
                  <td>Bukidnon</td>
                  <?php
                      $result = mysqli_query($conn,"SELECT sum(Volume_inPcs) FROM apprehended_finished_products where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(Volume_inPcs)']); ?></td><?php } ?>

                  <?php
                      $result = mysqli_query($conn,"SELECT sum(EstValue) FROM apprehended_finished_products where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(EstValue)']); ?></td><?php } ?>
                </tr>

                <tr>
                  <td>Camiguin</td>
                  <?php
                      $result = mysqli_query($conn,"SELECT sum(Volume_inPcs) FROM apprehended_finished_products where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(Volume_inPcs)']); ?></td><?php } ?>

                  <?php
                      $result = mysqli_query($conn,"SELECT sum(EstValue) FROM apprehended_finished_products where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(EstValue)']); ?></td><?php } ?>
                </tr>

                <tr>
                  <td>Lanao del Norte </td>
                  <?php
                      $result = mysqli_query($conn,"SELECT sum(Volume_inPcs) FROM apprehended_finished_products where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(Volume_inPcs)']); ?></td><?php } ?>

                  <?php
                      $result = mysqli_query($conn,"SELECT sum(EstValue) FROM apprehended_finished_products where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(EstValue)']); ?></td><?php } ?>
                </tr>

                <tr>
                  <td>Misamis Occidental</td>
                  <?php
                      $result = mysqli_query($conn,"SELECT sum(Volume_inPcs) FROM apprehended_finished_products where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(Volume_inPcs)']); ?></td><?php } ?>

                  <?php
                      $result = mysqli_query($conn,"SELECT sum(EstValue) FROM apprehended_finished_products where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(EstValue)']); ?></td><?php } ?>
                </tr>

                <tr>
                  <td>Misamis Oriental</td>
                  <?php
                      $result = mysqli_query($conn,"SELECT sum(Volume_inPcs) FROM apprehended_finished_products where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(Volume_inPcs)']); ?></td><?php } ?>

                  <?php
                      $result = mysqli_query($conn,"SELECT sum(EstValue) FROM apprehended_finished_products where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(EstValue)']); ?></td><?php } ?>
                </tr>


              </tbody>
            </table>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:#FE4A49; color: white;">Close</button>
        </div>
      </div>
      
    </div>
  </div>




<div class="modal fade"  id="tbl3-total" role="dialog">
    <div class="modal-dialog modal-lg">    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><span class="fa fa-calculator"></span> Total records</h4>
        </div>
        <div class="modal-body">

            <table class="table">
              <thead>
                <tr>
                  <th>Province</th>
                  <th>Volume (in Board Feet)</th>
                  <th>Est. Value (P) </th>
                </tr>
              </thead>
              <tbody>
                <tr class="active">
                  <td>Regional Total </td>
                  <?php
                      $result = mysqli_query($conn,"SELECT sum(Volume_inBoardFeet) FROM apprehended_forest_products") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(Volume_inBoardFeet)']); ?></td><?php } ?>

                  <?php
                      $result = mysqli_query($conn,"SELECT sum(EstValue) FROM apprehended_forest_products") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(EstValue)']); ?></td><?php } ?>
                </tr>
                <tr>
                  <td>Bukidnon</td>
                  <?php
                      $result = mysqli_query($conn,"SELECT sum(Volume_inBoardFeet) FROM apprehended_forest_products where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(Volume_inBoardFeet)']); ?></td><?php } ?>

                  <?php
                      $result = mysqli_query($conn,"SELECT sum(EstValue) FROM apprehended_forest_products where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(EstValue)']); ?></td><?php } ?>
                </tr>

                <tr>
                  <td>Camiguin</td>
                  <?php
                      $result = mysqli_query($conn,"SELECT sum(Volume_inBoardFeet) FROM apprehended_forest_products where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(Volume_inBoardFeet)']); ?></td><?php } ?>

                  <?php
                      $result = mysqli_query($conn,"SELECT sum(EstValue) FROM apprehended_forest_products where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(EstValue)']); ?></td><?php } ?>
                </tr>

                <tr>
                  <td>Lanao del Norte </td>
                  <?php
                      $result = mysqli_query($conn,"SELECT sum(Volume_inBoardFeet) FROM apprehended_forest_products where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(Volume_inBoardFeet)']); ?></td><?php } ?>

                  <?php
                      $result = mysqli_query($conn,"SELECT sum(EstValue) FROM apprehended_forest_products where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(EstValue)']); ?></td><?php } ?>
                </tr>

                <tr>
                  <td>Misamis Occidental</td>
                  <?php
                      $result = mysqli_query($conn,"SELECT sum(Volume_inBoardFeet) FROM apprehended_forest_products where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(Volume_inBoardFeet)']); ?></td><?php } ?>

                  <?php
                      $result = mysqli_query($conn,"SELECT sum(EstValue) FROM apprehended_forest_products where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(EstValue)']); ?></td><?php } ?>
                </tr>

                <tr>
                  <td>Misamis Oriental</td>
                  <?php
                      $result = mysqli_query($conn,"SELECT sum(Volume_inBoardFeet) FROM apprehended_forest_products where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(Volume_inBoardFeet)']); ?></td><?php } ?>

                  <?php
                      $result = mysqli_query($conn,"SELECT sum(EstValue) FROM apprehended_forest_products where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(EstValue)']); ?></td><?php } ?>
                </tr>


              </tbody>
            </table>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:#FE4A49; color: white;">Close</button>
        </div>
      </div>
      
    </div>
  </div>



<div class="modal fade"  id="tbl4-total" role="dialog">
    <div class="modal-dialog modal-lg">    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><span class="fa fa-calculator"></span> Total records</h4>
        </div>
        <div class="modal-body">

            <table class="table">
              <thead>
                <tr>
                  <th>Province</th>
                  <th>No. of Units</th>
                  <th>Est. Value (P) </th>
                </tr>
              </thead>
              <tbody>
                <tr class="active">
                  <td>Regional Total </td>
                  <?php
                      $result = mysqli_query($conn,"SELECT sum(NoUnits) FROM apprehended_implements_equipment") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(NoUnits)']); ?></td><?php } ?>

                  <?php
                      $result = mysqli_query($conn,"SELECT sum(EstValue) FROM apprehended_implements_equipment") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(EstValue)']); ?></td><?php } ?>
                </tr>
                <tr>
                  <td>Bukidnon</td>
                  <?php
                      $result = mysqli_query($conn,"SELECT sum(NoUnits) FROM apprehended_implements_equipment where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(NoUnits)']); ?></td><?php } ?>

                  <?php
                      $result = mysqli_query($conn,"SELECT sum(EstValue) FROM apprehended_implements_equipment where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(EstValue)']); ?></td><?php } ?>
                </tr>

                <tr>
                  <td>Camiguin</td>
                  <?php
                      $result = mysqli_query($conn,"SELECT sum(NoUnits) FROM apprehended_implements_equipment where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(NoUnits)']); ?></td><?php } ?>

                  <?php
                      $result = mysqli_query($conn,"SELECT sum(EstValue) FROM apprehended_implements_equipment where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(EstValue)']); ?></td><?php } ?>
                </tr>

                <tr>
                  <td>Lanao del Norte </td>
                  <?php
                      $result = mysqli_query($conn,"SELECT sum(NoUnits) FROM apprehended_implements_equipment where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(NoUnits)']); ?></td><?php } ?>

                  <?php
                      $result = mysqli_query($conn,"SELECT sum(EstValue) FROM apprehended_implements_equipment where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(EstValue)']); ?></td><?php } ?>
                </tr>

                <tr>
                  <td>Misamis Occidental</td>
                  <?php
                      $result = mysqli_query($conn,"SELECT sum(NoUnits) FROM apprehended_implements_equipment where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(NoUnits)']); ?></td><?php } ?>

                  <?php
                      $result = mysqli_query($conn,"SELECT sum(EstValue) FROM apprehended_implements_equipment where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(EstValue)']); ?></td><?php } ?>
                </tr>

                <tr>
                  <td>Misamis Oriental</td>
                  <?php
                      $result = mysqli_query($conn,"SELECT sum(NoUnits) FROM apprehended_implements_equipment where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(NoUnits)']); ?></td><?php } ?>

                  <?php
                      $result = mysqli_query($conn,"SELECT sum(EstValue) FROM apprehended_implements_equipment where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(EstValue)']); ?></td><?php } ?>
                </tr>


              </tbody>
            </table>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:#FE4A49; color: white;">Close</button>
        </div>
      </div>
      
    </div>
  </div>




<div class="modal fade"  id="tbl5-total" role="dialog">
    <div class="modal-dialog modal-lg">    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><span class="fa fa-calculator"></span> Total records</h4>
        </div>
        <div class="modal-body">

            <table class="table">
              <thead>
                <tr>
                  <th>Province</th>
                  <th>Volume (in Lineal Meters)</th>
                  <th>Est. Value (P) </th>
                </tr>
              </thead>
              <tbody>
                <tr class="active">
                  <td>Regional Total </td>
                  <?php
                      $result = mysqli_query($conn,"SELECT sum(Volume_inLinealMeters) FROM apprehended_rattan_poles") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(Volume_inLinealMeters)']); ?></td><?php } ?>

                  <?php
                      $result = mysqli_query($conn,"SELECT sum(EstValue) FROM apprehended_rattan_poles") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(EstValue)']); ?></td><?php } ?>
                </tr>
                <tr>
                  <td>Bukidnon</td>
                  <?php
                      $result = mysqli_query($conn,"SELECT sum(Volume_inLinealMeters) FROM apprehended_rattan_poles where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(Volume_inLinealMeters)']); ?></td><?php } ?>

                  <?php
                      $result = mysqli_query($conn,"SELECT sum(EstValue) FROM apprehended_rattan_poles where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(EstValue)']); ?></td><?php } ?>
                </tr>

                <tr>
                  <td>Camiguin</td>
                  <?php
                      $result = mysqli_query($conn,"SELECT sum(Volume_inLinealMeters) FROM apprehended_rattan_poles where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(Volume_inLinealMeters)']); ?></td><?php } ?>

                  <?php
                      $result = mysqli_query($conn,"SELECT sum(EstValue) FROM apprehended_rattan_poles where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(EstValue)']); ?></td><?php } ?>
                </tr>

                <tr>
                  <td>Lanao del Norte </td>
                  <?php
                      $result = mysqli_query($conn,"SELECT sum(Volume_inLinealMeters) FROM apprehended_rattan_poles where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(Volume_inLinealMeters)']); ?></td><?php } ?>

                  <?php
                      $result = mysqli_query($conn,"SELECT sum(EstValue) FROM apprehended_rattan_poles where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(EstValue)']); ?></td><?php } ?>
                </tr>

                <tr>
                  <td>Misamis Occidental</td>
                  <?php
                      $result = mysqli_query($conn,"SELECT sum(Volume_inLinealMeters) FROM apprehended_rattan_poles where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(Volume_inLinealMeters)']); ?></td><?php } ?>

                  <?php
                      $result = mysqli_query($conn,"SELECT sum(EstValue) FROM apprehended_rattan_poles where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(EstValue)']); ?></td><?php } ?>
                </tr>

                <tr>
                  <td>Misamis Oriental</td>
                  <?php
                      $result = mysqli_query($conn,"SELECT sum(Volume_inLinealMeters) FROM apprehended_rattan_poles where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(Volume_inLinealMeters)']); ?></td><?php } ?>

                  <?php
                      $result = mysqli_query($conn,"SELECT sum(EstValue) FROM apprehended_rattan_poles where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(EstValue)']); ?></td><?php } ?>
                </tr>


              </tbody>
            </table>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:#FE4A49; color: white;">Close</button>
        </div>
      </div>
      
    </div>
  </div>



<div class="modal fade"  id="tbl6-total" role="dialog">
    <div class="modal-dialog modal-lg">    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><span class="fa fa-calculator"></span> Total records</h4>
        </div>
        <div class="modal-body">

            <table class="table">
              <thead>
                <tr>
                  <th>Province</th>
                  <th>Volume (in Sacks)</th>
                  <th>Est. Value (P) </th>
                </tr>
              </thead>
              <tbody>
                <tr class="active">
                  <td>Regional Total </td>
                  <?php
                      $result = mysqli_query($conn,"SELECT sum(Volume_inSacks) FROM apprehended_wood_charcoal") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(Volume_inSacks)']); ?></td><?php } ?>

                  <?php
                      $result = mysqli_query($conn,"SELECT sum(EstValue) FROM apprehended_wood_charcoal") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(EstValue)']); ?></td><?php } ?>
                </tr>
                <tr>
                  <td>Bukidnon</td>
                  <?php
                      $result = mysqli_query($conn,"SELECT sum(Volume_inSacks) FROM apprehended_wood_charcoal where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(Volume_inSacks)']); ?></td><?php } ?>

                  <?php
                      $result = mysqli_query($conn,"SELECT sum(EstValue) FROM apprehended_wood_charcoal where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(EstValue)']); ?></td><?php } ?>
                </tr>

                <tr>
                  <td>Camiguin</td>
                  <?php
                      $result = mysqli_query($conn,"SELECT sum(Volume_inSacks) FROM apprehended_wood_charcoal where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(Volume_inSacks)']); ?></td><?php } ?>

                  <?php
                      $result = mysqli_query($conn,"SELECT sum(EstValue) FROM apprehended_wood_charcoal where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(EstValue)']); ?></td><?php } ?>
                </tr>

                <tr>
                  <td>Lanao del Norte </td>
                  <?php
                      $result = mysqli_query($conn,"SELECT sum(Volume_inSacks) FROM apprehended_wood_charcoal where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(Volume_inSacks)']); ?></td><?php } ?>

                  <?php
                      $result = mysqli_query($conn,"SELECT sum(EstValue) FROM apprehended_wood_charcoal where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(EstValue)']); ?></td><?php } ?>
                </tr>

                <tr>
                  <td>Misamis Occidental</td>
                  <?php
                      $result = mysqli_query($conn,"SELECT sum(Volume_inSacks) FROM apprehended_wood_charcoal where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(Volume_inSacks)']); ?></td><?php } ?>

                  <?php
                      $result = mysqli_query($conn,"SELECT sum(EstValue) FROM apprehended_wood_charcoal where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(EstValue)']); ?></td><?php } ?>
                </tr>

                <tr>
                  <td>Misamis Oriental</td>
                  <?php
                      $result = mysqli_query($conn,"SELECT sum(Volume_inSacks) FROM apprehended_wood_charcoal where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(Volume_inSacks)']); ?></td><?php } ?>

                  <?php
                      $result = mysqli_query($conn,"SELECT sum(EstValue) FROM apprehended_wood_charcoal where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
                      while($rows = mysqli_fetch_array($result)){?> 
                  <td style="font-weight: bold; color:green; font-size: 15px;"><?php echo number_format($rows['sum(EstValue)']); ?></td><?php } ?>
                </tr>


              </tbody>
            </table>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:#FE4A49; color: white;">Close</button>
        </div>
      </div>
      
    </div>
  </div>