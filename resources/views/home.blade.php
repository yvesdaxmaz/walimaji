@extends('layouts.auth')

@section('content')
    <!--//////////////////////////////////////////  maps should be generated here///////////////////////////////-->
    <div id="tab-map1">
        <div class="map-container z-depth-3">
            <iframe class="map-container-content" id="map1"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15630.679180929914!2d27.4688104!3d-11.6468624!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x51540f372bd869d6!2sNgpictures!5e0!3m2!1sfr!2scd!4v1532932610500"
                    frameborder="0" style="border:0" allowfullscreen="allowfullscreen"></iframe>
            <div class="map-search-btn toolbar">
                <a class="btn-floating btn-large teal z-depth-2 waves-effect waves-light modal-trigger"
                   href="#search-modal">
                    <i class="material-icons">search</i>
                </a>
            </div>
        </div>
    </div>
    <div id="tab-map2" class="col s12">
        <div class="map-container z-depth-3">
            <iframe class="map-container-content" id="map2"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15630.679180929914!2d27.4688104!3d-11.6468624!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x51540f372bd869d6!2sNgpictures!5e0!3m2!1sfr!2scd!4v1532932610500"
                    frameborder="0" style="border:0" allowfullscreen="allowfullscreen"></iframe>
            <div class="map-search-btn toolbar">
                <a class="btn-floating btn-large teal z-depth-2 waves-effect waves-light modal-trigger"
                   href="#search-modal">
                    <i class="material-icons">search</i>
                </a>
            </div>
        </div>
    </div>
    <div id="tab-map3" class="col s12">
        <div class="map-container z-depth-3">
            <iframe class="map-container-content" id="map3"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15630.679180929914!2d27.4688104!3d-11.6468624!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x51540f372bd869d6!2sNgpictures!5e0!3m2!1sfr!2scd!4v1532932610500"
                    frameborder="0" style="border:0" allowfullscreen="allowfullscreen"></iframe>
            <div class="map-search-btn toolbar">
                <a class="btn-floating btn-large teal z-depth-2 waves-effect waves-light modal-trigger"
                   href="#search-modal">
                    <i class="material-icons">search</i>
                </a>
            </div>
        </div>
    </div>
    <div id="tab-map4" class="col s12">
        <div class="map-container z-depth-3">
            <iframe class="map-container-content" id="map4"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15630.679180929914!2d27.4688104!3d-11.6468624!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x51540f372bd869d6!2sNgpictures!5e0!3m2!1sfr!2scd!4v1532932610500"
                    frameborder="0" style="border:0" allowfullscreen="allowfullscreen"></iframe>
            <div class="map-search-btn toolbar">
                <a class="btn-floating btn-large teal z-depth-2 waves-effect waves-light modal-trigger"
                   href="#search-modal">
                    <i class="material-icons">search</i>
                </a>
            </div>
        </div>
    </div>
@endsection
