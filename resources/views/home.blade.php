<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com"/>
    <link
        href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap"
        rel="stylesheet"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
    <title>Apartment</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .header {
            padding: 40px 0 0 0;
        }

        .nav ul {
            position: relative;
            left: -30px;
        }

        .nav ul li {
            float: left;
            list-style: none;
            margin-right: 10px;
        }

        .aside {
            padding-right: 30px;
        }

        .article {
            padding-left: 30px;
        }

        .section-main {
            margin-top: 40px;
        }
        .article ul li {
            list-style: none;
            padding: 5px 0;
        }

        .article ul li:nth-child(2n + 0){
            background-color: #ddd;
        }
        .article ul li a{
            color: #2d3748;

        }

    </style>
</head>
<body>
<header>
    <div class="container">
        <div class="header">
            <div>
                <i class="fas fa-hotel fa-4x"></i>
                <p style="font-size: 16px; font-weight: bold">Sweet Home</p>
            </div>
            <div class="nav">
                <ul>
                    <li><a href="#">Home </a> |</li>
                    <li><a href="#">Best Home </a> |</li>
                    <li><a href="#">Life Style </a> |</li>
                    <li><a href="#">About Us </a> |</li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
<section class="section-main">
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="aside"></div>
                <h4>Newest Home</h4>
                <div class="content row" style="border: 3px solid #eceff1; background-color:#f5f5f5">
                    @foreach($apartments as $item)
                        <div class="col-md-4 item" style="padding-top: 15px; text-align: center">
                            <img style="width: 266px; height: 180px;" src="{{asset($item->getImage())}}" alt="img">
                            <b>{{$item->name}}</b>
                            <p>{{$item->price}} vnđ / m2</p>
                            <p>{{$item->status}}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="col-md-3">
                <div class="article " >
                    <div style="display: flex">
                        <input class="form-control" type="text" width="100%" /> <i style="font-size: 20px; position: absolute; margin: 9px; right: 120px" class="fa fa-search"></i>
                    </div>
                    <h5 style="padding: 40px 0 20px 0">Search By Area</h5>
                    <ul>
                        <li><a href="#">Distric 1</a></li>
                        <li><a href="#">Distric 2</a></li>
                        <li><a href="#">Distric 3</a></li>
                        <li><a href="#">Distric 4</a></li>
                        <li><a href="#">Distric 5</a></li>
                    </ul>

                    <h5 style="padding: 40px 0 20px 0">Search By Price</h5>
                    <ul>
                        <li><a href="#"><100000$</a></li>
                        <li><a href="#">100000$-150000$</a></li>
                        <li><a href="#">150000$-200000$</a></li>
                        <li><a href="#">200000$-250000$</a></li>
                        <li><a href="#">250000$-300000$</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

</body>
</html>
