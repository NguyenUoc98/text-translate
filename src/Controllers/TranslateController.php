<?php

namespace Uocnv\TextTranslate\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Config;
use Uocnv\TextTranslate\TextTranslate;

class TranslateController extends Controller
{
    public function getView(Request $request)
    {
        if ($request->has('q') && $request->q != '') {
            $gt = new TextTranslate();
            $q = $request->q;
            $result = $gt->translate($q, config('text-translate.translate_target'));
            return view('text-translate::index', compact('q', 'result'));
        }

        return view('text-translate::index');
    }
}
