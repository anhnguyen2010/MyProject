@extends('users.layouts.layout')

@section('content')

<!-- SLIDER -->
            <!-- START SLIDER -->
            <div id="slider" class="thumbnails group inner">
                <div class="showcase group">
                    
                    <div class="showcase-slide">
                        <div class="showcase-content">
                            <!-- If the slide contains multiple elements you should wrap them in a div with the class
                                .showcase-content-wrapper. We usually wrap even if there is only one element,
                                because it looks better. -->
                            <div class="showcase-content-wrapper">
                                <img src="images/slider-thumbnails/001.jpg" width="1920" height="380" alt="A fresh &amp; clean design" />
                            </div>
                        </div>
                        <div class="showcase-thumbnail">
                            <img src="images/slider-thumbnails/001-228x100.jpg" />
                        </div>
                        <div class="showcase-text">
                            <h2>A fresh & clean design</h2>
                            <p>
                            <p>another nice WordPress Theme designed by YIW</p>
                            </p>
                        </div>
                    </div>
                    
                    <div class="showcase-slide">
                        <div class="showcase-content">
                            <div class="showcase-content-wrapper">
                                <img src="images/slider-thumbnails/0022.jpg" width="1920" height="364" alt="Vintage. Sensual." />
                            </div>
                        </div>
                        <div class="showcase-thumbnail">
                            <img src="images/slider-thumbnails/0022-228x100.jpg" />
                        </div>
                        <div class="showcase-text">
                            <h2>Vintage. Sensual.</h2>
                            <p>
                            <p>a great slider for your content</p>
                            </p>
                        </div>
                    </div>
                    
                    <div class="showcase-slide">
                        <div class="showcase-content">
                            <div class="showcase-content-wrapper">
                                <img src="images/slider-thumbnails/003.jpg" width="1920" height="380" alt="M&egrave;mento style." />
                            </div>
                        </div>
                        <div class="showcase-thumbnail">
                            <img src="images/slider-thumbnails/003-228x100.jpg" />
                        </div>
                        <div class="showcase-text">
                            <h2>Mèmento style.</h2>
                            <p>
                            <p>Love this fresh wordpress theme</p>
                            </p>
                        </div>
                    </div>
                    
                    <div class="showcase-slide">
                        <div class="showcase-content">
                            <div class="showcase-content-wrapper">
                                <img src="images/slider-thumbnails/02.jpg" width="1920" height="380" alt="Lovely Theme" />
                            </div>
                        </div>
                        <div class="showcase-thumbnail">
                            <img src="images/slider-thumbnails/02-228x100.jpg" />
                        </div>
                        <div class="showcase-text">
                            <h2>Lovely Theme</h2>
                            <p>
                            <p>a sensual feminine image</p>
                            </p>
                        </div>
                    </div>
                    
                    <div class="showcase-slide">
                        <div class="showcase-content">
                            <div class="showcase-content-wrapper">
                                <img src="images/slider-thumbnails/01.jpg" width="1920" height="380" alt="Wow. Love it." />
                            </div>
                        </div>
                        <div class="showcase-thumbnail">
                            <img src="images/slider-thumbnails/01-228x100.jpg" />
                        </div>
                        <div class="showcase-text">
                            <h2>Wow. Love it.</h2>
                            <p>
                            <p>a creative corporate theme</p>
                            </p>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- END SLIDER -->
            <script type="text/javascript">      
	            var 	yiw_slider_type = 'thumbnails',
	                          yiw_slider_thumbnails_fx = 'fade',
	            yiw_slider_thumbnails_speed = 500, yiw_slider_thumbnails_timeout = 5000;
	        </script>
	        <!-- /SLIDER -->
            
            <div class="inner home-row group">
                
                <div class="widget-first widget one-third widget-icon-text group">
                    <h2><img class="icon-img" src="images/icons/smile.png" alt="" /> Meet Meménto</h2>
                    <p>suitable for business/corporate sites,  creative portfolio and personal sites. </p>
                </div>
                
                <div class="widget one-third widget-icon-text group">
                    <h2><i class="icon-envelope"></i> Contact the team!</h2>
                    <p>Feel free to contact us for additional info or for a free quote!</p>
                </div>
                
                <div class="widget-last widget one-third widget-icon-text group">
                    <h2><i class="icon-heart-empty reverse"></i> You will <span>love us</span>.</h2>
                    <p>You have only to try Memènto. We are sure: you will love this theme.</p>
                </div>
                
            </div>
            
            <div class="inner home-testimonials home-section group">
                <div class="title">
                    <h2><img src="images/icons/comment.png" alt="icon-adjust" /> People <span>love Memènto</span></h2>
                    <p>feedback from our customers</p>
                </div>
                <ul class="list-testimonials" style="float: left;">
                    <li>
                        <p>I already given a 5-star rating, but I also wanted to provide my two cents in case anyone is unsure about purchasing this theme. Not only is the theme itself very versatile and easy to manipulate, but the support we get in the forum is amazing - <strong>Joy Mergot</strong> -</p>
                    </li>
                    <li>
                        <p>I am absolutely thrilled with this theme! I have never built a website before but your instructions and design make it both fun and easy to do - <strong>Elisa Meis</strong> -</p>
                    </li>
                    <li>
                        <p>Bookmark this theme as one of your “Must Haves for 2012” This theme is without a doubt one of our Top 5 Purchases. - <strong>Ricardo Mori</strong> -</p>
                    </li>
                    <li>
                        <p>I purchased this theme and I really like it. The theme authors have been very helpful in the support area of their website. - <strong>Erica Evans</strong> -</p>
                    </li>
                </ul>
                <script type="text/javascript" src="js/testimonials.js"></script>	      
            </div>
            
            <div class="clear"></div>
            
        </div>
        <!-- END WRAPPER -->

@endsection