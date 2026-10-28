@extends('layouts.portfolio')

@section('content')
    @include('portfolio.sections.hero')
    @include('portfolio.sections.stack')
    @include('portfolio.sections.showcase')
    @include('portfolio.sections.experience')
    @include('portfolio.sections.process')
    @include('portfolio.sections.works')
    @include('portfolio.sections.about')
    @include('portfolio.sections.cta')
@endsection
