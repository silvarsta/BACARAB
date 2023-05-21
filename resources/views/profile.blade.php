<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">


    <!-- Vendor CSS Files -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

    <!-- Template Main CSS File -->
    <link href="assets/css/styleprofile.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <h1 class="bacarab me-auto"><a href="/main">BACARAB</a></h1>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="/main"><b>Home</b></a></li>
                    <li><a class="nav-link scrollto" href="/main#content"><b>Content</b></a></li>
                    <li><a class="nav-link scrollto" href="/main#games"><b> Games </b></a></li>
                    <li><a class="nav-link scrollto" href="/main#video"><b> Video </b></a></li>
                    <li><a class="nav-link scrollto" href="/main#contact"><b> Contact </a></li>
                    <li>
                        <a href="#" class="nav-link scrollto active" style="display: flex; align-items: center;">
                            <div class="profile-img">
                                <img src="{{ asset('assets/img/icon/user-icon.png') }}" alt="User-prifile">
                            </div>
                            <span style="font-size: 16px;">
                                <strong>{{ Auth::user()->name }}</strong>
                            </span>
                        </a>
                    </li>

                </ul>
                <div class="profile-dropdown">

                </div>

                <i class="bi bi-list mobile-nav-toggle"></i>

            </nav><!-- .navbar -->
        </div>
    </header>

    <div class="container bootstrap snippets bootdey">
        <div class="row">
            <div class="profile-nav col-md-3">
                <div class="panel">
                    <div class="user-heading round">
                        <a href="#">
                            <img src="{{ asset('assets/img/icon/user-icon2.png') }}" alt="">
                        </a>
                        <h1 class="my-4"><strong>{{ Auth::user()->name }}</strong></h1>
                        <p style="margin-bottom: 70px;font-size: 14px; ">{{ Auth::user()->email }}</p>
                    </div>
                </div>
                <div class="log-out mt-5">
                    <button class="btn btn1"><strong>Log Out</strong> </button>
                    <a href="/" class="btn btn1"><strong>Log Out</strong></a>
                </div>

                <div class="log-out">
                    <button class="btndel btn2"><strong>Delete Account</strong> </button>
                </div>
                {{-- SWEET ALLERT --}}



            </div>
            <div class="profile-info col-md-9">
                <div class="panel">
                    <div class="bio-graph-heading">
                        Aliquam ac magna metus. Nam sed arcu non tellus fringilla fringilla ut vel ispum. Aliquam ac
                        magna metus.
                    </div>
                    <div class="panel-body bio-graph-info mt-3">
                        <h1>Profile User</h1>
                        <div class="row">
                            <div class="bio-row">
                                <p><span>Name </span>: {{ Auth::user()->name }}</p>
                            </div>
                            <div class="bio-row">
                                <p><span>Email</span>: {{ Auth::user()->email }}</p>
                            </div>
                            <div class="bio-row">
                                <p><span>Country </span>: Australia</p>
                            </div>
                            <div class="bio-row">
                                <p><span>Birthday</span>: 13 July 1983</p>
                            </div>
                            <div class="bio-row">
                                <p><span>Occupation </span>: UI Designer</p>
                            </div>
                            <div class="bio-row">
                                <p><span>Email </span>: jsmith@flatlab.com</p>
                            </div>
                            <div class="bio-row">
                                <p><span>Mobile </span>: (12) 03 4567890</p>
                            </div>
                            <div class="bio-row">
                                <p><span>Phone </span>: 88 (02) 123456</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="panel">
                                <div class="panel-body">
                                    <div class="bio-chart">
                                        <div style="display:inline;width:100px;height:100px;"><canvas width="100"
                                                height="100px"></canvas><input class="knob" data-width="100"
                                                data-height="100" data-displayprevious="true" data-thickness=".2"
                                                value="35" data-fgcolor="#e06b7d" data-bgcolor="#e8e8e8"
                                                style="width: 54px; height: 33px; position: absolute; vertical-align: middle; margin-top: 33px; margin-left: -77px; border: 0px; font-weight: bold; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 20px; line-height: normal; font-family: Arial; text-align: center; color: rgb(224, 107, 125); padding: 0px; -webkit-appearance: none; background: none;">
                                        </div>
                                    </div>
                                    <div class="bio-desk">
                                        <h4 class="red">Envato Website</h4>
                                        <p>Started : 15 July</p>
                                        <p>Deadline : 15 August</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="panel">
                                <div class="panel-body">
                                    <div class="bio-chart">
                                        <div style="display:inline;width:100px;height:100px;"><canvas width="100"
                                                height="100px"></canvas><input class="knob" data-width="100"
                                                data-height="100" data-displayprevious="true" data-thickness=".2"
                                                value="63" data-fgcolor="#4CC5CD" data-bgcolor="#e8e8e8"
                                                style="width: 54px; height: 33px; position: absolute; vertical-align: middle; margin-top: 33px; margin-left: -77px; border: 0px; font-weight: bold; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 20px; line-height: normal; font-family: Arial; text-align: center; color: rgb(76, 197, 205); padding: 0px; -webkit-appearance: none; background: none;">
                                        </div>
                                    </div>
                                    <div class="bio-desk">
                                        <h4 class="terques">ThemeForest CMS </h4>
                                        <p>Started : 15 July</p>
                                        <p>Deadline : 15 August</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="panel">
                                <div class="panel-body">
                                    <div class="bio-chart">
                                        <div style="display:inline;width:100px;height:100px;"><canvas width="100"
                                                height="100px"></canvas><input class="knob" data-width="100"
                                                data-height="100" data-displayprevious="true" data-thickness=".2"
                                                value="75" data-fgcolor="#96be4b" data-bgcolor="#e8e8e8"
                                                style="width: 54px; height: 33px; position: absolute; vertical-align: middle; margin-top: 33px; margin-left: -77px; border: 0px; font-weight: bold; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 20px; line-height: normal; font-family: Arial; text-align: center; color: rgb(150, 190, 75); padding: 0px; -webkit-appearance: none; background: none;">
                                        </div>
                                    </div>
                                    <div class="bio-desk">
                                        <h4 class="green">VectorLab Portfolio</h4>
                                        <p>Started : 15 July</p>
                                        <p>Deadline : 15 August</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="panel">
                                <div class="panel-body">
                                    <div class="bio-chart">
                                        <div style="display:inline;width:100px;height:100px;"><canvas width="100"
                                                height="100px"></canvas><input class="knob" data-width="100"
                                                data-height="100" data-displayprevious="true" data-thickness=".2"
                                                value="50" data-fgcolor="#cba4db" data-bgcolor="#e8e8e8"
                                                style="width: 54px; height: 33px; position: absolute; vertical-align: middle; margin-top: 33px; margin-left: -77px; border: 0px; font-weight: bold; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 20px; line-height: normal; font-family: Arial; text-align: center; color: rgb(203, 164, 219); padding: 0px; -webkit-appearance: none; background: none;">
                                        </div>
                                    </div>
                                    <div class="bio-desk">
                                        <h4 class="purple">Adobe Muse Template</h4>
                                        <p>Started : 15 July</p>
                                        <p>Deadline : 15 August</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container footer-bottom clearfix"
            style="position: absolute;
        bottom: 20px;
        width: 80%;
        margin-left: 100px;">
            <div class="copyright">
                &copy; Copyright <strong><span>BACARAB</span></strong> | All Rights Reserved
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>
