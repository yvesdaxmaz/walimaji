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
                                <a href="#Trader" data-toggle="tab">Traders
                                    <span class="pull-right-container">
                                        <span class="label label-default pull-left">{{count($tradres)}}</span>
                                    </span></a>
                            </li>
                            <li>
                                <a href="#Provider" data-toggle="tab">
                                    Providers
                                    <span class="pull-right-container">
                                        <span class="label label-default pull-left">{{count($providers)}}</span>
                                    </span>
                                </a>

                            </li>
                            <li>
                                <a href="#Producer" data-toggle="tab">Producers
                                    <span class="pull-right-container">
                                        <span class="label label-default pull-left">{{count($producers)}}</span>
                                    </span></a>
                            </li>
                            <li>
                                <a href="#Transformer" data-toggle="tab">Tranformers
                                    <span class="pull-right-container">
                                        <span class="label label-default pull-left">{{count($transformers)}}</span>
                                    </span></a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="active tab-pane" id="Trader">
                                <table class="table table-hover">
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
                                             </td>
                                            <td>
                                                <a href="{{route('userDetail',$trader->id ) }}">
                                                    <button class="btn bg-blue">Detail</button>
                                                </a>
                                             </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="Provider">
                                <table class="table table-hover">
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
                                            </td>
                                            <td>
                                                <a href="{{route('userDetail',$provider->id ) }}">
                                                    <button class="btn bg-blue">Detail</button>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>

                                </table>
                            </div>
                            <!-- /.tab-pane -->

                            <div class="tab-pane" id="Producer">
                                <table class="table table-hover">
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
                                            </td>
                                            <td>
                                                <a href="{{route('userDetail',$producer->id ) }}">
                                                    <button class="btn bg-blue">Detail</button>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>

                                </table>
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="Transformer">
                                <table class="table table-hover">
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
                                            </td>
                                            <td>
                                                <a href="{{route('userDetail',$transformer->id ) }}">
                                                    <button class="btn bg-blue">Detail</button>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>

                                </table>
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