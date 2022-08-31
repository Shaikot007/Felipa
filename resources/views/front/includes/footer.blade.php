<footer>
    <div class="site-footer">
        <div class="container">
            <div class="row">
                <div id="text-8" class="col-sm-6 col-xl-4 footer-widget">
                    <div class="textwidget">
                        <p><img class="img-fluid" width="135" height="auto" src="{{asset('/')}}images/logo-white.png" alt="img"/></p>
                        <p>Lorem ipsum dolor sit amet, cons ec te tur adipiscing elit, sed do eiu s mod tempor magna.</p>
                        <div class="footer-social">
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="#"><i class="fa-fw fa fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa-fw fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa-fw fa fa-dribbble"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa-fw fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="nav_menu-4" class="col-sm-6 col-xl-2 footer-widget">
                    <h3 class="widget-title">Quick links</h3>
                    <div class="menu-usefull-link-container">
                        <ul id="menu-usefull-link" class="menu">
                            <li class="menu-item"><a href="#">Digital marketing</a></li>
                            <li class="menu-item"><a href="#">Search engine</a></li>
                            <li class="menu-item"><a href="#">Optimization</a></li>
                            <li class="menu-item"><a href="#">Pay per click</a></li>
                        </ul>
                    </div>
                </div>
                <div id="nav_menu-5" class="col-sm-6 col-xl-2 footer-widget">
                    <h3 class="widget-title">Services</h3>
                    <div class="menu-service-container">
                        <ul id="menu-service" class="menu">
                            <li class="menu-item"><a href="#">Digital marketing</a></li>
                            <li class="menu-item"><a href="#">pay per click</a></li>
                            <li class="menu-item"><a href="#">Lorem dummy</a></li>
                            <li class="menu-item"><a href="#">Socaial media</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-4 footer-widget">
                    <h3 class="widget-title">Subscribe newsletter</h3>
                    <form class="mc4wp-form" action="{{route('subscriber.new')}}" method="post">
                        @csrf
                        <div class="mc4wp-form-fields">
                            <input type="email" name="email" placeholder="Your email address"/>
                            <input type="submit" value="Submit"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <p>Copyright © 2019 felipa All Rights Reserved. </p>
    </div>
</footer>
