<!-- Modal -->
<?php include'add_query.php'; ?>
  <div class="modal fade" id="tbl1-add" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title" style="letter-spacing:2px; color:red;">Enter the Following</h4></center>
        </div> 
        <form method="POST" autocomplete="off"> 
        <div class="modal-body">
                <div class="form-group">
                  <label style="letter-spacing:2px;"><small>No. of Units</small> </label>
                  <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter No. of Units here.." name="NoUnits" required>
                </div>

                <div class="form-group" style="margin-top:-10px;">
                  <label style="letter-spacing:2px;"><small>Est.Value (P)</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Est. Value (P) here.." name="EstValue" required>

                  <label style="letter-spacing:2px;"><small>Year</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Year here.." name="Year" required>

                </div>
                <div class="form-group" style="margin-top:-10px;">
                  
                <label style="letter-spacing: 2px;"><small>Operating Unit</small></label>
                    <select required name="OperatingUnit" class="form-control" style="letter-spacing:1px;">
                          <option value="" disabled selected>---</option>
                          <option value="Valencia City">Valencia City</option>
                          <option value="Manolo Fortich">Manolo Fortich</option>
                          <option value="Don Carlos">Don Carlos</option>
                          <option value="Talakag">Talakag</option>
                          <option value="Sub-Office Pangantucan">Sub Office Pangantucan</option>
                          <option value="Mt. Kitanglad RNP">Mt. Kitanglad RNP</option>
                          <option value="Mt. Kalatungan RNP">Mt. Kalatungan RNP</option>
                          <option value="Mt. Pantaron">Mt. Pantaron</option>
                          <option value="Mt. Tago RNP">Mt. Tago RNP</option>
                          <option value="BFI">BFI</option>
                          <option value="Hineleban Foundation">Hineleban Foundation</option>
                          <option value="Non-PA">Non-PA</option>
                          <option value="Mt. Timpoong Hibok-Hibok">Mt. Timpoong Hibok-Hibok</option>
                          <option value="Iligan City">Iligan City</option>
                          <option value="CENRO Kolambugan">CENRO Kolambugan</option>
                          <option value="Siad Hindang">Siad Hindang</option>
                          <option value="Siad Nunungan">Siad Nunungan</option>
                          <option value="Mt. Inayawan RNP">Mt. Inayawan RNP</option>
                          <option value="Bacolod Kauswagan PLS">Bacolod Kauswagan PLS</option>
                          <option value="Lake Lanao WPDP">Lake Lanao WPDP</option>
                          <option value="CENRO Ozamiz City">CENRO Ozamiz City</option>
                          <option value="CENRO Oroquieta City">CENRO Oroquieta City</option>
                          <option value="Mt. Malindang RNP">Mt. Malindang RNP</option>
                          <option value="Mt. Baliangao PLS">Mt. Baliangao PLS</option>
                          <option value="CENRO Initao">CENRO Initao</option>
                          <option value="CENRO Gingoog City">Cenro Gingoog City</option>
                          <option value="Mt. Balatukan">Mt. Balatukan</option>
                          <option value="Mimbilisan">Mimbilisan</option>
                          <option value="Initao Libertad">Initao Libertad</option>
                    </select>

                </div>
                
        </div>
        <div class="modal-footer" style="">
          <button type="submit" name="tbl1_save" class="btn btn-default" style="letter-spacing:3px; background-color:#FE4A49; color:white; width: 100%;"><span class="glyphicon glyphicon-floppy-save"></span> SAVE</button></form>
      
        </div>
      </div>
    </div>
  </div>


  <div class="modal fade" id="tbl64-add" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title" style="letter-spacing:2px; color:red;">Enter the Following</h4></center>
        </div> 
        <form method="POST" autocomplete="off"> 
        <div class="modal-body">
                <div class="form-group">
                  <label style="letter-spacing:2px;"><small>Tenurial Instruments</small> </label>
                  <input class="form-control" type="text" class="form-control"  placeholder="Enter Tenurial Instruments here.." name="Tenurial_Instruments" required>
                </div>

                <div class="form-group" style="margin-top:-10px;">
                  <label style="letter-spacing:2px;"><small>No. of Holders</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter No. of Holders here.." name="No_of_Holders" required>

                  <label style="letter-spacing:2px;"><small>Area (ha)</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Area (ha) here.." name="Area_ha" required>

                </div>

                
        </div>
        <div class="modal-footer" style="">
          <button type="submit" name="tbl64_save" class="btn btn-default" style="letter-spacing:3px; background-color:#FE4A49; color:white; width: 100%;"><span class="glyphicon glyphicon-floppy-save"></span> SAVE</button></form>
      
        </div>
      </div>
    </div>
  </div>



  <div class="modal fade" id="tbl65-add" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title" style="letter-spacing:2px; color:red;">Enter the Following</h4></center>
        </div> 
        <form method="POST" autocomplete="off"> 
        <div class="modal-body">
                <div class="form-group">
                  <label style="letter-spacing:2px;"><small>Year</small> </label>
                  <input class="form-control" type="text"oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Year here.." name="Year" required>
                </div>
                <div class="form-group">
                  <label style="letter-spacing:2px;"><small>Province</small> </label>
                  <input class="form-control" type="text" class="form-control"  placeholder="Enter Province here.." name="Province" required>
                </div>                
                <div class="form-group">
                  <label style="letter-spacing:2px;"><small>Name of Watershed</small> </label>
                  <input class="form-control" type="text" class="form-control"  placeholder="Enter Name of Watershed here.." name="Name_of_Watershed" required>
                </div>
                <div class="form-group" style="margin-top:-10px;">
                  <label style="letter-spacing:2px;"><small>City/Municipality/Barangay</small></label>
                  <input type="text"  class="form-control"  placeholder="Enter City/Municipality/Barangay here.." name="City_Municipality_Barangay" required>

                  <label style="letter-spacing:2px;"><small>Area (ha)</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Area (ha) here.." name="Area_ha" required>

                </div>

                
        </div>
        <div class="modal-footer" style="">
          <button type="submit" name="tbl65_save" class="btn btn-default" style="letter-spacing:3px; background-color:#FE4A49; color:white; width: 100%;"><span class="glyphicon glyphicon-floppy-save"></span> SAVE</button></form>
      
        </div>
      </div>
    </div>
  </div>


  <div class="modal fade" id="tbl67-add" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title" style="letter-spacing:2px; color:red;">Enter the Following</h4></center>
        </div> 
        <form method="POST" autocomplete="off"> 
        <div class="modal-body">
                <div class="form-group">
            
                <label style="letter-spacing: 2px;"><small>Province</small></label>
                    <select required name="Province" class="form-control" style="letter-spacing:1px;">
                          <option value="" disabled selected>-- Select Province --</option>
                          <option value="Bukidnon">Bukidnon</option>
                          <option value="Camiguin">Camiguin</option>
                          <option value="Lanao Del Norte">Lanao Del Norte</option>
                          <option value="Misamis Occidental">Misamis Occidental</option>
                          <option value="Misamis Oriental">Misamis Oriental</option>
                    </select>
         

                  <label style="letter-spacing:2px;"><small>Name of Watershed</small> </label>
                  <input class="form-control" type="text" class="form-control"  placeholder="Enter Name of Watershed here.." name="Name_of_Watershed" required>
             
                  <label style="letter-spacing:2px;"><small>City/Municiaplity</small> </label>
                  <input class="form-control" type="text" class="form-control"  placeholder="Enter City/Municiaplity here.." name="City_Municiaplity" required>
                </div>
                <div class="form-group" style="margin-top:-10px;">
                  <label style="letter-spacing:2px;"><small>Area (ha)</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Area (ha) here.." name="Area_ha" required>

                  <label style="letter-spacing:2px;"><small>Proclamation No.</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Proclamation No. here.." name="Proclamation_No" required>
          
                  <label style="letter-spacing:2px;"><small>Proclamation Date (mm/dd/yyyy)</small></label>
                  <input type="date" class="form-control"  placeholder="Enter Proclamation Date (mm/dd/yyyy) here.." name="Proclamation_Date" required>

                </div>

                
        </div>
        <div class="modal-footer" style="">
          <button type="submit" name="tbl67_save" class="btn btn-default" style="letter-spacing:3px; background-color:#FE4A49; color:white; width: 100%;"><span class="glyphicon glyphicon-floppy-save"></span> SAVE</button></form>
      
        </div>
      </div>
    </div>
  </div>


  <div class="modal fade" id="tbl68-add" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title" style="letter-spacing:2px; color:red;">Enter the Following</h4></center>
        </div> 
        <form method="POST" autocomplete="off"> 
        <div class="modal-body">
                <div class="form-group">
                  <label style="letter-spacing:2px;"><small>Name of Watershed</small> </label>
                  <input class="form-control" type="text" class="form-control" placeholder="Enter Name of Watershed here.." name="Name_of_Watershed" required>
              
                  <label style="letter-spacing:2px;"><small>Regional Irrigation System (RIS)</small> </label>
                  <input class="form-control" type="text" class="form-control"  placeholder="Enter Regional Irrigation System (RIS) here.." name="Regional_Irrigation_System_RIS" required>
             
                <label style="letter-spacing: 2px;"><small>Province</small></label>
                    <select required name="Province" class="form-control" style="letter-spacing:1px;">
                          <option value="" disabled selected>-- Select Province --</option>
                          <option value="Bukidnon">Bukidnon</option>
                          <option value="Camiguin">Camiguin</option>
                          <option value="Lanao Del Norte">Lanao Del Norte</option>
                          <option value="Misamis Occidental">Misamis Occidental</option>
                          <option value="Misamis Oriental">Misamis Oriental</option>
                    </select>
                </div>
                <div class="form-group" style="margin-top:-10px;">
                  <label style="letter-spacing:2px;"><small>Municipality</small></label>
                  <input type="text" class="form-control"  placeholder="Enter Municipality here.." name="Municipality" required>

                  <label style="letter-spacing:2px;"><small>Watershed Area (ha)</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control" placeholder="Enter Watershed Area (ha) here.." name="Watershed_Area_ha" required>
          
                  <label style="letter-spacing:2px;"><small>RIS Service Area (ha) </small></label>
                  <input type="text" class="form-control" placeholder="Enter RIS Service Area (ha)  here.." name="RIS_Service_Area_ha" required>

                </div>

                
        </div>
        <div class="modal-footer" style="">
          <button type="submit" name="tbl68_save" class="btn btn-default" style="letter-spacing:3px; background-color:#FE4A49; color:white; width: 100%;"><span class="glyphicon glyphicon-floppy-save"></span> SAVE</button></form>
      
        </div>
      </div>
    </div>
  </div>




  <div class="modal fade" id="tbl69-add" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title" style="letter-spacing:2px; color:red;">Enter the Following</h4></center>
        </div> 
        <form method="POST" autocomplete="off"> 
        <div class="modal-body">
                <div class="form-group">
                 
              
                  <label style="letter-spacing:2px;"><small>Year</small> </label>
                  <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Year here.." name="Year" required>
             
                <label style="letter-spacing: 2px;"><small>Province</small></label>
                    <select required name="Province" class="form-control" style="letter-spacing:1px;">
                          <option value="" disabled selected>-- Select Province --</option>
                          <option value="Bukidnon">Bukidnon</option>
                          <option value="Camiguin">Camiguin</option>
                          <option value="Lanao Del Norte">Lanao Del Norte</option>
                          <option value="Misamis Occidental">Misamis Occidental</option>
                          <option value="Misamis Oriental">Misamis Oriental</option>
                    </select>
                </div>
                <div class="form-group" style="margin-top:-10px;">
                  <label style="letter-spacing:2px;"><small>Name of Watershed</small></label>
                  <input type="text" class="form-control"  placeholder="Enter Name of Watershed here.." name="Name_of_Watershed" required>

                  <label style="letter-spacing:2px;"><small>City/Municipality/Barangay</small></label>
                  <input type="text"  class="form-control" placeholder="Enter City/Municipality/Barangay here.." name="City_Municipality_Barangay" required>
          
                  <label style="letter-spacing:2px;"><small>Area (ha)</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control" placeholder="Enter Area (ha)  here.." name="Area_ha" required>

                </div>

                
        </div>
        <div class="modal-footer" style="">
          <button type="submit" name="tbl69_save" class="btn btn-default" style="letter-spacing:3px; background-color:#FE4A49; color:white; width: 100%;"><span class="glyphicon glyphicon-floppy-save"></span> SAVE</button></form>
      
        </div>
      </div>
    </div>
  </div>



  <div class="modal fade" id="tbl61-add" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title" style="letter-spacing:2px; color:red;">Enter the Following</h4></center>
        </div> 
        <form method="POST" autocomplete="off"> 
        <div class="modal-body">
 
                <div class="form-group">
                  
                <label style="letter-spacing: 2px;"><small>Operating Unit</small></label>
                    <select required name="OperatingUnit" class="form-control" style="letter-spacing:1px;">
                          <option value="" disabled selected>---</option>
                          <option value="Valencia City">Valencia City</option>
                          <option value="Manolo Fortich">Manolo Fortich</option>
                          <option value="Don Carlos">Don Carlos</option>
                          <option value="Talakag">Talakag</option>
                          <option value="Sub-Office Pangantucan">Sub Office Pangantucan</option>
                          <option value="Mt. Kitanglad RNP">Mt. Kitanglad RNP</option>
                          <option value="Mt. Kalatungan RNP">Mt. Kalatungan RNP</option>
                          <option value="Mt. Pantaron">Mt. Pantaron</option>
                          <option value="Mt. Tago RNP">Mt. Tago RNP</option>
                          <option value="BFI">BFI</option>
                          <option value="Hineleban Foundation">Hineleban Foundation</option>
                          <option value="Non-PA">Non-PA</option>
                          <option value="Mt. Timpoong Hibok-Hibok">Mt. Timpoong Hibok-Hibok</option>
                          <option value="Iligan City">Iligan City</option>
                          <option value="CENRO Kolambugan">CENRO Kolambugan</option>
                          <option value="Siad Hindang">Siad Hindang</option>
                          <option value="Siad Nunungan">Siad Nunungan</option>
                          <option value="Mt. Inayawan RNP">Mt. Inayawan RNP</option>
                          <option value="Bacolod Kauswagan PLS">Bacolod Kauswagan PLS</option>
                          <option value="Lake Lanao WPDP">Lake Lanao WPDP</option>
                          <option value="CENRO Ozamiz City">CENRO Ozamiz City</option>
                          <option value="CENRO Oroquieta City">CENRO Oroquieta City</option>
                          <option value="Mt. Malindang RNP">Mt. Malindang RNP</option>
                          <option value="Mt. Baliangao PLS">Mt. Baliangao PLS</option>
                          <option value="CENRO Initao">CENRO Initao</option>
                          <option value="CENRO Gingoog City">Cenro Gingoog City</option>
                          <option value="Mt. Balatukan">Mt. Balatukan</option>
                          <option value="Mimbilisan">Mimbilisan</option>
                          <option value="Initao Libertad">Initao Libertad</option>
                    </select>

             
            
                  <label style="letter-spacing:2px;"><small>No. of CWR/WFP</small> </label>
                  <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter No. of CWR/WFP here.." name="No_of_CWR_WFP" required>


                  <label style="letter-spacing:2px;"><small>Year</small> </label>
                  <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Year here.." name="Year" required>
           </div>        
        </div>
        <div class="modal-footer" style="">
          <button type="submit" name="tbl61_save" class="btn btn-default" style="letter-spacing:3px; background-color:#FE4A49; color:white; width: 100%;"><span class="glyphicon glyphicon-floppy-save"></span> SAVE</button></form>
      
        </div>
      </div>
    </div>
  </div>





  <div class="modal fade" id="tbl55-add" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title" style="letter-spacing:2px; color:red;">Enter the Following</h4></center>
        </div> 
        <form method="POST" autocomplete="off"> 
        <div class="modal-body">


                <div class="form-group" style="margin-top:-10px;">
                  
                <label style="letter-spacing: 2px;"><small>Operating Unit</small></label>
                    <select required name="OperatingUnit" class="form-control" style="letter-spacing:1px;">
                          <option value="" disabled selected>---</option>
                          <option value="Valencia City">Valencia City</option>
                          <option value="Manolo Fortich">Manolo Fortich</option>
                          <option value="Don Carlos">Don Carlos</option>
                          <option value="Talakag">Talakag</option>
                          <option value="Sub-Office Pangantucan">Sub Office Pangantucan</option>
                          <option value="Mt. Kitanglad RNP">Mt. Kitanglad RNP</option>
                          <option value="Mt. Kalatungan RNP">Mt. Kalatungan RNP</option>
                          <option value="Mt. Pantaron">Mt. Pantaron</option>
                          <option value="Mt. Tago RNP">Mt. Tago RNP</option>
                          <option value="BFI">BFI</option>
                          <option value="Hineleban Foundation">Hineleban Foundation</option>
                          <option value="Non-PA">Non-PA</option>
                          <option value="Mt. Timpoong Hibok-Hibok">Mt. Timpoong Hibok-Hibok</option>
                          <option value="Iligan City">Iligan City</option>
                          <option value="CENRO Kolambugan">CENRO Kolambugan</option>
                          <option value="Siad Hindang">Siad Hindang</option>
                          <option value="Siad Nunungan">Siad Nunungan</option>
                          <option value="Mt. Inayawan RNP">Mt. Inayawan RNP</option>
                          <option value="Bacolod Kauswagan PLS">Bacolod Kauswagan PLS</option>
                          <option value="Lake Lanao WPDP">Lake Lanao WPDP</option>
                          <option value="CENRO Ozamiz City">CENRO Ozamiz City</option>
                          <option value="CENRO Oroquieta City">CENRO Oroquieta City</option>
                          <option value="Mt. Malindang RNP">Mt. Malindang RNP</option>
                          <option value="Mt. Baliangao PLS">Mt. Baliangao PLS</option>
                          <option value="CENRO Initao">CENRO Initao</option>
                          <option value="CENRO Gingoog City">Cenro Gingoog City</option>
                          <option value="Mt. Balatukan">Mt. Balatukan</option>
                          <option value="Mimbilisan">Mimbilisan</option>
                          <option value="Initao Libertad">Initao Libertad</option>
                    </select>


                  <label style="letter-spacing:2px;"><small>Forest Rangers (No.)</small> </label>
                  <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Forest Rangers (No.) here.." name="forest_rangers_no" required>
              
                  <label style="letter-spacing:2px;"><small>Teams (No.)</small> </label>
                  <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Teams (No.) here.." name="teams_no" required>

                   <label style="letter-spacing:2px;"><small>Year</small> </label>
                  <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Year here.." name="year" required>

                </div>    
                
        </div>
        <div class="modal-footer" style="">
          <button type="submit" name="tbl55_save" class="btn btn-default" style="letter-spacing:3px; background-color:#FE4A49; color:white; width: 100%;"><span class="glyphicon glyphicon-floppy-save"></span> SAVE</button></form>
      
        </div>
      </div>
    </div>
  </div>



  <div class="modal fade" id="tbl56-add" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title" style="letter-spacing:2px; color:red;">Enter the Following</h4></center>
        </div> 
        <form method="POST" autocomplete="off"> 
        <div class="modal-body">


                <div class="form-group" style="margin-top:-10px;">
                  
                <label style="letter-spacing: 2px;"><small>Operating Unit</small></label>
                    <select required name="OperatingUnit" class="form-control" style="letter-spacing:1px;">
                          <option value="" disabled selected>---</option>
                          <option value="Valencia City">Valencia City</option>
                          <option value="Manolo Fortich">Manolo Fortich</option>
                          <option value="Don Carlos">Don Carlos</option>
                          <option value="Talakag">Talakag</option>
                          <option value="Sub-Office Pangantucan">Sub Office Pangantucan</option>
                          <option value="Mt. Kitanglad RNP">Mt. Kitanglad RNP</option>
                          <option value="Mt. Kalatungan RNP">Mt. Kalatungan RNP</option>
                          <option value="Mt. Pantaron">Mt. Pantaron</option>
                          <option value="Mt. Tago RNP">Mt. Tago RNP</option>
                          <option value="BFI">BFI</option>
                          <option value="Hineleban Foundation">Hineleban Foundation</option>
                          <option value="Non-PA">Non-PA</option>
                          <option value="Mt. Timpoong Hibok-Hibok">Mt. Timpoong Hibok-Hibok</option>
                          <option value="Iligan City">Iligan City</option>
                          <option value="CENRO Kolambugan">CENRO Kolambugan</option>
                          <option value="Siad Hindang">Siad Hindang</option>
                          <option value="Siad Nunungan">Siad Nunungan</option>
                          <option value="Mt. Inayawan RNP">Mt. Inayawan RNP</option>
                          <option value="Bacolod Kauswagan PLS">Bacolod Kauswagan PLS</option>
                          <option value="Lake Lanao WPDP">Lake Lanao WPDP</option>
                          <option value="CENRO Ozamiz City">CENRO Ozamiz City</option>
                          <option value="CENRO Oroquieta City">CENRO Oroquieta City</option>
                          <option value="Mt. Malindang RNP">Mt. Malindang RNP</option>
                          <option value="Mt. Baliangao PLS">Mt. Baliangao PLS</option>
                          <option value="CENRO Initao">CENRO Initao</option>
                          <option value="CENRO Gingoog City">Cenro Gingoog City</option>
                          <option value="Mt. Balatukan">Mt. Balatukan</option>
                          <option value="Mimbilisan">Mimbilisan</option>
                          <option value="Initao Libertad">Initao Libertad</option>
                    </select>


                  <label style="letter-spacing:2px;"><small>No. of Incidents</small> </label>
                  <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter No. of Incidents here.." name="No_of_Incidents" required>
              
                  <label style="letter-spacing:2px;"><small>Year</small> </label>
                  <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Year here.." name="Year" required>

                </div>    
                
        </div>
        <div class="modal-footer" style="">
          <button type="submit" name="tbl56_save" class="btn btn-default" style="letter-spacing:3px; background-color:#FE4A49; color:white; width: 100%;"><span class="glyphicon glyphicon-floppy-save"></span> SAVE</button></form>
      
        </div>
      </div>
    </div>
  </div>




  <div class="modal fade" id="tbl57-add" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title" style="letter-spacing:2px; color:red;">Enter the Following</h4></center>
        </div> 
        <form method="POST" autocomplete="off"> 
        <div class="modal-body">


                <div class="form-group" style="margin-top:-10px;">

                  <label style="letter-spacing:2px;"><small>Waterbodies (By Category)</small> </label>
                  <input class="form-control" type="text" class="form-control"  placeholder="Enter Waterbodies (By Category) here.." name="waterbodies_by_category" required>
              
                  <label style="letter-spacing:2px;"><small>No. of Waterbodies</small> </label>
                  <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter No. of Waterbodies here.." name="no_of_waterbodies" required>

                  <label style="letter-spacing:2px;"><small>No. Classified Waterbodies</small> </label>
                  <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter No. Classified Waterbodies here.." name="no_classified_waterbodies" required>


                  <label style="letter-spacing:2px;"><small>No. of Unclassified Waterbodies</small> </label>
                  <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter No. of Unclassified Waterbodies here.." name="no_of_unclassified_waterbodies" required>

                </div>    
                
        </div>
        <div class="modal-footer" style="">
          <button type="submit" name="tbl57_save" class="btn btn-default" style="letter-spacing:3px; background-color:#FE4A49; color:white; width: 100%;"><span class="glyphicon glyphicon-floppy-save"></span> SAVE</button></form>
      
        </div>
      </div>
    </div>
  </div>

