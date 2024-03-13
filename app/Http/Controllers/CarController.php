<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    public function getCars(){
        $car=  Car::all();
        $car=  Car::with("type","color")->get();
        return $car;
    }
    
    public function getCar(Request $request){
        $car = $request->all();
        $car = $name["name"];
        $car=  Car::with("type","color")->where("car",$name)->get();
        
        
        return $car;
    }
    public function addCar(CarChecker $request){

        
        $car = new Car;
        $car->car=$input["car"];
        $car->amount=$input["amount"];
        $car->type_id= (new TypeController)->get();
        $car->color_id= (new ColorController)->get();
        if (is_null($car)) {
            return $this->sendError("hiba a bejövő paraméterekben");
        }
        $car->save();
        return $this->sendResponse(CarResource::make($car), "Hozzáadva");
            
     }
    
    
    
    public function modifyCar(CarChecker $request){
        $request->validated();
        $id = $request->get("id");
        $car = Car::find($id);
        $name->name = $request->get("name");
        $car->amount = $request->get("amount");
        $car->type_id= (new TypeController)->get();
        $car->color_id= (new ColorController)->get();
        $car->save();
        if (is_null($car)) {
            return $this->sendError("hiba a bejövő paraméterekben","Nincs autó");
        }
        return $this->sendResponse(CarResource::make($car), "Módosítva");
    }
    
    public function destroyCar(Request $request){
        
        $car = Car::find($request->get("id"));
        if (is_null($car)) {
            return $this->sendError("hiba a bejövő paraméterekben","Nincs ilyen autó");
        }else {
            Car::destroy($car->id);
            return $this->sendResponse(CarResource::make($car), "Törölve");
        }
    }

}