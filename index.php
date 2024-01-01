<!DOCTYPE html>
<html>
    <head> 
    <meta charset="UTF" -8/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="description" content="photography booking sessions"/>
    <meta name="keywords" content="The turkson photography"/>
    <meta name="viewpoint" content="width=device;initial-scale=1/">
    <title>The Turkson photography</title>
    <!-- webicon -->
    <link rel="icon" type="image/x-icon" href="img/logo.jpg">
    <!-- stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    <!-- cloudflare icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    </head>
    <body>
        <!-- Navbar -->
        <header>
            <!-- Nav Container -->
            <div class="nav container">
                <!-- Menu icon -->
                <i class="fas fa-bars" id="menu-icon"></i>
                <!-- logo -->
                <a href="#" class="logo">TheTurkson<span>Photography</span></a>
                <!-- Nav List -->
                <ul class="navbar">
                    <li><a href="#home" class="active">Home</a></li>
                    <li><a href="pages/gallery.html">Gallery</a></li>
                    <li><a href="pages/connect.html">Connect</a></li>
                </ul>
            </div>
        </header>
        <!-- Home -->
        <secction class="home" id="home">
            <div class="home-text">
                <h1>Capturing <span>Moments</span><br> Creating <span>Memories</span></h1>
                <p>Our passion lies in delivering quality pictures that you will cherish <br>
                for a lifetime. With a team known for its warmth and friendliness<br>
            We ensure a comfortable and enjoyable experience for you</p>
                <!-- Home button  -->
                <a href="#booking" class="btn">Book Now!</a>
            </div>
        </secction> 
           <!-- Blog  -->
        <section class="blog">
            <!-- Blog Container -->
            <div class="blog-container container">
                <!-- Box 1 -->
                <div class="box">
                    <div class="gall-image"></div>
                </div>
                <!-- Box 2 -->
                <div class="box">
                    <div class="slide-image"></div>
                </div>
                <!-- Box 3 -->
            <div class="box">
                <div class="play-image"></div>
            </div>
        </div>
        </section>
        <!-- Booking Section  -->
        <section class="booking container" id="booking">
            <div class="booking-container">
                <p class="title">Reserve a booking</p>
                <div class="seperator"></div>
                <p class="instructions">Please fill in the form to<br>book your photography sessions</p>
            <form action="process_form.php" method="post" autocomplete="off" class="booking-form">
                 <div class="form-control">
                    <input type="text" name="fullName" id="fname" placeholder="Full Name" minlength="15" required>
                    <i class="fas fa-user"></i>
                 </div>
                 <div class="form-control">
                    <input type="email" name="email" id="email" placeholder="Email" required>
                    <i class="fas fa-envelope"></i>
                 </div> 
                 <div class="form-control">
                    <input type="tel" name="phone" id="phone" placeholder="Phone Number" minlength="10" maxlength="15" required>
                    <i class="fas fa-phone"></i>
                 </div>
                 <div class="form-control">
                    <select name="department" id="department" required>
                        <option value="" selected hidden>Department</option>
                        <option value="mathematics">Mathematics</option>
                        <option value="statistics">Statistics</option>
                        <option value="computer">Computer Science</option>
                        <option value="education">Education</option>
                    </select>
                    <i class="fas fa-building"></i>
                 </div>

                 <div class="form-control">
                    <select name="package" id="package" required>
                        <option value="" selected hidden>Package</option>
                        <option value="100cedis">&cent;100</option>
                        <option value="200cedis">&cent;200</option>
                    </select>
                    <i class="fas fa-box-open"></i>
                 </div>
                 <div class="form-control">
                    <select name="dae" id="day" required>
                        <option value="" selected hidden>Choose Day</option>
                        <option value="monday">Monday</option>
                        <option value="tuesday">Tuesday</option>
                        <option value="wednesday">wednesday</option>
                        <option value="thursday">Thursday</option>
                        <option value="friday">Friday</option>
                        <option value="saturday">Saturday</option>
                    </select>
                    <i class="fas fa-calendar-days"></i>
                 </div>
                  <div class="form-control">
                    <input type="date" name="dates" id="date" required>
                    <i class="fas fa-calendar-check"></i>
                 </div>
                <input type="submit" value="submit" name="submit" id="submit" class="submit-btn">
          </form>
            </div>
        </section>

        <!-- Footer -->
        <section class="footer">
            <div class="footer-container container">
                <div class="footer-box">
                    <p class="logo">TheTurkson<span>Photography</span></p>
                </div>
                <div class="footer-box">
                    <h3>Page</h3> 
                    <a href="#">Home</a>
                    <a href="pages/gallery.html">Gallery</a>
                    <a href="pages/connect.html">Connect</a>
                </div>
                <div class="footer-box">
                    <h3>Legal</h3>
                    <a href="pages/privacy.html">Privacy</a>
                    <a href="pages/refund.html">Refund Policy</a>
                    <a href="pages/terms.html">Terms & Conditions</a>
                </div>
                <div class="footer-box">
                    <h3>Location</h3>
                    <span>University Of Ghana</span>
                    <span>UPSA</span>
                    <span>Wisconsin</span>
                    <span>North Legon</span>
                </div>
            </div>
        </section>
        <!-- copyright -->
        <div class="copyright">
            <p>&copy;theturksonphotography All Right Reserved 2023</p>
        </div>
        

        <script src="js/script.js"></script>
    </body>
</html>
