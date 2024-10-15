@extends('layouts.web')

@section('content')
    @include('components.web.carousel')
    @include('components.web.about')
    @include('components.web.news')
    {{-- @include('components.web.announcement') --}}
@endsection

@section('footer-scripts')
<script>
    $(document).ready(function(){
        $(".owl-carousel").owlCarousel({
            loop: true,
            mouseDrag: true,
            autoHeight: true,
            margin: 0,
            autoplay: true,
            smartSpeed: 800,
            touchDrag: false,
            items: 1,
            nav: false,
        });
    });
</script>
    
@endsection