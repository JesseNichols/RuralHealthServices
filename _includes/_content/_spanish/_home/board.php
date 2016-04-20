<div class="container clear">
    <h3 style="margin-top: 30px;">Board of Directors</h3>
    <div class="bio_container">
        <div class="bio">
            <img src="_images/staff/Baldwin.jpg" alt="Kenneth Baldwin, Board Chair">
            <h4>Kenneth Baldwin</h4>
            <p><i>Board Chair</i></p>
        </div>
        <div class="bio">
            <img src="_images/staff/Price.jpg" alt="Jason Price, Board Vice Chair">
            <h4>Jason Price</h4>
            <p><i>Board Vice Chair</i></p>
        </div>
        <div class="bio">
            <img src="_images/staff/Ishmal.jpg" alt="Dr. Rosa Ishmal, Board Treasurer">
            <h4>Dr. Rosa Ishmal</h4>
            <p><i>Board Treasurer</i></p>
        </div>
        <div class="bio">
            <img src="_images/staff/Broussard.jpg" alt="Benjamin Broussard, Board Secretary">
            <h4>Benjamin Broussard</h4>
            <p><i>Board Secretary</i></p>
        </div>
        <div class="bio">
            <img src="_images/staff/Noble-Webb.jpg" alt="Antoinette Noble-Webb">
            <h4>Antoinette Noble-Webb</h4>
        </div>
        <div class="bio">
            <img src="_images/staff/Mealer.jpg" alt="Shevonie Mealer">
            <h4>Shevonie Mealer</h4>
        </div>
        <div class="bio">
            <img src="_images/staff/Tollison.jpg" alt="Harvey Tollison">
            <h4>Harvey Tollison</h4>
        </div>
        <div class="bio">
            <img src="_images/staff/ShirleyEdwards.jpg" alt="Rev Shirley Edwards">
            <h4>Rev Shirley Edwards</h4>
        </div>
        <div class="bio">
            <img src="_images/staff/McCarley.jpg" alt="Nicholas McCarley">
            <h4>Nicholas McCarley</h4>
        </div>
        <div class="bio">
            <img src="_images/staff/Williams.jpg" alt="Barbara Williams">
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