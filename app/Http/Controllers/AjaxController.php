<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AjaxController extends Controller
{
    public function getSubscriber(Request $request)
    {
        $subscriberId = $request->input('subscriber_id');
        // Fetch subscriber data from the database
       // $subscriber = DB::table('subcriber')->where('ID', $subscriberId)->first();

    //     $subscriber = DB::table('subcriber')
    //         ->join('subcriberdetail', 'subcriber.ID', '=', 'subcriberdetail.HEADERID')
    //         ->where('subcriber.ID', '=', $subscriberId)
    //         //->select('subcriber.LASTNAME','subcriber.FIRSTNAME', 'subcriberdetail.PHONENO', 'subcriberdetail.PROVIDER')
    //       //   ->get();
    //          ->first();
        
           
    //         if ($subscriber) {
    //     // Return the data as a JSON response
    //     return response()->json([
    //        'ID' => $subscriber->ID,
    //         'FIRSTNAME' => $subscriber->FIRSTNAME,
    //         'LASTNAME' => $subscriber->LASTNAME,
    //         'MIDDLENAME' => $subscriber->MIDDLENAME,
    //         'PHONENO' => $subscriber->PHONENO,
    //         'PROVIDER' => $subscriber->PROVIDER,
    //     ]);

    // } else {
    //     return response()->json([
    //         'error' => 'Subscriber not found',
    //     ]);


            $subscriber = DB::table('subcriber')
            ->join('subcriberdetail', 'subcriber.ID', '=', 'subcriberdetail.HEADERID')
            ->where('subcriber.ID', '=', $subscriberId)
           ->select('subcriber.LASTNAME','subcriber.FIRSTNAME','subcriber.MIDDLENAME', 'subcriberdetail.PHONENO', 'subcriberdetail.PROVIDER')
            ->get();
            
        if ($subscriber->isNotEmpty()) {
            // Return the data as a JSON response
            return response()->json($subscriber);
        } else {
            // Return an error response if no data is found
            return response()->json(['error' => 'Subscriberss not found.'], 404);
        }
    
    
}
    }

