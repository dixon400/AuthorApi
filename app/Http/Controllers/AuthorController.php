<?php

namespace App\Http\Controllers;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    use ApiResponser;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /*
     * Return the list of authors
     * @return Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /*
     * Create an author
     * @return Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /*
     * Return an author
     * @return Illuminate\Http\Response
     */
    public function show($author)
    {
        //
    }

    /*
     * Update an author
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, $author)
    {
        //
    }

    /*
     * Delete an authors
     * @return Illuminate\Http\Response
     */
    public function destroy($author)
    {
        //
    }
}
