<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="{{ url('css/style.css') }}" rel="stylesheet">

        <!-- Styles -->
        <style>
        </style>
    </head>
    <body class="">
        <!-- Navbar (sit on top) -->
        @include('layouts.header_nav')
        <!-- Header -->
        <header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
            <img class="w3-image" src="/storage/images/architect.jpg" alt="Architecture" width="1500" height="800">
            <div class="w3-display-middle w3-margin-top w3-center">
            <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>BR</b></span> <span class="w3-hide-small w3-text-light-grey">Architects</span></h1>
            </div>
        </header>
        <!-- Page content -->
        <div class="w3-content w3-padding" style="max-width:1564px">
        
            <!-- Project Section -->
            <div class="w3-container w3-padding-32" id="projects">
            <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Projects</h3>
            </div>
        
            <div class="w3-row-padding">
            <div class="w3-col l3 m6 w3-margin-bottom">
                <div class="w3-display-container">
                <div class="w3-display-topleft w3-black w3-padding">Summer House</div>
                <img src="/storage/images/house5.jpg" alt="House" style="width:100%">
                </div>
            </div>
            <div class="w3-col l3 m6 w3-margin-bottom">
                <div class="w3-display-container">
                <div class="w3-display-topleft w3-black w3-padding">Brick House</div>
                <img src="/storage/images/house2.jpg" alt="House" style="width:100%">
                </div>
            </div>
            <div class="w3-col l3 m6 w3-margin-bottom">
                <div class="w3-display-container">
                <div class="w3-display-topleft w3-black w3-padding">Renovated</div>
                <img src="/storage/images/house3.jpg" alt="House" style="width:100%">
                </div>
            </div>
            <div class="w3-col l3 m6 w3-margin-bottom">
                <div class="w3-display-container">
                <div class="w3-display-topleft w3-black w3-padding">Barn House</div>
                <img src="/storage/images/house4.jpg" alt="House" style="width:100%">
                </div>
            </div>
            </div>
        
            <div class="w3-row-padding">
            <div class="w3-col l3 m6 w3-margin-bottom">
                <div class="w3-display-container">
                <div class="w3-display-topleft w3-black w3-padding">Summer House</div>
                <img src="/storage/images/house2.jpg" alt="House" style="width:99%">
                </div>
            </div>
            <div class="w3-col l3 m6 w3-margin-bottom">
                <div class="w3-display-container">
                <div class="w3-display-topleft w3-black w3-padding">Brick House</div>
                <img src="/storage/images/house5.jpg" alt="House" style="width:99%">
                </div>
            </div>
            <div class="w3-col l3 m6 w3-margin-bottom">
                <div class="w3-display-container">
                <div class="w3-display-topleft w3-black w3-padding">Renovated</div>
                <img src="/storage/images/house4.jpg" alt="House" style="width:99%">
                </div>
            </div>
            <div class="w3-col l3 m6 w3-margin-bottom">
                <div class="w3-display-container">
                    <div class="w3-display-topleft w3-black w3-padding">Barn House</div>
                    <img src="/storage/images/house3.jpg" alt="House" style="width:99%">
                </div>
            </div>
            </div>

            <!-- Contact Section -->
            <div class="w3-container w3-padding-32" id="contact">
            <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Contact</h3>
            <p>Lets get in touch and talk about your next project.</p>
            <form action="/action_page.php" target="_blank">
                <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
                <input class="w3-input w3-section w3-border" type="text" placeholder="Email" required name="Email">
                <input class="w3-input w3-section w3-border" type="text" placeholder="Subject" required name="Subject">
                <input class="w3-input w3-section w3-border" type="text" placeholder="Comment" required name="Comment">
                <button class="w3-button w3-black w3-section" type="submit">
                <i class="fa fa-paper-plane"></i> SEND MESSAGE
                </button>
            </form>
        </div>
            
        <!-- Image of location/map -->
        <div class="w3-container">
            <img src="/storage/images/map.jpg" class="w3-image" style="width:100%">
        </div>
        
        <!-- End page content -->
        </div>
        
        
        <!-- Footer -->
        <footer class="w3-center w3-black w3-padding-16">
        </footer>
    </body>
</html>
