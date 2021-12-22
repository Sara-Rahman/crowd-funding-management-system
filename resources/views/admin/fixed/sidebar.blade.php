<div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
    <div class="nano">
         <div class="nano-content">
            <ul>
                <div class="logo"><a href="index.html">
                        <!-- <img src="assets/images/logo.png" alt="" /> --><span>Radiant Foundation</span></a></div>
                <li class="label">Main</li>
                <li><a class="sidebar-sub-toggle" ><i class="ti-home"></i> Dashboard <span
                            {{-- class="badge badge-primary">2</span> <span --}}
                            class=""></span></a>
                    {{-- <ul>
                        <li><a href="index.html">Dashboard 1</a></li>
                        <li><a href="index1.html">Dashboard 2</a></li>
                    </ul> --}}
                </li>

                <li class="label">Apps</li>
                <li><a class="sidebar-sub-toggle"><i class="ti-user"></i> Admin <span
                            class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="{{route('cause')}}">Causes</a></li>
                        {{-- <li><a href="/crisis">Crisis</a></li> --}}
                        <li><a href="/">Report</a></li>
                    </ul>
                </li>




               
                <li><a class="sidebar-sub-toggle"><i class="ti-user"></i> Donor <span
                            class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="{{route('donor.profile')}}">Donor Profile</a></li>
                        <li><a href="{{route('donation')}}">Donation</a></li>
                        
                    </ul>
                </li>


                
                <li><a class="sidebar-sub-toggle"><i class="ti-user"></i> Volunteer <span
                            class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="{{route('volunteer.profile')}}">Volunteer Profile</a></li>
                        <li><a href="{{route('distribution')}}">Distribution</a></li>
                    </ul>
                </li>

                <li><a class="sidebar-sub-toggle" ><i class="ti-user"></i> Crisis Category <span
                    class="sidebar-collapse-icon ti-angle-down"></span></a>
            <ul>
                <li><a href="{{route('category.list')}}">Category List</a></li>
               
            </ul>
        </li>






                
                <li><a href="#"><i class="ti-email"></i> Email</a></li>
                <li><a href="#"><i class="ti-user"></i> Profile</a></li>
                
              
           
                
                
                {{-- <li><a class="sidebar-sub-toggle"><i class="ti-target"></i> Pages <span
                            class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="page-login.html">Login</a></li>
                        <li><a href="page-register.html">Register</a></li>
                        <li><a href="page-reset-password.html">Forgot password</a></li>
                    </ul>
                </li>
                <li><a href="../documentation/index.html"><i class="ti-file"></i> Documentation</a></li> --}}
                <li><a href="{{route('admin.logout')}}"><i class="ti-close"></i> Logout</a></li>
            </ul>
        </div>
    </div>
</div>