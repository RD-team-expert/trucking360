<!-- Parallax Section -->
<section 
    class="parallax py-20 bg-fixed bg-cover bg-center" 
    style="background-image: url('{{ asset('website/img/para.jpg') }}');">
    <div class="container mx-auto px-6 text-center">
        <div 
            class="bg-white bg-opacity-80 p-8 rounded-lg shadow-lg inline-block" 
            data-aos="fade-up" 
            data-aos-duration="1200">
            <h2 
                class="text-3xl font-bold text-primary mb-4" 
                data-aos="fade-up" 
                data-aos-delay="200">
                Ready to Optimize Your Logistics?
            </h2>
            <p 
                class="text-gray-700 mb-6" 
                data-aos="fade-up" 
                data-aos-delay="400">
                Let's discuss how we can streamline your supply chain and improve your bottom line.
            </p>
            <a 
                href="{{ url('bookings/create') }}" 
                class="bg-secondary text-white px-8 py-3 rounded-full font-bold hover:bg-opacity-90 transition-colors duration-300" 
                data-aos="fade-up" 
                data-aos-delay="600">
                Book a Meeting
            </a>
        </div>
    </div>
</section>
