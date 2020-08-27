<?php

namespace App\Http\Controllers;

use App\Content;
use App\Section;
use Illuminate\Http\Request;

class ContentController extends Controller
{

    /**
     * Show the form for editing the specified resource.
     *
     * @param Section $section
     * @return \Illuminate\Http\Response
     */
    public function edit(Section $section)
    {
        $contents = count($section->contents) ? $section->contents : [new Section];
        return view('contents.edit',compact('section','contents'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Section $section
     * @return void
     */
    public function update(Request $request, Section $section)
    {

        $request->validate(['position' => 'required']);
        $result = self::prepare($request->all() , $section->id);
        Content::where('section_id',$section->id)->delete();

        Content::insert($result);
        return back()->withMessage('اطلاعات وارد شده ثبت گردید.');
    }


    public static function prepare($data,$section_id)
    {
        $result =  [];
        foreach ($data as $key => $array){

            if (is_array($array)){

                foreach ($array as $i => $value){
                    $result[$i][$key] = $value;
                    $result[$i]['section_id'] = $section_id;
                }
            }
        }

        return $result;
    }
}
