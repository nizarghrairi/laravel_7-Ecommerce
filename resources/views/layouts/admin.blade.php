
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
          content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords"
          content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title>@yield('title')</title>
    <link rel="apple-touch-icon" href="{{asset('assets/admin/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/admin/images/ico/favicon.ico')}}">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
        rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
          rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css-rtl/plugins/animate/animate.css')}}">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css-rtl/vendors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/vendors/css/weather-icons/climacons.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/fonts/meteocons/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/vendors/css/charts/morris.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/vendors/css/charts/chartist.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/vendors/css/forms/selects/select2.min.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('assets/admin/vendors/css/charts/chartist-plugin-tooltip.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('assets/admin/vendors/css/forms/toggle/bootstrap-switch.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/vendors/css/forms/toggle/switchery.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css-rtl/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css-rtl/pages/chat-application.css')}}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN MODERN CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css-rtl/app.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css-rtl/custom-rtl.css')}}">
    <!-- END MODERN CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css"
          href="{{asset('assets/admin/css-rtl/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css-rtl/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/fonts/simple-line-icons/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css-rtl/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css-rtl/pages/timeline.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/vendors/css/cryptocoins/cryptocoins.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/}admin/vendors/css/extensions/datedropper.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/vendors/css/extensions/timedropper.min.css')}}">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css-rtl/style-rtl.css')}}">
    <!-- END Custom CSS-->

    <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Cairo', sans-serif;
        }
    </style>
</head>
<body class="vertical-layout vertical-menu 2-columns  @if(Request::is('admin/users/tickets/reply*')) chat-application @endif menu-expanded fixed-navbar"
      data-open="click" data-menu="vertical-menu" data-col="2-columns">
<!-- fixed-top-->

<!-- Begin Header -->
@include('admin.includes.header')
<!--End  Header -->

<!-- Begin SideBar-->
@include('admin.includes.sidebar')
<!--End Sidebare-->

