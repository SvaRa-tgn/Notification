<?php

namespace App\Actions;

use Illuminate\View\View;

class IndexAction
{
    public function execute(): View
    {
        return view('index');
    }
}
