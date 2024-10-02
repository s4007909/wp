<?php include 'header.inc'; ?>
<?php 

include 'db_connect.inc'; 

// Fetch pet data from the database
$query = "SELECT petid, petname, image FROM pets";
$result = mysqli_query($conn, $query);
?>

<body>
<div class="wrapper">

<?php include 'nav.inc'; ?>

<h2 class="headings"> Pets Victoria Has A Lot To Offer! </h2>
<p class="paragraphs">For almost two decades, Pets Victoria has helped in creating true social change by bringing pet adoption into the mainstream. Our work has helped make a <br>difference to the Victorian rescue community and thousands of pets in need of rescue and rehabilitation. But, until every pet is safe, respected, and loved, we all <br> still have big, hairy work to do.</p>


<aside>

<div class="image-grid">
    <?php
    // Loop through each pet in the database
    while($row = mysqli_fetch_assoc($result)) {
        $petid = $row['petid'];
        $petname = $row['petname'];
        $image = $row['image']; // Image path stored in DB, e.g. "images/cat1.jpeg"



        echo '
        <div class="image-container">
            <img src="' . $image . '" alt="' . $petname . '" style="width: 400px; height: 220px;">
            <p class="pgallery">' . $petname . '</p>
            <div class="hover-text">
                <div class="material-symbols-outlined">
                    search
                </div>
                <span><a href="details.php?id=' . $petid . '">Discover more!</a></span>
            </div>
        </div>';
    }
    ?>

</div>

<aside>

<div>
<aside class="bottompage">
    <?php include 'footer.inc'; ?>
</aside>
</div>

</div>
</body>

</html>