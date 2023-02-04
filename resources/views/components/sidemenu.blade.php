<div class="col-lg-3 col-md-12">
    <div class="border p-2 d-inline-block mr-3 rounded">
        <img src="{{ asset(Storage::url(auth()->user()->logo)) }}" alt=""
            style="width: 200px; height: 200px;">

    </div>
    <div style="padding-top: 10px">
        <h4 class="" style="margin-bottom:00px;">
            <strong>{{ auth()->user()->name }}</strong>
        </h4>
        <h5>{{ auth()->user()->email }}</h5>
    </div>
    <hr style="width: 220px; margin-left: 00px;">
    <div>
        <ul style="list-style: none;padding-left:00px;">
            <li>
                <a href="{{ route('settings') }}">profil</a>
            </li>
            <li>
                <a href="{{ route('password') }}">Mot de passe</a>
            </li>
            <li>
                <a href="" style="color: red" data-toggle="modal"
                data-target="#deleteaccount">Delete account</a>
            </li>
        </ul>
    </div>
</div>

