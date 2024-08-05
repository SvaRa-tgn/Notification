<?php

namespace App\Http\Controllers;

use App\Actions\IndexAction;
use Illuminate\View\View;

class IndexController extends Controller
{
    public function index(IndexAction $action): View
    {
        return $action->execute();
    }
}
