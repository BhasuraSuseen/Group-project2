
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
    <div id="pop_box_diet_calculate_1">
        <div id="pop_box_diet_calculate_1_Q1">
            <form action="diet.php" method="post">
                <b>Children</b><br> 
                Subtype Counts             
                <input type="number" name="subtype_1_count" placeholder="Subtype 1 Count">             
                <input type="number" name="subtype_2_count" placeholder="Subtype 2 Count">              
                <input type="number" name="subtype_1_count" placeholder="Subtype 3 Count">
                <b>Staff</b><br>
                Staff count
                <input type="number" name="subtype_1_sbreakfast" placeholder="Breakfast Count">
                <input type="number" name="subtype_1_slunch" placeholder="Lunch Count">
                <input type="number" name="subtype_1_sdinner" placeholder="Dinner Count">
        </div>
        <div id="pop_box_diet_calculate_1_Q2">
                <b>Patients</b><br>
                Normal patient count
                <input type="number" name="subtype_1_pbreakfast" placeholder="Breakfast Count">
                <input type="number" name="subtype_1_plunch" placeholder="Lunch Count">
                <input type="number" name="subtype_1_pdinner" placeholder="Dinner Count">
                
                <b>Diabetic Patients</b><br>
                Diabetic patient count
                <input type="number" name="subtype_1_dbreakfast" placeholder="Breakfast Count">
                <input type="number" name="subtype_1_dlunch" placeholder="Lunch Count">
                <input type="number" name="subtype_1_ddinner" placeholder="Dinner Count">
        </div>
        <div id="pop_box_diet_calculate_1_Q3">
                <b>Other 1</b><br>
                Other food ammounts in grams or milileters
                <input type="number" name="fish" placeholder="Fish">
                <input type="number" name="vegitable" placeholder="Vegitable">
                <input type="number" name="papaya" placeholder="Papaya">
                <input type="number" name="poridge" placeholder="Poridge">
                <input type="number" name="soup" placeholder="Soup">
                <input type="number" name="nestamolt" placeholder="Nestamolt">
                <input type="number" name="jelly" placeholder="Jelly">
                <input type="number" name="palawatta" placeholder="Palawatta">
                <input type="number" name="anchor" placeholder="Anchor">
                <input type="number" name="soya" placeholder="Soya">
                           
        </div>
        <div id="pop_box_diet_calculate_1_Q4">
                <b>Other 1</b><br>
                Other food ammounts in units
                <input type="number" name="eggs" placeholder="Eggs">
                <input type="number" name="ash plantans" placeholder="Ash plantans">
                <input type="number" name="orange" placeholder="Orange">
               <input type="number" name="yoghurt" placeholder = "Yoghurt">
               <input type="number" name="lemon" placeholder="Lemon">
                <input type="number" name="banana" placeholder="Banana">
                <input type="number" name="king coconut" placeholder="King coconut">
               <input type="number" name="apple" placeholder="Apple">
               <input type="number" name="cheese" placeholder="Cheese">
                <input type="number" name="curd" placeholder="Curd">
                
        </div>
        <div id="pop_box_diet_calculate_1_Q5">
                <input type="submit" value="Calculate" name = "submit">
                </form>
                
                
        </div>
        <div id="pop_box_diet_calculate_1_Q6">
                
                
                
                
               
            
        </div>                                     
             
    </div>
    <div id="pop_box_diet_calculate_2">
            <form action="diet.php" method="post">
                <p>Update Food Menus</p>
                <input type="text" name="Update_food_menus" placeholder="Update Food Menus">           
                <input type="submit" name = "submi">
            </form>
    </div>

    <script>
        $(document).ready(function(){
           $('#open_diet_1').click(function(){
               $('#pop_background').fadeIn();
               $('#pop_box_diet_calculate_1').fadeIn();
               return false;
           });
           $('#open_diet_2').click(function(){
               $('#pop_background').fadeIn();
               $('#pop_box_diet_calculate_2').fadeIn();
               return false;
           });
           $('#pop_background').click(function(){
               $('#pop_background').fadeOut();
               $('#pop_box_diet_calculate_1').fadeOut();
               $('#pop_box_diet_calculate_2').fadeOut();
               return false;
           });
        });
    </script>
    <div id="header_diet">
        <div class="logo"><a href="homs_home.php"><span1>#</span1><span2>OMS</span2>    panadura base hospital</a></div>
        <div class="user_name">
            <a href='#' class="user_name">Bhasura Suseen </a>
        </div>
        <div class="menu_icons">
         
          
          
        </div>
    </div>
    <div id="container">
        <div class="sidebar">
            <div class="side_logo_diet">
                <a href="#">diet calculate</a>
            </div>
            <ul id="nav">        
                <li><a href="#" class="hr">HR</a></li>
                <li ><a href="#" class="hr1"></i>Attendance </a></li>
                <li ><a href="#" class="hr1"></i>Reports</a></li>
                <li ><a href="employee_data.php" class="hr1"></i>Employee Data</a></li>
                <li ><a href="#" class="mail"></i>Mail </a></li>
                <li ><a href="mail_flow.php" class="mail1"></i>Mail Flow</a></li>
                <li><a href="#" class="diet">Diet Sheet</a></li>
                <li ><a href="#" class="diet1"></i>Calculate</a></li>
                <li ><a href="#" class="diet1"></i>Report</a></li>
            </ul>
        </div>
        <div class="content">
            <div class="column_middle">
                <div class="food_menu_details">
                    
                </div>
                <div class="food_menu_buttons">
                    <a  href="#" id="open_diet_2"> Update food menus </a><a> ... </a> 
                    <a  href="#" id="open_diet_1"> <b>Calculate food amounts</b> </a>
                     
                </div>                             
            </div>
            <div class="column_right" >
                <div class="right_up_food_ammount"> 
                    <a  href="#" >Show calculated food amounts </a>                  
                </div>

                <div class="right_down_foof_pdf">
                    <a  href="#" >Creates pdf of food amounts </a>
                </div>
                
            </div>
        </div>               
    </div>

</body>
</html>