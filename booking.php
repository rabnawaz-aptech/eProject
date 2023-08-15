<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Medic Care Bootstrap 5 CSS Template</title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/owl.carousel.min.css" rel="stylesheet">

        <link href="css/owl.theme.default.min.css" rel="stylesheet">

        <link href="css/templatemo-medic-care.css" rel="stylesheet">
         
         
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>



<!--

TemplateMo 566 Medic Care

https://templatemo.com/tm-566-medic-care

-->
    </head>
    
    <body id="top">
    
        <main>

            <nav class="navbar navbar-expand-lg bg-light fixed-top shadow-lg">
                <div class="container">
                    <a class="navbar-brand mx-auto d-lg-none" href="index.html">
                        Medic Care
                        <strong class="d-block">Health Specialist</strong>
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                <div class="container">
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.html">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="about.html">About</a>
                            </li>

                             <li class="nav-item">
                                <a class="nav-link" href="#timeline">Timeline</a>
                            </li> 

                            <a class="navbar-brand d-none d-lg-block" href="index.html">
                                Medic Care
                                 <strong class="d-block">Health Specialist</strong>
                            </a>

                            <li class="nav-item">
                                <a class="nav-link" href="booking.html">Bookings</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="hospital.html">Hospital</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">Contact</a>
                            </li>
                            <li class="nav-item sm_screen">
                                <a class="nav-link " href="#login">Login</a>
                            </li>
                            <li class="nav-item sm_screen">
                                <a class="nav-link " href="sign.html">Signin</a>
                            </li>

                        </ul>
                    </div>
                </div>
                 <button  type="button" data-bs-toggle="modal" data-bs-target="#login" class="btn btn-default login_btn lg_screen"><a href="#" id="mybtn">login</a></button>&nbsp;&nbsp;
                  <button  type="button" class="btn btn-default sign_btn lg_screen"><a href="sign.html">Signup</a></button>
                 </div>
             </nav>
            <div class="modal" id="login">
               <div class="modal-dialog">
                  <div class="modal-content">
                    <!-- MODAL HEADER -->
                     <div class="modal-header">
                         <h2 class="log-h1">Log In</h2>
                   <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                   
                </div>
                    <!-- MODAL BODY -->
                <div class="modal-body">
                    <label class="list-name">Email:</label>
                    <input type="email" class="form-control" placeholder="Enter your Email Address" required>
                    <label class="list-name">Password:</label>
                    <input type="password" required class="form-control" placeholder="Password" required>
                    <br>
                     <div class="checkbox">
                      <label><input type="checkbox" value="" checked>Remember me</label>
                   </div>
                    <center><button type="submit" class="btn btn-light btn_log"><span class="glyphicon glyphicon-off"></span>Login</button></center>
              </div>
             <div class="modal-footer pass">
                 <div>
                  <p><a href="#">Forgot Password?</a></p>
                  <p> <a href="#signup">Sign up</a></p>
                </div> 
                   </div>
                     </div>
                      </div>
                       </div>


                <section class="section-padding" id="booking">
                <div class="container">
                    <div class="row">
                    
                        <div class="col-lg-8 col-12 mx-auto">
                            <div class="booking-form">
                                
                                <h2 class="text-center mb-lg-3 mb-2">Book an appointment</h2>
                                  <hr>
                                <form role="form" action="#booking" method="post">
                                	<h5>Patient Information</h5>
                                    <div class="row">
                                        <div class="col-lg-6 col-12 mb-3 mt-3">
                                        	<label class="form-label">Name:</label>
                                            <input type="text" name="name" id="name" class="form-control" placeholder="Full name" required>
                                        </div>

                                        <div class="col-lg-6 col-12 mb-3 mt-3">
                                        	<label class="form-label">E-mail:</label>
                                            <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required>
                                        </div>

                                        <div class="col-lg-6 col-12 mb-3 mt-3">
                                        	<label class="form-label">Phone:</label>
                                            <input type="telephone" name="phone" id="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" class="form-control" placeholder="Phone: 123-456-7890">
                                        </div>

                                        <div class="col-lg-6 col-12 mb-3 mt-3">
                                        	<label class="form-label">Date of Birth:</label>
                                            <input type="date" name="date" id="date"  class="form-control" placeholder="Date Of Birth:">
                                        </div>

                                        <div class="col-lg-6 col-12 mb-3 mt-3">
                                        	<label class="form-label">Date of Appointment:</label>
                                            <input type="date" name="date" id="date"  class="form-control">
                                        </div>

                                        <div class="col-lg-6 col-12 mb-3 mt-3">
                                        	<label class="form-label">Time of Appointment:</label>
                                            <input type="datetime" name="time" id="time"  class="form-control">
                                        </div>

                                        <div class="col-lg-6 col-12 mb-3 mt-3">
                                        	<label class="form-label">Gender:</label>
                                            <select class="form-select">
                                             <option>Male</option>
                                             <option>Female</option>                                          
                                            </select>
                                        </div>

                                           <div class="col-lg-6 col-12 mb-3 mt-3">
                                        	<label class="form-label">City Of Residence:</label>
                                            <select class="form-select">
                                             <option>Karachi</option>
                                             <option>Lahore</option>
                                             <option>Islamabad</option>
                                             <option>Peshawar</option>                                          
                                            </select>
                                        </div>

                                          


                                          <section class="section-padding pb-0" id="timeline">
                                          	<h5>Appointment Information</h5>
                                          	<hr>
                                          	<div class="row">
                                          	 <div class="col-lg-6 col-12 mb-3 mt-3">
                                        	<label class="form-label">Covid Vaccination:</label>
                                            <select class="form-select">
                                             <option>Sinopharm</option>
                                             <option>Sinovac</option>
                                             <option>Pfizer</option>
                                             <option>Moderna</option>                                          
                                            </select>
                                        </div>

                                        <div class="col-lg-6 col-12 mb-3 mt-3">
                                        	<label class="form-label">Vaccination Hospital:</label>
                                            <select class="form-select">
                                             <option>Usman Memorial Hospital</option>
                                             <option>NAVAL Hospital</option>
                                             <option>Aga Khan Medical Centre</option>
                                             <option>South City Hospital</option>                                          
                                            </select>
                                        </div>

                                        <div class="col-lg-6 col-12 mb-3 mt-3">
                                        	<label class="form-label">Covid Test:</label>
                                            <select class="form-select">
                                             <option>Antigen</option>
                                             <option>Antibody Test (Serology Test or BloodTest)</option>
                                             <option>PCR</option>                                          
                                            </select>
                                        </div>
                                        <div class="col-lg-6 col-12 mb-3 mt-3">
                                        	<label class="form-label">Reason for Appointment:</label>
                                            <input class="form-control" id="message" name="message">
                                        </div>
                                             </div>
                                        <div class="col-lg-3 col-md-4 col-6 mx-auto">
                                            <button type="submit" class="form-control" id="submit-button">Book Now</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>

                    </div>
                </div>
            </section>
            
          </main>
          
            </body>
              </html>
