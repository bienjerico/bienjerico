<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>bienjerico</title>
    <link href='http://fonts.googleapis.com/css?family=Play|Comfortaa|Ubuntu+Condensed|Economica|Rajdhani|Pacifico' rel='stylesheet' type='text/css'>
    <link rel="icon" type="image/png" href="assets/img/logo.png" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        *{
            /*font-family: 'Ubuntu Condensed', sans-serif;*/
            /*font-family: 'Economica', sans-serif;*/
            font-family: 'Rajdhani', sans-serif;
        }


#square {
	width: 100%;
	height: 200px;
	background: #ffffff;
        /*border: 5px solid #f7c222;*/
        box-shadow: 5px 5px 5px #888888;
}
/*Define Accordion box*/
.accordion { width:830px; overflow:hidden; margin:10px auto; color:#474747; background:#414141; padding:10px; }

/*General Accordion****************************************************************************/
/*Set style of open slide*/
.accordion section:target { background:#FFF; padding:10px;}
.accordion section:target:hover { background:#FFF; }
.accordion section:target h2 {width:100%;}
.accordion section:target h2 a{ color:#333; padding:0;}
.accordion section:target p {display:block;}
.accordion section h2 a{padding:8px 10px;display:block; font-size:16px; font-weight:normal;color:#eee; text-decoration:none; }

/*set style of closed slide*/
.accordion section{ float:left;	overflow:hidden; color:#333; cursor:pointer; background: #333; margin:3px; }
.accordion section:hover {background:#444;}
.accordion section p { display:none; }
.accordion section:after{position:relative;font-size:24px;color:#000;font-weight:bold;}
.accordion section:nth-child(1):after{content:'1';}
.accordion section:nth-child(2):after{content:'2';}
.accordion section:nth-child(3):after{content:'3';}
.accordion section:nth-child(4):after{content:'4';}
.accordion section:nth-child(5):after{content:'5';}
/*End General Accordion****************************************************************************/

/*Horizontal Accordion *********************************************************************/
.horizontal section{ width:5%; height:250px; 
	-moz-transition:width 0.2s ease-out; 
	-webkit-transition:width 0.2s ease-out;
  	-o-transition:width 0.2s ease-out;
	-ms-transition:width 0.2s ease-out;
  	transition:width 0.2s ease-out;
}

/*Position the number of the slide*/
.horizontal section:after{top:140px;left:15px;}

/*Header of closed slide*/
.horizontal section h2 { 
	-webkit-transform:rotate(90deg);
	-moz-transform:rotate(90deg);
	-o-transform: rotate(90deg);
	-ms-transform: rotate(90deg);
	transform: rotate(90deg);
	width:240px; position:relative; left:-100px; top:85px;
} 

/*On mouse over open slide*/
.horizontal :target{ width:73%;height:230px; }
.horizontal :target h2{ top:0px;left:0;
	-webkit-transform:rotate(0deg);
	-moz-transform:rotate(0deg);
	-o-transform: rotate(0deg);
	-ms-transform: rotate(0deg);
	transform: rotate(0deg); 
}
/*End Horizontal Accordion *********************************************************************/



    </style>
</head>	
<body>
        <script src="assets/js/modernizr.js"></script>
	
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/responsive-nav.js"></script>
        
        <!-- Latest compiled and minified JavaScript -->
        <script src="assets/js/bootstrap.min.js"></script>
        
        
<div class="wrapper">

	<main>


	<div class="text-center">

	<header>
      <nav class="nav-collapse">
        <ul>
            <li class="menu-item"><a href="#about" data-scroll><b>About</b></a></li>
            <li class="menu-item"><a href="#skills" data-scroll><b>Skills</b></a></li>
            <li class="menu-item"><a href="#experience" data-scroll><b>Experience</b></a></li>
            <li class="menu-item"><a href="#projects" data-scroll><b>Projects</b></a></li>
            <li class="menu-item"><a href="#certificate" data-scroll><b>Certificate</b></a></li>
            <li class="menu-item"><a href="#contact" data-scroll><b>Contact</b></a></li>
        </ul>
      </nav>
    </header>
        
            

			


        <section class="module parallax parallax-1">
        <div class="container" id="about">
      
            
              <!--<img src="assets/img/logo.png" style="width:100px;">-->
           
            <!--<div class="clearfix">&nbsp;</div>-->
    
            <div class="label-name">bienjerico</div>
<!--                    <p class="font-white font-shadow">
                            Is twenty plus of age and five-nine tall with slim body type
                            <br/>
                            Is a graduate of Informatics Internation College, Northgate Alabang and currently working at Yondu
                            <br/>
                            Is interested in travelling around the world, road trip, camping, island hopping, bar hopping and playing Dota One to Two and league of legends
                            <br/>
                            Is accepting layout, graphic, web, logo, invitation, t-shirt, car designs
                    </p>-->
            
            <!-- Trigger the modal with a button -->
            
<!--<div class="square" data-toggle="modal" data-target="#myModal">Open Modal</div>-->

<!-- Modal -->
<!--<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

     Modal content
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>-->




        </div>
        </section>

		
		<section class="module content">
        <div class="container"  id="skills">

			<h2><span class="label label-default">Skills</span></h2>
				<p>
					<b class="text-primary">Programming</b>
				   	<br/>
					HTML5, PHP 5, CSS3, Javascript, Ajax, JSON, jQuery, Shell Script, API
				</p>

				<p>
					<b class="text-primary">Design</b>
					<br/>
					Adobe CS3 and CS5 (Photoshop, InDesign, Dreamweaver, Illustrator, After Effects, Premiere, Lightroom, Flash)
				</p>

				<p>
					<b class="text-primary">Database</b>
					<br/>
					MySQL, MSSQL, Oracle: 9i, MS Access
				</p>

				<p>
					<b class="text-primary">Tools</b>
					<br/>
					XAMPP, LAMP, IIS7
					<br/>
					Sublime Text 2, Netbeans 7, WebMatrix, Notepad++, MySQL Workbench
					<br/> 
					SVN and GIT (version control), PuTTY, FileZilla, WinSCP, VMware Player
					<br/>
					Microsoft SQL Server, Microsoft Visual Studio 2008 R2, Office Word, Excel, Vision, PowerPoint and Outlook
				</p>

				<p>
					<b class="text-primary">OS</b>
				   	<br/>
					Window XP, 7, 8 and Ubuntu
				</p>
                                

		</div>
		</section>
			



		<section class="module parallax parallax-2">
        <div class="container" id="experience">	
				 <h2><span class="label label-default">Experience</span></h2> 
 
<!--			 	<p class="font-white font-shadow">	
					More than 3 years experienced as a open source web application developer. 
					<br/>
					Background experienced in font-end/back-end object oriented programming with MySQL database. 
					<br/>
					My Objective is to learn more latest web technologies and integrate in different projects and environment.
				</p>

				<p class="font-white font-shadow">
					<b class="text-primary">Yondu</b>
					<br/>
					<span class="fontsize-80">
					<b>Software Engineer</b> September 2014 to Present <i>(1 month)</i>
					<br/>
					Developed and designed web application and database structure. Research and provide new technology for system development. 
					</span>
				</p>

				<p class="font-white font-shadow">
					<b class="text-primary">BPO International, Inc.</b>
					<br/>
					<span class="fontsize-80">
					<b>Senior Software Engineer</b> February 2013 to August 2014 <i>(1 year and 7 months)</i>
					<br/>
					<b>Software Engineer</b> April 2011 to October 2012 <i>(1 year and 7 months)</i>
					<br/>
					<b>On the Job Training</b> February 2011 to April 2013 <i>(3 months)</i>
					<br/>
					Developed and designed web application and database structure. Troubleshoot and maintain the existing system. 
					<br/>
					Setup and administer database client databases. Provide system update report. Research new idea for system development. 
					<br/>
					Provide new functionalities to enhancement of system. Analyze the system flow. 
					</span>
				</p>

				<p class="font-white font-shadow">
					<b class="text-primary">Samsung Electronics Philippines Corporation (SEPCO)</b>
					<br/>
					<span class="fontsize-80">
					<b>Web Developer</b> November 2012 to January 2013 <i>(3 months)</i>
					<br/>
					Troubleshoot in-house web application. Update existing system. Developed web application and designed user interface. 
					<br/>
					Create and designed database structure.
					</span>
				</p> -->
		</div>
		</section>


		<section class="module content">
        <div class="container" id="projects">

			<h2><span class="label label-default">Projects</span></h2>
                        
                        
                        <div class="accordion horizontal">
		  <section id="test1">
		      <h2><a href="#test1">About Us</a></h2>
		      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse id lobortis massa. Nunc viverra velit leo, sit amet elementum mi. Fusce posuere nunc a mi tempus malesuada. Curabitur facilisis rhoncus eros eget placerat. Aliquam semper mauris sit amet justo tempor nec lacinia magna molestie. Etiam placerat congue dolor vitae adipiscing. Aliquam ac erat lorem, ut iaculis justo. Etiam mattis dignissim gravida. Aliquam nec justo ante, non semper mi. Nulla consectetur interdum massa, vel porta enim vulputate sed. Maecenas elit quam, egestas eget placerat non, fringilla vel eros. Nam vehicula elementum nulla sed consequat. Phasellus eu erat enim. Praesent at magna non massa dapibus scelerisque in eu lorem.</p>
		  </section>
		  <section id="test2">
		      <h2><a href="#test2">Services</a></h2>
		      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse id lobortis massa. Nunc viverra velit leo, sit amet elementum mi. Fusce posuere nunc a mi tempus malesuada. Curabitur facilisis rhoncus eros eget placerat. Aliquam semper mauris sit amet justo tempor nec lacinia magna molestie. Etiam placerat congue dolor vitae adipiscing. Aliquam ac erat lorem, ut iaculis justo. Etiam mattis dignissim gravida. Aliquam nec justo ante, non semper mi. Nulla consectetur interdum massa, vel porta enim vulputate sed. Maecenas elit quam, egestas eget placerat non, fringilla vel eros. Nam vehicula elementum nulla sed consequat. Phasellus eu erat enim. Praesent at magna non massa dapibus scelerisque in eu lorem.</p>
		  </section>
		  <section id="test3">
		      <h2><a href="#test3">Blog</a></h2>
		      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse id lobortis massa. Nunc viverra velit leo, sit amet elementum mi. Fusce posuere nunc a mi tempus malesuada. Curabitur facilisis rhoncus eros eget placerat. Aliquam semper mauris sit amet justo tempor nec lacinia magna molestie. Etiam placerat congue dolor vitae adipiscing. Aliquam ac erat lorem, ut iaculis justo. Etiam mattis dignissim gravida. Aliquam nec justo ante, non semper mi. Nulla consectetur interdum massa, vel porta enim vulputate sed. Maecenas elit quam, egestas eget placerat non, fringilla vel eros. Nam vehicula elementum nulla sed consequat. Phasellus eu erat enim. Praesent at magna non massa dapibus scelerisque in eu lorem.</p>
		  </section>
		  <section id="test4">
		      <h2><a href="#test4">Portfolio</a></h2>
		      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse id lobortis massa. Nunc viverra velit leo, sit amet elementum mi. Fusce posuere nunc a mi tempus malesuada. Curabitur facilisis rhoncus eros eget placerat. Aliquam semper mauris sit amet justo tempor nec lacinia magna molestie. Etiam placerat congue dolor vitae adipiscing. Aliquam ac erat lorem, ut iaculis justo. Etiam mattis dignissim gravida. Aliquam nec justo ante, non semper mi. Nulla consectetur interdum massa, vel porta enim vulputate sed. Maecenas elit quam, egestas eget placerat non, fringilla vel eros. Nam vehicula elementum nulla sed consequat. Phasellus eu erat enim. Praesent at magna non massa dapibus scelerisque in eu lorem.</p>
		  </section>
		  <section id="test5">
		      <h2><a href="#test5">Contact</a></h2>
		      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse id lobortis massa. Nunc viverra velit leo, sit amet elementum mi. Fusce posuere nunc a mi tempus malesuada. Curabitur facilisis rhoncus eros eget placerat. Aliquam semper mauris sit amet justo tempor nec lacinia magna molestie. Etiam placerat congue dolor vitae adipiscing. Aliquam ac erat lorem, ut iaculis justo. Etiam mattis dignissim gravida. Aliquam nec justo ante, non semper mi. Nulla consectetur interdum massa, vel porta enim vulputate sed. Maecenas elit quam, egestas eget placerat non, fringilla vel eros. Nam vehicula elementum nulla sed consequat. Phasellus eu erat enim. Praesent at magna non massa dapibus scelerisque in eu lorem.</p>
		  </section>
		</div>
                        
                        
                        <div class="row">
                                    <div class="col-xs-6 col-md-4">
                                        <!--<img src="assets/img/20150821_124801-01.jpeg" class="img-thumbnail">-->
                                        <div id="square" class="img-rounded"></div>
                                    </div>
                                    <div class="col-xs-6 col-md-4">
                                     <!--<img src="assets/img/20150821_124801-01.jpeg" class="img-thumbnail">-->
                                        <div id="square" class="img-rounded"></div>
                                    </div>
                                    <div class="col-xs-6 col-md-4">
                                      <!--<img src="assets/img/20150821_124801-01.jpeg" class="img-thumbnail">-->
                                    <div id="square" class="img-rounded"></div>
                                    </div>
                            <div class="clearfix">&nbsp;</div>
                                <div class="col-xs-6 col-md-4">
                                   <!--<img src="assets/img/20150821_124801-01.jpeg" class="img-thumbnail">-->
                                    <div id="square"  class="img-rounded"></div>

                                </div>
                                <div class="col-xs-6 col-md-4">
                                  <!--<img src="assets/img/20150821_124801-01.jpeg" class="img-thumbnail">-->
                                    <div id="square" class="img-rounded"></div>

                                </div>
                                <div class="col-xs-6 col-md-4">
                                <!--<img src="assets/img/20150821_124801-01.jpeg" class="img-thumbnail">-->
                                    <div id="square" class="img-rounded"></div>

                                </div>
                 
                        </div>
<!--                            Carousel
    ================================================== 
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
       Indicators 
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
         
            <div class="carousel-caption">
                <h3 class="">Captive Portal</h3>
             
                    <b>Yondu</b>
               
                <p>On going project...
                    <br/>
                    <note><i>PHP 5, HTML 5, CSS3, Javascript (Ajax and jQuery), MySQL, Apache</i></note>
                </p>
            </div>
          
        </div>
        <div class="item">
          
            <div class="carousel-caption">
                <h3>Time and Attendance System</h3>
               
                    <b>BPO International, Inc.</b>
               
                <p>
                    Combination of Leave Management Module, Overtime Management Module, Schedule Management Module, Timekeeping Module.
                    System provide PDF, Excel reports and email notification in every transaction.
                    Client can access the system using internet.
                    <br/>
                    <note><i>PHP 5 (PHP Native with Object Oriented Programming), HTML 5, CSS3 (Twitter Bootstrap), Javascript (Ajax and jQuery), MySQL, Apache, STMP</i></note>
                </p>
            </div>
         
        </div>
        <div class="item">
        
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="http://getbootstrap.com/examples/carousel/#" role="button">Browse gallery</a></p>
            </div>
        
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div> /.carousel -->
                        
                        
<!--			<p>
				<b class="text-primary">Captive Portal</b> <b>Yondu</b>
				<br/>
				On going project...
				<br/>
				<note><i>PHP 5, HTML 5, CSS3, Javascript (Ajax and jQuery), MySQL, Apache</i></note>
				<br/>
				<br/>

				<b class="text-primary">Time and Attendance System</b> <b>BPO International, Inc.</b>
				<br/>
				Combination of Leave Management Module, Overtime Management Module, Schedule Management Module, Timekeeping Module. 
				<br/>
				System provide PDF, Excel reports and email notification in every transaction. 
				<br/>
				Client can access the system using internet.
				<br/>
				<note><i>PHP 5 (PHP Native with Object Oriented Programming), HTML 5, CSS3 (Twitter Bootstrap), Javascript (Ajax and jQuery), MySQL, Apache, STMP</i></note>
				<br/>
				<br/>

				<b class="text-primary">Employee Connection (E-CON)</b> <b>BPO International, Inc.</b>
				<br/>
				System developed to show updated news, photos, birthday celebrant, employee feedback module, office directory and also connected to Time and Attendance System.
				<br/>
				<note><i>PHP 5 (PHP Native with Object Oriented Programming), HTML 5, CSS3 (Twitter Bootstrap), Javascript (Ajax and jQuery), MySQL, Apache, STMP</i></note>
				<br/>
				<br/>
				
				<b class="text-primary">Online Report System</b> <b>BPO International, Inc.</b>
				<br/>
				System provide final report (Leaves, Balance, Man-Hours Work, Absenteeism, Pay Slip PDF and Credit Profile PDF) from Time and Attendance System. 
				<br/>
				Some of the client use ASP.NET for their company system, using SOAP can access the system.
				<br/>
				<note><i>PHP 5 (PHP Native with Object Oriented Programming), HTML 5, CSS3, Javascript (Ajax and jQuery), MySQL, Apache</i></note>
				<br/>
				<br/>

				<b class="text-primary">Account Payable and Expenses Report Monitoring System</b> <b>BPO International, Inc.</b>
				<br/>
				System developed to track and monitor the status of client invoice. 
				<br/>
				This system use by Receiver, Processor and Reviewer to process the invoice. 
				<br/>
				<note><i>PHP 5 (PHP Native with Object Oriented Programming), HTML 5, CSS3, Javascript (Ajax and jQuery), MySQL, Apache</i></note>
				<br/>
				<br/>
				
				<b class="text-primary">Consumer Training Program</b> <b>SEPCO</b>
				<br/>
				Online training registration for the consumer.
				<br/>
				<note><i>PHP 5 (ADOdb Library), HTML 5, CSS3, Javascript (Ajax and jQuery), MSSQL, IIS7 and Microsoft Visual Studio 2008 R2.</i></note>

			</p>-->
		</div>
		</section>


		<section class="module parallax parallax-3">
        <div class="container" id="certificate">

			<h2><span class="label label-default">Certificate</span></h2>
			<p class="font-white font-shadow">
				<b class="text-primary">Microsoft Certified Professional</b>
				<br/>
				Programming in HTML5 with JavaScript and CSS3 Specialist <i>February 2013</i>
			</p>

			<p class="font-white font-shadow">
				<b class="text-primary">Phoenix One - The Knowledge Institute</b>
				<br/>
				Effective Business Communication <i>September 2013</i>
			</p>
		
		</div>
		</section>

		<section class="module content">
        <div class="container" id="contact">
			<h2><span class="label label-default">Contact</span></h2>

			<p>
				<b class="text-primary">Skype</b>
				<br/>
				bien.jerico.cueto
			</p>

			<p>
				<b class="text-primary">Email Address</b>
				<br/>
				bien.jerico@gmail.com
			</p>
			
			<p>
				<b class="text-primary">Address</b>
				<br/>
				Philippines
			</p>
		</div>





		</section>
	</div>

	

	</main>

	<a href="#0" class="cd-top">Top</a>
</div>
        
        
        
<script src="assets/js/fastclick.js"></script>
<script src="assets/js/scroll.js"></script>
<script src="assets/js/fixed-responsive-nav.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/circle-progress.js"></script>
<script>
    $('#circle').circleProgress({
        value: 0.75,
        size: 80,
        fill: {
            gradient: ["orange"]
        }
    });
</script>
<!---
<script>
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
</script>-->
</body>
</html>