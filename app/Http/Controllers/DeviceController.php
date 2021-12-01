<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class DeviceController extends Controller
{
    public function list($id=null)

    {
            return $id?Device::find($id):Device::all();
    }
}
