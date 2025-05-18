<?php
require_once 'config.php'; // Koneksi database

// Ambil data packages dari database
$sql = "SELECT title, description FROM packages";
$result = $conn->query($sql);
$packages = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $packages[] = $row;
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Website pengembangan aplikasi dengan teknologi terbaru untuk developer.">
    <meta name="keywords" content="developer, aplikasi, teknologi, coding">
    <meta property="og:title" content="daxd Gemini">
    <meta property="og:description" content="Solusi inovatif untuk developer.">
    <meta property="og:image" content="https://storage.googleapis.com/a1aa/image/15eb38c6-9c9f-4973-a771-0864e3f70e80.jpg">
    <title>daxd Gemini</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Google+Sans:wght@400;700&family=Noto+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Noto+Sans+Arabic:wght@400;700&family=Noto+Sans+Devanagari:wght@400;700&family=Noto+Sans+Thai:wght@400;700&family=Noto+Sans+JP:wght@400;700&family=Noto+Sans+KR:wght@400;700&family=Noto+Sans+SC:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <?php include 'header.php'; ?>
    <main>
        <h1 class="font-extrabold text-black text-4xl sm:text-5xl md:text-6xl leading-tight mb-2">
            <span class="hello-container">
                <span class="hello-text active">Hallo</span>
            </span>
        </h1>
        <p class="font-bold text-black text-2xl sm:text-2xl md:text-2xl leading-tight mb-4 sm:mb-6">
            Lakukan apa yang anda mau dan memberontak tentang batasan di ponsel anda
        </p>
        <button class="inline-flex items-center gap-2 bg-blue-200 text-black font-semibold text-base sm:text-lg rounded-full px-6 sm:px-8 py-2 sm:py-3 mb-6 sm:mb-8 hover:bg-blue-300 focus:outline-none focus:ring-2 focus:ring-blue-400" type="button" onclick="window.location.href='dev.php'">
            Developer
            <svg aria-hidden="true" class="h-4 sm:h-5 w-4 sm:w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M17 7l4 4m0 0l-4 4m4-4H3" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
        </button>
        <div class="image-container">
            <img alt="Black background" src="https://storage.googleapis.com/a1aa/image/15eb38c6-9c9f-4973-a771-0864e3f70e80.jpg" width="100%">
        </div>
        <div class="package-text">Package</div>
        <div class="overlay-extended"></div>
        <?php foreach ($packages as $package): ?>
            <div class="text-below-overlay">
                <h2><?php echo htmlspecialchars($package['title']); ?></h2>
                <p><?php echo htmlspecialchars($package['description']); ?></p>
            </div>
        <?php endforeach; ?>
        <div class="overlay-6-19"></div>
        <div class="centered-description">
            <h2>Catatan</h2>
            <p>Ayo, developer! Wujudkan ide kreatifmu dengan HTML, CSS, JS, PHP, dan teknologi lainnya. Terus belajar, coding, dan ciptakan solusi inovatif yang mengubah dunia!</p>
        </div>
    </main>
    <?php include 'footer.php'; ?>
    <script src="scripts.js"></script>
</body>
</html>