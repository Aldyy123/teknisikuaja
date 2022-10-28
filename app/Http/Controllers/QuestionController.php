<?php

namespace App\Http\Controllers;

use App\Models\Questions;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        $qestions = Questions::paginate(5);
        return view('tanya', [
            'questions' => $qestions,
        ]);
    }

    public function detailQuestion($id)
    {
        $question = Questions::find($id);
        return view('detailqs', [
            'question' => $question
        ]);
    }

    public function inputUserQuestion()
    {
        return view('form-tanya');
    }
}
