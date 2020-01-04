<?php

namespace App\Http\Controllers\Admin;

use App\Models\Form;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

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

            $query = Form::query();

            if ($q != "") {
                $query = $query->where('email', 'LIKE', '%' . $q . '%');
            }
            if ($b != "") {
                $query = $query->where('paragon', '=', $b);
            }

            $registers = $query->whereNotNull('name')->orderByDesc('created_at')->paginate(50)->setPath('');
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


        $registers = Form::whereNotNull('name')->orderByDesc('created_at')->paginate(50);

        return view('admin.forms', compact('registers', 'date'));

    }

    public function form(Form $form)
    {
        return view('admin.form', compact('form'));
    }
    public function data(Form $form)
    {
        return view('admin.data', compact('form'));
    }

    public function winner(Form $form)
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
}
