@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <!-- Main row -->
            <div class="row">
                <div class="col-lg-9 box-primary  ">
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#provider" data-toggle="tab">Provider</a>
                            </li>
                            <li>
                                <a href="#producer" data-toggle="tab">Producer</a>
                            </li>
                            <li>
                                <a href="#transformer" data-toggle="tab">Transformer</a>
                            </li>
                            <li>
                                <a href="#trader" data-toggle="tab">Trader</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="active tab-pane" id="provider">
                                <!-- Map box -->
                                <div class="box box-solid bg-light-blue-gradient">
                                    <div class="box-body">
                                        <div id="world-map" style="height: 450px;"></div>
                                    </div>
                                    <!-- /.box-body-->
                                </div>
                                <!-- /.box -->
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="producer">
                                <!-- Map box -->
                                <div class="box box-solid bg-light-blue-gradient">
                                    <div class="box-body">
                                        <div id="world-map" style="height: 450px;"></div>
                                    </div>
                                    <!-- /.box-body-->
                                </div>
                                <!-- /.box -->
                            </div>
                            <!-- /.tab-pane -->

                            <div class="tab-pane" id="transformer">
                                <!-- Map box -->
                                <div class="box box-solid bg-light-blue-gradient">
                                    <div class="box-body">
                                        <div id="world-map" style="height: 450px;"></div>
                                    </div>
                                    <!-- /.box-body-->
                                </div>
                                <!-- /.box -->
                            </div>
                            <!-- /.tab-pane -->

                            <div class="tab-pane" id="trader">
                                <!-- Map box -->
                                <div class="box box-solid bg-light-blue-gradient">
                                    <div class="box-body">
                                        <div id="world-map" style="height: 450px;"></div>
                                    </div>
                                    <!-- /.box-body-->
                                </div>
                                <!-- /.box -->
                            </div>
                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div>
                    <!-- /.nav-tabs-custom -->

                    <!-- /.col -->

                </div>
                <div class="col-lg-3 ">
                    <!-- PRODUCT LIST -->
                    <div class="box box-primary ">
                        <div class="box-header with-border">
                            <h3 class="box-title">Autres producteurs </h3>

                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <ul class="products-list product-list-in-box">
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
                        <!-- /.box-footer -->
                    </div>
                    <!-- /.box -->
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection