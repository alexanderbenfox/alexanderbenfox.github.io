<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
<title>Love2D-Webplayer</title>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">

<link rel="stylesheet" href="../style.css" type="text/css">
<link rel="stylesheet" href="../css/harbinger_ss.css" type="text/css">

<script type="text/javascript" src="../js/lua-parser.js"		></script>
<script type="text/javascript" src="../js/lua-parser-utils.js"	></script>
<script type="text/javascript" src="../js/gamepad.js"      ></script>
<script type="text/javascript" src="../js/jquery.js"      ></script>
<script type="text/javascript" src="../js/jquery.hotkeys.js"      ></script>
<script type="text/javascript" src="../js/utils.js"			></script>
<script type="text/javascript" src="../js/utils.webgl.js"		></script>
<script type="text/javascript" src="../js/love.render.js"		></script>
<script type="text/javascript" src="../js/main.js"      ></script>

<script type="text/javascript" src="../js/love.audio.js"		></script>
<script type="text/javascript" src="../js/love.event.js"		></script>
<script type="text/javascript" src="../js/love.filesystem.js"	></script>
<script type="text/javascript" src="../js/love.font.js"		></script>
<script type="text/javascript" src="../js/love.graphics.js"	></script>
<script type="text/javascript" src="../js/love.image.js"		></script>
<script type="text/javascript" src="../js/love.joystick.js"	></script>
<script type="text/javascript" src="../js/love.keyboard.js"	></script>
<script type="text/javascript" src="../js/love.mouse.js"		></script>
<script type="text/javascript" src="../js/Box2dWeb-2.1.a.3.min.js"	></script>
<script type="text/javascript" src="../js/love.physics.js"	></script>
<script type="text/javascript" src="../js/love.sound.js"		></script>
<script type="text/javascript" src="../js/love.thread.js"		></script>
<script type="text/javascript" src="../js/love.timer.js"		></script>

<script type="text/javascript">gShaderCode_Fragment = LoadShaderCode("../js/fragment.shader");</script>
<script type="text/javascript">gShaderCode_Vertex   = LoadShaderCode("../js/vertex.shader");</script>

<?php
define("IMAGE_TYPES","png,jpg,gif");

function glob_recursive($pattern, $flags = 0){
  $files = glob($pattern, $flags);
  foreach (glob(dirname($pattern).'/*', GLOB_ONLYDIR|GLOB_NOSORT) as $dir){
    $files = array_merge($files, glob_recursive($dir.'/'.basename($pattern), $flags));
  }
  return $files;
}

?>
<?php
$data = glob_recursive("*.{".IMAGE_TYPES."}",GLOB_BRACE);
  $output = array();
  foreach($data as $file){
    if(substr($file,0,2)=="./"){
      $file = substr($file,2);
    }
    $output[].= "'".$file."'";
  }
 ?>

</head>
<body onload="LoveFileList('<?php echo isset($game)?"../filelist.php?game=$game":"filelist.php"; ?>'); MainOnLoad([<?php echo implode(",",$output); ?>])">
  <div id="parallaxBackgrounds">
      <div class="bgWrapper"></div>
      <div class="farmountain"></div>
      <div class="blackbar"></div>
      <div class="closemountain"></div>
    </div>
<div class = "secondaryWrapper">
<a href="https://github.com/ghoulsblade/love-webplayer">Love2D-Webplayer</a><br>
<canvas id="glcanvas" width="512" height="512" align="center">  
Your browser doesn't appear to support the HTML5 <code>&lt;canvas&gt;</code> element.  
</canvas>
</div>
<div id="output" style="font-family: Courier New,Courier,monospace;"></div>
</body></html>
