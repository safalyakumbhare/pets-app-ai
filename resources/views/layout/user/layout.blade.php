<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Pets Portal - User Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <link rel="icon" href="/assets/images/kaiadmin/favicon.ico" type="image/x-icon" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Fonts and icons -->
    <script src="{{ asset("js/dashboard_js/plugin/webfont/webfont.min.js") }}"></script>
    <script>
        WebFont.load({
            google: {
                families: ["Public Sans:300,400,500,600,700"]
            },
            custom: {
                families: [
                    "Font Awesome 5 Solid",
                    "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands",
                    "simple-line-icons",
                ],
                urls: ["/assets/css/dashboard_css/fonts.min.css"],
            },
            active: function() {
                sessionStorage.fonts = true;
            },
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('css/dashboard_css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/dashboard_css/plugins.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/dashboard_css/kaiadmin.min.css') }}" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="{{ asset('css/dashboard_css/demo.css') }}" />

</head>

@yield('css')

<body>
    <div class="wrapper">
        <!-- Including sidebar and navbar -->
        @include('layout.user.partials.sidebar')
        @include('layout.user.partials.navbar')


        @yield('content')

        @include('layout.user.partials.footer')
    </div>


    <!--   Core JS Files   -->
    <script src="{{ asset('js/dashboard_js/core/jquery-3.7.1.min.js')}}"></script>
    <script src="{{ asset('jquery/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('jquery/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/dashboard_js/core/popper.min.js')}}"></script>
    <script src="{{ asset('js/dashboard_js/core/bootstrap.min.js')}}"></script>

    <!-- jQuery Scrollbar -->
    <script src="{{ asset('js/dashboard_js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>

    <!-- Chart JS -->
    <script src="{{ asset('js/dashboard_js/plugin/chart.js/chart.min.js')}}"></script>

    <!-- jQuery Sparkline -->
    <script src="{{ asset('js/dashboard_js/plugin/jquery.sparkline/jquery.sparkline.min.js')}}"></script>

    <!-- Chart Circle -->
    <script src="{{ asset('js/dashboard_js/plugin/chart-circle/circles.min.js')}}"></script>

    <!-- Datatables -->
    <script src="{{ asset('js/dashboard_js/plugin/datatables/datatables.min.js')}}"></script>

    <!-- Bootstrap Notify -->
    <script src="{{ asset('js/dashboard_js/plugin/bootstrap-notify/bootstrap-notify.min.js')}}"></script>

    <!-- jQuery Vector Maps -->
    <script src="{{ asset('js/dashboard_js/plugin/jsvectormap/jsvectormap.min.js')}}"></script>
    <script src="{{ asset('js/dashboard_js/plugin/jsvectormap/world.js')}}"></script>

    <!-- Sweet Alert -->
    <script src="{{ asset('js/dashboard_js/plugin/sweetalert/sweetalert.min.js')}}"></script>

    <!-- Kaiadmin JS -->
    <script src="{{ asset('js/dashboard_js/kaiadmin.min.js')}}"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const navLinks = document.querySelectorAll('.nav-link');

            // Get the active link from localStorage and set it
            const activeLink = localStorage.getItem('activeLink');
            if (activeLink) {
                document.querySelector(`#${activeLink}`).classList.add('active');
            }

            // Loop through each nav-link and add click event
            navLinks.forEach(link => {
                link.addEventListener('click', function() {
                    // Remove 'active' class from all links
                    navLinks.forEach(nav => nav.classList.remove('active'));

                    // Add 'active' class to the clicked link
                    this.classList.add('active');

                    // Store the clicked link's id in localStorage
                    localStorage.setItem('activeLink', this.id);
                });
            });
        });
    </script>
    <script>
        $("#lineChart").sparkline([102, 109, 120, 99, 110, 105, 115], {
            type: "line",
            height: "70",
            width: "100%",
            lineWidth: "2",
            lineColor: "#177dff",
            fillColor: "rgba(23, 125, 255, 0.14)",
        });

        $("#lineChart2").sparkline([99, 125, 122, 105, 110, 124, 115], {
            type: "line",
            height: "70",
            width: "100%",
            lineWidth: "2",
            lineColor: "#f3545d",
            fillColor: "rgba(243, 84, 93, .14)",
        });

        $("#lineChart3").sparkline([105, 103, 123, 100, 95, 105, 115], {
            type: "line",
            height: "70",
            width: "100%",
            lineWidth: "2",
            lineColor: "#ffa534",
            fillColor: "rgba(255, 165, 52, .14)",
        });
    </script>

    @yield('js')

</body>

</html>
