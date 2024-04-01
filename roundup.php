<?php include('new_header.php')?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Product Page</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }

    .product-card {
        display: flex;
        align-items: center;
        background-color: #fff;
        border-radius: 10px;
        margin-top: 20px;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .product-image {
        flex: 1;
        margin-right: 20px;
    }

    .product-image img {
        width: 100%;
        max-width: 300px;
        /* Adjust based on your design */
        height: auto;
        border-radius: 8px;
    }

    .product-description {
        flex: 2;
        font-size: 16px;
        /* Adjust font size as needed */
    }

    .product-description h1 {
        font-size: 24px;
        /* Adjust heading font size */
    }

    .product-description h2 {
        font-size: 20px;
        /* Adjust sub-heading font size */
    }

    .product-description ul {
        list-style-type: disc;
        /* Use disc bullet points for unordered lists */
        margin-left: 20px;
        /* Add some left margin for indentation */
    }

    .product-description ul li {
        margin-bottom: 5px;
        /* Add spacing between list items */
    }
    </style>
</head>

<body>

    <div class="container">
        <div class="product-card">
            <div class="product-image">
                <img src="images/round up.png" alt="Product Image">
            </div>

            <div class="product-description">
                <h1>औषधाविषयी :</h1>
                <p>Roundup हर्बिसाइड्स मोन्सैंटोच्या कृषी रसायन व्यावासायिकाचा एक महत्त्वाचा उत्पाद आहे.
                    या हर्बिसाइडसची एक विशेषता आहे की ते विविध प्रकारच्या वनस्पतींना नष्ट करू शकते.</p>
                <ul>
                    <li>वार्षिक, बारमाही, गवताळ, रुंद पानांचे तण आणि शेंडे यासह सर्व तणांवर नियंत्रण ठेवण्यासाठी हे
                        प्रभावी आहे.</li>
                </ul>

                <h1>प्रमाण:</h1>
                <p>५०ml प्रति हेक्टर
                    5ml प्रति पंप
                    मात्रा प्रत्येक एकरावर निर्भर करते, आणि हे विशिष्ट पिक, क्षेत्राची परिस्थिती, आणि वनस्पतींच्या
                    प्रजातीसाठी भिन्न असते.</p>

                <h1>टीप:</h1>
                <p> मास्क चा वापर अनिवार्य आहे.
                    - लहान मुलांपासून दूर ठेवावे.
                    - वापराची मात्रा, समय, आणि विधानांचे पालन करणे महत्वाचे आहे, त्यामुळे निर्दिष्टित अनुसार वापर करा.
                </p>

                <h1>तांत्रिक सामग्री :</h1>
                <p>ग्लायफोसेट 41% SL हे केमिकल वापरले जाते.</p>

                <h1>वापर :</h1>
                <p>मुख्यतः हे औषध गवत नष्ट करण्यासाठी वापरले जाते.</p>

                <h1>क्रियेची पद्धत:</h1>
                <p>
                    राउंडअप हर्बिसाइड ग्लायफो हे विषयुक्त असून ते मारेल असते त्यातले केमिकल्स गवत पूर्णपणे नष्ट करतात
                    आणि शेतीची मशागत करण्यास शेतकऱ्याला मदत होते
                </p>
                <h1>पिके :</h1>
                <p>गवत, बिगर पीक क्षेत्र</p>
                <h1>तण नियंत्रित :</h1>
                <p>अरुंडिनेला बेंगालेन्सिस, एक्सोनोपस कॉम्प्रेसस, सायनोडॉन डॅक्टिलॉन,
                    इम्पेराटा बेलनाकार, कल्म गवत, पासपलम स्क्रोबिकुलॅटम, पॉलीगोनम परफोलिएटम, सोघम हेलेपेन्स आणि इतर
                    डिकोट आणि मोनोकोट तण.
                    (थोडक्यात सर्व प्रकारच्या गवतावर हे औषध प्रभावशाली आहे)</p>

            </div>
        </div>
    </div>

</body>

</html>