<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // $cars = Car::all();

        // $cars = Car::where('published_at', '!=', null)->get();
        $cars = Car::orderBy('published_at', 'desc')->get();
        dump($cars);

        $car = new Car();
        $car->maker_id = 1;
        $car->model_id = 1;
        $car->year = 2020;
        $car->price = 25000;
        $car->vin = '1HGCM82633A123456';
        $car->mileage = 15000;
        $car->car_type_id = 1;
        $car->fuel_type_id = 1;
        $car->user_id = 1;
        $car->city_id = 1;
        $car->address = '123 Main St, Anytown, USA';
        $car->phone = '555-123-4567';
        $car->description = 'A well-maintained car in excellent condition.';
        $car->published_at = now();
        $car->save();
        
        return view('home.index');
    }
}
