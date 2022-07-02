@foreach ($company as $company )
  @foreach($employe as $employe)

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
  <div class="col">
    <hr>
    {{ $employe->created_at}}
    <p>à {{$company->ville}} </p>
</div>

            <div class="certificate-body">



                <h1 class="h1">Attestation de travail</h1>



                <div class="certificate-content">
                    <div class="about-certificate">
                        <p>
                            Je soussigné(e), Madame/Monsieur {{$company->responsable}}, agissant en qualité de
                            la société {{$company->name}} ,situé à {{$company->address}} et portont la patent Nᵒ {{$company->patent}} ,
                            certifie que Madame/Monsieur {{$employe->full_name}} titulaire de la CIN Nᵒ {{$employe->cine}}
                            fait partie de notre personnels en departement {{$employe->depart}} comme {{$employe->title}}
                            depuis le {{$employe->start_date}} à çe jour.

                    </p>
                    </div>
                    <p class="droit">
                        La présente attestation lui est délivrée à sa demande pour servir et valoir ce que de droit.
                    </p>
                    <div class="sign">

                            Signiature

                    </div>

                </div>


                <div class="certificate-footer text-muted">
                    <p class="topic-description text-muted">
                        <br> Address   :{{$company->address}}
                        <br> téléphone :+ {{$company->phone}}
                        <br>
                        <hr>
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
.droit{
    font-size: 20px;
    margin: 20px;
    width: 640px;

}

.body1{

    font-family: MSGothic;
    size: a4;
}

.certificate-container {
    padding: 25px;

    width: 760px;
}
.certificate {
    border: 5px solid #0C5280;
    padding: 25px;
    height: 880px;
    width: 740px;
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

h1 {

    font-weight: 400;
    font-size: 48px;
    color: #0C5280;
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

    margin: 20px;
    width: 640px;
    font-size: 23px;
   text-align: justify;
}

.topic-description {
    height: 70px;
    text-align: left;
    font-size: 10px
}
.info
{
    height: 50px;
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
.sign{
    text-align: left;
    height: 100px;



}
</style>
