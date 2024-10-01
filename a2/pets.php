<?php include 'header.inc'; ?>

<?php include 'db_connect.inc'; ?>


<?php 
$pets = mysqli_query($conn, "select * from petname");
?>


<body>


<?php include 'nav.inc'; ?>
   
    <h2 class="headings"> Discover Pets Victoria </h2>
    <p class="paragraphs"> Pets Victoria is a dedicated pet adoption organization based in Victoria, Australia, focused on providing a safe and loving environment for pets in need. With a compassionate approach, Pets Victoria works tirelessly to rescue, rehabilitate, and rehome dogs, cats, and other animals. Their mission is to connect these deserving pets with caring individuals and families, creating lifelong bonds. The organisation offers a range of services, including adoption, counseling, pet education, and community support programs, all aimed at promoting responsible pet ownership and reducing the number of homeless animals.  </p>


    <aside class="aside3">
        <img src=pets.jpeg alt="pets" style="width: 450px; height: 220px;">
    </aside>


    <aside class="aside4">

        <table>
            <thead>
                <tr>
                    <th>Pet</th>
                    <th>Type</th>
                    <th>Age</th>
                    <th>Location</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Milo</td>
                    <td>Cat</td>
                    <td>3 Months</td>
                    <td>Melbourne CBD</td>
                </tr>
                <tr>
                    <td>Baxter</td>
                    <td>Dog</td>
                    <td>5 Months</td>
                    <td>Cape Woolamai</td>
                </tr>
                <tr>
                    <td>Luna</td>
                    <td>Cat</td>
                    <td>1 month</td>
                    <td>Ferntree Gully</td>
                </tr>
                <tr>
                    <td>Willow</td>
                    <td>Dog</td>
                    <td>48 Months</td>
                    <td>Marysville</td>
                </tr>
                <tr>
                    <td>Oliver</td>
                    <td>Cat</td>
                    <td>12 months</td>
                    <td>Grampians</td>
                </tr>
                <tr>
                    <td>Bella</td>
                    <td>Dog</td>
                    <td>10 months</td>
                    <td>Carlton</td>
                </tr>



            </tbody>
        </table>
    




    </aside>

    <div style="position: absolute; bottom: 0; width: 100%;">
    <aside class="bottompage" style="display: flex; align-items: baseline;">
        <?php include 'footer.inc'; ?>
    </aside>


</div>

   

</body>

</html>
