<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collections = Collection::all();
        $data = ['collections' => $collections];
        $images = [
        1 => 'yellow1.png',
        2 => 'yellow2.png',
        3 => 'yellow3.png',
        4 => 'green1.png',
        5 => 'green2.png',
        6 => 'green3.png',
        7 => 'green4.png',
        8 => 'green5.png',
        9 => 'brown1.png',
        10 => 'brown2.png',
        11 => 'orange1.png',
        12 => 'orange2.png',
        13 => 'orange3.png',
        14 => 'rainbow1.png',
        15 => 'blue1.png',
        16 => 'blue2.png',
        17 => 'white1.png',
        18 => 'yellow4.png'
        // 必要な分だけ追加
        ];
        return view('collections.index', [
            'collections' => $collections,
            'images' => $images,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $image = $request->input('image');
        return view('collections.create', compact('image'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'memo' => 'required'
        ]);

        $collection = new Collection();
        $collection->name = $request->name;
        $collection->image = $request->image;
        $collection->memo = $request->memo;
        $collection->save();

        return redirect(route('collections.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Collection  $collection
     * @return \Illuminate\Http\Response
     */
    public function show(Collection $collection)
    {
        $data = ['collection' => $collection];
        return view('collections.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Collection  $collection
     * @return \Illuminate\Http\Response
     */
    public function edit(Collection $collection)
    {
        $data = ['collection' => $collection];
        return view('collections.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Collection  $collection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Collection $collection)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'memo' => 'required'
        ]);
        $collection->name = $request->title;
        $collection->memo = $request->body;
        $collection->save();
        return redirect(route('collections.show', $collection));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Collection  $collection
     * @return \Illuminate\Http\Response
     */
    public function destroy(Collection $collection)
    {
        $collection->delete();
        return redirect(route('collections.index'));
    }
}
