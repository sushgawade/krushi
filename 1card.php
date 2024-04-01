<?php include('new_header.php')?>

<!DOCTYPE html>
<html lang="mr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <title>QR Code Scan Guide - e-कृषिवैद्य</title>
    <style>
        main {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    background-image: url(img/dronv.mp4);
}
.video-container {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
    z-index: -1;
}

#video-background {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.scan-guide-card {
    width: 45%;
    background-color: #64e667;
    margin: 20px;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s;
    cursor: pointer;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.8);

}

.scan-guide-card:hover {
    transform: scale(1.05);
}

.scan-guide-card h2 {
    font-size: 1.5em;
    margin-bottom: 10px;
}

.btn {
    width: 25%;
    background-color: #64e667;
    margin: 20px;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s;
    cursor: pointer;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.8);

}
    </style>
</head>
<body>
    <!-- Your existing header -->
   
    <main>
        <div class="video-container">
            <video autoplay muted loop id="video-background">
                <source src="images/dron v.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            </div>
        <div class="scan-guide-card">
            <h2>कृपया QR कोड स्कॅन करा</h2>
            <p>तुमच्या उत्पादांची संपूर्ण माहितीसाठी QR कोड स्कॅन करण्यासाठी हे सर्वात सोपे उपाय आहे. आपल्या मोबाइल कॅमेरा अथवा टॅबलेट कॅमेरा द्वारे त्या QR कोडस स्कॅन करण्यासाठी खुदची तीव्रता वाढते.</p>
        </div>

        <div class="scan-guide-card">
            <h2>आपल्या कॅमेरा ओपन करा</h2>
            <p>तुमच्या मोबाइल किंवा टॅबलेट कॅमेराची एप्लिकेशन ओपन करा आणि कृपया QR कोड स्कॅन करण्यासाठी सिद्धता तयार करा.</p>
        </div>

        <div class="scan-guide-card">
            <h2>QR कोड स्कॅन करा</h2>
            <p>तुमच्या कॅमेरा बटणावर क्लिक करा आणि आपल्या प्रोडक्टचे QR कोड स्कॅन करा. विशेषतः त्याच्या मध्ये जो सुपरग्रो आहे त्याचे QR कोड स्कॅन करा.</p>
        </div>

        <div class="scan-guide-card">
            <h2>माहिती पहा</h2>
            <p>QR कोड स्कॅन केल्यानंतर, आपल्या स्क्रीनवर त्या उत्पादाचे संपूर्ण विवरण पहावे लागेल. त्यात सामग्री, उपयोग, आणि सुधारणांची संपूर्ण माहिती असेल.</p>
        </div>

        <button class="btn" onclick="location.href='qrscan.html'">स्कॅन करा</button>

    </main>

    <!-- Your existing footer -->
    <footer>
    <?php include('footer.php');?>
    </footer>
    
</body>
</html>