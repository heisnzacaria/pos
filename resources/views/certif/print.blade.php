
@foreach ($company as $company )
@foreach($employe as $employe)

<div class="container" id="print">
  <div class="certificate-container">
        <div class="certificate">
            <div class="water-mark-overlay"></div>
            <div class="certificate-header">
                <img src="{{ public_path('images/logo.png') }}" class="logo" alt="">

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

                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p>

                                        </p>
                                    </div>

                                </div>
                            </div>
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




@endforeach
@endforeach




    <style>

.container{
transform: rotate(90deg);

}
body {
    font-family: Roboto;
}

.certificate-container {

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
    font-family: Consolas;
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
    font-family: ink free;
}

.certificate-content {
    margin: 0 auto;
    width: 750px;
    font-size: 12px;
    font-family: Arial;

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












{{-- <div class="container">

    <div class="certificate-container">
        <div class="certificate">
            <div class="water-mark-overlay"></div>
            <div class="certificate-header">
                <img src="{{ public_path('images/logo.png') }}" class="logo" alt="">


            </div>
            <div class="certificate-body">

                <p class="certificate-title"><strong>Fomation En {{$employe->title}}</strong></p>

                <h1 class="h1">Certificat De Fin De Formation</h1>

                {{$employe->full_name}}

                <p class="student-name"> </p>
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
                <div class="a">

                                     <p>à {{$company->ville}} </p>
                                   <p> Le {{ $employe->created_at}}</p>
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
@endforeach
@endforeach

<style>


.container {

    transform: rotate(90deg);
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
        font-family: Consolas;
    }

    .certificate-body {
        text-align: center;

    }

    h1 {
        font-family: Segoe Print;
        font-weight: 400;
        font-size: 48px;
        color: #0C5280;
    }

    .student-name {
        font-size: 24px;
        font-family: ink free;
    }

    .certificate-content {
        margin: 0 auto;
        width: 750px;
        font-size: 12px;
        font-family: Arial;

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

    .a{
    text-align: left;
    font-size: 11px;
    padding: 0%;
    }
    .h1{
        font-family: Segoe Print;
        color: rgb(71, 71, 199);

    }






        </style>

 --}}
