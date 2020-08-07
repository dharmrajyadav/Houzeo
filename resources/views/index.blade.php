<!DOCTYPE html>
<html lang="en">
<head>
  <title>Houzeo-Api</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

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
                      <table name="addressUpdate" id="addressUpdate" class="addressUpdate" >

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

      <div class="container">
        <table class="table">
          <thead>
              <h5>User-Details</h5>
          <tr>
            <th>Sr</th>
            <th>Property Type</th>
            <th>Street Address</th>
            <th>City</th>
            <th>State</th>
            <th>Zip</th>
            <th>County by GA</th>
            <th>County by SA</th>
            
          </tr>
          </thead>
          <tbody id="userdetails">
            
          </tbody>
      </table>

</div>



<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://maps.google.com/maps/api/js?key=AIzaSyDYZn19GZk1sHGjHukmvr6tUlH6pgHZqg0&libraries=places,drawing,geometry"></script> 
<script src="javascript/dashboard.js" type="text/javascript"></script> 
<!-- 
<script src="https://maps.googleapis.com/maps/api/geocode/json?latlng=40.714224,-73.961452&key=AIzaSyBMs0nz6ETjfUwCh_677P9AsGmdSH9SMiM"></script>  -->
</body>
</html>
