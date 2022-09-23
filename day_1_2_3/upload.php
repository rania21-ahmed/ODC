
<?php
echo '<pre>';
print_r($_FILES['images']);
// echo "<img src="' . $target_file . '">";
$temp_name = $upload_files['tmp_name'];
print_r($temp_name);
echo '<pre/>';