@extends('layouts.admin')

@section('title', 'Administrative Documents')
@section('content-header', 'Administrative Documents')
@section('content-actions')

@endsection
@section('css')
<link rel="stylesheet" href="{{ asset('plugins/sweetalert2/sweetalert2.min.css') }}">
@endsection
@section('content')



<table class="table table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Document Name</th>
      <th scope="col" ><center>Description</th>
      <th scope="col">Download</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Internship Certificate</td>
      <td  align="justify" >An internship certificate is usually given to interns who have completed their short-term training program with a recognized organization. An intern receives this document as they’re about to complete their internship tenure.</br>
        This document acts as proof that the intern has completed the full duration of the program and received stipends and other job-related benefits. Receiving this certificate also qualifies the intern for seeking higher-level job opportunities in the industry.  </td>
      <td><a href="{{ route('downloadstage') }}" class="btn" style="width:100%"><i class="fa fa-download"></i> Download</a></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Work Certificate</td>
      <td  align="justify" >A Work Certificate is an official document that contains information about the job position of an employee of the company. Employees can order this certificate from their human resource development team when requesting it. Later, the human resource development team will produce this certificate. To prevent misuse of certificates, usually use an HRM system that can monitor the administration carried out by its employees.</td>
      <td><a href="{{ route('downloadwork') }}" class="btn" style="width:100%"><i class="fa fa-download"></i> Download</a></td>
    </tr>
  
  </tbody>
</table>



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