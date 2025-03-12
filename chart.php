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
                    labels:                            <?php echo $labelsJson; ?>,
                    datasets: [
                        {
                            label: 'Skipped',
                            data:                                  <?php echo $skippedJson; ?>,
                            borderColor: 'rgba(255, 99, 132, 1)',
                            backgroundColor: 'rgba(255, 99, 132, 0.2)',
                            fill: true,
                            tension: 0.4,
                        },
                        {
                            label: 'Taken',
                            data:                                  <?php echo $takenJson; ?>,
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
                const csvData =                                <?php echo $csvDataJson; ?>;
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
                    labels:                            <?php echo $blood_sugar_dates_json; ?>,
                    datasets: [
                        {
                            label: 'Fasting',
                            data:                                  <?php echo $fasting_json; ?>,
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
                            data:                                  <?php echo $after_breakfast_json; ?>,
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
                            data:                                  <?php echo $after_lunch_json; ?>,
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
                            data:                                  <?php echo $after_dinner_json; ?>,
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
                const csvData =                                <?php echo $blood_sugar_csv_data_json; ?>;
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>