@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="container">
            <section class="content">
                <div class="row">
                    <div class="col-md-4">
                        <div class="box box-primary">
                            <div class="box-body box-profile">
                                <img class="profile-user-img img-responsive img-circle" src="http://www.gstatic.com/webp/gallery/2.jpg" alt="User profile picture"
                                     style="height: 95px">
                                <h3 class="profile-username text-center">{{$details[0]->name}}</h3>

                                <p class="text-muted text-center">{{$details[0]->designation}}</p>
                                <ul class="list-group list-group-unbordered">
                                    <li class="list-group-item">
                                        <b>Followers</b>
                                        <a class="pull-right"> {{$followers[0]->followers_count}}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Following</b>
                                        <a class="pull-right">{{$following[0]->following_count}}</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">About Me</h3>
                            </div>
                            <div class="box-body">
                                <strong>
                                    <i class="fa fa-info margin-r-5"></i>Description</strong>

                                <p class="text-muted">
                                    {{ $details[0]->description }}
                                </p>

                                <hr>

                                <strong>
                                    <i class="fa fa-map-marker margin-r-5"></i> Adresse </strong>

                                <p class="text-muted"> {{ $details[0]->adresse}}</p>

                                <hr>
                                <strong>
                                    <i class="fa fa-map-marker margin-r-5"></i> Phone </strong>

                                <p class="text-muted">{{$details[0]->phone}}</p>

                                <hr>
                                <strong>
                                    <i class="fa fa-map-marker margin-r-5"></i> Adresse Mail </strong>

                                <p class="text-muted">{{$details[0]->email}}</p>

                                <hr>

                                <strong>
                                    <i class="fa fa-pencil margin-r-5"></i>Sociaux</strong>

                                <p class="">
                                    <a href="{{$details[0]->facebook }}" class="btn btn-social-icon btn-facebook">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="{{$details[0]->instagram }}" class="btn btn-social-icon btn-instagram">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                    <a href="{{$details[0]->twitter }}" class="btn btn-social-icon btn-twitter">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </p>

                                <hr>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="nav-tabs-custom">
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#activity" data-toggle="tab">Produits</a>
                                </li>
                                <li>
                                    <a href="#timeline" data-toggle="tab">Localisation</a>
                                </li>
                                <li>
                                    <a href="#settings" data-toggle="tab">Stock</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="active tab-pane" id="activity">
                                    <div class="box-body">
                                        <table class="example1 table table-bordered table-striped">
                                            <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th>Nom</th>
                                                <th>Prix HT</th>
                                                <th>Prix AT</th>
                                                <th>Quantité</th>
                                                <th>Description</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($products as $product )
                                                <tr>
                                                    <td>
                                                        <img src="http://www.gstatic.com/webp/gallery/2.jpg" style="height: 40px" alt="">
                                                    </td>
                                                    <td>{{$product->designation}}</td>
                                                    <td>
                                                        <span class="label label-success">{{$product->priceWithoutTax}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="label label-success">{{$product->priceWithTax}}</span>
                                                    </td>
                                                    <td>{{$product->quantity}}</td>
                                                    <td>{{$product->description}}</td>
                                                    <td>
                                                        <a href="{{route('user/productsRefDetail',$product->idRef )}}">
                                                            <button class="btn bg-red">Detail</button>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <th>Image</th>
                                                <th>Nom</th>
                                                <th>Prix HT</th>
                                                <th>Prix AT</th>
                                                <th>Quantité</th>
                                                <th>Description</th>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                                {{--//////////// map container /////////////////////--}}
                                <div class="tab-pane" id="timeline">
                                    <div class="box box-solid bg-light-blue-gradient">
                                        <div class="box-body">
                                            <div id="map-single" style="height: 350px; width: 100%;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="settings">
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
    <script>
        var mapData = JSON.parse('{!! $details !!}');
        $('document').ready(function () {
            showSinglePosition(mapData);
        })
    </script>


@endsection