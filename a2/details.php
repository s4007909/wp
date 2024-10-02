<?php include 'header.inc'; ?>
<?php include 'db_connect.inc'; ?>


<!DOCTYPE html>
<html lang="en">


<head>
    <title>Details</title>

</head>
    






<body>

<div class="wrapper">

<?php include 'nav.inc'; ?>

<?php
 
 if (isset($_GET['id'])) {
    $petid = intval($_GET['id']); 

   
    $sql = "SELECT * FROM pets WHERE petid = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $petid);
    $stmt->execute();
    $result = $stmt->get_result();
    $pet = $result->fetch_assoc();

    
    if ($pet) {
        $petname = $pet['petname'];
        $age = $pet['age'];
        $location = $pet['location'];
        $image = $pet['image'];
        $description =$description['description'];
    } else {
        echo "Pet not found.";
        exit;
    }
} else {
    echo "Invalid request.";
    exit;
}
?>



<body>
    <div class="wrapper">
      

        
        <div class="pet-details">
            <img src="<?php echo $image; ?>" alt="<?php echo $petname; ?>" class="pet-image">


           
    <div class="pet-info">
        
        <div class="info-left">
            <span class="material-symbols-outlined">alarm</span> 
            Age: <?php echo $age; ?> 
        </div>
        
        <div class="info-middle">
            <span class="material-symbols-outlined">pets</span> 
            Type: <?php echo $type; ?>
        </div>
        
        <div class="info-right">
            <span class="material-symbols-outlined">location_on</span> 
            Location: <?php echo $location; ?>
        </div>
    </div>
    
   
   <h2 class="pet-caption"> <?php echo $caption; ?></h2>
    
   
    <p class = "pet-description"><?php echo $description; ?></p>
</div>





<div style="position: absolute; bottom: 0; width: 100%;">
    <aside class="bottompage" style="display: flex; align-items: baseline;">
        <?php include 'footer.inc'; ?>
    </aside>


</div>

</div>
</body>

</html>