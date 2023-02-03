<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <title>CONTACT US</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
		<script src="../scripts/main.js"  navId="nav-contact"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="../styles/contactstyle.css">
        <link rel="stylesheet" href="../styles/navbarstyle.css">
        <link rel="stylesheet" href="../styles/fontstyle.css">
    </head>
    <body>
        <div class="container">
            <div id="navigation" class="row navigation">
                <?php
                include_once 'nav.php';
                ?>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <h3 class="h3font">Contact Us</h3>
                </div>
            </div>
            <div class="row DeveloperContact">
                <div class="col-md-5 col-sm-12">
                  <img src="../assets/Prof.jpg" alt="Developer" class="Developer">
                </div>
                <div class="col-md-6 col-sm-12">
                    <h4 class="namefont">Janiza Alvaro</h4>
                    <p class="statusfont">Website Developer</p>
                    <br>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 list1">
                            <a href="https://www.facebook.com/profile.php?id=100007704917681" target="_blank" class="items">
                                <i class="fa-brands fa-facebook" id="facebook"></i>
                                <span class="text">facebook.com/janizaalvaro</span>
                            </a>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <a href="tel:09256735826" class="items">
                                <i class="fa-solid fa-phone"></i>
                                <span class="text">09256735826</span>
                            </a>
                        </div>
                        <div class="col-md-12 col-sm-12 list2">
                            <a href="mailto:janiza.alvaro@lspu.edu.ph" class="items">
                                <i class="fa-solid fa-envelope"></i>
                                <span class="text">janiza.alvaro@lspu.edu.ph</span>
                            </a>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <a href="https://goo.gl/maps/Y3FX3bwCxNfHvHjb9" target="_blank" class="items">
                                <i class="fa-solid fa-map-location-dot" id="location"></i>
                                <span class="text">Natividad Ext.Pangil Laguna</span>
                            </a>
                        </div>
                    </div>  

                </div>
            </div>
            <hr style="border-top: 8px solid #528016">
           
        </div>
    </div>
    <div data-aos="fade-up" style="margin-top:50px">
            <iframe style="border:0; width: 100%; height: 400px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3864.399191376691!2d121.46922489999999!3d14.4041368!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397f047f082508f%3A0xf7a77fedb099d4bd!2sNatividad%20Ext%2C%20Pangil%2C%20Laguna!5e0!3m2!1sen!2sph!4v1675168356100!5m2!1sen!2sph" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>	
                
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
