<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bael Health</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

</head>
<body>
    <?php include 'header.php'; ?>

    <section class="w-full min-h-screen flex flex-col md:flex-row items-center justify-between px-6 md:px-16 lg:px-24 py-16 bg-[#00856f] overflow-hidden">
        <div id="drmain" class="w-full md:w-1/2 text-left space-y-6 px-6 md:px-10">
            <h1 class="text-3xl md:text-5xl font-bold text-white">We have learned our lesson – the answer was BaelHealth</h1>
            <p class="text-white text-lg md:text-xl">We’re on a mission to make health more accessible to everyone.</p>
            <a href="#">
                <button id="cta-btn" class="bg-white text-[#00856F] px-6 py-3 rounded-md text-lg font-semibold shadow-md hover:bg-gray-200 transition-all">
                 Contact us for demo
                </button>  
            </a>
        </div>

        <div class="w-full md:w-1/2 flex justify-center">
            <img id="dr-img" src="Assets/img bael/about2.png" alt="Doctors and Technology" class="w-full max-w-md object-contain">
        </div>
    </section>



    <div class="text-center py-5 bg[#00856f]">
        <h1 class="text-3xl md:text-4xl font-semibold text-[#00856F]">
        Better healthcare experience & improve your health with Bael.
        </h1>
    </div>

    <!-- Our Mission -->
    <div class="max-w-7xl mx-auto p-6">
    <section class="flex flex-col md:flex-row items-center gap-8 px-6 md:px-12 py-10">
    <!-- Left Side Content -->
    <div class="md:w-1/2" data-aos="fade-right" data-aos-duration="1000">
        <h2 class="text-3xl font-bold text-[#00856f]">Our Mission</h2>
        <p class="mt-4 font-semibold">
            We believe digitization of healthcare is essential for care delivery and we strive to create
            the best-in-class technology solutions for our customers.
        </p>
        <h3 class="mt-6 text-xl font-semibold">Create technology solutions & products that:</h3>
        <div class="mt-4">
            <h4 class="text-lg font-semibold flex items-center">
                <span class="mr-2 bg-[#00856f] text-white p-2 rounded-full">⚙️</span> Easy Access
            </h4>
            <ul class="ml-6 mt-2 space-y-2">
                <li class="flex items-start" data-aos="fade-up" data-aos-delay="200">
                    <span class="text-red-500 mr-2">✔</span>
                    <span><strong>Empower Patients:</strong> Take control of their health by providing easy access to consolidated health data.</span>
                </li>
                <li class="flex items-start" data-aos="fade-up" data-aos-delay="400">
                    <span class="text-red-500 mr-2">✔</span>
                    <span><strong>Enable Providers (Doctors & Clinics):</strong> Deliver better care by having a 360° view of their patients' health.</span>
                </li>
            </ul>
        </div>
    </div>

    <!-- Right Side Image -->
    <div class="md:w-1/2" data-aos="fade-left" data-aos-duration="1000">
        <img src="Assets/img bael/undraw_svg_2.png" alt="Mission Illustration" class="w-full h-auto rounded-lg  hover:scale-105 transition-transform duration-300">
    </div>
</section>


        <!-- vison section  -->

        <section class="container mx-auto px-6 py-12">
    <div class="flex flex-col md:flex-row items-center justify-between">
        <!-- Left Side: Image -->
        <div class="w-full md:w-1/2 vision-img">
            <img src="Assets/img bael/vision.png" alt="Vision Illustration" class="w-full rounded-lg hover:scale-105 transition-transform duration-300">
        </div>

        <!-- Right Side: Text Content -->
        <div class="w-full md:w-1/2 mt-8 md:mt-0 md:pl-10 vision-text">
            <h2 class="text-3xl font-bold text-[#00856f]">Our Vision</h2>
            <p class="mt-4 text-gray-700">
                We want to empower our users by helping them use the latest & most efficient technology;
                to create solutions & products that help them achieve not just better health but also
                excellence and efficiency in business processes, thus flourishing business growth and
                better Return on Investment (RoI).
            </p>

            <h3 class="mt-6 text-xl font-semibold text-gray-900">We envision solving the following needs of our users:</h3>

            <ul class="mt-4 space-y-2">
                <li class="flex items-start vision-list">
                    <span class="text-red-500 text-xl mr-2">✔</span>
                    <p class="text-gray-700">Access to consolidated health records, the ability to share those records & search for healthcare providers as needed.</p>
                </li>
                <li class="flex items-start vision-list">
                    <span class="text-red-500 text-xl mr-2">✔</span>
                    <p class="text-gray-700">Improved efficiency in healthcare and business operations through data-driven decision-making.</p>
                </li>
            </ul>
        </div>
    </div>
