<?php 
    $pageTitle = "Contact Us";
    include "includes/header.php";
    include "includes/nav.php";
 ?>

    <section>
    <div class="row">
    <div class="small-10 medium-10 large-12 columns">
    <h2>Contact</h2>
    <p>Call:<a href="tel:5197975862" class="phone"> 519-797-5862</a><br>
    Toll: Free:<a href="tel:18667975862" class="phone"> 1-866-797-5862</a> </p>

    <h2>Mailing Address</h2>
    <p>Marine Heritage Society<br>
    86 Saugeen St.<br>
    Southampton, Ontario<br>
    Canada N0H 2L0 
    </p>

    <ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-2">
        <li><h2>Location</h2>
            <p>86 Saugeen St.<br>
            Southampton, Ontario<br>
            Canada N0H 2L0
            </p>
        </li>
        <li><h2>Directions</h2>
            <p>From Highway 21 in Southampton, turn west on Clarendon and follow the signs, or From High Street, (the main street), turn north on Huron or Grosvenor Street and look for the signs. </p>
        </li>
    </ul>

   <div class="flex-video"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2845.7414170600605!2d-81.37534064927274!3d44.49996500517868!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8829cfb09f0d9f8f%3A0x1763c7a384426522!2s86+Saugeen+St%2C+Southampton%2C+ON+N0H+2L0!5e0!3m2!1sen!2sca!4v1485989960199" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></div>


	
    </div>
    </div>
    </section>

    <section id="contactForm">
    <div class="row">
    <div class="small-10 medium-offset-1 medium-10 large-offset-1 large-10 columns">
            <form data-abide>
               <h2>Contact Form</h2> 
              <div class="name-field">
                <label>Name <small>required</small>
                  <input type="text" required pattern="[a-zA-Z]+">
                </label>
                <small class="error">Name is required.</small>
              </div>
              <div class="email-field">
                <label>Email <small>required</small>
                  <input type="email" required>
                </label>
                <small class="error">An email address is required.</small>
              </div>
              <div class="subject-field">
                <label>Subject <small>required</small>
                <input type="text" name="subject" required>
                </label>
                <small class="error">Please enter in the subject.</small>
              </div>
              <div class="message-field">
                <label>Message <small>required</small>
                <textarea placeholder="Enter Comments here." required></textarea>
                </label>
                <small class="error">Please enter your comments.</small>
              </div>
              <button type="submit">Submit</button>
            </form>
    </div>
    </div>
    </section>

    <?php 
    include "includes/footer.php";
     ?>