<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <div id="crypto-stats-3" class="row">
                <div class="col-xl-4 col-12">
                    <div class="card crypto-card-3 pull-up">
                        <div class="card-content">
                            <div class="card-body pb-0">
                                <div class="row">
                                    <div class="col-2">
                                        <h1><i class="cc BTC warning font-large-2" title="BTC"></i></h1>
                                    </div>
                                    <div class="col-5 pl-2">
                                        <h4>BTC</h4>
                                        <h6 class="text-muted">Bitcoin</h6>
                                    </div>
                                    <div class="col-5 text-right">
                                        <h4>$9,980</h4>
                                        <h6 class="success darken-4">31% <i class="la la-arrow-up"></i></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <canvas id="btc-chartjs" class="height-75"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-12">
                    <div class="card crypto-card-3 pull-up">
                        <div class="card-content">
                            <div class="card-body pb-0">
                                <div class="row">
                                    <div class="col-2">
                                        <h1><i class="cc ETH blue-grey lighten-1 font-large-2" title="ETH"></i></h1>
                                    </div>
                                    <div class="col-5 pl-2">
                                        <h4>ETH</h4>
                                        <h6 class="text-muted">Ethereum</h6>
                                    </div>
                                    <div class="col-5 text-right">
                                        <h4>$944</h4>
                                        <h6 class="success darken-4">12% <i class="la la-arrow-up"></i></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <canvas id="eth-chartjs" class="height-75"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-12">
                    <div class="card crypto-card-3 pull-up">
                        <div class="card-content">
                            <div class="card-body pb-0">
                                <div class="row">
                                    <div class="col-2">
                                        <h1><i class="cc XRP info font-large-2" title="XRP"></i></h1>
                                    </div>
                                    <div class="col-5 pl-2">
                                        <h4>XRP</h4>
                                        <h6 class="text-muted">Balance</h6>
                                    </div>
                                    <div class="col-5 text-right">
                                        <h4>$1.2</h4>
                                        <h6 class="danger">20% <i class="la la-arrow-down"></i></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <canvas id="xrp-chartjs" class="height-75"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Candlestick Multi Level Control Chart -->

            <!-- Sell Orders & Buy Order -->
            <div class="row match-height">
                <div class="col-12 col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Sell Order</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <p class="text-muted">Total BTC available: 6542.56585</p>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="table-responsive">
                                <table class="table table-de mb-0">
                                    <thead>
                                    <tr>
                                        <th>Price per BTC</th>
                                        <th>BTC Ammount</th>
                                        <th>Total($)</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="bg-success bg-lighten-5">
                                        <td>10583.4</td>
                                        <td><i class="cc BTC-alt"></i> 0.45000000</td>
                                        <td>$ 4762.53</td>
                                    </tr>
                                    <tr>
                                        <td>10583.5</td>
                                        <td><i class="cc BTC-alt"></i> 0.04000000</td>
                                        <td>$ 423.34</td>
                                    </tr>
                                    <tr>
                                        <td>10583.7</td>
                                        <td><i class="cc BTC-alt"></i> 0.25100000</td>
                                        <td>$ 2656.51</td>
                                    </tr>
                                    <tr>
                                        <td>10583.8</td>
                                        <td><i class="cc BTC-alt"></i> 0.35000000</td>
                                        <td>$ 3704.33</td>
                                    </tr>
                                    <tr>
                                        <td>10595.7</td>
                                        <td><i class="cc BTC-alt"></i> 0.30000000</td>
                                        <td>$ 3178.71</td>
                                    </tr>
                                    <tr class="bg-danger bg-lighten-5">
                                        <td>10599.5</td>
                                        <td><i class="cc BTC-alt"></i> 0.02000000</td>
                                        <td>$ 211.99</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Buy Order</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <p class="text-muted">Total USD available: 9065930.43</p>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="table-responsive">
                                <table class="table table-de mb-0">
                                    <thead>
                                    <tr>
                                        <th>Price per BTC</th>
                                        <th>BTC Ammount</th>
                                        <th>Total($)</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="bg-danger bg-lighten-5">
                                        <td>10599.5</td>
                                        <td><i class="cc BTC-alt"></i> 0.02000000</td>
                                        <td>$ 211.99</td>
                                    </tr>
                                    <tr>
                                        <td>10583.5</td>
                                        <td><i class="cc BTC-alt"></i> 0.04000000</td>
                                        <td>$ 423.34</td>
                                    </tr>
                                    <tr>
                                        <td>10583.8</td>
                                        <td><i class="cc BTC-alt"></i> 0.35000000</td>
                                        <td>$ 3704.33</td>
                                    </tr>
                                    <tr>
                                        <td>10595.7</td>
                                        <td><i class="cc BTC-alt"></i> 0.30000000</td>
                                        <td>$ 3178.71</td>
                                    </tr>
                                    <tr class="bg-danger bg-lighten-5">
                                        <td>10583.7</td>
                                        <td><i class="cc BTC-alt"></i> 0.25100000</td>
                                        <td>$ 2656.51</td>
                                    </tr>
                                    <tr>
                                        <td>10595.8</td>
                                        <td><i class="cc BTC-alt"></i> 0.29697926</td>
                                        <td>$ 3146.74</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Sell Orders & Buy Order -->
            <!-- Active Orders -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Active Order</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <td>
                                    <button class="btn btn-sm round btn-danger btn-glow"><i class="la la-close font-medium-1"></i> Cancel all</button>
                                </td>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="table-responsive">
                                <table class="table table-de mb-0">
                                    <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Type</th>
                                        <th>Amount BTC</th>
                                        <th>BTC Remaining</th>
                                        <th>Price</th>
                                        <th>USD</th>
                                        <th>Fee (%)</th>
                                        <th>Cancel</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>2018-01-31 06:51:51</td>
                                        <td class="success">Buy</td>
                                        <td><i class="cc BTC-alt"></i> 0.58647</td>
                                        <td><i class="cc BTC-alt"></i> 0.58647</td>
                                        <td>11900.12</td>
                                        <td>$ 6979.78</td>
                                        <td>0.2</td>
                                        <td>
                                            <button class="btn btn-sm round btn-outline-danger"> Cancel</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2018-01-31 06:50:50</td>
                                        <td class="danger">Sell</td>
                                        <td><i class="cc BTC-alt"></i> 1.38647</td>
                                        <td><i class="cc BTC-alt"></i> 0.38647</td>
                                        <td>11905.09</td>
                                        <td>$ 4600.97</td>
                                        <td>0.2</td>
                                        <td>
                                            <button class="btn btn-sm round btn-outline-danger"> Cancel</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2018-01-31 06:49:51</td>
                                        <td class="success">Buy</td>
                                        <td><i class="cc BTC-alt"></i> 0.45879</td>
                                        <td><i class="cc BTC-alt"></i> 0.45879</td>
                                        <td>11901.85</td>
                                        <td>$ 5460.44</td>
                                        <td>0.2</td>
                                        <td>
                                            <button class="btn btn-sm round btn-outline-danger"> Cancel</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2018-01-31 06:51:51</td>
                                        <td class="success">Buy</td>
                                        <td><i class="cc BTC-alt"></i> 0.89877</td>
                                        <td><i class="cc BTC-alt"></i> 0.89877</td>
                                        <td>11899.25</td>
                                        <td>$ 10694.6</td>
                                        <td>0.2</td>
                                        <td>
                                            <button class="btn btn-sm round btn-outline-danger"> Cancel</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2018-01-31 06:51:51</td>
                                        <td class="danger">Sell</td>
                                        <td><i class="cc BTC-alt"></i> 0.45712</td>
                                        <td><i class="cc BTC-alt"></i> 0.45712</td>
                                        <td>11908.58</td>
                                        <td>$ 5443.65</td>
                                        <td>0.2</td>
                                        <td>
                                            <button class="btn btn-sm round btn-outline-danger"> Cancel</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2018-01-31 06:51:51</td>
                                        <td class="success">Buy</td>
                                        <td><i class="cc BTC-alt"></i> 0.58647</td>
                                        <td><i class="cc BTC-alt"></i> 0.58647</td>
                                        <td>11900.12</td>
                                        <td>$ 6979.78</td>
                                        <td>0.2</td>
                                        <td>
                                            <button class="btn btn-sm round btn-outline-danger"> Cancel</button>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Active Orders -->
        </div>
    </div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->

