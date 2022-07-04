@foreach ($company as $company )
  @foreach($employe as $employe)
  @foreach($signature as $signature)
<div class="body1">
<div class="container" id="print">

    <div class="certificate-container">
        <div class="certificate">
            <div class="water-mark-overlay"></div>
            <div class="certificate-header">
                <img src="{{ public_path('images/logo.png') }}" class="logo" alt="">


            </div>
  <p class="sarl-name"> {{$company->name}}
  <br> Address   :{{$company->address}} {{$company->ville}}
  <br> téléphone :+ {{$company->phone}}
  <br></p>
  <hr>
  <div class="col">
    <br>   {{ $employe->created_at}}
              à {{$company->ville}}
          </div>
            <div class="certificate-body">



                <h1 class="h1">Attestation de travail</h1>



                <div class="certificate-content">
                    <div class="about-certificate">
                        <p>
                            Je soussigné(e), Madame/Monsieur {{$company->responsable}}, agissant en qualité de
                            la société {{$company->name}} ,situé à {{$company->address}} et portont la patent nº {{$company->patent}} ,
                            certifie que Madame/Monsieur {{$employe->full_name}} titulaire de la CIN nº {{$employe->cine}}
                            faisait partie de notre personnels au département {{$employe->depart}} comme {{$employe->title}}
                            du {{$employe->start_date}} au {{$employe->end_date}} pour une durer de {{$employe->durer}} mois.

                    </p>
                    </div>
                    <p class="droit">
                        La présente attestation lui est délivrée à sa demande pour servir et valoir ce que de droit.
                    </p>
                    <div class="sign">
signature
   </div>
                       <div class="sign">
                                <br>:
                                                        <img src="{{ public_path($signature->signature) }}" alt="" height="100">

                                                    </div>

                    </div>




                <div class="certificate-footer text-muted">
                    <p class="topic-description text-muted">
<hr>
                        <div class="info"> {{$company->name}} SARL AU. RC  {{$company->rc}} - IF  {{$company->if}} - patent {{$company->patent}} - ICE {{$company->ice}}

                        </div>

                    </p>
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
@endforeach



<style>
.droit{
    font-size: 20px;
    margin: 20px;
    width: auto;
    height: 25%;

}

.body1{
    background: white;
  width: 21cm;

  display: block;
margin: -9%;
  margin-bottom: 0.5cm;
  font-family: MSGothic


    /* width: 21cm;
  height: 29.7cm;
    font-family: MSGothic;
    size: a4; */
}

.certificate-container {
    padding: 25px;

    width: 760px;
}
.certificate {

    padding: 25px;
    width: 19cm;
    height: 25.7cm;
    position: center;
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

.h1 {

    font-weight: 400;
    font-size: 48px;
    color: #0C5280;
    height: 90px;
}

.sarl-name {
    font-size: 11px;
    padding: 5px;
    width: 160px;

}

.certificate-content {
    margin: 0 auto;
    width: 750px;
    font-size: 12px;


}

.about-certificate {

    margin: auto;
    width: auto;
    font-size: 23px;
   text-align: justify,center;
}

.topic-description {
    height: auto;
    text-align: left;
    font-size: 19px;

}
.info
{

    text-align: center;
    font-size: 10px;
    bottom: 0%;

}

.col{
    width: auto;
    height: 40px;
    text-align: center;

}
.h1{

    color: rgb(71, 71, 199);

}
.sign{
    text-align: center;

    height: 60px;





}
</style>

