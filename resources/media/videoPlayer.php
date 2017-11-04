<?php
switch ($_GET['video']) {
    case "FireQTraining":
        $mp4Path = "/resources/media/FireQAppSetup.mp4";
        break;
    case "GGMTraining":
        $mp4Path = "/resources/media/GGMAddContact.mp4";
        break;
    case "PremierTraining":
        $mp4Path = "/resources/media/PCC-Intro.mp4";
        break;
    default:
       $mp4Path = "";
}
?>

<video autoplay>
  <source type="video/mp4" src="<?php echo $mp4Path; ?>">
  <!--<source type="video/webm" src="/resources/web-development/BST-FS.webm">-->
</video>
      
      
      
      