<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\TadabburResource;
use App\Models\Tadabbur;
use Illuminate\Http\Request;

class TadabburController extends Controller
{
    public function index(Request $request)
    {
        $tadabbur = Tadabbur::query();

        if ($request->query('user_id')) {
            $tadabbur->whereBelongsTo(\Auth::user(), 'createdBy');
        }

        if ($request->query('is_verified')) {
            $tadabbur->where('is_verified', (bool) $request->query('is_verified'));
        }

        if ($request->query('search')) {
            $tadabbur->where('content', 'like', '%'.$request->query('search').'%');
        }

        return TadabburResource::collection($tadabbur->get());
    }

    public function show(Tadabbur $tadabbur)
    {
        return new TadabburResource($tadabbur);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'ayah' => ['required', 'array'],
            'ayah.*' => ['integer', 'exists:ayahs,id'],
            'is_private' => ['required', 'bool'],
            'should_show_name' => ['required', 'bool'],
            'content' => ['required', 'string'],
        ]);

        $tadabbur = Tadabbur::create([
            'is_verified' => false,
            'is_private' => $data['is_private'],
            'should_show_name' => $data['should_show_name'],
            'content' => $data['content'],
            'created_by' => \Auth::id(),
        ]);

        $tadabbur->ayahs()->attach($data['ayah']);

        return new TadabburResource($tadabbur);
    }
}
