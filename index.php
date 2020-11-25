<?php
    // Adgang til de andre dokumenter
    include ("document.php");
    include ("ContentObject.php");

    //laver en ny instans af dokumentklassen 
    $content = new Document();

    //henter documentets indhold
    $contentTemplate = $content->getFileContent("template.html");

    //opretter et array og et object, der indeholde de ønskede data som skal overskride placeholderne.
    //har valgt både at oprette et array og object for at vise den kan gøre brug af begge.
    $overrideDataAsArray = array(
        "title" => "title_passed",
        "content" => "content_passed",
        "subcontent" => "subcontent_passed");
    $overrideDataAsObject = new ContentObject();

    
    //parser indholdet og overskriver de ønskede værdier fra arrayet.
    $parsedContentFromArray = $content->parse($contentTemplate, $overrideDataAsArray);
     //parser indholdet og overskriver de ønskede værdier fra objectet.    
    $parsedContentFromArrayAndObject =  $content->parse($parsedContentFromArray, $overrideDataAsObject);
    
    //printer resultatet i browseren.
    echo $parsedContentFromArrayAndObject;
    
    

?>