<!-- Modal -->
  <div class="modal fade" id="tbl2-add" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title" style="letter-spacing:2px; color:red;">Enter the Following</h4></center>
        </div> 
        <form method="POST" autocomplete="off">
        <div class="modal-body">
                <div class="form-group">
                  <label style="letter-spacing:2px;"><small>Volume (in Pcs)</small> </label>
                  <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Volume (in Pcs) here.." name="Volume_inPcs" required>
                </div>

                <div class="form-group" style="margin-top:-10px;">
                  <label style="letter-spacing:2px;"><small>Est.Value (P)</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Est. Value (P) here.." name="EstValue" required>

                  <label style="letter-spacing:2px;"><small>Year</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Year here.." name="Year" required>

                </div>
                <div class="form-group" style="margin-top:-10px;">
                  
                <label style="letter-spacing: 2px;"><small>Operating Unit</small></label>
                    <select required name="OperatingUnit" class="form-control" style="letter-spacing:1px;">
                          <option value="" disabled selected>---</option>
                          <option value="Valencia City">Valencia City</option>
                          <option value="Manolo Fortich">Manolo Fortich</option>
                          <option value="Don Carlos">Don Carlos</option>
                          <option value="Talakag">Talakag</option>
                          <option value="Sub-Office Pangantucan">Sub Office Pangantucan</option>
                          <option value="Mt. Kitanglad RNP">Mt. Kitanglad RNP</option>
                          <option value="Mt. Kalatungan RNP">Mt. Kalatungan RNP</option>
                          <option value="Mt. Pantaron">Mt. Pantaron</option>
                          <option value="Mt. Tago RNP">Mt. Tago RNP</option>
                          <option value="BFI">BFI</option>
                          <option value="Hineleban Foundation">Hineleban Foundation</option>
                          <option value="Non-PA">Non-PA</option>
                          <option value="Mt. Timpoong Hibok-Hibok">Mt. Timpoong Hibok-Hibok</option>
                          <option value="Iligan City">Iligan City</option>
                          <option value="CENRO Kolambugan">CENRO Kolambugan</option>
                          <option value="Siad Hindang">Siad Hindang</option>
                          <option value="Siad Nunungan">Siad Nunungan</option>
                          <option value="Mt. Inayawan RNP">Mt. Inayawan RNP</option>
                          <option value="Bacolod Kauswagan PLS">Bacolod Kauswagan PLS</option>
                          <option value="Lake Lanao WPDP">Lake Lanao WPDP</option>
                          <option value="CENRO Ozamiz City">CENRO Ozamiz City</option>
                          <option value="CENRO Oroquieta City">CENRO Oroquieta City</option>
                          <option value="Mt. Malindang RNP">Mt. Malindang RNP</option>
                          <option value="Mt. Baliangao PLS">Mt. Baliangao PLS</option>
                          <option value="CENRO Initao">CENRO Initao</option>
                          <option value="CENRO Gingoog City">Cenro Gingoog City</option>
                          <option value="Mt. Balatukan">Mt. Balatukan</option>
                          <option value="Mimbilisan">Mimbilisan</option>
                          <option value="Initao Libertad">Initao Libertad</option>
                    </select>

                </div>
                
        </div>
        <div class="modal-footer" style="">
          <button type="submit" name="tbl2_save" class="btn btn-default" style="letter-spacing:3px; background-color:#FE4A49; color:white; width: 100%;"><span class="glyphicon glyphicon-floppy-save"></span> SAVE</button></form>
      
        </div>
      </div>
    </div>
  </div>



  <!-- Modal -->
  <div class="modal fade" id="tbl3-add" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title" style="letter-spacing:2px; color:red;">Enter the Following</h4></center>
        </div> 
        <form method="POST" autocomplete="off">
        <div class="modal-body">
                <div class="form-group">
                  <label style="letter-spacing:2px;"><small>Volume (in Board Feet) </small></label>
                  <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Volume (in Board Feet) here.." name="Volume_inBoardFeet" required>
                </div>

                <div class="form-group" style="margin-top:-10px;">
                  <label style="letter-spacing:2px;"><small>Est.Value (P)</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Est. Value (P) here.." name="EstValue" required>

                  <label style="letter-spacing:2px;"><small>Year</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Year here.." name="Year" required>

                </div>
                <div class="form-group" style="margin-top:-10px;">
                  
                <label style="letter-spacing: 2px;"><small>Operating Unit</small></label>
                    <select required name="OperatingUnit" class="form-control" style="letter-spacing:1px;">
                          <option value="" disabled selected>---</option>
                          <option value="Valencia City">Valencia City</option>
                          <option value="Manolo Fortich">Manolo Fortich</option>
                          <option value="Don Carlos">Don Carlos</option>
                          <option value="Talakag">Talakag</option>
                          <option value="Sub-Office Pangantucan">Sub Office Pangantucan</option>
                          <option value="Mt. Kitanglad RNP">Mt. Kitanglad RNP</option>
                          <option value="Mt. Kalatungan RNP">Mt. Kalatungan RNP</option>
                          <option value="Mt. Pantaron">Mt. Pantaron</option>
                          <option value="Mt. Tago RNP">Mt. Tago RNP</option>
                          <option value="BFI">BFI</option>
                          <option value="Hineleban Foundation">Hineleban Foundation</option>
                          <option value="Non-PA">Non-PA</option>
                          <option value="Mt. Timpoong Hibok-Hibok">Mt. Timpoong Hibok-Hibok</option>
                          <option value="Iligan City">Iligan City</option>
                          <option value="CENRO Kolambugan">CENRO Kolambugan</option>
                          <option value="Siad Hindang">Siad Hindang</option>
                          <option value="Siad Nunungan">Siad Nunungan</option>
                          <option value="Mt. Inayawan RNP">Mt. Inayawan RNP</option>
                          <option value="Bacolod Kauswagan PLS">Bacolod Kauswagan PLS</option>
                          <option value="Lake Lanao WPDP">Lake Lanao WPDP</option>
                          <option value="CENRO Ozamiz City">CENRO Ozamiz City</option>
                          <option value="CENRO Oroquieta City">CENRO Oroquieta City</option>
                          <option value="Mt. Malindang RNP">Mt. Malindang RNP</option>
                          <option value="Mt. Baliangao PLS">Mt. Baliangao PLS</option>
                          <option value="CENRO Initao">CENRO Initao</option>
                          <option value="CENRO Gingoog City">Cenro Gingoog City</option>
                          <option value="Mt. Balatukan">Mt. Balatukan</option>
                          <option value="Mimbilisan">Mimbilisan</option>
                          <option value="Initao Libertad">Initao Libertad</option>
                    </select>

                </div>
                
        </div>
        <div class="modal-footer" style="">
          <button type="submit" name="tbl3_save" class="btn btn-default" style="letter-spacing:3px; background-color:#FE4A49; color:white; width: 100%;"><span class="glyphicon glyphicon-floppy-save"></span> SAVE</button></form>
      
        </div>
      </div>
    </div>
  </div>




<div class="modal fade" id="tbl4-add" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title" style="letter-spacing:2px; color:red;">Enter the Following</h4></center>
        </div> 
        <form method="POST" autocomplete="off">
        <div class="modal-body">
                <div class="form-group">
                  <label style="letter-spacing:2px;"><small>No. of Units</small> </label>
                  <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter No. of Units here.." name="NoUnits" required>
                </div>

                <div class="form-group" style="margin-top:-10px;">
                  <label style="letter-spacing:2px;"><small>Est.Value (P)</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Est. Value (P) here.." name="EstValue" required>

                  <label style="letter-spacing:2px;"><small>Year</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Year here.." name="Year" required>

                </div>
                <div class="form-group" style="margin-top:-10px;">
                  
                <label style="letter-spacing: 2px;"><small>Operating Unit</small></label>
                    <select required name="OperatingUnit" class="form-control" style="letter-spacing:1px;">
                          <option value="" disabled selected>---</option>
                          <option value="Valencia City">Valencia City</option>
                          <option value="Manolo Fortich">Manolo Fortich</option>
                          <option value="Don Carlos">Don Carlos</option>
                          <option value="Talakag">Talakag</option>
                          <option value="Sub-Office Pangantucan">Sub Office Pangantucan</option>
                          <option value="Mt. Kitanglad RNP">Mt. Kitanglad RNP</option>
                          <option value="Mt. Kalatungan RNP">Mt. Kalatungan RNP</option>
                          <option value="Mt. Pantaron">Mt. Pantaron</option>
                          <option value="Mt. Tago RNP">Mt. Tago RNP</option>
                          <option value="BFI">BFI</option>
                          <option value="Hineleban Foundation">Hineleban Foundation</option>
                          <option value="Non-PA">Non-PA</option>
                          <option value="Mt. Timpoong Hibok-Hibok">Mt. Timpoong Hibok-Hibok</option>
                          <option value="Iligan City">Iligan City</option>
                          <option value="CENRO Kolambugan">CENRO Kolambugan</option>
                          <option value="Siad Hindang">Siad Hindang</option>
                          <option value="Siad Nunungan">Siad Nunungan</option>
                          <option value="Mt. Inayawan RNP">Mt. Inayawan RNP</option>
                          <option value="Bacolod Kauswagan PLS">Bacolod Kauswagan PLS</option>
                          <option value="Lake Lanao WPDP">Lake Lanao WPDP</option>
                          <option value="CENRO Ozamiz City">CENRO Ozamiz City</option>
                          <option value="CENRO Oroquieta City">CENRO Oroquieta City</option>
                          <option value="Mt. Malindang RNP">Mt. Malindang RNP</option>
                          <option value="Mt. Baliangao PLS">Mt. Baliangao PLS</option>
                          <option value="CENRO Initao">CENRO Initao</option>
                          <option value="CENRO Gingoog City">Cenro Gingoog City</option>
                          <option value="Mt. Balatukan">Mt. Balatukan</option>
                          <option value="Mimbilisan">Mimbilisan</option>
                          <option value="Initao Libertad">Initao Libertad</option>
                    </select>

                </div>
                
        </div>
        <div class="modal-footer" style="">
          <button type="submit" name="tbl4_save" class="btn btn-default" style="letter-spacing:3px; background-color:#FE4A49; color:white; width: 100%;"><span class="glyphicon glyphicon-floppy-save"></span> SAVE</button></form>
      
        </div>
      </div>
    </div>
  </div>




  <div class="modal fade" id="tbl5-add" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title" style="letter-spacing:2px; color:red;">Enter the Following</h4></center>
        </div> 
        <form method="POST" autocomplete="off">
        <div class="modal-body">
                <div class="form-group">
                  <label style="letter-spacing:2px;"><small>Volume (in Lineal Meters)</small></label>
                  <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Volume (in Lineal Meters) here.." name="Volume_inLinealMeters" required>
                </div>

                <div class="form-group" style="margin-top:-10px;">
                  <label style="letter-spacing:2px;"><small>Est.Value (P)</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Est. Value (P) here.." name="EstValue" required>

                  <label style="letter-spacing:2px;"><small>Year</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Year here.." name="Year" required>

                </div>
                <div class="form-group" style="margin-top:-10px;">
                  
                <label style="letter-spacing: 2px;"><small>Operating Unit</small></label>
                    <select required name="OperatingUnit" class="form-control" style="letter-spacing:1px;">
                          <option value="" disabled selected>---</option>
                          <option value="Valencia City">Valencia City</option>
                          <option value="Manolo Fortich">Manolo Fortich</option>
                          <option value="Don Carlos">Don Carlos</option>
                          <option value="Talakag">Talakag</option>
                          <option value="Sub-Office Pangantucan">Sub Office Pangantucan</option>
                          <option value="Mt. Kitanglad RNP">Mt. Kitanglad RNP</option>
                          <option value="Mt. Kalatungan RNP">Mt. Kalatungan RNP</option>
                          <option value="Mt. Pantaron">Mt. Pantaron</option>
                          <option value="Mt. Tago RNP">Mt. Tago RNP</option>
                          <option value="BFI">BFI</option>
                          <option value="Hineleban Foundation">Hineleban Foundation</option>
                          <option value="Non-PA">Non-PA</option>
                          <option value="Mt. Timpoong Hibok-Hibok">Mt. Timpoong Hibok-Hibok</option>
                          <option value="Iligan City">Iligan City</option>
                          <option value="CENRO Kolambugan">CENRO Kolambugan</option>
                          <option value="Siad Hindang">Siad Hindang</option>
                          <option value="Siad Nunungan">Siad Nunungan</option>
                          <option value="Mt. Inayawan RNP">Mt. Inayawan RNP</option>
                          <option value="Bacolod Kauswagan PLS">Bacolod Kauswagan PLS</option>
                          <option value="Lake Lanao WPDP">Lake Lanao WPDP</option>
                          <option value="CENRO Ozamiz City">CENRO Ozamiz City</option>
                          <option value="CENRO Oroquieta City">CENRO Oroquieta City</option>
                          <option value="Mt. Malindang RNP">Mt. Malindang RNP</option>
                          <option value="Mt. Baliangao PLS">Mt. Baliangao PLS</option>
                          <option value="CENRO Initao">CENRO Initao</option>
                          <option value="CENRO Gingoog City">Cenro Gingoog City</option>
                          <option value="Mt. Balatukan">Mt. Balatukan</option>
                          <option value="Mimbilisan">Mimbilisan</option>
                          <option value="Initao Libertad">Initao Libertad</option>
                    </select>

                </div>
                
        </div>
        <div class="modal-footer" style="">
          <button type="submit" name="tbl5_save" class="btn btn-default" style="letter-spacing:3px; background-color:#FE4A49; color:white; width: 100%;"><span class="glyphicon glyphicon-floppy-save"></span> SAVE</button></form>
      
        </div>
      </div>
    </div>
  </div>




  <div class="modal fade" id="tbl6-add" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title" style="letter-spacing:2px; color:red;">Enter the Following</h4></center>
        </div> 
        <form method="POST" autocomplete="off">
        <div class="modal-body">
                <div class="form-group">
                  <label style="letter-spacing:2px;"><small>Volume (in Sacks)</small></label>
                  <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Volume (in Sacks) here.." name="Volume_inSacks" required>
                </div>

                <div class="form-group" style="margin-top:-10px;">
                  <label style="letter-spacing:2px;"><small>Est.Value (P)</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Est. Value (P) here.." name="EstValue" required>

                  <label style="letter-spacing:2px;"><small>Year</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Year here.." name="Year" required>

                </div>
                <div class="form-group" style="margin-top:-10px;">
                  
                <label style="letter-spacing: 2px;"><small>Operating Unit</small></label>
                    <select required name="OperatingUnit" class="form-control" style="letter-spacing:1px;">
                          <option value="" disabled selected>---</option>
                          <option value="Valencia City">Valencia City</option>
                          <option value="Manolo Fortich">Manolo Fortich</option>
                          <option value="Don Carlos">Don Carlos</option>
                          <option value="Talakag">Talakag</option>
                          <option value="Sub-Office Pangantucan">Sub Office Pangantucan</option>
                          <option value="Mt. Kitanglad RNP">Mt. Kitanglad RNP</option>
                          <option value="Mt. Kalatungan RNP">Mt. Kalatungan RNP</option>
                          <option value="Mt. Pantaron">Mt. Pantaron</option>
                          <option value="Mt. Tago RNP">Mt. Tago RNP</option>
                          <option value="BFI">BFI</option>
                          <option value="Hineleban Foundation">Hineleban Foundation</option>
                          <option value="Non-PA">Non-PA</option>
                          <option value="Mt. Timpoong Hibok-Hibok">Mt. Timpoong Hibok-Hibok</option>
                          <option value="Iligan City">Iligan City</option>
                          <option value="CENRO Kolambugan">CENRO Kolambugan</option>
                          <option value="Siad Hindang">Siad Hindang</option>
                          <option value="Siad Nunungan">Siad Nunungan</option>
                          <option value="Mt. Inayawan RNP">Mt. Inayawan RNP</option>
                          <option value="Bacolod Kauswagan PLS">Bacolod Kauswagan PLS</option>
                          <option value="Lake Lanao WPDP">Lake Lanao WPDP</option>
                          <option value="CENRO Ozamiz City">CENRO Ozamiz City</option>
                          <option value="CENRO Oroquieta City">CENRO Oroquieta City</option>
                          <option value="Mt. Malindang RNP">Mt. Malindang RNP</option>
                          <option value="Mt. Baliangao PLS">Mt. Baliangao PLS</option>
                          <option value="CENRO Initao">CENRO Initao</option>
                          <option value="CENRO Gingoog City">Cenro Gingoog City</option>
                          <option value="Mt. Balatukan">Mt. Balatukan</option>
                          <option value="Mimbilisan">Mimbilisan</option>
                          <option value="Initao Libertad">Initao Libertad</option>
                    </select>

                </div>
                
        </div>
        <div class="modal-footer" style="">
          <button type="submit" name="tbl6_save" class="btn btn-default" style="letter-spacing:3px; background-color:#FE4A49; color:white; width: 100%;"><span class="glyphicon glyphicon-floppy-save"></span> SAVE</button></form>
      
        </div>
      </div>
    </div>
  </div>








