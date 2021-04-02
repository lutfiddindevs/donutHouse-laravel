
@extends('layouts.layout')
        @section('content')
        
        <!-- Image and text -->
        

        <div class="container">
            <div class="row text-center">
                <div class="col-12"> 
            <h1 class="display-4 my-4">Create a new Donut</h1>
            <form method="POST" action="/donuts">
                @csrf
                <div class="form-group">
                <label for="name">Your name:</label>
                <input type="text" name="name" class="btn-secondary rounded-pill">
                </div>
                <div class="form-group">
                    <label for="type">Choose donut type:</label>
                <select name="type">
                    <option value="yeast">Yeast</option>
                    <option value="cake">Cake</option>
                    <option value="potato">Potato</option>
                </select>
                </div>
                <div class="form-group">
                    <label for="base">Choose base type:</label>
                <select name="base">
                    <option value="leavener">Leavener</option>
                    <option value="dense">Dense</option>
                    <option value="mashed_potatoes">Mashed Potatoes</option>
                </select>
                </div>
                <div class="form-group my-4">
                    <fieldset>
                    <label>Extra toppings</label> <br />
                    <input type="checkbox" name="toppings[]" value="marshmallow"> Marshmallow <br />    
                    <input type="checkbox" name="toppings[]" value="ice_cream"> Ice Cream <br />
                    <input type="checkbox" name="toppings[]" value="cereal"> Cereal <br />
                </fieldset>
                </div>
                <input type="submit" name="submit" class="btn-secondary my-4 rounded-pill" value="Order Donut">
            </form>
            </div>
          </div>
        </div>

        @endsection
        