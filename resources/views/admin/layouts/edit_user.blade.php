<div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">

            <div class="modal-body p-0">
                <div class="card border-0 mb-0" style="background-color: #D9EDEE !important;">
                    <div class="card-body px-lg-5 py-lg-5">
                        <center><img src="{{ asset('admin/assets/img/brand/Logo-store.png') }}"
                                style="max-width:15vmin;" alt="..."></center>
                        <div class="text-center text-muted mb-4 mt-3">
                            <strong>Edit Profile</strong>
                        </div>
                        <form role="form" action="{{ url('/admin/profile/Update/' . $user_edit->id) }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group mb-3">
                                <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                    </div>
                                    <input id="gmail" type="text" class="form-control" name="gmail"
                                        value="{{$user_edit->email}}"autofocus>
                                </div>
                            </div>
                            @error('gmail')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <div class="form-group">
                                <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-mobile-button"></i></span>
                                    </div>
                                    <input id="phone" type="text" class="form-control" name="phone"
                                        value="{{$user_edit->phone}}">
                                </div>
                            </div>
                            @error('phone')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary my-4">{{ __('Save') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
