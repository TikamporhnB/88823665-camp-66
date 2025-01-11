<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class MyController extends Controller
{
    public function showForm()
    {
        return view('multiplication_form');
    }

    public function showTable(Request $req)
    {
        $number = $req->input('myinput'); 

        if (is_numeric($number)) {
            $multiplicationTable = [];
            for ($i = 1; $i <= 12; $i++) {
                $multiplicationTable[] = "{$number} x {$i} = " . ($number * $i);
            }
            return view('multiplication_table', compact('number', 'multiplicationTable'));
        } else {
            return redirect('/mycontroller')->with('error', 'Please enter a valid number.');
        }
    }
}
