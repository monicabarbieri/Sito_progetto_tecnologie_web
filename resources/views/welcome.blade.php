<?php $__env->startSection('content'); ?>




<body>
  <!-- ALERT -->

<div class="w3-main" style="margin-left:200px">
  <div class="w3-purple">

    <button class="w3-button w3-purple w3-xlarge w3-left w3-hide-large" onclick="w3_open()">&#9776;</button>
    
  </div>
  
  </div>
  
  <script>
    function w3_open() {
      document.getElementById("mySidebar").style.display = "block";
    }
    
    function w3_close() {
      document.getElementById("mySidebar").style.display = "none";
    }
    </script>

<div class="container">
    @if (session('no'))
<div class="alert alert-danger">
 {{ session('no') }}
</div>
@endif 
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
      <li data-target="#myCarousel" data-slide-to="6"></li>

    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="foto-sfuocate.jpg" style="width:68%"  hspace="166" vspace="2;">
      </div>

      <div class="item">
      <img src="foto-sfuocate.jpg" style="width:68%"  hspace="166" vspace="2;">
        <div class="carousel-caption">
        </div>
      </div>
    
      <div class="item">
      <img src="foto-sfuocate.jpg" style="width:68%"  hspace="166" vspace="2;">
        <div class="carousel-caption">
        </div>
      </div>

      <div class="item">
      <img src="foto-sfuocate.jpg" style="width:68%"  hspace="166" vspace="2;">
        <div class="carousel-caption">
        </div>
      </div>

      <div class="item">
      <img src="foto-sfuocate.jpg" style="width:68%"  hspace="166" vspace="2;">
        <div class="carousel-caption">
        </div>
      </div>

        <div class="item">
        <img src="foto-sfuocate.jpg" style="width:68%"  hspace="166" vspace="2;">
                <div class="carousel-caption">
                </div>
        </div>

      <div class="item">
      <img src="foto-sfuocate.jpg" style="width:68%"  hspace="166" vspace="2;">
        <div class="carousel-caption">
        </div>
      </div>

      
      
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev" >
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

<br>
  
<img src="slurp.jpg" style="width:13%"  hspace="490">
                    
                    <div class="w3-panel w3-leftbar w3-large">
                    <div class="background">
                    <div class=" transbox">
                        <p class="w3-xlarge w3-serif"><br>
                        <i>"There is no love sincerer than the love of food."</i> <br>
                        (George Bernard Shaw)</p><br>
                      </div>
                      </div>

                      <footer>
                        <p>Author: Monica Barbieri, Francesco Ardizzoni, Greta Cottica<br>
                        <a href="mailto:centroassistenzaslurp@gmail.com">centroassistenzaslurp@gmail.com</a></p>
                      </footer>
              
            </div>
        </div>
    </body>
</html>
<?php /**PATH /home/ardi/Slurp/resources/views/welcome.blade.php ENDPATH**/ ?>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ardi/Slurp/resources/views/auth/register.blade.php ENDPATH**/ ?>