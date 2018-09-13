@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <!-- Main row -->
            <div class="row">
                <div class="col-lg-9 box-primary  ">
                    <div class="nav-tabs-custom">
                        <div class="nav-tabs-custom map-nav-tabs">
                            <ul class="nav nav-tabs ">
                                @foreach($types as $type)
                                    @if($tab == $type->designation)
                                        <li class="active"><a href="{{ "?tab={$type->designation}" }}">{{ $type->designation }}</a></li>
                                    @else
                                        <li><a href="{{ "?tab={$type->designation}" }}">{{ $type->designation }}</a></li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="map-container">
                                <div class="map-container-content" id="map"></div>
                            </div>
                        </div>
                        <!-- /.tab-content -->
                    </div>
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