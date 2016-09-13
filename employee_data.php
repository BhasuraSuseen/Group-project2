
<html>
<head>
<meta charset=utf-8 />
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, minimal-ui"/>
<title>HOMS Employee Data</title>
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
</head>
<body>
    <div id="pop_background"></div>
    <div id="pop_box_hr_data_record"> 
          
            <div id="pop_box_hr_data_record_left">
                 <form action="upload.php" method="post" enctype="multipart/form-data" target="iframe">
                    Select Employee photo to upload:
                    <input type="file" name="fileToUpload" id="fileToUpload">
                    <input type="submit" value="Upload Image" name="submit">
                </form>
                <iframe class="iframe1" name="iframe"></iframe>
                
                <form action="hr.php" method="post" target="iframehr">
                    <input type="text" name="fname" placeholder="First Name" required>
                    <input type="text" name="lname" placeholder="Last Name" required>
                    Birth Date
                    <input type="date" name="bdate" placeholder="Birth Date yyyy-mm-dd" required>
                    <input type="text" name="address" placeholder="Address" required>
                    <input type="int" name="cnumber" placeholder="Contact NO" required>
                    <input type="text" name="gender" placeholder="Gender M/F" required> 
                    <input type="text" name="nic" placeholder="NIC NO " required>
                    
                    <input type="text" name="etype" placeholder="Employee type" required>
                    
             </div>
             <div id="pop_box_hr_data_record_right">
                    First Employment Date
                    <input type="Date" name="fedate" placeholder="FE Date " required>
                    Employment Commencement Date
                    <input type="Date" name="ecdate" placeholder="EC Date " required>
                    Socond Grade Promotion Date
                    <input type="Date" name="sgpdate" placeholder="SGP Date ">
                    First Grade Promotion Date
                    <input type="Date" name="fgpdate" placeholder="FGP Date ">
                    Special Grade Promotion Date
                    <input type="Date" name="cgpdate" placeholder="CGP Date ">
                    <input type="number" name="salary" placeholder="Salary"> 
                    Salary Incremental Date
                    <input type="Date" name="sidate" placeholder="SI Date ">
                    <input type="text" name="remarks" placeholder="Remarks">
                    
                                       
                    <input type="submit" value="Save" name = "submit">
                </form>
                <iframe class="iframehr" name="iframehr"></iframe>

            </div> 
    </div>

    <script>
        $(document).ready(function(){
           $('#open_hr_1').click(function(){
               $('#pop_background').fadeIn();
               $('#pop_box_hr_data_record').fadeIn();
               return false;
           });
           $('#pop_background').click(function(){
               $('#pop_background').fadeOut();
               $('#pop_box_hr_data_record').fadeOut();

               return false;
           });
        });
    </script>
    <div id="header">
        <div class="logo"><a href="homs_home.php"><span1>#</span1><span2>OMS</span2>    panadura base hospital</a></div>
        <div class="user_name">
            <a href='#' class="user_name">Bhasura Suseen </a>
        </div>
        <div class="menu_icons">
         
          
          
        </div>
    </div>
    <div id="container">
        <div class="sidebar">
            <div class="side_logo_hr">
                <a href="#">employee data</a>
            </div>
            <ul id="nav">        
                <li><a href="#" class="hr">HR</a></li>
                <li ><a href="#" class="hr1"></i>Attendance </a></li>
                <li ><a href="#" class="hr1"></i>Reports</a></li>
                <li ><a href="#" class="hr1"></i>Employee Data</a></li>
                <li ><a href="#" class="mail"></i>Mail </a></li>
                <li ><a href="mail_flow.php" class="mail1"></i>Mail Flow</a></li>
                <li><a href="#" class="diet">Diet Sheet</a></li>
                <li ><a href="diet_calculate.php" class="diet1"></i>Calculate</a></li>
                <li ><a href="#" class="diet1"></i>Report</a></li>
            </ul>
        </div>
        <div class="content">
            <div class="column_middle">
                <div class="employee_profile">
                    <form action="hr.php" method="post" target="iframehr1">
                    <input type="text" name="search" placeholder="First Name">
                    <input type="submit" value="Search" name="search1"><br>
                    </form>
                    <iframe class="iframehr1" name="iframehr1"></iframe>
                    
                </div>                             
            </div>
            <div class="column_right" >
                <div class="right_up_hr_data"> 
                    <a>... </a><a  href="#" id="open_hr_1">ADD NEW EMPLOYEE </a><a>...</a>                 
                </div>

                <div class="right_down_hr_data">
                    <a  href="#" class="hr" >Employee list </a>
                    <ul id= "nav">
                    <?php
                        require "connect.php";
                        $query = mysqli_query($conn,"SELECT NIC_NO, F_Name FROM employee");

                        //echo "<select name='user'>";
                        while ($temp = mysqli_fetch_assoc($query)) {
                            //echo "<option value='".$temp['NIC_NO']."'>".$temp['F_Name']."</option>";
                            echo "<li ><a href='#' class='hr1'></i>" .$temp['NIC_NO']."  ".$temp['F_Name']. "</a></li>";
                        }
                        //echo "</select>";
                   ?>
                   </ul>

                </div>
                
            </div>
        </div>               
    </div>

</body>
</html>