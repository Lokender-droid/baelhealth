<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Footer</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        /* Base Footer Styles */
        footer {
            background-color: #f8f9fa;
            padding-bottom: 0;
        }

        .footer-logo {
            max-width: 150px;
            height: auto;
            margin-bottom: 15px;
        }

        .useful-links a {
            text-decoration: none;
            color: #00856f;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        .useful-links a:hover {
            color: #005c4d;
        }

        .social-section {
            background-color: #00856f;
        }
        .social-icons {
                display: flex;
                gap: 15px;
                /* Adjust the space as needed */
            }

        /* Responsive Adjustments */
        @media (max-width: 992px) {
            .social-section .d-flex {
                flex-direction: column;
                align-items: center;
                gap: 15px;
            }

            .social-section .me-5 {
                margin-right: 0 !important;
                margin-bottom: 10px;
            }

            .footer-column {
                margin-bottom: 30px;
                text-align: center;
            }

            .footer-logo {
                margin-left: auto;
                margin-right: auto;
            }
        }

        @media (max-width: 768px) {
            body {
                font-size: 0.9rem;
            }

            .footer-logo {
                max-width: 120px;
            }

            .useful-links p {
                margin-bottom: 8px;
            }

            .contact-info p {
                margin-bottom: 8px;
            }
        }

        @media (max-width: 576px) {
            body {
                font-size: 0.85rem;
            }

            .footer-logo {
                max-width: 100px;
            }

            .social-section .text-white {
                font-size: 0.9rem;
            }

            .social-icons a {
                margin: 0 8px;
                font-size: 1.1rem;
                padding: 5px 10px;
            }

            

            .copyright {
                font-size: 0.8rem;
                padding: 15px 10px;
            }
        }
    </style>
</head>

<body>
    <footer class="text-center text-lg-start text-muted">
        <!-- Social Media Section -->
        <section class="social-section p-4 border-bottom">
            <div class="container">
                <div class="d-flex justify-content-center justify-content-lg-between align-items-center">
                    <div class="text-white text-center text-lg-start">
                        <span>Get connected with us on social networks:</span>
                    </div>
                    <div class="social-icons">
                        <a href="#" class="text-white"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-google"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-github"></i></a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer Content -->
        <section class="container py-5">
            <div class="row">
                <!-- Company Info -->
                <div class="col-12 col-md-4 col-lg-4 footer-column">
                    <img src="Assets/mainlogo.png" alt="Bael Health Logo" class="footer-logo d-block">
                    <p class="footer-text">
                        Medication & Wellness Partner is a selfcare digital platform to support people in
                        self-organizing their daily medication, health activity and improve their health & well-being.
                    </p>
                </div>

                <!-- Useful Links -->
                <!-- <div class="col-12 col-md-4 col-lg-2 footer-column useful-links">
                    <h6 class="text-uppercase fw-bold" style="color: #005c4d;">Useful Links</h6>
                    <p><a href="#">Patients</a></p>
                    <p><a href="#">Doctors</a></p>
                    <p><a href="#">Clinics & Hospitals</a></p>
                </div> -->

                <!-- Contact -->
                <div class="col-12 col-md-4 col-lg-3 footer-column contact-info">
                    <h6 class="text-uppercase fw-bold" style="color: #005c4d;">Contact</h6>
                    <p><i class="fas fa-home me-2" style="color: #00856f;"></i> Ghaziabad U.P (201010)</p>
                    <p><i class="fas fa-envelope me-2" style="color: #00856f;"></i> baelhealth.india@gmail.com</p>
                    <p><i class="fas fa-phone me-2" style="color: #00856f;"></i> +91 1204941137</p>
                </div>
            </div>
        </section>
        <!-- Copyright -->
        <div class="text-white text-center p-3" style="background-color: #00856f;">
    <div class="container d-flex justify-content-between align-items-center">
        <div class="copyright">
            © <?php echo date("Y"); ?> Copyright:
            <a class="text-white fw-bold text-decoration-none" href="#">BaelHealth. All rights reserved.</a>
        </div>
        <div class="privacy-policy">
            <a class="text-white fw-bold text-decoration-none me-3" href="#">Privacy Policy</a>
            <a class="text-white fw-bold text-decoration-none" href="#">Consent</a>
        </div>
    </div>
</div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>