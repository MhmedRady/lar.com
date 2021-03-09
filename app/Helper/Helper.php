<?php

use App\Models\Language;
use Illuminate\Support\Facades\Config;

// GET APP ALL ACTIVE LANG

function GetLanguages(){
   return $lang = Language::active()->allLangS()->get();
}

// GET APP DEFAULT LANG

function getDefaultLang(){
    return Config::get("app.locale");
}

// UPLOAD FILE FUNCTION

function uploadFile($Request ,$file_path )
{
    $requestImg = $Request;
    $postImg = $requestImg -> getClientOriginalExtension();
    $ImgName = time().".".$postImg;
    $requestImg -> move($file_path,$ImgName);
    return $ImgName;
}

function changeFileHTTP($val){
    $photo = substr($val,strrpos($val,"assets"));
    return $photo;
}

/************ MESSAGES ************/

function _returnSuccess($route,$msg){
    return redirect()->route($route)->with(["success"=>$msg]);
}

function _returnError($route,$msg){
    return redirect()->route($route)->with(["error"=>$msg]);
}

function _returnJson($array){
    return response()->json($array);
}
