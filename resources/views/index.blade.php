<!DOCTYPE html>
<html lang="en">
<head>
  <title>Houzeo-Api</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <!-- <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script> -->

  <style>

        .property_type
        {
            height: 250px;
            margin: 15px;
            background-color: #9e9e9e33;
            border-radius: 10px;
        }
        .headings
        {
            text-align: center;
            font-size: xx-large;
        }
      .radio_style
      {
        border: 0px;
        width: 100%;
        height: 1.5em;
        margin-left: 45%;
      }

img
{
  position: relative;
    left: 15px;
}



  </style>
</head>
<body>

<div class="container-fluid">
  
  <div class="container-fluid">
   
    <div class="row">
      <div class="col-sm-3"></div>
      <div class="col-sm-6 headings">What's your property address?</div>
      <div class="col-sm-3"></div>
    </div>
    <br>
    
    <div class="row">
      <div class="col-sm-2"></div>
      <div class="col-sm-8" id="mapLocation" name="mapLocation" style="height: 250px;"></div>
      <div class="col-sm-2"></div>
    </div>
    <br>

    
    <div class="row">
    <div class="col-sm-1" > </div>
      <div class="col-sm-4" >
            <div class="form-group">
               <input type="text" class="form-control"  name="address" id="address" placeholder="Address" required>
                      <table name="addressUpdate" id="addressUpdate" class="addressUpdate">

                      </table>
            </div>
      </div>

      <div class="col-sm-2" >
            <div class="form-group">
           <input type="text" class="form-control"  name="city" id="city" placeholder="City" readonly>
            </div>
      </div>

      <div class="col-sm-2" >
            <div class="form-group">
           <input type="text" class="form-control"  name="state" id="state" placeholder="State" readonly>
            </div>
      </div>
      
      <div class="col-sm-2" >
            <div class="form-group">
            <input type="text" class="form-control" name="zip" id="zip" placeholder="Zip" readonly>
            </div>
      </div>
      <div class="col-sm-1" > <div ><img src="images/success.png" alt="Girl in a jacket" id="successImage" name="successImage" ></div></div>
    </div>
    <br>
    
    <div class="row">
      <div class="col-sm-3"></div>
      <div class="col-sm-6 headings">And what's your property type?</div>
      <div class="col-sm-3"></div>
    </div>
    <br>


    <div class="row">
     
      <div class="col-sm-2 property_type" >
         <div><img src="images/single_family.png" alt="Girl in a jacket" ></div>
             <div class="radio">
                 <label><input type="radio" name="optradio" id="Single" value="single_family" class="radio_style"><br><a style="position: relative;
    left: 43px;">Single Family</a></label>
             </div>
      </div>

      <div class="col-sm-2 property_type" >
         <div><img src="images/building.png" alt="Girl in a jacket" ></div>
            <div class="radio">
               <label><input type="radio" name="optradio" id="condo" value="condo/coop/town/mobile" class="radio_style" style="position: relative;
    left: -83px;"><br>condo/coop/town/Mobile</label>
            </div>
      </div>
      <div class="col-sm-2 property_type" >
      <div><img src="images/multi_family.png" alt="Girl in a jacket" ></div>
            <div class="radio">
               <label><input type="radio" name="optradio" id="Multi" value="multi_family" class="radio_style" style="position: relative;left: 3px;top: 19px;"><a style="position: relative; top: 20px;left: 40px;">Multi-Family</a></label>
            </div>
      </div>
      <div class="col-sm-2 property_type" >
      <div><img src="images/location.jpg" alt="Girl in a jacket" ></div>
            <div class="radio">
               <label><input type="radio" name="optradio" id="Land" value="land/lot" class="radio_style" style="position: relative;left: 31px;top: 4px;"><a style="position: relative;top: 4px; left: 64px;;">Land/Lot</a></label>
            </div>
      </div>
      <div class="col-sm-2 property_type" >
      <div><img src="images/building_other.png" alt="Girl in a jacket" style="position: relative;top: 40px;"></div>
            <div class="radio">
               <label><input type="radio" name="optradio" id="other" value="Other" class="radio_style" style="position: relative;left: 54px;top: 74px;" ><a style=" position: relative;left: 73px;top: 65px;">Other</a></label>
            </div>
      </div>
     
    </div>
  </div>
</div>

      <!-- <div>
      <table name="userdetails" id="userdetails" class="table">

          </table>
      </div> -->

      <div class="container">
        <table class="table">
        <thead>
                <h5>User-Details</h5>
      <tr>
        <th>Sr.</th>
        <th>Street_Address</th>
        <th>City</th>
        <th>State</th>
        <th>Zip</th>
        <th>County_by_GA</th>
        <th>County_by_SA</th>
        
      </tr>
    </thead>
    <tbody id="userdetails">
      
    </tbody>
        </table>

</div>



 
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maps.google.com/maps/api/js?key=AIzaSyDYZn19GZk1sHGjHukmvr6tUlH6pgHZqg0&libraries=places,drawing,geometry"></script> 
<!-- 
<script src="https://maps.googleapis.com/maps/api/geocode/json?latlng=40.714224,-73.961452&key=AIzaSyBMs0nz6ETjfUwCh_677P9AsGmdSH9SMiM"></script>  -->




  <script>
  var map ;
  var geocoder;
var markerBounds = [];  
var country;

