<?php include("header.php"); ?>
  
  <!-- First Band (Slider) -->
  <!-- The Orbit slider is initialized at the bottom of the page by calling .orbit() on #slider -->
    
  <div class="row">
    <div class="twelve columns">
      <div id="slider">
        <img src="/project/images/interface.png" />
        <img src="http://placehold.it/1000x400&text=[img 2]" />
        <img src="http://placehold.it/1000x400&text=[img 3]" />
        <img src="http://placehold.it/1000x400&text=[img 4]" />
      </div>
      
      <hr />
    </div>
  </div>
  
  
  <!-- Three-up Content Blocks -->
  
  <div class="row">
  
    <div class="four columns">
      <img src="/project/images/openhtml.png" />
      <h4>Technology</h4>
      <p>Building tools for basic web development. For now, check out openHTML editor, a web-based HTML and CSS tool with a simple interface. The source is available on GitHub.</p>
    </div>
    
    <div class="four columns">
      <img src="http://placehold.it/400x300&text=[img]" />
      <h4>Education</h4>
      <p>Developing learning activities and challenges that excite students while teaching the fundamentals of computation and the web.</p>
    </div>
    
    <div class="four columns">
      <img src="http://placehold.it/400x300&text=[img]" />
      <h4>Research</h4>
      <p>Exploring ways to assess learning and knowledge in this context, and designing tools and activities with empirical support. We’re using a variety of methods from naturalistic observations, to lab-based task studies, to analysis of Q&A forums and activity logs.

</p>
    </div>
    
  </div>
  
  
  <!-- Call to Action Panel -->
  <div class="row">
    <div class="twelve columns">
      <div class="panel">      
        <div class="row">
          <div class="four columns" style="text-align:center;">
            <img src="./images/nsflogo.gif" style="height:100px;">
          </div>
          <div class="four columns" style="text-align:center;">
            <img src="./images/drexellogo.png" style="height:100px;">
          </div>
          <div class="four columns" style="text-align:center;">
            <a href="#" class="large radius button">Contact Us</a>
            <br/><br/>Feedbacks<br/>Comments<br/>Suggestions
          </div>
        </div>
      </div>
      
    </div>
  </div>
  
  
  <!-- Footer -->
  
  <footer class="row">
    <div class="twelve columns">
      <hr />
      <div class="row">
        <div class="six columns">
          <p>&copy; Copyright no one at all. Go to town.</p>
        </div>
        <div class="six columns">
          <ul class="link-list right">
            <li><a href="#">Link 1</a></li>
            <li><a href="#">Link 2</a></li>
            <li><a href="#">Link 3</a></li>
            <li><a href="#">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div> 
  </footer>
  
  <!-- Included JS Files (Uncompressed) -->
  <!--
  
  <script src="javascripts/jquery.js"></script>
  
  <script src="javascripts/jquery.foundation.mediaQueryToggle.js"></script>
  
  <script src="javascripts/jquery.foundation.forms.js"></script>
  
  <script src="javascripts/jquery.foundation.reveal.js"></script>
  
  <script src="javascripts/jquery.foundation.orbit.js"></script>
  
  <script src="javascripts/jquery.foundation.navigation.js"></script>
  
  <script src="javascripts/jquery.foundation.buttons.js"></script>
  
  <script src="javascripts/jquery.foundation.tabs.js"></script>
  
  <script src="javascripts/jquery.foundation.tooltips.js"></script>
  
  <script src="javascripts/jquery.foundation.accordion.js"></script>
  
  <script src="javascripts/jquery.placeholder.js"></script>
  
  <script src="javascripts/jquery.foundation.alerts.js"></script>
  
  <script src="javascripts/jquery.foundation.topbar.js"></script>
  
  <script src="javascripts/jquery.foundation.joyride.js"></script>
  
  <script src="javascripts/jquery.foundation.clearing.js"></script>
  
  <script src="javascripts/jquery.foundation.magellan.js"></script>
  
  -->
  
  <!-- Included JS Files (Compressed) -->
  <script src="javascripts/jquery.js"></script>
  <script src="javascripts/foundation.min.js"></script>
  
  <!-- Initialize JS Plugins -->
  <script src="javascripts/app.js"></script>

  <script type="text/javascript">
     $(window).load(function() {
         $('#slider').orbit();
     });
  </script>
  
</body>
</html>
