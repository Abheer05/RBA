<?php
include "db.php";
include "fun.php";
$connect = new connect();
$conn = $connect->dbconnect();
$alert1 = '';

if (isset($_POST['submit'])) {
    if (isset($_FILES['image'])) {
        $errors1 = array();
        $file_name1 = $_FILES['image']['name'];
        $file_size1 = $_FILES['image']['size'];
        $file_tmp1 = $_FILES['image']['tmp_name'];
        $file_type1 = $_FILES['image']['type'];
        $file_ext1 = strtolower(pathinfo($file_name1, PATHINFO_EXTENSION));
        
        $extensions = array("jpeg", "jpg", "png");
        
        if (in_array($file_ext1, $extensions) === false) {
            $errors1[] = '<div class="alert alert-danger" style="color:white">
                            <strong>Failed!</strong> Photo extension not allowed, please choose a JPG, JPEG, or PNG file.
                          </div>';
        }
        if ($file_size1 > 1048576) {
            $errors1[] = '<div class="alert alert-danger" style="color:white">
                            <strong>Failed!</strong> Image file size must be less than 1 MB.
                          </div>';
        }
        if (empty($errors1)) {
            $safe_file_name1 = preg_replace("/[^a-zA-Z0-9.]/", "", $file_name1);
            move_uploaded_file($file_tmp1, "image/" . $safe_file_name1);
            $sql = $conn->prepare("INSERT INTO image (image) VALUES (?)");
            $sql->bind_param("s", $safe_file_name1);
            if ($sql->execute()) {
                $alert1 = '<div class="alert alert-success" style="color:white">
                             <strong>Done!</strong> Photo added.
                           </div>';
                header("Location: upload.php");
            } else {
                $alert1 = '<div class="alert alert-danger" style="color:white">
                             <strong>Failed!</strong> Something went wrong.
                           </div>';
            }
            $sql->close();
        } else {
            foreach ($errors1 as $error) {
                $alert1 .= $error;
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Image Upload</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col-md-6 offset-md-3 mt-5">
      <h2 class="text-center mb-4">Upload Image</h2>
      <?php echo $alert1; ?>
      <form action="upload.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="image">Choose Image:</label>
          <input type="file" class="form-control-file" id="image" name="image" accept="image/*" required>
        </div>
        <input type="submit" name="submit" class="btn btn-primary btn-block" value="Upload">
      </form>
    </div>
  </div>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
