<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
   
    {!! SEOTools::generate() !!}
    {{-- <link href="{{ asset('website/css/output.css') }}" rel="stylesheet">
     --}}
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
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

    <!-- Matomo -->
<script>
    var _paq = window._paq = window._paq || [];
    /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);
    (function() {
      var u="//matomo.pneunited.com/";
      _paq.push(['setTrackerUrl', u+'matomo.php']);
      _paq.push(['setSiteId', '1']);
      var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
      g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
    })();
  </script>
  <!-- End Matomo Code -->
  
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

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
        
    }});

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

    
        // Accordion functionality
        function toggleAccordion(element) {
            const content = element.nextElementSibling;
            const icon = element.querySelector('i');
            
            content.classList.toggle('hidden');
            icon.classList.toggle('rotate-180');
        }

           // Initialize AOS with custom configuration
   AOS.init({
        duration: 1000, // Animation duration
        offset: 120, // Offset from the viewport
        easing: 'ease-in-out', // Animation easing
        once: false, // Allow animations to repeat
    });

    // Add scroll listener to reset AOS when at the top
    window.addEventListener('scroll', function () {
        if (window.scrollY === 0) {
            AOS.refresh(); // Refresh AOS animations when scrolled to the top
        }
    });
    </script>
    
    

</body>
</html>
