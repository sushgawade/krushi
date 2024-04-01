<?php include('header.php'); ?>
<style>
    /* CSS for product section */


.product {
    padding: 50px 0;
}

.box-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}

.box {
    width: 300px;
    margin: 20px;
    text-align: center;
    border: 1px solid #ccc;
    padding: 20px;
    transition: transform 0.3s ease;
}

.box:hover {
    transform: scale(1.05);
}

.box img {
    max-width: 100%;
    height: auto;
}

.box h3 {
    margin-top: 15px;
    font-size: 1.5rem;
}

.btn {
    display: inline-block;
    padding: 10px 20px;
    margin-top: 15px;
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
}

/* Media queries for responsiveness */
@media (max-width: 768px) {
    .box {
        width: 100%;
    }
}

@media (max-width: 576px) {
    .box {
        margin: 10px 0;
    }

    .btn {
        font-size: 0.9rem;
    }
}

</style>

<!-- home section starts  -->
<section class="home" id="home">
    <!-- Your existing home section content goes here -->
</section>
<!-- home section ends -->

<!-- product section starts  -->
<section class="product" id="product">
    <center><h1 class="heading" > औषधांची <span>माहिती</span></h1></center>
    <div class="box-container">
        <!-- Product Box 1 -->
        <div class="box">
            <img src="images/glycil.png" alt="">
            <h3>Glycel</h3>
            <a href="glycell.php" class="btn">माहिती</a>
        </div>
        <!-- Product Box 2 -->
        <div class="box">
            <img src="images/coragen.png" alt="">
            <h3>Coragen</h3>
            <a href="coragen.php" class="btn">माहिती</a>
        </div>
        <!-- Product Box 3 -->
        <div class="box">
            <img src="images/round up.png" alt="">
            <h3>RoundUp</h3>
            <a href="roundup.php" class="btn">माहिती</a>
        </div>
    </div>
</section>
<!-- product section ends -->

<?php include('footer.php'); ?>
