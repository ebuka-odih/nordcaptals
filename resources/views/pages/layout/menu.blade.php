<div class="logoslider">
    <div id="particles-js"></div>
    <script src='https://cldup.com/S6Ptkwu_qA.js'></script>
    <script > // ParticlesJS Config.
        particlesJS("particles-js", {
            "particles": {
                "number": {
                    "value": 80,
                    "density": {
                        "enable": true,
                        "value_area": 700 } },


                "color": {
                    "value": "#7863fe" },

                "shape": {
                    "type": "circle",
                    "stroke": {
                        "width": 5,
                        "color": "#" },

                    "polygon": {
                        "nb_sides": 5 } },


                "opacity": {
                    "value": 0.5,
                    "random": false,
                    "anim": {
                        "enable": false,
                        "speed": 1,
                        "opacity_min": 0.1,
                        "sync": false } },


                "size": {
                    "value": 3,
                    "random": true,
                    "anim": {
                        "enable": false,
                        "speed": 2,
                        "size_min": 0.1,
                        "sync": false } },


                "line_linked": {
                    "enable": true,
                    "distance": 160,
                    "color": "#94BEDC",
                    "opacity": 0.3,
                    "width": 1 },

                "move": {
                    "enable": true,
                    "speed": 3,
                    "direction": "none",
                    "random": false,
                    "straight": false,
                    "out_mode": "out",
                    "bounce": false,
                    "attract": {
                        "enable": false,
                        "rotateX": 600,
                        "rotateY": 1200 } } },



            "interactivity": {
                "detect_on": "canvas",
                "events": {
                    "onhover": {
                        "enable": true,
                        "mode": "grab" },

                    "onclick": {
                        "enable": true,
                        "mode": "push" },

                    "resize": true },

                "modes": {
                    "grab": {
                        "distance": 140,
                        "line_linked": {
                            "opacity": 1 } },


                    "bubble": {
                        "distance": 400,
                        "size": 100,
                        "duration": 2,
                        "opacity": 0.2,
                        "speed": 3 },

                    "repulse": {
                        "distance": 200,
                        "duration": 0.4 },

                    "push": {
                        "particles_nb": 4 },

                    "remove": {
                        "particles_nb": 2 } } },



            "retina_detect": true });
        //# sourceURL=pen.js
    </script>

    <div class="logomenu">
        <div class="container">
            <div class="logolb animated zoomIn  ">
                    <span class="logoicon">
                        <a  href="{{ route('index') }}">
{{--                            <h3>NordCaptals</h3>--}}
                            <img height="100" width="200" src="{{ asset('logo.jpeg') }}" alt=""/>
                        </a>
                    </span>
            </div>
            <div class="logorb">
                <a class="logobtn2 animated bounceInDown" href="{{ route('login') }}">
                    <i class="fas fa-sign-in-alt"></i> Login
                </a>
                <a class="logobtn animated bounceInDown slow" href="{{ route('register') }}">
                    <i class="far fa-user"></i> Sign Up
                </a>
            </div>
        </div>
    </div>
    <br><br><br>
    <div class="logomenubar animated fadeIn ">
        <div class="logomenubg ">
            <div class="logosb animated fadeIn slower">
                <div id="google_translate_element"></div>
            </div>
            <nav class="nav right">
                <ul>
                        <span class="navhomeinv">
                            <li class="current">
                                <a href="{{ route('index') }}">
                                    <i class="fas fa-home"></i>
                                </a>
                            </li>
                        </span>
                    <li>
                        <a href="{{ route('about') }}">About us</a>
                    </li>
                    <li>
                        <a href="{{ route('faq') }}">faq</a>
                    </li>
                    <li>
                        <a href="{{ route('rules') }}">Rules</a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}">Contact us</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <div class="container">
        <div class="logoslidebox">
            <div class="logotit animated fadeInUp">
                <span class="logotitgrad ">Build your Financial Dream with Us</span>
            </div>
            <span class="logotit2 animated fadeInDown">
                    Earn Daily
                    <br>Profits
                    </span>
            <br>
            <br>
            <br>
            <br>
            <a class="logologin animated bounceInUp slow" href="{{ route('register') }}">
                <i class="far fa-user"></i> Create Account
            </a>
            <a class="logoabout animated bounceInUp slower" href="{{ route('about') }}">
                <i class="fas fa-play"></i> About us
            </a>
        </div>
    </div>
    <div class="bannercurve"></div>
</div>
