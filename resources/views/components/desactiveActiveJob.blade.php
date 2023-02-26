<div class="modal fade" id="desactiveJob" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Desactive l'Offre d'emploi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('activeJob', ["id" => $job->id, "action" => "desactive"]) }}" method="post"  enctype="multipart/form-data">
                @csrf
                <div class="modal-body container">
                    <h4 class="text-center">Vous êtes sur de vouloir desactivé cette Offre ?</h4>
                    <div class="form-group row" style="margin-left: 20% ; margin-right: 20%">
                        <div class="col-4" style="text-align: center" >
                            <button class="btn btn-primary" style="background-color: white;color: black;" type="submit">oui</button>
                        </div>
            
                        <div class="col-4"></div>
                        <div class="col-4">
                            <button type="button" class="btn btn-primary btn-arround" style="background-color: white;color: black;">Non, Annule</button>
                        </div>
                    </div>
                </div>
            </form>
            
        </div>
    </div>
</div>