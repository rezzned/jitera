<?php

use App\Models\UserCategory;
use Carbon\Carbon;
use App\Models\Categories;
use App\Models\Users;
use Illuminate\Support\Facades\DB;

function getCategories($referred_by)
{

    $varReff = "";

    $userCategory = UserCategory::Where('user_id', $referred_by)->first();

    if (!blank($userCategory)) {
        if ($userCategory->category_id == 1) {
            $varReff = $userCategory->getCategories->name;
        }
    } else {
        $varReff = "";
    }

    return $varReff;
}

function getRefDistributor($referred_by)
{
    $count = 0;
    $users = Users::select(DB::raw('count(*) as user_count, referred_by'))
        ->groupBy('referred_by')
        ->Where('referred_by', $referred_by)
        ->first();
    if ($users) {
        $count = $users->user_count;
    }
    return $count;
}

function getCommission($total, $referal)
{

    if ($referal >= 31) {
        $percentage = 30;
        $commission = $total * 30 / 100;
    } elseif (($referal >= 21) && ($referal < 31)) {
        $percentage = 20;
        $commission = $total * 20 / 100;
    } elseif (($referal >= 11) && ($referal < 21)) {
        $percentage = 15;
        $commission = $total * 15 / 100;
    } elseif (($referal >= 5) && ($referal < 11)) {
        $percentage = 10;
        $commission = $total * 10 / 100;
    } else {
        $percentage = 5;
        $commission = $total * 5 / 100;
    }

    $data = array(
        "percentage" => $percentage,
        "commission" => number_format($commission, 2, '.')
    );

    return $data;
}

