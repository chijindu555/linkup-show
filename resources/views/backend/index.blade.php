<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Link-up Show Admin</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="{{ asset('backend/js/plugin/webfont/webfont.min.js') }}" type="image/x-icon"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

    <!-- Fonts and icons -->
    <script src="{{ asset('backend/js/plugin/webfont/webfont.min.js') }}"></script>
    <script>
        WebFont.load({
            google: {"families":["Lato:300,400,700,900"]},
            custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../assets/css/fonts.min.css']},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('backend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/atlantis.min.css') }}">

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="{{ asset('backend/css/demo.css') }}">
    <style>
        .btn-custom {
            border: none;
            padding: 5px 10px;
            color: #fff !important;
            background: #3c3c9f;
            border-radius: 3px;
            margin-top: 10px;
            font-size: 15px;
        }
        .parent-buttons {
            display: flex;
            justify-content: space-between;
            width: 100%;
            margin-top: 10px;
        }
        .table-responsive {
            overflow-x: auto; /* Enable horizontal scrolling */
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="main-header">
            <!-- Logo Header -->
            <!-- End Logo Header -->

            <!-- Navbar Header -->
            <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
            </nav>
            <!-- End Navbar -->
        </div>

        <div class="main-panel">
            <div class="content">
                <div class="panel-header bg-primary-gradient">
                    <div class="page-inner py-5">
                        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                            <div>
                                <h2 class="text-white pb-2 fw-bold">Dashboard</h2>
                                <h5 class="text-white op-7 mb-2">Welcome, Admin</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">All Users</div>
                        </div>
                        <div class="card-body">
                            <div class="card-sub"></div>
                            
                            <!-- Add a wrapper div with table-responsive class for horizontal scrolling -->
                            <div class="table-responsive">
                                <table id="userTable" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">First Name</th>
                                            <th scope="col">Last Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">Address</th>
                                            <th scope="col">Gender</th>
                                            <th scope="col">Age</th>
                                            <th scope="col">Occupation</th>
                                            <th scope="col">Religion</th>
                                            <th>Ideal Partner</th>
                                            <th>Self Description</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $index => $user)
                                        <tr>
                                            <td>{{ $index + 1 }}</td> <!-- Incremental index -->
                                            <td>{{ $user->firstname }}</td>
                                            <td>{{ $user->lastname }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->phone }}</td>
                                            <td>{{ $user->address }}</td>
                                            <td>{{ $user->gender }}</td>
                                            <td>{{ $user->age }}</td>
                                            <td>{{ $user->occupation }}</td>
                                            <td>{{ $user->religion }}</td>
                                            <td>{{ $user->idealpartner }}</td>
                                            <td>{{ $user->selfdescription }}</td>
                                            <td>
                                                <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                                                    @csrf
                                                    <div class="parent-buttons">
                                                        <button type="submit" onclick="return confirm('Are you sure you want to delete this user?')" class="btn-custom"><i class="fa-solid fa-trash"></i></button>
                                                    </div>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>          
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <div class="copyright ml-auto">
                        2024, copyright <i class="fa fa-heart heart text-danger"></i> by Iheanacho Chijindu
                    </div>                
                </div>
            </footer>
        </div>
        
        <!-- Custom template | don't include it in your project! -->
        <div class="custom-template">
            <div class="title">Settings</div>
            <div class="custom-content">
                <!-- Your settings code here -->
            </div>
            <div class="custom-toggle">
                <i class="flaticon-settings"></i>
            </div>
        </div>
        <!-- End Custom template -->
    </div>
    <!-- Core JS Files -->
    <script src="{{ asset('backend/js/core/jquery.3.2.1.min.js') }}"></script>
    <script src="{{ asset('backend/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('backend/js/core/bootstrap.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

    <!-- jQuery UI -->
    <script src="{{ asset('backend/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('backend/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') }}"></script>

    <!-- jQuery Scrollbar -->
    <script src="{{ asset('backend/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>

    <!-- Chart JS -->
    <script src="{{ asset('backend/js/plugin/chart.js/chart.min.js') }}"></script>

    <!-- jQuery Sparkline -->
    <script src="{{ asset('backend/js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}"></script>

    <!-- Chart Circle -->
    <script src="{{ asset('backend/js/plugin/chart-circle/circles.min.js') }}"></script>

    <!-- Datatables -->
    <script src="{{ asset('backend/js/plugin/datatables/datatables.min.js') }}"></script>

    <!-- Bootstrap Notify -->
    <script src="{{ asset('backend/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>

    <!-- jQuery Vector Maps -->
    <script src="{{ asset('backend/js/plugin/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('backend/js/plugin/jqvmap/maps/jquery.vmap.world.js') }}"></script>

    <!-- Sweet Alert -->
    <script src="{{ asset('backend/js/plugin/sweetalert/sweetalert.min.js') }}"></script>

    <!-- Atlantis JS -->
    <script src="{{ asset('backend/js/atlantis.min.js') }}"></script>

    <!-- Atlantis DEMO methods, don't include it in your project! -->
    <script src="{{ asset('backend/js/setting-demo.js') }}"></script>
    <script src="{{ asset('backend/js/demo.js') }}"></script>
   
</body>
</html>
