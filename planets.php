<?php
$planets = [
    ["name" => "Mercury", "description" => "The smallest planet, closest to the Sun."],
    ["name" => "Venus", "description" => "The hottest planet, often called Earth's twin."],
    ["name" => "Earth", "description" => "Our home planet, the only known planet with life."],
    ["name" => "Mars", "description" => "The Red Planet, known for its dusty surface."],
    ["name" => "Jupiter", "description" => "The largest planet, a gas giant with a Great Red Spot."],
    ["name" => "Saturn", "description" => "Famous for its stunning ring system."],
    ["name" => "Uranus", "description" => "An ice giant that rotates on its side."],
    ["name" => "Neptune", "description" => "A windy, icy planet with deep blue color."]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planets in Our Solar System</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, sans-serif;
            background: linear-gradient(to right, #0f2027, #203a43, #2c5364);
            color: #fff;
            margin: 0;
            padding: 0;
        }
        header {
            text-align: center;
            padding: 30px;
            background: #1c1c1c;
            font-size: 28px;
            letter-spacing: 1px;
        }
        ul {
            list-style-type: none;
            padding: 0;
            max-width: 700px;
            margin: 40px auto;
        }
        li {
            background: #2d3e50;
            margin: 10px 0;
            padding: 20px;
            border-radius: 10px;
            transition: transform 0.2s ease-in-out, background 0.3s ease;
        }
        li:hover {
            transform: translateY(-5px);
            background: #3e546d;
        }
        .planet-name {
            font-size: 20px;
            font-weight: bold;
        }
        .description {
            font-size: 14px;
            color: #dcdcdc;
        }
    </style>
</head>
<body>
    <header>🌌 Planets in Our Solar System</header>
    <main>
        <ul>
            <?php foreach($planets as $planet): ?>
                <li>
                    <div class="planet-name"><?= $planet['name']; ?></div>
                    <div class="description"><?= $planet['description']; ?></div>
                </li>
            <?php endforeach; ?>
        </ul>
    </main>
</body>
</html>
