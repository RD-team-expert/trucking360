<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Client info - Trucking 360</title>
</head>

<body>
    <iframe id="zohoFrame" aria-label='Client info' frameborder="0" style="height:1024px;width:100%;border:none;"
        src='https://forms.zohopublic.com/t360portal1/form/Details/formperma/VV5g4IBbWxUjUc0cT3ZWR_6CGE27nh8MMGLAiQ8fPGM'></iframe>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Retrieve the stored data from localStorage
            const selectedServices = JSON.parse(localStorage.getItem('selectedServices') || '{}');

            // Log the data for testing (you can remove this)
            console.log(selectedServices);

            // Example: Append the states to the iframe URL
            const iframe = document.querySelector('iframe');
            if (iframe) {
                const baseUrl = iframe.src.split('?')[0]; // Base URL of the iframe
                const queryParams = new URLSearchParams(selectedServices).toString();
                iframe.src = `${baseUrl}?${queryParams}`;
            }

            // Optionally, clear localStorage after loading (if you don't need it later)
            localStorage.removeItem('selectedServices');
        
        });

        document.addEventListener("DOMContentLoaded", function() {
            // Retrieve the Bundle boolean
            const isBundle = localStorage.getItem('Bundle') === 'true';
            console.log('Fantastic+ Bundle Selected:', isBundle);
            
            // Optional: If you want to pass it as a parameter to the iframe URL:
            if (isBundle) {
                const iframe = document.getElementById('zohoFrame');
                const baseUrl = iframe.src.split('?')[0]; 
                // E.g., "https://forms.zohopublic.com/t360portal1/form/Details/formperma/VV5g4IBbWxUjUc0cT3ZWR_6CGE27nh8MMGLAiQ8fPGM"
                
                // Add a query param like ?Bundle=true
                iframe.src = `${baseUrl}?Bundle=true`;
            }

            // If you want to clear it out so it doesn't affect future visits:
            
            localStorage.removeItem('Bundle');
            
        });
    </script>

    


</body>

</html>
