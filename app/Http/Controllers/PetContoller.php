<?php

namespace App\Http\Controllers;

use App\Pet;
use App\User;
use Illuminate\Http\Request;

class PetContoller extends Controller
{
    public function index(){

        $user = User::find(1);

        return $user->pets;


        $pet = Pet::find(2);



        $owner = $pet->owner;

        return $owner->pets;




        $newPet = new Pet();
        $newPet->name = 'Gigi';
        $newPet->user_id = 1;
        $newPet->save();

        return Pet::all();


        // remove pet with id = 1
        $pet = Pet::find(1);
        $pet->delete();

        return $pet;


        // update

        $garfield = Pet::find(2);

        $garfield->name = 'New Garfield2';

        $garfield->save();

        return $garfield;


        //get all

        $pets = Pet::all();

        return $pets;
    }
}
