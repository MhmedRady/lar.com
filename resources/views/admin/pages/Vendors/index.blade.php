@extends('layouts.admin.admin')
@section("title","Vendors")
@section('admin-content')
{{--    {{$admin Langes Table Page}}--}}
﻿ <div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="content-header-title font-weight-bold"> التجار </h2>
                    </div>

                </div>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route("admin.dashboard")}}">الرئيسية</a>
                            </li>
                            <li class="breadcrumb-item active"> كل التجار
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
                                    <h4 class="card-title">جميع التجار </h4>
                                    <a href="{{route("newVendor")}}"
                                       style="line-height: 1.5;"
                                       class="btn btn-info btn-sm shadow-lg fs-1 ml-1 bg-white">
                                        <i class="la la-plus"></i>
                                        <strong>اضافة تاجر جديد</strong>
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
                                        class="table display nowrap table-striped table-bordered scroll-horizontal">
                                        <thead>
                                        <tr>
                                            <th> الاسم</th>
                                            <th>لغة الترجمة</th>
                                            <th>الصوره</th>
                                            <th>الحالة</th>
                                            <th>الإجراءات</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                @isset($Vendor)

                                    @foreach($Vendor as $cat)

                                        <tr>
                                            <td> {{$cat->name}} </td>
                                            <td> {{$cat->translation_lang}} </td>
                                            <td><img class="img-thumbnail width-100 shadow" src="{{$cat->photo}}" alt="{{$cat->name}} image"> </td>
                                            <td> {!! $cat->getActive() !!} </td>
                                            <td>
                                                <div class="btn-group" role="group"
                                                     aria-label="Basic example">

                                                    <a href=" {{route("editVendor",$cat->id)}} "
                                                       class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">
                                                        تعديل
                                                    </a>
                                                    <a href="{{route("setDeleteVendor",$cat->id)}}"
                                                        class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1"
                                                        data-toggle="modal"
                                                        data-target="#rotateInUpRight">
                                                        حذف
                                                    </a>
                                                    <a href="{{route("setDeleteVendor",$cat->id)}}"
                                                        class="btn btn-outline-warning btn-min-width btn-sm box-shadow-3 mr-1 mb-1"
                                                        data-toggle="modal"
                                                        data-target="#rotateInUpRight">

                                                        {{$cat->active == 0 ? "الغاء التفعيل" : "تفعيل"}}
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach

                                @endisset

                                    </tbody>
                                </table>
                                    <div class="justify-content-center d-flex">
{{--                                        {!! $Vendor->links() !!}--}}
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
