<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TechnicalDocumentsController extends Controller
{
    //
    public function index(){
        return view("Uploads.technicaldocuments");
    }
    public function upload(Request $request)
    {
        $request->validate([
            'date'=>'required',
            'name'=>'required',
            // 'file' => 'required|mimes:pdf,xlx,csv,xls,ppt, pptx, docx,txt, doc|max:2048',
        ]);

        if($request->hasfile("file")){
            foreach($request->file("file") as $fileName){
                $originalfileName = $fileName->getClientOriginalName();
                $explode =explode(".", $originalfileName);
                $ext = end($explode);
                //$extension = $request->$fileName->extension();
               //dd($ext);


        $newfileName =  $request->name."_".$request->category ."_".$request->date."_".rand(1,10000).'.'.$ext;
       // dd($newfileName);

        $moved =  $fileName->move(public_path('uploads'), $newfileName);
        //$file->move(public_path() . '/mytestfile/', $name);
            $inserted = DB::insert('insert into documents (name, date, category,manual,document)
            values (?, ?,?,?,?)', [$request->name , $request->date, $request->category, $request->manual , $newfileName]);

            }
            return back()->with("success", "files uploaded successfully");

        }
        else {
            return back()->with("status", "you have an error");
        }

    }

}
