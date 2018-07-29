<div class="banner-container">
  <div id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li class="item1 active"></li>
      <li class="item2"></li>
      <li class="item3"></li>
      <li class="item4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox" >

      <div class="item active">
        <img src="1.jpg" alt="Sale">
        
      </div>

      <div class="item">
        <img src="2.jpg" alt="Sale">
        
      </div>
    
      <div class="item">
        <img src="3.jpg" alt="Sale" >
        
      </div>

      <div class="item">
        <img src="4.jpg" alt="Sale">
      </div>
  
    </div>

    <!-- Left and right controls -->
    
  </div>
</div>

<script>
$(document).ready(function(){
    // Activate Carousel
    $("#myCarousel").carousel();
    
    // Enable Carousel Indicators
    $(".item1").click(function(){
        $("#myCarousel").carousel(0);
    });
    $(".item2").click(function(){
        $("#myCarousel").carousel(1);
    });
    $(".item3").click(function(){
        $("#myCarousel").carousel(2);
    });
    $(".item4").click(function(){
        $("#myCarousel").carousel(3);
    });
    
    // Enable Carousel Controls
   
});
</script>