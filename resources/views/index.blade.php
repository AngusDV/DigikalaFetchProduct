<!DOCTYPE html>

<html lang="en" dir="rtl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


    <title>Digikala Product Fetch</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <!-- Latest compiled and minified CSS BS 3.0.
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">-->
    <link href="/assets/css/bootstrap-classic-plus-theme.css" rel="stylesheet">

    <link href="/assets/css/jquery.mCustomScrollbar.css" rel="stylesheet">

    <!-- GOOGLE FONT-->
    <link href="/assets/css/css" rel="stylesheet" type="text/css">
    <link href="/assets/css/fonts.css" rel="stylesheet" type="text/css">
    <!-- /GOOGLE FONT-->
    <style type="text/css">
        ::placeholder, ::-webkit-input-placeholder {
            color: gray;
            opacity: 0.5; /* Firefox */
            font-size: small;
        }

        body {
            padding-top: 50px;
            padding-bottom: 40px;
            font-family: 'IRANSans_FaNum';

        }

        .navbar .container {
            max-width: 1170px;
        }

        h1, h2, h3, h4, h5, h6 {
            font-weight: 200;
        }

        .navbar {
            border-radius: 0px;
            direction: rtl;
        }


        .page-header {
            border: none;
            padding: 10px 0px 0px;
            margin: 0px 0 0px;
        }

        .brand {
            color: #282828;
            margin-left: 20px;
            font-weight: 700;
        }

        .thumbnail {
            margin-bottom: 20px;
            padding: 0px;
            -webkit-border-radius: 0px;
            -moz-border-radius: 0px;
            border-radius: 0px;

        }

        .panel {
            min-height: 40px;
            margin-bottom: 20px;
        }

        .nav {
            direction: rtl;
            padding-right: 0px;
        }

        .nav-tabs {
            margin-bottom: 15px;
            direction: rtl;

        }


        .nav-tabs > li > a {

            -webkit-border-radius: 0px;
            -moz-border-radius: 0px;
            border-radius: 0px;
        }

        .nav-tabs > li {
            float: right;
        }

        .carousel-inner > .item > img,
        .carousel-inner > .item > a > img {
            min-width: 100%;
        }

        /* CUSTOM DROPDOWNS STYLE FOR SHOPING CART
        ========================================= */
        .dropdown-menu.dropdown-cart .list-group-item {
            padding-top: 10px;
            padding-bottom: 10px;
            min-width: 250px;
        }

        .dropdown-menu .list-group-item:first-child {
            border-radius: 0px;
        }

        .dropdown-menu.dropdown-cart {
            padding-top: 0px;
            padding-bottom: 0px;
        }

        .dropdown-menu.dropdown-cart {
            padding-top: 0px;
            padding-bottom: 0px;
        }

        .list-group-item > .badge {
            float: right;
            margin-right: -15px;
            margin-left: 10px;
        }


        .fixed-top {
            position: fixed;
            top: 0px;
            bottom: 0px;
            display: inline-block;
            max-width: 370px;
            background: e0e0e0;
            barder: 1px solid #dfdfdf;
            z-index: 1030;
        }

        .tab-content .tab-pane {
            max-height: 600px;
            position: relative;
            overflow: auto;
            direction: rtl;
            text-align: right;
        }

        footer {
            padding-top: 40px;
            margin-top: 40px;
            border-top: 1px solid #dedede;
        }

        .related-projects {
            padding-top: 40px;
            margin-top: 40px;

        }

        #cat-navi select {
            display: none;
        }

        .carousel-control span, .carousel-control .icon-prev, .carousel-control .icon-next {
            position: absolute;
            top: 50%;
            left: 50%;
            z-index: 5;
            display: inline-block;
            width: 20px;
            height: 20px;
            margin-top: -10px;
            margin-left: -10px;
            font-family: serif;
        }

        /*************** @media ******************/
        @media (max-width: 940px) {
            .brand {
                display: block;
                text-align: center;
                font-size: 26px;
            }

            #cat-navi select {
                display: block;
                width: 100%;
            }

            #cat-navi li {
                display: none;
            }
        }

        @media (max-width: 1200px) and (min-width: 940px) {


        }

        @media (max-width: 940px) and (min-width: 768px) {
            .fixed-top {
                max-width: 225px;
            }

            .row-fluid [class*="span"].left-side:last-child {
                clear: both;
            }


        }

        .input-group .form-control:first-child, .input-group-addon:first-child, .input-group-btn:first-child > .btn, .input-group-btn:first-child > .dropdown-toggle, .input-group-btn:last-child > .btn:not(:last-child):not(.dropdown-toggle) {
            border-top-left-radius: 0px;
            border-bottom-left-radius: 0px;
            border-top-right-radius: 5px;
            border-bottom-right-radius: 5px;
        }

        .input-group .form-control:last-child, .input-group-addon:last-child, .input-group-btn:last-child > .btn, .input-group-btn:last-child > .dropdown-toggle, .input-group-btn:first-child > .btn:not(:first-child) {
            border-top-left-radius: 5px;
            border-bottom-left-radius: 5px;
            border-top-right-radius: 0px;
            border-bottom-right-radius: 0px;
        }


    </style>

    <link href="/assets/css/font-awesome.min.css" rel="stylesheet">

    <!--[if lt IE 7]>
    <link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome-ie7.min.css" rel="stylesheet">
    <![endif]-->
    <!-- Fav and touch icons -->


    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script>
    <![endif]-->
    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="/assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
          href="/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
          href="/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
          href="/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed"
          href="/assets/ico/apple-touch-icon-57-precomposed.png">

