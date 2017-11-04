<?php
switch ($_GET['video']) {
    case "FireQTraining":
        $mp4Path = "/images/graphic-design/FireQAppSetup.mp4";
        break;
    case "GGMTraining":
        $mp4Path = "/images/graphic-design/GGMAddContact.mp4";
        break;
    case "PremierTraining":
        $mp4Path = "/images/graphic-design/PCC-Intro.mp4";
        break;
    default:
       $mp4Path = "";
}
?>

<video autoplay>
  <source type="video/mp4" src="<?php echo $mp4Path; ?>">
  <!--<source type="video/webm" src="/images/web-development/BST-FS.webm">-->
</video>
      
      
      
      