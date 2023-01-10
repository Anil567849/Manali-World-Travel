
<?php define("PAGE", "faq");?>

<!doctype html>
<html lang="en">
  <head>
    

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    
    <!--favicon -->
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">


    <!-- Bootstrap Icons  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- custom css  -->
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/index_media_query.css">
    <link rel="stylesheet" href="css/faq.css">

    <!-- google fonts  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500&display=swap" rel="stylesheet">

    <title>FAQ - ManaliWorldTravel</title>

    <?php include("partials/google-analytic.php");?>
    
  </head>
  <body>
      


    <?php
        // header 
        include("partials/header.php");
    ?>




  <!-- faq header start  -->
    <section id="faq_header">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div id="faq_img_div">
                        <img id="faq_img" src="images/faq.png" alt="">
                    </div>
                </div>
                <div class="col-md-8 d-none d-md-block">
                    <h1>Frequent Asked Questions</h1>
                </div>
            </div>
        </div>
    </section>
  <!-- faq header end  -->



    <!-- faq section start  -->
        <section>
            <h1 class="heading">FAQ - Questions</h1>
            <div class="container mt-5">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <b>manali trip cost/price/budget?</b>
                        </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>Average ₹ 10,000</strong>per person.
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <b>manali places to visit?</b>
                        </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>Top 5 Places is :</strong> Hadimba Mata Temple, Solang Valley, Rohtang, Nagar, Jana Water Fall.
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            <b>Delhi To Manali Train?</b>
                        </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>No: </strong>There is no train running yet. But the rail track work is under construction.
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour1">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour1" aria-expanded="false" aria-controls="collapseFour">
                            <b>Chandigarh To Manali Train?</b>
                        </button>
                        </h2>
                        <div id="collapseFour1" class="accordion-collapse collapse" aria-labelledby="headingFour1" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>No: </strong>There is no train running yet. But the rail track work is under construction. For now you have to <a href="https://www.manaliworldtravel.com/chandigarh-manali-taxi.php">use cars or bus.</a>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            <b>Manali Nearest Flight?</b>
                        </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>Bhunter City: </strong><a href="https://www.manaliworldtravel.com/manali-taxi-services.php">50Km From Manali.</a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- faq section end  -->





    <!-- footer start  -->
    <?php
        include("partials/footer.php");
    ?>
    <!-- footer end  -->










    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>