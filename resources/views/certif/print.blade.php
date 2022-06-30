

<div class="container" id="print">

    <div class="certificate-container">
        <div class="certificate">
            <div class="water-mark-overlay"></div>
            <div class="certificate-header">
                <img src="{{ public_path('images/logo.png') }}" class="logo" alt="">
            </div>
            <div class="certificate-body">

                <p class="certificate-title"><strong>RENR NCLEX AND CONTINUING EDUCATION  @foreach($company as $company)

                    {{$company->name}}
                    @endforeach  Review Masters</strong></p>





                <h1>Certificate of Completion</h1>

                @foreach($employe as $employe)

                {{$employe->full_name}}
                @endforeach
                <p class="student-name"> </p>
                <div class="certificate-content">
                    <div class="about-certificate">
                        <p>
                    has completed [hours] hours on topic title here online on Date [Date of Completion]
                    </p>
                    </div>
                    <p class="topic-title">
                        The Topic consists of [hours] Continuity hours and includes the following:
                    </p>
                    <div class="text-center">
                        <p class="topic-description text-muted">Contract adminitrator - Types of claim - Claim Strategy - Delay analysis - Thepreliminaries to a claim - The essential elements to a successful claim - Responses - Claim preparation and presentation </p>
                    </div>
                </div>
                <div class="certificate-footer text-muted">
                    <div class="row">
                        <div class="col-md-6">
                            <p>Principal: ______________________</p>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <p>

                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <p>
                                        Endorsed by
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<style>


.container {
    font-family: Roboto;
    transform: rotate(90deg);

.body {
    font-family: Roboto;
}


.certificate-container {
    padding: 50px;
    width: 1024px;
}
.certificate {
    border: 20px solid #0C5280;
    padding: 25px;
    height: 600px;
    position: landscape;
}

.certificate:after {
    content: '';
    top: 0px;
    left: 0px;
    bottom: 0px;
    right: 0px;
    position: absolute;
    /* background-image: url(https://image.ibb.co/ckrVv7/water_mark_logo.png); */
    background-size: 100%;
    z-index: -1;
}

.certificate-header > .logo {
    width: 80px;
    height: 80px;
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
}

.about-certificate {
    width: 380px;
    margin: 0 auto;
}

.topic-description {

    text-align: center;
}





        </style>

