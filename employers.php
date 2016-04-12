<!DOCTYPE html>
<html lang="en">
<?php include '_includes/language.php'; ?>
<?php $page_keyword = 'Board'; ?>
<?php $page_keyword_spanish = 'Junta'; ?>
<?php $page_title = 'Rural Health Services, Inc. | ' . $page_keyword; ?>
<?php include '_includes/head.php'; ?>
<body class="<?php echo strtolower($page_keyword); ?>">
    <div class="clear">
        <span class="language">
            <?php include '_includes/_content/_' . $language . '/language_switch.php'; ?> <i class="zmdi zmdi-globe-alt"></i>
        </span>
    </div>
    <?php include '_includes/header.php'; ?>  
    <main>
        <section>
            <h2><?php 
                if ($language === 'english') {
                    echo $page_keyword; 
                } else {
                    echo $page_keyword_spanish;    
                }
            ?></h2>
            <?php include '_includes/_content/_' . $language . '/_home/employers.php'; ?>
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