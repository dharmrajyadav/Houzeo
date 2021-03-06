<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\userModel;
use DB;


class ApiController extends Controller
{
    
        public function getData(Request $request)
        {       
            $prefixData =  $request->addressData;
           
            $service_url = env('SERVICE_URL').urlencode($prefixData);
           $curl = curl_init($service_url);
           curl_setopt($curl, CURLOPT_HTTPHEADER, array("ovio-api-key: key"));
           curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
           curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
           curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
           $curl_response = curl_exec($curl);
           curl_close($curl);
           return json_encode($curl_response);
              
        }


        public function userData(Request $request)
        {
                $userModel = new userModel;
                $userModel->Street_Address = $request->address;
                $userModel->City = $request->city;
                $userModel->State = $request->state;
                $userModel->Zip = $request->zip;
                $userModel->Property_Type = $request->property_type;
                $userModel->County_by_SA = $request->County_by_GA;
                $userModel->County_by_GA = $request->County_by_GA;
                $userModel->save();

                $users = DB::table('userdetails')->latest()->get();
                return json_encode($users);
        }

        
                public function UserfetchData()
                {
                        $users = DB::table('userdetails')->latest()->get();
                        return json_encode($users);
                       
                }
       




}
