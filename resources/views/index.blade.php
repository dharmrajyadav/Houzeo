<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <style>

        .property_type
        {
            height: 250px;
            margin: 15px;
            background-color: #9e9e9e57;
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
    
    <div class="row" id="mapLocation" name="mapLocation" hidden>
      <div class="col-sm-4" style="background-color:yellow;">33.33%</div>
      <div class="col-sm-4" style="background-color:orange;">33.33%</div>
      <div class="col-sm-4" style="background-color:yellow;">33.33%</div>
    </div>
    <br>

    
    <div class="row">
    <div class="col-sm-1" > </div>
      <div class="col-sm-4" >
            <div class="form-group">
               <input type="text" class="form-control"  name="address" id="address" placeholder="Address">
            </div>
      </div>

      <div class="col-sm-2" >
            <div class="form-group">
           <input type="text" class="form-control"  name="city" id="city" placeholder="City">
            </div>
      </div>

      <div class="col-sm-2" >
            <div class="form-group">
           <input type="text" class="form-control"  name="state" id="state" placeholder="State">
            </div>
      </div>
      
      <div class="col-sm-2" >
            <div class="form-group">
            <input type="text" class="form-control" name="zip" id="zip" placeholder="Zip">
            </div>
      </div>
      <div class="col-sm-1" > </div>
    </div>
    <br>
    
    <div class="row">
      <div class="col-sm-3"></div>
      <div class="col-sm-6 headings">And what's your property address?</div>
      <div class="col-sm-3"></div>
    </div>
    <br>


    <div class="row">
     
      <div class="col-sm-2 property_type" >
         <div><img src="images/single_family.png" alt="Girl in a jacket" ></div>
             <div class="radio">
                 <label><input type="radio" name="optradio" value="single_family" class="radio_style" checked><br>Single Family</label>
             </div>
      </div>

      <div class="col-sm-2 property_type" >
         <div><img src="images/building.png" alt="Girl in a jacket" ></div>
            <div class="radio">
               <label><input type="radio" name="optradio" value="condo/coop/town/mobile" class="radio_style" ><br>condo/coop/town/Mobile</label>
            </div>
      </div>
      <div class="col-sm-2 property_type" >
      <div><img src="images/multi_family.png" alt="Girl in a jacket" ></div>
            <div class="radio">
               <label><input type="radio" name="optradio" value="multi_family" class="radio_style">Multi-Family</label>
            </div>
      </div>
      <div class="col-sm-2 property_type" >
      <div><img src="images/building.png" alt="Girl in a jacket" ></div>
            <div class="radio">
               <label><input type="radio" name="optradio" value="land/lot" class="radio_style">Land/Lot</label>
            </div>
      </div>
      <div class="col-sm-2 property_type" >
      <div><img src="images/single_family.png" alt="Girl in a jacket" ></div>
            <div class="radio">
               <label><input type="radio" name="optradio" value="Other" class="radio_style" >Other</label>
            </div>
      </div>
     
    </div>
  </div>
</div>

</body>
</html>
