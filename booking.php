<?php
include 'header.php';

?>


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
