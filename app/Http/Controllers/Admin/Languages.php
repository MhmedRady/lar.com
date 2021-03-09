<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LangRequest;
use App\Models\Language;
use App\Traits\_myTrait;
use Illuminate\Http\Request;

class Languages extends Controller
{
    use _myTrait;

    public function allLang(){
        $languages = Language::select()->paginate(PAGINATION_COUNT);
    return view("admin.pages.languages.index",compact("languages"));
    }

    public function createLang(){
        return view("admin.pages.languages.newLang");
    }

    public function _addNewLang (LangRequest $langRequest){

        try {
            Language::create($langRequest->except(["_token"]));
            return redirect()->route("all.admin.langS")->with(['success'=>'تم اضافة الغه بنجاح']);
        }
        catch (\Exception $e){
            return redirect()->route("all.admin.langS")->with(['error'=>'لم يتم اضافة اللغة اعد المحاوله فيما بعد']);
        }

    }

    public function editLang($id){
        //        localhost/lar.com/admin/admin/editLang
        $LangS = Language::select()->find($id);
        if (!$LangS)
           return redirect()->route("all.admin.langS")->with(["error"=> "البيانات غير صحيحه"]);
        else
           return view("admin.pages.languages.editLang",compact("LangS"));
    }

    public function _updateLang($id,LangRequest $langRequest){
        try {
            $Lang = Language::find($id);
            if (!$Lang)
                return redirect()->route("editLang",$id)->with(["error"=> "البيانات غير صحيحه"]);
            else
                if (!$langRequest->has("active"))
                    $langRequest->request->add(["active"=>0]);
//            return response()->json($langRequest);
            $Lang->update($langRequest->except("_token"));
            return redirect()->route("editLang",$id)->with(["success"=> "تم تعليل اللعه بنجاح"]);

        }catch (\Exception $ex) {
            return redirect()->route("all.admin.langS", $id)->with(['error'=>'لم يتم تعديل اللغة اعد المحاوله فيما بعد']);
        }
    }

    public function _deleteLang($id){
        try {
            $Lang = Language::find($id);
            if (!$Lang)
                return redirect()->route("all.admin.langS")->with(["error"=> "البيانات غير صحيحه"]);
            else
                $Lang->delete();
            return redirect()->route("all.admin.langS")->with(["success"=> "تم حذف اللعه بنجاح"]);

        }catch (\Exception $ex) {
            return redirect()->route("all.admin.langS")->with(['error'=>'لم يتم حذف اللغة اعد المحاوله فيما بعد']);
        }
    }

}

//return response()->json($langRequest);
