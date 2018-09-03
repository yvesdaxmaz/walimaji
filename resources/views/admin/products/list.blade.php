@extends('layouts.app-admin')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <h1>
                        Listes des produits
                    </h1>
                </div>
                <div class="col-md-1"></div>
            </div>
        </section>

        <section class="content">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#Trader" data-toggle="tab">Traders</a>
                            </li>
                            <li>
                                <a href="#Provider" data-toggle="tab">Providers</a>

                            </li>
                            <li>
                                <a href="#Producer" data-toggle="tab">Producers</a>
                            </li>
                            <li>
                                <a href="#Transformer" data-toggle="tab">Tranformers</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="active tab-pane" id="Trader">
                                <div class="box-body">
                                    <table   class="example1 table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Nom</th>
                                            <th>Description</th>
                                            <th>Fournisseur</th>
                                            <th>Prix HT</th>
                                            <th>Prix AT</th>
                                            <th>Quantité</th>
                                            <th>Action</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($traderProducts as $trader )
                                            <tr>
                                                <td><img src="http://www.gstatic.com/webp/gallery/2.jpg" style="height: 50px" alt=""></td>
                                                <td>{{$trader->designation}}</td>
                                                <td>{{$trader->description}}</td>
                                                <td><a href="{{route('Admin_userDetail',$trader->idActor ) }}">{{$trader->name}}</a></td>
                                                <td><span class="label label-success">{{$trader->priceWithoutTax}}</span></td>
                                                <td><span class="label label-success">{{$trader->priceWithTax}}</span></td>
                                                <td>{{$trader->quantity}}</td>
                                                <td><a href="{{route('Admin_productsRefDetail',$trader->idRef ) }}">Detail</a></td>

                                            </tr>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>Image</th>
                                            <th>Nom</th>
                                            <th>Description</th>
                                            <th>Fournisseur</th>
                                            <th>Prix HT</th>
                                            <th>Prix AT</th>
                                            <th>Quantité</th>
                                            <th>Action</th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="Provider">
                                <div class="box-body">
                                    <table  class=" example1 table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Nom</th>
                                            <th>Description</th>
                                            <th>Fournisseur</th>
                                            <th>Prix HT</th>
                                            <th>Prix AT</th>
                                            <th>Quantité</th>
                                            <th>Action</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($providerProducts as $provider )
                                            <tr>
                                                <td><img src="http://www.gstatic.com/webp/gallery/2.jpg" style="height: 50px" alt=""></td>
                                                <td>{{$provider->designation}}</td>
                                                <td>{{$provider->description}}</td>
                                                <td><a href="{{route('Admin_userDetail',$provider->idActor ) }}">{{$provider->name}}</a></td>
                                                <td><span class="label label-success">{{$provider->priceWithoutTax}}</span></td>
                                                <td><span class="label label-success">{{$provider->priceWithTax}}</span></td>
                                                <td>{{$provider->quantity}}</td>
                                                <td><a href="{{route('Admin_productsRefDetail',$provider->idRef ) }}">Detail</a></td>

                                            </tr>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>Image</th>
                                            <th>Nom</th>
                                            <th>Description</th>
                                            <th>Fournisseur</th>
                                            <th>Prix HT</th>
                                            <th>Prix AT</th>
                                            <th>Quantité</th>
                                            <th>Action</th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            <!-- /.tab-pane -->

                            <div class="tab-pane" id="Producer">
                                <div class="box-body">
                                    <table class=" example1 table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Nom</th>
                                            <th>Description</th>
                                            <th>Fournisseur</th>
                                            <th>Prix HT</th>
                                            <th>Prix AT</th>
                                            <th>Quantité</th>
                                            <th>Action</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($porducerProducts as $producer )
                                            <tr>
                                                <td><img src="http://www.gstatic.com/webp/gallery/2.jpg" style="height: 50px" alt=""></td>
                                                <td>{{$producer->designation}}</td>
                                                <td>{{$producer->description}}</td>
                                                <td><a href="{{route('Admin_userDetail',$producer->idActor ) }}">{{$producer->name}}</a></td>
                                                <td><span class="label label-success">{{$producer->priceWithoutTax}}</span></td>
                                                <td><span class="label label-success">{{$producer->priceWithTax}}</span></td>
                                                <td>{{$producer->quantity}}</td>
                                                <td><a href="{{route('Admin_productsRefDetail',$producer->idRef ) }}">Detail</a></td>

                                            </tr>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>Image</th>
                                            <th>Nom</th>
                                            <th>Description</th>
                                            <th>Fournisseur</th>
                                            <th>Prix HT</th>
                                            <th>Prix AT</th>
                                            <th>Quantité</th>
                                            <th>Action</th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="Transformer">
                                <div class="box-body">
                                    <table class="example1 table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Nom</th>
                                            <th>Description</th>
                                            <th>Fournisseur</th>
                                            <th>Prix HT</th>
                                            <th>Prix AT</th>
                                            <th>Quantité</th>
                                            <th>Action</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($transformerProducts as $transformer )
                                            <tr>
                                                <td><img src="http://www.gstatic.com/webp/gallery/2.jpg" style="height: 50px" alt=""></td>
                                                <td>{{$transformer->designation}}</td>
                                                <td>{{$transformer->description}}</td>
                                                <td><a href="{{route('Admin_userDetail',$transformer->idActor ) }}">{{$transformer->name}}</a></td>
                                                <td><span class="label label-success">{{$transformer->priceWithoutTax}}</span></td>
                                                <td><span class="label label-success">{{$transformer->priceWithTax}}</span></td>
                                                <td>{{$transformer->quantity}}</td>
                                                <td><a href="{{route('Admin_productsRefDetail',$transformer->idRef ) }}">Detail</a></td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>Image</th>
                                            <th>Nom</th>
                                            <th>Description</th>
                                            <th>Fournisseur</th>
                                            <th>Prix HT</th>
                                            <th>Prix AT</th>
                                            <th>Quantité</th>
                                            <th>Action</th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /.tab-content -->
                    </div>
                    <!-- /.nav-tabs-custom -->
                </div>
                <div class="col-md-1"></div>
                <!-- /.col -->
            </div>
        </section>
    </div>
@endsection