<div class="modal fade" id="tbl7-add" role="dialog">
    <div class="modal-dialog modal-md" style="width:60%;">
      <div class="modal-content">
              <div class="modal-header" >
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <center><h4 class="modal-title" style="letter-spacing:2px; color:red;">Enter the Following</h4></center>
              </div> 
          <form method="POST" autocomplete="off">
              <div class="modal-body">
                <div class="form-group col-xs-6">
                  <label style="letter-spacing:2px;"><small>Universe</small></label>
                 <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Universe here.." name="Universe" required>
                </div>

                <div class="form-group col-xs-6">
                  <label style="letter-spacing:2px;"><small>Baseline</small></label>
                  <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Baseline here.." name="Baseline" required>
                </div>

                <div class="form-group col-xs-6">
                  <label style="letter-spacing:2px;"><small>NGP Accomplishment</small></label>
                  <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter NGP Accomplishment here.." name="NGP_Accomplishment" required>
                </div>

                <div class="form-group col-xs-6">
                  <label style="letter-spacing:2px;"><small>Inremp</small></label>
                  <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Inremp here.." name="Inremp" required>
                </div>

                <div class="form-group col-xs-6">
                  <label style="letter-spacing:2px;"><small>CBFM-CARP</small></label>
                  <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter CBFM-CARP here.." name="CBFM_CARP" required>
                </div>

                <div class="form-group col-xs-6">
                  <label style="letter-spacing:2px;"><small>Tenurial Instrument</small></label>
                  <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Tenurial Instrument here.." name="Tenurial_Instrument" required>
                </div>
                <input type="hidden" name="Total">
             

                <div class="form-group col-xs-12" style="margin-top:-10px; margin-top:0.3px;">
                  
                <label style="letter-spacing: 2px;"><small>Province</small></label>
                    <select required name="Province" class="form-control" style="letter-spacing:1px;">
                          <option value="" disabled selected>-- Select Province --</option>
                          <option value="Bukidnon">Bukidnon</option>
                          <option value="Camiguin">Camiguin</option>
                          <option value="Lanao Del Norte">Lanao Del Norte</option>
                          <option value="Misamis Occidental">Misamis Occidental</option>
                          <option value="Misamis Oriental">Misamis Oriental</option>
                    </select>

                </div>
                
        </div>
  <center>
          <button type="submit" name="tbl7_save" class="btn btn-default" style="letter-spacing:3px; background-color:#FE4A49; color:white; width: 93%;"><span class="glyphicon glyphicon-floppy-save"></span> SAVE</button></form>
 </center><br>
      </div>
    </div>
  </div>







<div class="modal fade" id="tbl8-add" role="dialog">
    <div class="modal-dialog modal-md" style="width:60%;">
      <div class="modal-content">
              <div class="modal-header" >
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <center><h4 class="modal-title" style="letter-spacing:2px; color:red;">Enter the Following</h4></center>
              </div> 
          <form method="POST" autocomplete="off">
              <div class="modal-body">
                <div class="form-group col-xs-6">
                  <label style="letter-spacing:2px;"><small>Within CBFM Area No.</small></label>
                 <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Within CBFM Area (No.) here.." name="Within_CBFM_Area_No" required>
                </div>

                <div class="form-group col-xs-6">
                  <label style="letter-spacing:2px;"><small>Within CBFM Area (ha)</small></label>
                  <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Within CBFM Area (ha) here.." name="Within_CBFM_Area_ha" required>
                </div>

                <div class="form-group col-xs-6">
                  <label style="letter-spacing:2px;"><small>DENR Jurisdiction Area No.</small></label>
                  <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter DENR Jurisdiction Area (No) here.." name="DENR_Jurisdiction_Area_No" required>
                </div>

                <div class="form-group col-xs-6">
                  <label style="letter-spacing:2px;"><small>DENR Jurisdiction (ha)</small></label>
                  <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter DENR Jurisdiction (ha) here.." name="DENR_Jurisdiction_ha" required>
                </div>

                <div class="form-group col-xs-6">
                  <label style="letter-spacing:2px;"><small>Devolved to LGUs No.</small></label>
                  <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Devolved to LGUs No. here.." name="Devolved_to_LGUs_No" required>
                </div>

                <div class="form-group col-xs-6">
                  <label style="letter-spacing:2px;"><small>Devolved to LGUs (ha)</small></label>
                  <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Devolved to LGUs (ha) here.." name="Devolved_to_LGUs_ha" required>
                </div>

                <div class="form-group col-xs-12" style="margin-top:-10px; margin-top:0.3px;">
                  
                <label style="letter-spacing: 2px;"><small>Operating Unit</small></label>
                    <select required name="OperatingUnit" class="form-control" style="letter-spacing:1px;">
                          <option value="" disabled selected>---</option>
                          <option value="Valencia City">Valencia City</option>
                          <option value="Manolo Fortich">Manolo Fortich</option>
                          <option value="Don Carlos">Don Carlos</option>
                          <option value="Talakag">Talakag</option>
                          <option value="Sub-Office Pangantucan">Sub Office Pangantucan</option>
                          <option value="Mt. Kitanglad RNP">Mt. Kitanglad RNP</option>
                          <option value="Mt. Kalatungan RNP">Mt. Kalatungan RNP</option>
                          <option value="Mt. Pantaron">Mt. Pantaron</option>
                          <option value="Mt. Tago RNP">Mt. Tago RNP</option>
                          <option value="BFI">BFI</option>
                          <option value="Hineleban Foundation">Hineleban Foundation</option>
                          <option value="Non-PA">Non-PA</option>
                          <option value="Mt. Timpoong Hibok-Hibok">Mt. Timpoong Hibok-Hibok</option>
                          <option value="Iligan City">Iligan City</option>
                          <option value="CENRO Kolambugan">CENRO Kolambugan</option>
                          <option value="Siad Hindang">Siad Hindang</option>
                          <option value="Siad Nunungan">Siad Nunungan</option>
                          <option value="Mt. Inayawan RNP">Mt. Inayawan RNP</option>
                          <option value="Bacolod Kauswagan PLS">Bacolod Kauswagan PLS</option>
                          <option value="Lake Lanao WPDP">Lake Lanao WPDP</option>
                          <option value="CENRO Ozamiz City">CENRO Ozamiz City</option>
                          <option value="CENRO Oroquieta City">CENRO Oroquieta City</option>
                          <option value="Mt. Malindang RNP">Mt. Malindang RNP</option>
                          <option value="Mt. Baliangao PLS">Mt. Baliangao PLS</option>
                          <option value="CENRO Initao">CENRO Initao</option>
                          <option value="CENRO Gingoog City">Cenro Gingoog City</option>
                          <option value="Mt. Balatukan">Mt. Balatukan</option>
                          <option value="Mimbilisan">Mimbilisan</option>
                          <option value="Initao Libertad">Initao Libertad</option>
                    </select>

                </div>
                
        </div>
  <center>
          <button type="submit" name="tbl8_save" class="btn btn-default" style="letter-spacing:3px; background-color:#FE4A49; color:white; width: 93%;"><span class="glyphicon glyphicon-floppy-save"></span> SAVE</button></form>
 </center><br>
      </div>
    </div>
  </div>



