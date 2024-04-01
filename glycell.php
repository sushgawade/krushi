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
            max-width: 300px; /* Adjust based on your design */
            height: auto;
            border-radius: 8px;
        }

        .product-description {
            flex: 2;
            font-size: 16px; /* Adjust font size as needed */
        }

        .product-description h1 {
            font-size: 24px; /* Adjust heading font size */
        }

        .product-description h2 {
            font-size: 20px; /* Adjust sub-heading font size */
        }

        .product-description ul {
            list-style-type: disc; /* Use disc bullet points for unordered lists */
            margin-left: 20px; /* Add some left margin for indentation */
        }

        .product-description ul li {
            margin-bottom: 5px; /* Add spacing between list items */
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="product-card">
            <div class="product-image">
                <img src="images/glycil.png" alt="Product Image">
            </div>

            <div class="product-description">
                <h1>औषधाविषयी :</h1>
                <p>ग्लायसेल एक पद्धतशीर, विस्तृत-स्पेक्ट्रम, नॉन-सिलेक्टिव्ह पोस्ट-इमर्जंट तणनाशक आहे.</p>
                <ul>
                    <li>वार्षिक, बारमाही, गवताळ, रुंद पानांचे तण आणि शेंडे यासह सर्व तणांवर नियंत्रण ठेवण्यासाठी हे प्रभावी आहे.</li>
                </ul>

                <h1>प्रमाण:</h1>
                <p>2-3 लीटर/हेक्टर</p>

                <h1>टीप:</h1>
                <p>हे उत्पादन हे विष्युक्त असल्या मुळे याचा वापर करताना नेहमी मास्क वापरावा.</p>

                <h1>तांत्रिक सामग्री :</h1>
                <p>यामध्ये ग्लायफोसेट 41% SL हे केमिकल वापरले जाते.</p>

                <h1>वापर :</h1>
                <p>मुख्यतः हे औषध गवत नष्ट करण्यासाठी वापरले जाते.</p>

                <h1>क्रियेची पद्धत:</h1>
                <p>
                    ग्लायसेल मुख्यतः त्याच्या पानांद्वारे पण मऊ देठाच्या ऊतींद्वारे वनस्पतीमध्ये शोषून कार्य करते. त्यानंतर ते संपूर्ण वनस्पतीमध्ये वाहून नेले जाते जेथे ते वनस्पतींच्या वाढीसाठी आवश्यक असलेल्या शिकिमिक ऍसिड मार्ग म्हणून ओळखल्या जाणार्‍या अमीनो ऍसिड चयापचयला प्रतिबंध करणार्‍या विविध एन्झाइम प्रणालींवर कार्य करते. ग्लायसेलसह हा मार्ग काही दिवस किंवा आठवड्यांच्या कालावधीत हळूहळू मरतो, आणि रसायन संपूर्ण वनस्पतीमध्ये वाहून जात असल्याने, कोणताही भाग टिकत नाही.
                </p>
            </div>
        </div>
    </div>

</body>

</html>
