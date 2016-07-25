<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h3>{{ trans('messages.subscribe') }}</h3>
                <div id="message-newsletter"></div>
                <form method="post" action="assets/newsletter.php" name="newsletter" id="newsletter" class="form-inline">
                    <input name="email_newsletter" id="email_newsletter" type="email" value="" placeholder="Your Email" class="form-control">
                    <button id="submit-newsletter" class=" button_outline"> {{ trans('messages.subscribe_btn') }}</button>
                </form>
            </div>
        </div>
    </div>

    <hr>

    <div class="container" id="nav-footer">
        <div class="row text-left">
            <!--<div class="col-md-3 col-sm-3">
                <h4>Browse</h4>
                <ul>
                    <li><a href="prices_plans.html">Prices</a></li>
                    <li><a href="courses_grid.html">Courses</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="contacts.html">Contacts</a></li>
                </ul>
            </div><!-- End col-md-4 -->
            <!--<div class="col-md-3 col-sm-3">
                <h4>Next Courses</h4>
                <ul>
                    <li><a href="course_details_1.html">Biology</a></li>
                    <li><a href="course_details_2.html">Management</a></li>
                    <li><a href="course_details_2.html">History</a></li>
                    <li><a href="course_details_3.html">Litterature</a></li>
                </ul>
            </div><!-- End col-md-4 -->
            <div class="col-md-6 col-sm-6">
                <h4>Acerca de Orwell7</h4>
                <ul>
                    <li><a href="#">{{ trans('messages.about_us') }}</a></li>
                    <li><a href="#">{{ trans('messages.terms') }}</a></li>
                    <li><a href="{{URL::to('/register')}}">{{ trans('messages.register') }}</a></li>
                </ul>
            </div><!-- End col-md-4 -->
            <div class="col-md-6 col-sm-6">
                <ul id="follow_us">
                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                    <li><a href="#"><i class=" icon-google"></i></a></li>
                </ul>
                <ul>
                    <li><strong class="phone">{{ trans('messages.phone') }}</strong>
                        <br>
                        <small>{{ trans('messages.hours') }}</small>
                    </li>
                    <li>{{ trans('messages.questions') }}<a href="#">questions@orwell7.com</a></li>
                </ul>
            </div><!-- End col-md-4 -->
        </div><!-- End row -->
    </div>
    <div id="copy_right">© {{ date('Y') }}</div>
</footer>

<div id="toTop">Back to top</div>
