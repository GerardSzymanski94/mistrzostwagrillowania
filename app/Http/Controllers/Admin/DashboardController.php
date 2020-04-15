<?php

namespace App\Http\Controllers\Admin;

use App\Exports\DailyWinnersExport;
use App\Models\Form;
use App\Models\Register;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;

class DashboardController extends BaseController
{
    public function index()
    {
        return view('admin.index');
    }

    public function registers()
    {

        $q = Input::get('q');
        $b = Input::get('b');
        if ($q != "" || $b != "") {

            $query = Form::query();

            if ($q != "") {
                $query = $query->where('email', 'LIKE', '%' . $q . '%');
            }
            if ($b != "") {
                $query = $query->where('paragon', '=', $b);
            }

            $registers = $query->orderByDesc('created_at')->paginate(50)->setPath('');
            $pagination = $registers->appends(array(
                'q' => Input::get('q'),
                'b' => Input::get('b')
            ));

            if (count($registers) > 0)
                return view('admin.registers', compact('registers', 'q', 'b'))->withQuery($q);
            else {
                return view('admin.registers', compact('registers', 'q', 'b'))->withMessage('No Details found. Try to search again !');
            }
        }
        // return view ( 'admin.registers' )->withMessage ( 'No Details found. Try to search again !' );


        //$registers = Register::where('id', '>', 0)->orderByDesc('created_at')->paginate(20);


        $registers = Form::orderByDesc('created_at')->paginate(50);

        return view('admin.registers', compact('registers', 'date'));

    }

    public function forms()
    {

        $q = Input::get('q');
        $b = Input::get('b');
        if ($q != "" || $b != "") {

            $query = Register::query();

            if ($q != "") {
                $query = $query->where('email', 'LIKE', '%' . $q . '%');
            }
            if ($b != "") {
                $query = $query->where('paragon', '=', $b);
            }

            $registers = $query->orderByDesc('created_at')->paginate(50)->setPath('');
            $pagination = $registers->appends(array(
                'q' => Input::get('q'),
                'b' => Input::get('b')
            ));

            if (count($registers) > 0)
                return view('admin.registers', compact('registers', 'q', 'b'))->withQuery($q);
            else {
                return view('admin.registers', compact('registers', 'q', 'b'))->withMessage('No Details found. Try to search again !');
            }
        }
        // return view ( 'admin.registers' )->withMessage ( 'No Details found. Try to search again !' );


        //$registers = Register::where('id', '>', 0)->orderByDesc('created_at')->paginate(20);


        $registers = Register::orderByDesc('created_at')->paginate(50);

        return view('admin.forms', compact('registers', 'date'));

    }

    public function form(Form $form)
    {
        return view('admin.form', compact('form'));
    }

    public function data(Register $form)
    {
        return view('admin.data', compact('form'));
    }

    public function winner(Register $form)
    {
        $form->status = 1;
        $form->save();
        /*Mail::send('mails.register', [], function ($message) use ($form) {
            $message->to($form->email, $name = null);
            $message->from(env('MAIL_USERNAME'), 'Ferie z Heinz');
            $message->subject('Przyjęcie zgłoszenia do Ferie z Heinz.');
        });*/

        return redirect()->back()->with('save', true);
    }

    public function mailtest()
    {
        Mail::send('mails.register', [], function ($message) {
            $message->to('gerardxlfc@gmail.com', $name = null);
            $message->from(env('MAIL_USERNAME'));
            $message->subject('Grasz o TYsiące!');
        });
        dd('test');
    }

    public function getCsv()
    {
        $winnersDB = Form::all();


        $array = [];

        $i = 1;
        foreach ($winnersDB as $ret) {
            $id = $ret->id;

            $array[] = array($id, Carbon::parse($ret->created_at)->addHour()->format('Y-m-d H:i:s'), $ret->email, $ret->paragon, $ret->description,
                $ret->getProducts());

            $i++;
        }
        $reviews[] = [
            "Id" => "Id",
            "Data zgłoszenia" => "Data zgłoszenia",
            "Email" => "Email",
            "Nr paragonu" => "Nr paragonu",
            "Tekst" => "Tekst",
            "Produkty" => "Produkty"
        ];
        $reviews = array_merge($reviews, $array);


        return Excel::download(new DailyWinnersExport($reviews), 'registers.xlsx');
    }

    public function getWinnersCsv()
    {
        $winnersDB = Register::whereNotNull('name')->get();


        $array = [];

        $i = 1;
        foreach ($winnersDB as $ret) {
            $id = $ret->id;

            $array[] = array($id,
                $ret->name, $ret->surname,
                $ret->postal . ' ' . $ret->city . ' ' . $ret->street, $ret->phone,
                Carbon::parse($ret->created_at)->addHour()->format('Y-m-d H:i:s'), $ret->email, $ret->paragon, $ret->description);

            $i++;
        }
        $reviews[] = [
            "Id" => "Id",
            "Imię" => "Imię",
            "Nazwisko" => "Nazwisko",
            "Adres" => "Adres",
            "Telefon" => "Telefon",
            "Email" => "Email"
        ];
        $reviews = array_merge($reviews, $array);


        return Excel::download(new DailyWinnersExport($reviews), 'registers.xlsx');
    }

}
