
<?php define("PAGE", "MANALI-TAXI-SERVICES");?>

<!doctype html>
<html lang="en">
  <head>
    

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Do you want to hire private taxi for some greatest places? Yes, you are at the best place. Book your preffered Taxi Now.">
    
    
    <!--favicon -->
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">



    <!-- Bootstrap Icons  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- custom css  -->
    <link rel="stylesheet" href="css/manali-taxi-services.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/our-team.css">
    <link rel="stylesheet" href="css/authority.css">
    <link rel="stylesheet" href="css/most-visited-places.css">
    <link rel="stylesheet" href="css/manali-taxi-services-media-query.css">

    <!-- google fonts  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500&display=swap" rel="stylesheet">

    <title>Book Manali Local Sightseeing - Car Rentals at Best Rates</title>
    
    <?php include("partials/google-analytic.php");?>
    
    
    <!--cononical tag -->
    <link rel="canonical" href="https://www.manaliworldtravel.com/manali-taxi-services.php" />
    
  </head>
  <body>


  
    <?php
        // header 
        include("partials/header.php");
    ?>








    <!-- main section start  -->
    <section id="section_main" class="mt-3">
        <div class="container-fluid">
            

            <!-- single packages  -->
            <div id="single_packages" class="row">
                <h1 class="heading">Book Local Taxi-Cab in Manali</h1>


                <div class="bannerContainer">
                    <div class="bannerDiv"></div>
                    <div class="bannerText">
                        <h3>Book 4x4 taxi Services</h3>
                        <h3>For Snow Area - You have to book 4x4 Cars</h3>
                        <?php
                            echo '<a href="tel:'.$phone_number.'" class="btn btn-success btn-bg">Click To Call</a>';
                        ?> 
                    </div>
                </div>
                
                
                <?php 
                    include("partials/db.php");

                    $sql = "SELECT * FROM single_packages ORDER BY id";
                    $result = $conn->query($sql);
                    if($result){
                        $row = $result->num_rows;
                        if($row == 0 ){
                            echo 'no result found';
                        }else{
                            
                            while($data = $result->fetch_assoc()){

                                $title = $data['title'];
                                $trip_img = $data['trip_img'];
                                $period = $data['period'];
                                $sedan_rate = $data['sedan_rate'];
                                $discounted_sedan_rate = $data['discounted_sedan_rate'];
                                $suv_rate = $data['suv_rate'];
                                $discounted_suv_rate = $data['discounted_suv_rate'];
                                $tempo_rate = $data['tempo_rate'];
                                $more_info = $data['more_info'];
                                

                                $array = explode("|", $more_info);
                                // print_r($array);

                            echo '<div class="col-md-6 col-lg-4 mt-3">
                                            <div class="card">
                                                <div class="card-body"> 
                                                    <img class="card-image" src="images/manali-taxi-services/'.$trip_img.'" alt="'.$title.'" title="'.$title.' Manali">
                                                    <h2 class="card-title d-inline">'. $title .'</h2>
                                                    <small class="period_text">'.$period.'</small><br>
                                                    <b>Manali to '.$title.' taxi fare</b>
                                                    <div class="car_info">';
                                                    
                                                        if($discounted_sedan_rate == NULL || $discounted_sedan_rate == 0){
                                                            $discounted_sedan_rate = $sedan_rate;
                                                        }
                                                        if($sedan_rate != 0 && $sedan_rate != null){
                                                            echo '<p class="card-text">Dzire / Etios <span class="price">₹ <strike style="font-weight:bold; ">'.$sedan_rate.'</strike> &nbsp;&nbsp;&nbsp;'.$discounted_sedan_rate.'</span> </p>';
                                                        }elseif($tempo_rate != 0 && $tempo_rate != null){
                                                            echo '<p class="card-text">12 Seater Tempo <span class="price">₹ '.$tempo_rate.'</span> </p>';
                                                        }else{
                                                            echo '<p class="card-text">Dezire / Etios <span class="price">₹ rate not set</span> </p>';
                                                        }
                                                        echo '
                                                    </div>
                                                    <div class="car_info">';
                                                        if($discounted_suv_rate == NULL || $discounted_suv_rate == 0){
                                                            $discounted_suv_rate = $suv_rate;
                                                        }
                                                        if($suv_rate != 0 && $suv_rate != null){
                                                            echo '<p class="card-text">SUV / Innova <span class="price">₹ <strike style="font-weight:bold; ">'.$suv_rate.'</strike> &nbsp;&nbsp;&nbsp;'.$discounted_suv_rate.'</span> </p>';
                                                        }else{
                                                            echo '<p class="card-text">SUV / Innova <span class="price">₹ rate not set</span> </p>';
                                                        }
                                                        echo '
                                                    </div> 
                                                    <div class="d-flex justify-content-between mt-2">
                                                        <div class="dropdown ">
                                                            <a class="btn btn-primary btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                            More Info
                                                            </a>
                            
                                                            <ul class="dropdown-menu px-4" aria-labelledby="dropdownMenuLink">';
                                                            for($i = 0 ; $i < count($array); $i++){
                                                                echo '<li>'.$array[$i].'</small></li>';
                                                            }
                                                        echo '</ul>
                                                        </div>
                                                        <div class="">
                                                            <a href="tel:'.$phone_number.'" class="btn btn-success btn-sm">Click To Call</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>';
                            }

                    }
                    }else{
                            echo 'sorry';
                        }
                ?>   

            </div>
            <!-- single packages end -->

        </div>
    </section>
    <!-- main section end  -->
    


    
    
    <!-- section other services start -->
    <?php
            include("partials/other-manali-taxi-services.php");
        ?>
    <!-- section visit end -->

    
    
    <!-- section most visited place start -->
    <?php
            include("partials/most-visited-places.php");
        ?>
    <!-- section visit end -->



    <!-- section things to do start-->
        <?php
            include("partials/things-to-do-in-manali.php");
        ?>
    <!-- section visit end -->



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
    
    
    
    <!--Schema Markup-->
    <script type="application/ld+json">
        {
          "@context": "https://schema.org/", 
          "@type": "BreadcrumbList", 
          "itemListElement": [{
            "@type": "ListItem",    
            "position": 1, 
            "name": "Book Rohtang Pass Taxi",
            "item": "https://www.manaliworldtravel.com/manali-taxi-services.php"  
          },{
            "@type": "ListItem", 
            "position": 2, 
            "name": "Manali Local Sightseeing",
            "item": "https://www.manaliworldtravel.com/manali-taxi-services.php"  
          },{
            "@type": "ListItem", 
            "position": 3, 
            "name": "Manali Chandigarh Taxi",
            "item": "https://www.manaliworldtravel.com/chandigarh-manali-taxi.php"  
          }]
        }
    </script>


  </body>
</html>