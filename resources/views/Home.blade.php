@extends('Home-Navbar')
@section('Main-body')
<section>
    <div id="my-carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li class="active" data-target="#my-carousel" data-slide-to="0" aria-current="location"></li>
            <li data-target="#my-carousel" data-slide-to="1"></li>
            <li data-target="#my-carousel" data-slide-to="2"></li>
            <li data-target="#my-carousel" data-slide-to="3"></li>
            <li data-target="#my-carousel" data-slide-to="4"></li>
            <li data-target="#my-carousel" data-slide-to="5"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{asset('home/toll-1.jpg')}}" alt="" style="height: 600px">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Title</h5>
                    <p>Text</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('home/toll-2.jpg')}}" alt=""style="height: 600px">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Title</h5>
                    <p>Text</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('home/toll-3.jpg')}}" alt=""style="height: 600px">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Title</h5>
                    <p>Text</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('home/toll-4.jpg')}}" alt=""style="height: 600px">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Title</h5>
                    <p>Text</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('home/toll-5.jpg')}}" alt=""style="height: 600px">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Title</h5>
                    <p>Text</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('home/toll-6.jpg')}}" alt=""style="height: 600px">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Title</h5>
                    <p>Text</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#my-carousel" data-slide="prev" role="button">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#my-carousel" data-slide="next" role="button">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>
<section>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title" align="center">About Us</h5>
            <p class="card-text">
                <div class="card-group">
                    <div class="card">
                        <img class="card-img-top" src="{{asset('home/toll-7.jpg')}}" alt="Card image cap">
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text">
                                In Bangladesh, tolls are collected from vehicles using a manual system where toll collectors manually collect money from vehicles passing through toll plazas. This system is prone to errors, inefficiencies, and revenue leakages. However, there are plans to implement an electronic toll collection (ETC) system to improve the efficiency of toll collection.

                                The ETC system will use electronic tags or stickers on vehicles to automatically deduct toll fees from a pre-paid account as the vehicle passes through the toll plaza. This will reduce waiting times for vehicles and eliminate the need for manual toll collection. The system will also enable real-time monitoring of toll collection, ensuring that all revenue is collected and accounted for.

                                There are already some ETC systems in operation in Bangladesh, such as the Dhaka-Chittagong Highway ETC system. However, there is a need for a more comprehensive and integrated ETC system across the country to improve toll collection and management.

                                In addition to toll roads, tolls are also collected from vehicles using some bridges in Bangladesh. The toll rates for both toll roads and bridges are set by the government and vary depending on the type of vehicle and distance traveled.
                            </p>
                        </div>
                    </div>
                </div>
            </p>
        </div>
    </div>
</section>
<section>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title" align="center">Title</h5>
            <p class="card-text">
                <div class="card-group">
                    <div class="card">

                        <div class="card-body">
                            <p class="card-text">

                                In Bangladesh, tolls are collected from vehicles using a manual system where toll collectors manually collect money from vehicles passing through toll plazas. This system is prone to errors, inefficiencies, and revenue leakages. However, there are plans to implement an electronic toll collection (ETC) system to improve the efficiency of toll collection.

                                The ETC system will use electronic tags or stickers on vehicles to automatically deduct toll fees from a pre-paid account as the vehicle passes through the toll plaza. This will reduce waiting times for vehicles and eliminate the need for manual toll collection. The system will also enable real-time monitoring of toll collection, ensuring that all revenue is collected and accounted for.

                                There are already some ETC systems in operation in Bangladesh, such as the Dhaka-Chittagong Highway ETC system. However, there is a need for a more comprehensive and integrated ETC system across the country to improve toll collection and management.

                                In addition to toll roads, tolls are also collected from vehicles using some bridges in Bangladesh. The toll rates for both toll roads and bridges are set by the government and vary depending on the type of vehicle and distance traveled.
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <div id="my-carousel-1" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li class="active" data-target="#my-carousel-1" data-slide-to="6" aria-current="location"></li>
                                <li data-target="#my-carousel-1" data-slide-to="7"></li>
                                <li data-target="#my-carousel-1" data-slide-to="8"></li>
                                <li data-target="#my-carousel-1" data-slide-to="9"></li>
                                <li data-target="#my-carousel-1" data-slide-to="10"></li>
                                <li data-target="#my-carousel-1" data-slide-to="11"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="{{asset('home/toll-1.jpg')}}" alt="" style="height: 600px">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Title</h5>
                                        <p>Text</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{asset('home/toll-2.jpg')}}" alt=""style="height: 600px">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Title</h5>
                                        <p>Text</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{asset('home/toll-3.jpg')}}" alt=""style="height: 600px">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Title</h5>
                                        <p>Text</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{asset('home/toll-4.jpg')}}" alt=""style="height: 600px">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Title</h5>
                                        <p>Text</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{asset('home/toll-5.jpg')}}" alt=""style="height: 600px">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Title</h5>
                                        <p>Text</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{asset('home/toll-6.jpg')}}" alt=""style="height: 600px">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Title</h5>
                                        <p>Text</p>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#my-carousel-1" data-slide="prev" role="button">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#my-carousel-1" data-slide="next" role="button">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </p>
        </div>
    </div>
