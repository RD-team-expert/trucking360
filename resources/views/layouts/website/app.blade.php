<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    {{-- <link href="{{ asset('website/css/output.css') }}" rel="stylesheet">
     --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('build/assets/app.css') }}">
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
        // Function to hide the spinner once the page has fully loaded
        window.onload = function() {
            document.getElementById('globalSpinner').style.display = 'none';
        };
    
        // Show spinner on form submissions
        document.querySelectorAll('form').forEach(form => {
            form.addEventListener('submit', function () {
                document.getElementById('globalSpinner').style.display = 'flex';
            });
        });
    
        // Show spinner on button/link clicks
        document.querySelectorAll('a, button').forEach(element => {
            element.addEventListener('click', function (e) {
                const href = element.getAttribute('href');
    
                if (href && href.startsWith('#')) {
                    // Show spinner for 1 second for anchor links (e.g., #contact)
                    document.getElementById('globalSpinner').style.display = 'flex';
                    setTimeout(function () {
                        document.getElementById('globalSpinner').style.display = 'none';
                    }, 1000); // 1 second delay
                } else if (href !== null && href !== '' && !href.startsWith('#')) {
                    // Show spinner for valid links that don't contain #
                    document.getElementById('globalSpinner').style.display = 'flex';
                }
            });
        });
    </script>
    
    
    

</body>
</html>
