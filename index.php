<!DOCTYPE html>
<html lang="en">
<?php include '_includes/language.php'; ?>
<?php $page_keyword = 'Home'; ?>
<?php $page_keyword_spanish = 'Casa'; ?>
<?php 
    if ($language === 'english') {
        $page_title = 'Rural Health Services, Inc. | ' . $page_keyword; 
    } else {
        $page_title = 'Rural Health Services, Inc. | ' . $page_keyword_spanish;    
    }
?>
<?php include '_includes/head.php'; ?>
<body>
    <div class="clear">
        <span class="language">
            <?php include '_includes/_content/_' . $language . '/language_switch.php'; ?> <i class="zmdi zmdi-globe-alt"></i>
        </span>
    </div>
    <?php include '_includes/header.php'; ?>  
    <main>
        <section>
            <div class="hero">
                <img src="_images/hero.png" alt="">
            </div>
        </section>
        <section>
            <?php include '_includes/_content/_' . $language . '/_home/upcoming_events.php'; ?>
        </section>
    </main>
    <?php include '_includes/footer.php'; ?>
</body>
<script>
    $('.language, .language_mobile').click(function(){
      window.location = window.location.href.split("?")[0] + "?language=<?php echo $alt_language; ?>";
    });
    $('table.upcoming_events tr:not(:first-child)').click(function(){
       $(this).next().fadeToggle(); 
    });
    $('.menu_handle').click(function(){
        $('nav ul').fadeToggle();
    });
</script>
</html>