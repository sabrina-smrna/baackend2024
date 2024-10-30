<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\AnimalController;

class AnimalController extends Controller
{

// Memiliki variabel animal dengan ada beberapa atribut yaitu cat, fish, cow
public $animal = ["cat","fish","cow"];


// Lalu dideklarasi lagi dibagian index untuk get
 public function index ()
 {
   // return ini mengembalikan variabel animal untuk diproses
    return  $this->animal;

 }

//  kenapa memakai store? karna  untuk menyimpan data baru 

 public function store (Request $request){
   // variabel this untuk menangkap data dari variabel animal dan lalu merequest variabel animal
    $this->animal[] = $request->animal;

   //  return untuk mengembalikan nilai variabel
    return $this->animal;
 }

//  Update untuk mengubah 
 public function update (Request $request, $id){
    //
 }


// Destroy untuk menghapus
 public function destroy (Request $request, $id){
   echo "Mengahapus data hewan id $id";
 }


}