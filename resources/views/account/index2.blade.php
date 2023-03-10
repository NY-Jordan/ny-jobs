@extends('layouts/default')

@section('header')
    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">  
@endsection
@section('content')
    <section class="section-hero overlay inner-page bg-image"
        style="background-image: url({{ asset('dist/images/hero_1.jpg') }});" id="home-section">
        <div class="container">
            <div class="row" style="padding-bottom: 00px;">
                <div class="col-md-9 col-lg-7">
                    <div class="d-flex">
                        <div class="border p-2 d-inline-block mr-3 rounded">
                            <img src="{{ asset(Storage::url(auth()->user()->logo)) }}" alt=""
                                style="width: 200px; height: 200px;">

                        </div>
                        <div style="padding-top: 120px;">
                            <h2 class="" style="margin-bottom:00px;color: white;">
                                <strong>{{ auth()->user()->name }}</strong>
                            </h2>
                            <h3 style="color: white;text-align:center">{{ auth()->user()->email }}</h3>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="site-section services-section block__62849" id="next-section">
        <div class="container">
            @include('components/alertSuccessMessage')
            <div class="row mb-20 text-right d-flex" style="align-items: flex-end;padding-left:100%">
                <button class="btn btn-secondary border-width-2 d-none d-lg-inline-block"> 
                    <span class="mr-2 icon-add"></span>Add>
                </button>
            </div>
            <div>
                <h2 style="margin-bottom: 70px"> My Job Offers</h2>
                <div class="row">
                    <div class="col-lg-10 col-md-10">
                        <table class="table">
                            <thead class="table-dark">
                                <th>#</th>
                                <th>Titre</th>
                                <th>Type</th>
                                <th>Status</th>
                                <th>Views</th>
                                <th>Creer le</th>
                                <th>Actions</th>
                            </thead>
                            <tbody>
                                @if (!empty($jobs[0]))
                                    @foreach ($jobs as $key => $job )
                                        <tr>
                                            <td>{{  $key }}</td>
                                            <td>
                                                <a href="{{ route('jobDetails', $job->id) }}" style="color : #7f849b">{{ $job->title }}</a>
                                            </td>
                                            <td style="padding: 10px" class="badge badge-{{ $job->type === "Part Time" ? 'danger' : "success" }} mt-20">
                                                {{ $job->type }}
                                            </td>
                                            <td class="{{ $job->status === 0 ? 'danger' : "success" }}">
                                                {{ (int)$job->status === 0 ? 'Unactive' : "Active" }}
                                            </td>
                                            <td>{{ $job->view }}</td>
                                            <td>{{ $job->created_at->format('M d, Y') }}</td>
                                            <td>
                                                <div class="page-controls-sorting">
                                                    <button class="sorting-btn btn btn-primary dropdown-toggle" type="button"
                                                        data-toggle="dropdown" aria-expanded="false">Actions<i
                                                            class="fa fa-sort" aria-hidden="true"></i></button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="{{ route('editJob', $job->id) }}">Update</a>
                                                        <a class="dropdown-item" id="desactive" href="#descative" data-toggle="modal"
                                                        data-target="#desactiveJob">Desactive</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr> 
                                    @endforeach

                                @else 
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td style="color: red">List is empty...</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="col-lg-2 col-md-2" style="padding-left: 150px;">
                        <div>
                            <h6 style="margin-bottom: 00px">Posts</h6>
                            <div style=" font-size: 100px;">{{ count($jobs) }}</div>
                        </div>
                        <div>
                            <h6 style="margin-bottom: 00px">Views</h6>
                            <div style=" font-size: 100px;">{{ $views }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
{{-- @include('components/desactiveActiveJob')  --}}