</head>
<body style="">

<nav class="navbar navbar-fixed-top navbar-inverse" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#" style="margin-left: 10px">DigiKala</a>
        </div>


    </div>
</nav>


<!-- PAGE-HEADER-->
<div class="page-header" style="padding-top:20px;">
    <div class="container">
        <div class="row">


            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6" style="margin-bottom:10px;">

                <form class="form-search" method="POST" action="{{route('product.fetch')}}">
                    @csrf
                    <div class="input-group">
                        <input type="text" name="slug" class="form-control input-lg"
                               placeholder="لطغا شناسه محصول را وارد نمایید">
                        <span class="input-group-btn">
									<button type="submit" class="btn btn-primary btn-lg">جست و جو</button>
								</span>
                    </div>
                </form>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 visible-lg">
                <h1 style="margin-top:0px !important;">Digikala</h1>
            </div>
        </div>


    </div>
</div>

<!-- /.page-header -->

<!-- MAIN CONTAINER-->
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-12 col-lg-12">
                    <h3>{{$product->data->product->title_fa}}</h3>
                    <p>
                        @foreach($product?->data?->product?->pros_and_cons?->advantages??[] as $advantage)
                            <span class="label label-info" style="margin-top:5px;">{{$advantage}}</span>
                    @endforeach

                    <p class="lead text-danger"><strong>
                            @if(isset($product?->data?->data_layer?->ecommerce?->detail?->products?->{"0"}?->price))
                                قیمت
                                محصول {{money_format_irr($product?->data?->data_layer?->ecommerce?->detail?->products?->{"0"}?->price??0)}}
                                ریال
                            @else
                                کالا ناموجود است
                            @endif
                        </strong>
                    </p>
                    </p>

                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div id="myCarousel" class="carousel slide">
                <ol class="carousel-indicators">
                    @php $index=0; @endphp
                    @foreach($product->data->product->images->list as $image)

                        <li data-target="#myCarousel" data-slide-to="{{$index}}"
                            @if($index==0) class="active" @endif ></li>
                        @php $index++; @endphp
                    @endforeach


                </ol>
                <div class="carousel-inner">
                    @php $index=0; @endphp
                    @foreach($product->data->product->images->list as $image)
                        @php $index++; @endphp
                        <div class="item @if($index==1) active @endif">
                            <img class="img-responsive" src="{{$image->url->{"0"} }}" alt="post image">
                        </div>
                    @endforeach
                </div>
                <a class="left carousel-control" href="#myCarousel"
                   data-slide="prev"><span class="icon-prev"></span></a>
                <a class="right carousel-control" href="#myCarousel"
                   data-slide="next"><span class="icon-next"></span></a>
            </div>
            <hr>
            <ul id="myTab" class="nav nav-tabs">
                <li class="active"><a href="#home" data-toggle="tab">معرفی</a></li>


            </ul>
            <div id="myTabContent" class="tab-content" style="margin-bottom:20px;">
                <div class="tab-pane fade active in" id="home">
                    <p>
                        {!! $product?->data?->product?->review?->description??'' !!}
                    </p>
                </div>

            </div>


        </div><!-- /.col-xs-12 col-sm-12 col-md-6 .carousel -->


    </div>
</div> <!-- /container -->


<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/assets/js/jquery.js" type="text/javascript"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="/assets/js/bootstrap.min.js"></script>


<script>
    /***************************************************
     responsive menu
     ***************************************************/

    jQuery(function (jQuery) {
        jQuery("#cat-navi").append("<select/>");
        jQuery("#cat-navi select").addClass("form-control");
        jQuery("<option />", {
            "selected": "selected",
            "value": "",
            "text": "Choose category"
        }).appendTo("#cat-navi select");
        //new dropdown menu
        jQuery("#cat-navi a").each(function () {
            var el = jQuery(this);
            var perfix = '';
            switch (el.parents().length) {
                case (11):
                    perfix = '-';
                    break;
                case (13):
                    perfix = '--';
                    break;
                default:
                    perfix = '';
                    break;

            }
            jQuery("<option />", {
                "value": el.attr("href"),
                "text": perfix + el.text()
            }).appendTo("#cat-navi select");
        });

        jQuery('#cat-navi select').change(function () {

            window.location.href = this.value;

        });
    });

</script>
@include('sweetalert::alert')


</body>
</html>
