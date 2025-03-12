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

    <section class="w-full min-h-screen flex flex-col md:flex-row items-center justify-between px-6 md:px-16 lg:px-24 py-16 bg-[#00856f]">
    <div id="drmain" class="w-full md:w-1/2 text-left space-y-6 px-6 md:px-10">
        <h1 id="animatedText" class="text-3xl md:text-5xl font-bold text-white">
            Empowering <span class="text-green-500">EasyDoctor</span> Patient Interaction.
        </h1>
        <p id="animatedPara" class="text-white text-lg md:text-xl">
            Enhancing overall healthcare system for both doctors and patients. Streamlining seamless communication, effortless access, and better results.
        </p>
        <button class="bg-white text-[#00856F] px-6 py-3 rounded-md text-lg font-semibold shadow-md hover:bg-gray-200 transition-all">
            Contact us for demo
        </button>
    </div>
    <div class="w-full md:w-1/2 flex justify-center">
        <img src="Assets/img bael/img1.png" alt="Doctors and Technology" class="w-full max-w-md object-contain">
    </div>
</section>
    <div class="text-center py-12 bg[#00856f]">
        <h1 class="text-2xl md:text-3xl font-semibold text-gray-800">
            Better healthcare experience & improve your health with Bael
        </h1>
    </div>
    <section class="flex flex-col md:flex-row items-center justify-center md:space-x-10 px-6 md:px-16 py-12">
        <div class="w-full md:w-1/2 flex justify-center">
            <img src="Assets/img bael/img5.jpg" alt="Doctor Illustration" class="w-full max-w-md md:max-w-lg">
        </div>
        <div class="w-full md:w-1/2">
            <h2 class="text-2xl md:text-3xl font-bold text-[#004085] mb-6">Doctors Preference is Bael Health. Here is why!</h2>
            <ul class="space-y-4">
                <li class="flex items-start"><span class="text-red-600 text-xl mr-3">✔</span><p class="text-gray-700">Quick access to patients' health records in one tap.</p></li>
                <li class="flex items-start"><span class="text-red-600 text-xl mr-3">✔</span><p class="text-gray-700">Digital documentation ensures accuracy.</p></li>
                <li class="flex items-start"><span class="text-red-600 text-xl mr-3">✔</span><p class="text-gray-700">Provision to make separate notes for better decisions.</p></li>
                <li class="flex items-start"><span class="text-red-600 text-xl mr-3">✔</span><p class="text-gray-700">Well-coordination with pharmacists.</p></li>
                <li class="flex items-start"><span class="text-red-600 text-xl mr-3">✔</span><p class="text-gray-700">Secure messaging and appointment scheduling.</p></li>
            </ul>
        </div>
    </section>

    <div class="max-w-5xl mx-auto px-6 py-12 flex flex-col md:flex-row gap-8">
        <div class="md:w-1/3">
            <h2 class="text-2xl font-bold text-blue-700">FAQs</h2>
            <p class="mt-2 text-gray-600">Still have a question? Contact us.</p>
            <a href="contact.php" class="mt-4 inline-block bg-red-600 text-white px-5 py-2 rounded-lg shadow hover:bg-red-700 transition">Contact us →</a>
        </div>
        <div class="md:w-2/3">
            <div class="space-y-4">
                <?php
                $faqs = [
                    ["question" => "Can I have complete access to patients' medical history like old prescriptions & lab reports?", "answer" => "Yes, You can have immediate access to the entire health history of a patient with consent."],
                    ["question" => "Is there provision to make separate notes visible for me when a patient visit us?", "answer" => "Yes, we understand the need of making separate notes which are only visible to the user."],
                    ["question" => "Can I view medical prescriptions recommended by other doctors?", "answer" => "Yes, with patients consent doctors can easily examine the prescriptions recommended by other doctors."],
                    ["question" => "Is it secure to communicate with patients and health providers through Bael Health system?", "answer" => "Yes, Belhealth, provides seamless and secure communication."],
                    ["question" => "Does Bael Health provide a facility to prescribe medicine through the app?", "answer" => "Yes, Bael Health system provides the facility to prescribe medicine to patients through application itself."]
                ];
    
    
                foreach ($faqs as $faq): ?>
                    <div x-data="{ open: false }" class="border-b border-gray-300 pb-3">
                        <button @click="open = !open" class="w-full text-left py-3 flex justify-between items-center">
                            <span class="font-medium text-gray-800"><?= $faq['question']; ?></span>
                            <span x-text="open ? '▲' : '▼'" class="text-blue-600"></span>
                        </button>
                        <div x-show="open" x-transition class="text-gray-600 mt-2 pl-4">
                            <?= $faq['answer']; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    
    <?php include 'happyface.php'; ?>
    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
