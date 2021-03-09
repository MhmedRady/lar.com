@extends("layouts.admin.admin")

@section("title","Edit Main Category")

@section("admin-content")
    ﻿ <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h2 class="content-header-title font-weight-bold">تعديل قسم رئيسي</h2>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">الرئيسية </a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{route('all.admin.MCategories')}}"> الاقسام </a>
                                </li>
                                <li class="breadcrumb-item active">تعديل قسم  {{$getData->name}}
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic form layout section start -->
                <section id="basic-form-layouts">
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="basic-layout-form"> تعديل القسم </h4>
                                    <a class="heading-elements-toggle"><i
                                            class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                @include('admin.alerts.success')
                                @include('admin.alerts.errors')
                                <div class="card-content collapse show">
                                    <div class="card-body">
                            {{-- DEFAULT LANG UPDATE CATEGORY FORM  --}}
                                        <form class="form" action="{{route("setUpdateMCategories",$getData->id)}}" method="POST"
                                              enctype="multipart/form-data">

                                            <div class="form-body">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$getData->id}}">
                                                <h4 class="form-section font-weight-bold "><i class="ft-image"></i> {{__("Messages.MCatImg")}}</h4>
                                                <div class="row">
                                                    <div class="col-md-6 text-center justify-content-center m-auto ">
                                                        <div class="form-group">
                                                            <label for="formFile"> الصوره </label>
                                                            <img src="{{$getData->photo}}" alt="" class="w-100 h-100 img-thumbnail">
                                                            <input type="file" value=""
                                                                   id="formFile"
                                                                   class="form-control mt-2"
                                                                   name="photo">
                                                            @error('photo')
                                                            <span class="text-danger"> {{$message}} </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <h4 class="form-section font-weight-bold "><i class="ft-file-text"></i> {{__("Messages.MCatData")}}</h4>



                                                        {{-- /***************** START FORM DATA ****************/--}}

                                                        <div class="row">

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="name">  اسم الاقسم   <strong><code>{{"بالغة ". __("Messages.{$getData->translation_lang}")}}</code></strong></label>
                                                                    <input type="text" id="name"
                                                                           value="{{$getData->name}}"
                                                                           class="form-control"
                                                                           placeholder="ادخل اسم القسم الجديد  "
                                                                           name="Category[0][name]">
                                                                    @error('Category.0.name')
                                                                    <span class="text-danger"> {{$message}} </span>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group mt-2">
                                                                    <input type="checkbox" name="Category[0][active]"
                                                                           value="1"
                                                                           id="active"
                                                                           class="switchery" data-color="info"
                                                                            @if($getData->active == 1) {{"checked"}} @endif
                                                                    />
                                                                    <label for="active"
                                                                           class="card-title ml-1"> الحالة <strong><code>{{"بالغة ". __("Messages.{$getData->translation_lang}")}}</code></strong></label>
                                                                    @error("Category.0.active")
                                                                    <span class="text-danger"> {{$message}} </span>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6 hidden">
                                                                <div class="form-group">
                                                                    <label for="abbr"> اختصار اللغه </label>
                                                                    <input type="text" value="{{$getData->translation_lang}}" id="abbr"
                                                                           name="Category[0][abbr].">
                                                                    @error("Category.0.abbr")
                                                                    <span class="text-danger"> {{$message}} </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>

                                                        {{-- /***************** END FORM DATA ******************/--}}

                                                {{--</div>--}}

                                            </div>

                                            <div class="form-actions">
                                                <button type="button" class="btn btn-warning mr-1"
                                                        onclick="history.back();">
                                                    <i class="ft-x"></i> تراجع
                                                </button>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="la la-check-square-o"></i> حفظ
                                                </button>
                                            </div>
                                        </form>

                            {{-- OTHER LANGS UPDATE CATEGORY FORM  --}}
                                        <ul class="nav nav-tabs nav-top-border no-hover-bg nav-justified" >
                                              @isset($getData->CategoryTransLang)
                                                @foreach($getData->CategoryTransLang as $LangKey => $Lang)
                                                    <li class="nav-item">
                                                        <a class="nav-link @if($LangKey == 0) {{"active"}} @endif" id="link-tab_{{$Lang->id}}" data-toggle="tab"
                                                           href="#link_{{$Lang->id}}" aria-controls="link_{{$Lang->id}}"
                                                           style="border-top-color:#1E9FF2" aria-expanded="false">{{__("Messages.$Lang->translation_lang")}}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            @endisset
                                        </ul>
                                        <div class="tab-content px-1 pt-1">
                                        @isset($getData->CategoryTransLang)
                                            @foreach($getData->CategoryTransLang as $LangKey => $Lang)
                                            <div class="tab-pane @if($LangKey == 0) {{"active"}} @endif" id="link_{{$Lang->id}}" role="tabpanel" aria-labelledby="link-tab_{{$Lang->id}}" aria-expanded="false">

                                                {{-- /***************** START TRANSLATION FORM DATA ****************/--}}

                                                <form class="form" action="{{route("setUpdateMCategories",$Lang->id)}}" method="POST"
                                                      enctype="multipart/form-data">

                                                    <div class="form-body">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{$Lang->id}}">
                                                        <h4 class="form-section font-weight-bold "><i class="ft-image"></i> {{__("Messages.MCatImg")}}</h4>
                                                        <div class="row">
                                                            <div class="col-md-6 text-center justify-content-center m-auto ">
                                                                <div class="form-group">
                                                                    <label for="formFile"> الصوره </label>
                                                                    <img src="{{$Lang->photo}}" alt="" class="w-100 h-100 img-thumbnail">
                                                                    <input type="file" value=""
                                                                           id="formFile"
                                                                           class="form-control mt-2"
                                                                           name="photo">
                                                                    @error('photo')
                                                                    <span class="text-danger"> {{$message}} </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h4 class="form-section font-weight-bold "><i class="ft-file-text"></i> {{__("Messages.MCatData")}}</h4>

                                                        {{-- /***************** START FORM DATA ****************/--}}

                                                        <div class="row">

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="name">  اسم الاقسم   <strong><code>{{"بالغة ". __("Messages.{$Lang->translation_lang}")}}</code></strong></label>
                                                                    <input type="text" id="name"
                                                                           value="{{$Lang->name}}"
                                                                           class="form-control"
                                                                           placeholder="ادخل اسم القسم الجديد  "
                                                                           name="Category[0][name]">
                                                                    @error('Category.0.name')
                                                                    <span class="text-danger"> {{$message}} </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group mt-2">
                                                                    <input type="checkbox" name="Category[0][active]"
                                                                           value="1"
                                                                           id="active"
                                                                           class="switchery" data-color="info"
                                                                    @if($Lang->active == 1) {{"checked"}} @endif
                                                                    />
                                                                    <label for="active"
                                                                           class="card-title ml-1"> الحالة <strong><code>{{"بالغة ". __("Messages.{$Lang->translation_lang}")}}</code></strong></label>
                                                                    @error("Category.0.active")
                                                                    <span class="text-danger"> {{$message}} </span>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6 hidden">
                                                                <div class="form-group">
                                                                    <label for="abbr"> اختصار اللغه </label>
                                                                    <input type="text" value="{{$Lang->translation_lang}}" id="abbr"
                                                                           name="Category[0][abbr].">
                                                                    @error("Category.0.abbr")
                                                                    <span class="text-danger"> {{$message}} </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>

                                                        {{-- /***************** END FORM DATA ******************/--}}

                                                        {{--</div>--}}

                                                    </div>

                                                    <div class="form-actions">
                                                        <button type="button" class="btn btn-warning mr-1"
                                                                onclick="history.back();">
                                                            <i class="ft-x"></i> تراجع
                                                        </button>
                                                        <button type="submit" class="btn btn-primary">
                                                            <i class="la la-check-square-o"></i> حفظ
                                                        </button>
                                                    </div>
                                                </form>

                                                {{-- /***************** END TRANSLATION FORM DATA ****************/--}}

                                            </div>
                                            @endforeach
                                        @endisset
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic form layout section end -->
            </div>
        </div>
    </div>
@endsection
