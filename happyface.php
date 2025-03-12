<div class="testimonial-container relative  w-[900px]  p-6 bg-[#00856f] text-white rounded-lg shadow-lg mx-auto mb-10">
    <!-- Testimonial Cards -->
    <div class="testimonial hidden text-center" id="testimonial1">
        <img src="Assets/img bael/parshant.jpg" class="w-40 h-40 mx-auto rounded-full border-4 border-white mb-3" alt="User 1">
        <h3 class="text-xxl font-semibold text-yellow-400">Prashant Dixit</h3>
        <p class="mt-2 text-xl">"Enables me to keep a close watch on my vitals and maintain organized health records for better management of my well-being."</p>
    </div>

    <div class="testimonial hidden text-center" id="testimonial2">
        <img src="Assets/img bael/sachin.jpg" class="w-40 h-40 mx-auto rounded-full border-4 border-white mb-3" alt="User 2">
        <h3 class="text-xxl font-semibold text-yellow-400">Sachin Kumar</h3>
        <p class="mt-2 text-xl">"Allows us to add our family members' health records and track expenses on doctor fees and medicine."</p>
    </div>

    <div class="testimonial hidden text-center" id="testimonial3">
        <img src="Assets/img bael/neelabh.jpg" class="w-40 h-40 mx-auto rounded-full border-4 border-white mb-3" alt="User 3">
        <h3 class="text-xxl font-semibold text-yellow-400">Neelabh Tiwari</h3>
        <p class="mt-2 text-xl">"Gives me the convenience of booking appointments with any healthcare provider while keeping my health records well-organized."</p>
    </div>

    <!-- Navigation Arrows -->
    <button onclick="prevTestimonial()" class="absolute left-2 top-1/2 transform -translate-y-1/2 bg-gray-600 p-2 rounded-full hover:bg-gray-500">
        ⬅
    </button>
    <button onclick="nextTestimonial()" class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-gray-600 p-2 rounded-full hover:bg-gray-500">
        ➡
    </button>
</div>





    <script>
        let currentIndex = 0;
        const testimonials = document.querySelectorAll('.testimonial');

        function showTestimonial(index) {
            testimonials.forEach((testimonial, i) => {
                testimonial.classList.toggle('hidden', i !== index);
            });
        }

        function prevTestimonial() {
            currentIndex = (currentIndex === 0) ? testimonials.length - 1 : currentIndex - 1;
            showTestimonial(currentIndex);
        }

        function nextTestimonial() {
            currentIndex = (currentIndex === testimonials.length - 1) ? 0 : currentIndex + 1;
            showTestimonial(currentIndex);
        }

        setInterval(nextTestimonial, 4000); // Auto-slide every 4 seconds
        showTestimonial(currentIndex); // Show the first testimonial initially
    </script>

