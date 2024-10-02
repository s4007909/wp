<?php include 'header.inc'; ?>

<?php include 'db_connect.inc'; ?>




<body>

<div class="wrapper">

<?php include 'nav.inc'; ?>
   
    <h2 class="headings"> Discover Pets Victoria </h2>
    <p class="paragraphs"> Pets Victoria is a dedicated pet adoption organization based in Victoria, Australia, focused on providing a safe and loving environment for pets in need. With a compassionate approach, Pets Victoria works tirelessly to rescue, rehabilitate, and rehome dogs, cats, and other animals. Their mission is to connect these deserving pets with caring individuals and families, creating lifelong bonds. The organisation offers a range of services, including adoption, counseling, pet education, and community support programs, all aimed at promoting responsible pet ownership and reducing the number of homeless animals.  </p>


    <aside class="aside3">
        <img src=pets.jpeg alt="pets" style="width: 450px; height: 220px;">
    </aside>


    <aside class="aside4">

       
<?php 
$pets = mysqli_query($conn, "select * from pets");
$sql = "SELECT petid, petname, type, age, location FROM pets";
$result = $conn->query($sql);


$sql = "SELECT petid, petname, type, age, location FROM pets";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<table>
            <thead>
                <tr>
                    <th>Pet</th>
                    <th>Type</th>
                    <th>Age</th>
                    <th>Location</th>
                </tr>
            </thead>
            <tbody>';

    
    while($row = $result->fetch_assoc()) {
        echo '<tr>';
        
        
        echo '<td><a href="details.php?id=' . $row['petid'] . '">' . $row['petname'] . '</a></td>';
        echo '<td>' . $row['type'] . '</td>';

        
        $age = $row['age'];
        if ($age >= 12) {
            
            $years = floor($age / 12);
            echo '<td>' . $years . ' ' . ($years == 1 ? 'year' : 'years') . '</td>';
        } else {
            
            echo '<td>' . $age . ' months</td>';
        }

        
        echo '<td>' . $row['location'] . '</td>';
        echo '</tr>';
    }

    echo '</tbody></table>';
} else {
    echo 'No pets found.';
}

$conn->close();
?>




</aside>
    

<aside>

<div style="position: absolute; bottom: 0; width: 100%;">
    <aside class="bottompage" style="display: flex; align-items: baseline;">
        <?php include 'footer.inc'; ?>
    </aside>



</aside>


</div>
</div>

   

</body>

</html>