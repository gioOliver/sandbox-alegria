<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    //    UNCOMENT LINES BELOW TO TEST PRE-COMMIT BEHAVIOUR
    //    public function testPintDontWork(){
    //    return [
    //    "item1"=>1,
    //    "item2"=>2,
    //    "item3"=>3,
    //    "item4"=>4,
    //    ];
    //    }
    public function testPintWorks()
    {
        return [
            'item1' => 1,
            'item2' => 2,
            'item3' => 3,
            'item4' => 4,
        ];
    }
}
