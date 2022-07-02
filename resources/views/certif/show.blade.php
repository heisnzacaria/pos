@extends('layouts.admin')

@section('title', 'Print Formation Certificate')
@section('content-header', 'Formation Certificate')
@section('content-actions')
<a href="/printc" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Print</a>

@endsection

@section('content')


@foreach ($company as $company )
  @foreach($employe as $employe)

<div class="body1">
<div class="container" id="print">

    <div class="certificate-container">
        <div class="certificate">
            <div class="water-mark-overlay"></div>
            <div class="certificate-header">
                <img src="{{ asset('images/logo.png') }}" class="logo" alt="">


            </div>

            <div class="certificate-body">

                <p class="certificate-title"><strong>Fomation En {{$employe->title}}</strong></p>





                <h1 class="h1">Certificat De Fin De Formation</h1>





                <p class="student-name"> {{$employe->full_name}}</p>
                <div class="certificate-content">
                    <div class="about-certificate">
                        <p>
                            Je soussigné(e), Madame/Monsieur {{$company->responsable}}, agissant en qualité de responsable de la société   {{$company->name}} situé à  {{$company->ville}}
                            atteste que
                            Madame/Monsieur  {{$employe->full_name}} né(e) à {{$employe->address}}, portant(e) le CIN : {{$employe->cine}}
                            a suivi avec assiduité et réussite une formation en {{$employe->title}} au sein de notre société du {{$employe->start_date}} au {{$employe->end_date}}
                            pour une durée totale de {{$employe->durer}} mois.



                    </p>
                    </div>
                    <p class="topic-title">
                        Pour faire valoir ce que de droit.
                    </p>
                    <div class="text-center">
                        <div class="row">

                        </div>
                    </div>
                </div>

                <div class="col">
                    {{ $employe->created_at}}
                    <p>à {{$company->ville}} </p>
                </div>
                <div class="certificate-footer text-muted">
                    <p class="topic-description text-muted">
                        <br> Address   :{{$company->address}}
                        <br> téléphone :+ {{$company->phone}}
                        <br>
                       <div class="info"> {{$company->name}} SARL AU. RC  {{$company->rc}} - IF  {{$company->if}} - patent {{$company->patent}} - ICE {{$company->ice}}
                        </div>

                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


@endforeach
@endforeach




<style>


.body1{

    font-family: MSGothic;
}

.certificate-container {
    padding: 50px;
    width: 1024px;
}
.certificate {
    border: 20px solid #0C5280;
    padding: 25px;
    height: 600px;
    position: relative;
}

.certificate:after {
    content: '';
    top: 0px;
    left: 0px;
    bottom: 0px;
    right: 0px;
    position: absolute;

    background-size: 100%;
    z-index: -1;
}

.certificate-header > .logo {
    width: 60px;
    height: 60px;
    text-align: right;
}

.certificate-title {
    text-align: center;

}

.certificate-body {
    text-align: center;

}

h1 {

    font-weight: 400;
    font-size: 48px;
    color: #0C5280;
}

.student-name {
    font-size: 24px;

}

.certificate-content {
    margin: 0 auto;
    width: 750px;
    font-size: 12px;


}

.about-certificate {
    width: 380px;
    margin: 0 auto;
}

.topic-description {

    text-align: left;
    font-size: 10px
}
.info
{
    text-align: center;
    font-size: 10px
}

.col{
text-align: left;
font-size: 9px;
padding: 0%;
}
.h1{

    color: rgb(71, 71, 199);

}
</style>
@endsection