$(document).ready(function () {

  $("#mapLocation").hide();
  $('#successImage').hide();

  // $.ajax({
  //   url: "{{ url('UserfetchData')}}",
  //   success: function(result)
  //   {
  //     var jsonData = JSON.parse(result);
  //     var dataLength =jsonData.length;
  //     var dataAppend = '';
  //     for(var i = 0;i < dataLength ; i++)
  //     {
  //         dataAppend+='<tr><td>'+jsonData[i].Sr+'</td><td>'+jsonData[i].Street_Address+'</td><td>'+jsonData[i].City+'</td><td>'+jsonData[i].State+'</td><td>'+jsonData[i].Zip+'</td><td>'+jsonData[i].County_by_SA+'</td><td>'+jsonData[i].County_by_GA+'</td></tr>';
  //      }    
  //       $("#userdetails").append(dataAppend);


  //   }});

});



function getCityLocation(dataAddress) {

          if(map == undefined){
            var mapOptions = {
              center: new google.maps.LatLng(19.0760, 72.8777),
              zoom: 8,
              mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            map = new google.maps.Map(document.getElementById("mapLocation"),mapOptions);
            $("#mapLocation").show();
          }

          geocoder = new google.maps.Geocoder();
          
         
          geocoder.geocode( { 'address': dataAddress}, function(results, status) {
                                          
                     var result_length = results[0].address_components.length;
                          for(var i = 0;i<result_length ; i++)
                          {
                            if (results[0].address_components[i].types[0] == "country") 
                               {
                                  country = results[0].address_components[i].long_name;

                               }
                          }

                        

                if (status == google.maps.GeocoderStatus.OK) {
                  var marker = new google.maps.Marker({
                      map: map,
                      position: results[0].geometry.location
                });
                }
                
                var myLatLng = new google.maps.LatLng(results[0].geometry.location.lat(), results[0].geometry.location.lng());                      
                    addressesBounds(0, 0, myLatLng); 
        });

        
 }

 

 function addressesBounds(total_addresses, address_count, myLatLng) {
              markerBounds.push(myLatLng);
              // make sure you only run this function when all addresses have been geocoded
              if (total_addresses == address_count) {
                  var latlngbounds = new google.maps.LatLngBounds();
                  for ( var i = 0; i < markerBounds.length; i++ ) {
                    latlngbounds.extend(markerBounds[i]);
                  }
                  map.setCenter(latlngbounds.getCenter());
                  map.fitBounds(latlngbounds);
              }
}

//change 
    $("#address").on("keyup paste", function(){

          var addressData = $('#address').val();
          $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });
          $.ajax({
                type:'post',
                url: "{{ url('getOnChange')}}",
                datatype : "application/json",
                contentType: "application/json",  
                data:JSON.stringify({addressData:addressData}),
                success:function(data) 
                  {
                      var jsonData = JSON.parse(JSON.parse(data));
                      var dataLength =jsonData.suggestions.length;
                      var dataAppend = '';
                      $("#addressUpdate").empty();
                      $('#addressUpdate').show();
                      for(var i = 0 ; i <= dataLength-1 ; i++)
                        {
                          dataAppend+='<tr class="rowData"><td id="'+[i]+'">'+jsonData.suggestions[i].text+'</td></tr>';
                        }    
                        $("#addressUpdate").append(dataAppend);

                        $( "td" ).click(function(){                          
                          var serviceID = $(this).attr('id');
                          $('#addressUpdate').hide();
                          $('#successImage').show();
                          //alert(jsonData.suggestions[serviceID].text);
                          $('#address').val(jsonData.suggestions[serviceID].text);
                          $('#city').val(jsonData.suggestions[serviceID].city);
                          $('#state').val(jsonData.suggestions[serviceID].state);
                          $('#zip').val(jsonData.suggestions[serviceID].street_line);

                          $('#successImage').show();

                            var cityAddress = jsonData.suggestions[serviceID].text+','+jsonData.suggestions[serviceID].city+','+jsonData.suggestions[serviceID].state+','+jsonData.suggestions[serviceID].street_line;
                            getCityLocation(cityAddress); 

                            var address = jsonData.suggestions[serviceID].text;
                            var city = jsonData.suggestions[serviceID].city;
                            var state = jsonData.suggestions[serviceID].state;
                            var zip = jsonData.suggestions[serviceID].street_line;
                            var property_type = $('input[name="optradio"]:checked').val();


                        });
                   }
          });  

                 
            });

              $('input:radio').click(function()
              {
                var address = $('#address').val();
                var city = $('#city').val();
                var state = $('#state').val();
                var zip = $('#zip').val();
                var property_type = $('input[name="optradio"]:checked').val();
                var County_by_GA = country;
               
                $.ajax({
                              type:'post',
                              url: "{{ url('userData')}}",
                              data:{address:address,city:city,state:state,zip:zip,property_type:property_type,County_by_GA:County_by_GA}, 
                              success: function(result){
                                         
                                var jsonData = JSON.parse(result);
                                var dataLength =jsonData.length;
                                var dataAppend = '';
                                for(var i = 0;i < dataLength ; i++)
                                {
                                    dataAppend+='<tr><td>'+jsonData[i].Sr+'</td><td>'+jsonData[i].Street_Address+'</td><td>'+jsonData[i].City+'</td><td>'+jsonData[i].State+'</td><td>'+jsonData[i].Zip+'</td><td>'+jsonData[i].County_by_SA+'</td><td>'+jsonData[i].County_by_GA+'</td></tr>';
                                  }    
                                  $("#userdetails").append(dataAppend);

                                          }});
                   
              });



</script>


</body>
</html>
