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
        // dump(vars: $cars);

        // $car = new Car();
        // $car->maker_id = 1;
        // $car->model_id = 1;
        // $car->year = 2020;
        // $car->price = 25000;
        // $car->vin = '1HGCM82633A123456';
        // $car->mileage = 15000;
        // $car->car_type_id = 1;
        // $car->fuel_type_id = 1;
        // $car->user_id = 1;
        // $car->city_id = 1;
        // $car->address = '123 Main St, Anytown, USA';
        // $car->phone = '555-123-4567';
        // $car->description = 'A well-maintained car in excellent condition.';
        // $car->published_at = now();
        // $car->save();

        $carData = [
            'maker_id' => 1,
            'model_id' => 1,
            'year' => 2020,
            'price' => 25000,
            'vin' => '1HGCM82633A123456',
            'mileage' => 15000,
            'car_type_id' => 1,
            'fuel_type_id' => 1,
            'user_id' => 1,
            'city_id' => 1,
            'address' => '123 Main St, Anytown, USA',
            'phone' => '555-123-4567',
            'description' => 'A well-maintained car in excellent condition.',
            'published_at' => now(),
        ];

        //Aproach 1 - mass assignment
        //$car = Car::create($carData);

        //Aproach 2 - mass assignment
        // $car2 = new Car();
        // $car2->fill($carData);
        // $car2->save();

        //Aproach 3 - mass assignment        
        $car3 = new Car($carData);
        $car3->save();


        return view('home.index');
    }
}