<div class="modal fade" id="tbl9-add" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title" style="letter-spacing:2px; color:red;">Enter the Following</h4></center>
        </div> 
        <form method="POST" autocomplete="off">
        <div class="modal-body">
                <div class="form-group">
                  <label style="letter-spacing:2px;"><small>Province</small> </label>
                    <select required name="Province" class="form-control" style="letter-spacing:1px;">
                          <option value="" disabled selected>-- Select Province --</option>
                          <option value="Bukidnon">Bukidnon</option>
                          <option value="Camiguin">Camiguin</option>
                          <option value="Lanao Del Norte">Lanao Del Norte</option>
                          <option value="Misamis Occidental">Misamis Occidental</option>
                          <option value="Misamis Oriental">Misamis Oriental</option>
                    </select>
                </div>

                <div class="form-group" style="margin-top:-10px;">
                  <label style="letter-spacing:2px;"><small>Municipality</small></label>
                  <input type="text" class="form-control"  placeholder="Enter Municipality here.." name="Municipality" required>

                  <label style="letter-spacing:2px;"><small>Uncontested</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Uncontested here.." name="Uncontested" required>

                <label style="letter-spacing:2px;"><small>Contested</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Contested here.." name="Contested" required>

                </div>
              
                
        </div>
        <div class="modal-footer" style="">
          <button type="submit" name="tbl9_save" class="btn btn-default" style="letter-spacing:3px; background-color:#FE4A49; color:white; width: 100%;"><span class="glyphicon glyphicon-floppy-save"></span> SAVE</button></form>
      
        </div>
      </div>
    </div>
  </div>



  <div class="modal fade" id="tbl10-add" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title" style="letter-spacing:2px; color:red;">Enter the Following</h4></center>
        </div> 
        <form method="POST" autocomplete="off">
        <div class="modal-body">

                <div class="form-group" style="margin-top:-10px;">

                <label style="letter-spacing: 2px;"><small>Operating Unit</small></label>
                    <select required name="OperatingUnit" class="form-control" style="letter-spacing:1px;">
                          <option value="" disabled selected>---</option>
                          <option value="Valencia City">Valencia City</option>
                          <option value="Manolo Fortich">Manolo Fortich</option>
                          <option value="Don Carlos">Don Carlos</option>
                          <option value="Talakag">Talakag</option>
                          <option value="Sub-Office Pangantucan">Sub Office Pangantucan</option>
                          <option value="Mt. Kitanglad RNP">Mt. Kitanglad RNP</option>
                          <option value="Mt. Kalatungan RNP">Mt. Kalatungan RNP</option>
                          <option value="Mt. Pantaron">Mt. Pantaron</option>
                          <option value="Mt. Tago RNP">Mt. Tago RNP</option>
                          <option value="BFI">BFI</option>
                          <option value="Hineleban Foundation">Hineleban Foundation</option>
                          <option value="Non-PA">Non-PA</option>
                          <option value="Mt. Timpoong Hibok-Hibok">Mt. Timpoong Hibok-Hibok</option>
                          <option value="Iligan City">Iligan City</option>
                          <option value="CENRO Kolambugan">CENRO Kolambugan</option>
                          <option value="Siad Hindang">Siad Hindang</option>
                          <option value="Siad Nunungan">Siad Nunungan</option>
                          <option value="Mt. Inayawan RNP">Mt. Inayawan RNP</option>
                          <option value="Bacolod Kauswagan PLS">Bacolod Kauswagan PLS</option>
                          <option value="Lake Lanao WPDP">Lake Lanao WPDP</option>
                          <option value="CENRO Ozamiz City">CENRO Ozamiz City</option>
                          <option value="CENRO Oroquieta City">CENRO Oroquieta City</option>
                          <option value="Mt. Malindang RNP">Mt. Malindang RNP</option>
                          <option value="Mt. Baliangao PLS">Mt. Baliangao PLS</option>
                          <option value="CENRO Initao">CENRO Initao</option>
                          <option value="CENRO Gingoog City">Cenro Gingoog City</option>
                          <option value="Mt. Balatukan">Mt. Balatukan</option>
                          <option value="Mimbilisan">Mimbilisan</option>
                          <option value="Initao Libertad">Initao Libertad</option>
                    </select>

                  <label style="letter-spacing:2px;"><small>For Renewal Renewed</small></label>
                  <input type="text" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"  placeholder="Enter For Renewal Renewed here.." name="For_Renewal_Renewed" required>

                  <label style="letter-spacing:2px;"><small>For Re-Evaluation</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter For Re-Evaluation here.." name="For_ReEvaluation" required>

                  <label style="letter-spacing:2px;"><small>For Transfer</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter For Transfer here.." name="For_Transfer" required>

                  <label style="letter-spacing:2px;"><small>For Cancellation</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter For Cancellation here.." name="For_Cancellation" required>

                  <label style="letter-spacing:2px;"><small>Area (ha)</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Area (ha) here.." name="area_ha" required>
           
                  <label style="letter-spacing:2px;"><small>Year</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Year here.." name="year" required>

                </div>
              
                
        </div>
        <div class="modal-footer" style="">
          <button type="submit" name="tbl10_save" class="btn btn-default" style="letter-spacing:3px; background-color:#FE4A49; color:white; width: 100%;"><span class="glyphicon glyphicon-floppy-save"></span> SAVE</button></form>
      
        </div>
      </div>
    </div>
  </div>




  <div class="modal fade" id="tbl60-add" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title" style="letter-spacing:2px; color:red;">Enter the Following</h4></center>
        </div> 
        <form method="POST" autocomplete="off">
        <div class="modal-body">

                <div class="form-group" style="margin-top:-10px;">

                <label style="letter-spacing: 2px;"><small>Operating Unit</small></label>
                    <select required name="OperatingUnit" class="form-control" style="letter-spacing:1px;">
                          <option value="" disabled selected>---</option>
                          <option value="Valencia City">Valencia City</option>
                          <option value="Manolo Fortich">Manolo Fortich</option>
                          <option value="Don Carlos">Don Carlos</option>
                          <option value="Talakag">Talakag</option>
                          <option value="Sub-Office Pangantucan">Sub Office Pangantucan</option>
                          <option value="Mt. Kitanglad RNP">Mt. Kitanglad RNP</option>
                          <option value="Mt. Kalatungan RNP">Mt. Kalatungan RNP</option>
                          <option value="Mt. Pantaron">Mt. Pantaron</option>
                          <option value="Mt. Tago RNP">Mt. Tago RNP</option>
                          <option value="BFI">BFI</option>
                          <option value="Hineleban Foundation">Hineleban Foundation</option>
                          <option value="Non-PA">Non-PA</option>
                          <option value="Mt. Timpoong Hibok-Hibok">Mt. Timpoong Hibok-Hibok</option>
                          <option value="Iligan City">Iligan City</option>
                          <option value="CENRO Kolambugan">CENRO Kolambugan</option>
                          <option value="Siad Hindang">Siad Hindang</option>
                          <option value="Siad Nunungan">Siad Nunungan</option>
                          <option value="Mt. Inayawan RNP">Mt. Inayawan RNP</option>
                          <option value="Bacolod Kauswagan PLS">Bacolod Kauswagan PLS</option>
                          <option value="Lake Lanao WPDP">Lake Lanao WPDP</option>
                          <option value="CENRO Ozamiz City">CENRO Ozamiz City</option>
                          <option value="CENRO Oroquieta City">CENRO Oroquieta City</option>
                          <option value="Mt. Malindang RNP">Mt. Malindang RNP</option>
                          <option value="Mt. Baliangao PLS">Mt. Baliangao PLS</option>
                          <option value="CENRO Initao">CENRO Initao</option>
                          <option value="CENRO Gingoog City">Cenro Gingoog City</option>
                          <option value="Mt. Balatukan">Mt. Balatukan</option>
                          <option value="Mimbilisan">Mimbilisan</option>
                          <option value="Initao Libertad">Initao Libertad</option>
                    </select>

                  <label style="letter-spacing:2px;"><small>No. of CBFMA</small></label>
                  <input type="text" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"  placeholder="Enter No. of CBFMA here.." name="No_of_CBFMA" required>

                  <label style="letter-spacing:2px;"><small>CBFMA With No CRMF</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter CBFMA With No CRMF here.." name="CBFMA_With_No_CRMF" required>

                  <label style="letter-spacing:2px;"><small>CBFMA With CRMF Needs Updating</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter CBFMA With CRMF Needs Updating here.." name="CBFMA_With_CRMF_Needs_Updating" required>

                  <label style="letter-spacing:2px;"><small>CBFMA With Updated CRMF</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter CBFMA With Updated CRMF here.." name="CBFMA_With_Updated_CRMF" required>
           
                  <label style="letter-spacing:2px;"><small>CBFMA With Affirmed CRMF</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter CBFMA With Affirmed CRMF here.." name="CBFMA_With_Affirmed_CRMF" required>

                </div>
              
                
        </div>
        <div class="modal-footer" style="">
          <button type="submit" name="tbl60_save" class="btn btn-default" style="letter-spacing:3px; background-color:#FE4A49; color:white; width: 100%;"><span class="glyphicon glyphicon-floppy-save"></span> SAVE</button></form>
      
        </div>
      </div>
    </div>
  </div>


    <div class="modal fade" id="tbl11-add" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title" style="letter-spacing:2px; color:red;">Enter the Following</h4></center>
        </div> 
        <form method="POST" autocomplete="off">
        <div class="modal-body">

                <div class="form-group" style="margin-top:-10px;">

                <label style="letter-spacing: 2px;"><small>Operating Unit</small></label>
                    <select required name="OperatingUnit" class="form-control" style="letter-spacing:1px;">
                          <option value="" disabled selected>---</option>
                          <option value="Valencia City">Valencia City</option>
                          <option value="Manolo Fortich">Manolo Fortich</option>
                          <option value="Don Carlos">Don Carlos</option>
                          <option value="Talakag">Talakag</option>
                          <option value="Sub-Office Pangantucan">Sub Office Pangantucan</option>
                          <option value="Mt. Kitanglad RNP">Mt. Kitanglad RNP</option>
                          <option value="Mt. Kalatungan RNP">Mt. Kalatungan RNP</option>
                          <option value="Mt. Pantaron">Mt. Pantaron</option>
                          <option value="Mt. Tago RNP">Mt. Tago RNP</option>
                          <option value="BFI">BFI</option>
                          <option value="Hineleban Foundation">Hineleban Foundation</option>
                          <option value="Non-PA">Non-PA</option>
                          <option value="Mt. Timpoong Hibok-Hibok">Mt. Timpoong Hibok-Hibok</option>
                          <option value="Iligan City">Iligan City</option>
                          <option value="CENRO Kolambugan">CENRO Kolambugan</option>
                          <option value="Siad Hindang">Siad Hindang</option>
                          <option value="Siad Nunungan">Siad Nunungan</option>
                          <option value="Mt. Inayawan RNP">Mt. Inayawan RNP</option>
                          <option value="Bacolod Kauswagan PLS">Bacolod Kauswagan PLS</option>
                          <option value="Lake Lanao WPDP">Lake Lanao WPDP</option>
                          <option value="CENRO Ozamiz City">CENRO Ozamiz City</option>
                          <option value="CENRO Oroquieta City">CENRO Oroquieta City</option>
                          <option value="Mt. Malindang RNP">Mt. Malindang RNP</option>
                          <option value="Mt. Baliangao PLS">Mt. Baliangao PLS</option>
                          <option value="CENRO Initao">CENRO Initao</option>
                          <option value="CENRO Gingoog City">Cenro Gingoog City</option>
                          <option value="Mt. Balatukan">Mt. Balatukan</option>
                          <option value="Mimbilisan">Mimbilisan</option>
                          <option value="Initao Libertad">Initao Libertad</option>
                    </select>

                  <label style="letter-spacing:2px;"><small>For Renewal Renewed</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter For Renewal Renewed here.." name="For_Renewal_Renewed" required>

                  <label style="letter-spacing:2px;"><small>For Re-Evaluation</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter For Re-Evaluation here.." name="For_ReEvaluation" required>

                  <label style="letter-spacing:2px;"><small>For Transfer</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter For Transfer here.." name="For_Transfer" required>

                  <label style="letter-spacing:2px;"><small>For Cancellation</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter For Cancellation here.." name="For_Cancellation" required>
           
                  <label style="letter-spacing:2px;"><small>Area (ha)</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Area (ha) here.." name="area_ha" required>
           
                  <label style="letter-spacing:2px;"><small>Year</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Year here.." name="year" required>
                </div>
              
                
        </div>
        <div class="modal-footer" style="">
          <button type="submit" name="tbl11_save" class="btn btn-default" style="letter-spacing:3px; background-color:#FE4A49; color:white; width: 100%;"><span class="glyphicon glyphicon-floppy-save"></span> SAVE</button></form>
      
        </div>
      </div>
    </div>
  </div>




  <div class="modal fade" id="tbl12-add" role="dialog">
    <div class="modal-dialog modal-md" style="width:60%;">
      <div class="modal-content">
              <div class="modal-header" >
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <center><h4 class="modal-title" style="letter-spacing:2px; color:red;">Enter the Following</h4></center>
              </div> 
          <form method="POST" autocomplete="off">
              <div class="modal-body">
                <div class="form-group col-xs-6">
                  <label style="letter-spacing:2px;"><small>Within CBFM Area No.</small></label>
                 <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Within CBFM Area (No.) here.." name="Within_CBFM_Area_No" required>
                </div>

                <div class="form-group col-xs-6">
                  <label style="letter-spacing:2px;"><small>Within CBFM Area (ha)</small></label>
                  <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Within CBFM Area (ha) here.." name="Within_CBFM_Area_ha" required>
                </div>

                <div class="form-group col-xs-6">
                  <label style="letter-spacing:2px;"> <small>DENR Jurisdiction Area No.</small></label>
                  <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter DENR Jurisdiction Area (No) here.." name="DENR_Jurisdiction_Area_No" required>
                </div>

                <div class="form-group col-xs-6">
                  <label style="letter-spacing:2px;"><small>DENR Jurisdiction (ha)</small></label>
                  <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter DENR Jurisdiction (ha) here.." name="DENR_Jurisdiction_ha" required>
                </div>

                <div class="form-group col-xs-6">
                  <label style="letter-spacing:2px;"><small>Devolved to LGUs No.</small></label>
                  <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Devolved to LGUs No. here.." name="Devolved_to_LGUs_No" required>
                </div>

                <div class="form-group col-xs-6">
                  <label style="letter-spacing:2px;"><small>Devolved to LGUs (ha)</small></label>
                  <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Devolved to LGUs (ha) here.." name="Devolved_to_LGUs_ha" required>
                </div>

                <div class="form-group col-xs-12" style="margin-top:-10px; margin-top:0.3px;">
                  
                <label style="letter-spacing: 2px;"><small>Operating Unit</small></label>
                    <select required name="OperatingUnit" class="form-control" style="letter-spacing:1px;">
                          <option value="" disabled selected>---</option>
                          <option value="Valencia City">Valencia City</option>
                          <option value="Manolo Fortich">Manolo Fortich</option>
                          <option value="Don Carlos">Don Carlos</option>
                          <option value="Talakag">Talakag</option>
                          <option value="Sub-Office Pangantucan">Sub Office Pangantucan</option>
                          <option value="Mt. Kitanglad RNP">Mt. Kitanglad RNP</option>
                          <option value="Mt. Kalatungan RNP">Mt. Kalatungan RNP</option>
                          <option value="Mt. Pantaron">Mt. Pantaron</option>
                          <option value="Mt. Tago RNP">Mt. Tago RNP</option>
                          <option value="BFI">BFI</option>
                          <option value="Hineleban Foundation">Hineleban Foundation</option>
                          <option value="Non-PA">Non-PA</option>
                          <option value="Mt. Timpoong Hibok-Hibok">Mt. Timpoong Hibok-Hibok</option>
                          <option value="Iligan City">Iligan City</option>
                          <option value="CENRO Kolambugan">CENRO Kolambugan</option>
                          <option value="Siad Hindang">Siad Hindang</option>
                          <option value="Siad Nunungan">Siad Nunungan</option>
                          <option value="Mt. Inayawan RNP">Mt. Inayawan RNP</option>
                          <option value="Bacolod Kauswagan PLS">Bacolod Kauswagan PLS</option>
                          <option value="Lake Lanao WPDP">Lake Lanao WPDP</option>
                          <option value="CENRO Ozamiz City">CENRO Ozamiz City</option>
                          <option value="CENRO Oroquieta City">CENRO Oroquieta City</option>
                          <option value="Mt. Malindang RNP">Mt. Malindang RNP</option>
                          <option value="Mt. Baliangao PLS">Mt. Baliangao PLS</option>
                          <option value="CENRO Initao">CENRO Initao</option>
                          <option value="CENRO Gingoog City">Cenro Gingoog City</option>
                          <option value="Mt. Balatukan">Mt. Balatukan</option>
                          <option value="Mimbilisan">Mimbilisan</option>
                          <option value="Initao Libertad">Initao Libertad</option>
                    </select>

                </div>
                
        </div>
  <center>
          <button type="submit" name="tbl12_save" class="btn btn-default" style="letter-spacing:3px; background-color:#FE4A49; color:white; width: 93%;"><span class="glyphicon glyphicon-floppy-save"></span> SAVE</button></form>
 </center><br>
      </div>
    </div>
  </div>



  <div class="modal fade" id="tbl13-add" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title" style="letter-spacing:2px; color:red;">Enter the Following</h4></center>
        </div> 
        <form method="POST" autocomplete="off">
        <div class="modal-body">

                <div class="form-group" style="margin-top:-10px;">
                  <label style="letter-spacing:2px;"><small>Coastal name Water/Bay and Lakes</small></label>
                  <input type="text" class="form-control"  placeholder="Enter Coastal name here.." name="Coastal_name_wbl" required>

                  <label style="letter-spacing:2px;"><small>Category</small></label>
                  <input type="text" class="form-control"  placeholder="Enter Category here.." name="Category" required>

                  <label style="letter-spacing:2px;"><small>Classification</small></label>
                  <input type="text" class="form-control"  placeholder="Enter Classification here.." name="Classification" required>

                  <label style="letter-spacing:2px;"><small>Location</small></label>
                  <input type="text" class="form-control"  placeholder="Enter Location here.." name="Location" required>

                  <label style="letter-spacing:2px;"><small>Exit point</small></label>
                  <input type="text" class="form-control"  placeholder="Enter Exit point here.." name="Exit_point" required>

                </div>
              
                
        </div>
        <div class="modal-footer" style="">
          <button type="submit" name="tbl13_save" class="btn btn-default" style="letter-spacing:3px; background-color:#FE4A49; color:white; width: 100%;"><span class="glyphicon glyphicon-floppy-save"></span> SAVE</button></form>
      
        </div>
      </div>
    </div>
  </div>






    <div class="modal fade" id="tbl14-add" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title" style="letter-spacing:2px; color:red;">Enter the Following</h4></center>
        </div> 
        <form method="POST" autocomplete="off">
        <div class="modal-body">

                <div class="form-group" style="margin-top:-10px;">
                  <label style="letter-spacing:2px;"> <small>Name of Rivers </small></label>
                  <input type="text" class="form-control"  placeholder="Enter Name of Rivers here.." name="Name_Rivers" required>

              
                  <input type="hidden" name="Category" value="Major River">

                  <label style="letter-spacing:2px;"><small>Classification</small></label>
                  <input type="text" class="form-control"  placeholder="Enter Classification here.." name="Classification" required>

                  <label style="letter-spacing:2px;"><small>Location</small></label>
                  <input type="text" class="form-control"  placeholder="Enter Location here.." name="Location" required>

                  <label style="letter-spacing:2px;"><small>Exit point</small></label>
                  <input type="text" class="form-control"  placeholder="Enter Exit point here.." name="Exit_point" required>

                </div>
              
       
        </div>
        <div class="modal-footer" style="">
          <button type="submit" name="tbl14_save" class="btn btn-default" style="letter-spacing:3px; background-color:#FE4A49; color:white; width: 100%;"><span class="glyphicon glyphicon-floppy-save"></span> SAVE</button></form>
      
        </div>
      </div>
    </div>
  </div>



      <div class="modal fade" id="tbl15-add" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title" style="letter-spacing:2px; color:red;">Enter the Following</h4></center>
        </div> 
        <form method="POST" autocomplete="off">
        <div class="modal-body">

                <div class="form-group" style="margin-top:-10px;">
                  <label style="letter-spacing:2px;"> <small>Name of Rivers</small> </label>
                  <input type="text" class="form-control"  placeholder="Enter Name of Rivers here.." name="Name_Rivers" required>

                  <input type="hidden" name="Category" value="Minor River">

                  <label style="letter-spacing:2px;"><small>Classification</small></label>
                  <input type="text" class="form-control"  placeholder="Enter Classification here.." name="Classification" required>

                  <label style="letter-spacing:2px;"><small>Location</small></label>
                  <input type="text" class="form-control"  placeholder="Enter Location here.." name="Location" required>

                  <label style="letter-spacing:2px;"><small>Exit point</small></label>
                  <input type="text" class="form-control"  placeholder="Enter Exit point here.." name="Exit_point" required>

                </div>
              
       
        </div>
        <div class="modal-footer" style="">
          <button type="submit" name="tbl15_save" class="btn btn-default" style="letter-spacing:3px; background-color:#FE4A49; color:white; width: 100%;"><span class="glyphicon glyphicon-floppy-save"></span> SAVE</button></form>
      
        </div>
      </div>
    </div>
  </div>



        <div class="modal fade" id="tbl16-add" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title" style="letter-spacing:2px; color:red;">Enter the Following</h4></center>
        </div> 
        <form method="POST" autocomplete="off">
        <div class="modal-body">

                <div class="form-group" style="margin-top:-10px;">
                  <label style="letter-spacing:2px;"> <small>Name of Rivers</small> </label>
                  <input type="text" class="form-control"  placeholder="Enter Name of Rivers here.." name="Name_Rivers" required>

                  <input type="hidden" name="Category" value="Principal River">

                  <label style="letter-spacing:2px;"><small>Classification</small></label>
                  <input type="text" class="form-control"  placeholder="Enter Classification here.." name="Classification" required>

                  <label style="letter-spacing:2px;"><small>Location</small></label>
                  <input type="text" class="form-control"  placeholder="Enter Location here.." name="Location" required>

                  <label style="letter-spacing:2px;"><small>Exit point</small></label>
                  <input type="text" class="form-control"  placeholder="Enter Exit point here.." name="Exit_point" required>

                </div>
              
       
        </div>
        <div class="modal-footer" style="">
          <button type="submit" name="tbl16_save" class="btn btn-default" style="letter-spacing:3px; background-color:#FE4A49; color:white; width: 100%;"><span class="glyphicon glyphicon-floppy-save"></span> SAVE</button></form>
      
        </div>
      </div>
    </div>
  </div>





    <div class="modal fade" id="tbl17-add" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title" style="letter-spacing:2px; color:red;">Enter the Following</h4></center>
        </div> 
        <form method="POST" autocomplete="off"> 
        <div class="modal-body">
                <div class="form-group">
                    <label style="letter-spacing:2px;"><small>Province</small></label>
                      <select required name="penro_cenro" class="form-control" style="letter-spacing:1px;">
                          <option value="" disabled selected>---</option>
                          <option value="Bukidnon">Bukidnon</option>
                          <option value="Camiguin">Camiguin</option>
                          <option value="Lanao del Norte">Lanao del Norte</option>
                          <option value="Misamis Occidental">Misamis Occidental</option>
                          <option value="Misamis Oriental">Misamis Oriental</option>
                    </select>
                </div>

                <div class="form-group" style="margin-top:-10px;">
                  <label style="letter-spacing:2px;"><small>Number extension officers hired</small> </label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter number extension officers hired here.." name="numbers" required>

                  <label style="letter-spacing:2px;"><small>Year</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Year here.." name="year" required>

                </div>

                
        </div>
        <div class="modal-footer" style="">
          <button type="submit" name="tbl17_save" class="btn btn-default" style="letter-spacing:3px; background-color:#FE4A49; color:white; width: 100%;"><span class="glyphicon glyphicon-floppy-save"></span> SAVE</button></form>
      
        </div>
      </div>
    </div>
  </div>




      <div class="modal fade" id="tbl18-add" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title" style="letter-spacing:2px; color:red;">Enter the Following</h4></center>
        </div> 
        <form method="POST" autocomplete="off"> 
        <div class="modal-body">
                <div class="form-group">
                    <label style="letter-spacing:2px;"><small>Province</small></label>
                      <select required name="penro_cenro" class="form-control" style="letter-spacing:1px;">
                          <option value="" disabled selected>---</option>
                          <option value="Bukidnon">Bukidnon</option>
                          <option value="Camiguin">Camiguin</option>
                          <option value="Lanao del Norte">Lanao del Norte</option>
                          <option value="Misamis Occidental">Misamis Occidental</option>
                          <option value="Misamis Oriental">Misamis Oriental</option>
                    </select>
                </div>

                <div class="form-group" style="margin-top:-10px;">
                  <label style="letter-spacing:2px;"><small>Number of Jobs </small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter number of jobs here.." name="numbers" required>

                  <label style="letter-spacing:2px;"><small>Year</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Year here.." name="year" required>

                </div>

                
        </div>
        <div class="modal-footer" style="">
          <button type="submit" name="tbl18_save" class="btn btn-default" style="letter-spacing:3px; background-color:#FE4A49; color:white; width: 100%;"><span class="glyphicon glyphicon-floppy-save"></span> SAVE</button></form>
      
        </div>
      </div>
    </div>
  </div>


        <div class="modal fade" id="tbl19-add" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title" style="letter-spacing:2px; color:red;">Enter the Following</h4></center>
        </div> 
        <form method="POST" autocomplete="off"> 
        <div class="modal-body">
                <div class="form-group">
                    <label style="letter-spacing:2px;"><small>Province</small></label>
                      <select required name="penro_cenro" class="form-control" style="letter-spacing:1px;">
                          <option value="" disabled selected>---</option>
                          <option value="Bukidnon">Bukidnon</option>
                          <option value="Camiguin">Camiguin</option>
                          <option value="Lanao del Norte">Lanao del Norte</option>
                          <option value="Misamis Occidental">Misamis Occidental</option>
                          <option value="Misamis Oriental">Misamis Oriental</option>
                    </select>
                </div>

                <div class="form-group" style="margin-top:-10px;">
                  <label style="letter-spacing:2px;"><small>Number of Persons Employed</small> </label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter number of persons employed here.." name="numbers" required>

                  <label style="letter-spacing:2px;"><small>Year</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Year here.." name="year" required>

                </div>

                
        </div>
        <div class="modal-footer" style="">
          <button type="submit" name="tbl19_save" class="btn btn-default" style="letter-spacing:3px; background-color:#FE4A49; color:white; width: 100%;"><span class="glyphicon glyphicon-floppy-save"></span> SAVE</button></form>
      
        </div>
      </div>
    </div>
  </div>


  <div class="modal fade" id="tbl20-add" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title" style="letter-spacing:2px; color:red;">Enter the Following</h4></center>
        </div> 
        <form method="POST" autocomplete="off"> 
        <div class="modal-body">
                <div class="form-group">
                  <label style="letter-spacing:2px;"><small>No. of Units </small></label>
                  <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter No. of Units here.." name="NoUnits" required>
                </div>

                <div class="form-group" style="margin-top:-10px;">
                  <label style="letter-spacing:2px;"><small>Est.Value (P)</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Est. Value (P) here.." name="EstValue" required>

                  <label style="letter-spacing:2px;"><small>Year</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Year here.." name="Year" required>

                </div>
                <div class="form-group" style="margin-top:-10px;">
                  
                <label style="letter-spacing: 2px;"><small>Operating Unit</small></label>
                    <select required name="OperatingUnit" class="form-control" style="letter-spacing:1px;">
                          <option value="" disabled selected>---</option>
                          <option value="Valencia City">Valencia City</option>
                          <option value="Manolo Fortich">Manolo Fortich</option>
                          <option value="Don Carlos">Don Carlos</option>
                          <option value="Talakag">Talakag</option>
                          <option value="Sub-Office Pangantucan">Sub Office Pangantucan</option>
                          <option value="Mt. Kitanglad RNP">Mt. Kitanglad RNP</option>
                          <option value="Mt. Kalatungan RNP">Mt. Kalatungan RNP</option>
                          <option value="Mt. Pantaron">Mt. Pantaron</option>
                          <option value="Mt. Tago RNP">Mt. Tago RNP</option>
                          <option value="BFI">BFI</option>
                          <option value="Hineleban Foundation">Hineleban Foundation</option>
                          <option value="Non-PA">Non-PA</option>
                          <option value="Mt. Timpoong Hibok-Hibok">Mt. Timpoong Hibok-Hibok</option>
                          <option value="Iligan City">Iligan City</option>
                          <option value="CENRO Kolambugan">CENRO Kolambugan</option>
                          <option value="Siad Hindang">Siad Hindang</option>
                          <option value="Siad Nunungan">Siad Nunungan</option>
                          <option value="Mt. Inayawan RNP">Mt. Inayawan RNP</option>
                          <option value="Bacolod Kauswagan PLS">Bacolod Kauswagan PLS</option>
                          <option value="Lake Lanao WPDP">Lake Lanao WPDP</option>
                          <option value="CENRO Ozamiz City">CENRO Ozamiz City</option>
                          <option value="CENRO Oroquieta City">CENRO Oroquieta City</option>
                          <option value="Mt. Malindang RNP">Mt. Malindang RNP</option>
                          <option value="Mt. Baliangao PLS">Mt. Baliangao PLS</option>
                          <option value="CENRO Initao">CENRO Initao</option>
                          <option value="CENRO Gingoog City">Cenro Gingoog City</option>
                          <option value="Mt. Balatukan">Mt. Balatukan</option>
                          <option value="Mimbilisan">Mimbilisan</option>
                          <option value="Initao Libertad">Initao Libertad</option>
                    </select>

                </div>
                
        </div>
        <div class="modal-footer" style="">
          <button type="submit" name="tbl20_save" class="btn btn-default" style="letter-spacing:3px; background-color:#FE4A49; color:white; width: 100%;"><span class="glyphicon glyphicon-floppy-save"></span> SAVE</button></form>
      
        </div>
      </div>
    </div>
  </div>



 <!-- Modal -->
  <div class="modal fade" id="tbl21-add" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title" style="letter-spacing:2px; color:red;">Enter the Following</h4></center>
        </div> 
        <form method="POST" autocomplete="off">
        <div class="modal-body">
                <div class="form-group">
                  <label style="letter-spacing:2px;"><small>Volume (in Board Feet)</small> </label>
                  <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Volume (in Board Feet) here.." name="Volume_inBoardFeet" required>
                </div>

                <div class="form-group" style="margin-top:-10px;">
                  <label style="letter-spacing:2px;"><small>Est.Value (P)</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Est. Value (P) here.." name="EstValue" required>

                  <label style="letter-spacing:2px;"><small>Year</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Year here.." name="Year" required>

                </div>
                <div class="form-group" style="margin-top:-10px;">
                  
                <label style="letter-spacing: 2px;"><small>Operating Unit</small></label>
                    <select required name="OperatingUnit" class="form-control" style="letter-spacing:1px;">
                          <option value="" disabled selected>---</option>
                          <option value="Valencia City">Valencia City</option>
                          <option value="Manolo Fortich">Manolo Fortich</option>
                          <option value="Don Carlos">Don Carlos</option>
                          <option value="Talakag">Talakag</option>
                          <option value="Sub-Office Pangantucan">Sub Office Pangantucan</option>
                          <option value="Mt. Kitanglad RNP">Mt. Kitanglad RNP</option>
                          <option value="Mt. Kalatungan RNP">Mt. Kalatungan RNP</option>
                          <option value="Mt. Pantaron">Mt. Pantaron</option>
                          <option value="Mt. Tago RNP">Mt. Tago RNP</option>
                          <option value="BFI">BFI</option>
                          <option value="Hineleban Foundation">Hineleban Foundation</option>
                          <option value="Non-PA">Non-PA</option>
                          <option value="Mt. Timpoong Hibok-Hibok">Mt. Timpoong Hibok-Hibok</option>
                          <option value="Iligan City">Iligan City</option>
                          <option value="CENRO Kolambugan">CENRO Kolambugan</option>
                          <option value="Siad Hindang">Siad Hindang</option>
                          <option value="Siad Nunungan">Siad Nunungan</option>
                          <option value="Mt. Inayawan RNP">Mt. Inayawan RNP</option>
                          <option value="Bacolod Kauswagan PLS">Bacolod Kauswagan PLS</option>
                          <option value="Lake Lanao WPDP">Lake Lanao WPDP</option>
                          <option value="CENRO Ozamiz City">CENRO Ozamiz City</option>
                          <option value="CENRO Oroquieta City">CENRO Oroquieta City</option>
                          <option value="Mt. Malindang RNP">Mt. Malindang RNP</option>
                          <option value="Mt. Baliangao PLS">Mt. Baliangao PLS</option>
                          <option value="CENRO Initao">CENRO Initao</option>
                          <option value="CENRO Gingoog City">Cenro Gingoog City</option>
                          <option value="Mt. Balatukan">Mt. Balatukan</option>
                          <option value="Mimbilisan">Mimbilisan</option>
                          <option value="Initao Libertad">Initao Libertad</option>
                    </select>

                </div>
                
        </div>
        <div class="modal-footer" style="">
          <button type="submit" name="tbl21_save" class="btn btn-default" style="letter-spacing:3px; background-color:#FE4A49; color:white; width: 100%;"><span class="glyphicon glyphicon-floppy-save"></span> SAVE</button></form>
      
        </div>
      </div>
    </div>
  </div>


    <div class="modal fade" id="tbl22-add" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title" style="letter-spacing:2px; color:red;">Enter the Following</h4></center>
        </div> 
        <form method="POST" autocomplete="off"> 
        <div class="modal-body">
                <div class="form-group">
                  <label style="letter-spacing:2px;"><small>No. of Units </small></label>
                  <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter No. of Units here.." name="NoUnits" required>
                </div>

                <div class="form-group" style="margin-top:-10px;">
                  <label style="letter-spacing:2px;"><small>Est.Value (P)</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Est. Value (P) here.." name="EstValue" required>

                  <label style="letter-spacing:2px;"><small>Year</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Year here.." name="Year" required>

                </div>
                <div class="form-group" style="margin-top:-10px;">
                  
                <label style="letter-spacing: 2px;"><small>Operating Unit</small></label>
                    <select required name="OperatingUnit" class="form-control" style="letter-spacing:1px;">
                          <option value="" disabled selected>---</option>
                          <option value="Valencia City">Valencia City</option>
                          <option value="Manolo Fortich">Manolo Fortich</option>
                          <option value="Don Carlos">Don Carlos</option>
                          <option value="Talakag">Talakag</option>
                          <option value="Sub-Office Pangantucan">Sub Office Pangantucan</option>
                          <option value="Mt. Kitanglad RNP">Mt. Kitanglad RNP</option>
                          <option value="Mt. Kalatungan RNP">Mt. Kalatungan RNP</option>
                          <option value="Mt. Pantaron">Mt. Pantaron</option>
                          <option value="Mt. Tago RNP">Mt. Tago RNP</option>
                          <option value="BFI">BFI</option>
                          <option value="Hineleban Foundation">Hineleban Foundation</option>
                          <option value="Non-PA">Non-PA</option>
                          <option value="Mt. Timpoong Hibok-Hibok">Mt. Timpoong Hibok-Hibok</option>
                          <option value="Iligan City">Iligan City</option>
                          <option value="CENRO Kolambugan">CENRO Kolambugan</option>
                          <option value="Siad Hindang">Siad Hindang</option>
                          <option value="Siad Nunungan">Siad Nunungan</option>
                          <option value="Mt. Inayawan RNP">Mt. Inayawan RNP</option>
                          <option value="Bacolod Kauswagan PLS">Bacolod Kauswagan PLS</option>
                          <option value="Lake Lanao WPDP">Lake Lanao WPDP</option>
                          <option value="CENRO Ozamiz City">CENRO Ozamiz City</option>
                          <option value="CENRO Oroquieta City">CENRO Oroquieta City</option>
                          <option value="Mt. Malindang RNP">Mt. Malindang RNP</option>
                          <option value="Mt. Baliangao PLS">Mt. Baliangao PLS</option>
                          <option value="CENRO Initao">CENRO Initao</option>
                          <option value="CENRO Gingoog City">Cenro Gingoog City</option>
                          <option value="Mt. Balatukan">Mt. Balatukan</option>
                          <option value="Mimbilisan">Mimbilisan</option>
                          <option value="Initao Libertad">Initao Libertad</option>
                    </select>

                </div>
                
        </div>
        <div class="modal-footer" style="">
          <button type="submit" name="tbl22_save" class="btn btn-default" style="letter-spacing:3px; background-color:#FE4A49; color:white; width: 100%;"><span class="glyphicon glyphicon-floppy-save"></span> SAVE</button></form>
      
        </div>
      </div>
    </div>
  </div>






  <div class="modal fade" id="tbl23-add" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title" style="letter-spacing:2px; color:red;">Enter the Following</h4></center>
        </div> 
        <form method="POST" autocomplete="off">
        <div class="modal-body">
                <div class="form-group">
                  <label style="letter-spacing:2px;"><small>Volume (in Lineal Meters)</small></label>
                  <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Volume (in Lineal Meters) here.." name="Volume_inLinealMeters" required>
                </div>

                <div class="form-group" style="margin-top:-10px;">
                  <label style="letter-spacing:2px;"><small>Est.Value (P)</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Est. Value (P) here.." name="EstValue" required>

                  <label style="letter-spacing:2px;"><small>Year</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Year here.." name="Year" required>

              <div class="form-group">
                  
                <label style="letter-spacing: 2px;"><small>Operating Unit</small></label>
                    <select required name="OperatingUnit" class="form-control" style="letter-spacing:1px;">
                          <option value="" disabled selected>---</option>
                          <option value="Valencia City">Valencia City</option>
                          <option value="Manolo Fortich">Manolo Fortich</option>
                          <option value="Don Carlos">Don Carlos</option>
                          <option value="Talakag">Talakag</option>
                          <option value="Sub-Office Pangantucan">Sub Office Pangantucan</option>
                          <option value="Mt. Kitanglad RNP">Mt. Kitanglad RNP</option>
                          <option value="Mt. Kalatungan RNP">Mt. Kalatungan RNP</option>
                          <option value="Mt. Pantaron">Mt. Pantaron</option>
                          <option value="Mt. Tago RNP">Mt. Tago RNP</option>
                          <option value="BFI">BFI</option>
                          <option value="Hineleban Foundation">Hineleban Foundation</option>
                          <option value="Non-PA">Non-PA</option>
                          <option value="Mt. Timpoong Hibok-Hibok">Mt. Timpoong Hibok-Hibok</option>
                          <option value="Iligan City">Iligan City</option>
                          <option value="CENRO Kolambugan">CENRO Kolambugan</option>
                          <option value="Siad Hindang">Siad Hindang</option>
                          <option value="Siad Nunungan">Siad Nunungan</option>
                          <option value="Mt. Inayawan RNP">Mt. Inayawan RNP</option>
                          <option value="Bacolod Kauswagan PLS">Bacolod Kauswagan PLS</option>
                          <option value="Lake Lanao WPDP">Lake Lanao WPDP</option>
                          <option value="CENRO Ozamiz City">CENRO Ozamiz City</option>
                          <option value="CENRO Oroquieta City">CENRO Oroquieta City</option>
                          <option value="Mt. Malindang RNP">Mt. Malindang RNP</option>
                          <option value="Mt. Baliangao PLS">Mt. Baliangao PLS</option>
                          <option value="CENRO Initao">CENRO Initao</option>
                          <option value="CENRO Gingoog City">Cenro Gingoog City</option>
                          <option value="Mt. Balatukan">Mt. Balatukan</option>
                          <option value="Mimbilisan">Mimbilisan</option>
                          <option value="Initao Libertad">Initao Libertad</option>
                    </select>

                </div>
                </div>

                
        </div>
        <div class="modal-footer" style="">
          <button type="submit" name="tbl23_save" class="btn btn-default" style="letter-spacing:3px; background-color:#FE4A49; color:white; width: 100%;"><span class="glyphicon glyphicon-floppy-save"></span> SAVE</button></form>
      
        </div>
      </div>
    </div>
  </div>




    <div class="modal fade" id="tbl24-add" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title" style="letter-spacing:2px; color:red;">Enter the Following</h4></center>
        </div> 
        <form method="POST" autocomplete="off">
        <div class="modal-body">
   
                <div class="form-group" style="margin-top:-10px;">
     
      
                    <label style="letter-spacing:2px;"><small>Province</small></label>
                      <select required name="Province" class="form-control" style="letter-spacing:1px;">
                          <option value="" disabled selected>---</option>
                          <option value="Bukidnon">Bukidnon</option>
                          <option value="Camiguin">Camiguin</option>
                          <option value="Lanao del Norte">Lanao del Norte</option>
                          <option value="Misamis Occidental">Misamis Occidental</option>
                          <option value="Misamis Oriental">Misamis Oriental</option>
                    </select>
    
                  <label style="letter-spacing:2px;"><small>Name of Watershed</small></label>
                  <input type="text" class="form-control"  placeholder="Enter Name of Watershed here.." name="Name_watershed" required>

                  <label style="letter-spacing:2px;"><small>Area ha</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Area ha here.." name="Area_ha" required>


                </div>

                
        </div>
        <div class="modal-footer" style="">
          <button type="submit" name="tbl24_save" class="btn btn-default" style="letter-spacing:3px; background-color:#FE4A49; color:white; width: 100%;"><span class="glyphicon glyphicon-floppy-save"></span> SAVE</button></form>
      
        </div>
      </div>
    </div>
  </div>



    <div class="modal fade" id="tbl25-add" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title" style="letter-spacing:2px; color:red;">Enter the Following</h4></center>
        </div> 
        <form method="POST" autocomplete="off"> 
        <div class="modal-body">
                <div class="form-group">
                    <label style="letter-spacing:2px;"><small>Province</small></label>
                      <select required name="Province" class="form-control" style="letter-spacing:1px;">
                          <option value="" disabled selected>---</option>
                          <option value="Bukidnon">Bukidnon</option>
                          <option value="Camiguin">Camiguin</option>
                          <option value="Lanao del Norte">Lanao del Norte</option>
                          <option value="Misamis Occidental">Misamis Occidental</option>
                          <option value="Misamis Oriental">Misamis Oriental</option>
                    </select>
                </div>

                <div class="form-group" style="margin-top:-10px;">
                  <label style="letter-spacing:2px;"><small>No. of CFBMA Holders</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter No. of CFBMA Holders  here.." name="No_cbfma" required>

                  <label style="letter-spacing:2px;"><small>Area (ha)</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Area (ha) here.." name="Area_ha" required>
                
                <div class="form-group">
                    <label style="letter-spacing:2px;"><small>Status (Existing/expired/cancelled)</small></label>
                      <select required name="Status" class="form-control" style="letter-spacing:1px;">
                          <option value="" disabled selected>---</option>
                          <option value="Existing">Existing</option>
                          <option value="Expired">Expired</option>
                          <option value="Cancelled">Cancelled</option>
                    </select>
                </div>

               
                </div>

        </div>
        <div class="modal-footer" style="">
          <button type="submit" name="tbl25_save" class="btn btn-default" style="letter-spacing:3px; background-color:#FE4A49; color:white; width: 100%;"><span class="glyphicon glyphicon-floppy-save"></span> SAVE</button></form>
      
        </div>
      </div>
    </div>
  </div>




    <div class="modal fade" id="tbl26-add" role="dialog">
    <div class="modal-dialog modal-md" style="width:60%;">
      <div class="modal-content">
              <div class="modal-header" >
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <center><h4 class="modal-title" style="letter-spacing:2px; color:red;">Enter the Following</h4></center>
              </div> 
          <form method="POST" autocomplete="off">
              <div class="modal-body">
                <div class="form-group col-xs-6">
                  <label style="letter-spacing:2px;"><small>Penro</small></label>
                 <input class="form-control" type="text" class="form-control"  placeholder="Enter Penro here.." name="Penro" required>
                </div>

                <div class="form-group col-xs-6">
                  <label style="letter-spacing:2px;"><small>Cenro</small></label>
                  <input class="form-control" type="text" class="form-control"  placeholder="Enter Cenro here.." name="Cenro" required>
                </div>

                <div class="form-group col-xs-6">
                  <label style="letter-spacing:2px;"><small>Municipality/City</small></label>
                  <input class="form-control" type="text" class="form-control"  placeholder="Enter Municipality/City here.." name="Municipality_City" required>
                </div>

                <div class="form-group col-xs-6">
                  <label style="letter-spacing:2px;"><small>Barangay</small></label>
                  <input class="form-control" type="text" class="form-control"  placeholder="Enter Barangay here.." name="Barangay" required>
                </div>

                <div class="form-group col-xs-6">
                  <label style="letter-spacing:2px;"><small>Name of Instrument Holder/Leasee</small></label>
                  <input class="form-control" type="text" class="form-control"  placeholder="Enter Name of instrument here.." name="Name_of_instrument" required>
                </div>

                <div class="form-group col-xs-6">
                  <label style="letter-spacing:2px;"><small>Area (ha)</small></label>
                  <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Area (ha) here.." name="Area_ha" required>
                </div>

                <div class="form-group col-xs-12">
                   <label style="letter-spacing:2px;">Status (Existing/Expired/Cancelled)</label>
                      <select required name="Status" class="form-control" style="letter-spacing:1px;">
                          <option value="" disabled selected>---</option>
                          <option value="Existing">Existing</option>
                          <option value="Expired">Expired</option>
                          <option value="Cancelled">Cancelled</option>
                    </select>
                </div>

                
        </div>
  <center>
          <button type="submit" name="tbl26_save" class="btn btn-default" style="letter-spacing:3px; background-color:#FE4A49; color:white; width: 93%;"><span class="glyphicon glyphicon-floppy-save"></span> SAVE</button></form>
 </center><br>
      </div>
    </div>
  </div>



    <div class="modal fade" id="tbl58-add" role="dialog">
    <div class="modal-dialog modal-md" style="width:60%;">
      <div class="modal-content">
              <div class="modal-header" >
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <center><h4 class="modal-title" style="letter-spacing:2px; color:red;">Enter the Following</h4></center>
              </div> 
          <form method="POST" autocomplete="off">
              <div class="modal-body">
                <div class="form-group col-xs-6">
                    <label style="letter-spacing:2px;"><small>Province</small></label>
                      <select required name="Province" class="form-control" style="letter-spacing:1px;">
                          <option value="" disabled selected>---</option>
                          <option value="Bukidnon">Bukidnon</option>
                          <option value="Camiguin">Camiguin</option>
                          <option value="Lanao del Norte">Lanao del Norte</option>
                          <option value="Misamis Occidental">Misamis Occidental</option>
                          <option value="Misamis Oriental">Misamis Oriental</option>
                    </select>
                </div>

                <div class="form-group col-xs-6">
                  <label style="letter-spacing:2px;"><small>Name of Protected Area</small></label>
                  <input class="form-control" type="text" class="form-control"  placeholder="Enter Name of Protected Area here.." name="Name_of_Protected_Area" required>
                </div>

                <div class="form-group col-xs-6">
                  <label style="letter-spacing:2px;"><small>E-NIPAS Area (ha)</small></label>
                  <input class="form-control" type="text" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"  placeholder="Enter E-NIPAS Area (ha) here.." name="E_NIPAS_Area_ha" required>
                </div>

                <div class="form-group col-xs-6">
                  <label style="letter-spacing:2px;"><small>PASA Area (ha) </small></label>
                  <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter PASA Area (ha)  here.." name="PASA_Area_ha" required>
                </div>

                <div class="form-group col-xs-6">
                  <label style="letter-spacing:2px;"><small>Category</small></label>
                  <input class="form-control" type="text" class="form-control"  placeholder="Enter Category here.." name="Category" required>
                </div>

                <div class="form-group col-xs-6">
                  <label style="letter-spacing:2px;"><small>Terrestrial (ha)</small></label>
                  <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Terrestrial (ha) here.." name="Terrestrial_ha" required>
                </div>
                <div class="form-group col-xs-6">
                  <label style="letter-spacing:2px;"><small>Seascape (ha)</small></label>
                  <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Seascape (ha) here.." name="Seascape_ha" required>
                </div>
                <div class="form-group col-xs-6">
                  <label style="letter-spacing:2px;"><small>Mangroves (ha)</small></label>
                  <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Mangroves (ha) here.." name="Mangroves_ha" required>
                </div>
                <div class="form-group col-xs-6">
                  <label style="letter-spacing:2px;"><small>Forestland (ha)</small></label>
                  <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Forestland (ha) here.." name="Forestland_ha" required>
                </div>
                <div class="form-group col-xs-6">
                  <label style="letter-spacing:2px;"><small>Lakes (ha)</small></label>
                  <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Lakes (ha) here.." name="Lakes_ha" required>
                </div>
                <div class="form-group col-xs-12">
                  <label style="letter-spacing:2px;"><small>Rivers (ha)</small></label>
                  <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Rivers (ha) here.." name="Rivers_ha" required>
                </div>

                
        </div>
  <center>
          <button type="submit" name="tbl58_save" class="btn btn-default" style="letter-spacing:3px; background-color:#FE4A49; color:white; width: 93%;"><span class="glyphicon glyphicon-floppy-save"></span> SAVE</button></form>
 </center><br>
      </div>
    </div>
  </div>





    <div class="modal fade" id="tbl62-add" role="dialog">
    <div class="modal-dialog modal-md" style="width:60%;">
      <div class="modal-content">
              <div class="modal-header" >
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <center><h4 class="modal-title" style="letter-spacing:2px; color:red;">Enter the Following</h4></center>
              </div> 
          <form method="POST" autocomplete="off">
              <div class="modal-body">
                <div class="form-group col-xs-6">
                    <label style="letter-spacing:2px;"><small>Province</small></label>
                      <select required name="Province" class="form-control" style="letter-spacing:1px;">
                          <option value="" disabled selected>---</option>
                          <option value="Bukidnon">Bukidnon</option>
                          <option value="Camiguin">Camiguin</option>
                          <option value="Lanao del Norte">Lanao del Norte</option>
                          <option value="Misamis Occidental">Misamis Occidental</option>
                          <option value="Misamis Oriental">Misamis Oriental</option>
                    </select>
                </div>

                <div class="form-group col-xs-6">
                  <label style="letter-spacing:2px;"><small>Total Municipality/City</small></label>
                  <input name="Total_Municipality_City" class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Total Municipality/City here.." 
                  required>
                </div>

                <div class="form-group col-xs-6">
                  <label style="letter-spacing:1px;"><small>Municipality with Forestland (Universe for FLUP)</small></label>
                  <input name="Municipality_with_Forestland" class="form-control" type="text" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"  placeholder="Enter Municipality with Forestland (Universe for FLUP) here.."  required>
                </div>

                <div class="form-group col-xs-6">
                  <label style="letter-spacing:2px;"><small>Accomplishment (Formulation)</small></label>
                  <input name="Accomplishment_Formulation" class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Accomplishment (Formulation) here.." 
                   required>
                </div>

                <div class="form-group col-xs-6">
                  <label style="letter-spacing:2px;"><small>Accomplishment (Adoption)</small></label>
                  <input name="Accomplishment_Adoption" class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Accomplishment (Adoption) here.." 
                   required>
                </div>

                <div class="form-group col-xs-6">
                  <label style="letter-spacing:2px;"><small>Baseline (Formulation)</small></label>
                  <input name="Baseline_Formulation" class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Baseline (Formulation) here.."  required>
                </div>

                <div class="form-group col-xs-12">
                  <label style="letter-spacing:2px;"><small>Baseline (Adoption)</small></label>
                  <input name="Baseline_Adoption"  class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Baseline (Adoption) here.." required>
                </div>

                
        </div>
  <center>
          <button type="submit" name="tbl62_save" class="btn btn-default" style="letter-spacing:3px; background-color:#FE4A49; color:white; width: 93%;"><span class="glyphicon glyphicon-floppy-save"></span> SAVE</button></form>
 </center><br>
      </div>
    </div>
  </div>







    <div class="modal fade" id="tbl63-add" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
              <div class="modal-header" >
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <center><h4 class="modal-title" style="letter-spacing:2px; color:red;">Enter the Following</h4></center>
              </div> 
          <form method="POST" autocomplete="off">
              <div class="modal-body">
                <div class="form-group col-xs-6">
                    <label style="letter-spacing:2px;"><small>PENRO</small></label>
                      <select required name="PENRO" class="form-control" style="letter-spacing:1px;">
                          <option value="" disabled selected>---</option>
                          <option value="Bukidnon">Bukidnon</option>
                          <option value="Camiguin">Camiguin</option>
                          <option value="Lanao del Norte">Lanao del Norte</option>
                          <option value="Misamis Occidental">Misamis Occidental</option>
                          <option value="Misamis Oriental">Misamis Oriental</option>
                    </select>
                </div>

                <div class="form-group col-xs-6">
                  <label><small>Total Number of River Basin/Watershed/Sub-Watershed</small></label>
                  <input name="Total_Number_of_River_Basin_Watershed_Sub_Watershed" class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Total Number of River Basin/Watershed/Sub-Watershed here.." 
                  required>
                </div>

                <div class="form-group col-xs-6">
                  <label style="letter-spacing:1px;"><small>Status Profiling/Characterization</small></label>
                  <input name="Status_Profiling_Characterization" class="form-control" type="text" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"  placeholder="Enter Status Profiling/Characterization here.."  required>
                </div>

                <div class="form-group col-xs-6">
                  <label style="letter-spacing:2px;"><small>Status Vulnerability Assessment</small></label>
                  <input name="Status_Vulnerability_Assessment" class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Status Vulnerability Assessment here.." 
                   required>
                </div>

                <div class="form-group col-xs-6">
                  <label style="letter-spacing:2px;"><small>Status IWMP Prepared</small></label>
                  <input name="Status_IWMP_Prepared" class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Status IWMP Prepared here.." 
                   required>
                </div>

                <div class="form-group col-xs-6">
                  <label style="letter-spacing:2px;"><small>Status Profiling/Characterization</small></label>
                  <input name="Baseline_Profiling_Characterization" class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Status Profiling/Characterization here.."  required>
                </div>

                <div class="form-group col-xs-6">
                  <label style="letter-spacing:2px;"><small>Status Vulnerability Assessment</small></label>
                  <input name="Baseline_Vulnerability_Assessment"  class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="EnterStatus Vulnerability Assessment here.." required>
                </div>
                <div class="form-group col-xs-6">
                  <label style="letter-spacing:2px;"><small>Status IWMP</small></label>
                  <input name="Baseline_IWMP"  class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Status IWMP here.." required>
                </div>
                
        </div>
  <center>
          <button type="submit" name="tbl63_save" class="btn btn-default" style="letter-spacing:3px; background-color:#FE4A49; color:white; width: 93%;"><span class="glyphicon glyphicon-floppy-save"></span> SAVE</button></form>
 </center><br>
      </div>
    </div>
  </div>




    <div class="modal fade" id="tbl59-add" role="dialog">
    <div class="modal-dialog modal-md" style="width:60%;">
      <div class="modal-content">
              <div class="modal-header" >
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <center><h4 class="modal-title" style="letter-spacing:2px; color:red;">Enter the Following</h4></center>
              </div> 
          <form method="POST" autocomplete="off">
              <div class="modal-body">
                <div class="form-group col-xs-6">
                    <label style="letter-spacing:2px;"><small>Province</small></label>
                      <select required name="Province" class="form-control" style="letter-spacing:1px;">
                          <option value="" disabled selected>---</option>
                          <option value="Bukidnon">Bukidnon</option>
                          <option value="Camiguin">Camiguin</option>
                          <option value="Lanao del Norte">Lanao del Norte</option>
                          <option value="Misamis Occidental">Misamis Occidental</option>
                          <option value="Misamis Oriental">Misamis Oriental</option>
                    </select>
                </div>

                <div class="form-group col-xs-6">
                  <label style="letter-spacing:2px;"><small>Name of Protected Area</small></label>
                  <input class="form-control" type="text" class="form-control"  placeholder="Enter Name of Protected Area here.." name="Name_of_protected_area" required>
                </div>

                <div class="form-group col-xs-6">
                  <label style="letter-spacing:2px;"><small>Location</small></label>
                  <input class="form-control" type="text" class="form-control" placeholder="Enter Location here.." name="Location" required>
                </div>

                <div class="form-group col-xs-6">
                  <label style="letter-spacing:2px;"><small>PA Area(ha)</small></label>
                  <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter PA Area(ha)  here.." name="Pa" required>
                </div>

                <div class="form-group col-xs-6">
                  <label style="letter-spacing:2px;"><small>Bufferzone Area(ha)</small></label>
                  <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Bufferzone Area(ha) here.." name="Bufferzone" required>


                  <input type="hidden" name="Total_area_ha">
                </div>

                <div class="form-group col-xs-6">
                  <label style="letter-spacing:2px;"><small>Proclamation No. (Date)</small></label>
                  <input class="form-control" type="text" class="form-control"  placeholder="Enter Proclamation No. (Date) here.." name="Proclamation_no_date" required>
                </div>
                <div class="form-group col-xs-12">
                  <label style="letter-spacing:2px;"><small>Legislation No. (Date)</small></label>
                  <input class="form-control" type="text" class="form-control"  placeholder="Enter Legislation No. (Date) here.." name="Legislation_no_date" required>
                </div>
              
 

                
        </div>
  <center>
          <button type="submit" name="tbl59_save" class="btn btn-default" style="letter-spacing:3px; background-color:#FE4A49; color:white; width: 93%;"><span class="glyphicon glyphicon-floppy-save"></span> SAVE</button></form>
 </center><br>
      </div>
    </div>
  </div>




    <div class="modal fade" id="tbl27-add" role="dialog">
    <div class="modal-dialog modal-md" style="width:60%;">
      <div class="modal-content">
              <div class="modal-header" >
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <center><h4 class="modal-title" style="letter-spacing:2px; color:red;">Enter the Following</h4></center>
              </div> 
          <form method="POST" autocomplete="off">
              <div class="modal-body">
                <div class="form-group col-xs-6">
                  <label style="letter-spacing:2px;"><small>PENRO</small></label>
                 <input class="form-control" type="text" class="form-control"  placeholder="Enter Penro here.." name="Penro" required>
                </div>

                <div class="form-group col-xs-6">
                  <label style="letter-spacing:2px;"><small>CENRO</small></label>
                  <input class="form-control" type="text" class="form-control"  placeholder="Enter Cenro here.." name="Cenro" required>
                </div>

                <div class="form-group col-xs-6">
                  <label style="letter-spacing:2px;"><small>Municipality/City</small></label>
                  <input class="form-control" type="text" class="form-control"  placeholder="Enter Municipality/City here.." name="Municipality_City" required>
                </div>

                <div class="form-group col-xs-6">
                  <label style="letter-spacing:2px;"><small>Barangay</small></label>
                  <input class="form-control" type="text" class="form-control"  placeholder="Enter Barangay here.." name="Barangay" required>
                </div>

                <div class="form-group col-xs-6">
                  <label style="letter-spacing:2px;"><small>Name of Instrument Holder/Leasee</small></label>
                  <input class="form-control" type="text" class="form-control"  placeholder="Enter Name of instrument here.." name="Name_of_instrument" required>
                </div>

                <div class="form-group col-xs-6">
                  <label style="letter-spacing:2px;"><small>Area (ha)</small></label>
                  <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Area (ha) here.." name="Area_ha" required>
                </div>

                <div class="form-group col-xs-12">
                   <label style="letter-spacing:2px;">Status (Existing/Expired/Cancelled)</label>
                      <select required name="Status" class="form-control" style="letter-spacing:1px;">
                          <option value="" disabled selected>---</option>
                          <option value="Existing">Existing</option>
                          <option value="Expired">Expired</option>
                          <option value="Cancelled">Cancelled</option>
                    </select>
                </div>

                
        </div>
  <center>
          <button type="submit" name="tbl27_save" class="btn btn-default" style="letter-spacing:3px; background-color:#FE4A49; color:white; width: 93%;"><span class="glyphicon glyphicon-floppy-save"></span> SAVE</button></form>
 </center><br>
      </div>
    </div>
  </div>



  <div class="modal fade" id="tbl28-add" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title" style="letter-spacing:2px; color:red;">Enter the Following</h4></center>
        </div> 
        <form method="POST" autocomplete="off"> 
        <div class="modal-body">
                <div class="form-group">
                  <label style="letter-spacing:2px;"><small>PENRO</small></label>
                  <input class="form-control" type="text" class="form-control"  placeholder="Enter Penro here.." name="Penro" required>
                </div>

                <div class="form-group" style="margin-top:-10px;">
                  <label style="letter-spacing:2px;"><small>CENRO</small></label>
                  <input type="text" class="form-control"  placeholder="Enter Cenro here.." name="Cenro" required>

                  <label style="letter-spacing:2px;"><small>Name of holder</small></label>
                  <input type="text" class="form-control"  placeholder="Enter name of holder here.." name="name_of_holder" required>

                  <label style="letter-spacing:2px;"><small>Location</small></label>
                  <input type="text" class="form-control"  placeholder="Enter Location here.." name="Location" required>

                  <label style="letter-spacing:2px;"><small>Area (ha)</small></label>
                  <input type="text" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"  placeholder="Enter Area (ha) here.." name="Area_ha" required>

                  <label style="letter-spacing:2px;"><small>Area planted (ha)</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Are planted (ha) here.." name="Area_planted_ha" required>

 
                   <label style="letter-spacing:2px;"><small>Status (Existing/Expired/Cancelled)</small></label>
                      <select required name="Status" class="form-control" style="letter-spacing:1px;">
                          <option value="" disabled selected>---</option>
                          <option value="Existing">Existing</option>
                          <option value="Expired">Expired</option>
                          <option value="Cancelled">Cancelled</option>
                    </select>
       
                </div>
                
        </div>
        <div class="modal-footer" style="">
          <button type="submit" name="tbl28_save" class="btn btn-default" style="letter-spacing:3px; background-color:#FE4A49; color:white; width: 100%;"><span class="glyphicon glyphicon-floppy-save"></span> SAVE</button></form>
      
        </div>
      </div>
    </div>
  </div>



  <div class="modal fade" id="tbl29-add" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title" style="letter-spacing:2px; color:red;">Enter the Following</h4></center>
        </div> 
        <form method="POST" autocomplete="off"> 
        <div class="modal-body">
                <div class="form-group">
                  <label style="letter-spacing:2px;"><small>Province</small></label>
                  <input class="form-control" type="text" class="form-control"  placeholder="Enter Province here.." name="Province" required>
                </div>

                <div class="form-group" style="margin-top:-10px;">
                  <label style="letter-spacing:2px;"><small>Name of Protected Area</small></label>
                  <input type="text" class="form-control"  placeholder="Enter Name of Protected Area here.." name="Name_of_Protected_Area" required>

                  <label style="letter-spacing:2px;"><small>Name of PACBRMA holder</small></label>
                  <input type="text"  class="form-control"  placeholder="Enter Name of PACBRMA holder here.." name="Name_of_PACBRMA_holder" required>

                  <label style="letter-spacing:2px;"><small>Location of CBP area</small></label>
                  <input type="text" class="form-control"  placeholder="Enter Location of CBP area here.." name="Location_of_CBP_area" required>

                  <label style="letter-spacing:2px;"><small>Area (ha)</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Area (ha) here.." name="Area_ha" required>

                </div>

                
        </div>
        <div class="modal-footer" style="">
          <button type="submit" name="tbl29_save" class="btn btn-default" style="letter-spacing:3px; background-color:#FE4A49; color:white; width: 100%;"><span class="glyphicon glyphicon-floppy-save"></span> SAVE</button></form>
      
        </div>
      </div>
    </div>
  </div>





    <div class="modal fade" id="tbl30-add" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title" style="letter-spacing:2px; color:red;">Enter the Following</h4></center>
        </div> 
        <form method="POST" autocomplete="off"> 
        <div class="modal-body">
                <div class="form-group">
                  <label style="letter-spacing:2px;"><small>PENRO</small></label>
                  <input class="form-control" type="text" class="form-control"  placeholder="Enter Penro here.." name="Penro" required>
                </div>
                <div class="form-group" style="margin-top:-10px;">
                  <label style="letter-spacing:2px;"><small>CENRO</small></label>
                  <input type="text" class="form-control"  placeholder="Enter Cenro here.." name="Cenro" required>

                  <label style="letter-spacing:2px;"><small>Name of Leasee</small></label>
                  <input type="text" class="form-control"  placeholder="Enter Name of leasee here.." name="Name_of_leasee" required>

                  <label style="letter-spacing:2px;"><small>Area (ha)</small></label>
                  <input type="text" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"  placeholder="Enter Area (ha) here.." name="Area_ha" required>
                  
                  <label style="letter-spacing:2px;"><small>Area planted (ha)</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Area planted (ha) here.." name="Area_planted_ha" required>
                 

                   <label style="letter-spacing:2px;"><small>Status (Existing/Expired/Cancelled)</small></label>
                      <select required name="Status" class="form-control" style="letter-spacing:1px;">
                          <option value="" disabled selected>---</option>
                          <option value="Existing">Existing</option>
                          <option value="Expired">Expired</option>
                          <option value="Cancelled">Cancelled</option>
                    </select>
        
                </div>

                
        </div>
        <div class="modal-footer" style="">
          <button type="submit" name="tbl30_save" class="btn btn-default" style="letter-spacing:3px; background-color:#FE4A49; color:white; width: 100%;"><span class="glyphicon glyphicon-floppy-save"></span> SAVE</button></form>
      
        </div>
      </div>
    </div>
  </div>




    <div class="modal fade" id="tbl31-add" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title" style="letter-spacing:2px; color:red;">Enter the Following</h4></center>
        </div> 
        <form method="POST" autocomplete="off"> 
        <div class="modal-body">
                <div class="form-group">
                  <label style="letter-spacing:2px;"><small>PENRO</small></label>
                  <input class="form-control" type="text" class="form-control"  placeholder="Enter Penro here.." name="Penro" required>
                </div>
                <div class="form-group" style="margin-top:-10px;">
                  <label style="letter-spacing:2px;"><small>CENRO</small></label>
                  <input type="text" class="form-control"  placeholder="Enter Cenro here.." name="Cenro" required>

                  <label style="letter-spacing:2px;"><small>Location</small></label>
                  <input type="text" class="form-control"  placeholder="Enter Location here.." name="Location" required>

                  <label style="letter-spacing:2px;"><small>Name of Permittee</small></label>
                  <input type="text" class="form-control" placeholder="Enter Name of Permittee here.." name="Name_of_Permittee" required>
                  
                  <label style="letter-spacing:2px;"><small>Type of slup</small></label>
                  <input type="text"  class="form-control"  placeholder="Enter Type of slup here.." name="Type_of_slup" required>
                 
                  <label style="letter-spacing:2px;"><small>Area (ha)</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Area (ha) here.." name="Area_ha" required>


                   <label style="letter-spacing:2px;"><small>Status (Existing/Expired/Cancelled)</small></label>
                      <select required name="Status" class="form-control" style="letter-spacing:1px;">
                          <option value="" disabled selected>---</option>
                          <option value="Existing">Existing</option>
                          <option value="Expired">Expired</option>
                          <option value="Cancelled">Cancelled</option>
                    </select>
 


                </div>

                
        </div>
        <div class="modal-footer" style="">
          <button type="submit" name="tbl31_save" class="btn btn-default" style="letter-spacing:3px; background-color:#FE4A49; color:white; width: 100%;"><span class="glyphicon glyphicon-floppy-save"></span> SAVE</button></form>
      
        </div>
      </div>
    </div>
  </div>



      <div class="modal fade" id="tbl32-add" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title" style="letter-spacing:2px; color:red;">Enter the Following</h4></center>
        </div> 
        <form method="POST" autocomplete="off"> 
        <div class="modal-body">
                <div class="form-group">
                  <label style="letter-spacing:2px;"><small>PENRO</small></label>
                  <input class="form-control" type="text" class="form-control"  placeholder="Enter Penro here.." name="Penro" required>
                </div>
                <div class="form-group" style="margin-top:-10px;">
                  <label style="letter-spacing:2px;"><small>CENRO</small></label>
                  <input type="text" class="form-control"  placeholder="Enter Cenro here.." name="Cenro" required>

                  <label style="letter-spacing:2px;"><small>Name of holder</small></label>
                  <input type="text" class="form-control"  placeholder="Enter Name of holder here.." name="Name_of_holder" required>

                  
                  <label style="letter-spacing:2px;"><small>Location</small></label>
                  <input type="text"  class="form-control"  placeholder="Enter Location here.." name="Location" required>
                 
                  <label style="letter-spacing:2px;"><small>Area (ha)</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Area (ha) here.." name="Area_ha" required>

                   <label style="letter-spacing:2px;"><small>Status (Existing/Expired/Cancelled)</small></label>
                      <select required name="Status" class="form-control" style="letter-spacing:1px;">
                          <option value="" disabled selected>---</option>
                          <option value="Existing">Existing</option>
                          <option value="Expired">Expired</option>
                          <option value="Cancelled">Cancelled</option>
                    </select>

                </div>

                
        </div>
        <div class="modal-footer" style="">
          <button type="submit" name="tbl32_save" class="btn btn-default" style="letter-spacing:3px; background-color:#FE4A49; color:white; width: 100%;"><span class="glyphicon glyphicon-floppy-save"></span> SAVE</button></form>
      
        </div>
      </div>
    </div>
  </div>


    <div class="modal fade" id="tbl33-add" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title" style="letter-spacing:2px; color:red;">Enter the Following</h4></center>
        </div> 
        <form method="POST" autocomplete="off"> 
        <div class="modal-body">
                <div class="form-group">
               
                  <label style="letter-spacing: 2px;"><small>Operating Unit</small></label>
                    <select required name="Penro_Cenro" class="form-control" style="letter-spacing:1px;">
                          <option value="" disabled selected>---</option>
                          <option value="Valencia City">Valencia City</option>
                          <option value="Manolo Fortich">Manolo Fortich</option>
                          <option value="Don Carlos">Don Carlos</option>
                          <option value="Talakag">Talakag</option>
                          <option value="Sub-Office Pangantucan">Sub Office Pangantucan</option>
                          <option value="Mt. Kitanglad RNP">Mt. Kitanglad RNP</option>
                          <option value="Mt. Kalatungan RNP">Mt. Kalatungan RNP</option>
                          <option value="Mt. Pantaron">Mt. Pantaron</option>
                          <option value="Mt. Tago RNP">Mt. Tago RNP</option>
                          <option value="BFI">BFI</option>
                          <option value="Hineleban Foundation">Hineleban Foundation</option>
                          <option value="Non-PA">Non-PA</option>
                          <option value="Mt. Timpoong Hibok-Hibok">Mt. Timpoong Hibok-Hibok</option>
                          <option value="Iligan City">Iligan City</option>
                          <option value="CENRO Kolambugan">CENRO Kolambugan</option>
                          <option value="Siad Hindang">Siad Hindang</option>
                          <option value="Siad Nunungan">Siad Nunungan</option>
                          <option value="Mt. Inayawan RNP">Mt. Inayawan RNP</option>
                          <option value="Bacolod Kauswagan PLS">Bacolod Kauswagan PLS</option>
                          <option value="Lake Lanao WPDP">Lake Lanao WPDP</option>
                          <option value="CENRO Ozamiz City">CENRO Ozamiz City</option>
                          <option value="CENRO Oroquieta City">CENRO Oroquieta City</option>
                          <option value="Mt. Malindang RNP">Mt. Malindang RNP</option>
                          <option value="Mt. Baliangao PLS">Mt. Baliangao PLS</option>
                          <option value="CENRO Initao">CENRO Initao</option>
                          <option value="CENRO Gingoog City">Cenro Gingoog City</option>
                          <option value="Mt. Balatukan">Mt. Balatukan</option>
                          <option value="Mimbilisan">Mimbilisan</option>
                          <option value="Initao Libertad">Initao Libertad</option>
                    </select>

                </div>
                <div class="form-group" style="margin-top:-10px;">
                  <label style="letter-spacing:2px;"><small>Area (ha)</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Area (ha) here.." name="Area_ha" required>

                  <label style="letter-spacing:2px;"><small>Length (m)</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Length (m) here.." name="Length_m" required>

                  <label style="letter-spacing:2px;"><small>Year</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Year here.." name="Year" required>


                </div>
                
        </div>
        <div class="modal-footer" style="">
          <button type="submit" name="tbl33_save" class="btn btn-default" style="letter-spacing:3px; background-color:#FE4A49; color:white; width: 100%;"><span class="glyphicon glyphicon-floppy-save"></span> SAVE</button></form>
      
        </div>
      </div>
    </div>
  </div>


  <div class="modal fade" id="tbl34-add" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title" style="letter-spacing:2px; color:red;">Enter the Following</h4></center>
        </div> 
        <form method="POST" autocomplete="off"> 
        <div class="modal-body">
                <div class="form-group">
                    <label style="letter-spacing:2px;"><small>Province</small></label>
                      <select required name="Province" class="form-control" style="letter-spacing:1px;">
                          <option value="" disabled selected>---</option>
                          <option value="Bukidnon">Bukidnon</option>
                          <option value="Camiguin">Camiguin</option>
                          <option value="Lanao del Norte">Lanao del Norte</option>
                          <option value="Misamis Occidental">Misamis Occidental</option>
                          <option value="Misamis Oriental">Misamis Oriental</option>
                    </select>
                </div>

                <div class="form-group" style="margin-top:-10px;">
             
                  <label style="letter-spacing:2px;"><small>Close</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Close here.." name="Close" required>

                  <label style="letter-spacing:2px;"><small>Open</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Open here.." name="Open" required>

                  <label style="letter-spacing:2px;"><small>Mangrove</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Mangrove here.." name="Mangrove" required>

                  <input type="hidden" name="Total">

                </div>
                
        </div>
        <div class="modal-footer" style="">
          <button type="submit" name="tbl34_save" class="btn btn-default" style="letter-spacing:3px; background-color:#FE4A49; color:white; width: 100%;"><span class="glyphicon glyphicon-floppy-save"></span> SAVE</button></form>
      
        </div>
      </div>
    </div>
  </div>


 <div class="modal fade" id="tbl35-add" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title" style="letter-spacing:2px; color:red;">Enter the Following</h4></center>
        </div> 
        <form method="POST" autocomplete="off"> 
        <div class="modal-body">
                <div class="form-group">
                    <label style="letter-spacing:2px;"><small>Province</small></label>
                      <select required name="Province" class="form-control" style="letter-spacing:1px;">
                          <option value="" disabled selected>---</option>
                          <option value="Bukidnon">Bukidnon</option>
                          <option value="Camiguin">Camiguin</option>
                          <option value="Lanao del Norte">Lanao del Norte</option>
                          <option value="Misamis Occidental">Misamis Occidental</option>
                          <option value="Misamis Oriental">Misamis Oriental</option>
                    </select>
                </div>
                <div class="form-group" style="margin-top:-10px;">
                  <label style="letter-spacing:2px;"><small>City/Municipality</small></label>
                  <input type="text" class="form-control"  placeholder="Enter Municipality/City here.." name="City_Municipality" required>

                  <label style="letter-spacing:2px;"><small>FLUP Formulated</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Flup formulated here.." name="Flup_Formulated" required>

                  <label style="letter-spacing:2px;"><small>FLUP Adopted</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Flup Adopted here.." name="Flup_Adopted" required>

                  <label style="letter-spacing:2px;"><small>Total Forestland within LGU (ha)</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Total Forestland within LGU (ha) here.." name="Total_Forestland_with_LGU" required>
                  
                  <label style="letter-spacing:2px;"><small>Total Area for FLUP (ha)</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Total area for FLUP (ha) here.." name="Total_Area_For_Flup" required>
                </div>
                
        </div>
        <div class="modal-footer" style="">
          <button type="submit" name="tbl35_save" class="btn btn-default" style="letter-spacing:3px; background-color:#FE4A49; color:white; width: 100%;"><span class="glyphicon glyphicon-floppy-save"></span> SAVE</button></form>
      
        </div>
      </div>
    </div>
  </div>



    <div class="modal fade" id="tbl36-add" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title" style="letter-spacing:2px; color:red;">Enter the Following</h4></center>
        </div> 
        <form method="POST" autocomplete="off"> 
        <div class="modal-body">
                <div class="form-group">
                  <label style="letter-spacing:2px;"><small>Forest Protection Officers and Program Extension Officers</small> </label>
                  <input class="form-control" type="text" class="form-control"  placeholder="Enter Forest Protection Officers PEOs here.." name="Forest_Protection_Officers_PEO" required>
                </div>

                <div class="form-group" style="margin-top:-10px;">
                  <label style="letter-spacing:2px;"><small>Number of  FPOs/PEOs hired</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Number of FPos/Peos hired here.." name="Number_of_FPos_Peos_hired" required>

                  <label style="letter-spacing:2px;"><small>Year</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Year here.." name="Year" required>

                </div>

                
        </div>
        <div class="modal-footer" style="">
          <button type="submit" name="tbl36_save" class="btn btn-default" style="letter-spacing:3px; background-color:#FE4A49; color:white; width: 100%;"><span class="glyphicon glyphicon-floppy-save"></span> SAVE</button></form>
      
        </div>
      </div>
    </div>
  </div>




  <div class="modal fade" id="tbl37-add" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title" style="letter-spacing:2px; color:red;">Enter the Following</h4></center>
        </div> 
        <form method="POST" autocomplete="off"> 
        <div class="modal-body">
                <div class="form-group">
                  <label style="letter-spacing:2px;"><small>Province </small></label>
                  <input class="form-control" type="text" class="form-control"  placeholder="Enter Province here.." name="Province" required>
                </div>

                <div class="form-group" style="margin-top:-10px;">
                  <label style="letter-spacing:2px;"><small>Target (ha)</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Target (ha) here.." name="Target" required>

                  <label style="letter-spacing:2px;"><small>Accomplishment (ha)</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Accomplishment (ha) here.." name="Accomplishment_ha" required>

                  <label style="letter-spacing:2px;"><small>Accomplishment (%)</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Accomplishment (%) here.." name="Accomplishment_percent" required>
                  
                  <label style="letter-spacing:2px;"><small>Year</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Year here.." name="Year" required>
                </div>
