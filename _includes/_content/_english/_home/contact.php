<div class="container">
    <div class="location-container" style="padding-top: 16px;">
        <div>
            <img src="http://placehold.it/600x400" alt="">
            <div>
                <h4>Clyburn Center for Primary Care</h4>
                <p>1000 Clyburn Place<br>Aiken, SC 29801<br>803.380.7000</p>
                <p>Monday - Thursday<br>8:00 am - 7:00 pm<br>Friday 8:00 am - 5:00 pm</p>
            </div>
        </div>
        <div>
            <img src="http://placehold.it/600x400" alt="">
            <div>
                <h4>Margaret J Weston Community Health Center</h4>
                <p>1000 Clyburn Place<br>Aiken, SC 29801<br>803.593.9283</p>
                <p>Monday - Thursday<br>8:00 am - 7:00 pm<br>Friday 8:00 am - 5:00 pm</p>
            </div>
        </div>
        <div>
            <img src="http://placehold.it/600x400" alt="">
            <div>
                <h4>Family Health Care</h4>
                <p>1000 Clyburn Place<br>Aiken, SC 29801<br>803.641.1404</p>
                <p>Monday - Thursday<br>8:00 am - 7:00 pm<br>Friday 8:00 am - 5:00 pm</p>
            </div>
        </div>
    </div>
</div>
<script>
$(window).on("load", function() {
   var maxHeight = -1;

   $('div.location-container > div').each(function() {
     maxHeight = maxHeight > $(this).height() ? maxHeight : $(this).height();
   });

   $('div.location-container > div').each(function() {
     $(this).height(maxHeight);
   });
 });
</script>