<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Animated Contact Form with Floating Background</title>
  <style>
    /* --- Base CSS Styling & Animations (as before, with a subtle update) --- */
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      /* Deep slate background, slightly adjusted for better layering */
      background: hsl(220, 40%, 10%);
      color: #fff;
      position: relative; /* Needed for background elements */
      overflow: hidden; /* Prevent scrollbars from background elements */
    }

    .contact-container {
      background: #1e293b;
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.5);
      width: 100%;
      max-width: 400px;
      overflow: hidden;
      position: relative;
      z-index: 1; /* Ensure form is above background elements */
    }

    h2 {
      margin-bottom: 30px;
      text-align: center;
      color: #38bdf8; /* Accent blue */
    }

    /* Floating Label Inputs */
    .input-group {
      position: relative;
      margin-bottom: 30px;
    }

    .input-group input,
    .input-group textarea {
      width: 100%;
      padding: 10px 0;
      font-size: 16px;
      color: #fff;
      border: none;
      border-bottom: 2px solid #475569;
      outline: none;
      background: transparent;
      transition: border-color 0.3s;
      resize: none;
    }

    .input-group label {
      position: absolute;
      top: 10px;
      left: 0;
      font-size: 16px;
      color: #94a3b8;
      pointer-events: none;
      transition: 0.3s ease all;
    }

    /* Input focus and valid states trigger the label animation */
    .input-group input:focus,
    .input-group input:valid,
    .input-group textarea:focus,
    .input-group textarea:valid {
      border-bottom-color: #38bdf8;
    }

    .input-group input:focus ~ label,
    .input-group input:valid ~ label,
    .input-group textarea:focus ~ label,
    .input-group textarea:valid ~ label {
      top: -20px;
      font-size: 12px;
      color: #38bdf8;
    }

    /* Button Styling */
    button {
      width: 100%;
      padding: 12px;
      border: none;
      border-radius: 6px;
      background: #38bdf8;
      color: #0f172a;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
      position: relative;
      transition: background 0.3s, transform 0.1s;
    }

    button:hover {
      background: #0ea5e9;
    }

    button:active {
      transform: scale(0.98);
    }

    /* Button Loading State */
    button.loading {
      background: #475569;
      color: #94a3b8;
      pointer-events: none;
    }

    /* Success Message Overlay */
    .success-message {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: #1e293b;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      font-size: 20px;
      color: #10b981; /* Emerald green */
      transform: translateY(100%);
      transition: transform 0.5s cubic-bezier(0.4, 0, 0.2, 1);
      z-index: 10;
    }

    .success-message.active {
      transform: translateY(0);
    }

    .success-icon {
      font-size: 40px;
      margin-bottom: 10px;
    }

    /* --- NEW CSS for Background Animation --- */
    #background-animation {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: -1; /* Layer behind everything */
      pointer-events: none; /* Let clicks pass through to form */
    }

    .shape {
      position: absolute;
      /* Very subtle colors, low opacity */
      background: hsla(200, 50%, 40%, 0.1);
      border-radius: 50%; /* Default to circles, modified in JS */
      opacity: 0.1; /* Extra subtle, will be varied somewhat in JS */
      transform: translate(-50%, -50%) rotate(0deg);
      animation: float continuous linear infinite;
    }

    /* Dynamic shape styling (circles, polygons, varied colors) can be set with JS on element creation */

    @keyframes float {
      0% {
        transform: translate(-50%, -50%) rotate(0deg) scale(1);
        opacity: 0.1;
      }
      25% {
        opacity: 0.15;
      }
      50% {
        transform: translate(-50%, -50%) rotate(180deg) scale(1.1);
        opacity: 0.1;
      }
      75% {
        opacity: 0.15;
      }
      100% {
        transform: translate(-50%, -50%) rotate(360deg) scale(1);
        opacity: 0.1;
      }
    }

    /* Varied colors for shapes, will be applied randomly in JS */
    .faint-blue { background: hsla(200, 60%, 50%, 0.08); }
    .faint-slate { background: hsla(220, 30%, 30%, 0.08); }
    .faint-green { background: hsla(160, 40%, 40%, 0.08); }

  </style>
