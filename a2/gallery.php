<?php include 'header.inc'; ?>

<?php 
$pets = mysqli_query($conn, "select * from petname");
?>




<body>

<?php include 'nav.inc'; ?>

    <h2 class="headings"> Pets Victoria Has A Lot To Offer! </h2>
    <p class="paragraphs">For almost two decades, Pets Victoria has helped in creating true social change by bringing pet adoption into the mainstream. Our work has helped make a <br>difference to the Victorian rescue community and thousands of pets in need of rescue and rehabilitation. But, until every pet is safe, respected, and loved, we all <br> still have big, hairy work to do.</p>
    



    


    <div>
    <div class="image-grid">
        <div class="image-container">
            <img src="cat1.jpeg" alt="Image 1">
            <p class="pgallery">Milo</p>
            <div class="hover-text">
                <div class="material-symbols-outlined">
                    search
                </div>
                <span>Discover more!</span>
            </div>
        </div>
        <div class="image-container">
            <img src="dog1.jpeg" alt="Image 2">
            <p class="pgallery">Baxter</p>
            <div class="hover-text">
                <div class="material-symbols-outlined">
                    search
                </div>
                <span>Discover more!</span>
            </div>
        </div>
        <div class="image-container">
            <img src="cat2.jpeg" alt="Image 3">
            <p class="pgallery">Luna</p>
            <div class="hover-text">
                <div class="material-symbols-outlined">
                    search
                </div>
                <span>Discover more!</span>
            </div>
        </div>
        <div class="image-container">
            <img src="dog2.jpeg" alt="Image 4">
            <p class="pgallery">Willow</p>
            <div class="hover-text">
                <div class="material-symbols-outlined">
                    search
                </div>
                <span>Discover more!</span>
            </div>
        </div>
        <div class="image-container">
            <img src="cat4.jpeg" alt="Image 5">
            <p class="pgallery">Oliver</p>
            <div class="hover-text">
                <div class="material-symbols-outlined">
                    search
                </div>
                <span>Discover more!</span>
            </div>
        </div>
        <div class="image-container">
            <img src="dog3.jpeg" alt="Image 6">
            <p class="pgallery">Bella</p>
            <div class="hover-text">
                <div class="material-symbols-outlined">
                    search
                </div>
                <span>Discover more!</span>
            </div>
        </div>
    </div>
</div>
 


   

    <div>
    <aside class= "bottompage">
<?php include 'footer.inc'; ?>

</div>

</body>



</html>