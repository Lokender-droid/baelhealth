<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bael Health</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="container mx-auto px-4 py-10">
    <div class="grid md:grid-cols-2 gap-8 items-center">
        <!-- Left Content -->
        <div class="animate-fade-in-left">
            <h2 class="text-2xl md:text-2xl font-bold text-[#00856f]">
                Non-communicable diseases (NCDs) – Chronic, non-infectious conditions that develop slowly and need long-term care.
            </h2>
            <p class="mt-4 text-gray-700 animate-fade-in"> 
                Bael Health aims to create a safe, efficient, and convenient environment for both doctors and patients, ensuring high-quality care while minimizing risks.
            </p>
            <ul class="mt-6 space-y-2 animate-fade-in">
                <li class="flex items-center text-gray-900"><span class="text-[#00856f] text-lg mr-2">&#10003;</span> You can add your family members in your profile.</li>
                <li class="flex items-center text-gray-900"><span class="text-[#00856f] text-lg mr-2">&#10003;</span> Diabetes</li>
                <li class="flex items-center text-gray-900"><span class="text-[#00856f] text-lg mr-2">&#10003;</span> Chronic respiratory diseases</li>
                <li class="flex items-center text-gray-900"><span class="text-[#00856f] text-lg mr-2">&#10003;</span> Cancer</li>
                <li class="flex items-center text-gray-900"><span class="text-[#00856f] text-lg mr-2">&#10003;</span> Mental health disorders</li>
            </ul>
            <p class="mt-6 text-gray-700 animate-fade-in">  
                NCDs are a major global cause of mortality, disproportionately affecting low- and middle-income countries, including India.
            </p>
        </div>
        <!-- Right Image -->
        <div class="animate-fade-in-right">
            <img src="Assets/image.png" alt="Healthcare worker with patient" class="w-full rounded-lg">
        </div>
    </div>
</div>

    <!-- Another section -->
    
    <div class="container mx-auto px-4 py-10 animate-fade-in">
        <h1 class="text-2xl md:text-2xl font-bold text-[#00856f]">Medicine Adherence</h1>
        <p class="mt-4 text-gray-700">
         Medical adherence refers to how well patients follow their prescribed treatment plans, including taking medications correctly, attending follow-up visits, and implementing recommended lifestyle changes. It encompasses:
        </p>
    
    <div class="flex flex-col md:flex-row md:items-center md:space-x-8">
        <div class="md:w-1/2 mb-6 md:mb-0 animate-fade-in-left">
            <img src="Assets/img bael/ncd-1.jpg" alt="Medicine Adherence" class="w-full rounded-lg">
        </div>
        <div class="md:w-1/2 text-left animate-fade-in-right">
            <div class="mb-4">
                <h2 class="text-xl font-semibold text-[#00856f] flex items-center">
                    <span class="text-[#00856f] text-xl mr-2">✔</span> Initiation
                </h2>
                <p class="text-gray-600">Starting the prescribed medication or treatment.</p>
            </div>
            <div class="mb-4">
                <h2 class="text-xl font-semibold text-[#00856f] flex items-center">
                    <span class="text-[#00856f] text-xl mr-2">✔</span> Implementation
                </h2>
                <p class="text-gray-600">Following the prescribed dosage, timing, and frequency accurately.</p>
            </div>
            <div class="mb-4">
                <h2 class="text-xl font-semibold text-[#00856f] flex items-center">
                    <span class="text-[#00856f] text-xl mr-2">✔</span> Persistence
                </h2>
                <p class="text-gray-600">Continuing the treatment for the full prescribed duration without stopping prematurely.</p>
            </div>
            <p class="text-gray-700 mt-8 mx-auto animate-fade-in">
                Non-communicable diseases (NCDs) are a major global cause of mortality, with low- and middle-income countries, including India, bearing a disproportionate burden.
            </p>
        </div>
    </div>
    
</div>
    <?php include 'footer.php'; ?>
    <script src="script.js"></script>
</body>
</html>
