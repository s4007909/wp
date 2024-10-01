<?php include 'header.inc'; ?>




<body>
<?php include 'nav.inc'; ?>
    
    <h2 class="headings" > Add A Pet </h2>
    <p class="paragraphs">You can add a new pet here </p>

    <form method="post" action="insert.php" enctype="multipart/form-data">
        <label for="pet-name">Pet Name:</label><br>
        <input type="text" id="pet-name" name="pet-name" placeholder="Please provide pet name below"><br>


 <label for="pet-type">Type:</label><br>
        <select id="pet-type" name="pet-type">
            <option value="cat">~Choose an Option~</option>
            <option value="dog">Dog</option>
            <option value="cat">Cat</option>
           
        </select><br>
        
        <label for="description">Description:</label><br>
        <textarea id="description" name="description" placeholder="Briefly describe the pet." rows="4" cols="50"></textarea><br>



        <label for="image">Select an image: <span class="mandatory">*</span></label>
        
        <div class="file-upload">
            <input type="file" id="image" name="image" accept="image/*" required>
            <span class="max-size">MAX IMAGE SIZE 500px</span>
        </div>

        
         <label for="image-caption">Image Caption: <span class="mandatory">*</span></label><br>
         <input type="text" id="image-caption" name="image-caption" placeholder="Describe the image in one word" required><br>
 
       
        
        <label for="age">Age (months): <span class="mandatory">*</span></label><br>
        <input type="text" id="age" name="age" placeholder="Age of pet in months" required><br>

    
        <label for="location">Location: <span class="mandatory">*</span></label><br>
        <input type="text" id="location" name="location" placeholder="Location of the pet" required><br>

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
    <!-- <footer class="footer">
        <p>© COPYRIGHT S4007909. ALL RIGHTS RESERVED | DESIGNED FOR PETS VICTORIA <br>
       
      </footer> -->


</body>

</html>