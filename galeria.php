<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="galeria.css">
</head>
<body>
    <section>
        <ul class="filter-menu">
            <li class="filter-option <?php echo !isset($_GET["filter"]) ? "active" : "" ?>">
                <a href="?">All</a>
            </li>
            <li class="filter-option <?php echo isset($_GET["filter"]) && $_GET["filter"] == "city" ? "active" : "" ;?>">
                <a href="?filter=city">Towns</a>
            </li>
            <li class="filter-option <?php echo isset($_GET["filter"]) && $_GET["filter"] == "car" ? "active" : "" ;?>">
                <a href="?filter=car">Cars</a>
            </li>
            <li class="filter-option <?php echo isset($_GET["filter"]) && $_GET["filter"] == "nature" ? "active" : "" ;?>">
                <a href="?filter=nature">Nature</a>
            </li>
            <li class="filter-option <?php echo isset($_GET["filter"]) && $_GET["filter"] == "electronics" ? "active" : "" ;?>">
                <a href="?filter=electronics">Electronics</a>
            </li>
        </ul>
        <div class="gallery">
            <?php
                $categories = ["city", "car", "nature", "electronics"];
                $totalImages = 12;
                $currentFilter = isset($_GET["filter"]) ? $_GET["filter"] :"all";

                for($i = 0; $i < $totalImages; $i++) {
                    $category = $categories[$i % count($categories)];

                    if($currentFilter === "all" || $currentFilter === $category) {
                        echo "<div class='gallery-item' style='background-image:
                         url(https://picsum.photos/200/200?random=" . rand() . ");'></div>";
                    }
                }

                if(isset($_POST['refresh'])) {
                    header("Refresh:0");
                    exit();
                }
            ?>
        
        </div>
        <div class="button-container">
                <form method="post">
                    <button type="submit" class="refresh"><p>Refresh</p></button>
                </form>
            </div>  
    </section>
</body>
</html>