@extends('layouts.app')


@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">

            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-2">
                    <div class="box box-primary">
                        <div class="box-body box-profile">
                            <img class="profile-user-img img-responsive img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">

                            <h3 class="profile-username text-center">Nina Mcintire</h3>

                            <p class="text-muted text-center">Software Engineer</p>
                            <ul class="list-group list-group-unbordered">
                                <li class="list-group-item">
                                    <b>Followers</b>
                                    <a class="pull-right">1,322</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Following</b>
                                    <a class="pull-right">543</a>
                                </li>
                            </ul>

                            <a href="#" class="btn btn-primary btn-block">
                                <b>Follow</b>
                            </a>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">About Me</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <strong>
                                <i class="fa fa-book margin-r-5"></i>Description</strong>

                            <p class="text-muted">
                                B.S. in Computer Science from the University of Tennessee at Knoxville
                            </p>

                            <hr>

                            <strong>
                                <i class="fa fa-map-marker margin-r-5"></i> Adresse </strong>

                            <p class="text-muted">Malibu, California</p>

                            <hr>
                            <strong>
                                <i class="fa fa-map-marker margin-r-5"></i> Phone </strong>

                            <p class="text-muted">+243967558661</p>

                            <hr>
                            <strong>
                                <i class="fa fa-map-marker margin-r-5"></i> Adresse Mail </strong>

                            <p class="text-muted">walimaji@gmail.com</p>

                            <hr>

                            <strong>
                                <i class="fa fa-pencil margin-r-5"></i>Sociaux</strong>

                            <p class="">
                                <a class="btn btn-social-icon btn-facebook">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a class="btn btn-social-icon btn-instagram">
                                    <i class="fa fa-instagram"></i>
                                </a>
                                <a class="btn btn-social-icon btn-twitter">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </p>

                            <hr>
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#produits" data-toggle="tab">Produits</a>
                            </li>
                            <li>
                                <a href="#localisation" data-toggle="tab">Localisation</a>
                            </li>
                            <li>
                                <a href="#stat" data-toggle="tab">Statistiques</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="active tab-pane" id="produits">
                                <div class="box-body">
                                    <ul class="products-list product-list-in-box">
                                        <li class="item">
                                            <div class="product-img">
                                                <img src="../../dist/img/default-50x50.gif" alt="Product Image">
                                            </div>
                                            <div class="product-info">
                                                <a href="javascript:void(0)" class="product-title">Xbox One
                                                    <span class="label label-primary pull-right">Node.js</span>
                                                </a>
                                                <span class="product-description">
                                                        Xbox One Console Bundle with Halo Master Chief Collection.
                                                    </span>
                                            </div>
                                        </li>
                                        <!-- /.item -->
                                        <li class="item">
                                            <div class="product-img">
                                                <img src="../../dist/img/default-50x50.gif" alt="Product Image">
                                            </div>
                                            <div class="product-info">
                                                <a href="javascript:void(0)" class="product-title">Xbox One
                                                    <div class="btn btn-xs btn-info pull-right">
                                                        Follow
                                                    </div>
                                                </a>
                                                <span class="product-description">
                                                        Xbox One Console Bundle with Halo Master Chief Collection.
                                                    </span>
                                            </div>
                                        </li>
                                        <!-- /.item -->
                                        <li class="item">
                                            <div class="product-img">
                                                <img src="../../dist/img/default-50x50.gif" alt="Product Image">
                                            </div>
                                            <div class="product-info">
                                                <a href="javascript:void(0)" class="product-title">Xbox One
                                                    <div class="btn btn-xs btn-info pull-right">
                                                        Follow
                                                    </div>
                                                </a>
                                                <span class="product-description">
                                                        Xbox One Console Bundle with Halo Master Chief Collection.
                                                    </span>
                                            </div>
                                        </li>
                                        <!-- /.item -->
                                        <li class="item">
                                            <div class="product-img">
                                                <img src="../../dist/img/default-50x50.gif" alt="Product Image">
                                            </div>
                                            <div class="product-info">
                                                <a href="javascript:void(0)" class="product-title">Xbox One
                                                    <div class="btn btn-xs btn-info pull-right">
                                                        Follow
                                                    </div>
                                                </a>
                                                <span class="product-description">
                                                        Xbox One Console Bundle with Halo Master Chief Collection.
                                                    </span>
                                            </div>
                                        </li>
                                        <!-- /.item -->
                                    </ul>
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer text-center">
                                    <a href="javascript:void(0)" class="uppercase">View All Products</a>
                                </div>
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="localisation">
                                <!-- Map box -->
                                <div class="box box-solid bg-light-blue-gradient">
                                    <div class="box-body">
                                        <div id="world-map" style="height: 450px;"></div>
                                    </div>
                                    <!-- /.box-body-->
                                </div>
                            </div>
                            <!-- /.tab-pane -->

                            <div class="tab-pane" id="stat">

                            </div>
                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div>
                    <!-- /.nav-tabs-custom -->
                </div>
                <div class="col-md-2"></div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection