<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Register;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index()
    {

        $date = Carbon::now();
        $date->addHour()->addHour();
        if ($date->format('Y-m-d') == "2020-04-25" || $date->format('Y-m-d') == "2020-04-26") {

            return response()->view('user.blank');
        }
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
//            $message->to('kontakt@promocjeheinz.pl', $name = null);
//            $message->from('kontakt@grillzheinzem.pl', 'CRM NTS');
//            $message->subject('Nowa wiadomość');
//        });

        Mail::send('mails.body', ['messa' => $messa], function ($message) {
            $message->to(env('MAIL_USERNAME'), $name = null);
            $message->from(env('MAIL_USERNAME'), 'CRM Heinz3');
            $message->subject('Nowa wiadomość');
        });

        return redirect()->back()->with('contact', 'true');

    }

    public function confirmFormSave(Request $request)
    {
        //$form = Form::where('token', $token);

        $form = new Register();
        $form->name = $request->input('name');
        $form->surname = $request->input('surname');
        $form->city = $request->input('city');
        $form->phone = $request->input('phone');
        $form->email = $request->input('email');
        $form->postal = $request->input('postal');
        $form->status = 1;

        if ($request->has('street_number2')) {
            $form->street = $request->input('street') . " " . $request->input('street_number') . "/" . $request->input('street_number2');
        } else {
            $form->street = $request->input('street') . " " . $request->input('street_number');
        }
        $form->save();
        if ($request->hasFile('paragon')) {
            $photo = $request->file('paragon')->store('/bill/' . $form->id . '/');
            $form->paragonimg = $photo;
        }
        $form->save();
        return redirect()->back()->with('formSaved', true);

    }

    public function confirmFormSave2(Request $request)
    {
        //$form = Form::where('token', $token);

        $form = new Register();
        $form->name = $request->input('name');
        $form->surname = $request->input('surname');
        $form->city = $request->input('city');
        $form->phone = $request->input('phone');
        $form->email = $request->input('email');
        $form->postal = $request->input('postal');
        $form->status = 2;
        if ($request->has('street_number2')) {
            $form->street = $request->input('street') . " " . $request->input('street_number') . "/" . $request->input('street_number2');
        } else {
            $form->street = $request->input('street') . " " . $request->input('street_number');
        }

        if ($request->hasFile('paragon')) {
            $photo = $request->file('paragon')->store('/bill/' . $form->id . '/');
            $form->paragonimg = $photo;
        }

        $form->save();
        return redirect()->back()->with('formSaved', true);
    }

    public function confirmFormSave3(Request $request)
    {
        //$form = Form::where('token', $token);

        $form = new Register();
        $form->name = $request->input('name');
        $form->surname = $request->input('surname');
        //   $form->city = $request->input('city');
        // $form->phone = $request->input('phone');
        $form->email = $request->input('email');
        //  $form->postal = $request->input('postal');
        $form->status = 3;

        if ($request->hasFile('paragon')) {
            $photo = $request->file('paragon')->store('/bill/' . $form->id . '/');
            $form->paragonimg = $photo;
        }

        $form->save();
        return redirect()->back()->with('formSaved', true);
    }

    public function showForm1()
    {
        return view('user.form1');
    }

    public function showForm2()
    {
        return view('user.form2');
    }

    public function showForm3()
    {
        return view('user.form3');
    }
}
