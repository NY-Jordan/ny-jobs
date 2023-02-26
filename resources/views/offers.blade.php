@extends('layouts/default')

@section('content')
    <section class="section-hero overlay inner-page bg-image" style="background-image: url({{ asset('dist/images/hero_1.jpg') }});"
        id="home-section">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1 class="text-white font-weight-bold">Offers</h1>
                    <div class="custom-breadcrumbs">
                        <a href="{{ route('home') }}">Home</a> <span class="mx-2 slash">/</span>
                        <span class="text-white"><strong>Offers</strong></span>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="site-section" id="accordion">
        <div class="container">
            @include('components/alertSuccessMessage')
            <div class="row mb-5">
                <div class="col-12 text-center" data-aos="fade">
                    <h2 class="section-title mb-3">Posts your job offer easyly and frequently</h2>
                    <ul style="list-style: none">
                        <li>candidatures directement cibles</li>
                        <li>Recevez toute candidatures directement par mail</li>
                        <li>Vos offre d'emploi en tête des resultat de recherche</li>
                    </ul>
                </div>
            </div>
            <div class="row accordion justify-content-center block__76208">
                <div class="col-lg-6">
                    <div>
                        <h2>Packages</h2>
                        <p>Take your package</p>
                    </div>
                    <div>
                        @foreach ($packages as $package)
                            <div class="row" style="margin-left: 20px; margin-bottom:30px;">
                                <div class="col-6">
                                    <strong>
                                        <h4 style="display: inline">{{ $package->title }}</h4>
                                    </strong>
                                    <br> <small>50 % de reduction</small>
                                    <h4><strong>{{ $package->price }}</strong> Fcfa</h4>
                                </div>
                                <div class="col-6">
                                    <a href="{{ route('initSubscription', $package->id) }}" class="btn btn-primary">Subscribe</a>
                                </div>
                            </div>
                        @endforeach

                    </div>

                </div>
                <div class="col-lg-6 ml-auto">
                    <div>
                        <h2>Subsciptions</h2>
                        <p>Take your subscription</p>
                    </div>
                    <div>
                        @foreach ($subscriptions as $subscription)
                            <div class="row" style="margin-left: 20px; margin-bottom:30px;">
                                <div class="col-8">
                                    <strong>
                                        <h4 style="display: inline">{{ $subscription->title }}</h4>
                                    </strong>
                                    <br> <small>20 % de reduction</small> <br>
                                    <h4 class="d-inline"><strong>{{ $subscription->price }}</strong> Fcfa \ </h4>
                                    <small>mois</small>
                                </div>
                                <div class="col-4">
                                    <a href="{{ route('initSubscription', $subscription->id) }}" class="btn btn-primary">Subscribe</a>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>


            </div>
        </div>
    </section>

    <section class="site-section bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center" data-aos="fade">
                    <h2 class="section-title mb-3">CV Theque</h2>
                    <ul style="list-style: none">
                        <li>Acceder à de miliers de cv professionnel</li>
                        <li>Selectionner vous même vos employer à travers notre cv theque diversifie</li>
                        <li>retrouver n'importe quelle candidature</li>
                    </ul>
                </div>
            </div>
            <div class="text-center">

                @foreach ($s_curriculum as $curriculum)
                    <div class="row" style="margin-bottom: 20px;">
                        <div class="col-8">
                            <strong>
                                <h2>{{ $curriculum->title }}</h2> 
                            </strong>
                            <small>70 % de reduction</small> <br>
                            <h4 class="d-inline text-left"><strong>{{ $curriculum->price }} Fcfa</strong> </h4>
                        </div>
                        <div class="col-4">
                            <a href="{{ route('initSubscription', $curriculum->id) }}" class="btn btn-primary">Subscribe</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