</head>
<body>

  <div id="background-animation"></div>

  <div class="contact-container">
    <h2>Get in Touch</h2>
    <form id="contactForm">
      <div class="input-group">
        <input type="text" id="name" required autocomplete="off">
        <label for="name">Your Name</label>
      </div>

      <div class="input-group">
        <input type="email" id="email" required autocomplete="off">
        <label for="email">Email Address</label>
      </div>

      <div class="input-group">
        <textarea id="message" rows="4" required></textarea>
        <label for="message">Your Message</label>
      </div>

      <button type="submit" id="submitBtn">
        <span class="btn-text">Send Message</span>
      </button>
    </form>

    <div class="success-message" id="successMessage">
      <div class="success-icon">✓</div>
      Message Sent!
    </div>
  </div>

  <script>
    // --- JavaScript Logic (Enhanced with Background Generation) ---

    // 1. Generate Floating Background Objects dynamically
    const bgContainer = document.getElementById('background-animation');
    const shapeColors = ['faint-blue', 'faint-slate', 'faint-green'];
    const numShapes = 25;

    for (let i = 0; i < numShapes; i++) {
      const shape = document.createElement('div');
      shape.classList.add('shape');

      // Random faint color variation
      const randomColorClass = shapeColors[Math.floor(Math.random() * shapeColors.length)];
      shape.classList.add(randomColorClass);

      // Random position, size, animation properties, and shape properties
      const size = Math.random() * 80 + 20; // 20px - 100px
      const isCircle = Math.random() < 0.7; // 70% chance of circle
      const opacityShift = Math.random() * 0.1 - 0.05; // range [-0.05, 0.05]
      const currentOpacity = 0.1 + opacityShift;

      shape.style.width = `${size}px`;
      shape.style.height = `${size}px`;
      shape.style.left = `${Math.random() * 100}%`;
      shape.style.top = `${Math.random() * 100}%`;
      shape.style.animationDuration = `${Math.random() * 20 + 10}s`; // 10s - 30s loop
      shape.style.animationDelay = `${Math.random() * 10}s`; // 0s - 10s delay

      // Set shape specific styles via inline style, border-radius as example
      if (isCircle) {
          shape.style.borderRadius = '50%';
      } else {
          // Subtle polygons or rounded rectangles can be done with borders/clipping
          // Simple polygon via clip-path example for variety
          const vertices = Math.floor(Math.random() * 3) + 3; // 3-5 vertices
          let clipPath = 'polygon(';
          for (let j = 0; j < vertices; j++) {
              clipPath += `${Math.random() * 100}% ${Math.random() * 100}%`;
              if (j < vertices - 1) clipPath += ', ';
          }
          clipPath += ')';
          // Using border-radius here for simplicity and cross-browser consistency
          // shape.style.clipPath = clipPath; // Uncomment to use complex polygons
          shape.style.borderRadius = `${Math.random()*50}% ${Math.random()*50}%`;
      }

      // Ensure opacity within desired range
      shape.style.opacity = Math.max(0.05, Math.min(0.2, currentOpacity));


      bgContainer.appendChild(shape);
    }


    // 2. Existing Form Submission Logic (unchanged)
    document.getElementById('contactForm').addEventListener('submit', function(e) {
      // 1. Prevent the default page reload on form submit
      e.preventDefault();

      const form = this;
      const btn = document.getElementById('submitBtn');
      const btnText = btn.querySelector('.btn-text');
      const successMessage = document.getElementById('successMessage');

      // 2. Set the UI to a "loading" state
      btn.classList.add('loading');
      btnText.textContent = 'Sending...';

      // 3. Simulate an async backend request (e.g., fetch/axios call)
      setTimeout(() => {
        // Reset button state
        btn.classList.remove('loading');
        btnText.textContent = 'Send Message';

        // Slide up the success message overlay
        successMessage.classList.add('active');

        // Clear the form fields
        form.reset();

        // 4. Slide the success message back down after 3 seconds
        setTimeout(() => {
          successMessage.classList.remove('active');
        }, 3000);

      }, 1500); // 1.5 second simulated delay
    });
  </script>

</body>
</html>