<!-- Begin Footer-->
@include('admin.includes.footer')
<!--End Footer-->

@notify_js
@notify_render

<!-- BEGIN VENDOR JS-->
<script src="{{asset('assets/admin/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<script src="{{asset('assets/admin/vendors/js/tables/datatable/datatables.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('assets/admin/vendors/js/tables/datatable/dataTables.buttons.min.js')}}"
        type="text/javascript"></script>

<script src="{{asset('assets/admin/vendors/js/forms/toggle/bootstrap-switch.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('assets/admin/vendors/js/forms/toggle/bootstrap-checkbox.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('assets/admin/vendors/js/forms/toggle/switchery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin/js/scripts/forms/switch.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin/vendors/js/forms/select/select2.full.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin/js/scripts/forms/select/form-select2.js')}}" type="text/javascript"></script>

<!-- BEGIN PAGE VENDOR JS-->
<script src="{{asset('assets/admin/vendors/js/charts/chart.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin/vendors/js/charts/echarts/echarts.js')}}" type="text/javascript"></script>

<script src="{{asset('assets/admin/vendors/js/extensions/datedropper.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin/vendors/js/extensions/timedropper.min.js')}}" type="text/javascript"></script>

<script src="{{asset('assets/admin/vendors/js/forms/icheck/icheck.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin/js/scripts/pages/chat-application.js')}}" type="text/javascript"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN MODERN JS-->
<script src="{{asset('assets/admin/js/core/app-menu.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin/js/core/app.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin/js/scripts/customizer.js')}}" type="text/javascript"></script>
<!-- END MODERN JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script src="{{asset('assets/admin/js/scripts/pages/dashboard-crypto.js')}}" type="text/javascript"></script>


<script src="{{asset('assets/admin/js/scripts/tables/datatables/datatable-basic.js')}}"
        type="text/javascript"></script>
<script src="{{asset('assets/admin/js/scripts/extensions/date-time-dropper.js')}}" type="text/javascript"></script>
<!-- END PAGE LEVEL JS-->

<script src="{{asset('assets/admin/js/scripts/forms/checkbox-radio.js')}}" type="text/javascript"></script>

<script src="{{asset('assets/admin/js/scripts/modal/components-modal.js')}}" type="text/javascript"></script>

<script>
    $('#meridians1').timeDropper({
        meridians: true,
        setCurrentTime: false
    });
    $('#meridians2').timeDropper({
        meridians: true,setCurrentTime: false

    });
    $('#meridians3').timeDropper({
        meridians: true,
        setCurrentTime: false
    });
    $('#meridians4').timeDropper({
        meridians: true,
        setCurrentTime: false
    });
    $('#meridians5').timeDropper({
        meridians: true,setCurrentTime: false

    });
    $('#meridians6').timeDropper({
        meridians: true,setCurrentTime: false
    });
    $('#meridians7').timeDropper({
        meridians: true,setCurrentTime: false
    });
    $('#meridians8').timeDropper({
        meridians: true,setCurrentTime: false
    });
    $('#meridians9').timeDropper({
        meridians: true,setCurrentTime: false
    });
    $('#meridians10').timeDropper({
        meridians: true,setCurrentTime: false
    });
    $('#meridians11').timeDropper({
        meridians: true,setCurrentTime: false
    });
    $('#meridians12').timeDropper({
        meridians: true,setCurrentTime: false
    });
    $('#meridians13').timeDropper({
        meridians: true,setCurrentTime: false
    });
    $('#meridians14').timeDropper({
        meridians: true,setCurrentTime: false
    });
</script>

</body>
</html>

