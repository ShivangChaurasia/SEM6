<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>

</head>
<body>

  <div id="background-animation"></div>

  <div class="contact-container">
    <h2>Get in Touch</h2>
    <form id="contactForm" method="POST" action="{{ url('/user') }}">
      @csrf
      <div class="input-group">
        <input type="text" id="name" name="name" required autocomplete="off">
        <label for="name">Your Name</label>
      </div>

      <div class="input-group">
        <input type="email" id="email" name="email" required autocomplete="off">
        <label for="email">Email Address</label>
      </div>

      <div class="input-group">
        <textarea id="message" name="message" rows="4" required></textarea>
        <label for="message">Your Message</label>
      </div>

      <button type="submit" id="submitBtn">
        <span class="btn-text">Send Message</span>
      </button>
    </form>

  </div>

</body>
</html>


