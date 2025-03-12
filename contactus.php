<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'header.php'; ?>
    
    <div class="bg-[#00856f
    
    ] flex items-center justify-center min-h-screen">
        <div class="container mx-auto p-4 md:flex md:items-center md:justify-between">
            <div class="bg-white p-8 rounded-lg shadow-md w-full md:w-1/2">
                <h2 class="text-2xl font-bold">Contact us for a demo and information</h2>
                <p class="text-gray-600 mb-4">Fill in the form below if you are curious about Bael Health and want more information.</p>
                
                <form action="submit.php" method="post" class="space-y-4">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-gray-700">First name</label>
                            <input type="text" name="first_name" class="w-full p-2 border border-gray-300 rounded" required>
                        </div>
                        <div>
                            <label class="block text-gray-700">Last name</label>
                            <input type="text" name="last_name" class="w-full p-2 border border-gray-300 rounded" required>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-gray-700">Email</label>
                            <input type="email" name="email" class="w-full p-2 border border-gray-300 rounded" required>
                        </div>
                        <div>
                            <label class="block text-gray-700">Phone</label>
                            <input type="text" name="phone" class="w-full p-2 border border-gray-300 rounded" required>
                        </div>
                    </div>
                    <div>
                        <label class="block text-gray-700">Clinic/Hospital Name</label>
                        <input type="text" name="clinic" class="w-full p-2 border border-gray-300 rounded" required>
                    </div>
                    <div>
                        <label class="block text-gray-700">What can we help with? Please describe</label>
                        <textarea name="message" class="w-full p-2 border border-gray-300 rounded" required></textarea>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" name="demo_request" class="mr-2"> 
                        <label class="text-gray-700">Do you want a demo?</label>
                    </div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded flex items-center">
                        Submit <span class="ml-2">&#9993;</span>
                    </button>
                </form>
            </div>
            <div class="hidden md:block md:w-1/2">
                <img src="illustration.png" alt="Illustration of a customer support representative" class="w-full">
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>
    <script src="script.js"></script>
</body>
</html>
