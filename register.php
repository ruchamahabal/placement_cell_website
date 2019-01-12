<?php include 'header.php' ?>
<section id="registration-form">
  <center><h2 id="form-section"> Registration Form </h2></center>
      <div class="form-style-5">
        <form>
          <div class="row">
            <div class="col-sm-6">
              <fieldset>
              <legend> Candidate Info</legend>
              <select  name="r_type" required>
                <option value="Student">Student</option>
                <option value="Alumni">Alumni</option>
              </select>

              <input type="text" name="fname" placeholder="Your First Name *">
              <input type="text" name="lname" placeholder="Your Last Name *">
              <input type="email" name="field2" placeholder="Your Email *">
              <input type="number" maxlength="10" name="mobile1" placeholder="Your Mobile Number *">
              <input type="number" maxlength="10" name="mobile2" placeholder="Your Alternate Mobile Number *">

              <!-- <textarea name="field3" placeholder="About yourself"></textarea> -->

              </fieldset>
              <fieldset>
              <legend> Additional Info</legend>
              <textarea name="field3" placeholder="About Your School"></textarea>
              </fieldset>
            </div>
            <div class="col-sm-6">
              <fieldset>
                <label for="job">Interests:</label>
                <select id="job" name="field4">
                <optgroup label="Indoors">
                  <option value="fishkeeping">Fishkeeping</option>
                  <option value="reading">Reading</option>
                  <option value="boxing">Boxing</option>
                  <option value="debate">Debate</option>
                  <option value="gaming">Gaming</option>
                  <option value="snooker">Snooker</option>
                  <option value="other_indoor">Other</option>
                </optgroup>
                <optgroup label="Outdoors">
                  <option value="football">Football</option>
                  <option value="swimming">Swimming</option>
                  <option value="fishing">Fishing</option>
                  <option value="climbing">Climbing</option>
                  <option value="cycling">Cycling</option>
                  <option value="other_outdoor">Other</option>
                </optgroup>
                </select>
              <legend> Candidate Info</legend>
              <input type="text" name="field1" placeholder="Your Name *">
              <input type="email" name="field2" placeholder="Your Email *">
              <textarea name="field3" placeholder="About yourself"></textarea>
              <label for="job">Interests:</label>
              <select id="job" name="field4">
              <optgroup label="Indoors">
                <option value="fishkeeping">Fishkeeping</option>
                <option value="reading">Reading</option>
                <option value="boxing">Boxing</option>
                <option value="debate">Debate</option>
                <option value="gaming">Gaming</option>
                <option value="snooker">Snooker</option>
                <option value="other_indoor">Other</option>
              </optgroup>
              <optgroup label="Outdoors">
                <option value="football">Football</option>
                <option value="swimming">Swimming</option>
                <option value="fishing">Fishing</option>
                <option value="climbing">Climbing</option>
                <option value="cycling">Cycling</option>
                <option value="other_outdoor">Other</option>
              </optgroup>
              </select>
              </fieldset>
              <fieldset>
              <legend> Additional Info</legend>
              <textarea name="field3" placeholder="About Your School"></textarea>
              </fieldset>
            </div>
          </div>

          <input type="submit" value="Apply" />
      </form>
    </div>
</section>



<?php include 'footer.php' ?>
