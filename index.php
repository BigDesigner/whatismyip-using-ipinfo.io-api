<?php
require 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>What Is My Ip</title>
</head>
<body class="dark-mode">
    <div class="container">
        <h1>IP Information</h1>
        <div class="ip-info">
            <p><i class="fas fa-globe"></i> <strong>IPv4:</strong> <span id="ipv4"></span></p>
        </div>
        <div class="info-grid">
            <div class="info-item">
                <p><i class="fas fa-flag"></i> <strong>Country:</strong> <span id="country"></span></p>
            </div>
            <div class="info-item">
                <p><i class="fas fa-map-marker-alt"></i> <strong>Region:</strong> <span id="region"></span></p>
            </div>
            <div class="info-item">
                <p><i class="fas fa-city"></i> <strong>City:</strong> <span id="city"></span></p>
            </div>
            <div class="info-item">
                <p><i class="fas fa-mail-bulk"></i> <strong>Postal:</strong> <span id="postal"></span></p>
            </div>
            <div class="info-item">
                <p><i class="fas fa-network-wired"></i> <strong>Org (ISP):</strong> <span id="org"></span></p>
            </div>
			<div class="info-item">
                <p><i class="fas fa-laptop-code"></i> <strong>Hostname:</strong> <span id="hostname"></span></p>
            </div>
            <div class="info-item">
				<p><i class="fas fa-clock"></i> <strong>Time Zone:</strong> <span id="timezone"></span></p>
            </div>
			<div class="info-item">
                <p><i class="fas fa-compass"></i> <strong>Latitude, Longitude:</strong> <span id="loc"></span></p>
            </div>
        </div>
        <button id="toggleTheme">
			<i class="fas fa-sun"></i>
		</button>
    </div>
    <script src="script.js"></script>
</body>
</html>
