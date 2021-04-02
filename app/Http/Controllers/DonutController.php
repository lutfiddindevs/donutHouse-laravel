<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donut;

class DonutController extends Controller
{
    public function index() {
    	$donuts = Donut::all();
      //$donuts = Donut::orderBy('base')->get();
      //$donuts = Donut::where('type', 'cake')->get();
      //$donuts = Donut::latest()->get();
	  return view('donuts.index', [
		'donuts' => $donuts,
		'name' => request('name'),
		'age' => request('age')
	]);
    }

    public function show($id) {
 
      $donut = Donut::findOrFail($id);
    	return view('donuts.show', ['donut' => $donut]);
    }

    public function create() {
      return view('donuts.create');
    }

    public function store() {
     $donut = new Donut(); 
     $donut->name = request('name');    
     $donut->type = request('type');    
     $donut->base = request('base');
     $donut->toppings = request('toppings');
     $donut->save();
     // return request('toppings');    
     return redirect('/')->with("msg", "Thanks for your order");
    }
    public function destroy($id) {
      $donut = Donut::findOrFail($id);
      $donut->delete();

      return redirect('/donuts')->with("msg", "Successfully deleted a record");
    }
}
