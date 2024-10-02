<?php include 'header.inc'; ?>




<body>
<div class="wrapper">
<?php include 'nav.inc'; ?>
    
    <h2 class="headings" > Add A Pet </h2>
    <p class="paragraphs">You can add a new pet here </p>

    <form action="process_add_pet.php" method="post" enctype="multipart/form-data">
    <label for="petname">Pet Name:</label>
    <input type="text" id="petname" name="petname" required><br><br>

 <label for="pet-type">Type:</label><br>
        <select id="pet-type" name="pet-type">
            <option value="cat">~Choose an Option~</option>
            <option value="dog">Dog</option>
            <option value="cat">Cat</option>
           
        </select><br>
        
        <label for="description">Pet Description:</label>
    <textarea id="description" name="description" rows="4" cols="50" required></textarea><br><br>

    <label for="image">Pet Image: <span class="mandatory">*</label>
        
        <div class="file-upload">
            <input type="file" id="image" name="image" accept="image/*" required>
            <span class="max-size">MAX IMAGE SIZE 500px</span>
        </div>


        <label for="caption">Image Caption: <span class="mandatory">*</span></label><br>
        <input type="text" id="caption" name="caption" placeholder="Describe the image in one word" required><br><br>


        <label for="age">Age (months): <span class= "mandatory">*</span></label><br>
    <input type="number" id="age" name="age" placeholder="Age of pet in months" required><br><br>



    <label for="location">Location: <span class= "mandatory">*</span></label><br>
    <input type="text" id="location" name="location" placeholder="Location of the pet" required><br><br>


        <div class="form-buttons">
            <button type="submit" class="submit-btn" value="Insert">
                <span class="material-symbols-outlined">
                    add_task
                    </span> Submit
            </button>
            <button type="reset" class="clear-btn">
                <span class="material-symbols-outlined">
                    close
                    </span>
                Clear
            </button>
        </div>

      </form>
 


      <?php include 'footer.inc'; ?>
 

</div>
</body>

</html>
  <!-- <footer class="footer">
        <p>© COPYRIGHT S4007909. ALL RIGHTS RESERVED | DESIGNED FOR PETS VICTORIA <br>
       
      </footer> -->






