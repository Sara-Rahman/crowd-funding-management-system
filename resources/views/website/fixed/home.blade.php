@extends('website.master')

@section('content')
<section class="banner_part">
    
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 offset-lg-5">
                <div class="banner_text">
                    <div class="banner_text_iner">
                        <h1>Bless others with
                            your gift</h1>
                            <p>Fish isn't thing there a god whales fruit gathering the second so
                                third beginning open multiply in land multiply Saw saw lesser tree
                                fom image his made heaven.</p>
                                <a href="{{route('create.donation')}}" class="btn_2">Start Donation</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        
        <section class="feature_part">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <div class="section_tittle text-center">
                            <p>Awesome Feature</p>
                            <h2>How Could You Help </h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-sm-6">
                        <div class="single_feature">
                            <div class="single_feature_part">
                                <div class=" d-flex align-items-center">
                                    <img src="{{url('Frontend/img/icon/feature_1.svg')}}" alt="">
                                    <h4>Give Donation</h4>
                                </div>
                                <p>Our his abundantly subdue she'd night own of two two his deasons face you place can upon
                                    letter.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-sm-6">
                            <div class="single_feature">
                                <div class="single_feature_part">
                                    <div class=" d-flex align-items-center">
                                        <img src="{{url('Frontend/img/icon/feature_2.svg')}}" alt="">
                                        <h4>Become A Volunteer</h4>
                                    </div>
                                    <p>Our his abundantly subdue she'd night own of two two his deasons face you place can upon
                                        letter.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-sm-6">
                                <div class="single_feature">
                                    <div class="single_feature_part">
                                        <div class=" d-flex align-items-center">
                                            <img src="{{url('Frontend/img/icon/feature_3.svg')}}" alt="">
                                            <h4>Child Education</h4>
                                        </div>
                                        <p>Our his abundantly subdue she'd night own of two two his deasons face you place can upon
                                            letter.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-sm-6">
                                    <div class="single_feature">
                                        <div class="single_feature_part">
                                            <div class=" d-flex align-items-center">
                                                <img src="{{url('Frontend/img/icon/feature_4.svg')}}" alt="">
                                                <h4>Quick Fundraise</h4>
                                            </div>
                                            <p>Our his abundantly subdue she'd night own of two two his deasons face you place can upon
                                                letter.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        
                        
                        <section class="be_part">
                            <div class="container">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-lg-6">
                                        <div class="be_part_text">
                                            <h2>Be a part of the break
                                                through and make someones
                                                dream come true</h2>
                                                <p>Our his abundantly subdue she'd night own of two two his herb seasons
                                                    face you hesea placees can't upon dominion make beginning fowl waters
                                                    seasons in also moveth hand beginning living face kind beginning from asid</p>
                                                    <a href="#" class="btn_2">learn more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="{{url('Frontend/img/xCharity.jpg.pagespeed.ic.V0bH4pUKLJ.jpg')}}" alt="" class="be_img">
                                </section>
                                
                                
                                
                                
                                
                                <section class="counter">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="single_counter d-flex">
                                                    <img src="{{url('Frontend/img/icon/feature_1.svg')}}" alt="">
                                                    <div class="single_counter_text">
                                                        <p>Total Collection</p>
                                                        <span class="count">58,9672412</span>
                                                    </div>
                                                </div>
                                                <div class="single_counter d-flex">
                                                    <img src="{{url('Frontend/img/icon/feature_2.svg')}}" alt="">
                                                    <div class="single_counter_text">
                                                        <p>Helped People</p>
                                                        <span class="count">58,9672412</span>
                                                    </div>
                                                </div>
                                                <div class="single_counter d-flex">
                                                    <img src="{{url('Frontend/img/icon/feature_3.svg')}}" alt="">
                                                    <div class="single_counter_text">
                                                        <p>Total Volunteer</p>
                                                        <span class="count">58,9672412</span>
                                                    </div>
                                                </div>
                                                <div class="single_counter d-flex">
                                                    <img src="{{url('Frontend/img/icon/feature_4.svg')}}" alt="">
                                                    <div class="single_counter_text">
                                                        <p>Successed Mission</p>
                                                        <span class="count">58,967</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                
                                
                                <section class="passion_part section_padding">
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="col-xl-8">
                                                <div class="section_tittle text-center">
                                                    <p>Donation shows Passion</p>
                                                    <h2>Featured causes</h2>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            @foreach($crisislist as $key=>$item)
                                            <div class="col-sm-6 col-lg-4 col-xl-4">

                                                
                                                
                                                
                                                
                                                <div class="single-home-passion">
                                                   
                                                    <div class="card">
                                                        
                                                        <img src="{{url('Frontend/img/passion/xpassion_1.png.pagespeed.ic.bm_OTCxKdr.png')}}" class="card-img-top" alt="blog">
                                                        <div class="card-body">
                                                            <a href="passion.html">
                                                                <h5 class="card-title">Food Crisis </h5>
                                                                </a>
                                                                <div class="skill">
                                                                    <div class="skill-bar skill11 wow slideInLeft animated">
                                                                        <span class="skill-count11">75%</span>
                                                                    </div>
                                                                </div>
                                                                <ul>
                                                                    <li><img src="{{url('Frontend/img/icon/passion_1.svg')}}" alt=""> Name: {{$item->name}}</li>
                                                                    <li><img src="{{url('Frontend/img/icon/passion_2.svg')}}" alt="">Target Amount: {{$item->amount}}</li>
                                                                </ul>
                                                                <a href="#" class="btn_3">read more</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                   
                                                </div>
                                                @endforeach


                                                {{-- <div class="col-sm-6 col-lg-4 col-xl-4">


                                                    <div class="single-home-passion">
                                                        <div class="card">
                                                            <img src="{{url('Frontend/img/passion/xpassion_2.png.pagespeed.ic._VtGXeUdQ_.png')}}" class="card-img-top" alt="blog">
                                                            <div class="card-body">
                                                                <a href="passion.html">
                                                                    <h5 class="card-title">Fourth created forth fill moving
                                                                        created subdue be </h5>
                                                                    </a>
                                                                    <div class="skill">
                                                                        <div class="skill-bar skill11 wow slideInLeft animated">
                                                                            <span class="skill-count11">75%</span>
                                                                        </div>
                                                                    </div>
                                                                    <ul>
                                                                        <li><img src="{{url('Frontend/img/icon/passion_1.svg')}}" alt=""> Goal: $2500</li>
                                                                        <li><img src="{{url('Frontend/img/icon/passion_2.svg')}}" alt=""> Raised: $1533</li>
                                                                    </ul>
                                                                    <a href="#" class="btn_3">read more</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-sm-6 col-lg-4 col-xl-4">
                                                        <div class="single-home-passion">
                                                            <div class="card">
                                                                <img src="{{url('Frontend/img/passion/xpassion_3.png.pagespeed.ic.78QuBbmyTG.png')}}" class="card-img-top" alt="blog">
                                                                <div class="card-body">
                                                                    <a href="passion.html">
                                                                        <h5 class="card-title">Fourth created forth fill moving
                                                                            created subdue be </h5>
                                                                        </a>
                                                                        <div class="skill">
                                                                            <div class="skill-bar skill11 wow slideInLeft animated">
                                                                                <span class="skill-count11">75%</span>
                                                                            </div>
                                                                        </div>
                                                                        <ul>
                                                                            <li><img src="{{url('Frontend/img/icon/passion_1.svg')}}" alt=""> Goal: $2500</li>
                                                                            <li><img src="{{url('Frontend/img/icon/passion_2.svg')}}" alt=""> Raised: $1533</li>
                                                                        </ul>
                                                                        <a href="#" class="btn_3">read more</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> --}}
                                            </section>
                                            
                                            
                                            <section class="intro_video_bg">
                                                <div class="container">
                                                    <div class="row justify-content-center">
                                                        <div class="col-md-8 col-lg-6">
                                                            <div class="intro_video_iner text-center">
                                                                <h2>Forget what you can get and
                                                                    see what you can give</h2>
                                                                    <a href="{{route('create.volunteer')}}" class="btn_2">Become a Volunteer</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                
                                                
                                                <section class="volunteers_part section_padding">
                                                    <div class="container">
                                                        <div class="row justify-content-center">
                                                            <div class="col-xl-8">
                                                                <div class="section_tittle text-center">
                                                                    <p>volunteers</p>
                                                                    <h2>Expert Volunteers</h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">

                                                            
                                                            @foreach($volunteerlist as $key=>$item)

                                                            


                                                            {{-- VOLUNTEERS --}}


                                                            <div class="col-sm-6 col-lg-3">
                                                                <div class="single_blog_item">
                                                                    <div class="single_blog_img">
                                                                        <img  src="{{url('uploads/volunteers/'.$item->image)}}" alt="volunteer">
                                                                        <div class="social_icon">
                                                                            <a href="#"> <i class="ti-facebook"></i> </a>
                                                                            <a href="#"> <i class="ti-twitter-alt"></i> </a>
                                                                            <a href="#"> <i class="ti-instagram"></i> </a>
                                                                            <a href="#"> <i class="ti-skype"></i> </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="single_text">
                                                                        <div class="single_blog_text">
                                                                            <h3>{{$item->name}}</h3>
                                                                            <p>{{$item->city}}</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                           
                                                    
                                                          

                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </section>
                                                
                                                
                                                <section class="blog_part padding_bottom">
                                                    <div class="container">
                                                        <div class="row justify-content-center">
                                                            <div class="col-xl-8">
                                                                <div class="section_tittle text-center">
                                                                    <p>OUr blog</p>
                                                                    <h2>Every Single Update</h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="single_blog">
                                                                    <div class="appartment_img">
                                                                        <img src="{{url('Frontend/img/xblog_1.png.pagespeed.ic.UA9A8ISLbp.png')}}" alt="">
                                                                    </div>
                                                                    <div class="single_appartment_content">
                                                                        <a href="blog.html">
                                                                            <h4>First cattle which earth unto let health for
                                                                                can get and see what you
                                                                            </h4>
                                                                        </a>
                                                                        <ul class="list-unstyled">
                                                                            <li><a href="#"> <span class="flaticon-calendar"></span> </a> May 10, 2019</li>
                                                                            <li><a href="#"> <span class="flaticon-comment"></span> </a> 1 comments</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="right_single_blog">
                                                                    <div class="single_blog">
                                                                        <div class="media">
                                                                            <div class="media-body align-self-center">
                                                                                <p><a href="#">healthy food</a></p>
                                                                                <a href="blog.html">
                                                                                    <h5 class="mt-0"> Man does day divided morning after give .</h5>
                                                                                </a>
                                                                                <ul class="list-unstyled">
                                                                                    <li><a href="#"> <span class="flaticon-calendar"></span> </a> May 10, 2019</li>
                                                                                    <li><a href="#"> <span class="flaticon-comment"></span> </a> 1 comments</li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="single_blog">
                                                                        <div class="media">
                                                                            <div class="media-body align-self-center">
                                                                                <p><a href="#">healthy food</a></p>
                                                                                <a href="blog.html">
                                                                                    <h5 class="mt-0"> To greater divide day hath fly moved was </h5>
                                                                                </a>
                                                                                <ul class="list-unstyled">
                                                                                    <li><a href="#"> <span class="flaticon-calendar"></span> </a> May 10, 2019</li>
                                                                                    <li><a href="#"> <span class="flaticon-comment"></span> </a> 1 comments</li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="single_blog">
                                                                        <div class="media">
                                                                            <div class="media-body align-self-center">
                                                                                <p><a href="#">healthy food</a></p>
                                                                                <a href="blog.html">
                                                                                    <h5 class="mt-0"> That likeness isn't air earth seas had cattle </h5>
                                                                                </a>
                                                                                <ul class="list-unstyled">
                                                                                    <li><a href="#"> <span class="flaticon-calendar"></span> </a> May 10, 2019</li>
                                                                                    <li><a href="#"> <span class="flaticon-comment"></span> </a> 1 comments</li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                
                                                
                                                <section class="client_part padding_bottom">
                                                    <div class="container">
                                                        <div class="row justify-content-center">
                                                            <div class="col-xl-8">
                                                                <div class="section_tittle text-center">
                                                                    <p>OUr Client</p>
                                                                    <h2>Worldwide Partners</h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row align-items-center">
                                                            <div class="col-lg-12">
                                                                <div class="client_logo owl-carousel">
                                                                    <div class="single_client_logo">
                                                                        <img src="{{url('Frontend/img/client_logo/xLogo_1.png.pagespeed.ic.k13XFWCmRf.png')}}" alt="">
                                                                    </div>
                                                                    <div class="single_client_logo">
                                                                        <img src="{{url('Frontend/img/client_logo/Logo_2.png')}}" alt="">
                                                                    </div>
                                                                    <div class="single_client_logo">
                                                                        <img src="{{url('Frontend/img/client_logo/Logo_3.png')}}" alt="">
                                                                    </div>
                                                                    <div class="single_client_logo">
                                                                        <img src="{{url('Frontend/img/client_logo/Logo_4.png')}}" alt="">
                                                                    </div>
                                                                    <div class="single_client_logo">
                                                                        <img src="{{url('Frontend/img/client_logo/Logo_5.png')}}" alt="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                </section>
                                                
                                                @endsection