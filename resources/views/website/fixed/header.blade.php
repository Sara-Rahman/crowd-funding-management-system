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
                            <a class="nav-link" href="index-2.html">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="Causes.html">Causes</a>
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
                        <li class="d-none d-lg-block">
                            <a class="btn_1" href="{{route('create.donor')}}" style="text-decoration: none">Register/Login</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>