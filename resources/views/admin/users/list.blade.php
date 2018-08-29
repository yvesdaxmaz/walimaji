@extends('layouts.app-admin')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <h1>
                        Listes d'utilisateurs
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <a href="#">
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
                                            <th>Avatar</th>
                                            <th>Nom</th>
                                            <th>description</th>
                                            <th>email</th>
                                            <th>Phone</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($tradres as $trader)
                                            <tr>
                                                <td><img src="http://www.gstatic.com/webp/gallery/2.jpg" class="" alt="User Image" style=" height: 45px"></td>
                                                <td>{{$trader->name}}</td>
                                                <td> {{$trader->description}}</td>
                                                <td>{{$trader->email}}</td>
                                                <td>{{$trader->phone}}</td>
                                                <td>
                                                    <a href="{{route('removeUser',$trader->id )}}">
                                                        <button class="btn bg-red">Supprimer</button>
                                                    </a>
                                                    <a href="{{route('userDetail',$trader->id ) }}">
                                                        <button class="btn bg-blue">Detail</button>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>Avatar</th>
                                            <th>Nom</th>
                                            <th>description</th>
                                            <th>email</th>
                                            <th>Phone</th>
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
                                            <th>Avatar</th>
                                            <th>Nom</th>
                                            <th>description</th>
                                            <th>email</th>
                                            <th>Phone</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($providers as $provider)
                                            <tr>
                                                <td><img src="http://www.gstatic.com/webp/gallery/2.jpg" class="" alt="User Image" style=" height: 45px"></td>
                                                <td>{{$provider->name}}</td>
                                                <td> {{$provider->description}}</td>
                                                <td>{{$provider->email}}</td>
                                                <td>{{$provider->phone}}</td>
                                                <td>
                                                    <a href="{{route('removeUser',$provider->id )}}">
                                                        <button class="btn bg-red">Supprimer</button>
                                                    </a>
                                                    <a href="{{route('userDetail',$provider->id ) }}">
                                                        <button class="btn bg-blue">Detail</button>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>Avatar</th>
                                            <th>Nom</th>
                                            <th>description</th>
                                            <th>email</th>
                                            <th>Phone</th>
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
                                            <th>Avatar</th>
                                            <th>Nom</th>
                                            <th>description</th>
                                            <th>email</th>
                                            <th>Phone</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($producers as $producer)
                                            <tr>
                                                <td><img src="http://www.gstatic.com/webp/gallery/2.jpg" class="" alt="User Image" style=" height: 45px"></td>
                                                <td>{{$producer->name}}</td>
                                                <td> {{$producer->description}}</td>
                                                <td>{{$producer->email}}</td>
                                                <td>{{$producer->phone}}</td>
                                                <td>
                                                    <a href="{{route('removeUser',$producer->id )}}">
                                                        <button class="btn bg-red">Supprimer</button>
                                                    </a>
                                                    <a href="{{route('userDetail',$producer->id ) }}">
                                                        <button class="btn bg-blue">Detail</button>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>Avatar</th>
                                            <th>Nom</th>
                                            <th>description</th>
                                            <th>email</th>
                                            <th>Phone</th>
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
                                            <th>Avatar</th>
                                            <th>Nom</th>
                                            <th>description</th>
                                            <th>email</th>
                                            <th>Phone</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($transformers as $transformer)
                                            <tr>
                                                <td><img src="http://www.gstatic.com/webp/gallery/2.jpg" class="" alt="User Image" style=" height: 45px"></td>
                                                <td>{{$transformer->name}}</td>
                                                <td> {{$transformer->description}}</td>
                                                <td>{{$transformer->email}}</td>
                                                <td>{{$transformer->phone}}</td>
                                                <td>
                                                    <a href="{{route('removeUser',$transformer->id )}}">
                                                        <button class="btn bg-red">Supprimer</button>
                                                    </a>
                                                    <a href="{{route('userDetail',$transformer->id ) }}">
                                                        <button class="btn bg-blue">Detail</button>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>Avatar</th>
                                            <th>Nom</th>
                                            <th>description</th>
                                            <th>email</th>
                                            <th>Phone</th>
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