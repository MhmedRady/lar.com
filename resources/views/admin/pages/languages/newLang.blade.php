@extends("layouts.admin.admin")

@section("title","New Language")

@section("admin-content")
    ﻿ <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h2 class="content-header-title font-weight-bold">إضافة لغة جديدة</h2>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">الرئيسية </a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{route('all.admin.langS')}}"> أللغات </a>
                                </li>
                                <li class="breadcrumb-item active">إضافة لغة
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
                                    <h4 class="card-title" id="basic-layout-form"> إضافة لغة </h4>
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
                                        <form class="form" action="{{route("setNewLang")}}" method="POST"
                                              enctype="multipart/form-data">
                                            <div class="form-body">
                                                <h4 class="form-section font-weight-bold "><i class="ft-home"></i> بيانات اللغة</h4>
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="name"> اسم اللغة </label>
                                                            <input type="text" value="" id="name"
                                                                   class="form-control"
                                                                   placeholder="ادخل اسم اللغة  "
                                                                   name="name">
                                                            @error('name')
                                                                <span class="text-danger"> {{$message}} </span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="default"> اسم الافتراضي </label>
                                                            <input type="text" value="" id="default"
                                                                   class="form-control"
                                                                   placeholder="ادخل اسم اللغة الافتراضي "
                                                                   name="default">
                                                            @error('default')
                                                                <span class="text-danger"> {{$message}} </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="abbr"> الاختصار </label>
                                                            <input type="text" value="" id="abbr"
                                                                   class="form-control"
                                                                   placeholder="ادخل اختصار اللغة     "
                                                                   name="abbr">
                                                            @error('abbr')
                                                                 <span class="text-danger"> {{$message}} </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="direction"> الاتجاة </label>
                                                            <select id="direction" name="direction" class="select2 form-control">
                                                                <optgroup label="من فضلك أختر اتجاه اللغة ">
                                                                    <option value="rtl">من اليمين الي اليسار</option>
                                                                    <option value="ltr">من اليسار الي اليمين</option>
                                                                </optgroup>
                                                            </select>
                                                            @error("direction")
                                                                <span class="text-danger"> {{$message}} </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                </div>


                                                <div class="row">




                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group mt-1">
                                                            <input type="checkbox" name="active"
                                                                   value="1"
                                                                   id="active"
                                                                   class="switchery" data-color="info"
                                                                   checked/>
                                                            <label for="active"
                                                                   class="card-title ml-1">الحالة </label>
                                                            @error('active')
                                                            <span class="text-danger"> {{$message}} </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
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