</div>
        <div class="modal-footer" style="">
          <button type="submit" name="tbl37_save" class="btn btn-default" style="letter-spacing:3px; background-color:#FE4A49; color:white; width: 100%;"><span class="glyphicon glyphicon-floppy-save"></span> SAVE</button></form>
      
        </div>
      </div>
    </div>
  </div>



    <div class="modal fade" id="tbl38-add" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title" style="letter-spacing:2px; color:red;">Enter the Following</h4></center>
        </div> 
        <form method="POST" autocomplete="off"> 
        <div class="modal-body">
        
                <div class="form-group">
                    <label style="letter-spacing:2px;"><small>Province</small></label>
                      <select required name="Province" class="form-control" style="letter-spacing:1px;">
                          <option value="" disabled selected>---</option>
                          <option value="Bukidnon">Bukidnon</option>
                          <option value="Camiguin">Camiguin</option>
                          <option value="Lanao del Norte">Lanao del Norte</option>
                          <option value="Misamis Occidental">Misamis Occidental</option>
                          <option value="Misamis Oriental">Misamis Oriental</option>
                    </select>
                </div>
                <div class="form-group" style="margin-top:-10px;">
                  <label style="letter-spacing:2px;"><small>Name of Watershed</small></label>
                  <input type="text" class="form-control"  placeholder="Enter Name of Watershed here.." name="Name_of_watershed" required>

                  <label style="letter-spacing:2px;"><small>City/Municipality</small></label>
                  <input type="text" class="form-control"  placeholder="Enter City/Municipality here.." name="City_Municipality" required>

                  <label style="letter-spacing:2px;"><small>Area (ha)</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Area (ha) here.." name="Area_ha" required>
                  
                  <label style="letter-spacing:2px;"><small>Year</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Year here.." name="Year" required>
                </div>
