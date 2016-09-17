
<html>
<head>
<title>HOMS</title>
<link rel="stylesheet" type="text/css" href="styles/global.css" /> 

<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!--Calender-->
<script src="cal/js/jquery-1.11.1.min.js"></script>

<script src="cal/js/underscore-min.js"></script>
<script src= "cal/js/moment-2.2.1.js"></script>
<script src="cal/js/clndr.js"></script>
<script src="cal/js/site.js"></script>
<!--End Calender-->

</head>
<body onload="startTime()">

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
            <div class="side_logo">
                <a href="index.html">hospital<br>office<br>management<br>system</a>
            </div>
            <ul id="nav">        
                <li><a href="#" class="hr">HR</a></li>
                <li ><a href="#" class="hr1"></i>Attendance </a></li>
                <li ><a href="#" class="hr1"></i>Reports</a></li>
                <li ><a href="employee_data.php" class="hr1"></i>Employee Data</a></li>
                <li ><a href="#" class="mail"></i>Mail </a></li>
                <li ><a href="mail_flow.php" class="mail1"></i>Mail Flow</a></li>
                <li><a href="#" class="diet">Diet Sheet</a></li>
                <li ><a href="diet_calculate.php" class="diet1"></i>Calculate</a></li>
                <li ><a href="#" class="diet1"></i>Report</a></li>
            </ul>
        </div>
        <div class="content">
            <div class="column_middle">
                <div class="news_feed">
                    <div class="news_feed_left"><a href="#">NEWS FEED</a></div>
                    <div class="news_feed_right"><button type="button" onclick="alert('Creates Message !')">Add Message</button></div>
                    <ul id="nf">        
                    <li><a href="#" class="ns">Staff Meeting Today 2.00 pm<br>Ao officer 8.35 am</a></li>
                    <li><a href="#" class="ns">Please Forward the mail to Dr Janaka imedietly  <br>EB officer 9.12 am</a></li>
                    <li><a href="#" class="ns">Mrs. Jayathilaka Meet me before 11.30 am <br>EB officer 10.22 am</a></li>
                    <li><a href="#" class="ns">Please reply to the mail no 3008 <br>AO officer 11.22 am</a></li>
                    <li><a href="#" class="ns">I have a meeting at 1.00 pm <br>AO officer 11.34 am</a></li>
                    </ul>
                    
                </div>
                <div class="hr_container">
                    
                    <div class="hr_logo">
                        <a href="#"><spanh>HR</spanh></a>                       
                     </div>
                     <div class="hr_container_inside">
                        <a  href="#" target="_self"><p>Attendence 32<br>Leave 5<br>Absent 2</p></a>
                     </div>
                </div>
                <div class= "mail_container">
                    <div class="mail_logo">                       
                        <a href="#"><spanm> MAIL</spanm></a>
                    </div>
                    <div class="mail_container_inside">
                        <a  href="#" target="_self"><p>2 new mails arrived<br>M 3002<br>M 3003</p></a>
                     </div>
                </div>
                <div class= "diet_container">
                    <div class="diet_logo">
                        <a href="#"><spand> DIET SHEET</spand></a>
                    </div>
                    <div class="diet_container_inside">
                        <a  href="#" target="_self"><p>Counts entered<br>for today<br>...<br>Reports<br>are created<br>for pevious<br>week</p></a>
                     </div>
                    
                </div> 
            </div>
            <div class="column_right" >
                <div class="right_up">
                    <link href="cal/css/style.css" rel="stylesheet" type="text/css" media="all" />
                    <link rel="stylesheet" href="cal/css/clndr.css" type="text/css" />
                    <div class="main">
                        <div class="calnder">
                            <div class="column_right_grid calender">
                                <div class="clndr-event">
                                    <a href="#small-dialog" class="popup-with-zoom-anim">ADD EVENT</a>
                                </div>
                                <!-- pop-up-box -->
                                <script type="text/javascript" src="cal/js/modernizr.custom.min.js"></script>    
                                <link href="cal/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
                                <script src="cal/js/jquery.magnific-popup.js" type="text/javascript"></script>
                                <!-- //pop-up-box -->
                                <div id="small-dialog" class="mfp-hide">
                                    <div class="event-text">
                                        <form>						
                                            <input type="text" value="Subject" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}"/>
                                            <input type="date" value="Select date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Select date';}"/>
                                            <textarea value="Message:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message..</textarea>
                                            <input type="submit" value="Add" >
                                        </form>
                                    </div>
                                </div>
                                <script>
                                    $(document).ready(function() {
                                    $('.popup-with-zoom-anim').magnificPopup({
                                        type: 'inline',
                                        fixedContentPos: false,
                                        fixedBgPos: true,
                                        overflowY: 'auto',
                                        closeBtnInside: true,
                                        preloader: false,
                                        midClick: true,
                                        removalDelay: 300,
                                        mainClass: 'my-mfp-zoom-in'
                                    });
                                                                                                    
                                    });
                                </script>	
                                <div class="cal1">
                                    <div class="clndr">
                                        <div class="clndr-controls">
                                            <div class="clndr-control-button">
                                                <p class="clndr-previous-button">previous</p>
                                            </div>
                                            <div class="month">SEPTEMBER 2015</div>
                                            <div class="clndr-control-button rightalign">
                                                <p class="clndr-next-button">next</p>
                                            </div>
                                        </div>
                                        <table class="clndr-table">
                                            <thead>
                                                <tr class="header-days">
                                                    <td class="header-day">SUN</td>
                                                    <td class="header-day">MON</td>
                                                    <td class="header-day">TUE</td>
                                                    <td class="header-day">WED</td>
                                                    <td class="header-day">THU</td>
                                                    <td class="header-day">FRI</td>
                                                    <td class="header-day">SAT</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="day past adjacent-month last-month calendar-day-2015-04-26"><div class="day-contents">26</div></td>
                                                    <td class="day past adjacent-month last-month calendar-day-2015-04-27"><div class="day-contents">27</div></td>
                                                    <td class="day past adjacent-month last-month calendar-day-2015-04-28"><div class="day-contents">28</div></td>
                                                    <td class="day past adjacent-month last-month calendar-day-2015-04-29"><div class="day-contents">29</div></td>
                                                    <td class="day past adjacent-month last-month calendar-day-2015-04-30"><div class="day-contents">30</div></td>
                                                    <td class="day past calendar-day-2015-05-01"><div class="day-contents">1</div></td>
                                                    <td class="day past calendar-day-2015-05-02"><div class="day-contents">2</div></td>
                                                </tr>
                                                <tr>
                                                    <td class="day past calendar-day-2015-05-03"><div class="day-contents">3</div></td>
                                                    <td class="day past calendar-day-2015-05-04"><div class="day-contents">4</div></td>
                                                    <td class="day past calendar-day-2015-05-05"><div class="day-contents">5</div></td>
                                                    <td class="day past calendar-day-2015-05-06"><div class="day-contents">6</div></td>
                                                    <td class="day past calendar-day-2015-05-07"><div class="day-contents">7</div></td>
                                                    <td class="day past calendar-day-2015-05-08"><div class="day-contents">8</div></td>
                                                    <td class="day past calendar-day-2015-05-09"><div class="day-contents">9</div></td>
                                                </tr>
                                                <tr>
                                                    <td class="day past event calendar-day-2015-05-10"><div class="day-contents">10</div></td>
                                                    <td class="day past event calendar-day-2015-05-11"><div class="day-contents">11</div></td>
                                                    <td class="day past event calendar-day-2015-05-12"><div class="day-contents">12</div></td>
                                                    <td class="day past event calendar-day-2015-05-13"><div class="day-contents">13</div></td>
                                                    <td class="day today event calendar-day-2015-05-14"><div class="day-contents">14</div></td>
                                                    <td class="day calendar-day-2015-05-15"><div class="day-contents">15</div></td>
                                                    <td class="day calendar-day-2015-05-16"><div class="day-contents">16</div></td>
                                                </tr>
                                                <tr>
                                                    <td class="day calendar-day-2015-05-17"><div class="day-contents">17</div></td>
                                                    <td class="day calendar-day-2015-05-18"><div class="day-contents">18</div></td>
                                                    <td class="day calendar-day-2015-05-19"><div class="day-contents">19</div></td>
                                                    <td class="day calendar-day-2015-05-20"><div class="day-contents">20</div></td>
                                                    <td class="day event calendar-day-2015-05-21"><div class="day-contents">21</div></td>
                                                    <td class="day event calendar-day-2015-05-22"><div class="day-contents">22</div></td>
                                                    <td class="day event calendar-day-2015-05-23"><div class="day-contents">23</div></td>
                                                </tr>
                                                <tr>
                                                    <td class="day calendar-day-2015-05-24"><div class="day-contents">24</div></td>
                                                    <td class="day calendar-day-2015-05-25"><div class="day-contents">25</div></td>
                                                    <td class="day calendar-day-2015-05-26"><div class="day-contents">26</div></td>
                                                    <td class="day calendar-day-2015-05-27"><div class="day-contents">27</div></td>
                                                    <td class="day calendar-day-2015-05-28"><div class="day-contents">28</div></td>
                                                    <td class="day calendar-day-2015-05-29"><div class="day-contents">29</div></td>
                                                    <td class="day calendar-day-2015-05-30"><div class="day-contents">30</div></td>
                                                </tr>
                                                <tr>
                                                    <td class="day calendar-day-2015-05-31"><div class="day-contents">31</div></td>
                                                    <td class="day adjacent-month next-month calendar-day-2015-06-01"><div class="day-contents">1</div></td>
                                                    <td class="day adjacent-month next-month calendar-day-2015-06-02"><div class="day-contents">2</div></td>
                                                    <td class="day adjacent-month next-month calendar-day-2015-06-03"><div class="day-contents">3</div></td>
                                                    <td class="day adjacent-month next-month calendar-day-2015-06-04"><div class="day-contents">4</div></td>
                                                    <td class="day adjacent-month next-month calendar-day-2015-06-05"><div class="day-contents">5</div></td>
                                                    <td class="day adjacent-month next-month calendar-day-2015-06-06"><div class="day-contents">6</div></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                
                
                
                </div>
                <div class="right_up_right">
                    <b>EVENTS</b><br><br>
                    <a> Collect Mails from post office <br>
                    at 10.20 am<br>
                    ...<br>
                    <a> Store Inspection <br>
                    at 2.00 pm<br>
                    ...<br>
                    Mail disposal  <br>
                    at 4.00 pm<br>
                    ...<br>
                </div> 
                
                <div class="right_down_container">
                    <div class="right_down_back"></div>
                    <div class="right_down">
                    <b>HOPITAL DETAILS</b><br><br>
                    <a> Address: Base Hospital, Panadura <br>
                    
                    ...<br>
                     Tel<br>+94 (0) 38 2544444-7<br>
                        +94 (0) 38 2304444-56<br>
                        +94 (0) 38 55 77 111<br>
                        +94 (0) 38 5 77 77 77<br>
                        Fax	+94 (0) 38 2430393 <br> 
                    ...<br>
                     </a>
                </div>
                </div>
                
            </div>
        </div>               
    </div>
</body>
</html>