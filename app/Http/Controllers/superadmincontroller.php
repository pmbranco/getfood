<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class superadmincontroller extends Controller
{
    
    public function customer_count(){
        //please query the user model and return the number of customers as an integer, eg: 7
        //where  status = 0, meaning a customer

    }

    public function vendor_count(){
        //please query the user model and return the number of vendors as an integer, eg: 7
        //where status = 1, meaning a vendor

    }

    public function all_vendors(){
        //please query the user model and return 
        //where  status = 1 and verification = 0, paginate by 5, meaning a vendor who is not verified
    }

    public function vendor_search($vendorname){
        //please query the user model and return the vendor 
        // where name == $vendorname
        //where  status = 1 and verification = 0, paginate by 5, and return
       
    }

    public function approve_vendor(){
        //query user model and change vendor verification to 1 (0 is unverified, 1 is verified, 2 is rejected)
        //return 1 as a success response, eg: last line is return 1;
       
    }

    public function decline_vendor(){
       //query user model and change vendor verification to 2 //meaning rejected (0 is unverified, 1 is verified, 2 is rejected)
        //return 1 as a success response, eg: last line is return 1;
    }


}
