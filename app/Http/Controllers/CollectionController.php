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
        4 => 'yellow4.png',
        5 => 'yellow5.png',
        6 => 'green1.png',
        7 => 'green2.png',
        8 => 'green3.png',
        9 => 'green4.png',
        10 => 'green5.png',
        11 => 'brown1.png',
        12 => 'brown2.png',
        13 => 'brown3.png',
        14 => 'brown4.png',
        15 => 'orange1.png',
        16 => 'orange2.png',
        17 => 'orange3.png',
        18 => 'orange4.png',
        19 => 'rainbow1.png',
        20 => 'rainbow2.gif',
        21 => 'blue1.png',
        22 => 'blue2.png',
        23 => 'white1.png',
        24 => 'gold1.png'
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
        $image = $request->query('image');
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

        $filename = null;

        if ($request->has('imageData')) {
            $imageData = $request->input('imageData');
            $image = str_replace('data:image/png;base64,', '', $imageData);
            $image = str_replace(' ', '+', $image);
            $filename = 'img_' . time() . '.png';
            $path = public_path('images/' . $filename);
            file_put_contents($path, base64_decode($image));
        } elseif ($request->has('image')) {
            $filename = basename($request->input('image')); // 既存ファイルのまま使う
        }

        $collection = new Collection();
        $collection->name = $request->name;
        $collection->image = $filename;
        $collection->memo = $request->memo;
        $collection->save();

        return redirect()->route('collections.index');
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

        $collection->name = $request->name;
        $collection->memo = $request->memo;

        if ($request->has('image')) {
            $collection->image = $request->image;
        }

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
