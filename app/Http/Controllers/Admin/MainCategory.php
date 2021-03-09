<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MainCategory_Request;
use Illuminate\Http\Request;

use App\Models\MainCategory as MainCatModel;
use Illuminate\Support\Facades\DB;
use function Sodium\add;

class MainCategory extends Controller
{

    /******************  CONST ASSETS IMAGES *****************/

    const _PATH = "assets/images/MainCategory";

    public function getAll()
    {
        $defLang = getDefaultLang();
        $MainCategory = MainCatModel::where("translation_lang", 'like', $defLang)->mainSelect()->get();
        return view("admin.pages.mainCategories.index", compact("MainCategory"));
    }

    public function createNew()
    {
        return view("admin.pages.mainCategories.addNew");
    }

    public function _addNew(MainCategory_Request $request)
    {
//        return response()->json($request);

        try {
            $photo = null;
            if ($request->has('photo')) {
                $img = uploadFile($request->photo, self::_PATH);
                $photo = self::_PATH . "/" . $img;
            }

            $MainCategory = collect($request->Category);

            $FilterCategory = $MainCategory->filter(function ($val,$key){
                return $val['abbr'] == getDefaultLang();
            });

           $defCatArray = array_values($FilterCategory->all()) [0];
        if (!$defCatArray['active'])
            $defCatArray['active']=0;

        DB::beginTransaction();

        $newCatID = MainCatModel::insertGetId([
                "photo" => $photo,
                "name" => $defCatArray['name'],
                "translation_lang" => $defCatArray['abbr'],
                "slug" => $defCatArray['name'],
                "active" => $defCatArray['active'],
                "created_at"=>now()
            ]);

        $FilterCategory = $MainCategory->filter(function ($val,$key){
            return $val['abbr'] != getDefaultLang();
        });

        if (isset($FilterCategory) && $FilterCategory ->count()){

            foreach ($FilterCategory as $category){

               $Category_arr [] = [
                    "photo" => $photo,
                    "name" => $category['name'],
                    "translation_of" =>$newCatID,
                    "translation_lang" => $category['abbr'],
                    "slug" => $category['name'],
                    "active" => $category['active'],
                   "created_at"=>now()
               ];
            }
            MainCatModel::insert($Category_arr);
        }
        DB::commit();
        return _returnSuccess("newMCategories", "لقد تم اضافة القسم الجديد بنجاح");

        } catch (\Exception $ex){
            DB::rollBack();
            return _returnError("newMCategories", "لقد حدث خطأ برجاء المحاولة فيما بعد ..!");
        }
    }

    public function editData($id){

        try {
            $getData = MainCatModel::find($id);
            if (!$getData)
                return redirect()->route("all.admin.MCategories")->
                with(["error"=>__("Messages.notFount")]);
            else
                $getData = MainCatModel::with('CategoryTransLang')->mainSelect()->find($id);
//                return $getData->CategoryTransLang;
            return view("admin.pages.mainCategories.editPage",compact("getData"));
        }catch (\Exception $ex){
            return redirect()->route("all.admin.MCategories")->
            with(["error"=>__("Messages.editError")]);
        }

    }

    public function _setUpdate($id,MainCategory_Request $request){
        try {
            $getData = MainCatModel::find($id);
            if (!$getData)
                return redirect()->route("all.admin.MCategories")
                    ->with(["error"=>__("Messages.notFount")]);
            ###########################################################

            $photo = $getData->photo;

            if ($request->has("photo")){
                $photo = self::_PATH . "/" . uploadFile($request->photo,self::_PATH);
            }else{
                $photo = changeFileHTTP($photo);
            }

            if (!$request->has('Category.0.active'))
                $request->request->add(["active"=>0]);
            else
                $request->request->add(["active"=>1]);

            $CatVal = array_values($request->Category)[0];

            ####################### DB UPDATE DATA #####################

            DB::beginTransaction();
            MainCatModel::where('id',$id)->update([
                'name'=>$CatVal['name'],
                'translation_lang'=>$CatVal['abbr'],
                'photo'=>$photo,
                'active'=>$request->active,
                'updated_at'=>now()
            ]);
            DB::commit();

            ###########################################################

            return redirect()->route("all.admin.MCategories")->with(["success"=>__("Messages.editDone")]);
        }catch (\Exception $ex){
            return $ex;
            DB::rollBack();
            return redirect()->route("editMCategories",$id)->with(["error"=>__("Messages.editError")]);
        }
    }

}
