# Chuck Norris Jokes App

This is a basic PHP application that fetches and displays random Chuck Norris jokes using the Chuck Norris Jokes API.

## Getting Started

1. Make sure you have a web server with PHP support installed on your system. If not, you can install XAMPP (https://www.apachefriends.org/index.html) or any other web server stack of your choice.

2. Download or clone this repository into your web server's root directory.

3. Ensure that the `style.css` file is present alongside the `index.php` file.

4. Start your web server.

5. Open your web browser and navigate to the application's URL (e.g., http://localhost/ChuckNorrisJokesApp).

6. You should see a Chuck Norris joke displayed on the page. Each time you refresh the page, a new random joke will appear.

## How It Works

The application uses PHP to make an API request to the Chuck Norris Jokes API (https://api.chucknorris.io) and fetches a random joke in JSON format. The PHP function `getChuckNorrisJoke()` uses cURL to perform the HTTP request and then displays the joke on the webpage.

Please note that the application uses the default cURL extension in PHP. Ensure that your PHP installation includes cURL support (most installations do by default).

## Customization

Feel free to customize the application as per your requirements. For example, you can add more features like saving jokes to a database, displaying a list of previous jokes, or integrating the app with other APIs.

## Disclaimer

This application is created for educational and demonstration purposes only. The jokes are fetched from the Chuck Norris Jokes API, and no ownership of the content is claimed. The Chuck Norris Jokes API is a third-party service and may have its terms and conditions. Please review their documentation and usage policies before deploying the application in production.



