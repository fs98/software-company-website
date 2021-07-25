<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;  
use App\Http\Requests\QuestionRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\QuestionMail;
use App\Mail\QuestionMailCustomer;
use Illuminate\Support\Facades\App;

class QuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(QuestionRequest $request)
    { 
        $question = new Question; 
        $question->create($request->all());

        // Translate success message
        if (App::isLocale('ba')) {
          $messageHeader = 'Gotovo';
          $message = 'Pitanje poslano. Uskoro ćemo Vas kontaktirati!';
          $mailSubject = 'Dobili smo Vaše pitanje!';
          $mailGreeting = 'Zdravo';
          $mailFirstLine = 'Dobili smo Vašu poruku i uskoro ćemo Vas kontaktirati.';
          $mailSecondLine = 'Posjetite našu stranicu';
          $mailThirdLine = 'Ovaj mejl je automatski generisan stoga Vas molimo da ne odgovarate.';
          $mailThanks = 'Hvala';
        } elseif (App::isLocale('de')) {
          $messageHeader = 'Erfolg';
          $message = 'Ihre Frage wurde gesendet. Wir werden Sie bald kontaktieren!';
          $mailSubject = 'Wir haben Ihre Frage!';
          $mailGreeting = 'Hallo,';
          $mailFirstLine = 'Wir haben Ihre Nachricht erhalten und werden uns in Kürze mit Ihnen in Verbindung setzen.';
          $mailSecondLine = 'Besuchen Sie unsere Seite';
          $mailThirdLine = 'Diese E-Mail wird automatisch generiert, bitte antworten Sie nicht.';
          $mailThanks = 'Vielen Dank';
        } else {
          $messageHeader = 'Done';
          $message = 'Your question has been sent. We will contact you soon!';
          $mailSubject = 'We have received your question!';
          $mailGreeting = 'Hello,';
          $mailFirstLine = 'We got your message and will contact you soon.';
          $mailSecondLine = 'Visit our website';
          $mailThirdLine = 'This is an automated response so please do not reply this email';
          $mailThanks = 'Thank you';
          
        }

        Alert::success($messageHeader, $message);
        // First Fill Email Info in app/Mail/QuestionMail.php and .env file, then uncomment the following two lines. First one for sending email to company, and second one for sending email to user. 


        // Mail::send(new QuestionMail($request->name, $request->email, $request->phone, $request->question));
        // Mail::send(new QuestionMailCustomer($request->name, $request->email, $mailSubject, $mailGreeting, $mailFirstLine, $mailSecondLine, $mailThirdLine, $mailThanks));
        return redirect()->route('public.home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        //
    }
}
