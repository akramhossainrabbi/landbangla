@include('frontend.common.meta')


@include('frontend.inc.header')

@yield('content')

@include('frontend.inc.footer')
<!-- all js scripts including custom js -->
<!-- scripts -->
@include('frontend.inc.js')
{{--@include('frontend.common.additional_js')--}}
@stack('script')
