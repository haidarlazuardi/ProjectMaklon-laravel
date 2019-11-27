

                        <div id="step-1" class="content">
                            {{-- <h2>{{ $m }}</h2> --}}
                            @foreach ($maklons as $m)

                            @if($m->mamaklon->berbadan_hukum == 'PT')

                            <div class="form-group row">
                                <label class="control-label col-md-4">Akta Pendirian</label>
                                <div class="col-md-6">
                                    <input id="birthday" name="akta_pendirian" class="form-control col-md-7 col-xs-12"
                                    type="file"  value="{{URL::asset('../file/'.@$l->akta_pendirian)}}">
                                </div>
                                @if($legalitasz->akta_pendirian)
                                <a  href="{{URL::asset('../file/'.@$l->akta_pendirian)}}"
                                    download="{{$l->akta_pendirian}}"><i class="fa fa-download"></i>
                                    {{$l->akta_pendirian}} </a>
                                @else
                                {{"Data Empty"}}
                                @endif
                            </div>

                            <div class="form-group row">
                                <label class="control-label col-md-4">Akta penyesuaian </label>
                                <div class="col-md-6">
                                    <input id="birthday" name="akta_pendirian" class="form-control col-md-7 col-xs-12"
                                        type="file" value="{{$legalitasz->akta_penyesuaian }}">
                                </div>
                                @if($legalitasz->akta_penyesuaian)
                                <a  href="{{URL::asset('../file/'.@$l->akta_penyesuaian)}}"
                                    download="{{$l->akta_penyesuaian}}"><i class="fa fa-download"></i>
                                    {{$l->akta_penyesuaian}} </a>
                                @else
                                {{"Data Empty"}}
                                @endif
                            </div>
                        </div>

                            <div class="form-group row">
                                <label class="control-label col-md-4">Akta susunan direksi</label>
                                <div class="col-md-6">
                                    <input id="birthday" name="akta_susunan_direksi" class="form-control col-md-7 col-xs-12"
                                        type="file" value="{{$legalitasz->akta_susunan_direksi }}">
                                    </div>
                                        @if($legalitasz->akta_susunan_direksi)
                                        <a  href="{{URL::asset('../file/'.@$l->akta_susunan_direksi)}}"
                                            download="{{$l->akta_susunan_direksi}}"><i class="fa fa-download"></i>
                                            {{$l->akta_susunan_direksi}} </a>
                                        @else
                                        {{"Data Empty"}}
                                        @endif
                            </div>


                            <div class="form-group row">
                                <label class="control-label col-md-4">Akta wewenang Direksi</label>
                                <div class="col-md-6">
                                    <input id="birthday" name="akta_wewenang_direksi" class="form-control col-md-7 col-xs-12"
                                        type="file" value="{{$legalitasz->akta_wewenang_direksi }}">
                                    </div>
                                        @if($legalitasz->akta_wewenang_direksi)
                                        <a  href="{{URL::asset('../file/'.@$l->akta_wewenang_direksi)}}"
                                            download="{{$l->akta_wewenang_direksi}}"><i class="fa fa-download"></i>
                                            {{$l->akta_wewenang_direksi}} </a>
                                        @else
                                        {{"Data Empty"}}
                                        @endif
                            </div>


                            <div class="form-group row">
                                <label class="control-label col-md-4">SIUP</label>
                                <div class="col-md-6">
                                    <input id="birthday" name="siup" class="form-control col-md-7 col-xs-12"
                                        type="file" value="{{$legalitasz->siup }}">
                                    </div>
                                        @if($legalitasz->siup)
                                        <a  href="{{URL::asset('../file/'.@$l->siup)}}"
                                            download="{{$l->siup}}"><i class="fa fa-download"></i>
                                            {{$l->siup}} </a>
                                        @else
                                        {{"Data Empty"}}
                                        @endif
                            </div>


                            <div class="form-group row">
                                <label class="control-label col-md-4">NIB</label>
                                <div class="col-md-6">
                                    <input id="birthday" name="nib" class="form-control col-md-7 col-xs-12" type="file" value="{{$legalitasz->nib }}">
                                </div>
                                    @if($legalitasz->nib)
                                    <a  href="{{URL::asset('../file/'.@$l->nib)}}"
                                        download="{{$l->nib}}"><i class="fa fa-download"></i>
                                        {{$l->nib}} </a>
                                    @else
                                    {{"Data Empty"}}
                                    @endif
                            </div>

                            <div class="form-group row">
                                <label class="control-label col-md-4">TDP</label>
                                <div class="col-md-6">
                                    <input id="birthday" name="tdp" class="form-control col-md-7 col-xs-12" type="file" value="{{$legalitasz->tdp }}">
                                </div>
                                    @if($legalitasz->tdp)
                                    <a  href="{{URL::asset('../file/'.@$l->tdp)}}"
                                        download="{{$l->tdp}}"><i class="fa fa-download"></i>
                                        {{$l->tdp}} </a>
                                    @else
                                    {{"Data Empty"}}
                                    @endif
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-4">IUI</label>
                                <div class="col-md-6">
                                    <input id="birthday" name="iui" class="form-control col-md-7 col-xs-12" type="file" value="{{$legalitasz->iui }}">
                                </div>
                                    @if($legalitasz->iui)
                                    <a  href="{{URL::asset('../file/'.@$l->iui)}}"
                                        download="{{$l->iui}}"><i class="fa fa-download"></i>
                                        {{$l->iui}} </a>
                                    @else
                                    {{"Data Empty"}}
                                    @endif
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-4">IUMK</label>
                                <div class="col-md-6">
                                    <input id="birthday" name="iumk" class="form-control col-md-7 col-xs-12"
                                        type="file" value="{{$legalitasz->iumk }}">
                                    </div>
                                        @if($legalitasz->iumk)
                                        <a  href="{{URL::asset('../file/'.@$l->iumk)}}"
                                            download="{{$l->iumk}}"><i class="fa fa-download"></i>
                                            {{$l->iumk}} </a>
                                        @else
                                        {{"Data Empty"}}
                                        @endif
                            </div>


                            <div class="form-group row">
                                <label class="control-label col-md-4">Izin domisili</label>
                                <div class="col-md-6">
                                    <input id="birthday" name="izin_domisili" class="form-control col-md-7 col-xs-12"
                                        type="file" value="{{$legalitasz->izin_domisili }}">
                                    </div>
                                        @if($legalitasz->izin_domisili)
                                        <a  href="{{URL::asset('../file/'.@$l->izin_domisili)}}"
                                            download="{{$l->izin_domisili}}"><i class="fa fa-download"></i>
                                            {{$l->izin_domisili}} </a>
                                        @else
                                        {{"Data Empty"}}
                                        @endif
                            </div>

                            <div class="form-group row">
                                <label class="control-label col-md-4">Izin lingkungan</label>
                                <div class="col-md-6">
                                    <input id="birthday" name="izin_lingkungan" class="form-control col-md-7 col-xs-12"
                                        type="file" value="{{$legalitasz->izin_lingkungan }}">
                                    </div>
                                        @if($legalitasz->izin_lingkungan)
                                        <a  href="{{URL::asset('../file/'.@$l->izin_lingkungan)}}"
                                            download="{{$l->izin_lingkungan}}"><i class="fa fa-download"></i>
                                            {{$l->izin_lingkungan}} </a>
                                        @else
                                        {{"Data Empty"}}
                                        @endif
                            </div>


                            <div class="form-group row">
                                <label class="control-label col-md-4">PSB</label>
                                <div class="col-md-6">
                                    <input id="birthday" name="psb" class="form-control col-md-7 col-xs-12" type="file" value="{{$legalitasz->psb }}">
                                </div>
                                    @if($legalitasz->psb)
                                    <a  href="{{URL::asset('../file/'.@$l->psb)}}"
                                        download="{{$l->psb}}"><i class="fa fa-download"></i>
                                        {{$l->psb}} </a>
                                    @else
                                    {{"Data Empty"}}
                                    @endif
                            </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-4">SPPl/AMDAL/UKL/UPL</label>
                                    <div class="col-md-6">
                                        <input id="birthday" name="sppl_amdal_ukl_upl" class="form-control col-md-7 col-xs-12" type="file" value="{{$legalitasz->sppl_amdal_ukl_upl }}">
                                    </div>
                                        @if($legalitasz->sppl_amdal_ukl_upl)
                                        <a  href="{{URL::asset('../file/'.@$l->sppl_amdal_ukl_upl)}}"
                                            download="{{$l->sppl_amdal_ukl_upl}}"><i class="fa fa-download"></i>
                                            {{$l->sppl_amdal_ukl_upl}} </a>
                                        @else
                                        {{"Data Empty"}}
                                        @endif
                                </div>

                                    <div class="form-group row">
                                        <label class="control-label col-md-4">SPPKP</label>
                                        <div class="col-md-6">
                                            <input id="birthday" name="sppk" class="form-control col-md-7 col-xs-12"
                                                type="file" value="{{$legalitasz->sppk}}">
                                            </div>
                                                @if($legalitasz->sppk)
                                                <a  href="{{URL::asset('../file/'.@$l->sppk)}}"
                                                    download="{{$l->sppk}}"><i class="fa fa-download"></i>
                                                    {{$l->sppk}} </a>
                                                @else
                                                {{"Data Empty"}}
                                                @endif
                                    </div>
                                        @elseif($m->berbadan_hukum == 'CV')


                            <div class="form-group row">
                                    <label class="control-label col-md-4">Akta Pendirian</label>
                                    <div class="col-md-6">
                                        <input id="birthday" name="akta_pendirian" class="form-control col-md-7 col-xs-12"
                                    type="file"  value="{{URL::asset('../file/'.@$l->akta_pendirian)}}">
                                </div>
                                    @if($legalitasz->akta_pendirian)
                                    <a  href="{{URL::asset('../file/'.@$l->akta_pendirian)}}"
                                        download="{{$l->akta_pendirian}}"><i class="fa fa-download"></i>
                                        {{$l->akta_pendirian}} </a>
                                    @else
                                    {{"Data Empty"}}
                                    @endif
                                </div>


                            <div class="form-group row">
                                <label class="control-label col-md-4">Akta Pengurus</label>
                                <div class="col-md-6">
                                    <input id="birthday" name="akta_pengurus" class="form-control col-md-7 col-xs-12"
                                type="file"  value="{{URL::asset('../file/'.@$l->akta_pengurus)}}">
                            </div>
                                @if($legalitasz->akta_pengurus)
                                <a  href="{{URL::asset('../file/'.@$l->akta_pengurus)}}"
                                    download="{{$l->akta_pengurus}}"><i class="fa fa-download"></i>
                                    {{$l->akta_pengurus}} </a>
                                @else
                                {{"Data Empty"}}
                                @endif
                            </div>

                            <div class="form-group row">
                                    <label class="control-label col-md-4">SIUP</label>
                                    <div class="col-md-6">
                                        <input id="birthday" name="siup" class="form-control col-md-7 col-xs-12"
                                            type="file" value="{{$legalitasz->siup }}">
                                        </div>
                                            @if($legalitasz->siup)
                                            <a  href="{{URL::asset('../file/'.@$l->siup)}}"
                                                download="{{$l->siup}}"><i class="fa fa-download"></i>
                                                {{$l->siup}} </a>
                                            @else
                                            {{"Data Empty"}}
                                            @endif
                                </div>
                                <div class="form-group row">
                                        <label class="control-label col-md-4">NIB</label>
                                        <div class="col-md-6">
                                            <input id="birthday" name="nib" class="form-control col-md-7 col-xs-12" type="file" value="{{$legalitasz->nib }}">
                                        </div>
                                            @if($legalitasz->nib)
                                            <a  href="{{URL::asset('../file/'.@$l->nib)}}"
                                                download="{{$l->nib}}"><i class="fa fa-download"></i>
                                                {{$l->nib}} </a>
                                            @else
                                            {{"Data Empty"}}
                                            @endif
                                    </div>

                                    <div class="form-group row">
                                        <label class="control-label col-md-4">TDP</label>
                                        <div class="col-md-6">
                                            <input id="birthday" name="tdp" class="form-control col-md-7 col-xs-12" type="file" value="{{$legalitasz->tdp }}">
                                        </div>
                                            @if($legalitasz->tdp)
                                            <a  href="{{URL::asset('../file/'.@$l->tdp)}}"
                                                download="{{$l->tdp}}"><i class="fa fa-download"></i>
                                                {{$l->tdp}} </a>
                                            @else
                                            {{"Data Empty"}}
                                            @endif
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-4">IUI</label>
                                        <div class="col-md-6">
                                            <input id="birthday" name="iui" class="form-control col-md-7 col-xs-12" type="file" value="{{$legalitasz->iui }}">
                                        </div>
                                            @if($legalitasz->iui)
                                            <a  href="{{URL::asset('../file/'.@$l->iui)}}"
                                                download="{{$l->iui}}"><i class="fa fa-download"></i>
                                                {{$l->iui}} </a>
                                            @else
                                            {{"Data Empty"}}
                                            @endif
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-4">NPWP</label>
                                        <div class="col-md-6">
                                            <input id="birthday" name="npwp" class="form-control col-md-7 col-xs-12"
                                                type="file" value="{{$legalitasz->npwp }}">
                                            </div>
                                                @if($legalitasz->npwp)
                                                <a  href="{{URL::asset('../file/'.@$l->npwp)}}"
                                                    download="{{$l->npwp}}"><i class="fa fa-download"></i>
                                                    {{$l->npwp}} </a>
                                                @else
                                                {{"Data Empty"}}
                                                @endif
                                    </div>


                                    <div class="form-group row">
                                        <label class="control-label col-md-4">Izin domisili</label>
                                        <div class="col-md-6">
                                            <input id="birthday" name="izin_domisili" class="form-control col-md-7 col-xs-12"
                                                type="file" value="{{$legalitasz->izin_domisili }}">
                                            </div>
                                                @if($legalitasz->izin_domisili)
                                                <a  href="{{URL::asset('../file/'.@$l->izin_domisili)}}"
                                                    download="{{$l->izin_domisili}}"><i class="fa fa-download"></i>
                                                    {{$l->izin_domisili}} </a>
                                                @else
                                                {{"Data Empty"}}
                                                @endif
                                    </div>

                                    <div class="form-group row">
                                        <label class="control-label col-md-4">Izin lingkungan</label>
                                        <div class="col-md-6">
                                            <input id="birthday" name="izin_lingkungan" class="form-control col-md-7 col-xs-12"
                                                type="file" value="{{$legalitasz->izin_lingkungan }}">
                                            </div>
                                                @if($legalitasz->izin_lingkungan)
                                                <a  href="{{URL::asset('../file/'.@$l->izin_lingkungan)}}"
                                                    download="{{$l->izin_lingkungan}}"><i class="fa fa-download"></i>
                                                    {{$l->izin_lingkungan}} </a>
                                                @else
                                                {{"Data Empty"}}
                                                @endif
                                    </div>


                                    <div class="form-group row">
                                        <label class="control-label col-md-4">PSB</label>
                                        <div class="col-md-6">
                                            <input id="birthday" name="psb" class="form-control col-md-7 col-xs-12" type="file" value="{{$legalitasz->psb }}">
                                        </div>
                                            @if($legalitasz->psb)
                                            <a  href="{{URL::asset('../file/'.@$l->psb)}}"
                                                download="{{$l->psb}}"><i class="fa fa-download"></i>
                                                {{$l->psb}} </a>
                                            @else
                                            {{"Data Empty"}}
                                            @endif
                                    </div>





                                        @elseif($m->berbadan_hukum == "Perorangan")
                                                                        <div class="form-group row">
                                                                                <label class="control-label col-md-4">KTP</label>
                                                                                <div class="col-md-6">
                                                                                    <input id="birthday" name="sppk" class="form-control col-md-7 col-xs-12"
                                                                                    type="file" value="{{$legalitasz->ktp}}">
                                                                                </div>
                                                                                        @if($legalitasz->ktp)
                                                                                        <a  href="{{URL::asset('../file/'.@$l->ktp)}}"
                                                                                            download="{{$l->ktp}}"><i class="fa fa-download"></i>
                                                                                            {{$l->ktp}} </a>
                                                                                        @else
                                                                                        {{"Data Empty"}}
                                                                                        @endif
                                                                            </div>

                                                                            <div class="form-group row">
                                                                                    <label class="control-label col-md-4">NPWP</label>
                                                                                    <div class="col-md-6">
                                                                                        <input id="birthday" name="npwp" class="form-control col-md-7 col-xs-12"
                                                                                            type="file" value="{{$legalitasz->npwp }}">
                                                                                        </div>
                                                                                            @if($legalitasz->npwp)
                                                                                            <a  href="{{URL::asset('../file/'.@$l->npwp)}}"
                                                                                                download="{{$l->npwp}}"><i class="fa fa-download"></i>
                                                                                                {{$l->npwp}} </a>
                                                                                            @else
                                                                                            {{"Data Empty"}}
                                                                                            @endif
                                                                                </div>

                                                                                <div class="form-group row">
                                                                                        <label class="control-label col-md-4">IUMK</label>
                                                                                        <div class="col-md-6">
                                                                                            <input id="birthday" name="npwp" class="form-control col-md-7 col-xs-12"
                                                                                                type="file" value="{{$legalitasz->npwp }}">
                                                                                            </div>
                                                                                                @if($legalitasz->npwp)
                                                                                                <a  href="{{URL::asset('../file/'.@$l->npwp)}}"
                                                                                                    download="{{$l->npwp}}"><i class="fa fa-download"></i>
                                                                                                    {{$l->npwp}} </a>
                                                                                                @else
                                                                                                {{"Data Empty"}}
                                                                                                @endif
                                                                                    </div>

                                                                                    <div class="form-group row">
                                                                                            <label class="control-label col-md-4">SPPL</label>
                                                                                            <div class="col-md-6">
                                                                                                <input id="birthday" name="sppl_amdal_ukl_upl" class="form-control col-md-7 col-xs-12"
                                                                                                    type="file" value="{{$legalitasz->sppl_amdal_ukl_upl }}">
                                                                                                </div>
                                                                                                    @if($legalitasz->sppl_amdal_ukl_upl)
                                                                                                    <a  href="{{URL::asset('../file/'.@$l->sppl_amdal_ukl_upl)}}"
                                                                                                        download="{{$l->sppl_amdal_ukl_upl}}"><i class="fa fa-download"></i>
                                                                                                        {{$l->sppl_amdal_ukl_upl}} </a>
                                                                                                    @else
                                                                                                    {{"Data Empty"}}
                                                                                                    @endif
                                                                                        </div>
                                                                                        <div class="form-group row">
                                                                                                <label class="control-label col-md-4">PSB</label>
                                                                                                <div class="col-md-6">
                                                                                                    <input id="birthday" name="psb" class="form-control col-md-7 col-xs-12"
                                                                                                        type="file" value="{{$legalitasz->psb }}">
                                                                                                    </div>
                                                                                                        @if($legalitasz->psb)
                                                                                                        <a  href="{{URL::asset('../file/'.@$l->psb)}}"
                                                                                                            download="{{$l->psb}}"><i class="fa fa-download"></i>
                                                                                                            {{$l->psb}} </a>
                                                                                                        @else
                                                                                                        {{"Data Empty"}}
                                                                                                        @endif
                                                                                            </div>




                            @endif
                            @endforeach
                        </div>

            </div>

