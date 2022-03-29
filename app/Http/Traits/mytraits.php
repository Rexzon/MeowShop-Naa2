<?php
namespace App\Http\Traits;
use App\Product;
use App\Order;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

trait mytraits{

    public function getOrder($user){
        $userid = $user->id;
        return $userid;
    }


}

?>
