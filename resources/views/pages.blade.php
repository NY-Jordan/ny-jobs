@extends('layouts/default')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Page Section</h4>
                </div>
                <div class="card-body">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                                type="button" role="tab" aria-controls="home" aria-selected="true">Home</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#about"
                                type="button" role="tab" aria-controls="contact" aria-selected="false">About</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#faq"
                                type="button" role="tab" aria-controls="contact" aria-selected="false">FAQ</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#service"
                                type="button" role="tab" aria-controls="contact" aria-selected="false">Service</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#testimonial"
                                type="button" role="tab" aria-controls="contact"
                                aria-selected="false">Testimonial</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#news"
                                type="button" role="tab" aria-controls="contact" aria-selected="false">News</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#event"
                                type="button" role="tab" aria-controls="contact" aria-selected="false">Event</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact"
                                type="button" role="tab" aria-controls="contact" aria-selected="false">Contact</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#search"
                                type="button" role="tab" aria-controls="contact" aria-selected="false">Search</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#terms"
                                type="button" role="tab" aria-controls="contact" aria-selected="false">Terms</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#privacy"
                                type="button" role="tab" aria-controls="contact" aria-selected="false">Privacy</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#team"
                                type="button" role="tab" aria-controls="contact" aria-selected="false">Team</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                data-bs-target="#research_training" type="button" role="tab" aria-controls="contact"
                                aria-selected="false">Research &
                                Training</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                data-bs-target="#climate_monotoring" type="button" role="tab" aria-controls="contact"
                                aria-selected="false">Climate
                                Monitoring</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                data-bs-target="#climate_change" type="button" role="tab" aria-controls="contact"
                                aria-selected="false">Climate
                                Change</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                data-bs-target="#intro_climate_change" type="button" role="tab" aria-controls="contact"
                                aria-selected="false">Introduction
                                Bulletin</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#intro_bilan"
                                type="button" role="tab" aria-controls="contact" aria-selected="false">Introduction
                                Bilan</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                data-bs-target="#data_management" type="button" role="tab" aria-controls="contact"
                                aria-selected="false">Data Management
                                Remote Sensing & Geospatial</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                data-bs-target="#disaster_risk" type="button" role="tab" aria-controls="contact"
                                aria-selected="false">Disaster Risk
                                Management</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#climate_app"
                                type="button" role="tab" aria-controls="contact" aria-selected="false">Climate
                                Application</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#sidebar"
                                type="button" role="tab" aria-controls="contact" aria-selected="false">Climate
                                Application</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                data-bs-target="#intro_climate_change" type="button" role="tab" aria-controls="contact"
                                aria-selected="false">Introduction to
                                Climate Change</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                data-bs-target="#climate_vulnerability" type="button" role="tab" aria-controls="contact"
                                aria-selected="false">Climate Change
                                Vulnerability and Impacts</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                data-bs-target="#climate_adaptation" type="button" role="tab" aria-controls="contact"
                                aria-selected="false">Climate Change
                                Adaptation Actions</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                data-bs-target="#climate_mitigation" type="button" role="tab" aria-controls="contact"
                                aria-selected="false">Climate Change
                                Mitigation Actions</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#ghgm"
                                type="button" role="tab" aria-controls="contact" aria-selected="false">GHGM</button>
                        </li>
                    </ul>

                    <div class="tab-content" id="myTabContent">

                        <!-- Home Start-->
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="content-wrapper">
                                <!-- Meta Items Start -->
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Meta Items</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="basicInput" class="form-label">Title</label>
                                                        <input type="text" placeholder="ONACC" value="ONACC"
                                                            class="form-control" id="basicInput">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Meta
                                                            Keyword</label>
                                                        <textarea class="form-control" id="metaKeyword"
                                                            rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Meta
                                                            Description</label>
                                                        <textarea class="form-control" id="metaDescription"
                                                            rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <button class="btn btn-primary ">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Meta Items End -->


                                <!-- Welcome Section Start -->
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Welcome Section</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label class="form-label">Title</label>
                                                        <input type="text" placeholder="Title" class="form-control"
                                                            id="basicInput">
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label class="form-label">Subtitle</label>
                                                        <input type="text" placeholder="Subtitle" class="form-control"
                                                            id="basicInput">
                                                    </div>
                                                </div>

                                                <textarea class="tinymce" name="content" data-tinymce="{}" id="mce_0"
                                                    aria-hidden="true" style="display: none;"></textarea>
                                                <div role="application" class="tox tox-tinymce" aria-disabled="false"
                                                    style="visibility: hidden; height: 50vh;">
                                                    <div class="tox-editor-container">
                                                        <div data-alloy-vertical-dir="toptobottom"
                                                            class="tox-editor-header">
                                                            <div role="group" class="tox-toolbar-overlord"
                                                                aria-disabled="false">
                                                                <div role="group" class="tox-toolbar__primary">
                                                                    <div title="history" role="toolbar"
                                                                        data-alloy-tabstop="true" tabindex="-1"
                                                                        class="tox-toolbar__group">
                                                                        <button aria-label="Undo" title="Undo"
                                                                            type="button" tabindex="-1" class="tox-tbtn"
                                                                            aria-disabled="false">
                                                                            <span class="tox-icon tox-tbtn__icon-wrap">
                                                                                <svg width="24" height="24"
                                                                                    focusable="false">
                                                                                    <path
                                                                                        d="M6.4 8H12c3.7 0 6.2 2 6.8 5.1.6 2.7-.4 5.6-2.3 6.8a1 1 0 0 1-1-1.8c1.1-.6 1.8-2.7 1.4-4.6-.5-2.1-2.1-3.5-4.9-3.5H6.4l3.3 3.3a1 1 0 1 1-1.4 1.4l-5-5a1 1 0 0 1 0-1.4l5-5a1 1 0 0 1 1.4 1.4L6.4 8Z"
                                                                                        fill-rule="nonzero">
                                                                                    </path>
                                                                                </svg>
                                                                            </span>
                                                                        </button>
                                                                        <button aria-label="Redo" title="Redo"
                                                                            type="button" tabindex="-1"
                                                                            class="tox-tbtn tox-tbtn--disabled"
                                                                            aria-disabled="true">
                                                                            <span class="tox-icon tox-tbtn__icon-wrap">
                                                                                <svg width="24" height="24"
                                                                                    focusable="false">
                                                                                    <path
                                                                                        d="M17.6 10H12c-2.8 0-4.4 1.4-4.9 3.5-.4 2 .3 4 1.4 4.6a1 1 0 1 1-1 1.8c-2-1.2-2.9-4.1-2.3-6.8.6-3 3-5.1 6.8-5.1h5.6l-3.3-3.3a1 1 0 1 1 1.4-1.4l5 5a1 1 0 0 1 0 1.4l-5 5a1 1 0 0 1-1.4-1.4l3.3-3.3Z"
                                                                                        fill-rule="nonzero">
                                                                                    </path>
                                                                                </svg>
                                                                            </span>
                                                                        </button>
                                                                    </div>
                                                                    <div title="formatting" role="toolbar"
                                                                        data-alloy-tabstop="true" tabindex="-1"
                                                                        class="tox-toolbar__group">
                                                                        <button aria-label="Bold" title="Bold"
                                                                            type="button" tabindex="-1" class="tox-tbtn"
                                                                            aria-disabled="false" aria-pressed="false">
                                                                            <span class="tox-icon tox-tbtn__icon-wrap">
                                                                                <svg width="24" height="24"
                                                                                    focusable="false">
                                                                                    <path
                                                                                        d="M7.8 19c-.3 0-.5 0-.6-.2l-.2-.5V5.7c0-.2 0-.4.2-.5l.6-.2h5c1.5 0 2.7.3 3.5 1 .7.6 1.1 1.4 1.1 2.5a3 3 0 0 1-.6 1.9c-.4.6-1 1-1.6 1.2.4.1.9.3 1.3.6s.8.7 1 1.2c.4.4.5 1 .5 1.6 0 1.3-.4 2.3-1.3 3-.8.7-2.1 1-3.8 1H7.8Zm5-8.3c.6 0 1.2-.1 1.6-.5.4-.3.6-.7.6-1.3 0-1.1-.8-1.7-2.3-1.7H9.3v3.5h3.4Zm.5 6c.7 0 1.3-.1 1.7-.4.4-.4.6-.9.6-1.5s-.2-1-.7-1.4c-.4-.3-1-.4-2-.4H9.4v3.8h4Z"
                                                                                        fill-rule="evenodd">
                                                                                    </path>
                                                                                </svg>
                                                                            </span>
                                                                        </button>
                                                                        <button aria-label="Italic" title="Italic"
                                                                            type="button" tabindex="-1" class="tox-tbtn"
                                                                            aria-disabled="false"
                                                                            aria-pressed="false"><span
                                                                                class="tox-icon tox-tbtn__icon-wrap"><svg
                                                                                    width="24" height="24"
                                                                                    focusable="false">
                                                                                    <path
                                                                                        d="m16.7 4.7-.1.9h-.3c-.6 0-1 0-1.4.3-.3.3-.4.6-.5 1.1l-2.1 9.8v.6c0 .5.4.8 1.4.8h.2l-.2.8H8l.2-.8h.2c1.1 0 1.8-.5 2-1.5l2-9.8.1-.5c0-.6-.4-.8-1.4-.8h-.3l.2-.9h5.8Z"
                                                                                        fill-rule="evenodd"></path>
                                                                                </svg></span></button><button
                                                                            aria-label="Underline" title="Underline"
                                                                            type="button" tabindex="-1" class="tox-tbtn"
                                                                            aria-disabled="false"
                                                                            aria-pressed="false"><span
                                                                                class="tox-icon tox-tbtn__icon-wrap"><svg
                                                                                    width="24" height="24"
                                                                                    focusable="false">
                                                                                    <path
                                                                                        d="M16 5c.6 0 1 .4 1 1v5.5a4 4 0 0 1-.4 1.8l-1 1.4a5.3 5.3 0 0 1-5.5 1 5 5 0 0 1-1.6-1c-.5-.4-.8-.9-1.1-1.4a4 4 0 0 1-.4-1.8V6c0-.6.4-1 1-1s1 .4 1 1v5.5c0 .3 0 .6.2 1l.6.7a3.3 3.3 0 0 0 2.2.8 3.4 3.4 0 0 0 2.2-.8c.3-.2.4-.5.6-.8l.2-.9V6c0-.6.4-1 1-1ZM8 17h8c.6 0 1 .4 1 1s-.4 1-1 1H8a1 1 0 0 1 0-2Z"
                                                                                        fill-rule="evenodd"></path>
                                                                                </svg></span></button><button
                                                                            aria-label="Strikethrough"
                                                                            title="Strikethrough" type="button"
                                                                            tabindex="-1" class="tox-tbtn"
                                                                            aria-disabled="false"
                                                                            aria-pressed="false"><span
                                                                                class="tox-icon tox-tbtn__icon-wrap"><svg
                                                                                    width="24" height="24"
                                                                                    focusable="false">
                                                                                    <g fill-rule="evenodd">
                                                                                        <path
                                                                                            d="M15.6 8.5c-.5-.7-1-1.1-1.3-1.3-.6-.4-1.3-.6-2-.6-2.7 0-2.8 1.7-2.8 2.1 0 1.6 1.8 2 3.2 2.3 4.4.9 4.6 2.8 4.6 3.9 0 1.4-.7 4.1-5 4.1A6.2 6.2 0 0 1 7 16.4l1.5-1.1c.4.6 1.6 2 3.7 2 1.6 0 2.5-.4 3-1.2.4-.8.3-2-.8-2.6-.7-.4-1.6-.7-2.9-1-1-.2-3.9-.8-3.9-3.6C7.6 6 10.3 5 12.4 5c2.9 0 4.2 1.6 4.7 2.4l-1.5 1.1Z">
                                                                                        </path>
                                                                                        <path
                                                                                            d="M5 11h14a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"
                                                                                            fill-rule="nonzero"></path>
                                                                                    </g>
                                                                                </svg></span></button>
                                                                    </div>
                                                                    <div title="alignment" role="toolbar"
                                                                        data-alloy-tabstop="true" tabindex="-1"
                                                                        class="tox-toolbar__group"><button
                                                                            aria-label="Align left" title="Align left"
                                                                            type="button" tabindex="-1" class="tox-tbtn"
                                                                            aria-disabled="false"
                                                                            aria-pressed="false"><span
                                                                                class="tox-icon tox-tbtn__icon-wrap"><svg
                                                                                    width="24" height="24"
                                                                                    focusable="false">
                                                                                    <path
                                                                                        d="M5 5h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 1 1 0-2Zm0 4h8c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 1 1 0-2Zm0 8h8c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 0 1 0-2Zm0-4h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 0 1 0-2Z"
                                                                                        fill-rule="evenodd"></path>
                                                                                </svg></span></button><button
                                                                            aria-label="Align center"
                                                                            title="Align center" type="button"
                                                                            tabindex="-1" class="tox-tbtn"
                                                                            aria-disabled="false"
                                                                            aria-pressed="false"><span
                                                                                class="tox-icon tox-tbtn__icon-wrap"><svg
                                                                                    width="24" height="24"
                                                                                    focusable="false">
                                                                                    <path
                                                                                        d="M5 5h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 1 1 0-2Zm3 4h8c.6 0 1 .4 1 1s-.4 1-1 1H8a1 1 0 1 1 0-2Zm0 8h8c.6 0 1 .4 1 1s-.4 1-1 1H8a1 1 0 0 1 0-2Zm-3-4h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 0 1 0-2Z"
                                                                                        fill-rule="evenodd"></path>
                                                                                </svg></span></button><button
                                                                            aria-label="Align right" title="Align right"
                                                                            type="button" tabindex="-1" class="tox-tbtn"
                                                                            aria-disabled="false"
                                                                            aria-pressed="false"><span
                                                                                class="tox-icon tox-tbtn__icon-wrap"><svg
                                                                                    width="24" height="24"
                                                                                    focusable="false">
                                                                                    <path
                                                                                        d="M5 5h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 1 1 0-2Zm6 4h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 0 1 0-2Zm0 8h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 0 1 0-2Zm-6-4h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 0 1 0-2Z"
                                                                                        fill-rule="evenodd"></path>
                                                                                </svg></span></button><button
                                                                            aria-label="Justify" title="Justify"
                                                                            type="button" tabindex="-1" class="tox-tbtn"
                                                                            aria-disabled="false"
                                                                            aria-pressed="false"><span
                                                                                class="tox-icon tox-tbtn__icon-wrap"><svg
                                                                                    width="24" height="24"
                                                                                    focusable="false">
                                                                                    <path
                                                                                        d="M5 5h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 1 1 0-2Zm0 4h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 1 1 0-2Zm0 4h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 0 1 0-2Zm0 4h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 0 1 0-2Z"
                                                                                        fill-rule="evenodd"></path>
                                                                                </svg></span></button></div>
                                                                    <div title="list" role="toolbar"
                                                                        data-alloy-tabstop="true" tabindex="-1"
                                                                        class="tox-toolbar__group"><button
                                                                            aria-label="Numbered list"
                                                                            title="Numbered list" type="button"
                                                                            tabindex="-1" class="tox-tbtn"
                                                                            aria-disabled="false"
                                                                            aria-pressed="false"><span
                                                                                class="tox-icon tox-tbtn__icon-wrap"><svg
                                                                                    width="24" height="24"
                                                                                    focusable="false">
                                                                                    <path
                                                                                        d="M10 17h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 0 1 0-2Zm0-6h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 0 1 0-2Zm0-6h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 1 1 0-2ZM6 4v3.5c0 .3-.2.5-.5.5a.5.5 0 0 1-.5-.5V5h-.5a.5.5 0 0 1 0-1H6Zm-1 8.8.2.2h1.3c.3 0 .5.2.5.5s-.2.5-.5.5H4.9a1 1 0 0 1-.9-1V13c0-.4.3-.8.6-1l1.2-.4.2-.3a.2.2 0 0 0-.2-.2H4.5a.5.5 0 0 1-.5-.5c0-.3.2-.5.5-.5h1.6c.5 0 .9.4.9 1v.1c0 .4-.3.8-.6 1l-1.2.4-.2.3ZM7 17v2c0 .6-.4 1-1 1H4.5a.5.5 0 0 1 0-1h1.2c.2 0 .3-.1.3-.3 0-.2-.1-.3-.3-.3H4.4a.4.4 0 1 1 0-.8h1.3c.2 0 .3-.1.3-.3 0-.2-.1-.3-.3-.3H4.5a.5.5 0 1 1 0-1H6c.6 0 1 .4 1 1Z"
                                                                                        fill-rule="evenodd"></path>
                                                                                </svg></span></button><button
                                                                            aria-label="Numbered list"
                                                                            title="Numbered list" type="button"
                                                                            tabindex="-1" class="tox-tbtn"
                                                                            aria-disabled="false"
                                                                            aria-pressed="false"><span
                                                                                class="tox-icon tox-tbtn__icon-wrap"><svg
                                                                                    width="24" height="24"
                                                                                    focusable="false">
                                                                                    <path
                                                                                        d="M10 17h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 0 1 0-2Zm0-6h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 0 1 0-2Zm0-6h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 1 1 0-2ZM6 4v3.5c0 .3-.2.5-.5.5a.5.5 0 0 1-.5-.5V5h-.5a.5.5 0 0 1 0-1H6Zm-1 8.8.2.2h1.3c.3 0 .5.2.5.5s-.2.5-.5.5H4.9a1 1 0 0 1-.9-1V13c0-.4.3-.8.6-1l1.2-.4.2-.3a.2.2 0 0 0-.2-.2H4.5a.5.5 0 0 1-.5-.5c0-.3.2-.5.5-.5h1.6c.5 0 .9.4.9 1v.1c0 .4-.3.8-.6 1l-1.2.4-.2.3ZM7 17v2c0 .6-.4 1-1 1H4.5a.5.5 0 0 1 0-1h1.2c.2 0 .3-.1.3-.3 0-.2-.1-.3-.3-.3H4.4a.4.4 0 1 1 0-.8h1.3c.2 0 .3-.1.3-.3 0-.2-.1-.3-.3-.3H4.5a.5.5 0 1 1 0-1H6c.6 0 1 .4 1 1Z"
                                                                                        fill-rule="evenodd"></path>
                                                                                </svg></span></button></div>
                                                                    <div title="link" role="toolbar"
                                                                        data-alloy-tabstop="true" tabindex="-1"
                                                                        class="tox-toolbar__group"><button
                                                                            aria-label="Insert/edit link"
                                                                            title="Insert/edit link" type="button"
                                                                            tabindex="-1" class="tox-tbtn"
                                                                            aria-disabled="false"
                                                                            aria-pressed="false"><span
                                                                                class="tox-icon tox-tbtn__icon-wrap"><svg
                                                                                    width="24" height="24"
                                                                                    focusable="false">
                                                                                    <path
                                                                                        d="M6.2 12.3a1 1 0 0 1 1.4 1.4l-2 2a2 2 0 1 0 2.6 2.8l4.8-4.8a1 1 0 0 0 0-1.4 1 1 0 1 1 1.4-1.3 2.9 2.9 0 0 1 0 4L9.6 20a3.9 3.9 0 0 1-5.5-5.5l2-2Zm11.6-.6a1 1 0 0 1-1.4-1.4l2-2a2 2 0 1 0-2.6-2.8L11 10.3a1 1 0 0 0 0 1.4A1 1 0 1 1 9.6 13a2.9 2.9 0 0 1 0-4L14.4 4a3.9 3.9 0 0 1 5.5 5.5l-2 2Z"
                                                                                        fill-rule="nonzero"></path>
                                                                                </svg></span></button></div>
                                                                </div>
                                                            </div>
                                                            <div class="tox-anchorbar"></div>
                                                        </div>
                                                        <div class="tox-sidebar-wrap">
                                                            <div class="tox-edit-area"><iframe id="mce_0_ifr"
                                                                    frameborder="0" allowtransparency="true"
                                                                    title="Rich Text Area" class="tox-edit-area__iframe"
                                                                    srcdoc="<!DOCTYPE html><html><head><meta http-equiv=&quot;Content-Type&quot; content=&quot;text/html; charset=UTF-8&quot; /></head><body id=&quot;tinymce&quot; class=&quot;mce-content-body &quot; data-id=&quot;mce_0&quot; aria-label=&quot;Rich Text Area. Press ALT-0 for help.&quot;><br></body></html>"></iframe>
                                                            </div>
                                                            <div role="complementary" class="tox-sidebar">
                                                                <div data-alloy-tabstop="true" tabindex="-1"
                                                                    class="tox-sidebar__slider tox-sidebar--sliding-closed"
                                                                    style="width: 0px;">
                                                                    <div class="tox-sidebar__pane-container"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div aria-hidden="true" class="tox-throbber" style="display: none;">
                                                    </div>
                                                </div>

                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label class="form-label">Video </label>
                                                        <textarea class="form-control" id="metaKeyword"
                                                            rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="card-body ">
                                                    <div class="progress mb-2 col-md-10">
                                                        <div class="progress-bar" role="progressbar" style="width: 95%;"
                                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                            Business Management - 95%
                                                        </div>
                                                    </div>
                                                    <div class="progress mb-2 col-md-10">
                                                        <div class="progress-bar bg-success" role="progressbar"
                                                            style="width: 70%" aria-valuenow="25" aria-valuemin="0"
                                                            aria-valuemax="100">Financial Management - 70%</div>
                                                    </div>
                                                    <div class="progress mb-2 col-md-10">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 88%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100">Project Management - 88%</div>
                                                    </div>
                                                    <div class="progress mb-2 col-md-10">
                                                        <div class="progress-bar bg-warning" role="progressbar"
                                                            style="width: 75%" aria-valuenow="75" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="progress mb-2 col-md-10">
                                                        <div class="progress-bar bg-danger" role="progressbar"
                                                            style="width: 100%" aria-valuenow="100" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="col-md-2 mb-3">
                                                        <select class="js-example-basic-single form-select">
                                                            <option></option>
                                                            <option value="show">Show</option>
                                                            <option value="hide">Hide</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-6">
                                                        <button class="btn btn-primary ">Update</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Welcome Section End -->

                                <!-- Welcome Section (Video Background) Start -->

                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Welcome Section (Video Background)</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div>
                                                    <img src="" alt="VideoBG" class="col-4"
                                                        style="width: 100px; height:100px;">
                                                </div>
                                                <div class="mb-7">
                                                    <form action="" enctype="multipart/form-data" method="post"
                                                        class="col-4 row">
                                                        <!-- action pour la video -->
                                                        @csrf
                                                        <div class="form-group col-6">
                                                            <label class="form-label">Video Background</label>
                                                            <input type="file" name="video_bg" class="form-control"
                                                                id="video_bg">
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="col-6">
                                                    <button class="btn btn-primary ">Update</button>
                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                </div>
                                <!-- Welcome Section (Video Background) End -->



                            </div>
                        </div>
                        <!-- Home End -->

                        <!-- About Start -->
                        <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="home-tab">
                            <div class="content-wrapper">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="col-md-10">
                                                <div class="mb-3">
                                                    <label for="basicInput" class="form-label">About Heading</label>
                                                    <input type="text" placeholder="Title" class="form-control"
                                                        id="basicInput">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">

                                                <!-- Editeur de texte -->

                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="basicInput" class="form-label">Title</label>
                                                        <input type="text" placeholder="Title" class="form-control"
                                                            id="basicInput">
                                                    </div>
                                                </div>

                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Meta
                                                            Keyword</label>
                                                        <textarea class="form-control" id="metaKeyword"
                                                            rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Meta
                                                            Description</label>
                                                        <textarea class="form-control" id="metaDescription"
                                                            rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <button class="btn btn-primary ">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- About End -->

                        <!-- FAQ Start -->
                        <div class="tab-pane fade show active" id="faq" role="tabpanel" aria-labelledby="home-tab">
                            <div class="content-wrapper">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="col-md-10">
                                                <div class="mb-3">
                                                    <label for="basicInput" class="form-label">FAQ
                                                        Heading</label>
                                                    <input type="text" placeholder="Title" class="form-control"
                                                        id="basicInput">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="basicInput" class="form-label">Title</label>
                                                        <input type="text" placeholder="Title" class="form-control"
                                                            id="basicInput">
                                                    </div>
                                                </div>

                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Meta
                                                            Keyword</label>
                                                        <textarea class="form-control" id="metaKeyword"
                                                            rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Meta
                                                            Description</label>
                                                        <textarea class="form-control" id="metaDescription"
                                                            rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <button class="btn btn-primary ">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ End -->

                        <!-- Service Start -->
                        <div class="tab-pane fade show active" id="service" role="tabpanel" aria-labelledby="home-tab">
                            <div class="content-wrapper">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="col-md-10">
                                                <div class="mb-3">
                                                    <label for="basicInput" class="form-label">Service
                                                        Heading</label>
                                                    <input type="text" placeholder="Title" class="form-control"
                                                        id="basicInput">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="basicInput" class="form-label">Title</label>
                                                        <input type="text" placeholder="Title" class="form-control"
                                                            id="basicInput">
                                                    </div>
                                                </div>

                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Meta
                                                            Keyword</label>
                                                        <textarea class="form-control" id="metaKeyword"
                                                            rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Meta
                                                            Description</label>
                                                        <textarea class="form-control" id="metaDescription"
                                                            rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <button class="btn btn-primary ">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Service End -->

                        <!-- Testimonial Start -->
                        <div class="tab-pane fade show active" id="testimonial" role="tabpanel"
                            aria-labelledby="home-tab">
                            <div class="content-wrapper">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="col-md-10">
                                                <div class="mb-3">
                                                    <label for="basicInput" class="form-label">Testimonial
                                                        Heading</label>
                                                    <input type="text" placeholder="Title" class="form-control"
                                                        id="basicInput">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="basicInput" class="form-label">Title</label>
                                                        <input type="text" placeholder="Title" class="form-control"
                                                            id="basicInput">
                                                    </div>
                                                </div>

                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Meta
                                                            Keyword</label>
                                                        <textarea class="form-control" id="metaKeyword"
                                                            rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Meta
                                                            Description</label>
                                                        <textarea class="form-control" id="metaDescription"
                                                            rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <button class="btn btn-primary ">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Testimonials End -->


                        <!-- News Start -->
                        <div class="tab-pane fade show active" id="news" role="tabpanel" aria-labelledby="home-tab">
                            <div class="content-wrapper">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="col-md-10">
                                                <div class="mb-3">
                                                    <label for="basicInput" class="form-label">News
                                                        Heading</label>
                                                    <input type="text" placeholder="Title" class="form-control"
                                                        id="basicInput">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="basicInput" class="form-label">Title</label>
                                                        <input type="text" placeholder="Title" class="form-control"
                                                            id="basicInput">
                                                    </div>
                                                </div>

                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Meta
                                                            Keyword</label>
                                                        <textarea class="form-control" id="metaKeyword"
                                                            rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Meta
                                                            Description</label>
                                                        <textarea class="form-control" id="metaDescription"
                                                            rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <button class="btn btn-primary ">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- News End -->

                        <!-- Event Start -->
                        <div class="tab-pane fade show active" id="event" role="tabpanel" aria-labelledby="home-tab">
                            <div class="content-wrapper">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="col-md-10">
                                                <div class="mb-3">
                                                    <label for="basicInput" class="form-label">Event
                                                        Heading</label>
                                                    <input type="text" placeholder="Title" class="form-control"
                                                        id="basicInput">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="basicInput" class="form-label">Title</label>
                                                        <input type="text" placeholder="Title" class="form-control"
                                                            id="basicInput">
                                                    </div>
                                                </div>

                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Meta
                                                            Keyword</label>
                                                        <textarea class="form-control" id="metaKeyword"
                                                            rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Meta
                                                            Description</label>
                                                        <textarea class="form-control" id="metaDescription"
                                                            rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <button class="btn btn-primary ">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Event End -->

                        <!-- Contact Start -->
                        <div class="tab-pane fade show active" id="contact" role="tabpanel" aria-labelledby="home-tab">
                            <div class="content-wrapper">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="col-md-10">
                                                <div class="mb-3">
                                                    <label for="basicInput" class="form-label">Contact
                                                        Heading</label>
                                                    <input type="text" placeholder="Title" class="form-control"
                                                        id="basicInput">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="basicInput" class="form-label">Title</label>
                                                        <input type="text" placeholder="Title" class="form-control"
                                                            id="basicInput">
                                                    </div>
                                                </div>

                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1"
                                                            class="form-label">Contact Address</label>
                                                        <textarea class="form-control" id="metaKeyword"
                                                            rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1"
                                                            class="form-label">Contact Email
                                                            Keyword</label>
                                                        <textarea class="form-control" id="metaKeyword"
                                                            rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1"
                                                            class="form-label">Contact Phone
                                                        </label>
                                                        <textarea class="form-control" id="metaKeyword"
                                                            rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1"
                                                            class="form-label">Contact Map (iframe Code)</label>
                                                        <textarea class="form-control" id="metaKeyword"
                                                            rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Meta
                                                            Keyword</label>
                                                        <textarea class="form-control" id="metaKeyword"
                                                            rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Meta
                                                            Description</label>
                                                        <textarea class="form-control" id="metaDescription"
                                                            rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <button class="btn btn-primary ">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Contact End -->

                        <!-- Search Start -->
                        <div class="tab-pane fade show active" id="search" role="tabpanel" aria-labelledby="home-tab">
                            <div class="content-wrapper">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="col-md-10">
                                                <div class="mb-3">
                                                    <label for="basicInput" class="form-label">Search
                                                        Heading</label>
                                                    <input type="text" placeholder="Title" class="form-control"
                                                        id="basicInput">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="basicInput" class="form-label">Title</label>
                                                        <input type="text" placeholder="Title" class="form-control"
                                                            id="basicInput">
                                                    </div>
                                                </div>

                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Meta
                                                            Keyword</label>
                                                        <textarea class="form-control" id="metaKeyword"
                                                            rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Meta
                                                            Description</label>
                                                        <textarea class="form-control" id="metaDescription"
                                                            rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <button class="btn btn-primary ">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Search End -->

                        <!-- Term Start -->
                        <div class="tab-pane fade show active" id="terms" role="tabpanel" aria-labelledby="home-tab">
                            <div class="content-wrapper">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="col-md-10">
                                                <div class="mb-3">
                                                    <label for="basicInput" class="form-label">Term
                                                        Heading</label>
                                                    <input type="text" placeholder="Title" class="form-control"
                                                        id="basicInput">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="basicInput" class="form-label">Title</label>
                                                        <input type="text" placeholder="Title" class="form-control"
                                                            id="basicInput">
                                                    </div>
                                                </div>

                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Meta
                                                            Keyword</label>
                                                        <textarea class="form-control" id="metaKeyword"
                                                            rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Meta
                                                            Description</label>
                                                        <textarea class="form-control" id="metaDescription"
                                                            rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <button class="btn btn-primary ">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Term End -->

                        <!-- Privacy Start -->
                        <div class="tab-pane fade show active" id="privacy" role="tabpanel" aria-labelledby="home-tab">
                            <div class="content-wrapper">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="col-md-10">
                                                <div class="mb-3">
                                                    <label for="basicInput" class="form-label">Privacy
                                                        Heading</label>
                                                    <input type="text" placeholder="Title" class="form-control"
                                                        id="basicInput">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">

                                                <!-- Editeur de Texte -->

                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="basicInput" class="form-label">Title</label>
                                                        <input type="text" placeholder="Title" class="form-control"
                                                            id="basicInput">
                                                    </div>
                                                </div>

                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Meta
                                                            Keyword</label>
                                                        <textarea class="form-control" id="metaKeyword"
                                                            rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Meta
                                                            Description</label>
                                                        <textarea class="form-control" id="metaDescription"
                                                            rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <button class="btn btn-primary ">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Privacy End -->

                        <!-- Team Start -->
                        <div class="tab-pane fade show active" id="team" role="tabpanel" aria-labelledby="home-tab">
                            <div class="content-wrapper">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="col-md-10">
                                                <div class="mb-3">
                                                    <label for="basicInput" class="form-label">Team
                                                        Heading</label>
                                                    <input type="text" placeholder="Title" class="form-control"
                                                        id="basicInput">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="basicInput" class="form-label">Title</label>
                                                        <input type="text" placeholder="Title" class="form-control"
                                                            id="basicInput">
                                                    </div>
                                                </div>

                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Meta
                                                            Keyword</label>
                                                        <textarea class="form-control" id="metaKeyword"
                                                            rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Meta
                                                            Description</label>
                                                        <textarea class="form-control" id="metaDescription"
                                                            rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <button class="btn btn-primary ">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Team End -->

                        <!-- Research and training Start -->
                        <div class="tab-pane fade show active" id="research_training" role="tabpanel"
                            aria-labelledby="home-tab">
                            <div class="content-wrapper">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="col-md-10">
                                                <div class="mb-3">
                                                    <label for="basicInput" class="form-label">Portfolio
                                                        Heading</label>
                                                    <input type="text" placeholder="Title" class="form-control"
                                                        id="basicInput">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="basicInput" class="form-label">Title</label>
                                                        <input type="text" placeholder="Title" class="form-control"
                                                            id="basicInput">
                                                    </div>
                                                </div>

                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Meta
                                                            Keyword</label>
                                                        <textarea class="form-control" id="metaKeyword"
                                                            rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Meta
                                                            Description</label>
                                                        <textarea class="form-control" id="metaDescription"
                                                            rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <button class="btn btn-primary ">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Research and training End -->

                        <!-- Climate Monotoring Start -->
                        <div class="tab-pane fade show active" id="climate_monotoring" role="tabpanel"
                            aria-labelledby="home-tab">
                            <div class="content-wrapper">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="col-md-10">
                                                <div class="mb-3">
                                                    <label for="basicInput" class="form-label">Climate Monitoring
                                                        Heading</label>
                                                    <input type="text" placeholder="Title" class="form-control"
                                                        id="basicInput">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="basicInput" class="form-label">Title</label>
                                                        <input type="text" placeholder="Title" class="form-control"
                                                            id="basicInput">
                                                    </div>
                                                </div>

                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Meta
                                                            Keyword</label>
                                                        <textarea class="form-control" id="metaKeyword"
                                                            rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Meta
                                                            Description</label>
                                                        <textarea class="form-control" id="metaDescription"
                                                            rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <button class="btn btn-primary ">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Climate Monotoring End -->


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection