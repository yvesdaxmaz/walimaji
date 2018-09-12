@extends('layouts.app-admin')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Statistiques
            </h1>
            <ol class="breadcrumb">
                <li>
                    <a href="#">
                        <i class="fa fa-dashboard"></i> Acceuil</a>
                </li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->

            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>{{$nombreUser[0]->nombreUser}}</h3>

                            <p>Utilisateurs</p>
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
                            <h3>{{$nombreRef[0]->nombreReference}}</h3>
                            <p>Réferences des produits</p>
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
                            <h3>{{$productsCount[0]->nombreProduit}}</h3>

                            <p>Produits en lignes</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="{{route('Admin_Products')}}" class="small-box-footer">Voir tout
                            <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3>{{$nombreTypeProd[0]->nombreTypeProduit}}</h3>

                            <p>Type de produit</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="list_product_admin.html" class="small-box-footer">Voir tout
                            <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <div class="row">
                <div class="col-lg-12 box-primary  ">
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
            </div>
            <div class="row">
                <!-- top 10 des produits recemment ajoutes -->
                <section class="col-lg-6 connectedSortable">
                         <!-- PRODUCT LIST -->
                         <div class=" box box-primary ">
                             <div class="box-header with-border ">
                                 <h3 class="box-title ">Les 5 derniers produits</h3>
                                 <div class="box-tools pull-right ">
                                     <button type="button " class="btn btn-box-tool " data-widget="collapse ">
                                         <i class="fa fa-minus "></i>
                                     </button>
                                     <button type="button " class="btn btn-box-tool " data-widget="remove ">
                                         <i class="fa fa-times "></i>
                                     </button>
                                 </div>
                             </div>
                             <!-- /.box-header -->
                             <div class="box-body ">
                                 <ul class="products-list product-list-in-box ">
                                     @foreach($recentsProducts as $product)
                                         <li class="item ">
                                             <div class="product-img ">
                                                 <img src="http://www.gstatic.com/webp/gallery/2.jpg" style="height: 50px" alt="Product Image ">
                                             </div>
                                             <div class="product-info ">
                                                 <a href="{{route('Admin_productsRefDetail',$product->idRef )}}" class="product-title ">{{$product->designation}}
                                                     <span class="label label-info pull-right "> PAT: ${{$product->priceWithTax}}</span>
                                                     <span class="label label-info pull-right ">PST: ${{$product->priceWithoutTax}}</span>
                                                     <span class="label label-danger pull-right ">Stock: {{$product->quantity}}</span>
                                                 </a>
                                                 <a href="{{route('Admin_userDetail',$product->idActor)}}"><span class="product-description ">Par {{$product->name}} </span></a>
                                                 <span class="product-description ">{{$product->description}} </span>
                                             </div>
                                         </li>
                                         @endforeach

                                     <!-- /.item -->
                                 </ul>
                             </div>
                             <!-- /.box-body -->
                             <div class="box-footer text-center">
                                 <a href="{{route('Admin_Products')}}" class="uppercase">Voir tous les produits</a>
                             </div>
                             <!-- /.box-footer -->
                         </div>
                         <!-- /.box -->
                     </section>

                <section class="col-lg-6 connectedSortable">
                        <!-- PRODUCT LIST -->
                        <div class=" box box-primary ">
                            <div class="box-header with-border ">
                                <h3 class="box-title ">Les 5 derniers utilisateurs</h3>

                                <div class="box-tools pull-right ">
                                    <button type="button " class="btn btn-box-tool " data-widget="collapse ">
                                        <i class="fa fa-minus "></i>
                                    </button>
                                    <button type="button " class="btn btn-box-tool " data-widget="remove ">
                                        <i class="fa fa-times "></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body ">
                                <ul class="products-list product-list-in-box ">
                                    @foreach($recentUsers  as $user)
                                        <li class="item ">
                                            <div class="product-img ">
                                                <img src="http://www.gstatic.com/webp/gallery/2.jpg" style="height: 40px" alt="Product Image ">
                                            </div>
                                            <div class="product-info ">
                                                <a href="{{route('Admin_userDetail',$user->id ) }}" class="product-title ">{{$user->name}}
                                                    <span class="label label-default pull-right ">{{$user->designation}}</span>
                                                </a>
                                                <span class="product-description ">
                                                {{$user->description}}</span>
                                            </div>
                                        </li>
                                        @endforeach
                                </ul>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer text-center">
                                <a href="{{route('Admin_users')}}" class="uppercase">Voir tous les utilisateurs</a>
                            </div>
                            <!-- /.box-footer -->
                        </div>
                        <!-- /.box -->
                    </section>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <script>
        var tab = '{{ $tab }}';
        var mapData = JSON.parse('{!! $data !!}');
        console.log(mapData[0]['name']);
    </script>
    <script src="{{ asset("assets/js/map.js") }}"></script>
@endsection