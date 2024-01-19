<?php
$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


//เพิ่มโค้ดตรวจสอบไฟล์ที่อัพโหลดไปแล้ว
if (file_exists($target_file)) {
  echo "โทษที ไฟล์นี้มีอยู่แล้ว";
  $uploadOk = 0;
}



// เพิ่มโค้ดตรวจสอบนามสกุลไฟล์
if ($_FILES["fileToUpload"]["size"] > 204800) {
  echo "โทษที ไฟล์นี้มีขนาดใหญ่ไป";
  $uploadOk = 0;
}




//เพิ่มโค้ดตรวจสอบนามสกุลไฟล์
if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif") {
  echo "โทษที รับแค่ไฟล์ชนิด JPG, JPEG, PNG และ GIF เท่านั้น";
  $uploadOk = 0;
}



if ($uploadOk == 0) {
  echo "ขอโทษ ไฟล์นี้อัพโหลดไม่ได้";
  echo '<center><a href="gallery.php">กลับ</a></center>';
} else {
  if ($_FILES["fileToUpload"]["error"] > 0) {
    echo "Error: " . $_FILES["fileToUpload"]["error"] . "<br />";
  } else {
    echo "Upload: " . $_FILES["fileToUpload"]["name"] . "<br />";//แสดงชื่อไฟล์
    echo "Type: " . $_FILES["fileToUpload"]["type"] . "<br />";//แสดงนามสกุลไฟล์
    echo "Size: " . ($_FILES["fileToUpload"]["size"] / 1024) . " Kb<br />";//แสดงขนาดไฟล์
    echo "Stored in: " . $_FILES["fileToUpload"]["tmp_name"];//แสดงที่อยู่ของไฟล์
  
    if (file_exists("images/" . $_FILES["fileToUpload"]["name"])) {
      echo $_FILES["fileToUpload"]["name"] . " already exists. ";
    } else {
      move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "images/" . $_FILES["fileToUpload"]["name"]);
      echo "Stored in: " . "images/" . $_FILES["fileToUpload"]["name"] . "<br />";;//แสดงรูปภาพ
    }
  
    echo "<img src=\"images/" . $_FILES["fileToUpload"]["name"] . "\" />";
  
    echo '<center><a href="gallery.php">กลับ</a></center>';
  }
}
?>
