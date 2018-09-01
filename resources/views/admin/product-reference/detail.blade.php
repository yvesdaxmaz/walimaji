@extends('layouts.app-admin')

@section('content')
    <div class="content-wrapper">
        <div class="container">
            <section class="content">
                <div class="row">
                    <div class="col-md-4">
                        <div class="box box-primary">
                            <div class="box-body box-profile">
                                <img class="profile-user-img img-responsive img-thumbnail" src="http://www.gstatic.com/webp/gallery/2.jpg" alt="User profile picture"
                                     style="height: 95px">

                                <h3 class="profile-username text-center">{{$details[0]->name}}</h3>

                                <p class="text-muted text-center">{{$details[0]->designation}}</p>
                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="nav-tabs-custom">
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#Fournisseurs" data-toggle="tab">Fournisseurs</a>
                                </li>
                                <li>
                                    <a href="#Carte" data-toggle="tab">Carte</a>
                                </li>
                                <li>
                                    <a href="#Statistiques" data-toggle="tab">Statistiques</a>
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
                                {{--//////////// map container /////////////////////--}}
                                <div class="tab-pane" id="Carte">

                                </div>
                                <div class="tab-pane" id="Statistiques">
                                    <!-- solid sales graph -->
                                    <div class="box box-solid bg-teal-gradient">
                                        <div class="box-header">
                                            <h3 class="box-title">Représentation du stock</h3>
                                        </div>
                                        <div class="box-body border-radius-none">
                                            <div class="chart" id="line-chart" style="height: 250px;"></div>
                                        </div>
                                        <!-- /.box-body -->
                                        <div class="box-footer no-border">
                                            <div class="row">
                                                <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                                                    <input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60" data-fgColor="#39CCCC">

                                                    <div class="knob-label">Mail-Orders</div>
                                                </div>
                                                <!-- ./col -->
                                                <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                                                    <input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60" data-fgColor="#39CCCC">

                                                    <div class="knob-label">Online</div>
                                                </div>
                                                <!-- ./col -->
                                                <div class="col-xs-4 text-center">
                                                    <input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60" data-fgColor="#39CCCC">

                                                    <div class="knob-label">In-Store</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection