<?php
    $aid=$_GET['id'];
    $conn=mysqli_connect("mysql.hostinger.kr","u289645062_fezze", "dshost9874");
    mysqli_select_db($conn, "u289645062_drago");
    $sql= "SELECT ds_owned_adoptables.usealternates, ds_levels.primaryimage, ds_levels.alternateimage FROM ds_owned_adoptables, ds_levels WHERE aid = $aid AND ds_owned_adoptables.type = ds_levels.adoptiename AND ds_owned_adoptables.currentlevel = ds_levels.thisislevel" ;
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result);
    $usealternates="$row[usealternates]";
    $primaryimage="$row[primaryimage]";
    $alternateimage="$row[alternateimage]";
    if($usealternates=="yes")
    {
        $siggyimage = imagecreatefrompng($alternateimage);
    }
    else
    {
        $siggyimage = imagecreatefrompng($primaryimage);
    }
    header("Content-type: image/png");
    imagealphablending($siggyimage, true);
    imagesavealpha($siggyimage, true);
    imagepng($siggyimage);
    imagedestroy($siggyimage);
    mysqli_close($conn);

?>