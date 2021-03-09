
@include('admin.includes.head')
<body class="vertical-layout vertical-menu 2-columns  @if(Request::is('admin/users/tickets/reply*')) chat-application @endif menu-expanded fixed-navbar"
      data-open="click" data-menu="vertical-menu" data-col="2-columns">
<!-- fixed-top-->

<!--Start Page Content-->
    @yield('admin-content')
<!--End Page Content-->

<!--Start Footer-->

    @include('admin.includes.footer')

