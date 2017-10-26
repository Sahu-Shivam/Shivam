<html>

<head>
    <title>Uttarakhand Technical University</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
        #d1 {
            position: relative;
        }
        .header{
		width:100%;
		}
        #myCarousel {
            padding: 0px;
            background-attachment: fixed;
            width: 100%;
            height: 500px;
        }
        
        .bg-4 {
            background-color: #2f2f2f;
            /* Black Gray */
            color: #fff;
        }
        #pan1:hover{z-index:100px}
		#pan2:hover{z-index:100px}
		#pan3:hover{z-index:100px}
        #div1 {
            background-image: url('20140127_CL_GradCollege_Winter_DJA_4H2A00512.jpg');
            margin-top: 10px;
            margin-bottom: 10px;
            background-size: 100% 100%;
        }
        
        .pan {
            -webkit-transition: all .3s ease-out;
            -moz-transition: all .3s ease-out;
            -o-transition: all .3s ease-out;
            transition: all .3s ease-out;
        }
        
        .pan:hover {
            -moz-transform: scale(1.2);
            -webkit-transform: scale(1.2);
            -o-transform: scale(1.2);
            -ms-transform: scale(1.2);
            transform: scale(1.2);
        }
        .btn:hover{
            -moz-transform: scale(1.1);
            -webkit-transform: scale(1.1);
            -o-transform: scale(1.1);
            -ms-transform: scale(1.1);
            transform: scale(1.1);
			box-shadow: 5px 0px 40px rgba(0,0,0, .2);
        }
		.navbar-nav li a:hover, .navbar-nav li.active a {
			background-color: #1A1919 !important;
		}
	    .navbar-inverse .navbar-toggle {
			border-color: transparent;
			color: #FFFFFF !important;
			color: #fff !important;
		}
		.slideanim {visibility:hidden;}
		.slide{
			animation: 10s slide-up;
			-webkit-animation-name: slide;
			animation-duration: 1s;
			-webkit-animation-duration: 1s;
			visibility: visible;
		}
		@keyframes slide {
			0% {
			  opacity: 0;
			  transform: translateY(70%);
			} 
			100% {
			  opacity: 1;
			  transform: translateY(0%);
			}
		}
		@-webkit-keyframes slide {
			0% {
			  opacity: 0;
			  -webkit-transform: translateY(70%);
			} 
			100% {
			  opacity: 1;
			  -webkit-transform: translateY(0%);
			}
		}
		.panel {
		  border: 1px solid #f4511e; 
		  border-radius:0 !important;
		}
		.panel:hover {
		  box-shadow: 5px 0px 40px rgba(0,0,0, .2);
		}
		.panel-footer .btn:hover {
		  border: 1px solid #f4511e;
		  background-color: #fff !important;
		  color: #f4511e;
		}
		.panel-heading {
		  color: #fff !important;
		  background-color: #f4511e !important;
		  padding: 25px;
		  border-bottom: 1px solid transparent;
		  border-top-left-radius: 0px;
		  border-top-right-radius: 0px;
		  border-bottom-left-radius: 0px;
		  border-bottom-right-radius: 0px;
			}
		.panel-footer {
		  background-color: white !important;
		}
		.panel-footer h3 {
		  font-size: 20px;
		}
		.panel-footer h4 {
			color: #aaa;
			font-size: 14px;
		}
		.panel-footer .btn {
		  margin: 15px 0;
		  background-color: #f4511e;
		  color:white !important;
		}
    </style>
</head>

