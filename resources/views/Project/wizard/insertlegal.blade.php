<div id="step-1" class="content">
    @foreach ($maklons as $m)
    @if($m->mamaklon->berbadan_hukum == 'PT')

    <div class="form-group row">
        <label class="control-label col-md-4">Akta Pendirian</label>
        <div class="col-md-6">
            <input id="birthday" name="akta_pendirian" class="form-control col-md-7 col-xs-12" type="file">
        </div>
    </div>


    <div class="form-group row">
        <label class="control-label col-md-4">Akta penyesuaian </label>
        <div class="col-md-6">
            <input id="birthday" name="akta_penyesuaian" class="form-control col-md-7 col-xs-12" type="file">
        </div>
    </div>


    <div class="form-group row">
        <label class="control-label col-md-4">Akta susunan direksi</label>
        <div class="col-md-6">
            <input id="birthday" name="akta_susunan" class="form-control col-md-7 col-xs-12" type="file">
        </div>
    </div>


    <div class="form-group row">
        <label class="control-label col-md-4">Akta wewenang Direksi</label>
        <div class="col-md-6">
            <input id="birthday" name="akta_wewenang" class="form-control col-md-7 col-xs-12" type="file">
        </div>
    </div>


    <div class="form-group row">
        <label class="control-label col-md-4">SIUP</label>
        <div class="col-md-6">
            <input id="birthday" name="siup" class="form-control col-md-7 col-xs-12" type="file">
        </div>
    </div>


    <div class="form-group row">
        <label class="control-label col-md-4">NIB</label>
        <div class="col-md-6">
            <input id="birthday" name="nib" class="form-control col-md-7 col-xs-12" type="file">
        </div>
    </div>

    <div class="form-group row">
        <label class="control-label col-md-4">TDP</label>
        <div class="col-md-6">
            <input id="birthday" name="tdp" class="form-control col-md-7 col-xs-12" type="file">
        </div>
    </div>
    <div class="form-group row">
        <label class="control-label col-md-4">IUI</label>
        <div class="col-md-6">
            <input id="birthday" name="iui" class="form-control col-md-7 col-xs-12" type="file">
        </div>
    </div>
    <div class="form-group row">
        <label class="control-label col-md-4">NPWP</label>
        <div class="col-md-6">
            <input id="birthday" name="npwp" class="form-control col-md-7 col-xs-12" type="file">
        </div>
    </div>


    <div class="form-group row">
        <label class="control-label col-md-4">Izin domisili</label>
        <div class="col-md-6">
            <input id="birthday" name="izin_domisili" class="form-control col-md-7 col-xs-12" type="file">
        </div>
    </div>

    <div class="form-group row">
        <label class="control-label col-md-4">Izin lingkungan</label>
        <div class="col-md-6">
            <input id="birthday" name="izin_lingkungan" class="form-control col-md-7 col-xs-12" type="file">
        </div>
    </div>


    <div class="form-group row">
        <label class="control-label col-md-4">PSB</label>
        <div class="col-md-6">
            <input id="birthday" name="psb" class="form-control col-md-7 col-xs-12" type="file">
        </div>

        <div class="form-group row">
            <label class="control-label col-md-4">SPPl/AMDAL/UKL/UPL</label>
            <div class="col-md-6">
                <input id="birthday" name="sppl_amdal_ukl_upl" class="form-control col-md-7 col-xs-12" type="file">
            </div>


            <div class="form-group row">
                <label class="control-label col-md-4">SPPKP</label>
                <div class="col-md-6">
                    <input id="birthday" name="sppkp" class="form-control col-md-7 col-xs-12" type="file">
                </div>


                @elseif($m->mamaklon->berbadan_hukum == 'CV')

                <div class="form-group row">
                    <label class="control-label col-md-4">Akta pendirian
                    </label>
                    <div class="col-md-6">
                        <input id="birthday" name="akta_pendirian" class="form-control col-md-7 col-xs-12" type="file">
                    </div>

                    <div class="form-group row">
                        <label class="control-label col-md-4">Akta pengurus
                        </label>
                        <div class="col-md-6">
                            <input id="birthday" name="akta_pengurus" class="form-control col-md-7 col-xs-12"
                                type="file">
                        </div>

                        <div class="form-group row">
                            <label class="control-label col-md-4">SIUP
                            </label>
                            <div class="col-md-6">
                                <input id="birthday" name="siup" class="form-control col-md-7 col-xs-12" type="file">
                            </div>

                            <div class="form-group row">
                                <label class="control-label col-md-4">NIB
                                </label>
                                <div class="col-md-6">
                                    <input id="birthday" name="nib" class="form-control col-md-7 col-xs-12" type="file">
                                </div>

                                <div class="form-group row">
                                    <label class="control-label col-md-4">TDP

                                    </label>
                                    <div class="col-md-6">
                                        <input id="birthday" name="tdp" class="form-control col-md-7 col-xs-12"
                                            type="file">
                                    </div>

                                    <div class="form-group row">
                                        <label class="control-label col-md-4">IUI

                                        </label>
                                        <div class="col-md-6">
                                            <input id="birthday" name="iui" class="form-control col-md-7 col-xs-12"
                                                type="file">
                                        </div>

                                        <div class="form-group row">
                                            <label class="control-label col-md-4">NPWP

                                            </label>
                                            <div class="col-md-6">
                                                <input id="birthday" name="npwp" class="form-control col-md-7 col-xs-12"
                                                    type="file">
                                            </div>

                                            <div class="form-group row">
                                                <label class="control-label col-md-4">IZIN DOMISILI

                                                </label>
                                                <div class="col-md-6">
                                                    <input id="birthday" name="izin_domisili"
                                                        class="form-control col-md-7 col-xs-12" type="file">
                                                </div>

                                                <div class="form-group row">
                                                    <label class="control-label col-md-4">IZIN
                                                        LINGKUNGAN
                                                    </label>
                                                    <div class="col-md-6">
                                                        <input id="birthday" name="izin_lingkungan"
                                                            class="form-control col-md-7 col-xs-12" type="file">
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="control-label col-md-4">PSB

                                                        </label>
                                                        <div class="col-md-6">
                                                            <input id="birthday" name="psb"
                                                                class="form-control col-md-7 col-xs-12" type="file">
                                                        </div>

                                                        @elseif($m->mamaklon->berbadan_hukum == "Perorangan")
                                                        <div class="form-group row">
                                                            <label class="control-label col-md-4">KTP

                                                            </label>
                                                            <div class="col-md-6">
                                                                <input id="birthday" name="ktp"
                                                                    class="form-control col-md-7 col-xs-12"
                                                                    type="file">
                                                            </div>

                                                            <div class="form-group row">
                                                                <label class="control-label col-md-4">NPWP

                                                                </label>
                                                                <div class="col-md-6">
                                                                    <input id="birthday" name="npwp"
                                                                        class="form-control col-md-7 col-xs-12"
                                                                        type="file">
                                                                </div>

                                                                <div class="form-group row">
                                                                    <label class="control-label col-md-4">IUMK

                                                                    </label>
                                                                    <div class="col-md-6">
                                                                        <input id="birthday" name="iumk"
                                                                            class="form-control col-md-7 col-xs-12"
                                                                            type="file">
                                                                    </div>

                                                                    <div class="form-group row">
                                                                        <label class="control-label col-md-4">SPPL

                                                                        </label>
                                                                        <div class="col-md-6">
                                                                            <input id="birthday" name="sppl"
                                                                                class="form-control col-md-7 col-xs-12"
                                                                                type="file">
                                                                        </div>

                                                                        <div class="form-group row">
                                                                            <label class="control-label col-md-4">PSB

                                                                            </label>
                                                                            <div class="col-md-6">
                                                                                <input id="birthday" name="psb"
                                                                                    class="form-control col-md-7 col-xs-12"
                                                                                    type="file">
                                                                            </div>

                                                                            @endif
                                                                            @endforeach

                                                                        </div>
                                                                    </div>

                                                                </div>

                                                            </div>
