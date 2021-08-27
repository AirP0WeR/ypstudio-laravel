<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\SaveInfo;
use App\Http\Requests\SendInfoRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendInfo;

class YPController extends Controller
{
    public function indexFoto(){
        //Перебираем файлы из папки Logo
        $files = Storage::Files('public/images/logo');

        $files = str_replace('public', 'storage', $files);

        // dd($res);

        return view('logo', ['files' => $files]);
    }



    public function sendInfoToDB(SendInfoRequest $req){

        

        $info = new SaveInfo();
        

        $info->name = $req->input('name');
        $info->email = $req->input('email');
        $info->message = $req->input('message');
       
        $info->save();

        // dd($info); 

        // $comment = 'Это сообщение отправлено из формы обратной связи';
        $toEmail = 'mgyp@mail.ru';
        Mail::to($toEmail)->send(new SendInfo($req));



        return redirect()->route('home')->with('success', 'Ваше сообщение успешно отправлено, мы свяжемся с Вами.');

    }


}
