<footer>
    <div class="container">
        <div class="row margintop">
            <div class="col-md-2 col-xs-12 layoutc">
                <img src="img/logo.jpg" class="footerlogo">
            </div>
            <div class="col-md-6 col-xs-12 layoutc">
                <h4>{{ trans('messages.subscribe') }}</h4>
            </div>
            <div class="col-md-4 col-xs-12 layoutc">
                <form method="post" action="assets/newsletter.php" name="newsletter" id="newsletter" class="form-inline">
                    <input name="email_newsletter" id="email_newsletter" type="email" value="" placeholder="Your Email" class="form-control">
                    <button id="submit-newsletter" class="btn btn-info"> 
                        {{ trans('messages.subscribe_btn') }}
                    </button>
                </form>
            </div>
        </div>
    </div>

    <hr>

    <div class="container" id="nav-footer">
        <div class="row text-left">
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
                    <li><h4><strong class="phone">{{ trans('messages.phone') }}</strong></h4>
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
