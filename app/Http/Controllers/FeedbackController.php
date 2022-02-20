<?php

namespace App\Http\Controllers;

use App\Http\Requests\Feedback\StoreRequest;

class FeedbackController extends Controller
{
    public function store(StoreRequest $request)
    {
        //TODO отправка данных

        return redirect('/')->with('success', 'Ваше сообщение успешно отправлено');
    }
}
