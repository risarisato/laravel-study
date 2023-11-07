<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('photos.create');
    }

    // アップロードされたファイルを保存する
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $savedFilePath = $request->file('image')->store('photos', 'public');
        Log::debug($savedFilePath);
        $fileName = pathinfo($savedFilePath, PATHINFO_BASENAME);
        Log::debug($fileName);

        //return to_route('photos.create')->with('success', '保存しました');
        return to_route('photos.show',['photo' => $fileName])->with('success', '保存しました');
    }

    /**
     * Display the specified resource.
     */
    public function show($fileName)
    {
        return view('photos.show', ['photo' => $fileName]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    // 削除処理
    public function destroy($fileName)
    {
        Storage::disk('public')->delete('photos/' . $fileName);
        return to_route('photos.create')->with('success', '削除しました');
    }
    // ダウンロード処理
    public function download($fileName)
    {
        return Storage::disk('public')->download('photos/' . $fileName, '画像ファイル.png');
    }
}
