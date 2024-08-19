<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data table</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Data Tabel</h2>

<table>
    <thead>
        <tr>
            <th>posisi</th>
            <th>link</th>
            <th>title</th>
            <th>deskripsi</th>
        </tr>
    </thead>
    <tbody>

    
        <?php
        $data = [
            [
              "position" => 1,
              "url" => "https://www.nike.com/",
              "title" => "Nike. Just Do It. Nike.com",
              "description" => "Nike delivers innovative products, experiences and services to inspire athletes."
            ],
            [
              "position" => 2,
              "url" => "https://www.instagram.com/nike/?hl=de",
              "title" => "Nike (@nike) • Instagram photos and videos",
              "description" => "255m Followers, 147 Following, 1019 Posts - See Instagram photos and videos from Nike (@nike)"
            ],


            [
              "position" => 3,
              "url" => "https://twitter.com/nike",
              "title" => "Nike - Twitter",
              "description" => "Welcome to Nike FC. We're not a club. We're a community. If you love the game of football, you're a part of Nike FC. Let's change the game, ..."
            ],


            [
              "position" => 4,
              "url" => "https://en.wikipedia.org/wiki/Nike,_Inc.",
              "title" => "Nike, Inc. - Wikipedia",
              "description" => "Nike, Inc is an American multinational corporation that is engaged in the design, development, manufacturing, and worldwide marketing and sales of footwear, ..."
            ],


            [
              "position" => 5,
              "url" => "https://www.youtube.com/user/nike",
              "title" => "Nike - YouTube",
              "description" => "We will continue to stand up for equality and work to break down barriers for athletes* all over the world. We will do and invest more to uphold ..."
            ],




            [
              "position" => 6,
              "url" => "https://www.footlocker.com/category/brands/nike.html",
              "title" => "Nike Sneakers, Apparel, and Accessories - Foot Locker",
              "description" => "Shop the latest selection of Nike at Foot Locker. Find the hottest sneaker drops from brands like Jordan, Nike, Under Armour, ..."
            ]




          ];

        // Loop through the data and create table rows



        foreach ($data as $row) {
            echo "<tr>";
            echo "<td>{$row['position']}</td>";
            echo "<td><a href=\"{$row['url']}\" target=\"_blank\">{$row['url']}</a></td>";
            echo "<td>{$row['title']}</td>";
            echo "<td>{$row['description']}</td>";
            echo "</tr>";



        }
        ?>
    </tbody>
</table>

</body>
</html>