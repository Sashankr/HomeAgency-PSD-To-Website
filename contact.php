<?php
include "header.php";
?>

<?php
include "navigation.php";
?>
<div id="contactInfo">
  <div class="container">
    <h2>About the company
    </h2>
    <p>
    REEN is a lean provider of cutting-edge cloud tools and sensors for a more streamlined waste management process. Reen is owned by Norsk Gjenvinning, ABAX, Jetro, Agens, Comtech and I4U AS.
    </p>
    <p>
    For more information, please contact us at +47 980 71 000 or by e-mail:
    </p>

    <h2>Contact Us</h2>
    <form action="" method="post">
      <p>
      <label for="uname">NAME</label>
      <input type="text" name="uname" id="uname" placeholder="Enter your name">
      </p>
      <p>
      <label for="email">EMAIL</label>
      <input type="email" name="email" id="email" placeholder="Enter your email">
      </p>
      <p>
      <label for="message">MESSAGE</label>
      <textarea name="message" id="message" cols="30" rows="10" placeholder="Enter your message"></textarea>
      </p>

      <button type="submit">SUBMIT</button>
    </form>

    <h2>Location</h2>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d917.8793774649215!2d72.50753866311486!3d23.04148136991021!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e9bc9da71914d%3A0x3bf6e0e04fdb43a3!2sECS%20Environment%20Pvt%20Ltd.!5e0!3m2!1sen!2sin!4v1594622284602!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
  </div>
</div>
<?php
include "footer.php";
?>