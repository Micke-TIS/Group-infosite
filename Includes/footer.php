<!-- ***** Footer Start ***** -->
<footer id="contact-us">
    <div class="container">
        <div class="footer-content">
            <div class="row">
                <!-- ***** Contact Form Start ***** -->
                <!-- My cool form -->
<form id="myForm" method="post" action="process.php">
First name:<br>
<input type="text" name="first_name">
<br>
Last name:<br>
<input type="text" name="last_name">
<br>
City name:<br>
<input type="text" name="city_name">
<br>
Email Id:<br>
<input type="email" name="email">
<br><br>
<input type="submit" name="save" value="submit">
</form>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="contact-form">
                        <form id="contact" action="" method="post">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                        <input name="name" type="text" id="name" placeholder="Full Name" required=""
                                            style="background-color: rgba(250,250,250,0.3);">
                                    </fieldset>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                        <input name="email" type="text" id="email" placeholder="E-Mail Address"
                                            required="" style="background-color: rgba(250,250,250,0.3);">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="message" rows="6" id="message" placeholder="Your Message"
                                            required="" style="background-color: rgba(250,250,250,0.3);"></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="main-button">Send Message
                                            Now</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- ***** Contact Form End ***** -->
                <div class="right-content col-lg-6 col-md-12 col-sm-12">
                    <h2><?php echo $footer_h2; ?></h2>
                    <p><?php echo $footer_paragraph; ?></p>
                    <ul class="social">
                        <li><a href="https://fb.com/templatemo"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
          <div class="sub-footer">
<p><?php echo $footer_copyright; ?></p>
</div>
            </div>
        </div>
    </div>
</footer>
