<?php

namespace App\Exceptions;

use Exception;

class SubscribeFailed extends Exception
{
    public function render(){
        return response()->json([
            'message' =>'You are already a Subscriber'

        ],422);
    }
}