</div>
        <div class="modal-footer" style="">
          <button type="submit" name="tbl38_save" class="btn btn-default" style="letter-spacing:3px; background-color:#FE4A49; color:white; width: 100%;"><span class="glyphicon glyphicon-floppy-save"></span> SAVE</button></form>
      
        </div>
      </div>
    </div>
  </div>



      <div class="modal fade" id="tbl39-add" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title" style="letter-spacing:2px; color:red;">Enter the Following</h4></center>
        </div> 
        <form method="POST" autocomplete="off"> 
        <div class="modal-body">


                <div class="form-group" style="margin-top:-10px;">
            
                  
                <label style="letter-spacing: 2px;"><small>Operating Unit</small></label>
                    <select required name="Province" class="form-control" style="letter-spacing:1px;">
                          <option value="" disabled selected>---</option>
                          <option value="Valencia City">Valencia City</option>
                          <option value="Manolo Fortich">Manolo Fortich</option>
                          <option value="Don Carlos">Don Carlos</option>
                          <option value="Talakag">Talakag</option>
                          <option value="Sub-Office Pangantucan">Sub Office Pangantucan</option>
                          <option value="Mt. Kitanglad RNP">Mt. Kitanglad RNP</option>
                          <option value="Mt. Kalatungan RNP">Mt. Kalatungan RNP</option>
                          <option value="Mt. Pantaron">Mt. Pantaron</option>
                          <option value="Mt. Tago RNP">Mt. Tago RNP</option>
                          <option value="BFI">BFI</option>
                          <option value="Hineleban Foundation">Hineleban Foundation</option>
                          <option value="Non-PA">Non-PA</option>
                          <option value="Mt. Timpoong Hibok-Hibok">Mt. Timpoong Hibok-Hibok</option>
                          <option value="Iligan City">Iligan City</option>
                          <option value="CENRO Kolambugan">CENRO Kolambugan</option>
                          <option value="Siad Hindang">Siad Hindang</option>
                          <option value="Siad Nunungan">Siad Nunungan</option>
                          <option value="Mt. Inayawan RNP">Mt. Inayawan RNP</option>
                          <option value="Bacolod Kauswagan PLS">Bacolod Kauswagan PLS</option>
                          <option value="Lake Lanao WPDP">Lake Lanao WPDP</option>
                          <option value="CENRO Ozamiz City">CENRO Ozamiz City</option>
                          <option value="CENRO Oroquieta City">CENRO Oroquieta City</option>
                          <option value="Mt. Malindang RNP">Mt. Malindang RNP</option>
                          <option value="Mt. Baliangao PLS">Mt. Baliangao PLS</option>
                          <option value="CENRO Initao">CENRO Initao</option>
                          <option value="CENRO Gingoog City">Cenro Gingoog City</option>
                          <option value="Mt. Balatukan">Mt. Balatukan</option>
                          <option value="Mimbilisan">Mimbilisan</option>
                          <option value="Initao Libertad">Initao Libertad</option>
                    </select>

                

                  <label style="letter-spacing:2px;"><small>No. of CWR Holders</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter No. of CWR Holders here.." name="No_of_CWR_holders" required>
                  
                  <label style="letter-spacing:2px;"><small>Year</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Year here.." name="Year" required>
                </div>
