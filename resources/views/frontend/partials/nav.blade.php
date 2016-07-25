<nav>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="mobnav-btn"></div>
                <ul class="sf-menu">
                    <li>
                      <a href="{{ URL::to('/home') }}">{{ trans('messages.home') }}</a>
                    </li>
                    <li>
                      <a href="{{ URL::to('/courses') }}">{{ trans('messages.courses') }}</a>
                    </li>
                    <li>
                      <a href="{{ URL::to('/contact') }}">{{ trans('messages.contact') }}</a>
                    </li>
                </ul>

            <div class="col-md-3 pull-right hidden-sm hidden-xs">
                <div id="sb-search" class="sb-search">
                    <form>
                        <input class="sb-search-input" placeholder="{{ trans('messages.search') }}" type="text" value="" name="search" id="search">
                        <input class="sb-search-submit" type="submit" value="">
                        <span class="sb-icon-search"></span>
                    </form>
                </div>
            </div><!-- End search -->
            </div>
        </div><!-- End row -->
    </div><!-- End container -->
</nav>
