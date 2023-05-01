<?php

namespace App\Controllers;

use App\Models\Member as MemberModel;
use App\Models\School;

class Home extends BaseController
{
    public function index(): string
    {
        $members = model(MemberModel::class)->paginate(30);

        $schools = model(School::class)->paginate(30);

        return view('pages/home', ['members' => $members, 'schools' => $schools]);
    }
}