</div>
        <div class="modal-footer" style="">
          <button type="submit" name="tbl39_save" class="btn btn-default" style="letter-spacing:3px; background-color:#FE4A49; color:white; width: 100%;"><span class="glyphicon glyphicon-floppy-save"></span> SAVE</button></form>
      
        </div>
      </div>
    </div>
  </div>




    <div class="modal fade" id="tbl40-add" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title" style="letter-spacing:2px; color:red;">Enter the Following</h4></center>
        </div> 
        <form method="POST" autocomplete="off"> 
        <div class="modal-body">
              <div class="form-group">
                    <label style="letter-spacing:2px;"><small>Province</small></label>
                      <select required name="Province" class="form-control" style="letter-spacing:1px;">
                          <option value="" disabled selected>---</option>
                          <option value="Bukidnon">Bukidnon</option>
                          <option value="Camiguin">Camiguin</option>
                          <option value="Lanao del Norte">Lanao del Norte</option>
                          <option value="Misamis Occidental">Misamis Occidental</option>
                          <option value="Misamis Oriental">Misamis Oriental</option>
                    </select>
                </div>
           

                <div class="form-group" style="margin-top:-10px;">
                  <label style="letter-spacing:2px;"><small>Key Biodiversity Areas</small></label>
                  <input type="text" class="form-control"  placeholder="Enter Key Biodiversity Areas here.." name="Key_Biodiversity_areas" required>

                  <label style="letter-spacing:2px;"><small>Area (ha)</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Area (ha) here.." name="Area_ha" required>

                  <label style="letter-spacing:2px;"><small>Legal Basis</small></label>
                  <input type="text" class="form-control"  placeholder="Enter Legal basis here.." name="Legal_basis" required>

                </div>

                
        </div>
        <div class="modal-footer" style="">
          <button type="submit" name="tbl40_save" class="btn btn-default" style="letter-spacing:3px; background-color:#FE4A49; color:white; width: 100%;"><span class="glyphicon glyphicon-floppy-save"></span> SAVE</button></form>
      
        </div>
      </div>
    </div>
  </div>


<div class="container">
  <div class="modal fade" id="tbl41-add" role="dialog">
    <div class="modal-dialog modal-lg" style="width:1000px;">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title" style="letter-spacing:2px; color:red;">Enter the Following</h4></center>
        </div>
        <form method="POST" autocomplete="off"> 
        <div class="modal-body">       
              <div class="form-group col-xs-4">
                <label style="letter-spacing: 2px;"><small>Province</small></label>
                    <select required name="Province" class="form-control" style="letter-spacing:1px;">
                          <option value="" disabled selected>--Select Province--</option>
                          <option value="Bukidnon">Bukidnon</option>
                          <option value="Camiguin">Camiguin</option>
                          <option value="Lanao del Norte">Lanao del Norte</option>
                          <option value="Misamis Occidental">Misamis Occidental</option>
                          <option value="Misamis Oriental">Misamis Oriental</option>

                    </select>

                  <label><small>Total Land Area</small></label>
                  <input type="text" name="Total_land_area" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control" required placeholder="Total Land Area">
                  
                  <label><small>Certified Alienable and Disposable Land</small></label>
                  <input type="text" name="Certified_alienable_and_Disposable_land" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control" required placeholder="Enter Certified Alienable/Disposable Land here..">

                  <label><small>Total Forestland</small></label>
                  <input type="text" name="Total_forestland" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control" required placeholder="Enter Total Forestland here..">
              </div>

              <div class="form-group col-xs-4">
                  <label><small>Unclassified Forestland</small></label>
                  <input type="text" name="Unclassified_forestland" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control" required placeholder="Enter Unclassified Forestland here..">

                  <label><small>Total Classified Forestland</small></label>
                  <input type="text" name="total_classified_forestland" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control" required placeholder="Enter Total Classified Forestland here..">

                  <label><small>Established Forest Reserves</small></label>
                  <input type="text" name="Established_forest_reserves" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control" required placeholder="Enter Established Forest Reserves here..">

                  <label><small>Established Timberland</small></label>
                  <input type="text" name="Established_timberland" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control" required placeholder="Enter Established Timberland here..">
              </div>

              <div class="form-group col-xs-4">
                  <label><small>National Parks and GRBS/WA</small></label>
                  <input type="text" name="National_parks_and_grbs_wa" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control" required placeholder="Enter National Parks and GRBS/WA here..">

                  <label><small>Military and Naval Reservations</small></label>
                  <input type="text" name="Military_and_naval_reservations" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control" required placeholder="Enter Military and Naval Reservations here..">

                  <label><small>Civil Reservations</small></label>
                  <input type="text" name="civil_reservations" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control" required placeholder="Enter Civil Reservations here..">

                  <label><small>Fishpond</small></label>
                  <input type="text" name="fishpond" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control" required placeholder="Enter Fishpond here..">
              </div>

        </div>
        <div class="form-group">
          <button type="submit" name="tbl41_save" class="btn btn-default" style="letter-spacing:3px; background-color:#FE4A49; color:white; margin-left:794px;"><span class="glyphicon glyphicon-floppy-save"></span> SAVE</button></form>
            <button class="btn btn-default" data-dismiss="modal" style="letter-spacing:2px;">Close</button>
        </div>
        
      </div>
    </div> 
  </div>
