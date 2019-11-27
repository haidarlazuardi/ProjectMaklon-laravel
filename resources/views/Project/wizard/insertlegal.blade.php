<div id="step-1" class="content">
    @foreach ($maklons as $m)
    @if($m->mamaklon->berbadan_hukum == 'PT')

    <div class="form-group row">
        <label class="control-label col-md-4">Akta Pendirian</label>
        <div class="col-md-6">
            <input id="birthday" required name="akta_pendirian" class="form-control col-md-7 col-xs-12" type="file">
        </div>
    </div>


    <div class="form-group row">
        <label class="control-label col-md-4">Akta penyesuaian </label>
        <div class="col-md-6">
            <input id="birthday" required name="akta_penyesuaian" class="form-control col-md-7 col-xs-12" type="file">
        </div>
    </div>


    <div class="form-group row">
        <label class="control-label col-md-4">Akta susunan direksi</label>
        <div class="col-md-6">
            <input id="birthday" required name="akta_susunan_direksi" class="form-control col-md-7 col-xs-12" type="file">
        </div>
    </div>


    <div class="form-group row">
        <label class="control-label col-md-4">Akta wewenang Direksi</label>
        <div class="col-md-6">
            <input id="birthday" required name="akta_wewenang_direksi" class="form-control col-md-7 col-xs-12" type="file">
        </div>
    </div>


    <div class="form-group row">
        <label class="control-label col-md-4">SIUP</label>
        <div class="col-md-6">
            <input id="birthday" required name="siup" class="form-control col-md-7 col-xs-12" type="file">
        </div>
    </div>


    <div class="form-group row">
        <label class="control-label col-md-4">NIB</label>
        <div class="col-md-6">
            <input id="birthday" required name="nib" class="form-control col-md-7 col-xs-12" type="file">
        </div>
    </div>

    <div class="form-group row">
        <label class="control-label col-md-4">TDP</label>
        <div class="col-md-6">
            <input id="birthday" required name="tdp" class="form-control col-md-7 col-xs-12" type="file">
        </div>
    </div>
    <div class="form-group row">
        <label class="control-label col-md-4">IUI</label>
        <div class="col-md-6">
            <input id="birthday" required name="iui" class="form-control col-md-7 col-xs-12" type="file">
        </div>
    </div>
    <div class="form-group row">
        <label class="control-label col-md-4">NPWP</label>
        <div class="col-md-6">
            <input id="birthday" required name="npwp" class="form-control col-md-7 col-xs-12" type="file">
        </div>
    </div>


    <div class="form-group row">
        <label class="control-label col-md-4">Izin domisili</label>
        <div class="col-md-6">
            <input id="birthday" required name="izin_domisili" class="form-control col-md-7 col-xs-12" type="file">
        </div>
    </div>

    <div class="form-group row">
        <label class="control-label col-md-4">Izin lingkungan</label>
        <div class="col-md-6">
            <input id="birthday" required name="izin_lingkungan" class="form-control col-md-7 col-xs-12" type="file">
        </div>
    </div>


    <div class="form-group row">
        <label class="control-label col-md-4">PSB</label>
        <div class="col-md-6">
            <input id="birthday" required name="psb" class="form-control col-md-7 col-xs-12" type="file">
        </div>

        <div class="form-group row">
            <label class="control-label col-md-4">SPPl/AMDAL/UKL/UPL</label>
            <div class="col-md-6">
                <input id="birthday" required name="sppl_amdal_ukl_upl" class="form-control col-md-7 col-xs-12" type="file">
            </div>


            <div class="form-group row">
                <label class="control-label col-md-4">SPPKP</label>
                <div class="col-md-6">
                    <input id="birthday" required name="sppk" class="form-control col-md-7 col-xs-12" type="file">
                </div>


                @elseif($m->mamaklon->berbadan_hukum == 'CV')

                <div class="form-group row">
                    <label class="control-label col-md-4">Akta pendirian
                    </label>
                    <div class="col-md-6">
                        <input id="birthday" required name="akta_pendirian" class="form-control col-md-7 col-xs-12" type="file">
                    </div>

                    <div class="form-group row">
                        <label class="control-label col-md-4">Akta pengurus
                        </label>
                        <div class="col-md-6">
                            <input id="birthday" required name="akta_pengurus" class="form-control col-md-7 col-xs-12"
                                type="file">
                        </div>

                        <div class="form-group row">
                            <label class="control-label col-md-4">SIUP
                            </label>
                            <div class="col-md-6">
                                <input id="birthday" required name="siup" class="form-control col-md-7 col-xs-12" type="file">
                            </div>

                            <div class="form-group row">
                                <label class="control-label col-md-4">NIB
                                </label>
                                <div class="col-md-6">
                                    <input id="birthday" required name="nib" class="form-control col-md-7 col-xs-12" type="file">
                                </div>

                                <div class="form-group row">
                                    <label class="control-label col-md-4">TDP

                                    </label>
                                    <div class="col-md-6">
                                        <input id="birthday" required name="tdp" class="form-control col-md-7 col-xs-12"
                                            type="file">
                                    </div>

                                    <div class="form-group row">
                                        <label class="control-label col-md-4">IUI

                                        </label>
                                        <div class="col-md-6">
                                            <input id="birthday" required name="iui" class="form-control col-md-7 col-xs-12"
                                                type="file">
                                        </div>

                                        <div class="form-group row">
                                            <label class="control-label col-md-4">NPWP

                                            </label>
                                            <div class="col-md-6">
                                                <input id="birthday" required name="npwp" class="form-control col-md-7 col-xs-12"
                                                    type="file">
                                            </div>

                                            <div class="form-group row">
                                                <label class="control-label col-md-4">IZIN DOMISILI

                                                </label>
                                                <div class="col-md-6">
                                                    <input id="birthday" required name="izin_domisili"
                                                        class="form-control col-md-7 col-xs-12" type="file">
                                                </div>

                                                <div class="form-group row">
                                                    <label class="control-label col-md-4">IZIN LINGKUNGAN
                                                    </label>
                                                    <div class="col-md-6">
                                                        <input id="birthday" required name="izin_lingkungan"
                                                            class="form-control col-md-7 col-xs-12" type="file">
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="control-label col-md-4">PSB

                                                        </label>
                                                        <div class="col-md-6">
                                                            <input id="birthday" required name="psb"
                                                                class="form-control col-md-7 col-xs-12" type="file">
                                                        </div>

                                                        @elseif($m->mamaklon->berbadan_hukum == "Perorangan")
                                                        <div class="form-group row">
                                                            <label class="control-label col-md-4">KTP

                                                            </label>
                                                            <div class="col-md-6">
                                                                <input id="birthday" required name="ktp"
                                                                    class="form-control col-md-7 col-xs-12"
                                                                    type="file">
                                                            </div>

                                                            <div class="form-group row">
                                                                <label class="control-label col-md-4">NPWP

                                                                </label>
                                                                <div class="col-md-6">
                                                                    <input id="birthday" required name="npwp"
                                                                        class="form-control col-md-7 col-xs-12"
                                                                        type="file">
                                                                </div>

                                                                <div class="form-group row">
                                                                    <label class="control-label col-md-4">IUMK

                                                                    </label>
                                                                    <div class="col-md-6">
                                                                        <input id="birthday" required name="iumk"
                                                                            class="form-control col-md-7 col-xs-12"
                                                                            type="file">
                                                                    </div>

                                                                    <div class="form-group row">
                                                                        <label class="control-label col-md-4">SPPL

                                                                        </label>
                                                                        <div class="col-md-6">
                                                                            <input id="birthday" required name="sppl_amdal_ukl_upl"
                                                                                class="form-control col-md-7 col-xs-12"
                                                                                type="file">
                                                                        </div>

                                                                        <div class="form-group row">
                                                                            <label class="control-label col-md-4">PSB

                                                                            </label>
                                                                            <div class="col-md-6">
                                                                                <input id="birthday" required name="psb"
                                                                                    class="form-control col-md-7 col-xs-12"
                                                                                    type="file">
                                                                            </div>

                                                                            @endif
                                                                            @endforeach

                                                                        </div>
                                                                    </div>

                                                                </div>

                                                            </div>
