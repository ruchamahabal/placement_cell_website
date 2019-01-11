<?php include 'header.php'; ?>

<section id="hero-section">
  <div class="container">
    <div class="row">
      <div class="col">
        <center>
          <h1>S. K. <br> Placement Cell</h1><br>
          <div id="typed-strings">
          <p>Typed.js is a <strong>JavaScript</strong> library.</p>
          <p>It <em>types</em> out sentences.</p>
          </div>
          <span id="typed1"></span>
      </center>
      </div>
      <div class="col">
        <img src="img/placement_cell_logo.jpg" alt="Placement Cell logo">
      </div>
    </div>
  </div>
</section>
<!--ABOUT US -->
<section id="about-us-new">
  <div id="about-us-mobile" class="wow fadeInUp">
    <h1 class="heading"><center>ABOUT US</center></h1>
    <div class="row" id="about-sk-mobile-content">
      <h2 align=center>Placement Cell</h2>
      <p>The PLACEMENT CELL is a student initiative which has evolved from the INTERNSHIP CELL and it comprised entirely of students. The main aim of the cell is to provide placements & internships to students. The PLACEMENT CELL consists of students from all the courses as well as teachers. Members of the PLACEMENT CELL work for the benefit of the students of the college. The PLACEMENT CELL of the college, had provided a good amount of placements as well as internships to all the students previously. </p>
    </div>
    <div class="row" >
      <img id="about-sk-mobile-image" src="img\about-us-1.jpg">
    </div>
    <div class="row" id="about-txp-mobile-content">
      <h2>Who We Are</h2>
      <p>We are the PLACEMENT CELL committee which is entirely run by student’s body. And only 4 colleges in Mumbai have a student’s Placement body. Our team works selflessly for providing internship and Placement opportunity to our college students. Also we provide training to students for improving their skills. </p>
    </div>
    <div class="row">
      <img id="about-txp-mobile-image" src="img/about-us-2.jpg">
    </div>
  </div>

    <div id="about-us2">
    <h1 class="heading"><center>ABOUT US</center></h1>
    <section id="about-somaiya" class="wow fadeInUp">
      <div class="row">
          <div class="col content">
            <h2>Who We Are</h2>
            <p>We are the PLACEMENT CELL committee which is entirely run by student’s body. And only 4 colleges in Mumbai have a student’s Placement body. Our team works selflessly for providing internship and Placement opportunity to our college students. Also we provide training to students for improving their skills. </p>
          </div>
          <div class="col image-box">
          </div>
      </div>
    </section>
    <section id="about-txp" class="wow fadeInUp">
      <div class="row">
        <div class="col image-box">
        </div>
          <div class="col content">
              <h2>Who We Are</h2>
              <p>We are the PLACEMENT CELL committee which is entirely run by student’s body. And only 4 colleges in Mumbai have a student’s Placement body. Our team works selflessly for providing internship and Placement opportunity to our college students. Also we provide training to students for improving their skills. </p>
          </div>
      </div>
    </section>
  </div>
</section>

<!-- ============================================================== Testimonials Section  -->
<section id="testimonials-section">

</section>



<!-- =================================================================== Counters Section -->
<section id="counters-section" class="">
  <center>

    <div id="container1"> <span style="">PLACEMENTS</span> </div>
    <div id="container2"><span>INTERNSHIPS</span></div>
    <div id="container3"><span>FACEBOOK</span></div>
    <div id="container4"><span>INSTAGRAM</span></div>
  </center>

  <script type="text/javascript">
    var bar1 = new ProgressBar.Circle(container1, {
    color: '#D9534F',
    // This has to be the same size as the maximum width to
    // prevent clipping
    strokeWidth: 4,
    trailWidth: 1,
    easing: 'easeInOut',
    duration: 1400,
    text: {
      autoStyleContainer: true
    },
    from: { color: '#D9534F', width: 1 },
    to: { color: '#d1534f', width: 4 },
    // Set default step function for all animate calls
    step: function(state, circle) {
      circle.path.setAttribute('stroke', state.color);
      circle.path.setAttribute('stroke-width', state.width);
      var value = Math.round(circle.value() * 345);
      if (value === 0) {
        circle.setText('');
      } else {
        circle.setText(value);
      }
    }
    });
    bar1.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
    bar1.text.style.fontSize = '2rem';
    bar1.animate(1.0);

    var bar2 = new ProgressBar.Circle(container2, {
    color: '#F0AD4E',
    // This has to be the same size as the maximum width to
    // prevent clipping
    strokeWidth: 4,
    trailWidth: 1,
    easing: 'easeInOut',
    duration: 1400,
    text: {
      autoStyleContainer: false
    },
    from: { color: '#F0AD4E', width: 1 },
    to: { color: '#e5a750', width: 4 },
    // Set default step function for all animate calls
    step: function(state, circle) {
      circle.path.setAttribute('stroke', state.color);
      circle.path.setAttribute('stroke-width', state.width);
      var value = Math.round(circle.value() * 256);
      if (value === 0) {
        circle.setText('');
      } else {
        circle.setText(value);
      }
    }
    });
    bar2.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
    bar2.text.style.fontSize = '2rem';
    bar2.animate(1.0);

    var bar3 = new ProgressBar.Circle(container3, {
    color: '#17A2B8',
    // This has to be the same size as the maximum width to
    // prevent clipping
    strokeWidth: 4,
    trailWidth: 1,
    easing: 'easeInOut',
    duration: 1400,
    text: {
      autoStyleContainer: false
    },
    from: { color: '#17A2B8', width: 1 },
    to: { color: '#17A2B8', width: 4 },
    // Set default step function for all animate calls
    step: function(state, circle) {
      circle.path.setAttribute('stroke', state.color);
      circle.path.setAttribute('stroke-width', state.width);
      var value = Math.round(circle.value() * 2067);
      if (value === 0) {
        circle.setText('');
      } else {
        circle.setText(value);
      }
    }
    });
    bar3.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
    bar3.text.style.fontSize = '2rem';
    bar3.animate(1.0);

    var bar4 = new ProgressBar.Circle(container4, {
    color: '#02B875',
    // This has to be the same size as the maximum width to
    // prevent clipping
    strokeWidth: 4,
    trailWidth: 1,
    easing: 'easeInOut',
    duration: 1400,
    text: {
      autoStyleContainer: false
    },
    from: { color: '#02B875', width: 1 },
    to: { color: '#02B875', width: 4 },
    // Set default step function for all animate calls
    step: function(state, circle) {
      circle.path.setAttribute('stroke', state.color);
      circle.path.setAttribute('stroke-width', state.width);
      var value = Math.round(circle.value() * 1166);
      if (value === 0) {
        circle.setText('');
      } else {
        circle.setText(value);
      }
    }
    });
    bar4.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
    bar4.text.style.fontSize = '2rem';
    bar4.animate(1.0);
  </script>
</section>
<?php include 'footer.php'; ?>
