<?php

namespace App\Http\Controllers;

use App\FeedbackForm\FeedbackFormFactory;
use App\Http\Requests\Feedback\StoreRequest;

class FeedbackController extends Controller
{
    public function store(StoreRequest $request)
    {
        $feedbackForm = FeedbackFormFactory::build(env('FEEDBACK_FORM_CONNECTOR'));
        $feedbackForm->send($request->validated());

        return redirect('/')->with('success', 'Ваше сообщение успешно отправлено');
    }
}
