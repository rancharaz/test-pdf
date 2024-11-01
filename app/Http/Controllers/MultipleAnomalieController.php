<?php

namespace App\Http\Controllers;
use App\Models\Anomalies;
use Illuminate\Http\Request;

class MultipleAnomalieController extends Controller
{
    public function index()
    {
        // Retrieve all books from the database
        $books = Anomalies::all();
        return view('anomalies', compact('books'));
    }
}
