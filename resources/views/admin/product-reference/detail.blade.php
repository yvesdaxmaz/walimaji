@extends('layouts.app-admin')

@section('content')
    <div class="content-wrapper">
        <div class="container">
            <section class="content">
                <div class="row">
                    <div class="col-md-3">
                        <div class="box box-primary">
                            <div class="box-body box-profile">
                                <img class="profile-user-img img-responsive  " src="http://www.gstatic.com/webp/gallery/2.jpg" style="height: 100px" alt="User profile picture">

                                <h3 class="profile-username text-center">{{$details[0]->designation}}</h3>

                                <p class="text-muted text-center">{{$details[0]->description}}</p>
                            </div>
                            <div class="box-header with-border">
                                <h3 class="box-title">Prix du produit sur le marche</h3>
                            </div>
                            <div class="box-body">
                                <strong> Le Moins cher</strong><br>
                                <span>Hors taxe :</span>
                                <a class="pull-right">{{$smallerPrice[0]->priceWithoutTax}} FC</a><br>
                                <span>Avec taxe :</span>
                                <a class="pull-right">{{$smallerPrice[0]->priceWithTax}} Fc</a> <br>
                                 <p class="text-muted">
                                    <a href="{{route('Admin_userDetail',$smallerPrice[0]->id ) }}">
                                         Chez {{$smallerPrice[0]->name}}
                                    </a>
                                </p>
                                <hr>
                                <strong>Le Plus cher</strong><br>
                                <span>Hors taxe :</span>
                                <a class="pull-right">{{$biggerPrice[0]->priceWithoutTax}} FC</a><br>
                                <span>Avec taxe :</span>
                                <a class="pull-right">{{$biggerPrice[0]->priceWithTax}} Fc</a> <br>
                                <p class="text-muted">
                                    <a href="{{route('Admin_userDetail',$biggerPrice[0]->id ) }}">
                                        Chez {{$biggerPrice[0]->name}}
                                    </a>
                                </p>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-9">
                        <div class="nav-tabs-custom">
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#Fournisseurs" data-toggle="tab">Fournisseurs</a>
                                </li>
                                <li>
                                    <a href="#Carte" data-toggle="tab">Carte</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="active tab-pane" id="Fournisseurs">
                                    <div class="box-body">
                                        <table class="example1 table table-bordered table-striped">
                                            <thead>
                                            <tr>
                                                <th>Avatar</th>
                                                <th>Nom</th>
                                                <th>Description</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($sellers as $seller)
                                                <tr>
                                                    <td><img src="http://www.gstatic.com/webp/gallery/2.jpg" class="" alt="User Image" style=" height: 45px"></td>
                                                    <td>{{$seller->name}}</td>
                                                    <td> {{$seller->description}}</td>
                                                    <td>{{$seller->email}}</td>
                                                    <td>{{$seller->phone}}</td>
                                                    <td>
                                                        <a href="{{route('Admin_userDetail',$seller->id ) }}">
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
                                                <th>Description</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Action</th>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane" id="Carte">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <script>
        var tab = '{{ $tab }}';
        var mapData = JSON.parse('{!! $data !!}');
        console.log(mapData[0]['name']);
    </script>
    <script src="{{ asset("assets/js/map.js") }}"></script>
@endsection