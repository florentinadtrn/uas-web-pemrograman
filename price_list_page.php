<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Price List</title>
    <style>
        body{
            background-image: url("wallpaper.jpeg");
            background-size: cover;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .image-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .image {
            width: 200px;
            height: 200px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            overflow: hidden;
        }

        .image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .price {
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Flowers List</h1>

        <div class="image-container">
            <?php
                $flowers = [
                    [
                        "name" => "Anggrek",
                        "image" => "img/anggrek.jpg",
                        "price" => 10000
                    ],
                    [
                        "name" => "Lavender",
                        "image" => "img/lavender.jpg",
                        "price" => 15000
                    ],
                    [
                        "name" => "Matahari",
                        "image" => "img/matahari.jpg",
                        "price" => 8000
                    ],
                    [
                        "name" => "Lily",
                        "image" => "img/lily.jpg",
                        "price" => 8000
                    ],
                    [
                        "name" => "Tulip",
                        "image" => "img/tulip.jpg",
                        "price" => 8000
                    ],
                    [
                        "name" => "Melati",
                        "image" => "img/melati.jpg",
                        "price" => 8000
                    ],
                ];

                foreach ($flowers as $flower) {
                    ?>
                        <div class="image">
                            <img src="<?php echo $flower["image"]; ?>" alt="<?php echo $flower["name"]; ?>">
                            <div class="price">Rp<?php echo number_format($flower["price"], 0, ',', '.'); ?></div>
                        </div>
                    <?php
                }
            ?>
        </div>
    </div>
</body>
</html>
