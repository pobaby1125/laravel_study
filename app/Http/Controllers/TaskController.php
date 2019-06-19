<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function home(){
        $arrData = [];
        $arrData['students'] = 1;

        $arrData['user'] = (object)array(
            'hasPaid'   => true,
            'name'      => 'Dennis',
            'amount'    => 1
        );

        $arrReport = array(
            'Mon'  => array('7:30','12:00','14:00','18:00'),
            'Tues' => array('7:30','12:00','14:00','18:00'),
            'Wed'  => array('7:30','12:00','14:00','18:00'),
            'Thur' => array(),
            'Fri'  => array('7:30','12:00','14:00','18:00'),
            'Sat'  => array('7:30','12:00','14:00','18:00'),
            'Sun'  => array('7:30','12:00','14:00','18:00'),
        );

        $arrData['UserAll'] = array(
            array( 'name'=>'u1', 'sex'=>'男', 'age'=>24, 'report'=>$arrReport),
            array( 'name'=>'u2', 'sex'=>'女', 'age'=>20, 'report'=>$arrReport),
            array( 'name'=>'u3', 'sex'=>'男', 'age'=>22, 'report'=>$arrReport)
        );

        return view('task.home', $arrData);
    }

    public function dashboard(){
        return view('dashboard',['pageName'=>'Task.dashboard']);
    }

    public function form(){
        $students = 0;
        return view('form', ['students'=>$students]);
    }


}
