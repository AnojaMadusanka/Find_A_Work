

<!-- <div class="form-group">
    <label for ="address_address">Address</label>
    <input type="text" id="address-input" name="address_address" class="form-control map-input">
    <input type="hidden" name="address_latitude" id="address-latitude" value="0"/>
    <input type="hidden" name="address_longitude" id="address-longitude" value="0"/>
</div>

<div id="address-map-container" style="width:100%:height:400px;">
    <div style="width:100%; height : 100%" id="address-map"></div>
</div>

@section('scripts')
    @parent
    <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places&callback=initialize" async defer></script>
    <script src="/js/mapInput.js"></script>
@endsection -->
<style>
    #map-canvas{
        width:350px;
        height:250px;
    }
</style>

<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBRK594_jzhAcwLq1fakrLq6Jc9V20cttE&libraries=places" type="text/javascript"></script>
</head>
<body>
    <div class="container">
        <div class="col-sm-4">
            <h1>Add,Vender,Location</h1>
            {{Form::open(array('url'=>'/vendor/add', 'files'=>true))}}
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" class="form-control input-sm" name="title">
                </div>

                <div class="form-group">
                    <label for="">Map</label>
                    <input type="text" id="searchmap">
                    <div id="map-canvas"></div>
                </div>

                <div class="form-group">
                    <label for="">Lat</label>
                    <input type="text" class="form-control input-sm" name="lat" id="lat">
                </div>

                <div class="form-group">
                    <label for="">Lat</label>
                    <input type="text" class="form-control input-sm" name="lng" id="lng">
                </div>

                <button type="" class="btn btn-danger">Save</button>

            {{Form::close()}}
        </div>    
    </div>
</body>

<script>
    var map = new google.maps.Map(document.getElementById('map-canvas'),{
        center:{
            lat:27.27,
            lng:85.36
        },
        zoom:15
    });
</script>