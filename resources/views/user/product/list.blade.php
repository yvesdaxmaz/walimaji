@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <h1>
                        Listes de Produits
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <a href="/">
                                <i class="fa fa-dashboard"></i> Acceuil</a>
                        </li>
                        <li class="active">Produit</li>
                    </ol>
                </div>
                <div class="col-md-1"></div>
            </div>
        </section>

        <section class="content">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="nav-tabs-custom">

                        <div class="tab-content">
                            <div class="active tab-pane" id="Trader">
                                <div class="box-body">
                                    <table   class="example1 table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th>Avatar</th>
                                            <th>Description</th>
                                            <th>Reference</th>
                                            <th>Types</th>
                                            <th>Quantite</th>
                                            <th>Price Without Tax</th>
                                            <th>Price With Tax</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($products as $product)
                                            <tr>
                                                <td><img src="http://www.gstatic.com/webp/gallery/2.jpg" class="" alt="User Image" style=" height: 45px"></td>
                                                <td> {{$product->description}}</td>
                                                <td>{{$product->designation}}</td>
                                                <td>{{$product->type}}</td>
                                                <td> {{$product->quantity}}</td>
                                                <td>{{$product->priceWithoutTax}}</td>
                                                <td>{{$product->priceWithTax}}</td>
                                                <td>
                                                    <a href="{{route('User_removeProduct',$product->id )}}">
                                                        <button class="btn bg-red">Supprimer</button>
                                                    </a>
                                                    {{--<a href="{{route('Admin_userDetail',$product->id ) }}">--}}
                                                        <button class="btn bg-blue">Detail</button>
                                                    {{--</a>--}}
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>Avatar</th>
                                            <th>Description</th>
                                            <th>Reference</th>
                                            <th>Types</th>
                                            <th>Quantite</th>
                                            <th>Price Without Tax</th>
                                            <th>Price With Tax</th>
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