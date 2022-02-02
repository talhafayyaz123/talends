@extends('main')
@push('stylesheets')

@endpush


@section('header')
@include('includes2.header')
@endsection

@section('slider')
	@yield('homeSlider')
@endsection

@section('main')
@stack('stylesheets')

<main id="wt-main" class="wt-main  wt-haslayout {{ !empty($body_class) ? $body_class : '' }}">

	@yield('content')
</main>
@endsection

@section('footer')
@include('front-end.includes2.footer')
@endsection

@push('scripts')

@stack('scripts')
@endpush
