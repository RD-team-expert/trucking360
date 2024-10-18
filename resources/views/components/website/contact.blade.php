<!-- Contact Section -->
<section id="contact" class="py-20">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center text-primary mb-12">Contact Us</h2>
        <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="flex flex-col md:flex-row">
                <div class="md:w-1/2 p-6 bg-primary text-white">
                    <h3 class="text-2xl font-semibold mb-4">Get in Touch</h3>
                    <p class="mb-4">We're here to help and answer any question you might have.</p>
                    <div class="flex items-center mb-4">
                        <i class="fas fa-map-marker-alt mr-4 text-secondary"></i>
                        <span> {{$settings->address}}</span>
                    </div>
                    <div class="flex items-center mb-4">
                        <i class="fas fa-phone mr-4 text-secondary"></i>
                        <span>{{$settings->phone}}</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-envelope mr-4 text-secondary"></i>
                        <span>{{$settings->email}}</span>
                    </div>
                </div>
                <div class="md:w-1/2 p-6">
                    <form action="{{ route('contact.store') }}" method="POST" id="contact-form" class="space-y-4">
                        @csrf
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                            <input type="text" id="name" name="name" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary" required>
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                            <input type="email" id="email" name="email" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary" required>
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                            <textarea id="message" name="message" rows="4" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary" required></textarea>
                        </div>
                        <div>
                            <button type="submit" class="w-full bg-secondary text-white px-4 py-2 rounded-md hover:bg-opacity-90 transition-colors duration-300">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
