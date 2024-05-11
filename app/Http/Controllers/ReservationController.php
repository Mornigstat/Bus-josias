<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;

class ReservationController extends Controller

{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view("pages.reservation");
    }


}
