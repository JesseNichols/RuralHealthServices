<?php $language_test = $_GET["language"]; ?>
<?php 
    if ($language_test === "spanish") {
            $language = "spanish";
            $alt_language = "english";
    } else {
        $language = "english";  
        $alt_language = "spanish";
    } 
?>