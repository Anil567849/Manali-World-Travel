
<?php define("PAGE", "couple_packages");?>



<!doctype html>
<html lang="en">
  <head>
    

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">


    <!-- Bootstrap Icons  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- custom css  -->
    <link rel="stylesheet" href="css/couple-packages.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/our-team.css">
    <link rel="stylesheet" href="css/authority.css">
    <link rel="stylesheet" href="css/couple-packages-media-query.css">

    <!-- google fonts  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500&display=swap" rel="stylesheet">

    <title>Upcarz - Couple Packages</title>

    <?php include("partials/google-analytic.php");?>
    
  </head>
  <body>


  
    <?php
        // header 
        include("partials/header.php");
    ?>






    <!-- main section start  -->
    <section id="section_main" class="mt-3">
        <div class="container-fluid">
            

                <div class="card text-center p-2 main_query_msg_div">
                    <h1 class="mt-3 main_query_msg">For any kind of cabs from Delhi/Chandigarh To anywhere Direct Call Us</h1>
                    <div class="">
                        <a href="tel:<?php echo $phone_number;?>" class="btn btn-success btn-sm">Call Here</a>
                    </div>
                </div>

            <!-- authority start  -->
            <?php
                // include("partials/authority.php");
            ?>
            <!-- authority end  -->


            <!-- packages for couple -->
            <div id="packages_for_couple" class="row">
                <h1 class="heading">Packages For Couple</h1>
            
  
                <?php 
                    include("partials/db.php");

                    $sql = "SELECT * FROM packages_for_couple ORDER BY id";
                    $result = $conn->query($sql);
                    if($result){
                        $row = $result->num_rows;
                        if($row ==0 ){
                            echo 'no result found';
                        }else{
                        $run_six_times = 0;
                        while($data = $result->fetch_assoc()){

                            $title = $data['title'];
                            $period = $data['period'];
                            $sedan_rate = $data['sedan_rate'];
                            $suv_rate = $data['suv_rate'];
                            $more_info = $data['more_info'];

                            $array = explode("|", $more_info);
                            // print_r($array);

                            echo '<div class="col-md-6 col-lg-4 mt-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">'. $title .'</h5>
                                                <small class="period_text">'.$period.'</small>
                                                <div class="car_info">';
                                                    if($sedan_rate != 0 && $sedan_rate != null){
                                                        echo '<p class="card-text">Dzire / Etios <span class="price">₹ '.$sedan_rate.'</span> </p>';
                                                    }else{
                                                        echo '<p class="card-text">Dzire / Etios <span class="price">Call for great offers</span> </p>';
                                                    }
                                                    echo '<div class="">
                                                    <a href="tel:'.$phone_number.'" class="btn btn-success btn-sm">Click To Call</a>
                                                </div>
                                                </div>
                                                <div class="car_info">';
                                                    if($suv_rate != null && $suv_rate != 0){
                                                        echo '<p class="card-text">SUV / Innova <span class="price">₹ '.$suv_rate.'</span> </p>';
                                                    }else{
                                                        echo '<p class="card-text">SUV / Innova <span class="price">Call for great offers</span> </p>';
                                                    }
                                                    echo '<div class="">
                                                    <a href="tel:'.$phone_number.'" class="btn btn-success btn-sm">Click To Call</a>
                                                    </div>
                                                </div> 
                                                <div class="dropdown ">
                                                    <a class="btn btn-warning btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                    More Info
                                                    </a>
                    
                                                    <ul class="dropdown-menu px-4" aria-labelledby="dropdownMenuLink">';
                                                    for($i = 0 ; $i < count($array); $i++){
                                                        echo '<li>'.$array[$i].'</small></li>';
                                                    }
                                                echo '</ul>
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
            <!-- packages for couple end -->

        </div>
    </section>
    <!-- main section end  -->

    





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

    <script>

        // load more cars buttons
        var loadMoreCarPackagesBtn = document.getElementById('load_more_car_packages_btn');
        var loadMoreCarSpan = document.getElementById('load_more_car');
        loadMoreCarPackagesBtn.addEventListener('click', loadMoreCarPackages);

        function loadMoreCarPackages(){
            if(loadMoreCarPackagesBtn.innerText == "Load More +"){
                loadMoreCarSpan.setAttribute('class', 'd-block d-sm-block d-sm-12')
                loadMoreCarPackagesBtn.innerText = "Load Less -";
            }else{
                loadMoreCarSpan.setAttribute('class', 'd-none d-sm-block d-sm-12')
                loadMoreCarPackagesBtn.innerText = "Load More +";
            }
        }

        // load more tour buttons 
        var loadMoreTourPackagesBtn = document.getElementById('load_more_tour_packages_btn');
        var loadMoreTourSpan = document.getElementById('load_more_tour');
        loadMoreTourPackagesBtn.addEventListener('click', loadMoreTourPackages);

        function loadMoreTourPackages(){
            if(loadMoreTourPackagesBtn.innerText == "Load More +"){
                loadMoreTourSpan.setAttribute('class', 'd-block d-sm-block d-sm-12')
                loadMoreTourPackagesBtn.innerText = "Load Less -";
            }else{
                loadMoreTourSpan.setAttribute('class', 'd-none  d-sm-block d-sm-12')
                loadMoreTourPackagesBtn.innerText = "Load More +";
            }
        }

        // load more single buttons 
        var loadMoreSinglePackagesBtn = document.getElementById('load_more_single_packages_btn');
        var loadMoreSingleSpan = document.getElementById('load_more_single');
        loadMoreSinglePackagesBtn.addEventListener('click', loadMoreSinglePackages);

        function loadMoreSinglePackages(){
            if(loadMoreSinglePackagesBtn.innerText == "Load More +"){
                loadMoreSingleSpan.setAttribute('class', 'd-block d-sm-block d-sm-12')
                loadMoreSinglePackagesBtn.innerText = "Load Less -";
            }else{
                loadMoreSingleSpan.setAttribute('class', 'd-none d-sm-block d-sm-12')
                loadMoreSinglePackagesBtn.innerText = "Load More +";
            }
        }

        
        // setInterval(() => {
        // console.log(window.innerWidth)
        // if(window.innerWidth < 500 ){
        //     console.log("500")
        // }
        // }, 1000);

    </script>


  </body>
</html>