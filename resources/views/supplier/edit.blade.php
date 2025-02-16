<form id="ajax-form" method="post" class="form" action="{{route('updatesupplier',$id)}}">
@csrf

<!--begin::Scroll-->
    <div class="d-flex flex-column scroll-y px-5 px-lg-10" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">
        <!--begin::Input group-->
        <div class="alert alert-danger print-error-msg" style="display:none">
            <ul></ul>
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="fv-row mb-7">
            <!--begin::Label-->
            <label class="required fw-semibold fs-6 mb-2">Nama</label>
            <!--end::Label-->
            <!--begin::Input-->
            <input type="text" name="nama" required class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Nama" value="{{ old('nama') }}"  />
            <!--end::Input-->
            <div id="errornama" class="print-error-msg"></div>
            @error('nama')
                <div>Mohon maaf, field nama tidak boleh kosong</div>
            @enderror
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="fv-row mb-7">
            <!--begin::Label-->
            <label class="required fw-semibold fs-6 mb-2">Toko</label>
            <!--end::Label-->
            <!--begin::Input-->
            <input type="text" name="toko" required class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Toko" value="{{ old('toko') }}"  />
            <!--end::Input-->
            @error('toko')
                {{ $message }}
            @enderror
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="fv-row mb-7">
            <!--begin::Label-->
            <label class="required fw-semibold fs-6 mb-2">Alamat</label>
            <!--end::Label-->
            <!--begin::Input-->
            <input type="text" name="alamat" required class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Alamat" value="{{ old('alamat') }}"  />
            <!--end::Input-->
            @error('alamat')
                {{ $message }}
            @enderror
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="fv-row mb-7">
            <!--begin::Label-->
            <label class="required fw-semibold fs-6 mb-2">No Telp</label>
            <!--end::Label-->
            <!--begin::Input-->
            <input type="text" name="no_telp" required class="form-control form-control-solid mb-3 mb-lg-0" placeholder="No Telp" value="{{ old('no_telp') }}"  />
            <!--end::Input-->
            @error('no_telp')
                {{ $message }}
            @enderror
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        
        <!--end::Input group-->
    </div>
    <!--end::Scroll-->
    <!--begin::Actions-->
    <div class="text-center pt-10">
        <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Discard</button>
        <button type="submit" class="btn btn-primary">
            <span class="indicator-label">Submit</span>
            <span class="indicator-progress">Please wait... 
            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
        </button>
    </div>

</form>