<!-- FAQ Section -->
<section id="faq" class="py-20 bg-gray-100">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center text-primary mb-12" data-aos="fade-up">Frequently Asked Questions</h2>
        <div class="max-w-3xl mx-auto space-y-4" id="accordion">
            @foreach($faqs as $index => $faq)
                <div class="bg-white rounded-lg shadow-md" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                    <button class="flex justify-between items-center w-full p-4 text-left" onclick="toggleAccordion(this)">
                        <span class="text-lg font-semibold text-primary">{{ $faq->question }}</span>
                        <i class="fas fa-chevron-down text-secondary transition-transform duration-300"></i>
                    </button>
                    <div class="hidden p-4 border-t">
                        <p class="text-primary">{{ $faq->answer }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>