<div class="container">
    <div class="row align-items-center">
        <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg navbar-light">
                {{-- <a class="navbar-brand" href="index-2.html"> <img src="{{url('Frontend/img/xlogo.png.pagespeed.ic.Lfr6LQKlW0.png')}}" alt="logo"> </a> --}}
                <a class="navbar-brand" href="index-2.html" style="background-color: white" ><img src="{{url('Frontend/img/rad.png')}}" alt="logo">Radiant Foundation </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="ti-menu"></span>
                </button>
                <div class="collapse navbar-collapse main-menu-item justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav align-items-center">

                        
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('website')}}">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Causes</a>
                        </li>
                        
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Pages
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="team.html">team</a>
                                <a class="dropdown-item" href="elements.html">Elements</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="blog.html" id="navbarDropdown_1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                blog
                            </a>
                            
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>

                        @if(auth()->user())
                        <!-- Button trigger modal -->
                        {{-- <a class="btn btn-info" href="#" style="text-decoration: none"> {{auth()->user()->name}}</a> --}}
                        <a class="btn_1" href="{{route('details.donation')}}" style="text-decoration: none">Donations of {{auth()->user()->name}}</a>

                        <a href="{{route('donor.logout')}}" class="btn btn-success">{{auth()->user()->name}} | Logout</a>
    
                            @else
                            <li class="d-none d-lg-block">
                                <a class="btn_1" href="{{route('create.donor')}}" style="text-decoration: none">Register</a>
                            </li><br><br>
    
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#donorlogin">
                                    Login
                                </button>
                            @endif
                       
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    @if(session()->has('error'))
    <p class="alert alert-danger">{{session()->get('error')}}</p>
@endif
@if(session()->has('message'))
    <p class="alert alert-success">{{session()->get('message')}}</p>
@endif
</div>


<!-- Login Modal -->
<div class="modal fade" id="donorlogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{route('donor.login')}}" method="post">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Donor Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label for="">Enter Email:</label>
                        <input name="email" type="email" class="form-control" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="">Enter Password:</label>
                        <input name="password" type="password" class="form-control" placeholder="Enter password">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </div>
        </form>
    </div>
</div>
