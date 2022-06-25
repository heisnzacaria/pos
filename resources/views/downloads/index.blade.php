@extends('layouts.admin')

@section('title', 'Administrative Documents')
@section('content-header', 'Administrative Documents')
@section('content-actions')

@endsection
@section('css')
<link rel="stylesheet" href="{{ asset('plugins/sweetalert2/sweetalert2.min.css') }}">
@endsection
@section('content')







@endsection
{{-- <p>Full width:</p>
<a href="{{ route('downloadstage') }}" class="btn" style="width:100%"><i class="fa fa-download"></i> Download</a>
</br>
<a href="{{ route('downloadwork') }}" class="btn" style="width:100%"><i class="fa fa-download"></i> Download</a>

<style>
    .btn {
      background-color: DodgerBlue;
      border: none;
      color: white;
      padding: 12px 30px;
      cursor: pointer;
      font-size: 20px;
    }
    
    /* Darker background on mouse-over */
    .btn:hover {
      background-color: RoyalBlue;
    }
    </style> --}}