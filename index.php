<!DOCTYPE html>
<html>
<head>
    <title>Chuck Norris Jokes App</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Chuck Norris Jokes</h1>
        <div class="joke">
            <?php
            // Function to fetch a random Chuck Norris joke from the API
            function getChuckNorrisJoke() {
                $url = 'https://api.chucknorris.io/jokes/random';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $response = curl_exec($ch);
                curl_close($ch);
                return json_decode($response, true);
            }

            // Fetch a random joke and display it
            $joke = getChuckNorrisJoke();
            echo '<p>' . $joke['value'] . '</p>';
            ?>
        </div>
    </div>
</body>
</html>
