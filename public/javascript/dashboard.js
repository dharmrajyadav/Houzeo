var map ;
var geocoder;
var markerBounds = [];  
var country;


$(document).ready(function () {
  $("#mapLocation").hide();
  $('#successImage').hide();
  getUserDetails();
});

var initializeMap = function(){
  var mapOptions = {
    center: new google.maps.LatLng(19.0760, 72.8777),
    zoom: 8,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  map = new google.maps.Map(document.getElementById("mapLocation"),mapOptions);
  $("#mapLocation").show();
}

function getCityLocation(dataAddress) {
    if(map == undefined){
      initializeMap();
    }
    geocoder = new google.maps.Geocoder();
    geocoder.geocode({ 'address': dataAddress}, function(results, status) {
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
          url:'/getOnChange',
          //url: "{{ url('getOnChange')}}",
          datatype : "application/json",
          contentType: "application/json",  
          data:JSON.stringify({addressData:addressData}),
          success:function(data) 
          {
            renderAddress(data);
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
        url:'/userData',
        //url: "{{ url('userData')}}",
        data:{address:address,city:city,state:state,zip:zip,property_type:property_type,County_by_GA:County_by_GA}, 
        success: function(result){
          $("#userdetails").empty();
          var jsonData = JSON.parse(result);
          var dataLength =jsonData.length;
          var dataAppend = '';
          for(var i = 0;i < dataLength ; i++)
          {
              dataAppend+='<tr><td>'+jsonData[i].Sr+'</td><td>'+jsonData[i].Property_Type+'</td><td>'+jsonData[i].Street_Address+'</td><td>'+jsonData[i].City+'</td><td>'+jsonData[i].State+'</td><td>'+jsonData[i].Zip+'</td><td>'+jsonData[i].County_by_SA+'</td><td>'+jsonData[i].County_by_GA+'</td></tr>';
          }    
          $("#userdetails").append(dataAppend);
  }});
      
});

var renderAddress = function(data){
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

var getUserDetails = function(){
  $.ajax({
    url: "/UserfetchData",
  //  url: "{{ url('UserfetchData')}}",
    success: function(result)
    {
      var jsonData = JSON.parse(result);
      var dataLength =jsonData.length;
      var dataAppend = '';
      for(var i = 0;i < dataLength ; i++)
      {
          dataAppend+='<tr><td>'+jsonData[i].Sr+'</td><td>'+jsonData[i].Property_Type+'</td><td>'+jsonData[i].Street_Address+'</td><td>'+jsonData[i].City+'</td><td>'+jsonData[i].State+'</td><td>'+jsonData[i].Zip+'</td><td>'+jsonData[i].County_by_SA+'</td><td>'+jsonData[i].County_by_GA+'</td></tr>';
      }    
      $("#userdetails").append(dataAppend);
    }});
} 