<?php

  if (isset($_POST['lol'])) {
    echo "hello, girl";
  }
  
  function contact_form_shortcode() {
    ?>
      
      <script>var contactForm = true;</script>
      <form class="contact_form" novalidate action="/wp-content/themes/karl/sendmail.php">

        <p class="contact_form-errors"></p>

        <div class="contact_form-group">
          <label for="contact_form-email">Your email</label>
          <input type="email" name="email" id="contact_form-email">
        </div>

        <div class="contact_form-group">
          <label for="contact_form-subject">Subject</label>
          <input type="text" name="subject" id="contact_form-subject">
        </div>

        <div class="contact_form-group">
          <label for="contact_form-body">Your message</label>
          <textarea id="contact_form-body" name="body"></textarea>
        </div>

        <button type="submit" class="contact_form-submit">Send</button>

      </form>


    <?php
  }

  add_shortcode('contact-form', 'contact_form_shortcode');
