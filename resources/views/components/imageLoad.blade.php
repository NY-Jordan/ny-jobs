<div class="modal fade show" id="loadcv{{ $key }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">{{ $cv->name }}  <i class="fa-solid fa-download">Dowload</i></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <img src="{{ asset(Storage::url($cv->image_path))  }}"  />
        </div>
    </div>
  </div>