<!--nav.inc -->
<body>
    <nav class="navbar">
        <div class="logo">
            <img src="logo.png" alt="Logo">
        </div>
        <div class="nav-links">
            <ul>
               
                <li>
                    <div class="dropdown">
                        <select id="menu" onchange="doMenu();">
                            <option value="">Select An Option...</option>
                            <option value="index.php">Index</option>
                            <option value="pets.php">Pets</option>
                            <option value="add.php">Add</option>
                            <option value="gallery.php">Gallery</option>
                            <option value="details.php">Details</option>
                        </select>
                    </div>
                </li>
            </ul>
        </div>
        <div class="search">
            <input type="text" placeholder="Search...">
            <span class="material-symbols-outlined">
                search
                </span>
        </div>
    </nav>
</body>

</html>

    <!-- end of nav.inc -->