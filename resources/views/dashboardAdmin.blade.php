<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <style>
        body {
            height: 100vh !important;
        }



        .nav-link:hover {
            background-color: grey;
        }

        .display-4 {
            font-weight: bold;
        }

        .card-body-icon {
            position: absolute;
            z-index: 0;
            top: 25px;
            right: 4px;
            opacity: 0.4;
            font-size: 90px;
        }

        .sec1 {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .con1 {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        /* top-left border-radius */
        table tr:first-child th:first-child {
            border-top-left-radius: 5rem !important;
        }

        /* top-right border-radius */
        table tr:first-child th:last-child {
            border-top-right-radius: 5rem !important;
        }

        /* bottom-left border-radius */
        table tr:last-child td:first-child {
            border-bottom-left-radius: 5rem !important;
        }

        /* bottom-right border-radius */
        table tr:last-child td:last-child {
            border-bottom-right-radius: 5rem !important;
        }
    </style>
</head>

<body>
    <!-- NAVIGATION BAR -->
    <nav class="navbar navbar-expand-lg bg-info fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="/admin/dashboard">Bacarab</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a href="/victor"><img src="assets/img/admin/vic.png" class="rounded-circle img-fluid"
                            width="50px" height="30px"></a>
                </div>
            </div>
        </div>
    </nav>
    <!-- NAVAGIAGTION BAR END -->
    <section class="sec1 justify-content-center align-items-top mt-1">
        <div class="container justify-content-center align-items-center">
            <div class="row justify-content-center align-items-center w-100"></div>
        </div>
    </section>
    <!-- CONTENT -->
    <div class="con1 align-items-center justify-content-center">
        <div class="row no-gutters mt-5">
            <div class="col-md-2 bg-light mt-2 ps-4 pt-4">
                <ul class="nav flex-column ms-3 mb-5">
                    <li class="nav-item mt-4">
                        <a class="nav-link active text-dark" aria-current="page" href="/admin/about"> <i
                                class="fa fa-regular fa-lock me-2"></i> About Admin</a>
                        <hr class="bg-secondary" />
                    </li>
                    <li class="nav-item mt-4">
                        <a class="nav-link active text-dark" aria-current="page" href="/admin/dashboard"> <i
                                class="fa fa-tachometer me-2"></i> Dashboard</a>
                        <hr class="bg-secondary" />
                    </li>
                </ul>
            </div>
            <div class="col-md-10 p-5 pt-5">
                <h3 class="mt-3"><i class="fa fa-tachometer me-2"></i>Dashboard</h3>
                <hr />
                <div class="row text-white">
                    <div class="card bg-warning mt-3 ms-3" style="width: 18rem">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-users me-2"></i>
                            </div>
                            <h5 class="card-title">Old and New Users</h5>
                            <div class="display-4">1.200</div>
                            <p class="card-text">Jan - April 2023</p>
                        </div>
                    </div>
                    <div class="card bg-success  mt-3 ms-3" style="width: 18rem">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-regular fa-gamepad"></i>
                            </div>
                            <h5 class="card-title">Game has been played</h5>
                            <div class="display-4">534</div>
                            <p class="card-text">Jan - April 2023</p>
                        </div>
                    </div>
                    <div class="card bg-danger mt-3 ms-3" style="width: 18rem">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-heart me-2"></i>
                            </div>
                            <h5 class="card-title">Parents Satisfaction</h5>
                            <div class="display-4">90 %</div>
                            <p class="card-text">Jan - April 2023</p>
                        </div>
                    </div>
                    <div class="col-md-8 ms-auto me-auto box">
                        <table class="table  table-hover table-warning mt-5">
                            <thead class="text-center">
                                <tr>
                                    <th>User</th>
                                    <th>Level Game</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                <tr>
                                    <td class="ms-5 text-center"> User 1</td>
                                    <td class="text-center">300</td>
                                    <td>
                                        <div aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0"
                                            aria-valuemax="100">
                                            <div class="text-center"><i class="fa fa-check-circle"
                                                    style="color: green"></i> Online</div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ms-5 text-center"> User 2</td>
                                    <td class="text-center">103</td>
                                    <td>
                                        <div aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0"
                                            aria-valuemax="100">
                                            <div class="text-center"><i class="fa fa-check-circle"
                                                    style="color: green"></i> Online</div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ms-5 text-center"> User 3</td>
                                    <td class="text-center">240</td>
                                    <td>
                                        <div aria-label="Animated striped example" aria-valuenow="75"
                                            aria-valuemin="0" aria-valuemax="100">
                                            <div class="text-center"><i class="fa fa-check-circle"
                                                    style="color: green"></i> Online</div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ms-5 text-center"> User 4</td>
                                    <td class="text-center">390</td>
                                    <td>
                                        <div aria-label="Animated striped example" aria-valuenow="75"
                                            aria-valuemin="0" aria-valuemax="100">
                                            <div class="text-center"><i class="fa fa-check-circle"
                                                    style="color: green"></i> Online</div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CONTENT END -->

    <!-- FOOTER -->
    <footer
        class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-info">
        <!-- Copyright -->
        <div class="text-white mb-3 mb-md-0">Kelompok 6 © 2023. All rights reserved.</div>
        <!-- Copyright -->
    </footer>
    <!-- FOOTER END -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
