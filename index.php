<?php

// Eğer bir json verisi kullanacaksanız
// If you are going to use a json data

/*
$file = file_get_contents("file path");
$json = json_decode($file,true);
$totalElements = $json['totalElements'];
$content = $json['content'];
$totalRecords = $json['totalElements'];
$page = !isset($_GET['page']) ? 1 : $_GET['page'];
$limit = 10; // 10 rows per page
$offset = ($page - 1) * $limit;
$final = array_splice($content, $offset, $limit); 
 
*/


?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Application</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">


    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <link href="https://nightly.datatables.net/css/jquery.dataTables.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/select/1.2.1/js/dataTables.select.min.js" type="text/javascript"></script>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link href="http://getbootstrap.com/2.3.2/assets/css/bootstrap.css" rel="stylesheet">
    <link href="http://getbootstrap.com/2.3.2/assets/css/bootstrap-responsive.css" rel="stylesheet">
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/table/style.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>

</head>

<body>

    <div class="horizontal-main-wrapper">

        <div class="header-area header-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-9  d-none d-lg-block">
                        <div class="horizontal-menu">
                            <nav>
                                <ul id="nav_menu">
                                    <li>
                                        <a href="./"><i class="ti-dashboard"></i><span>Accordion Table with Pagination</span></a>

                                    </li>
                                    <li>
                                        <a href="./charts.php"><i class="ti-pie-chart"></i><span>Charts</span></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-12 d-block d-lg-none">
                        <div id="mobile_menu"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">

                <div class="card-body">
                    <div class="single-table">
                        <div class="table-responsive">
                            <table class="table text-center table-bordered fold-table" id="table">
                                <thead class="text-uppercase bg-primary">
                                    <tr class="text-white">
                                        <th></th>
                                        <th scope="col">Column1</th>
                                        <th scope="col">Column2</th>
                                        <th scope="col">Column3</th>
                                        <th scope="col">Column4</th>
                                        <th scope="col">Column5</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for($i=0; $i<10; $i++) { ?>

                                    <tr class="view">
                                        <td><i class="fas fa-plus-circle"></i></td>
                                        <td>Row1</td>
                                        <td>Row2</td>
                                        <td>Row3</td>
                                        <td>Row4</td>
                                        <td>Row5</td>
                                    </tr>

                                    <tr class="fold">
                                        <td></td>
                                        <td>
                                            <h4>Details1</h4>
                                        </td>
                                        <td>
                                            <h4>Details2</h4>
                                        </td>
                                        <td>
                                            <h4>Details3</h4>
                                        </td>
                                        <td>
                                            <h4>Details4</h4>
                                        </td>
                                        <td>
                                            <h4>Details5</h4>
                                        </td>
                                        
                                        





                                    </tr>


                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <p style="text-align:center">
            <?php for($x = 1; $x <= 4; $x++): ?>
            <a class="btn btn-primary" href='index.php?page=<?php echo $x; ?>'><?php echo $x; ?></a>
            <?php endfor; ?>
        </p>




    </div>


    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>


    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <!-- start amcharts -->
    <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
    <script src="https://www.amcharts.com/lib/3/ammap.js"></script>
    <script src="https://www.amcharts.com/lib/3/maps/js/worldLow.js"></script>
    <script src="https://www.amcharts.com/lib/3/serial.js"></script>
    <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
    <script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
    <!-- all line chart activation -->
    <script src="assets/js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="assets/js/pie-chart.js"></script>
    <!-- all bar chart -->
    <script src="assets/js/bar-chart.js"></script>
    <!-- all map chart -->
    <script src="assets/js/maps.js"></script>
    <script src="assets/table/script.js"></script>
    <script src='https://code.jquery.com/jquery-1.12.4.js'></script>
    <script src='https://code.jquery.com/ui/1.12.1/jquery-ui.js'></script>

    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>

    <script src="http://getbootstrap.com/2.3.2/assets/js/jquery.js"></script>
    <script src="http://getbootstrap.com/2.3.2/assets/js/bootstrap.js"></script>

    <script src="http://getbootstrap.com/2.3.2/assets/js/holder/holder.js"></script>
    <script src="http://getbootstrap.com/2.3.2/assets/js/google-code-prettify/prettify.js"></script>
    <script src="https://kit.fontawesome.com/f6ab84c8d1.js" crossorigin="anonymous"></script>

    <script src="http://getbootstrap.com/2.3.2/assets/js/application.js"></script>

</body>

</html>