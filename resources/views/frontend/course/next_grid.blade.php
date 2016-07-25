<section id="main_content">
    <div class="container">
        <div class="row add_bottom_30">
            <div class="col-md-12 text-center">
                <h2>{{ trans('messages.next_courses')}}</h2>
                <p class="lead">{{ trans('messages.next_courses_desc')}}</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                {{-- */$curso="Física Básica";/* --}}
                @include ('frontend.course.item_next')
            </div><!-- End col md 6 -->

            <div class="col-md-6">
                {{-- */$curso="Cálculo Diferencial";/* --}}
                @include ('frontend.course.item_next')
            </div>
        </div><!-- End row -->

        <hr>
        <!--
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <h4>Our team</h4>
                <p><img src="img/pic_1.jpg" alt="Pic" class="img-responsive"></p>
                <p>Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex.</p>
            </div>

            <div class="col-md-3 col-sm-6">
                <h4>Equiped classrooms</h4>
                <p><img src="img/pic_2.jpg" alt="Pic" class="img-responsive"></p>
                <p>Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex.</p>
            </div>

            <div class="col-md-3 col-sm-6">
                <h4>Enjoy classroom mates</h4>
                <p><img src="img/pic_3.jpg" alt="Pic" class="img-responsive"></p>
                <p>Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex.</p>
            </div>

            <div class="col-md-3 col-sm-6">
                <h4>Links</h4>
                <ul class="list_1">
                  <li><a href="#">Ceteros mediocritatem</a></li>
                  <li><a href="#">Labore nostrum</a></li>
                  <li><a href="#">Primis bonorum</a></li>
                  <li><a href="#">Ceteros mediocritatem</a></li>
                  <li><a href="#">Labore nostrum</a></li>
                  <li><a href="#">Primis bonorum</a></li>
                </ul>
            </div>
        </div><!-- End row -->

        <!--
        <hr class="add_bottom_30">
        <div class="row">
            <div class="col-md-12">
                <p><img src="img/sponsors.jpg" alt="Pic" class="img-responsive"></p>
            </div>
        </div>
        -->
    </div><!-- End container -->
</section><!-- End main_content -->
