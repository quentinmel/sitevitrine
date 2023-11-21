<?php
#php -S localhost:5500

// Determine the requested route
$route = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Define the default route
if ($route === '/' || $route === '/index.php') {
    $route = '/home';
}

// Your HTML content goes here
$htmlContent = '';

// Handle different routes
switch ($route) {
    case '/home':
        $htmlContent = file_get_contents('pages/home.html');
        break;
    case '/developpement-web':
        $htmlContent = file_get_contents('pages/developpement-web.html');
        break;
    case '/developpement-mobile':
        $htmlContent = file_get_contents('pages/developpement-mobile.html');
        break;
    case '/developpement-logiciel':
        $htmlContent = file_get_contents('pages/developpement-logiciel.html');
        break;
    case '/cybersecurite':
        $htmlContent = file_get_contents('pages/cybersecurite.html');
        break;
    default:
        // Handle 404 Not Found
        header("HTTP/1.0 404 Not Found");
        $htmlContent = '404 Not Found';
}

// Output the HTML content
echo $htmlContent;
?>