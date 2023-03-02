<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>TMS BD</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: #012f53;">
            <a class="navbar-brand" href="{{route('home')}}">TMS BD</a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation"></button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About Us</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="#">History</a>
                            <a class="dropdown-item" href="#">Why Choose Us</a>
                            <a class="dropdown-item" href="#">Career</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Media</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="#">News</a>
                            <a class="dropdown-item" href="#">Video</a>
                            <a class="dropdown-item" href="#">Photos</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Contact Us</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="#">Address</a>
                            <a class="dropdown-item" href="#">Contact form</a>
                        </div>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
        <nav class="breadcrumb">
            <a class="breadcrumb-item" href="#">Main</a>
            <a class="breadcrumb-item" href="#">Sub</a>
            <span class="breadcrumb-item active" aria-current="page">Active</span>
        </nav>
    </header>
    <div class="body">
        @yield('Main-body')
    </div>
    <footer>
        <div class="card">
            <div class="card-body">
                <div class="row">
                  <div class="col-md-4">
                    <div class="card">
                      <div class="card-body">
                        <h3 class="card-title">Address</h3>
                        <p class="card-text">
                            Dhaka-1276 <br>
                            Bangladesh
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card">
                      <div class="card-body">
                        <h3 class="card-title">Contect</h3>
                        <p class="card-text">
                            Phone: <a href="tel:+8801735300454">+8801735300454</a><br>
                            Email: <a href="mailto:mdhidoyhassan@gmial.com">mdhidoyhassan@gmial.com</a>
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card">
                      <div class="card-body">
                        <h3 class="card-title">About</h3>
                        <p class="card-text">This an upcoming project</p>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="card-footer align-content-center" align="center">
                <div class="row">
                  <div class="col-md-6">
                      <div class="card-body">
                        <img src="http://www.rthd.gov.bd/themes/responsive_npf/img/np-logo-set.png" alt="">
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="card-body">
                        <p class="card-text">
                            পরিকল্পনা ও বাস্তবায়নে:&nbsp;
                            <a href="http://www.cabinet.gov.bd/" title="মন্ত্রিপরিষদবিভাগ">মন্ত্রিপরিষদবিভাগ</a>,&nbsp;
                            <a href="https://a2i.gov.bd" title="এটুআই">এটুআই</a>,&nbsp;
                            <a href="http://www.bcc.net.bd/" title="বিসিসি">বিসিসি</a>,&nbsp;
                            <a href="http://doict.gov.bd/" title="ডিওআইসিটি">ডিওআইসিটি</a>&nbsp;ও&nbsp;
                            <a href="http://www.basis.org.bd/" title="বেসিস">বেসিস</a>।
                        </p>
                      </div>
                  </div>
                </div>
            </div>
            <div class="card-footer align-content-center" align="center">
                @coppyRight 2023, Workspace Infotech Limited
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
