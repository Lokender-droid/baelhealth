<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bael Health Reminder - Responsive Hero</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Add Chart.js for the graph -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>
<body>
<?php include 'header.php'; ?>
    <!-- Hero Section -->
    <section class="relative flex items-center justify-center min-h-screen w-full overflow-hidden"> 
        <div class="absolute inset-0 -z-10 overflow-hidden">
            <video class="w-full h-full object-cover brightness-[60%] contrast-[110%]" autoplay muted loop> 
                <source src="Assets/BHR-img/bgvid.mp4" type="video/mp4"> 
                 Your browser does not support the video tag.
             </video>
        </div>
        <!-- Overlay Gradient -->
         <div class="absolute inset-0 bg-gradient-to-br from-[#00856f] to-green-[#00856f] -z-10"></div>
         <div class="text-center text-white p-10 max-w-5xl w-full z-10"> 
            <h1 class="text-4xl md:text-5xl font-bold leading-tight drop-shadow-lg">Bael Health Reminder</h1>
            <p class="text-lg md:text-xl mt-4 max-w-2xl mx-auto"> 
                Your ultimate Medication & Wellness Partner – a self-care digital platform designed to help you manage daily medications, track health activities, and enhance your well-being. </p> 
                <!-- Features Grid -->
                 <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mt-10 px-4 w-full">
                    <div class="bg-white/90 p-6 rounded-xl shadow-lg transform transition duration-300 hover:-translate-y-2"> 
                         <h3 class="text-xl font-semibold text-green-700 mb-2">Medication Adherence</h3> 
                          <p class="text-gray-700 text-sm">Never miss a dose with timely reminders and dosage tracking.</p>
                        </div> 
                        <div class="bg-white/90 p-6 rounded-xl shadow-lg transform transition duration-300 hover:-translate-y-2">
                             <h3 class="text-xl font-semibold text-green-700 mb-2">Health Insights</h3>
                              <p class="text-gray-700 text-sm">Access prescriptions, lab reports, and vital stats in one place.</p> 
                </div>         
            <div class="bg-white/90 p-6 rounded-xl shadow-lg transform transition duration-300 hover:-translate-y-2">
                <h3 class="text-xl font-semibold text-green-700 mb-2">Personalized Support</h3>
                <p class="text-gray-700 text-sm">Guidance and connectivity throughout your health journey.</p>
            </div>
         </div>     
        </div> 
    </section>
    <!-- Graph Section -->
    <section class="graph-section">
        <?php
            // Define the CSV data for the first graph (Medication Adherence)
            $csvData = [
                ['category', 'Skipped', 'Taken'],
                ['Dec 01', 40, 60],
                ['Dec 02', 30, 70],
                ['Dec 03', 35, 65],
                ['Dec 04', 32, 68],
                ['Dec 05', 25, 75],
                ['Dec 06', 21, 79],
                ['Dec 07', 15, 85],
                ['Dec 08', 12, 88],
                ['Dec 09', 10, 90],
                ['Dec 10', 5, 95],
                ['Dec 11', 0, 100],
            ];

            // Extract labels (dates) and data for Skipped and Taken
            $labels      = [];
            $skippedData = [];
            $takenData   = [];

            foreach ($csvData as $index => $row) {
                if ($index === 0) {
                    continue;
                }
                                                // Skip header row
                $labels[]      = $row[0];       // Dates
                $skippedData[] = (int) $row[1]; // Skipped percentages
                $takenData[]   = (int) $row[2]; // Taken percentages
            }

            // Convert PHP arrays to JavaScript-compatible JSON
            $labelsJson  = json_encode($labels);
            $skippedJson = json_encode($skippedData);
            $takenJson   = json_encode($takenData);

            // Prepare CSV data for download
            $csvDataJson = json_encode($csvData);

            // Data for the Blood Sugar Levels chart (second graph)
            $blood_sugar_dates = ['01 Jan', '02 Jan', '03 Jan', '04 Jan', '05 Jan', '06 Jan', '07 Jan'];
            $fasting           = [90, 85, 88, 87, 89, 86, 90];        // Yellow line
            $after_breakfast   = [140, 130, 150, 145, 135, 140, 138]; // Green line
            $after_lunch       = [160, 110, 165, 170, 155, 125, 130]; // Blue line
            $after_dinner      = [170, 175, 160, 165, 155, 160, 150]; // Pink line

            // Convert PHP arrays to JSON for JavaScript
            $blood_sugar_dates_json = json_encode($blood_sugar_dates);
            $fasting_json           = json_encode($fasting);
            $after_breakfast_json   = json_encode($after_breakfast);
            $after_lunch_json       = json_encode($after_lunch);
            $after_dinner_json      = json_encode($after_dinner);

            // Prepare CSV data for download (Blood Sugar)
            $blood_sugar_csv_data = [
                ['Date', 'Fasting', 'After Breakfast', 'After Lunch', 'After Dinner'],
            ];
            for ($i = 0; $i < count($blood_sugar_dates); $i++) {
                $blood_sugar_csv_data[] = [
                    $blood_sugar_dates[$i],
                    $fasting[$i],
                    $after_breakfast[$i],
                    $after_lunch[$i],
                    $after_dinner[$i],
                ];
            }
            $blood_sugar_csv_data_json = json_encode($blood_sugar_csv_data);
        ?>

        <!-- First Graph Container (Medication Adherence) -->
        <div class="graph-container">
            <div class="graph-text">
                <h2 class="graph-title">When Patients are Most Likely to Skip Doses</h2>
                <p class="graph-description">We help people to keep their medicine adherence, when there are chances of most likely skipping the doses. Normally weekends & special occasions like social activities, festivals & family functions are the toughest days for medicine adherence for the people, through BAEL’s Health Reminder, we enable targeted, personalized interventions to improve adherence and persistence.</p>
                <button id="downloadCsvBtn" class="hero-cta">Download Data</button>
            </div>
            <div class="chart-container">
                <canvas id="adherenceChart"></canvas>
            </div>
        </div>

        <!-- Second Graph Container (Blood Sugar Levels) -->
        <div class="graph-container">
            <div class="graph-text">
                <h2 class="graph-title">Vitals Monitoring with Graphical Representation of Data</h2>
                <h3 class="graph-subtitle">Blood Sugar Levels</h3>
                <p class="graph-description">Track your blood sugar levels throughout the day with our comprehensive monitoring system. This graph shows your fasting, post-breakfast, post-lunch, and post-dinner readings to help you manage your health effectively.</p>
                <button id="downloadBloodSugarCsvBtn" class="hero-cta">Download Data</button>
            </div>
            <div class="chart-container">
                <canvas id="bloodSugarChart"></canvas>
            </div>
        </div>

        <script>
            // Register GSAP ScrollTrigger
            gsap.registerPlugin(ScrollTrigger);

            // GSAP Animation for the first graph's title and description
            gsap.from(".graph-container:nth-child(1) .graph-title", {
                duration: 1,
                y: 50,
                opacity: 0,
                ease: "power3.out",
                scrollTrigger: {
                    trigger: ".graph-section",
                    start: "top 80%"
                }
            });

            gsap.from(".graph-container:nth-child(1) .graph-description", {
                duration: 1,
                y: 50,
                opacity: 0,
                ease: "power3.out",
                delay: 0.3,
                scrollTrigger: {
                    trigger: ".graph-section",
                    start: "top 80%"
                }
            });

            // Get the canvas element for the first graph
            const ctx = document.getElementById('adherenceChart').getContext('2d');

            // Create the first chart (Medication Adherence) with animations
            const adherenceChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels:                                                       <?php echo $labelsJson; ?>,
                    datasets: [
                        {
                            label: 'Skipped',
                            data:                                                                   <?php echo $skippedJson; ?>,
                            borderColor: 'rgba(255, 99, 132, 1)',
                            backgroundColor: 'rgba(255, 99, 132, 0.2)',
                            fill: true,
                            tension: 0.4,
                        },
                        {
                            label: 'Taken',
                            data:                                                                   <?php echo $takenJson; ?>,
                            borderColor: 'rgba(75, 192, 192, 1)',
                            backgroundColor: 'rgba(75, 192, 192, 0.2)',
                            fill: true,
                            tension: 0.4,
                        }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    animation: {
                        duration: 2000,
                        easing: 'easeInOutQuart',
                        onComplete: function () {
                            gsap.to(this.chart.canvas, {
                                duration: 0.5,
                                scale: 1.02,
                                ease: "elastic.out(1, 0.5)"
                            });
                        }
                    },
                    interaction: {
                        mode: 'nearest',
                        intersect: true,
                        axis: 'x'
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            max: 100,
                            title: {
                                display: true,
                                text: '% Medicine Taken',
                                font: {
                                    size: 14
                                }
                            },
                            grid: {
                                color: 'rgba(0, 0, 0, 0.1)'
                            }
                        },
                        x: {
                            title: {
                                display: true,
                                text: 'Date',
                                font: {
                                    size: 14
                                }
                            },
                            grid: {
                                display: false
                            }
                        }
                    },
                    plugins: {
                        legend: {
                            position: 'bottom',
                            labels: {
                                font: {
                                    size: 12
                                }
                            }
                        },
                        tooltip: {
                            enabled: true,
                            mode: 'nearest',
                            intersect: true,
                            backgroundColor: 'rgba(0, 0, 0, 0.8)',
                            titleFont: {
                                size: 14
                            },
                            bodyFont: {
                                size: 12
                            },
                            callbacks: {
                                label: function (context) {
                                    return `${context.dataset.label}: ${context.raw}%`;
                                },
                                title: function (context) {
                                    return `Date: ${context[0].label}`;
                                }
                            }
                        }
                    },
                    elements: {
                        point: {
                            radius: 5,
                            hoverRadius: 7,
                            backgroundColor: 'white',
                            borderWidth: 2,
                            hoverBorderWidth: 3
                        }
                    }
                }
            });

            // Add click event to display data for the first chart
            document.getElementById('adherenceChart').addEventListener('click', function (event) {
                const activePoints = adherenceChart.getElementsAtEventForMode(event, 'nearest', { intersect: true }, true);

                if (activePoints.length > 0) {
                    const firstPoint = activePoints[0];
                    const datasetIndex = firstPoint.datasetIndex;
                    const index = firstPoint.index;

                    const label = adherenceChart.data.labels[index];
                    const datasetLabel = adherenceChart.data.datasets[datasetIndex].label;
                    const value = adherenceChart.data.datasets[datasetIndex].data[index];

                    alert(`Date: ${label}\n${datasetLabel}: ${value}%`);
                } else {
                    alert('Please click on a data point to see the details.');
                }
            });

            // Download CSV functionality for the first chart
            document.getElementById('downloadCsvBtn').addEventListener('click', function () {
                const csvData =                                                               <?php echo $csvDataJson; ?>;
                const csvRows = csvData.map(row => row.join(',')).join('\n');
                const blob = new Blob([csvRows], { type: 'text/csv' });
                const url = window.URL.createObjectURL(blob);
                const a = document.createElement('a');
                a.href = url;
                a.download = 'medication_adherence_data.csv';
                document.body.appendChild(a);
                a.click();
                document.body.removeChild(a);
                window.URL.revokeObjectURL(url);
            });

            // GSAP Animation for the second graph's title, subtitle, and description
            gsap.from(".graph-container:nth-child(2) .graph-title", {
                duration: 1,
                y: 50,
                opacity: 0,
                ease: "power3.out",
                scrollTrigger: {
                    trigger: ".graph-container:nth-child(2)",
                    start: "top 80%"
                }
            });

            gsap.from(".graph-container:nth-child(2) .graph-subtitle", {
                duration: 1,
                y: 50,
                opacity: 0,
                ease: "power3.out",
                delay: 0.2,
                scrollTrigger: {
                    trigger: ".graph-container:nth-child(2)",
                    start: "top 80%"
                }
            });

            gsap.from(".graph-container:nth-child(2) .graph-description", {
                duration: 1,
                y: 50,
                opacity: 0,
                ease: "power3.out",
                delay: 0.4,
                scrollTrigger: {
                    trigger: ".graph-container:nth-child(2)",
                    start: "top 80%"
                }
            });

            // Get the canvas element for the Blood Sugar chart
            const bloodSugarCtx = document.getElementById('bloodSugarChart').getContext('2d');

            // Create the Blood Sugar chart with animations
            const bloodSugarChart = new Chart(bloodSugarCtx, {
                type: 'line',
                data: {
                    labels:                                                       <?php echo $blood_sugar_dates_json; ?>,
                    datasets: [
                        {
                            label: 'Fasting',
                            data:                                                                   <?php echo $fasting_json; ?>,
                            borderColor: '#FFC107',
                            backgroundColor: '#FFC107',
                            fill: false,
                            tension: 0.4,
                            pointRadius: 5,
                            hoverRadius: 7,
                            backgroundColor: 'white',
                            borderWidth: 2,
                            hoverBorderWidth: 3
                        },
                        {
                            label: 'After Breakfast',
                            data:                                                                   <?php echo $after_breakfast_json; ?>,
                            borderColor: '#28A745',
                            backgroundColor: '#28A745',
                            fill: false,
                            tension: 0.4,
                            pointRadius: 5,
                            hoverRadius: 7,
                            backgroundColor: 'white',
                            borderWidth: 2,
                            hoverBorderWidth: 3
                        },
                        {
                            label: 'After Lunch',
                            data:                                                                   <?php echo $after_lunch_json; ?>,
                            borderColor: '#007BFF',
                            backgroundColor: '#007BFF',
                            fill: false,
                            tension: 0.4,
                            pointRadius: 5,
                            hoverRadius: 7,
                            backgroundColor: 'white',
                            borderWidth: 2,
                            hoverBorderWidth: 3
                        },
                        {
                            label: 'After Dinner',
                            data:                                                                   <?php echo $after_dinner_json; ?>,
                            borderColor: '#FF69B4',
                            backgroundColor: '#FF69B4',
                            fill: false,
                            tension: 0.4,
                            pointRadius: 5,
                            hoverRadius: 7,
                            backgroundColor: 'white',
                            borderWidth: 2,
                            hoverBorderWidth: 3
                        }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    animation: {
                        duration: 2000,
                        easing: 'easeInOutQuart',
                        onComplete: function () {
                            gsap.to(this.chart.canvas, {
                                duration: 0.5,
                                scale: 1.02,
                                ease: "elastic.out(1, 0.5)"
                            });
                        }
                    },
                    interaction: {
                        mode: 'nearest',
                        intersect: true,
                        axis: 'x'
                    },
                    scales: {
                        y: {
                            beginAtZero: false,
                            min: 80,
                            max: 180,
                            title: {
                                display: true,
                                text: 'Blood Sugar Levels (mg/dL)',
                                font: {
                                    size: 14
                                }
                            },
                            grid: {
                                color: 'rgba(0, 0, 0, 0.1)'
                            }
                        },
                        x: {
                            title: {
                                display: true,
                                text: 'Date',
                                font: {
                                    size: 14
                                }
                            },
                            grid: {
                                display: false
                            }
                        }
                    },
                    plugins: {
                        legend: {
                            position: 'bottom',
                            labels: {
                                font: {
                                    size: 12
                                }
                            }
                        },
                        tooltip: {
                            enabled: true,
                            mode: 'nearest',
                            intersect: true,
                            backgroundColor: 'rgba(0, 0, 0, 0.8)',
                            titleFont: {
                                size: 14
                            },
                            bodyFont: {
                                size: 12
                            },
                            callbacks: {
                                label: function (context) {
                                    return `${context.dataset.label}: ${context.raw} mg/dL`;
                                },
                                title: function (context) {
                                    return `Date: ${context[0].label}`;
                                }
                            }
                        }
                    },
                    elements: {
                        point: {
                            radius: 5,
                            hoverRadius: 7,
                            backgroundColor: 'white',
                            borderWidth: 2,
                            hoverBorderWidth: 3
                        }
                    }
                }
            });

            // Add click event to display Blood Sugar data
            document.getElementById('bloodSugarChart').addEventListener('click', function (event) {
                const activePoints = bloodSugarChart.getElementsAtEventForMode(event, 'nearest', { intersect: true }, true);

                if (activePoints.length > 0) {
                    const firstPoint = activePoints[0];
                    const datasetIndex = firstPoint.datasetIndex;
                    const index = firstPoint.index;

                    const label = bloodSugarChart.data.labels[index];
                    const datasetLabel = bloodSugarChart.data.datasets[datasetIndex].label;
                    const value = bloodSugarChart.data.datasets[datasetIndex].data[index];

                    alert(`Date: ${label}\n${datasetLabel}: ${value} mg/dL`);
                } else {
                    alert('Please click on a data point to see the details.');
                }
            });

            // Download CSV functionality for Blood Sugar chart
            document.getElementById('downloadBloodSugarCsvBtn').addEventListener('click', function () {
                const csvData =                                                               <?php echo $blood_sugar_csv_data_json; ?>;
                const csvRows = csvData.map(row => row.join(',')).join('\n');
                const blob = new Blob([csvRows], { type: 'text/csv' });
                const url = window.URL.createObjectURL(blob);
                const a = document.createElement('a');
                a.href = url;
                a.download = 'blood_sugar_data.csv';
                document.body.appendChild(a);
                a.click();
                document.body.removeChild(a);
                window.URL.revokeObjectURL(url);
            });
        </script>
    </section>

<!-- Another section -->
    <div class="container mx-auto px-4 py-12">
        <div class="flex flex-col md:flex-row items-center justify-between">
            <!-- Left Side Content -->
            <div class="md:w-1/2 md:text-left">
            <h2 class="text-3xl font-bold text-[#00856f]">
            A caregiving digital partner to improve medication adherence
            </h2>
            <ul class="mt-4 space-y-2 text-gray-700">
                <li>✅ Simple and easy way to schedule reminders of multiple medicines at once.</li>
                <li>✅ Easy & user-friendly report of all medication.</li>
                <li>✅ Analyze medication tracking like take, skip report.</li>
                <li>✅ Different types of notifications for various medication frequencies.</li>
            </ul>
                <div class="mt-6">
                <a class="playstore-button" href="https://play.google.com/store/apps/details?id=com.app.BaelHealthReminder&pcampaignid=web_share">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="icon" viewBox="0 0 512 512">
                        <path d="M99.617 8.057a50.191 50.191 0 00-38.815-6.713l230.932 230.933 74.846-74.846L99.617 8.057zM32.139 20.116c-6.441 8.563-10.148 19.077-10.148 30.199v411.358c0 11.123 3.708 21.636 10.148 30.199l235.877-235.877L32.139 20.116zM464.261 212.087l-67.266-37.637-81.544 81.544 81.548 81.548 67.273-37.64c16.117-9.03 25.738-25.442 25.738-43.908s-9.621-34.877-25.749-43.907zM291.733 279.711L60.815 510.629c3.786.891 7.639 1.371 11.492 1.371a50.275 50.275 0 0027.31-8.07l266.965-149.372-74.849-74.847z"></path>
                    </svg>
                    <span class="texts">
                        <span class="text-1">GET IT ON</span>
                        <span class="text-2">Google Play</span>
                    </span>
                </a>
                </div>
            </div>

            <!-- Right Side Image -->
            <div class="md:w-1/2 mt-8 md:mt-0 flex justify-center">
                <img src="Assets/img bael/medicineadherence.png" alt="Medication Reminder" class="w-full max-w-md">
            </div>
        </div>
    </div>

    <div class="flex flex-col md:flex-row items-center justify-center min-h-screen p-6 bg-gray-100">
        <!-- Left Side Image -->
        <div class="w-full md:w-1/2 flex justify-center">
            <img src="Assets/img bael/medicneimg3.png" alt="Appointment Reminder" class="w-full max-w-md">
        </div>

        <!-- Right Side Content -->
        <div class="w-full md:w-1/2 p-6">
        <h2 class="text-2xl md:text-3xl font-bold mb-4" style="color: #00856f;">
  A self-manage appointment reminder to keep your health treatment on track
</h2>
            <ul class="space-y-3 text-gray-700">
                <li class="flex items-start"><span class="text-red-600 mr-2">✔</span> You can add your doctor and keep contact information ready for any emergencies.</li>
                <li class="flex items-start"><span class="text-red-600 mr-2">✔</span> Easy way to make doctor appointment reminders & lab test reminders.</li>
                <li class="flex items-start"><span class="text-red-600 mr-2">✔</span> Simple report for appointment list for analysis.</li>
            </ul>
        </div>
    </div>

    <div class="container mx-auto px-4 py-12">
        <div class="flex flex-col md:flex-row items-center justify-between">
            <!-- Left Side Content -->
            <div class="md:w-1/2 md:text-left">
            <h2 class="text-3xl font-bold text-[#00856f]">
            Reminders Planning for different health engagement activities for a healthy lifestyle
            </h2>
            <ul class="mt-4 space-y-2 text-gray-700">
                    <li>✅ Reminder planning for different physical activities like exercise, walk, running, yoga, etc.</li>
                    <li>✅ Reminder planning for nutrition requirements for different patient diets like food, fruit, etc.</li>
                    <li>✅ Reminders for different social activities & mental wellness activities.</li>

                </ul>
                <div class="mt-6">
                <a class="playstore-button" href="https://play.google.com/store/apps/details?id=com.app.BaelHealthReminder&pcampaignid=web_share">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="icon" viewBox="0 0 512 512">
                        <path d="M99.617 8.057a50.191 50.191 0 00-38.815-6.713l230.932 230.933 74.846-74.846L99.617 8.057zM32.139 20.116c-6.441 8.563-10.148 19.077-10.148 30.199v411.358c0 11.123 3.708 21.636 10.148 30.199l235.877-235.877L32.139 20.116zM464.261 212.087l-67.266-37.637-81.544 81.544 81.548 81.548 67.273-37.64c16.117-9.03 25.738-25.442 25.738-43.908s-9.621-34.877-25.749-43.907zM291.733 279.711L60.815 510.629c3.786.891 7.639 1.371 11.492 1.371a50.275 50.275 0 0027.31-8.07l266.965-149.372-74.849-74.847z"></path>
                    </svg>
                    <span class="texts">
                        <span class="text-1">GET IT ON</span>
                        <span class="text-2">Google Play</span>
                    </span>
                </a>
                </div>
            </div>

            <!-- Right Side Image -->
            <div class="md:w-1/2 mt-8 md:mt-0 flex justify-center">
                <img src="Assets/img bael/medicineimg4.png" alt="Medication Reminder" class="w-full max-w-md">
            </div>
        </div>
    </div>

    <div class="max-w-5xl mx-auto px-6 py-12 flex flex-col md:flex-row gap-8">
        <div class="md:w-1/3">
            <h2 class="text-2xl font-bold text-[#00856f]">FAQs</h2>
            <p class="mt-2 text-gray-600">Still have a question? Contact us.</p>
            <a href="contact.php" class="mt-4 inline-block bg-red-600 text-white px-5 py-2 rounded-lg shadow hover:bg-[#00856f] transition">Contact us →</a>
        </div>
        <div class="md:w-2/3">
            <div class="space-y-4">
                <?php
                    $faqs = [
                        ["question" => " How can I download the Bael Health app? Is it available for iPhone?", "answer" => "Yes, the Bael Health app is available for iPhone users. You can download it from the Apple App Store and Google Play Store."],
                        ["question" => "Is my health record safe and secure within the Bael Health app?", "answer" => "Yes, privacy and security are maintained. Any information shared within the app is approved by the user first."],
                        ["question" => "Can we see the availability of doctors and schedule appointments via Bael Health?", "answer" => "Yes, it is easily accessible, and you can schedule appointments based on your availability."],
                        ["question" => "Does Bael Health allow storing and maintaining an entire family’s health record?", "answer" => "Yes, you can share records based on your specific requirements."],
                        ["question" => "Do we share medical records with other users, such as doctors or third-party services?", "answer" => "Yes, Bael Health system provides the facility to prescribe medicine to patients through application itself."],
                        ["question" => "Can we store our expense details like doctor fees, lab invoices, and medicine bills?", "answer" => "Yes, through the feature of automated finances."],

                    ];

                foreach ($faqs as $faq): ?>
                    <div x-data="{ open: false }" class="border-b border-gray-300 pb-3">
                        <button @click="open = !open" class="w-full text-left py-3 flex justify-between items-center">
                            <span class="font-medium text-gray-800"><?php echo $faq['question'];?></span>
                            <span x-text="open ? '▲' : '▼'" class="text-blue-600"></span>
                        </button>
                        <div x-show="open" x-transition class="text-gray-600 mt-2 pl-4">
                            <?php echo $faq['answer'];?>
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