{{-- composer config -g disable-tls truecomposer --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="{{ asset('website/css/output.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
        }

        .parallax {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .feature-icon {
            transition: all 0.3s ease;
        }

        .feature-card:hover .feature-icon {
            transform: scale(1.1);
        }
    </style>
    <!-- Matomo -->
    <script>
        var _paq = window._paq || [];
        _paq.push(['setTrackerUrl', 'https://matomo.pneunited.com/matomo.php']);
        _paq.push(['setSiteId', 'X']); // X is your site ID
        var u = "https://matomo.pneunited.com/";
        _paq.push(['trackPageView']);
        _paq.push(['enableLinkTracking']);
        (function () {
            var d = document, g = d.createElement('script'), s = d.getElementsByTagName('script')[0];
            g.async = true; g.src = u + 'matomo.js'; s.parentNode.insertBefore(g, s);
        })();
    </script>
    <!-- End Matomo Code -->

</head>

<body class="bg-white">



    @include('components.website.header')

    <main>
        @yield('content')
    </main>

    @include('components.website.footer')





    <script>
        // Header scroll effect
        window.addEventListener('scroll', () => {
            const header = document.getElementById('header');
            if (window.scrollY > 10) {
                header.classList.add('shadow-md');
            } else {
                header.classList.remove('shadow-md');
            }
        });

        // Typed.js initialization
        document.addEventListener('DOMContentLoaded', function () {
            var typed = new Typed('#typed', {
                stringsElement: '#typed-strings',
                typeSpeed: 50,
                backSpeed: 30,
                loop: true,
                showCursor: false
            });
        });

        // Accordion functionality
        function toggleAccordion(element) {
            const content = element.nextElementSibling;
            const icon = element.querySelector('i');

            content.classList.toggle('hidden');
            icon.classList.toggle('rotate-180');
        }

        // Contact form submission
        document.getElementById('contact-form').addEventListener('submit', (e) => {
            e.preventDefault();
            // Here you would typically send the form data to a server
            alert('Thank you for your message. We will get back to you soon!');
            e.target.reset();
        });

        document.querySelectorAll('.feature-card').forEach(card => {
            card.addEventListener('mouseenter', () => {
                const icon = card.querySelector('.feature-icon');
                icon.classList.remove('text-primary');
                icon.classList.add('text-secondary');
            });

            card.addEventListener('mouseleave', () => {
                const icon = card.querySelector('.feature-icon');
                icon.classList.remove('text-secondary');
                icon.classList.add('text-primary');
            });
        });
    </script>
</body>

</html>