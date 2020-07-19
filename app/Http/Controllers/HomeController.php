<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\City;
use App\Type;
use App\Property;
use App\Landlord;

class HomeController extends Controller
{
    
    public function index()
    {
        $citys = City::all();
        $types = Type::all();
        $propertys = Property::all();
        $landlords = Landlord::distinct()->get(['property_id']);
        return View('index')
            ->with('landlords',$landlords)
            ->with('propertys',$propertys)
            ->with('citys',$citys)
            ->with('types',$types);
    }

    
    public function store(Request $request)
    {
        $Landlord = new Landlord;
        $Landlord->user_id = 1;
        $Landlord->property_id = $request->info;
        $Landlord->save();
        
        return back()->with('agregar', 'hi');
    }

    public function buscar(Request $request)
    {
        $citys = City::all();
        $types = Type::all();
        $landlords = Landlord::distinct()->get(['property_id']);
        $propertys = Property::where('city_id','=', $request->ciudad)
                        ->where('type_id','=', $request->tipo)->get();
        if($request->tipo == ''){
            $propertys = Property::where('city_id','=', $request->ciudad)->get();
        }
        if($request->ciudad == ''){
            $propertys = Property::where('type_id','=', $request->tipo)->get();
        }

        return View('index')
            ->with('landlords',$landlords)
            ->with('citys',$citys)
            ->with('types',$types)
            ->with('propertys',$propertys);
    }
}