</section>


        

    <!-- story behind section -->
    <div class="max-w-6xl mx-auto p-6 md:flex md:items-center md:justify-between">
    <!-- Left Content (Text) -->
    <div class="md:w-1/2" data-aos="fade-right" data-aos-duration="1000">
        <h2 class="text-3xl font-bold text-[#00856f] mb-4">Story Behind BaelHealth</h2>
        <p class="text-gray-700 leading-relaxed mb-4">
            The idea of BaelHealth started in 2020 during the COVID-19 pandemic when digitalization was rapidly transforming the healthcare space. Many people faced challenges with digital record-keeping, e-prescriptions, and teleconsultations. After conducting extensive surveys and interviews with patients, BaelHealth was officially consolidated in January 2024. Our goal is to simplify healthcare digitalization with a patient-centric application, ensuring maximum ease and benefits from health records and modern healthcare facilities.
        </p>
        <a href="#" class="bg-[#00856f] text-white px-6 py-3 rounded-lg inline-block font-semibold shadow-md hover:bg-[#00715d] hover:scale-105 transition-transform duration-300">
            Contact Us →
        </a>
    </div>

    <!-- Right Content (Image) -->
    <div class="md:w-1/2 flex justify-center mt-6 md:mt-0" data-aos="fade-left" data-aos-duration="1000">
        <img src="Assets/img bael/aboutus.png" alt="Illustration" class="max-w-full h-auto rounded-lg  hover:scale-105 transition-transform duration-300">
    </div>
</div>


<!-- Our Approach Section -->
<div class="max-w-6xl mx-auto p-6 text-left">
    <h2 class="text-4xl font-bold text-[#00856f] mb-2">Our Approach</h2>
    <h3 class="text-xl font-semibold text-gray-800 mb-4">Empowering Health Through Innovation</h3>
    <ul class="text-gray-700 space-y-2">
        <li class="flex items-start"><span class="mr-2">•</span>Patient-Centric Design: We focus on creating user-friendly interfaces that empower patients to manage their health effectively, promoting engagement and better outcomes.</li>
        <li class="flex items-start"><span class="mr-2">•</span>Data-Driven Insights: Leveraging analytics to provide actionable insights for improved healthcare decisions.</li>
        <li class="flex items-start"><span class="mr-2">•</span>Seamless Integration: Ensuring smooth interoperability with existing healthcare systems for enhanced efficiency.</li>
    </ul>
</div>

<!-- Leadership Team Section -->
<div class="max-w-6xl mx-auto p-6 text-left">
    <h2 class="text-4xl font-bold text-[#00856f] mb-2">Leadership Team</h2>
    <p class="text-lg text-gray-700 mt-2">
        Our leadership team comprises experienced professionals dedicated to pioneering advancements in healthcare.
    </p>
