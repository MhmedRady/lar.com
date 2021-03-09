@extends('layouts.admin.admin')
@section("title","Languages")
@section('admin-content')
{{--    {{$admin Langes Table Page}}--}}
﻿ <div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="content-header-title font-weight-bold"> اللغات </h2>
                    </div>

                </div>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route("admin.dashboard")}}">الرئيسية</a>
                            </li>
                            <li class="breadcrumb-item active"> اللغات
                            </li>
                        </ol>
                    </div>
                </div>

            </div>
            <div class="content-header-left col-md-6 col-12 mb-2">

            </div>
        </div>
        <div class="content-body">
            <!-- DOM - jQuery events table -->
            <section id="dom">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <h4 class="card-title">جميع لغات الموقع </h4>
                                    <a href="{{route("newLang")}}"
                                       style="line-height: 1.5;"
                                       class="btn btn-info btn-sm shadow-lg fs-1 ml-1 bg-white">
                                        <i class="la la-plus"></i>
                                        <strong>اضافة لغة جديدة</strong>
                                    </a>
                                </div>

                                <a class="heading-elements-toggle">
                                    <i class="la la-ellipsis-v font-medium-3"></i>
                                </a>

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
                                <div class="card-body card-dashboard">
                                    <table
                                        class="table display nowrap table-striped table-bordered ">
                                        <thead>
                                        <tr>
                                            <th> الاسم</th>
                                            <th>الاختصار</th>
                                            <th>الإتجاه</th>
                                            <th>الافتراضي</th>
                                            <th>الحالة</th>
                                            <th>الإجراءات</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                @isset($languages)

                                    @foreach($languages as $lang)
                                        <tr>
                                            <td> {{$lang->name}} </td>
                                            <td> {{$lang->abbr}} </td>
                                            <td> {{$lang->direction}} </td>
                                            <td> {{$lang->default}} </td>
                                            <td> {!! $lang->getActive() !!} </td>
                                            <td>
                                                <div class="btn-group" role="group"
                                                     aria-label="Basic example">

                                                    <a href=" {{route("editLang",$lang->id)}} "
                                                       class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">
                                                        تعديل
                                                    </a>
                                                    <a href="{{route("setDeleteLang",$lang->id)}}"
                                                        class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1"
{{--                                                        data-toggle="modal"--}}
{{--                                                        data-target="#rotateInUpRight"--}}
                                                    >
                                                        حذف
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach

                                @endisset

                                    </tbody>
                                </table>
                                    <div class="justify-content-center d-flex">
                                        {!! $languages->links() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection
