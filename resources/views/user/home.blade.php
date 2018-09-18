@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>{{$userProductsCount[0]->nombreProduit}}</h3>

                            <p>Produits En stock</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person"></i>
                        </div>
                        <a href="{{route('Admin_users')}}" class="small-box-footer">Voir tout
                            <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>0</h3>
                            <p>Fournisseur(s)</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="" class="small-box-footer">Voir tout
                            <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>{{$followersCount[0]->followers_count}}</h3>
                            <p>Abonne(s)</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="/user/followers" class="small-box-footer">Voir tout
                            <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3>{{ $followingCount[0]->following_count }}</h3>
                            <p>Abonnement(s)</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="/user/following" class="small-box-footer">Voir tout
                            <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
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
                            <h3 class="box-title">Connaissez vous</h3>

                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <ul class="products-list product-list-in-box">
                                @foreach($randomUsers as $user)
                                    <li class="item">
                                        <div class="product-img">
                                            <img src="http://www.gstatic.com/webp/gallery/2.jpg" alt="Product Image">
                                        </div>
                                        <div class="product-info">
                                            <a href="{{route('user/subscribe',$user->id ) }}" class="product-title">{{$user->name}}
                                                <div class="btn btn-xs btn-info pull-right">
                                                    S'abonner
                                                </div>
                                            </a>
                                            <span class="product-description">
                                                {{$user->designation}}
                                            </span>
                                        </div>
                                    </li>
                                    @endforeach
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
    <script>
        var tab = '{{ $tab }}';
        var mapData = JSON.parse('{!! $data !!}');
        console.log(mapData[0]['name']);
    </script>
 @endsection