</section>
<section>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title" align="center">About Us</h5>
            <p class="card-text">
                <div class="card-group">
                    <div class="card">
                        <div id="map" style="width:100%;height:400px;">
                            {{-- map view --}}
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text">
                                In Bangladesh, tolls are collected from vehicles using a manual system where toll collectors manually collect money from vehicles passing through toll plazas. This system is prone to errors, inefficiencies, and revenue leakages. However, there are plans to implement an electronic toll collection (ETC) system to improve the efficiency of toll collection.

                                The ETC system will use electronic tags or stickers on vehicles to automatically deduct toll fees from a pre-paid account as the vehicle passes through the toll plaza. This will reduce waiting times for vehicles and eliminate the need for manual toll collection. The system will also enable real-time monitoring of toll collection, ensuring that all revenue is collected and accounted for.

                                There are already some ETC systems in operation in Bangladesh, such as the Dhaka-Chittagong Highway ETC system. However, there is a need for a more comprehensive and integrated ETC system across the country to improve toll collection and management.

                                In addition to toll roads, tolls are also collected from vehicles using some bridges in Bangladesh. The toll rates for both toll roads and bridges are set by the government and vary depending on the type of vehicle and distance traveled.
                            </p>
                        </div>
                    </div>
                </div>
            </p>
        </div>
    </div>
</section>
<section>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title" align="center">Title</h5>
            <p class="card-text">
                <div class="card-group">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text">

                            <div class="table-responsive">
                                <table class="table table-striped
                                table-hover
                                table-borderless
                                table-primary
                                align-middle">
                                    <thead class="table-light">
                                        <caption><a href="#" class="btn-outline-primary">Seen More</a></caption>
                                        <tr>
                                            <th>Column 1</th>
                                            <th>Column 2</th>
                                            <th>Column 3</th>
                                        </tr>
                                        </thead>
                                        <tbody class="table-group-divider">
                                            @for ($i=0;$i<3;$i++)
                                            <tr class="table-primary" >
                                                <td scope="row">Item</td>
                                                <td>Item</td>
                                                <td>Item</td>
                                            </tr>
                                            @endfor
                                        </tbody>
                                </table>
                            </div>
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text">

                            <div class="table-responsive">
                                <table class="table table-striped
                                table-hover
                                table-borderless
                                table-primary
                                align-middle">
                                    <thead class="table-light">
                                        <caption><a href="#" class="btn-outline-primary">Seen More</a></caption>
                                        <tr>
                                            <th>Column 1</th>
                                            <th>Column 2</th>
                                            <th>Column 3</th>
                                        </tr>
                                        </thead>
                                        <tbody class="table-group-divider">
                                            @for ($i=0;$i<3;$i++)
                                            <tr class="table-primary" >
                                                <td scope="row">Item</td>
                                                <td>Item</td>
                                                <td>Item</td>
                                            </tr>
                                            @endfor
                                        </tbody>
                                </table>
                            </div>
                            </p>
                        </div>
                    </div>
                </div>

            </p>
        </div>
    </div>
</section>
<section>
    <div class="card-group">
        <div class="card">
            <div class="card-body">
                <p class="card-text">
                    <div class="row">
                        @for ($i=0;$i<10;$i++)
                        <div class="col-lg-4">
                            <div class="card">
                              <div class="card-body">
                                <h3 class="card-title">Title</h3>
                                <p class="card-text">Text</p>
                              </div>
                            </div>
                        </div>
                        @endfor
                    </div>
                </p>
            </div>
        </div>
    </div>
</section>
<script>
    function myMap() {
        var mapProp= {
        center:new google.maps.LatLng(51.508742,-0.120850),
        zoom:5,
        };
        var map = new google.maps.Map(document.getElementById("map"),mapProp);
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?AIzaSyA11DCeH-sCQcOBt7KKOblZeNmJbT7fDfk&callback=myMap"></script>
@endsection
