<?php
/**
 * Created by PhpStorm.
 * User: 熊勇
 * Date: 2018/9/7
 * Time: 14:39
 */
namespace App\Http\Fruit\Controllers;

use App\Api\BaseClass\Controller;
use App\Http\Fruit\Models\Fruits;
use Illuminate\Support\Facades\Input;


class FruitStoreGoodsController extends Controller{
    public function deleteFruits(){
        $input = Input::all();
        Fruits::where('id',$input['id'])->delete();

    }
}