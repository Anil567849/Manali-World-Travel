<!doctype html>
<html lang="en">
  <head>
      

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="We are Manali's Tour and Taxi Agency. We provide all kind of taxi and adventure activity in Manali. Book your tour and taxi to explore Manali. Manali and Rohtang pass Taxi @ 2000">
    
    <!--favicon -->

    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">    

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" async>


    <!-- Bootstrap Icons  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- custom css  -->
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/our-team.css">
    <link rel="stylesheet" href="css/authority.css">
    <link rel="stylesheet" href="css/index-media-query.css">

    <!-- google fonts  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500&display=swap" rel="stylesheet">
    
    <!--cononical tag -->
    <link rel="canonical" href="https://www.manaliworldtravel.com" />

    <title>ManaliWorldTravel - Taxi Tour and Travel Agency in Manali</title>

    <?php include("partials/google-analytic.php");?>
     
     
     



  </head>
  <body>
      

  
    <?php
        // header
        include_once("partials/header.php");
        include_once("partials/db.php");
    ?>

    <!-- main section start  -->
    <section id="section_main" class="mt-3">
        <div class="container-fluid">
            

                <!-- main query start  -->
                <?php
                        // require('partials/main-banner.php');
                ?>
                <!-- main query end -->


        </div>
    </section>
    <!-- main section end  -->
    
    
    



    <!-- our team start-->
        <?php
            // include("partials/authority.php");
        ?>
    <!-- our team end -->



    <!-- our team start-->
        <?php
            include("partials/our-team.php");
        ?>
    <!-- our team end -->



    <!-- about us start-->
        <?php
            include("partials/about-us.php");
        ?>
    <!-- about us end -->



    <!-- footer start  -->
    <?php include("partials/footer.php");?>
    <!-- footer end  -->
























    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script>
        

        
        
        // open and close navbar in mobile buttion start
        function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        }
    
        function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        }
        // open and close navbar in mobile buttion end


        // load more manali taxi packeges buttons 
        // var loadMoreSinglePackagesBtn = document.getElementById('load_more_single_packages_btn');
        // var loadMoreSingleSpan = document.getElementById('load_more_single');
        
        
        // loadMoreSinglePackagesBtn.addEventListener('click', loadMoreSinglePackages);

        // function loadMoreSinglePackages(){
        //     if(loadMoreSinglePackagesBtn.innerText == "Load More +"){
        //         loadMoreSingleSpan.setAttribute('class', 'd-block d-sm-block d-sm-12')
        //         loadMoreSinglePackagesBtn.innerText = "Load Less -";
        //     }else{
        //         loadMoreSingleSpan.setAttribute('class', 'd-none d-sm-block d-sm-12')
        //         loadMoreSinglePackagesBtn.innerText = "Load More +";
        //     }
        // }


    </script>


  </body>
</html>