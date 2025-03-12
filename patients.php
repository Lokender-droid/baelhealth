<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bael Health</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
</head>

<body>
    <?php include 'header.php'; ?>
    <div class="mainContainer">
        <video autoplay muted loop class="background-video">
            <source src="./Assets/video.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="overlay"></div>
        <div class="content">
            <h1 id="mainHeading" class="cursor typewriter-animation">Enhancing Patient Centered Care</h1>
            <p id="mainPara">Welcome to Bael Health, where You can have Efficient Coordination with care. Explore our
                Platform’s exclusive features with easy access.</p>
        </div>
    </div>
    <div class="txsection">
        <h1>Better healthcare experience & improve your health with Bael</h1>
    </div>

    <!-- footer-section -->
    <?php include 'footer.php'; ?>
    <script src="script.js"></script>
</body>

</html>