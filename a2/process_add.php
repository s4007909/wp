<?php include 'db_connect.inc'; ?>

<?php


$petname = $conn->real_escape_string($_POST['petname']);
$type = $conn->real_escape_string($_POST['type']);
$description = $conn->real_escape_string($_POST['description']);
$caption = $conn->real_escape_string($_POST['caption']);
$age = (int)$_POST['age'];
$location = $conn->real_escape_string($_POST['location']);


$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


$check = getimagesize($_FILES["image"]["tmp_name"]);
if ($check === false) {
    die("File is not an image.");
}


if (file_exists($target_file)) {
    die("Sorry, file already exists.");
}


$allowed_extensions = ['jpg', 'jpeg', 'png', 'gif'];
if (!in_array($imageFileType, $allowed_extensions)) {
    die("Sorry, only JPG, JPEG, PNG, and GIF files are allowed.");
}


if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    
    $sql = "INSERT INTO pets (petname, description, image, caption, age, location, type) 
            VALUES ('$petname', '$description', '$target_file', '$caption', $age, '$location', '$type')";

    if ($conn->query($sql) === TRUE) {
        echo "New pet added successfully!";
        echo '<a href="pets.php">Go back to Pets</a>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Sorry, there was an error uploading your file.";
}


$conn->close();
?>