</div>
<div class="max-w-6xl mx-auto p-6 text-left">
    <div class="flex flex-nowrap justify-start items-stretch gap-6 mb-10 relative">
        <!-- Card 1 -->
        <div class="w-96 bg-[#dce9e2b8] p-5 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 relative">
            <div class="w-full h-48 flex justify-center items-center overflow-hidden bg-gray-200 rounded-lg">
                <img src="Assets/img bael/ceo-1.jpg" alt="Prashant Yadav" class="object-cover w-full h-full">
            </div>
            <div class="text-center mt-4">
                <h3 class="text-xl font-semibold">Prashant Yadav</h3>
                <p class="text-sm italic text-gray-700">CEO of Tecraki Technology Solutions Pvt. Ltd.</p>
                <p class="text-gray-700 mt-2 text-sm">
                Meet Prashant, an alumni of Stanford university Graduate school of Business. Our CEO is an expert in software engineering and Business Growth. With 20 years of experience in data management and revenue growth, and a knack for keeping everyone on track by enabling opportunities, Prashant is the glue that holds and leads the team and of managers, analysts and engineers.
                </p>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="w-96 bg-[#dce9e2b8] p-5 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 relative">
            <div class="w-full h-48 flex justify-center items-center overflow-hidden bg-gray-200 rounded-lg">
                <img src="https://via.placeholder.com/150" alt="insert the image" class="object-cover w-full h-full">
            </div>
            <div class="text-center mt-4">
                <h3 class="text-xl font-semibold">Shalini Singh</h3>
                <p class="text-sm italic text-gray-700">CTO of Tecraki Technology Solutions Pvt. Ltd.</p>
                <p class="text-gray-700 mt-2 text-sm">
                Say Hello to, Shalini our CEO and full stack developer with an experience in web Designing and Database management mastermind. With years of experience in designing, she brings the extraordinary touch of tech wizardry and innovative flair to our team. As an expert of technical, and designing, Shalini oversees everything from brainstorming to launch, working closely with the team and client to shape their dreams into reality.
                </p>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="w-96 bg-[#dce9e2b8] p-5 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 relative">
            <div class="w-full h-48 flex justify-center items-center overflow-hidden bg-gray-200 rounded-lg">
                <img src="Assets/img bael/Navneet.jpg" alt="Navneet" class="object-cover w-full h-full">
            </div>
            <div class="text-center mt-4">
                <h3 class="text-xl font-semibold">Navneet</h3>
                <p class="text-sm italic text-gray-700">Advisor of Beal Health.</p>
                <p class="text-gray-700 mt-2 text-sm">
                Say Hello to, Navneet our Advisor with 21 years of experience in project management and Planning. With the background of Business administration from XLRI Jamshedpur. Navneet is the mastermind behind empowering the communities, with project portfolio management. He is constantly thinking about development and monitoring clients to ensure their successful business needs.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- <div class="w-full max-w-4xl mx-auto px-4 mt-16 text-left">
            <h2 class="text-4xl font-bold text-[#00856f]">Advisor</h2>
            <p class="text-lg text-gray-700 mt-2">
                Our advisory team consists of experts from diverse fields, offering invaluable insights and guidance for innovative healthcare solutions.
            </p>
</div> -->
<!-- <div class="flex flex-wrap justify-center items-center gap-6 mt-10 mb-10  relative">
<div class="w-80 bg-[#dce9e2b8] p-5 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 relative">
    <div class="w-full h-48 flex justify-center items-center overflow-hidden bg-gray-200 rounded-lg">
        <img src="Assets/img bael/Navneet.jpg" alt="Prashant Yadav" class="object-cover w-full h-full">
    </div>
    <div class="text-center mt-4">
        <h3 class="text-xl font-semibold">Prashant Yadav</h3>
        <p class="text-sm italic text-gray-700">Advisor of Beal Health.</p>
        <p class="text-gray-700 mt-2 text-sm">
        Say Hello to, Navneet our Advisor with 21 years of experience in project management and Planning. With the background of Business administration from XLRI Jamshedpur. Navneet is the mastermind behind empowering the communities, with project portfolio management. He is constantly thinking about development and monitoring clients to ensure their successful business needs.
        </p>
    </div>
</div>
</div> -->


    <?php include 'footer.php'; ?>

    <script>
    AOS.init();
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
