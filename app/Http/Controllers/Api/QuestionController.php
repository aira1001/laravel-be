<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\QuestionResource;
use App\Models\Question;
use Carbon\Carbon;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index(Request $request)
    {
        $question = Question::query();
        if ($request->query('user_id')) {
            $question->whereBelongsTo(\Auth::user(), 'createdBy');
        }

        if ($request->query('search')) {
            $question->where('ask', 'like', '%'.$request->query('search').'%')->orWhere('answer', 'like', '%'.$request->query('search').'%');
        }

        return QuestionResource::collection($question->get());
    }

    public function show(Question $question)
    {
        return new QuestionResource($question);
    }

    public function store(Request $request)
    {
        $question = Question::query();
        $data = $request->validate([
            'ask' => ['required', 'string'],
            'ayah_id' => ['required', 'integer'],
        ]);

        if ($question->whereBelongsTo(\Auth::user(), 'createdBy')->whereDate('created_at', Carbon::now()->toDateString())->count() >= 1) {
            return response()->json(['message' => 'pertanyaan melebihi limit']);

        }

        $question = Question::create([
            'ask' => $data['ask'],
            'created_by' => \Auth::id(),
            'ayah_id' => $data['ayah_id'],
        ]);

        return new QuestionResource($question);

    }
}
