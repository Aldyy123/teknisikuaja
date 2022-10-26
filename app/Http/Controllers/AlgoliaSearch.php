<?php

namespace App\Http\Controllers;

use App\Models\Biodatas;
use App\Models\Blogs;
use App\Models\Questions;
use Illuminate\Http\Request;

class AlgoliaSearch extends Controller
{
    public function Search(Request $request){
        $query = $request->query('q');

        $technician = Biodatas::search($query)->get();
        $blog = Blogs::search($query)->get();
        $questions = Questions::search($query)->get();

        return [
            'result_technician' => [
                'title' => 'Teknisi',
                'data' => $technician
            ],
            'result_blog' => [
                'title' => 'Blog',
                'data' => $blog
            ],
            'result_questions' => [
                'title' => 'Pertanyaan',
                'data' => $questions
            ]
        ];
    }

    public function SearchTechnician(){
        
    }
}
