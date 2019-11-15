

                        <div id="step-1" class="content">
                            {{-- <h2>{{ $m }}</h2> --}}
                            @foreach ($maklons as $m)
                            @if($m->mamaklon->berbadan_hukum == 'PT')

                            <div class="form-group row">
                                <label class="control-label col-md-4">Akta Pendirian</label>
                                <div class="col-md-6">
                                    <input id="birthday" name="akta_pendirian" class="form-control col-md-7 col-xs-12"
                                type="file"  value="{{$legalitasz->akta_pendirian }}">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="control-label col-md-4">Akta penyesuaian </label>
                                <div class="col-md-6">
                                    <input id="birthday" name="akta_penyesuaian" class="form-control col-md-7 col-xs-12"
                                        type="file" value="{{$legalitasz->akta_penyesuaian }}">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="control-label col-md-4">Akta susunan direksi</label>
                                <div class="col-md-6">
                                    <input id="birthday" name="akta_susunan" class="form-control col-md-7 col-xs-12"
                                        type="file" value="{{$legalitasz->akta_susunan_direksi }}">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="control-label col-md-4">Akta wewenang Direksi</label>
                                <div class="col-md-6">
                                    <input id="birthday" name="akta_wewenang" class="form-control col-md-7 col-xs-12"
                                        type="file" value="{{$legalitasz->akta_wewenang_direksi }}">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="control-label col-md-4">SIUP</label>
                                <div class="col-md-6">
                                    <input id="birthday" name="siup" class="form-control col-md-7 col-xs-12"
                                        type="file" value="{{$legalitasz->siup }}">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="control-label col-md-4">NIB</label>
                                <div class="col-md-6">
                                    <input id="birthday" name="nib" class="form-control col-md-7 col-xs-12" type="file" value="{{$legalitasz->nib }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="control-label col-md-4">TDP</label>
                                <div class="col-md-6">
                                    <input id="birthday" name="tdp" class="form-control col-md-7 col-xs-12" type="file" value="{{$legalitasz->tdp }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-4">IUI</label>
                                <div class="col-md-6">
                                    <input id="birthday" name="iui" class="form-control col-md-7 col-xs-12" type="file" value="{{$legalitasz->iui }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-4">NPWP</label>
                                <div class="col-md-6">
                                    <input id="birthday" name="npwp" class="form-control col-md-7 col-xs-12"
                                        type="file" value="{{$legalitasz->npwp }}">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="control-label col-md-4">Izin domisili</label>
                                <div class="col-md-6">
                                    <input id="birthday" name="izin_domisili" class="form-control col-md-7 col-xs-12"
                                        type="file" value="{{$legalitasz->izin_domisili }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="control-label col-md-4">Izin lingkungan</label>
                                <div class="col-md-6">
                                    <input id="birthday" name="izin_lingkungan" class="form-control col-md-7 col-xs-12"
                                        type="file" value="{{$legalitasz->izin_lingkungan }}">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="control-label col-md-4">PSB</label>
                                <div class="col-md-6">
                                    <input id="birthday" name="psb" class="form-control col-md-7 col-xs-12" type="file" value="{{$legalitasz->psb }}">
                                </div>

                                <div class="form-group row">
                                    <label class="control-label col-md-4">SPPl/AMDAL/UKL/UPL</label>
                                    <div class="col-md-6">
                                        <input id="birthday" name="sppl_amdal_ukl_upl"
                                            class="form-control col-md-7 col-xs-12" type="file" value="{{$legalitasz->sppl_amdal_ukl_upl }}">
                                    </div>


                                    <div class="form-group row">
                                        <label class="control-label col-md-4">SPPKP</label>
                                        <div class="col-md-6">
                                            <input id="birthday" name="sppkp" class="form-control col-md-7 col-xs-12"
                                                type="file" value="{{$legalitasz->sppk}}">
                                        </div>

                                        @elseif($m->berbadan_hukum == 'CV')
 heheh
                                <div class="form-group row">
                                    <label class="control-label col-md-4">Akta pendirian <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6">
                                        <input id="birthday" name="akta_pendirian"
                                            class="form-control col-md-7 col-xs-12" required="required" type="file">
                                    </div>

                                    <div class="form-group row">
                                        <label class="control-label col-md-4">Akta pengurus<span
                                                class="required">*</span>
                                        </label>
                                        <div class="col-md-6">
                                            <input id="birthday" name="akta_pengurus"
                                                class="form-control col-md-7 col-xs-12" required="required" type="file">
                                        </div>

                                        <div class="form-group row">
                                            <label class="control-label col-md-4">SIUP<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6">
                                                <input id="birthday" name="siup" class="form-control col-md-7 col-xs-12"
                                                    required="required" type="file">
                                            </div>

                                            <div class="form-group row">
                                                <label class="control-label col-md-4">NIB<span class="required">*</span>
                                                </label>
                                                <div class="col-md-6">
                                                    <input id="birthday" name="nib"
                                                        class="form-control col-md-7 col-xs-12" required="required"
                                                        type="file">
                                                </div>

                                                <div class="form-group row">
                                                    <label class="control-label col-md-4">TDP<span
                                                            class="required">*</span>
                                                    </label>
                                                    <div class="col-md-6">
                                                        <input id="birthday" name="tdp"
                                                            class="form-control col-md-7 col-xs-12" required="required"
                                                            type="file">
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="control-label col-md-4">IUI<span
                                                                class="required">*</span>
                                                        </label>
                                                        <div class="col-md-6">
                                                            <input id="birthday" name="iui"
                                                                class="form-control col-md-7 col-xs-12"
                                                                required="required" type="file">
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="control-label col-md-4">NPWP<span
                                                                    class="required">*</span>
                                                            </label>
                                                            <div class="col-md-6">
                                                                <input id="birthday" name="npwp"
                                                                    class="form-control col-md-7 col-xs-12"
                                                                    required="required" type="file">
                                                            </div>

                                                            <div class="form-group row">
                                                                <label class="control-label col-md-4">IZIN DOMISILI<span
                                                                        class="required">*</span>
                                                                </label>
                                                                <div class="col-md-6">
                                                                    <input id="birthday" name="izin_domisili"
                                                                        class="form-control col-md-7 col-xs-12"
                                                                        required="required" type="file">
                                                                </div>

                                                                <div class="form-group row">
                                                                    <label class="control-label col-md-4">IZIN
                                                                        LINGKUNGAN<span class="required">*</span>
                                                                    </label>
                                                                    <div class="col-md-6">
                                                                        <input id="birthday" name="izin_lingkungan"
                                                                            class="form-control col-md-7 col-xs-12"
                                                                            required="required" type="file">
                                                                    </div>

                                                                    <div class="form-group row">
                                                                        <label class="control-label col-md-4">PSB<span
                                                                                class="required">*</span>
                                                                        </label>
                                                                        <div class="col-md-6">
                                                                            <input id="birthday" name="psb"
                                                                                class="form-control col-md-7 col-xs-12"
                                                                                required="required" type="file">
                                                                        </div>




                                        @elseif($m->berbadan_hukum == "Perorangan")
                                        <div class="form-group row">
                                                                            <label
                                                                                class="control-label col-md-4">KTP<span
                                                                                    class="required">*</span>
                                                                            </label>
                                                                            <div class="col-md-6">
                                                                                <input id="birthday" name="ktp"
                                                                                    class="form-control col-md-7 col-xs-12"
                                                                                    required="required" type="file">
                                                                            </div>

                                                                            <div class="form-group row">
                                                                                <label
                                                                                    class="control-label col-md-4">NPWP<span
                                                                                        class="required">*</span>
                                                                                </label>
                                                                                <div class="col-md-6">
                                                                                    <input id="birthday" name="npwp"
                                                                                        class="form-control col-md-7 col-xs-12"
                                                                                        required="required" type="file">
                                                                                </div>

                                                                                <div class="form-group row">
                                                                                    <label
                                                                                        class="control-label col-md-4">IUMK<span
                                                                                            class="required">*</span>
                                                                                    </label>
                                                                                    <div class="col-md-6">
                                                                                        <input id="birthday" name="iumk"
                                                                                            class="form-control col-md-7 col-xs-12"
                                                                                            required="required"
                                                                                            type="file">
                                                                                    </div>

                                                                                    <div class="form-group row">
                                                                                        <label
                                                                                            class="control-label col-md-4">SPPL<span
                                                                                                class="required">*</span>
                                                                                        </label>
                                                                                        <div class="col-md-6">
                                                                                            <input id="birthday"
                                                                                                name="sppl"
                                                                                                class="form-control col-md-7 col-xs-12"
                                                                                                required="required"
                                                                                                type="file">
                                                                                        </div>

                                                                                        <div class="form-group row">
                                                                                            <label
                                                                                                class="control-label col-md-4">PSB<span
                                                                                                    class="required">*</span>
                                                                                            </label>
                                                                                            <div class="col-md-6">
                                                                                                <input id="birthday"
                                                                                                    name="psb"
                                                                                                    class="form-control col-md-7 col-xs-12"
                                                                                                    required="required"
                                                                                                    type="file">
                                                                                            </div>

                                        @endif
                                        @endforeach


                                    </div>
                                </div>

                            </div>

                        </div>

