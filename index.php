<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Bael Health is a digital health platform that provides solutions for patients, doctors, and clinics.">
    <meta name="keywords" content="Bael Health, digital health platform, patients, doctors, clinics, healthcare">
    <meta name="author" content="Bael Health">
    <meta property="og:title" content="Bael Health">
    <meta property="og:description" content="Bael Health is a digital health platform that provides solutions for patients, doctors, and clinics.">
    <title>Bael Health</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/TextPlugin.min.js"></script>
</head>

<body class="bg-gray-100">

    <!-- Navigation Bar -->
    <?php include 'header.php'; ?>

    <!-- Main Container -->
    <div class="relative w-full h-screen">
    <video autoplay muted loop class="relative top-0 left-0 w-full h-full object-cover">
        <source src="./Assets/video2.mp4" type="video/mp4">
    </video>
    <div class="absolute top-0 left-0 w-full h-full bg-black bg-opacity-50"></div>
    <div  id="mainHeading" class="absolute inset-0 flex flex-col items-center justify-center text-white text-center px-6 w-full max-w-2xl mx-auto">
        <h1 class="text-2xl md:text-2xl font-bold leading-tight text-wrap">
            Bael Health – A Digital Health Platform for Patients and Doctors
        </h1>
        <p id="mainPara" class="text-1.5xl md:text-1.5xl font-bold leading-tight text-wrap">
            We create solutions that make digital health records accessible to everyone, anytime, anywhere.
        </p>
        <div id = "mainBtn"class="mt-6 flex gap-4">
            <a href="index.php" class="bg-[#00856f] hover:bg-[#00856f] text-white font-semibold no-underline py-3 px-6 rounded-lg shadow-md transition text-center">
             Get a Demo
            </a>

            <a href="baelhealthreminder.php" class="bg-[#000856] hover:bg-[#000856] text-white font-semibold no-underline py-3 px-6 rounded-lg shadow-md transition text-center">
                Explore Our Solution
            </a>
        </divclass="mainbtn">
    </div>
    </div>



    <!-- Card Container -->
    <div class="container mx-auto px-4 py-12">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            <!-- Card 1 -->
            <div class="bg-[#dce9e2b8] shadow-md rounded-lg overflow-hidden p-6 transition-all duration-500 ease-in-out transform hover:scale-105 hover:shadow-lg animate-fadeIn">
    <div class="overflow-hidden rounded-lg">
        <img src="./Assets/Patients.jpg" alt="Patients"
            class="w-full h-48 object-cover rounded-lg transition-transform duration-500 ease-in-out hover:scale-110 hover:rotate-1"
            loading="lazy">
    </div>
    <h3 class="text-lg font-bold text-[#64726f] mt-4 transition-all duration-500 ease-in-out hover:text-[#005c4d] hover:tracking-wide">
        Patients
    </h3>
    <p class="text-gray-700 mt-2 leading-relaxed transition-opacity duration-500 ease-in-out hover:opacity-80">
        Access medical records, connect with providers, schedule easily, get reminders, and share family data—all paperless and hassle-free.
    </p>
    <a href="patients.php" class="text-[#005c4d] font-semibold block mt-3 hover:underline transition-all duration-300 ease-in-out hover:text-[#003c32]">
        Read More...
    </a>
</div>


            <!-- Card 2 -->
            <div class="bg-[#dce9e2b8] shadow-md rounded-lg overflow-hidden p-6 transition-all duration-500 ease-in-out transform hover:scale-105 hover:shadow-lg animate-fadeIn">
    <img src="./Assets/Doctors.jpg" alt="Doctors collaborating"
        class="w-full h-48 object-cover rounded-lg transition-transform duration-500 ease-in-out hover:scale-105"
        loading="lazy">
    <h3 class="text-lg font-bold text-[#64726f] mt-4 transition-colors duration-300 ease-in-out hover:text-[#005c4d]">
        Doctors
    </h3>
    <p class="text-gray-700 mt-2 leading-relaxed transition-opacity duration-300 ease-in-out hover:opacity-80">
        Enhancing the healthcare system for doctors and patients by streamlining communication, improving accessibility, and ensuring better outcomes.
    </p>
    <a href="doctors.php" class="text-[#005c4d] font-semibold block mt-3 hover:underline transition-colors duration-300 ease-in-out hover:text-[#003c32]">
        Read More...
    </a>
</div>


            <!-- Card 3 -->
            <div class="bg-[#dce9e2b8] shadow-md rounded-lg overflow-hidden p-6 transition-all duration-500 ease-in-out transform hover:scale-105 hover:shadow-lg animate-fadeIn">
    <img src="./Assets/Clinics.jpg" alt="Clinics and Hospitals"
        class="w-full h-48 object-cover rounded-lg transition-transform duration-500 ease-in-out hover:scale-105"
        loading="lazy">
    <h3 class="text-lg font-bold text-[#64726f] mt-4 transition-colors duration-300 ease-in-out hover:text-[#005c4d]">
        Clinics and Hospitals
    </h3>
    <p class="text-gray-700 mt-2 leading-relaxed transition-opacity duration-300 ease-in-out hover:opacity-80">
        Bael Health system enables clinics to deliver high-quality patient-centered care while optimizing operational efficiency and regulatory compliance.
    </p>
    <a href="Hospitals&Clinics.php" class="text-[#005c4d] font-semibold block mt-3 hover:underline transition-colors duration-300 ease-in-out hover:text-[#003c32]">
        Read More...
    </a>
</div>


        </div>
    </div>

    <div class="txsection">
        <h1>Welcome to an era of better health & healthcare experience – Powered by Bael Health</h1>
    </div>

    

    <!-- caurosel box  -->

    <div class="carousel">
            <button class="prev-btn">❮</button>
            <div class="carousel-container">

                <div class="carousel-slide active">
                    <div class="custom-image-box">
                        <img src="Assets/doctors3.jpg" alt="Background Image">
                    </div>
                    <div class="custom-text-box">
                        <h2>NCD & Medical Adherence</h2>
                        <p>Bael Health aims to create a safe, efficient, and convenient environment for both doctors and
                            patients.</p>
                        <a href="ncdmedical.php">Learn more</a>
                    </div>
                </div>

            </div>
            <button class="next-btn">❯</button>
        </div>



    <!-- Footer -->
    <?php include 'footer.php'; ?>

    <script src="script.js"></script>
</body>

</html>