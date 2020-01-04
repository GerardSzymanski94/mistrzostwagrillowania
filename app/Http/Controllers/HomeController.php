<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return response()->view('user.front');
    }

    public function saveform(Request $request)
    {
        //  $data = $request->validated();
        //$data['paragonimg'] = $request->file('paragonimg')->store('paragons');
        //  $form = Form::create($data);

        $products = implode(',', $request->product);
        Form::create([
            'email' => $request->email,
            'paragon' => $request->bill,
            'description' => $request->description,
            'products' => $products
        ]);


        /*Mail::send('mails.danke', [], function ($message) use ($form) {
            $message->to($form->email, $name = null);
            $message->from(env('MAIL_USERNAME'), 'Trzeci za free leci');
            $message->subject('Przyjęcie zgłoszenia do Trzeci za free leci.');
        });*/

        return redirect()->route('index')->with('formSaved', true);
    }

    public function contact_save(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'body' => 'required',
        ]);


        $messa = $request->all();

//        Mail::send('mails.body', ['messa' => $messa], function ($message) {
//            $message->to('kontakt@grillzheinzem.pl', $name = null);
//            $message->from('kontakt@grillzheinzem.pl', 'CRM NTS');
//            $message->subject('Nowa wiadomość');
//        });
        /*
                Mail::send('mails.body', ['messa' => $messa], function ($message) {
                    $message->to(env('MAIL_USERNAME'), $name = null);
                    $message->from(env('MAIL_USERNAME'), 'CRM Heinz3');
                    $message->subject('Nowa wiadomość');
                });*/

        return redirect()->back()->with('contact', 'true');

    }

    public function confirmFormSave(Request $request, $token)
    {
        $form = Form::where('token', $token);

        $form->name = $request->input('name');
        $form->surname = $request->input('surname');
        $form->city = $request->input('city');
        $form->postal = $request->input('postal');
        $form->street = $request->input('street');

        if ($request->hasFile('paragonimg')) {
            $photo = $request->file('paragonimg')->store('bill/' . $form->id . '/');
            $form->paragonimg = $photo;
        }
    }
}
