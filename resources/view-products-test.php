<?php include_once 'includes/header.php' ?>

<nav id="menu">
    <ul class="parent-menu">
        <li><a href="#">Fresh Food</a>
            <ul>
                <li><a href="#">Cheddar Cheese</a>
                    <ul>
                        <li value="3000" onclick="javascript:displayDetails(this.value)"><a href="#">500 gram</a></li>
                        <li value="3001" onclick="javascript:displayDetails(this.value)"><a href="#">1000 gram</a></li>
                    </ul>
                </li>
                <li value="3002" onclick="javascript:displayDetails(this.value)"><a href="#">T'Bone Steak</a></li>
                <li><a href="#">item</a></li>
                <li><a href="#">item</a></li>
                <li><a href="#">item</a></li>
                <li><a href="#">item</a></li>
            </ul>
        </li>
        <li><a href="#">Electronics</a>
            <ul>
                <li><a href="#">item</a></li>
                <li><a href="#">item</a></li>
                <li><a href="#">item</a></li>
                <li><a href="#">item</a></li>
                <li><a href="#">item</a></li>
            </ul>
        </li>
        <li><a href="#">Clothing</a>
            <ul>
                <li><a href="#">item</a></li>
                <li><a href="#">item</a></li>
                <li><a href="#">item</a></li>
                <li><a href="#">item</a></li>
            </ul>
        </li>
        <li><a href="#">Cars & Motorbikes</a>
            <ul>
                <li><a href="#">item</a></li>
                <li><a href="#">item</a></li>
                <li><a href="#">item</a></li>
                <li><a href="#">item</a></li>
            </ul>
        </li>
        <li><a href="#">Books</a>
            <ul>
                <li><a href="#">item</a></li>
                <li><a href="#">item</a></li>
                <li><a href="#">item</a></li>
                <li><a href="#">item</a></li>
            </ul>
        </li>
    </ul>
</nav>

<?php include_once 'includes/footer.php' ?>
