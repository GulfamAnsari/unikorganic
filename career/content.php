<!-- main body -->
<div class="container">
    <h2>Current openings</h2>
    <hr>
    <div class="col-md-6">
        <ul>
            <li>
                <p>Front desk officer (Delhi)</p>
            </li>
            <li>
                <p>Sales head (Delhi) </p>
            </li>
            <li>
                <p>Sales coordinator (Goa, Patna, Kolkata) </p>
            </li>
            <li>
                <p>Office coordinator (Delhi Lucknow)</p>
            </li>
        </ul>
    </div>
    <div class="col-md-6">
        <p>Drop your Resume</p>
        <form id="contact" action="/career/career.php" method="post">
            <fieldset>
                <input name="userName" placeholder="Your name" type="text" tabindex="1" required autofocus>
            </fieldset>
            <fieldset>
                <input name="userEmail" placeholder="Your Email Address" type="email" tabindex="2" required>
            </fieldset>
            <fieldset>
                <input name="phone" placeholder="Your Contact Number" type="tel" tabindex="3" required>
            </fieldset>
            <fieldset>
                <select name="applyFor">
                    <option value="Front desk officer (Delhi)">Front desk officer (Delhi)</option>
                    <option value="Sales head (Delhi)">Sales head (Delhi)</option>
                    <option value="Sales coordinator (Goa, Patna, Kolkata)">Sales coordinator (Goa, Patna, Kolkata)</option>
                    <option value="Office coordinator (Delhi Lucknow)">Office coordinator (Delhi Lucknow)</option>
                </select>
            </fieldset>
            <!-- <fieldset>
                <input name="cv" type="file" tabindex="4" required>
                <label for="cv">Upload your resume</label>
            </fieldset> -->
            <fieldset>
                <button name="submitCv" type="submit"  data-submit="...Sending">Apply</button>
            </fieldset>
        </form>
    </div>
</div>