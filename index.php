<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Citati</title>
</head>
<body>
    <?php require 'menu.php' ?>
<section id = "quote">
    <?php
    $field = ["posao", "zdravlje", "ljubav", "motivacija"];
    $randomQuoteField = array_rand($field, 1);
    $randomField = $field[$randomQuoteField];   //Slucajni fajl iz kojeg ce se izvuci slucajni citat
    $shownQuote = "";

    $file = __DIR__ . "/text/$randomField.txt";
    $quote = file($file);
    $random_key = array_rand($quote, 1);
    if ($random_key % 2 == 0) {
        $shownQuote = "<p class ='myQuote'>$quote[$random_key] <br>" . $quote[$random_key + 1] . "</p>";
        echo "&ldquo; $shownQuote &ldquo;"; // Slucajni citat
    }
    else {
        $shownQuote ="<p class ='myQuote'>".$quote[$random_key - 1]."<br> $quote[$random_key] </p>";
        echo "&ldquo; $shownQuote &ldquo;";
    }
    ?>
</section>
</body>
</html>