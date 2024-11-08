<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Selection</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .sidebar {
            background-color: #2f2f2f;
            color: white;
            padding: 15px;
            height: 100vh;
            min-width: 200px;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
        }
        .sidebar .active {
            color: #17a2b8;
            font-weight: bold;
        }
        .content {
            padding: 20px;
        }
        .service-card {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 15px;
            margin-bottom: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #f8f9fa;
        }
        .service-icon {
            width: 40px;
            height: 40px;
            background-color: #dcdcdc;
            border-radius: 50%;
            margin-right: 15px;
        }
        .service-details {
            flex-grow: 1;
        }
        .list-unstyled li{
            margin-top:5px;
            font-weight:bold;
            font-size: 1.4rem;
            padding-left:9px;
            list-style: none;
            padding:2px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 sidebar">
                <h3>Service</h3>
                <ul class="list-unstyled">
                    <li class="active">1 &nbsp Service</li>
                    <li>2 &nbsp Date & Time</li>
                    <li>3 &nbsp Information</li>
                    <li>4  &nbsp Confirmation</li>
                </ul>
            </div>

            <!-- Main Content -->
            <div class="col-md-9 content">
                <h4>Select Service</h4>
                <h5>Phone Consultation</h5>

                <!-- Service Option 1 -->
                <div class="service-card">
                    <div class="d-flex align-items-center">
                        <div class="service-icon"><img src="images/20.jpg" alt="Flags" class="flags-icon"></div>
                        <div class="service-details">
                            <strong>Phone Consultation Instant</strong>
                            <p>15 min</p>
                        </div>
                    </div>
                    <div>
                        <strong>Rs. 501</strong>
                    </div>
                </div>

                <!-- Service Option 2 -->
                <div class="service-card">
                    <div class="d-flex align-items-center">
                        <div class="service-icon"><img src="images/20.jpg" alt="Flags" class="flags-icon"></div>
                        <div class="service-details">
                            <strong>Phone Consultation Premium</strong>
                            <p>30 min</p>
                        </div>
                    </div>
                    <div>
                        <strong>Rs. 751</strong>
                    </div>
                </div>

                <button class="btn btn-primary float-right">Next Step</button>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
