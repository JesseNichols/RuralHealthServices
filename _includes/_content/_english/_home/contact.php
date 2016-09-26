<div class="container">
    <div class="location-container" style="padding-top: 16px;">
        <div>
            <img src="_images/contact/ccpc.jpg" alt="Clyburn Center for Primary Care">
            <div>
                <h4>Clyburn Center for Primary Care</h4>
                <p>1000 Clyburn Place<br>Aiken, SC 29801<br>803.380.7000</p>
                <p>Monday - Thursday<br>8:00 am - 7:00 pm<br>Friday<br>8:00 am - 5:00 pm</p>
            </div>
        </div>
        <div>
            <img src="_images/contact/mjwchc.jpg" alt="Margaret J Weston Community Health Center">
            <div>
                <h4>Margaret J Weston Community Health Center</h4>
                <p>4645 Augusta Road<br>Beech Island, SC 29842<br>803.593.9283</p>
                <p>Monday - Friday<br>8:00 am - 5:00 pm</p>
            </div>
        </div>
        <div>
            <img src="_images/contact/fhc.jpg" alt="Family Health Care">
            <div>
                <h4>Family Health Care</h4>
                <p>120 Darlington Drive<br>Aiken, SC 29803<br>803.641.1404</p>
                <p>Monday - Wednesday<br>8:00 am - 7:00 pm<br>Thursday - Friday<br>8:00 am - 5:00 pm</p>
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