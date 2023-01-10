






    
    <?php
        // main phone number 
        $phone_number = "+91 7018357882";
        $whats_app_phone_number = "+917018357882";
    ?>
    
    




    <!-- before collapse navbar start  -->
    <nav class="container-fluid p-0">

        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid px-sm-2">

                <a class="navbar-brand" href="/">
                    <img src="images/logo.png" alt="Logo" title="go to home">
                </a>
                


                <span class="d-sm-none" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
                <div class="before_collapse d-sm-flex d-none">
                    <ul id="nav_icons" class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="https://www.manaliworldtravel.com">
                                <img src="images/icons/home.svg" alt="">
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="tel:<?php echo $phone_number;?>">
                                <img src="images/icons/call.svg" alt="img">
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="mailto:manaliworldtravel2223@gmail.com?subject=Hlo dear agent, I am interested to book from your website, can u please call me to share in detail about best packages.">
                                <img src="images/icons/email.svg" alt="img">
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo $whats_app_phone_number;?>&text=Hlo dear agent, I am interested to book from your website, can u please call me to share in detail about best packages.">
                                <img src="images/icons/whatsapp.svg" alt="img">
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
            

        <div id="navigation" class="bg-dark d-none d-sm-block">
            <ul class="navbar-nav flex-row justify-content-around">
                <!-- <li class="nav-item"><a class="nav-link <?php // if(PAGE == "cab_packages"){echo 'text-warning';}else{echo 'text-white';}?>" href="cab-packages.php">Cab Packages</a></li>
                <li class="nav-item"><a class="nav-link <?php // if(PAGE == "tour_packages"){echo 'text-warning';}else{echo 'text-white';}?>" href="tour-packages.php">Tour Packages</a></li>
                <li class="nav-item"><a class="nav-link <?php // if(PAGE == "couple_packages"){echo 'text-warning';}else{echo 'text-white';}?>" href="couple-packages.php">Packages for Couple</a></li> -->
                <li class="nav-item"><a class="nav-link <?php if(PAGE == "MANALI-TAXI-SERVICES"){echo 'text-warning';}else{echo 'text-white';}?>" href="https://www.manaliworldtravel.com/manali-taxi-services.php">Manali Taxi</a></li>
                <li class="nav-item"><a class="nav-link <?php if(PAGE == "CHANDIGARH-MANALI-TAXI"){echo 'text-warning';}else{echo 'text-white';}?>" href="https://www.manaliworldtravel.com/chandigarh-manali-taxi.php">Chandigarh-Manali Taxi</a></li>
                <li class="nav-item"><a class="nav-link <?php if(PAGE == "faq"){echo 'text-warning';}else{echo 'text-white';}?>" href="/faq.php">FAQ</a></li>
            </ul>
        </div>
        
    </nav>
    <!-- before collapse navbar end  -->






    <!--mobile view -->
    <!-- after collapse navbar start -->
    <div id="mySidenav" class="sidenav d-sm-none">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

        <!-- navbar start  -->
        <nav class="container-fluid p-2">

            <nav class="navbar">
                <div class="after_collapse">
                    <ul id="nav_icons" class="navbar-nav d-flex flex-row justify-content-around">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="https://www.manaliworldtravel.com">
                                <img src="images/icons/home.svg" alt="">
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="tel:<?php echo $phone_number;?>">
                                <img src="images/icons/call.svg" alt="img">
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="mailto:manaliworldtravel2223@gmail.com?subject=Hlo dear agent, I am interested to book from your website, can u please call me to share in detail about best packages.">
                                <img src="images/icons/email.svg" alt="img">
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo $whats_app_phone_number;?>&text=Hlo dear agent, I am interested to book from your website, can u please call me to share in detail about best packages.">
                                <img src="images/icons/whatsapp.svg" alt="img">
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
                

            <div id="navigation" class="after_navigation">
                <ul class="navbar-nav">
                    <!-- <li class="nav-item">
                        <a class="nav-link <?php // if(PAGE == "cab_packages"){echo 'text-warning';}else{echo 'text-white';}?>" href="cab_packages.php">Cab Packages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php // if(PAGE == "tour_packages"){echo 'text-warning';}else{echo 'text-white';}?>" href="tour_packages.php">Tour Packages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php // if(PAGE == "couple_packages"){echo 'text-warning';}else{echo 'text-white';}?>" href="couple_packages.php">Packages for Couple</a>
                    </li> -->
                    <li class="nav-item"> 
                        <a class="nav-link <?php if(PAGE == "MANALI-TAXI-SERVICES"){echo 'text-warning';}else{echo 'text-white';}?>" href="https://www.manaliworldtravel.com/manali-taxi-services.php">Manali Taxi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if(PAGE == "CHANDIGARH-MANALI-TAXI"){echo 'text-warning';}else{echo 'text-white';}?>" href="https://www.manaliworldtravel.com/chandigarh-manali-taxi.php">Chandigarh-Manali Taxi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if(PAGE == "faq"){echo 'text-warning';}else{echo 'text-white';}?>" href="/faq.php">FAQ</a></li>
                </ul>
            </div>

        </nav>
        <!-- navbar end  -->

    </div>
    <!-- after collapse navbar end -->


    <script>
        
    
        function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        }
    
        function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        }
    
    </script>

