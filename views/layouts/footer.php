    <div class="page-buffer"></div>
</div>

<footer id="footer" class="page-footer"><!--Footer-->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p class="pull-left">Copyright © 2015</p>
                <p class="pull-right"></p>
            </div>
        </div>
    </div>
</footer><!--/Footer-->



<script src="/template/js/jquery.js"></script>
<script src="/template/js/jquery.cycle2.min.js"></script>
<script src="/template/js/jquery.cycle2.carousel.min.js"></script>
<script src="/template/js/bootstrap.min.js"></script>
<script src="/template/js/jquery.scrollUp.min.js"></script>
<script src="/template/js/price-range.js"></script>
<script src="/template/js/jquery.prettyPhoto.js"></script>
<script src="/template/js/main.js"></script>
<script src="/template/js/jquery2.js"></script>
<script src="/template/js/init.js"></script>
<script src="/template/js/mobilyslider.js"></script>

<script>
  $(document).ready(function(){
    $(".add-to-cart").click(function () {
      var id = $(this).attr("data-id");
      // 1. нужно добавить инпут с id="count"
      var count = $("input#count").val();
      $.post("/cart/addAjax/"+id, {"count": count}, function (data) {
        $("#cart-count").html(data);
      });
     return false;
   });
});
</script>
<script>
$('.add-to-cart').click(function(){
  
  $('.product_add').show();
  setTimeout(function(){$('.product_add').fadeOut('slow')},2000);

});
</script>


<script>
$('#modal').click(function(){
 $('#callback').fadeIn(600);
});
</script>
  <script>
$('#modal').click(function(){
  $('#callback-overlay').fadeIn(600);
});
</script>
<script>
$('#callback-overlay').click(function(){
  $('#callback').fadeOut(600);
  $('#callback-overlay').fadeOut(600);
});
</script>

<script>
$('#callback-close').click(function(){
  $('#callback').fadeOut(600);
  $('#callback-overlay').fadeOut(600);
});
</script>

</body>
</html>