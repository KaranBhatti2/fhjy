<?php
if (isset($_GET['url'])) {
    $url = filter_var($_GET['url'], FILTER_SANITIZE_URL);

    // Validate the URL
    if (filter_var($url, FILTER_VALIDATE_URL)) {
        echo "<!DOCTYPE html>
        <html>
        <head>
            <title>Watch Video</title>
            <style>
                body {
                    margin: 0;
                    padding: 0;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    height: 100vh;
                    background-color: #000;
                }
                iframe {
                    width: 90%;
                    height: 90%;
                    border: none;
                }
            </style>
        </head>
        <body>
            <iframe src=\"$url\" allowfullscreen></iframe>
        </body>
        </html>";
    } else {
        echo "Invalid URL. Please provide a valid video URL.";
    }
} else {
    echo "No URL provided. Add '?url=YOUR_VIDEO_LINK' to the request.";
}
?>
