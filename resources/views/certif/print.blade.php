
@foreach ($company as $company )
@foreach($employe as $employe)
@foreach($signature as $signature)
<body>


<div class="container" id="print">
  <div class="certificate-container">
        <div class="certificate">
            <div class="water-mark-overlay"></div>
            <div class="certificate-header">
                <img src="{{ public_path('images/logo.png') }}" class="logo" alt="">

            </div>

            <div class="certificate-body">

                <p class="certificate-title"><strong>Fomation En {{$employe->title}}</strong></p>

                <h1 class="h1">Certificat de Fin de Formation</h1>





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
                        Pour faire valoir ce que de droit. <br> </p>

               siganture    :     <img src="{{ public_path($signature->signature) }}" alt="" height="55" width="auto">  Le  {{ $employe->created_at}}
                   à {{$company->ville}}

                    </p>


                <div class="certificate-footer text-muted">
                    <p class="topic-description text-muted">
                 <center>       <br> Address   :{{$company->address}}
                        <br> téléphone :+ {{$company->phone}}
                        <br></center>

                       <div class="info"> {{$company->name}} SARL AU. RC  {{$company->rc}} - IF  {{$company->if}} - patent {{$company->patent}} - ICE {{$company->ice}}
                        </div>

                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>


@endforeach
@endforeach
@endforeach





<style>


    .container {

        transform: rotate(90deg);

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
            font-family: Segoe Print;
            font-weight: 400;
            font-size: 48px;
            color: #0C5280;
        }

        .student-name {
            font-size: 24px;
            color: red;
        }

        .certificate-content {
            margin: 0 auto;
            width: 750px;
            font-size: 12px;
            font-family: Arial;
  height: 35px;
        }

        .about-certificate {
            width: 380px;
            margin: 0 auto;
        }

        .topic-description {


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