</div>

  <div class="modal fade" id="tbl42-add" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title" style="letter-spacing:2px; color:red;">Enter the Following</h4></center>
        </div> 
        <form method="POST" autocomplete="off"> 
        <div class="modal-body">
            <div class="form-group" style="margin-top:-10px;">
                  
                <label style="letter-spacing: 2px;"><small>Province</small></label>
                    <select required name="Province" class="form-control" style="letter-spacing:1px;">
                          <option value="" disabled selected>--Select Province--</option>
                          <option value="Bukidnon">Bukidnon</option>
                          <option value="Camiguin">Camiguin</option>
                          <option value="Lanao del Norte">Lanao del Norte</option>
                          <option value="Misamis Occidental">Misamis Occidental</option>
                          <option value="Misamis Oriental">Misamis Oriental</option>

                    </select>

   
                  <label style="letter-spacing:2px;"><small>Total Residential Patents Issued Patents Issued (No.)</small></label>
                  <input class="form-control" name="Total_Residential_Patents_Issued_Patents_issued_no" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Total Residential Patents Issued Patents Issued (No.) here.."  required>
                </div>

                <div class="form-group" style="margin-top:-10px;">
                  <label style="letter-spacing:2px;"><small>Total Residential Patents Issued Lot (ha)</small></label>
                  <input type="text" name="Total_Residential_Patents_Issued_Lot_ha" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Total Residential Patents Issued Lot (ha) here.."  required>

                  <label style="letter-spacing:2px;"><small>Total Agricultural Patents Issued Patents Issued (No.)</small></label>
                  <input type="text" name="Total_Agricultural_Patents_Issued_Patents_issued_no" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Total Agricultural Patents Issued Patents Issued (No.) here.."  required>

                  <label style="letter-spacing:2px;"><small>Total Agricultural Patents Issued Lot (ha)</small></label>
                  <input type="text" name="Total_Agricultural_Patents_Issued_Lot_ha" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Total Agricultural Patents Issued Lot (ha) here.."  required>
                </div>

                
        </div>
        <div class="modal-footer" style="">
          <button type="submit" name="tbl42_save" class="btn btn-default" style="letter-spacing:3px; background-color:#FE4A49; color:white; width: 100%;"><span class="glyphicon glyphicon-floppy-save"></span> SAVE</button></form>
      
        </div>
      </div>
    </div>
  </div>



    <div class="modal fade" id="tbl44-add" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title" style="letter-spacing:2px; color:red;">Enter the Following</h4></center>
        </div> 
        <form method="POST" autocomplete="off"> 
        <div class="modal-body">
       

                <div class="form-group" style="margin-top:-10px;">
                  <label style="letter-spacing:2px;"><small>Operating Unit</small></label>
                      <select required name="Cenro" class="form-control" style="letter-spacing:1px;">
                          <option value="" disabled selected>---</option>
                          <option value="Valencia City">Valencia City</option>
                          <option value="Manolo Fortich">Manolo Fortich</option>
                          <option value="Don Carlos">Don Carlos</option>
                          <option value="Talakag">Talakag</option>
                          <option value="Sub-Office Pangantucan">Sub Office Pangantucan</option>
                          <option value="Mt. Kitanglad RNP">Mt. Kitanglad RNP</option>
                          <option value="Mt. Kalatungan RNP">Mt. Kalatungan RNP</option>
                          <option value="Mt. Pantaron">Mt. Pantaron</option>
                          <option value="Mt. Tago RNP">Mt. Tago RNP</option>
                          <option value="BFI">BFI</option>
                          <option value="Hineleban Foundation">Hineleban Foundation</option>
                          <option value="Non-PA">Non-PA</option>
                          <option value="Mt. Timpoong Hibok-Hibok">Mt. Timpoong Hibok-Hibok</option>
                          <option value="Iligan City">Iligan City</option>
                          <option value="CENRO Kolambugan">CENRO Kolambugan</option>
                          <option value="Siad Hindang">Siad Hindang</option>
                          <option value="Siad Nunungan">Siad Nunungan</option>
                          <option value="Mt. Inayawan RNP">Mt. Inayawan RNP</option>
                          <option value="Bacolod Kauswagan PLS">Bacolod Kauswagan PLS</option>
                          <option value="Lake Lanao WPDP">Lake Lanao WPDP</option>
                          <option value="CENRO Ozamiz City">CENRO Ozamiz City</option>
                          <option value="CENRO Oroquieta City">CENRO Oroquieta City</option>
                          <option value="Mt. Malindang RNP">Mt. Malindang RNP</option>
                          <option value="Mt. Baliangao PLS">Mt. Baliangao PLS</option>
                          <option value="CENRO Initao">CENRO Initao</option>
                          <option value="CENRO Gingoog City">Cenro Gingoog City</option>
                          <option value="Mt. Balatukan">Mt. Balatukan</option>
                          <option value="Mimbilisan">Mimbilisan</option>
                          <option value="Initao Libertad">Initao Libertad</option>
                    </select>

                  <label style="letter-spacing:2px;"><small>Number of Look-Out Tower</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Number of Look-Out Tower here.." name="Number_of_look_out_tower" required>

                  <label style="letter-spacing:2px;"><small>Location</small></label>
                  <input type="text"  class="form-control"  placeholder="Enter Location here.." name="location" required>

                </div>

                
        </div>
        <div class="modal-footer" style="">
          <button type="submit" name="tbl44_save" class="btn btn-default" style="letter-spacing:3px; background-color:#FE4A49; color:white; width: 100%;"><span class="glyphicon glyphicon-floppy-save"></span> SAVE</button></form>
      
        </div>
      </div>
    </div>
  </div>




    <div class="modal fade" id="tbl45-add" role="dialog">
    <div class="modal-dialog modal-md" style="width:700px;">
      <div class="modal-content">
        <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title" style="letter-spacing:2px; color:red;">Enter the Following</h4></center>
        </div> 
        <form method="POST" autocomplete="off"> 
        <div class="modal-body">
            <div class="form-group" style="margin-top:-10px;">
    
                  <label style="letter-spacing:2px;"><small>River Basins</small></label>
                  <input class="form-control" type="text" class="form-control"  placeholder="Enter River Basins here.." name="River_basins" required>
                </div>

                <div class="form-group" style="margin-top:-10px;">
                  <label style="letter-spacing:2px;"><small>Area (ha)</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Area (ha) here.." name="area_ha" required>

                  <label style="letter-spacing:2px;"><small>Provinces covered</small></label>
                  <input type="text" class="form-control"  placeholder="Enter Provinces covered here.." name="provinces_covered" required>

                  <label style="letter-spacing:2px;"><small>City/Municipality Covered</small></label>
                  <input type="text" class="form-control"  placeholder="Enter City/Municipality Covered here.." name="city_municipality_covered" required>

                  <label style="letter-spacing:2px;"><small>River Tributary</small></label>
                  <input type="text" class="form-control"  placeholder="Enter River Tributary here.." name="river_tributary" required>

                  <label style="letter-spacing:2px;"><small>Outlet</small></label>
                  <input type="text" class="form-control"  placeholder="Enter Outlet here.." name="outlet" required>
                </div>

                
        </div>
        <div class="modal-footer" style="">
          <button type="submit" name="tbl45_save" class="btn btn-default" style="letter-spacing:3px; background-color:#FE4A49; color:white; width: 100%;"><span class="glyphicon glyphicon-floppy-save"></span> SAVE</button></form>
      
        </div>
      </div>
    </div>
  </div>





      <div class="modal fade" id="tbl46-add" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title" style="letter-spacing:2px; color:red;">Enter the Following</h4></center>
        </div> 
        <form method="POST" autocomplete="off"> 
        <div class="modal-body">
       

                <div class="form-group" style="margin-top:-10px;">
                  <label style="letter-spacing:2px;"><small>PENRO/CENRO</small></label>
                  <input type="text" class="form-control"  placeholder="Enter PENRO/CENRO here.." name="Operating_unit" required>


                  <label style="letter-spacing:2px;"><small>No. of Foreshore Area</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter No. of Foreshore Area here.." name="no_of_foreshore_area" required>

                  <label style="letter-spacing:2px;"><small>Area (ha)</small></label>
                  <input type="text"  class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"  placeholder="Enter Area (ha) here.." name="area_ha" required>


                  <label style="letter-spacing:2px;"><small>Year</small></label>
                  <input type="text"  class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"  placeholder="Enter Year here.." name="year" required>

                </div>

                
        </div>
        <div class="modal-footer" style="">
          <button type="submit" name="tbl46_save" class="btn btn-default" style="letter-spacing:3px; background-color:#FE4A49; color:white; width: 100%;"><span class="glyphicon glyphicon-floppy-save"></span> SAVE</button></form>
      
        </div>
      </div>
    </div>
  </div>



      <div class="modal fade" id="tbl47-add" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title" style="letter-spacing:2px; color:red;">Enter the Following</h4></center>
        </div> 
        <form method="POST" autocomplete="off"> 
        <div class="modal-body">
       

                <div class="form-group" style="margin-top:-10px;">
              

                  <label style="letter-spacing:2px;"><small>Province</small></label>
                     <select required name="province" class="form-control" style="letter-spacing:1px;">
                          <option value="" disabled selected>--Select Province--</option>
                          <option value="Bukidnon">Bukidnon</option>
                          <option value="Camiguin">Camiguin</option>
                          <option value="Lanao del Norte">Lanao del Norte</option>
                          <option value="Lake Lanao WPDP">Lake Lanao WPDP</option>
                          <option value="Misamis Occidental">Misamis Occidental</option>
                          <option value="Misamis Oriental">Misamis Oriental</option>
                    </select>

                  <label style="letter-spacing:2px;"><small>Area (ha)</small></label>
                  <input type="text"  class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"  placeholder="Enter Area (ha) here.." name="area_ha" required>


                  <label style="letter-spacing:2px;"><small>Year</small></label>
                  <input type="text"  class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"  placeholder="Enter Year here.." name="year" required>

                </div>

                
        </div>
        <div class="modal-footer" style="">
          <button type="submit" name="tbl47_save" class="btn btn-default" style="letter-spacing:3px; background-color:#FE4A49; color:white; width: 100%;"><span class="glyphicon glyphicon-floppy-save"></span> SAVE</button></form>
      
        </div>
      </div>
    </div>
  </div>



      <div class="modal fade" id="tbl48-add" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title" style="letter-spacing:2px; color:red;">Enter the Following</h4></center>
        </div> 
        <form method="POST" autocomplete="off"> 
        <div class="modal-body">
       

                <div class="form-group" style="margin-top:-10px;">
              

                  <label style="letter-spacing:2px;"><small>Province</small></label>
                     <select required name="province" class="form-control" style="letter-spacing:1px;">
                          <option value="" disabled selected>--Select Province--</option>
                          <option value="Bukidnon">Bukidnon</option>
                          <option value="Camiguin">Camiguin</option>
                          <option value="Lanao del Norte">Lanao del Norte</option>
                          <option value="Lake Lanao WPDP">Lake Lanao WPDP</option>
                          <option value="Misamis Occidental">Misamis Occidental</option>
                          <option value="Misamis Oriental">Misamis Oriental</option>
                    </select>

                  <label style="letter-spacing:2px;"><small>No. of Polygons</small></label>
                  <input type="text"  class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"  placeholder="Enter No. of Polygons here.." name="no_of_polygons" required>


                  <label style="letter-spacing:2px;"><small>No. of Sites</small></label>
                  <input type="text"  class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"  placeholder="Enter No. of Sites here.." name="no_of_sites" required>

                  <label style="letter-spacing:2px;"><small>No. of Beneficiaries</small></label>
                  <input type="text"  class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"  placeholder="Enter No. of Beneficiaries here.." name="no_of_beneficiaries" required>

                </div>

                
        </div>
        <div class="modal-footer" style="">
          <button type="submit" name="tbl48_save" class="btn btn-default" style="letter-spacing:3px; background-color:#FE4A49; color:white; width: 100%;"><span class="glyphicon glyphicon-floppy-save"></span> SAVE</button></form>
      
        </div>
      </div>
    </div>
  </div>





      <div class="modal fade" id="tbl49-add" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title" style="letter-spacing:2px; color:red;">Enter the Following</h4></center>
        </div> 
        <form method="POST" autocomplete="off"> 
        <div class="modal-body">
       

                <div class="form-group" style="margin-top:-10px;">
              

                  <label style="letter-spacing:2px;"><small>Province</small></label>
                     <select required name="province" class="form-control" style="letter-spacing:1px;">
                          <option value="" disabled selected>--Select Province--</option>
                          <option value="Bukidnon">Bukidnon</option>
                          <option value="Camiguin">Camiguin</option>
                          <option value="Lanao del Norte">Lanao del Norte</option>
                          <option value="Lake Lanao WPDP">Lake Lanao WPDP</option>
                          <option value="Misamis Occidental">Misamis Occidental</option>
                          <option value="Misamis Oriental">Misamis Oriental</option>
                    </select>

         

                  <label style="letter-spacing:2px;"><small>No. of Seedling planted</small></label>
                  <input type="text"  class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"  placeholder="Enter No. of Seedling planted here.." name="number_of_seedlings_planted" required>

                  <label style="letter-spacing:2px;"><small>Year</small></label>
                  <input type="text"  class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"  placeholder="Enter Year here.." name="year" required>

                </div>

                
        </div>
        <div class="modal-footer" style="">
          <button type="submit" name="tbl49_save" class="btn btn-default" style="letter-spacing:3px; background-color:#FE4A49; color:white; width: 100%;"><span class="glyphicon glyphicon-floppy-save"></span> SAVE</button></form>
      
        </div>
      </div>
    </div>
  </div>



      <div class="modal fade" id="tbl50-add" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title" style="letter-spacing:2px; color:red;">Enter the Following</h4></center>
        </div> 
        <form method="POST" autocomplete="off"> 
        <div class="modal-body">
       

                <div class="form-group" style="margin-top:-10px;">
              

                  <label style="letter-spacing:2px;"><small>Province</small></label>
                     <select required name="province" class="form-control" style="letter-spacing:1px;">
                          <option value="" disabled selected>--Select Province--</option>
                          <option value="Bukidnon">Bukidnon</option>
                          <option value="Camiguin">Camiguin</option>
                          <option value="Lanao del Norte">Lanao del Norte</option>
                          <option value="Lake Lanao WPDP">Lake Lanao WPDP</option>
                          <option value="Misamis Occidental">Misamis Occidental</option>
                          <option value="Misamis Oriental">Misamis Oriental</option>
                    </select>

         

                  <label style="letter-spacing:2px;"><small>No. of Seedling production</small></label>
                  <input type="text"  class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"  placeholder="Enter No. of Seedling production here.." name="number_of_seedlings_production" required>

                  <label style="letter-spacing:2px;"><small>Year</small></label>
                  <input type="text"  class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"  placeholder="Enter Year here.." name="year" required>

                </div>

                
        </div>
        <div class="modal-footer" style="">
          <button type="submit" name="tbl50_save" class="btn btn-default" style="letter-spacing:3px; background-color:#FE4A49; color:white; width: 100%;"><span class="glyphicon glyphicon-floppy-save"></span> SAVE</button></form>
      
        </div>
      </div>
    </div>
  </div>



<div class="modal fade" id="tbl51-add" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title" style="letter-spacing:2px; color:red;">Enter the Following</h4></center>
        </div> 
        <form method="POST" autocomplete="off"> 
        <div class="modal-body">
       

                <div class="form-group" style="margin-top:-10px;">
                  <label style="letter-spacing:2px;"><small>Commodity</small></label>
                  <input type="text"  class="form-control" placeholder="Enter Commodity here.." name="commodity" required>     

                  <label style="letter-spacing:2px;"><small>No. of Seedlings planted</small></label>
                  <input type="text"  class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"  placeholder="Enter No. of Seedlings planted here.." name="number_of_seedlings_planted" required>

                  <label style="letter-spacing:2px;"><small>Year</small></label>
                  <input type="text"  class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"  placeholder="Enter Year here.." name="year" required>

                </div>

                
        </div>
        <div class="modal-footer" style="">
          <button type="submit" name="tbl51_save" class="btn btn-default" style="letter-spacing:3px; background-color:#FE4A49; color:white; width: 100%;"><span class="glyphicon glyphicon-floppy-save"></span> SAVE</button></form>
      
        </div>
      </div>
    </div>
  </div>



<div class="modal fade" id="tbl52-add" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title" style="letter-spacing:2px; color:red;">Enter the Following</h4></center>
        </div> 
        <form method="POST" autocomplete="off"> 
        <div class="modal-body">
       

                <div class="form-group" style="margin-top:-10px;">

                <label style="letter-spacing:2px;"><small>PENRO/CENRO/PA</small></label>
                     <select required name="penro_cenro_pa" class="form-control" style="letter-spacing:1px;">
                          <option value="" disabled selected>----</option>
                          <option value="Bukidnon">Bukidnon</option>
                          <option value="Camiguin">Camiguin</option>
                          <option value="Lanao del Norte">Lanao del Norte</option>
                          <option value="Lake Lanao WPDP">Lake Lanao WPDP</option>
                          <option value="Misamis Occidental">Misamis Occidental</option>
                          <option value="Misamis Oriental">Misamis Oriental</option>
                    </select>
    
                  <label style="letter-spacing:2px;"><small>Percentage</small></label>
                  <input type="text"  class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"  placeholder="Enter Percentage here.." name="percentage" required>

                  <label style="letter-spacing:2px;"><small>Year</small></label>
                  <input type="text"  class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"  placeholder="Enter Year here.." name="year" required>

                </div>

                
        </div>
        <div class="modal-footer" style="">
          <button type="submit" name="tbl52_save" class="btn btn-default" style="letter-spacing:3px; background-color:#FE4A49; color:white; width: 100%;"><span class="glyphicon glyphicon-floppy-save"></span> SAVE</button></form>
      
        </div>
      </div>
    </div>
  </div>



<div class="modal fade" id="tbl53-add" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title" style="letter-spacing:2px; color:red;">Enter the Following</h4></center>
        </div> 
        <form method="POST" autocomplete="off"> 
        <div class="modal-body">
       

                <div class="form-group" style="margin-top:-10px;">
                  <label style="letter-spacing:2px;"><small>PENRO/CENRO/PA</small></label>
                  <input type="text"  class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Enter PENRO/CENRO/PA here.." name="penro_cenro_pa" required>     
                  <label style="letter-spacing:2px;"><small>Area (ha)</small></label>
                  <input type="text"  class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"  placeholder="Enter Area (ha) here.." name="area_ha" required>

                  <label style="letter-spacing:2px;"><small>No. of Seedlings Validated</small></label>
                  <input type="text"  class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"  placeholder="Enter No. of Seedlings Validated here.." name="no_of_seedlings_validated" required>

                  <label style="letter-spacing:2px;"><small>No. of Seedlings Planted</small></label>
                  <input type="text"  class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Enter No. of Seedlings Planted here.." name="no_of_seedlings_planted" required>    

                  <label style="letter-spacing:2px;"><small>No. of Seedlings Contracted</small></label>
                  <input type="text"  class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"  placeholder="Enter No. of Seedlings Contracted here.." name="no_of_seedlings_contracted" required>

                  <label style="letter-spacing:2px;"><small>Survival</small></label>
                  <input type="text"  class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"  placeholder="Enter Survival here.." name="survival" required>

                
                </div>

                
        </div>
        <div class="modal-footer" style="">
          <button type="submit" name="tbl53_save" class="btn btn-default" style="letter-spacing:3px; background-color:#FE4A49; color:white; width: 100%;"><span class="glyphicon glyphicon-floppy-save"></span> SAVE</button></form>
      
        </div>
      </div>
    </div>
  </div>


  <div class="modal fade" id="tbl54-add" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title" style="letter-spacing:2px; color:red;">Enter the Following</h4></center>
        </div> 
        <form method="POST" autocomplete="off">
        <div class="modal-body">
                <div class="form-group">
                  <label style="letter-spacing:2px;"> <small>Location / Province</small></label>
                  <input class="form-control" type="text"  class="form-control"  placeholder="Enter Location / Province here.." name="location_Province" required>
                </div>
                <label style="letter-spacing:2px;"><small>Choose Field's</small></label>
                <div class="form-group">

                        <label class="radio-inline">
                                <input type="radio" name="a_status" value="NIPAS" required style="width:16px; height:16px;">NIPAS
                        </label>
                        
                        <label class="radio-inline">
                                <input type="radio" name="a_status" value="LGU-Managed MPAs" required style="width:16px; height:16px;">LGU-Managed MPAs 
                        </label>
                </div>


                <div class="form-group">
                  <label style="letter-spacing:2px;"><small>No. of MPAs</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter No. of MPAs here.." name="No_of_MPAs" required>

                  <label style="letter-spacing:2px;"><small>Total Area (ha)</small></label>
                  <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control"  placeholder="Enter Total Area (ha) here.." name="total_area_ha" required>

                  <label style="letter-spacing:2px;"><small>Year</small></label>
                  <input type="text" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"  placeholder="Enter Year here.." name="year" required>

                </div>

                
        </div>
        <div class="modal-footer" style="">
          <button type="submit" name="tbl54_save" class="btn btn-default" style="letter-spacing:3px; background-color:#FE4A49; color:white; width: 100%;"><span class="glyphicon glyphicon-floppy-save"></span> SAVE</button></form>
      
        </div>
      </div>
    </div>
  </div>
