<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Mail\ConsultMail;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{

    public function callback(){
        $data = Order::create(request()->all());
        if ($data){
            return redirect()->back()->with('order_save', 'Спасибо за вашу заявку, мы свяжемся с вами в ближайшее время');
        } else {
            return redirect()->back()->with('order_save', 'Произошла ошибка, попробуйте еще раз');
        }

    }

    public function consult(){
        $data = request()->all();

        Mail::send('mail.consult', ['data' => $data], function ($message){
           $message->to('consult@intelifin.ru', 'SFSolutions')->subject('Нужна консультация');
        });
            return redirect()->back()->with('order_save', 'Спасибо что написали нам, мы свяжемся с вами в ближайшее время');
    }
}
