<!-- main body -->
<div class="container">
    <div class="col-md-8">
        <div class="enquiry">
            <form id="contact" action="/enquiry/mail.php" method="post">
                <h2>Enquiry</h2>
                <hr>
                <h4>Contact us today, and get reply with in 24 hours!</h4>
                <fieldset>
                    <input name="userName"placeholder="Your name" type="text" tabindex="1" required autofocus>
                </fieldset>
                <fieldset>
                    <input name="userEmail"placeholder="Your Email Address" type="email" tabindex="2" required>
                </fieldset>
                <fieldset>
                    <input name="phone"placeholder="Your Phone Number" type="tel" tabindex="3" required>
                </fieldset>
                <fieldset>
                    <input name="address"placeholder="Your Address" type="text" tabindex="4" required>
                </fieldset>
                <fieldset>
                    <textarea name="message"placeholder="Type your Message Here...." tabindex="5" required></textarea>
                </fieldset>
                <fieldset>
                    <button name="submitContact" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
                </fieldset>
            </form>
        </div>
    </div>
</div>