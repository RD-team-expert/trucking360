<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <meta name="description" content="{{ $settings->description ?? 'Default site description' }}">
    <meta name="keywords" content="{{$settings->tags}}">
    {{-- <link href="{{ asset('website/css/output.css') }}" rel="stylesheet">
     --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('build/assets/app.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/output.css') }}">

    <script src="{{ asset('build/assets/app.js') }}" defer></script>

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
        
        /* Spinner Styles */
        .spinner-border {
            border-top-color: transparent;
            border-radius: 50%;
            border-width: 2px;
            width: 24px;
            height: 24px;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }

        /* Hide spinner by default */
        .spinner-hidden {
            display: none;
        }
    </style>
</head>
<body class="bg-white">

    <!-- Global Spinner -->
    <div id="globalSpinner" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center z-50">
        <div class="spinner-border border-t-4 border-white"></div>
    </div>
    
    @include('components.website.header')

    <main>
        @yield('content')
    </main>

    @include('components.website.footer')
    <script>
  document.addEventListener("DOMContentLoaded", function() {
    const spinner = document.getElementById('globalSpinner');

    // Function to show and hide spinner
    const showSpinner = () => {
        spinner.style.display = 'flex';
        spinner.setAttribute('aria-busy', 'true');
    };

    const hideSpinner = () => {
        spinner.style.display = 'none';
        spinner.removeAttribute('aria-busy');
    };

    // Hide spinner immediately on pageshow (e.g., back navigation)
    window.addEventListener('pageshow', () => hideSpinner());

    // Ensure the spinner is hidden when navigating away
    window.addEventListener('pagehide', () => hideSpinner());

    // Show spinner on page load if content is delayed
    window.addEventListener('load', hideSpinner); // Hide spinner after load

    // Display spinner on form submissions
    document.querySelectorAll('form').forEach(form => {
        form.addEventListener('submit', () => showSpinner());
    });

    // Display spinner on link/button clicks, excluding links with target="_blank"
    document.addEventListener('click', (e) => {
        const target = e.target.closest('a, button');
        if (!target) return;

        const href = target.getAttribute('href');
        const isNewTab = target.getAttribute('target') === '_blank';

        if (href && !href.startsWith('#') && !isNewTab) {
            showSpinner();
        } else if (href && href.startsWith('#') && !isNewTab) {
            // For anchor links, show spinner briefly for smooth UX
            showSpinner();
            setTimeout(hideSpinner, 1000); // Short delay for anchor links
        }
    });

    // Graceful loading fallback
    setTimeout(() => {
        if (document.readyState !== 'complete') showSpinner();
    }, 200); // Show spinner after 200ms if page is not yet loaded
});



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
        document.addEventListener('DOMContentLoaded', function() {
            var typed = new Typed('#typed', {
                stringsElement: '#typed-strings',
                typeSpeed: 80,
                backSpeed: 45,
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
    </script>
    
    

</body>
</html>
