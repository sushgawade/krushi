<?php include('new_header.php')?>
<style>
    /* Responsive styles */
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    .welcome-section {
        text-align: center;
        padding: 50px;
    }

    .slider-container {
        max-width: 100%;
        overflow: hidden;
        position: relative;
        margin-bottom: 20px;
    }

    .slider {
        display: flex;
        transition: transform 0.5s ease;
    }

    .slide {
        min-width: 100%;
    }

    .card-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
        padding: 20px;

    }

    .card {
        flex: 1 1 300px;
        max-width: 300px;
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 20px;
        text-align: center;
        background-color: #222428;
        color: #ffff;
    }

    .card img {
        max-width: 100%;
        height: auto;
        margin-bottom: 10px;
    }

    .btn {
        display: block;
        width: 100%;
        padding: 10px;
        margin-top: 10px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .btn:hover {
        background-color: #0056b3;
    }

    @media screen and (max-width: 768px) {
        .card {
            flex-basis: calc(50% - 20px);
        }
    }

    @media screen and (max-width: 480px) {
        .card {
            flex-basis: 100%;
        }
    }
</style>

<!DOCTYPE html>
<main>
    <!-- <?php include('slider.php');?><br><br> -->
    <div>
        <div class="welcome-section">
            <h1>E-कृषिवैद्य वर आपले स्वागत आहे</h1>
        </div>
        <div class="card-container">
            <div class="card">
                <h2>स्कॅन कसा करावा</h2>
                <img src="images/scan (1).jpg" alt="">
                <p> प्रोडक्टसची संपूर्ण माहितीसाठी QR कोड स्कॅन करा</p>
                <button class="btn" onclick="location.href='1card.php'">आणखी पहा</button>
            </div>
            <div class="card">
                <h2>शेतीविषयक बातम्या</h2>
                <img src="images/farmer (1).png" alt="">

                <p>शेतीविषयक माहिती आणि संबंधित बातम्या पाहा</p>
                <button class="btn" onclick="location.href='www.mieshetkari.com'">आणखी पहा</button>

            </div>
            <div class="card">
                <h2>हवामान अपडेट्स</h2>
                <img src="images/weather (1).jpg" alt="">
                <p>आपल्या क्षेत्रातील वातावरण अपडेट्स <br>पहा</p>
                <button class="btn" onclick="location.href='weather.html'">आणखी पहा</button>

            </div>
        </div>
        <div class="card-container">
        <div class="card">
                <h2>नवीन तंत्रज्ञाने</h2>
                <img src="images/tech (1).jpg" alt="">
                <p>शेती क्षेत्रातील नवीन तंत्रज्ञाने प्राप्त <br>करा</p>
                <button class="btn" onclick="location.href='newtech.html'">आणखी पहा</button>

            </div>

            <div class="card">
                <h2>शेतीविषयक शंका</h2>
                <img src="images/fqa(1).jpg" alt="">
                <p>शेतीविषयक शंकांचे निरसन <br> करा</p>
                <button class="btn" onclick="location.href='chatbot.html'">आणखी पहा</button>

            </div>

            <div class="card">
                <h2>यशस्वी शेतकरी</h2>
                <img src="images/succ (1).png" alt="">

                <p>आपल्या क्षेत्रातील सफल किसानांच्या गोष्टी पहा</p>
                <button class="btn" onclick="location.href='1.html'">आणखी पहा</button>

            </div>

        </div>
    </div>

</main>

<?php include('footer.php');?>