    <!-- Optional JavaScript -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript">
    var typed = new Typed('#typed1', {
        stringsElement: '#typed-strings',
        typeSpeed: 40
      });
    </script>
    <script type="text/javascript">
    $(document).ready(function() {
    //rotation speed and timer
    var speed = 5000;

    var run = setInterval(rotate, speed);
    var slides = $('.slide');
    var container = $('#slides ul');
    var elm = container.find(':first-child').prop("tagName");
    var item_width = container.width();
    var previous = 'prev'; //id of previous button
    var next = 'next'; //id of next button
    slides.width(item_width); //set the slides to the correct pixel width
    container.parent().width(item_width);
    container.width(slides.length * item_width); //set the slides container to the correct total width
    container.find(elm + ':first').before(container.find(elm + ':last'));
    resetSlides();


    //if user clicked on prev button

    $('#buttons a').click(function (e) {
      //slide the item

      if (container.is(':animated')) {
          return false;
      }
      if (e.target.id == previous) {
          container.stop().animate({
              'left': 0
          }, 1500, function () {
              container.find(elm + ':first').before(container.find(elm + ':last'));
              resetSlides();
          });
      }

      if (e.target.id == next) {
          container.stop().animate({
              'left': item_width * -2
          }, 1500, function () {
              container.find(elm + ':last').after(container.find(elm + ':first'));
              resetSlides();
          });
      }

      //cancel the link behavior
      return false;

    });

    //if mouse hover, pause the auto rotation, otherwise rotate it
    container.parent().mouseenter(function () {
      clearInterval(run);
    }).mouseleave(function () {
      run = setInterval(rotate, speed);
    });


    function resetSlides() {
      //and adjust the container so current is in the frame
      container.css({
          'left': -1 * item_width
      });
    }

    });
    //a simple function to click next link
    //a timer will call this function, and the rotation will begin

    function rotate() {
    $('#next').click();
    }
    </script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
