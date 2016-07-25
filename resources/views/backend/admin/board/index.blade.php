@extends('backend.admin.layouts.master')

@section('content')

<h1>Admin Dashboard</h1>
<br>

<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <a href="{{URL::to('admin/category')}}">
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="dashboard-div-wrapper bk-clr-one">
                        <i  class="fa fa-database dashboard-div-icon" ></i>
                        <div class="progress progress-striped active">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                            </div>
                        </div>
                        <h5>Category </h5>
                    </div>
                </div>
            </a>

            <a href="{{URL::to('admin/course')}}">
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="dashboard-div-wrapper bk-clr-two">
                        <i  class="fa fa-database dashboard-div-icon" ></i>
                        <div class="progress progress-striped active">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                            </div>
                        </div>
                        <h5>Course </h5>
                    </div>
                </div>
            </a>

            <a href="{{URL::to('admin/unit')}}">
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="dashboard-div-wrapper bk-clr-three">
                        <i  class="fa fa-database dashboard-div-icon" ></i>
                        <div class="progress progress-striped active">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                            </div>
                        </div>
                        <h5>Unit </h5>
                    </div>
                </div>
            </a>

            <a href="{{URL::to('admin/knowledgeunit')}}">
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="dashboard-div-wrapper bk-clr-four">
                        <i  class="fa fa-database dashboard-div-icon" ></i>
                        <div class="progress progress-striped active">
                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                            </div>
                        </div><!--/.row-->
                        <h5>Knowledgeunit </h5>
                    </div>
                </div>
            </a>
        </div> <!-- row -->
    </section> <!-- wrapper -->
</section> <!-- main content -->

@endsection