<body id="b1" style="margin:0px;padding:0px;background-size:100% 100%;background-image:url('UTU_CAMPUS1.jpg');background-attachment:fixed; background-repeat:no-repeat;">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
            <li data-target="#myCarousel" data-slide-to="5"></li>
            <li data-target="#myCarousel" data-slide-to="6"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="IMG-20150328-WA0004.jpg" alt="UTU" style="width:100%;height:600px">
            </div>

            <div class="item">
                <img src="2.2.jpg" alt="UTU" style="width:100%;height:600px">
            </div>

            <div class="item">
                <img src="3.2.jpg" alt="UTU" style="width:100%;height:600px">
            </div>

            <div class="item">
                <img src="5.1.jpg" alt="UTU" style="width:100%;height:600px">
            </div>

            <div class="item">
                <img src="5.2.jpg" alt="UTU" style="width:100%;height:600px">
            </div>

            <div class="item">
                <img src="DSCN1717.jpg" alt="UTU" style="width:100%;height:600px">
            </div>

            <div class="item">
                <img src="DSCN3719.jpg" alt="UTU" style="width:100%;height:600px">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only" style="margin-top:100px">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!--navigation bar-->
    <div id="d1" data-spy="scroll" data-target=".navbar" data-offset="50">
        <nav class="navbar navbar-inverse navbar-fixed-top" style="box-shadow: 3px 4px 5px rgba(0, 0, 0, .5);z-index: 9999;">
            <div class="header">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>                        
					</button>
                    <a href="website.php"><img src="Uttarakhand_Open_University_Logo.png" width="70px" height="70px" style="padding-top:5px;padding-bottom:4px;float:left;padding-right:2px;" /></a>
                    <a class="navbar-brand" href="website.php" style="padding-top:23px;padding-left:23px;color: #fff !important;">Uttarakhand Technical University</a>
                </div>
                <div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li><a href="website.php" style="padding-top:23px;padding-bottom:27.5px;padding-left:25px;padding-right:25px;">Home</a></li>
                            <li><a href="#About" style="padding-top:23px;padding-bottom:27.5px;padding-left:25px;padding-right:25px;">About</a></li>
                            <li><a href="dean.php" style="padding-top:23px;padding-bottom:27.5px;padding-left:25px;padding-right:25px;">Dean</a></li>
                            <li><a href="hod.php" style="padding-top:23px;padding-bottom:27.5px;padding-left:25px;padding-right:25px;">Head Of Department</a></li>
                            <li><a href="Faculty.php" style="padding-top:23px;padding-bottom:27.5px;padding-left:25px;padding-right:25px;">Faculty</a></li>
                            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" style="padding-top:23px;padding-bottom:27.5px;padding-left:25px;padding-right:25px;">More<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#section41">Section 4-1</a></li>
                                    <li><a href="#section42">Section 4-2</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div class="header" style="margin-top:110px;">
        <div class="row">
            <div class="col-sm-2 col-xs-2 col-md-2 col-lg-2" style="background-color:#828581;margin-left:50px;margin-right:10px;opacity:0.9;padding-bottom:65px;float:left;">
                <h3 style="padding-bottom:20px; color:#E0E1DE;"><b>Quick Links</b></h3>
                <ul style="list-style-type:circle; text-align:left;font-size:15px">
                    <li style="padding-bottom:8px"><a href="http://uktech.ac.in/?page_id=489" style="color:Black"><b>Newsletters</b></a></li>
                    <li style="padding-bottom:8px"><a href="http://uktech.ac.in/?page_id=127" style="color:Black"><b>Affiliated Colleges</b></a></li>
                    <li style="padding-bottom:8px"><a href="http://uktech.ac.in/?page_id=519" style="color:Black"><b>Photo Gallery</b></a></li>
                    <li style="padding-bottom:8px"><a href="https://play.google.com/store/apps/details?id=utu.android.app.com.utc&hl=en" style="color:Black"><b>Download Android App</b></a></li>
                    <li style="padding-bottom:8px"><a href="http://uktech.ac.in/" style="color:Black"><b>UTU official Website</b></a></li>
                    <li style="padding-bottom:8px"><a href="http://uktech.ac.in/contact/" style="color:Black"><b>Contact</b></a></li>
                </ul>
            </div>
            <div id="About" class="header">
                <div class="col-sm-9 col-xs-9 col-md-9 col-lg-9" style="background-color:#C5D1C1;margin-left:10px;opacity:0.8">
                    <h2 style="padding-left:25px;padding-bottom:15px;"><b>About</b></h2>
                    <p style="padding-left:25px;padding-right:0px;text-align:justify;padding-bottom:25px; font-size:15px"><b>Uttarakhand Technical University, Dehradun is a public university in the Indian state of Uttarakhand set up by the Government of Uttarakhand on 27 January 2005, through the Uttarakhand Technical University Act 2005. It has 8 constituent institutes and approximately 132 affiliated colleges which are spread all over the state. The Uttarakhand Technical University campus is situated at NH-72 Suddhowala, Dehradun. Dehradun is the State capital of Uttarakhand well connected through Rail, Road and Air transport.
			The University has been established in an area of 8.372 hectare and it is the only affiliating University of the state for technical institutions. There are 8 institutes and 132 affiliated colleges with 33,000 students in various courses .The University imparts education in Graduate, Post Graduate and Doctorate programmes in various fields like Management, Engineering, Hotel Management, Computer Application, Pharmacy, etc.
			The University is serving the technical education through its progress monitored each semester, part time Ph.D programme especially designed for the teachers and scientists by giving them opportunity to explore the untouched area of the research. The University in its own campus running M.Tech and M.Pharma Programme in various disciplines. Apart from this University is having 8 Constituent Colleges. And is spreading the Technical Education in the remote underprivileged areas of Uttarakhand hills.</b></p>
                </div>
            </div>

        </div>
        <!--<div id="div1">
            <div class="header">
                <div class="row text-center">
                    <div class="col-sm-11" style="background: rgba(47, 47, 47, .7);margin-top:50px;margin-bottom:50px;margin-left:50px;">
                        <div class="header" style="padding-top:10px;z-index:2;position:relative">
                            <div class="row text-center">
                                <div class="row">
                                    <div class="col-sm-4" id="th1" style="padding-left:50px;padding-top:50px;padding-bottom:50px;">
                                        <div class="thumbnail" style="width:350px;height:450px;position:relative; background-color:#FFFFFF">
                                            <img src="books_vintage_paper_cards_notebook_retro_74362_1920x10801.jpg" alt="Dean" width="340px" height="300px" />
                                            <p style="padding-top:12px;color:Black;font-size:20px"><strong>Dean</strong></p>
                                            <button class="btn" data-toggle="modal" data-target="#myModal" style="background-color:grey;width:150px;height:40px;color:#C2C0C0;"><a href="dean.html" style="color:#C2C0C0;"><b>Enter</b></a></button>
                                        </div>
                                    </div>
                                    <div class="col-sm-4" id="th2" style="padding-left:30px;padding-top:50px;padding-bottom:50px;">
                                        <div class="thumbnail" style="position:relative;width:350px;height:450px;background-color:#BDB8B8">
                                            <img src="books_table_lamp_113765_1920x10801-001.jpg" alt="Head Of Department" width="340px" height="300px" />
                                            <p style="padding-top:12px;color:#F0ECEC;font-size:20px"><strong>Head Of Department</strong></p>
                                            <button class="btn" data-toggle="modal" data-target="#myModal" style="color:#C2C0C0;background-color:#7A7575;width:150px;height:40px;"><a href="hod.html" style="color:#C2C0C0;"><b>Enter</b></a></button>
                                        </div>
                                    </div>
                                
                                    <div class="col-sm-4" id="th3" style="padding-left:10px;padding-bottom:50px;padding-top:50px;">
                                        <div class="thumbnail" style="float:left;width:350px;height:450px;position:relative;background-color:#BDB8B8">
                                            <img src="vintage_magnifier_watch_book_books_postcards_74944_1920x10801.jpg" alt="Faculty" width="340px" height="300px"/>
                                            <p style="padding-top:12px;color:#F0ECEC;font-size:20px;"><strong>Faculty</strong></p>
                                            <button class="btn" data-toggle="modal" data-target="#myModal" style="color:#C2C0C0;background-color:#7A7575;width:150px;height:40px;"><a href="Faculty.html" style="color:#C2C0C0;"><b>Enter</b></a></button>
                                        </div>
                                    </div>
									</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
		<!--DHF-->
		<div id="DHF" class="container-fluid" style="margin-top:30px;padding-bottom:25px;background: rgba(47, 47, 47, .7);">
		<h2 style="text-align:center;color:white; font:forte">Not Logged In ?</h2>
		<h3 style="text-align:center;color:white; font:forte">Log in Here </h3>
			<div class="row1 slideanim" style="margin-top:50px">
			
				<div class="col-sm-3 col-xs-12" style="margin-left:100px;margin-right:50px;">
			<div class="pan" id="pan1">			
			<div class="panel panel-default text-center" style="position:relative;">
						<div class="panel-heading" style="background-color:#939393">
							<h1>Dean</h1>
						</div>
						<div class="panel-body">
						  <h3><strong>Log in</strong></h3>
						<form action="/action_page.php">
							<div class="form-group">
							  <label for="email" style="float:left">Email:</label>
							  <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
							</div>
							<div class="form-group">
							  <label for="pwd" style="float:left">Password:</label>
							  <input type="password" class="form-control" id="pwd" placeholder="Enter Password" name="pwd">
							</div>
							<div class="checkbox">
							  <label style="float:left"><input type="checkbox" name="remember" style="float:left"> Remember me</label>
							</div>
							
							<button type="submit" class="btn btn-default" style="border-bottom:2px solid black; background:transparent;margin-top:20px">Submit</button>
						</form>
						</div>
						<div class="panel-footer">
						  <h4><strong>If not Registered</strong></h4>
						  <h3><strong>Register Here</strong></h3>
						  <button class="btn btn-lg"><a href="dean.php">Register</a></button>
						</div>
					</div>      
				</div>  
				</div>
								
				<div class="col-sm-3 col-xs-12" style="margin-right:0px;">
				  <div class="pan" id="pan2">
				  <div class="panel panel-default text-center" style="position:relative;">
					<div class="panel-heading">
					  <h1>HOD</h1>
					</div>
					<div class="panel-body">
						  <h3><strong>Log in</strong></h3>
						<form action="/action_page.php">
							<div class="form-group">
							  <label for="email" style="float:left">Email:</label>
							  <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
							</div>
							<div class="form-group">
							  <label for="pwd" style="float:left">Password:</label>
							  <input type="password" class="form-control" id="pwd" placeholder="Enter Password" name="pwd">
							</div>
							<div class="checkbox">
							  <label style="float:left"><input type="checkbox" name="remember" style="float:left"> Remember me</label>
							</div>
							<button type="submit" class="btn btn-default" style="border-bottom:2px solid black; background:transparent;margin-top:20px">Submit</button>
						</form>
						</div>
					<div class="panel-footer">
						<h4><strong>If not Registered</strong></h4>
						  <h3><strong>Register Here</strong></h3>
						<button class="btn btn-lg"><a href="hod.php">Register</a></button>
					</div>
				  </div>      
				</div> 
				</div>				
				<div class="col-sm-3 col-xs-12" style="margin-left:50px;margin-right:100px;">
					<div class="pan" id="pan3">
					<div class="panel panel-default text-center" style="position:relative;">
						<div class="panel-heading">
							<h1>Faculty</h1>
						</div>
						<div class="panel-body">
						  <h3><strong>Log in</strong></h3>
						<form action="/action_page.php">
							<div class="form-group">
							  <label for="email" style="float:left">Email:</label>
							  <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
							</div>
							<div class="form-group">
							  <label for="pwd" style="float:left">Password:</label>
							  <input type="password" class="form-control" id="pwd" placeholder="Enter Password" name="pwd">
							</div>
							<div class="checkbox">
							  <label style="float:left"><input type="checkbox" name="remember" style="float:left"> Remember me</label>
							</div>
							
							<button type="submit" class="btn btn-default" style="border-bottom:2px solid black; background:transparent;margin-top:20px">Submit</button>
						</form>
						</div>
						<div class="panel-footer">
						  <h4><strong>If not Registered</strong></h4>
						  <h3><strong>Register Here</strong></h3>
						  <button class="btn btn-lg"><a href="Faculty.php">Register</a></button>
						</div>
					</div> 
					</div>					
				</div>				
				</div>    
			</div>
		</div>
		<!--courses-->
			<div id="pricing" class="container-fluid">
			<div class="row slideanim" style="margin-top:30px;">
				<div class="col-sm-5 col-xs-12" style="margin-left:50px;margin-right:100px;">
					<div class="panel panel-default text-center">
						<div class="panel-heading">
							<h1>Under Graduation</h1>
						</div>
						<div class="panel-body">
						  <p><strong>B.Tech</strong></p>
						  <p><strong>BBA</strong></p>
						  <p><strong>BCA</strong></p>
						  <p><strong>B.Com.</strong></p>
						  <p><strong>BA LLB</strong></p>
						  <p><strong>B.Pharma</strong></p>
						  <p><strong>B.Sc.</strong></p>
						  <p><strong>BBA LLB</strong></p>
						  <p><strong>B.Arch</strong></p>
						  <p><strong>LLB</strong></p>
						</div>
						<div class="panel-footer">
						  <h4><strong>Get To Know</strong></h4>
						  <h4><strong>More About The Courses</strong></h4>
						  <button class="btn btn-lg">Enter</button>
						</div>
					</div>      
				</div>     
				<div class="col-sm-5 col-xs-12" style="margin-right:0px;">
				  <div class="panel panel-default text-center">
					<div class="panel-heading">
					  <h1>Post Graduation</h1>
					</div>
					<div class="panel-body" style="padding-bottom:74px">
					  <p style="padding-bottom:10px"><strong>M.Tech</strong></p>
					  <p style="padding-bottom:10px"><strong>MBA(Hospital Administration)</strong></p>
					  <p style="padding-bottom:10px"><strong>MBA-Part Time</strong></p>
					  <p style="padding-bottom:10px"><strong>MCA</strong></p>
					  <p style="padding-bottom:10px"><strong>M.Sc. Environmental Science</strong></p>
					  <p style="padding-bottom:10px"><strong>M.Pharma</strong></p>
					</div>
					<div class="panel-footer">
						<h4><strong>Get To Know</strong></h4>
						<h4><strong>More About The Courses</strong></h4>
						<button class="btn btn-lg">Enter</button>
					</div>
				  </div>      
				</div>           
				</div>    
			</div>
		</div>

        <!--footer-->
        <footer class="header bg-4 text-center" style="opacity:0.8;z-index:1;position:relative">
            <div class="row">
                <div class="col-sm-3">
                    <ul style="list-style-type:none; text-align:left; padding-bottom:25px;padding-top:25px">
                        <li style="padding-bottom:15px">
                            <h4>ACADEMICS</h4>
                        </li>
                        <li style="padding-bottom:2px;"><a href="http://uktech.ac.in/under-graduate/" style="color:white;">Under Graduate</a></li>
                        <li style="padding-bottom:2px"><a href="http://uktech.ac.in/post-graduate/" style="color:white;">Post Graduate</a></li>
                        <li style="padding-bottom:2px"><a href="http://uktech.ac.in/doctoral-2/" style="color:white;">Doctoral</a></li>
                        <li style="padding-bottom:2px"><a href="http://uktech.ac.in/courses/" style="color:white;">Syllabus</a></li>
                        <li style="padding-bottom:2px"><a href="http://uktech.ac.in/academic-calender/" style="color:white;">ODD Semester Calender</a></li>
                        <li style="padding-bottom:2px"><a href="http://uktech.ac.in/affiliated-institutes/" style="color:white;">Affiliated Institutes</a></li>
                        <li style="padding-bottom:2px"><a href="http://uktech.ac.in/constituent-institutes/" style="color:white;">Constituent Institutes</a></li>
                        <li style="padding-bottom:2px"><a href="http://uktech.ac.in/coursewise-collage/" style="color:white;">Coursewise College</a></li>
                        <li style="padding-bottom:2px"><a href="http://uktech.ac.in/government-institutes/" style="color:white;">Government Institutes</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <ul style="list-style-type:none; text-align:left; padding-bottom:25px;padding-top:25px">
                        <li style="padding-bottom:15px">
                            <h4>RESULT</h4>
                        </li>
                        <li style="padding-bottom:2px;"><a href="http://uktech.ac.in/under-graduate-2/" style="color:white;">Under Graduate</a></li>
                        <li style="padding-bottom:2px;"><a href="http://uktech.ac.in/ugpg-results/" style="color:white;">UG/PG Results</a></li>
                        <li style="padding-bottom:2px;"><a href="http://uktech.ac.in/doctoral-2/" style="color:white;">Doctoral</a></li>
                        <li style="padding-bottom:2px;"><a href="http://uktech.ac.in/merit-list/" style="color:white;">Merit List</a></li>
                        <li style="padding-bottom:2px;"><a href="http://uktech.ac.in/uksee/" style="color:white;">UKSEE 2017</a></li>
                    </ul>
                </div>

                <div class="col-sm-3">
                    <ul style="list-style-type:none; text-align:left; padding-bottom:25px;padding-top:25px">
                        <li style="padding-bottom:15px">
                            <h4>ADMISSION</h4>
                        </li>
                        <li style="padding-bottom:2px;"><a href="http://uktech.ac.in/under-graduate-3/" style="color:white;">Under Graduate Admission</a></li>
                        <li style="padding-bottom:2px;"><a href="http://uktech.ac.in/post-graduate-3/" style="color:white;">Post Graduate Admission</a></li>
                        <li style="padding-bottom:2px;"><a href="http://uktech.ac.in/doctoral-3/" style="color:white;">Doctoral Admission</a></li>
                        <li style="padding-bottom:2px;"><a href="http://uktech.ac.in/pg-progarm/" style="color:white;">PG Progarm Courses</a></li>
                        <li style="padding-bottom:2px;"><a href="http://uktech.ac.in/ug-progarm/" style="color:white;">UG Progarm Courses</a></li>
                        <li style="padding-bottom:2px;"><a href="http://uktech.ac.in/doctoral-progarm/" style="color:white;">Doctoral Progarm Courses</a></li>
                        <li style="padding-bottom:2px;"><a href="http://uktech.ac.in/fee-structure-2/" style="color:white;">Fee Structure</a></li>
                    </ul>
                </div>

                <div class="col-sm-3">
                    <ul style="list-style-type:none; text-align:left; padding-bottom:25px;padding-top:25px">
                        <li style="padding-bottom:14px">
                            <h4>UTU ADDRESS</h4>
                        </li>
                        <li style="padding-bottom:2px;"><span class="glyphicon glyphicon-map-marker"></span> &nbsp;Government Girls Polytechnic</li>
                        <li style="padding-bottom:2px;padding-left:22px;"> Post Office, Chandanwadi,<br> Prem Nagar Sudhowala,<br> Dehradun (Uttarakhand)</li>
                        <li style="padding-bottom:2px;padding-top:4px;"><span class="glyphicon glyphicon-earphone"></span> &nbsp;0135-2770059,2770126</li>
                        <li style="padding-bottom:2px;padding-top:4px;"><span class="glyphicon glyphicon-print"></span> &nbsp;0135-2770119,2770124</li>
                        <li style="padding-bottom:2px;padding-top:4px;"><span class="glyphicon glyphicon-envelope"></span> &nbsp;vc@uktech.ac.in</li>
                </div>
        </footer>
        <footer class="header bg-4 text-center" style="opacity:0.8;border-top:2px solid white;background-color:black">
            <h5 style="padding-bottom:10px;padding-top:10px;color:white">Design & Developed By : Shivam Sahu & Ritesh Saxena</h5>
        </footer>
		<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>
</body>

</html>