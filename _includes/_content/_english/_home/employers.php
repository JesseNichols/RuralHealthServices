<div class="container clear">
    <h3 style="margin-top: 30px;">Board of Directors</h3>
    <div class="bio_container">
        <div class="bio">
            <img src="http://placehold.it/150x150" alt="">
            <h4>Kenneth Baldwin</h4>
            <p><i>Board Chair</i></p>
        </div>
        <div class="bio">
            <img src="http://placehold.it/150x150" alt="">
            <h4>Jason Price</h4>
            <p><i>Board Vice Chair</i></p>
        </div>
        <div class="bio">
            <img src="http://placehold.it/150x150" alt="">
            <h4>Dr. Rosa Ishmal</h4>
            <p><i>Board Treasurer</i></p>
        </div>
        <div class="bio">
            <img src="http://placehold.it/150x150" alt="">
            <h4>Benjamin Broussard</h4>
            <p><i>Board Secretary</i></p>
        </div>
        <div class="bio">
            <img src="http://placehold.it/150x150" alt="">
            <h4>Antoinette Noble-Webb</h4>
        </div>
        <div class="bio">
            <img src="http://placehold.it/150x150" alt="">
            <h4>Shevonie Mealer</h4>
        </div>
        <div class="bio">
            <img src="http://placehold.it/150x150" alt="">
            <h4>Harvey Tollison</h4>
        </div>
        <div class="bio">
            <img src="http://placehold.it/150x150" alt="">
            <h4>Rev Shirley Edwards</h4>
        </div>
        <div class="bio">
            <img src="http://placehold.it/150x150" alt="">
            <h4>Nicholas McCarley</h4>
        </div>
        <div class="bio">
            <img src="http://placehold.it/150x150" alt="">
            <h4>Barbara Williams</h4>
        </div>
    </div>
</section>


<script>
$(window).on("load", function() {
   var maxHeight = -1;

   $('.bio').each(function() {
     maxHeight = maxHeight > $(this).height() ? maxHeight : $(this).height();
   });

   $('.bio').each(function() {
     $(this).height(maxHeight);
   });
 });
</script>