<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
class BlogController extends Controller
{

    public function index()
    {
        return Blog::all();
    }


    public function store(Request $request)
    {
        $stored=Blog::created([
            'title'=>$request->title,
            'picture'=>$request->picture,
            'body'=>$request->body

        ]);
        return $stored;
    }

    public function show($id)
    {
      return Blog::where('id',$id)->get();
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
        return Blog::where('id',$id)->update([
            'title'=>$request->title,
            'picture'=>$request->picture,
            'body'=>$request->body


        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Blog::where('id',$id)->delete();
    }
}
