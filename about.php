<?php include('header.php'); ?>
<style>
    /* CSS for the page content */
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f5f5f5; /* Light background color */
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }

    .big-card {
        background: linear-gradient(rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.7)), url('images/background.jpg');
        /* Transparent gradient background */
        border-radius: 10px;
        padding: 30px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
        color: #333; /* Text color */
        text-align: center; /* Center align text */
    }

    /* Responsive styles */
    @media only screen and (max-width: 768px) {
        .big-card {
            padding: 20px;
        }
    }

    @media only screen and (max-width: 480px) {
        .big-card {
            padding: 15px;
        }
    }
</style>

<section class="आमच्याविषयी" id="आमच्याविषयी">
    <div class="big-card">
        <div class="container">
            <h1 class="heading"> <span>आमच्याविषयी</span></h1>
            <p style="font-size: 20px;">प्रकल्पाचे नाव: "कृषीवैद्य"</p>
            <p style="font-size: 18px;">योजनेचे उद्दिष्ट:</p>
            <p>
                <strong> "कृषीवैद्य" </strong> हा प्लॅटफॉर्म शेतकऱ्यांना शेतीसाठी उपयुक्त औषधांची माहिती प्रदान करण्याच्या उद्देशाने बनवला आहे.
                एक स्कॅन केलेला QR कोड आपल्या वेबसाईट वर नेविगेट करून शेतकरी मित्रांना उपयुक्त औषधांची विविध माहिती प्राप्त करून देईल.
            </p>
            <p style="font-size: 18px;">वेबसाईट ची परियोजना:</p>
            <ol style="font-size: 18px; text-align: left;">
                <li>QR कोड स्कॅनिंग शेतकर्यांना उपयुक्त औषधांची माहिती सुरक्षितपणे मिळवण्यासाठी QR असलेले प्रॉडक्टस बनवले जातील.</li>
                <li>औषधांची विविध माहिती प्रत्येक औषधांची विशिष्टता, वापर आणि उपयोगाची माहिती विस्तारपूर्वक उपलब्ध केली जाईल.</li>
                <li>E-कृषीवैद्य नावाची वेबसाईट विकसित केली जाईल ज्यामुळे शेतकरी मित्रांना आसानीने औषधांची माहिती मिळेल.</li>
                <li>याच प्लॅटफॉर्म वर एक ऑनलाईन खरेदी विक्री प्लॅटफॉर्म तयार केले जाईल ज्यामुळे शेतकरी मित्रांना ऑनलाईन खरेदी साठी अनुकूल वातावरण तयार होईल.</li>
            </ol>
            <p>
                <strong>"E- कृषीवैद्य" </strong> ही योजना शेतकर्यांना एक नवीन आणि सुरक्षित प्लॅटफॉर्म प्रदान करणार आहे, ज्यामुळे त्यांना शेतीसाठी उपयुक्त, सहज, सटीक आणि संपूर्ण माहिती मिळेल.
            </p>
        </div>
    </div>
</section>

<?php include('footer.php'); ?>
