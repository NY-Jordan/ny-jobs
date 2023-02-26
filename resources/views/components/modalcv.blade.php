<div class="modal fade show" id="save_cv" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Save your cv</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('saveCurriculum') }}" method="post"  enctype="multipart/form-data">
                @csrf
                <div class="modal-body">

                    <div class="form-group">
                        <label for="name">name</label>
                        <input type="text" class="form-control" placeholder="Your name" id="name"
                            name="name">
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="profession">Profession</label>
                            <select class="form-control" name="profession" id="profession">
                                @foreach ($profession as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach

                            </select>
                        </div>
                        <div class="form-group col-6">
                            <label for="profession">Exprience</label>
                            <div class="row">
                                <div class="col-6">
                                    <select name="experience" class="form-control" id="">
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="plus de 10">+ de 10 </option>
                                    </select>
                                </div>
                                <div class="col-6" style="padding: 08px;">Year(s)</div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="cv">Your CV</label>
                        <input class="form-control" type="file" accept=".doc, .pdf, .docx" placeholder="Your name" id="cv" name="cv">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>