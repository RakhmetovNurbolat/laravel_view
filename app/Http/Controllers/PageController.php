<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function about(){
        return view('about');
    }

    public function profile(){
        return view('profile', [
            'username' => 'JohnDoe',
        ]);
    }

    public function date(){
        return view('date');
    }

    public function message(){
        $message = "Hello<br>World";
        return view('message', [
            'message' => $message,
        ]);
    }

    public function text(){
        return view('text');
    }
    
    public function greeting(){
        $isMorning = false;
        return view('greeting', [
            'isMorning' => $isMorning,
        ]);
    }

    public function status(){
        $status = 1;
        return view('status' , [
            'status' => $status,
        ]);
    }
    public function empty(){
        $date = 100;
        return view('empty' , [
            'date' => $date,
        ]);
    }
    public function switch(){
        $category = 3;
        return view('switch' , [
            'category' => $category,
        ]);
    }

    public function numbers(){
        return view('numbers' , [
            'numbers' => $numbers,
        ]);
    }

    public function list(){
        $months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        return view('list' , [
            'months' => $months,
        ]);
    }
    public function items(){
        //$months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        $months = [];
        return view('items' , [
            'months' => $months,
        ]);
    }
    public function break(){
        $months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        return view('break' , [
            'months' => $months,
        ]);
    }
    public function php(){
        return view('php');
    }

    public function class(){
        $isActive= true;
        return view('class', [
            'isActive' => $isActive,
        ]);
    }
    public function style(){
        $color = 'blue';
        return view('style', [
            'color' => $color,
        ]);
    }
    
    //20
    public function checked(){
        $isChecked = true;
        return view('checked', [
            'isChecked' => $isChecked,
        ]);
    }
    public function selected(){
        $months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        return view('selected', [
            'months' => $months,

        ]);
    }
    
    public function disabled(){
        return view('disabled');
    }

}
