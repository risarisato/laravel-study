<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class gameController extends Controller
{
    // おみくじ
    public function omikuji()
    {
        $omikuji = [
            '大吉',
            '中吉',
            '小吉',
            '末吉',
            '凶',
            '大凶',
        ];
        $result = $omikuji[array_rand($omikuji)];
        return view('omikuji', ['result' => $result]);
    }

    // モンティ・ホール問題
    public function montyhall()
    {
        $results = [];
        for ($i = 0; $i < 10; $i++) {
            $options = [true, false, false];
            shuffle($options);

            $selectedIndex = array_rand($options);
            $notSelectedIndexes = array_filter($options, fn($index) => $index !== $selectedIndex, ARRAY_FILTER_USE_KEY);
            $removeIndex = array_search(false, $notSelectedIndexes);
            unset($notSelectedIndexes[$removeIndex]);

            $changedIndex = key($notSelectedIndexes);
            $results[] = $options[$changedIndex];
        }
        $wonCount = count(array_filter($results, fn($result) => $result));
        return view('monty-hall', ['results' => $results, 'wonCount' => $wonCount]);
    }
}