<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookModel;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('book');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $getBt= request('bt');
        $getBa= request('ba');
        $getDesc= request('bdesc');
        $getDist= request('bdis');
        $getP= request('bp');
      

        echo $getBt;
        echo "<br>";
        echo $getBa;
        echo "<br>";
        echo $getDesc;
        echo "<br>";
        echo $getDist;
        echo "<br>";
        echo $getP;
        echo "<br>";
        

       
        $book=new BookModel();

        $book->bt=$getBt;
        $book->ba=$getBa;
        $book->bdesc=$getDesc;
        $book->bdist=$getDist;
        $book->bp=$getP;
       
       
        $book->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
