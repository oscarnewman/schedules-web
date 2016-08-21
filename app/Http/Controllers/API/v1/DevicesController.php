<?php

namespace App\Http\Controllers\API\v1;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Device;

class DevicesController extends Controller
{

    public function store(Request $request) {
        $this->validate($request, [
            'token' => 'required|unique:devices'
        ]);

        $device = Device::create($request->all());
        return $device;
    }

}
