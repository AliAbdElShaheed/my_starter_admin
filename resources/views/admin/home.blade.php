@extends('layouts.admin.app')

@section('content')

    <div>
        <h2>@lang('site.home')</h2>
    </div>

    <ul class="breadcrumb mt-2">
        <li class="breadcrumb-item">{{ setting('description') }}</li>
        <li class="breadcrumb-item">{{ setting('email') }}</li>
        <li class="breadcrumb-item">{{ setting('keywords') }}</li>
    </ul>

@endsection
