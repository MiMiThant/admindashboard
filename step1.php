<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" 
     href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>

    <div class="container-fluid">
        <div class="row g-0">

            <nav class="col-2 bg-light pe-3">

                <h1 class="h5 py-3 text-center text-primary">
                    <i class="fas fa-ghost me-2"></i>
                    <span class="d-none d-lg-inline">
                        GHOST ADMIN
                    </span>
                </h1>
                <div class="list-group text-center text-lg-start mx-2">
                    <span class="list-group-item disabled d-none d-lg-block">
                        <small>CONTROLS</small>
                    </span>
                    <a href="#" class="list-group-item list-group-item-action active">
                        <i class="fas fa-home"></i>
                        <span class="d-none d-lg-inline">
                            Disboard
                        </span>
                    </a>
                    <a href="#" class="list-group-item disabled d-lg-block">
                        <i class="fas fa-user"></i>
                        <span class="d-none d-lg-inline">User</span>
                        <span class="d-none d-lg-inline badge bg-danger rounded-pill float-end">20</span>
                    </a>
                    <a href="#" class="list-group-item disabled d-lg-block">
                        <i class="fas fa-chart-line"></i>
                        <span class="d-none d-lg-inline">Statistica</span>
                    </a>
                    <a href="#" class="list-group-item disabled d-lg-block">
                        <i class="fas fa-flag"></i>
                        <span class="d-none d-lg-inline">Reports</span>
                    </a>
                </div>

                <div class="list-group mt-4 text-center text-lg-start">
                    <span class="list-group-item disabled d-none d-lg-block">
                        <small>ACTIONS</small>
                    </span>
                    <a href="#" class="list-group-item list-group-item-action active">
                        <i class="fas fa-user"></i>
                        <span class="d-none d-lg-inline">New User</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <i class="fas fa-edit"></i>
                        <span class="d-none d-lg-inline">Update Data</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <i class="fas fa-calendar-alt"></i>
                        <span class="d-none d-lg-inline">Add Events</span>
                    </a>
                </div>
            
            </nav>

    <main class="col-10 bg-secondary">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="flex-fill"></div>
                <div class="navbar nav">
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fas fa-user-circle"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#" class="dropdown-item">User Profile</a>
                            </li>
                            <li>
                                <a href="#" class="dropdown-item">Logout</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-cog"></i>
                        </a>
                    </li>
                </div>
        </nav>

        <div class="container-fluid mt-3 p-4">
            <div class="row mb-3">
                <div class="col">
                    <div class="alert alert-info">
                        <i class="fas fa-download me-2"></i>
                        New Version Relaesed <a href="#">Download Now</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row flex-column flex-lg-row p-4">
            <h2 class="h6 text-white-50">QUICK STARTS</h2>

            <div class="col">
                <div class="card mb-3">
                    <div class="card-body">
                        <h3 class="card-title h2">1000</h3>
                        <span class="text-success">
                            <i class="fas fa-chart-inline"></i>
                            Daily Visitor
                        </span>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-3">
                    <div class="card-body">
                        <h3 class="card-title h2">7000</h3>
                        <span class="text-success">
                            <i class="fas fa-chart-line"></i>
                            Weekly Visitor
                        </span>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-3">
                    <div class="card-body">
                        <h3 class="cart-title">28000</h3>
                        <i class="fas fa-chart-line"></i>
                        Monthly Visitor
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-3">
                    <div class="card-body">
                        <h3 class="cart-title">336000</h3>
                        <i class="fas fa-chart-line"></i>
                        Yearly Visitor
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4 flex-column flex-lg-row">

            <div class="col">
                <h2 class="h6 text-white-50">LOCATION</h2>
                <div class="card mb-3" style="height:280px;">
                    <div class="card-body">

                        <small class="text-muted">Regional</small>
                        <div class="progress mb-4 mt-2"  style="height:5px;">
                            <div class="progress-bar bg-success w-25"></div>
                        </div>
                        <small class="text-muted">Global</small>
                        <div class="progress mb-4 mt-2" style="height:5px;">
                            <div class="progress-bar bg-danger w-75"></div>
                        </div>
                        <small class="text-muted">Local</small>
                        <div class="progress mb-4 mt-2" style="height:5px;">
                            <div class="progress-bar bg-primary w-50"></div>
                        </div>
                        <small class="text-muted">Internal</small>
                        <div class="progress mb-4 mt-2" style="height:5px;">
                            <div class="progress-bar bg-info w-25"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <h2 class="h6 text-white-50">DATA</h2>
                <div class="card md-3" style="height:280px;">
                    <div class="card-body">
                        <div class="text-end">
                            <button class="btn btn-sm btn-outline-secondary">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                        <table class="table">
                            <tr>
                                <th>ID</th>
                                <th>Age Group</th>
                                <th>Data</th>
                                <th>Progress</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>20-30</td>
                                <td>19%</td>
                                <td>
                                    <i class="fas fa-chart-pie"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>30-40</td>
                                <td>40%</td>
                                <td>
                                    <i class="fas fa-chart-bar"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>40-50</td>
                                <td>20%</td>
                                <td>
                                    <i class="fas fa-chart-line"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>50</td>
                                <td>11%</td>
                                <td>
                                    <i class="fas fa-chart-pie"></i>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

        </div>

        <div class="progress">
            <div class="progress-bar bg-dangerr"></div>
        </div>
    </main>

    <footer class="text-center py-4 text-muted">
        &copy; Copyright
    </footer>
</div>
</div>
    
</body>
</html>