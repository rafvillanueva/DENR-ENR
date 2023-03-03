

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
                    <div class="container-fluid">
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
                    <a href="">
                        <img src="img/Enrprofile.png" height="32" style="position: relative;">
                        <b> &nbsp; ENR Profile</b>
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