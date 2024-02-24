<?php

namespace App\Http\Controllers;

use \App\Models\Student;


use Illuminate\Http\Request;

class studcontrol extends Controller
{
    //


    function welcome(){
        return view('welcome');
        }




    function index (){
       $students= Student::all();
       return view('showstu',['peo'=> $students]);
    }



    
    function details ($id){
        $filters= Student::find($id);
      return view('details',['data'=> $filters]);
        
     }
 

     
    function create(){
     return view('form');
        }


        function store(){
   
           $student= new Student;
           $student->name =request()->input('name');
           $student->id =request()->input('id');
           $student->Email =request()->input('email');
           $student->grade =request()->input('grade');
           $student->save();
           return redirect('/data');

            }


            function destroy($id){
                $target= Student::find($id);
                $target->delete();
                return redirect('/data');
            }


    

  private  $student=[
        ['id'=>1,'name'=>'mohamed','img'=>'download (1).png'],
        ['id'=>2,'name'=>'Amr','img'=>'download (2).png'],
        ['id'=>3,'name'=>'Ali','img'=>'download.png'],
        ['id'=>4,'name'=>'hala','img'=>'download.png'],

    ];

    
 function ted(){
    return view('iti',['stds'=>$this->student]);
    }


    
    /* web */
    function moh1 () {
        $student=[
            ['id'=>1,'name'=>'mohamed'],
            ['id'=>2,'name'=>'Amr'],
            ['id'=>3,'name'=>'Ali'],
            ['id'=>4,'name'=>'hala'],
    
        ];
        return $student;
        
    }


    function moh2 ($id) {
        $student=[
            ['id'=>1,'name'=>'mohamed'],
            ['id'=>2,'name'=>'Amr'],
            ['id'=>3,'name'=>'Ali'],
            ['id'=>4,'name'=>'hala'],
    
        ];
    
        foreach($student as $stu){
            if($stu['id'] == $id ){
                return $stu;
            }
           
        }
        
    }
}