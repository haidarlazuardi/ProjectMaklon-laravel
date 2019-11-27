
                        <tr>

                            <th>Akta pendirian</th>
                            <td><a class="btn btn-success" href="{{URL::asset('../file/'.@$l->akta_pendirian)}}"
                                    download="{{$l->akta_pendirian}}"><i class="fa fa-download"></i>
                                    {{$l->akta_pendirian}} </a></td>
                            <td>APPROVE<br>
                                @if($legalitasz->status_akta_pendirian == 2)
                                <label class="switch">
                                    <input type="checkbox" checked = "true" onchange="window.location.href='/Akta/{{ $legalitasz->id }}'">
                                    <span class="slider round"></span>
                                </label></td>
                                @else
                                <label class="switch">
                                        <input type="checkbox" onchange="window.location.href='/Akta/{{ $legalitasz->id }}'">
                                        <span class="slider round"></span>
                                    </label></td>
                                @endif
                            <td>
                            </td>
                        </tr>

                        <tr>

                            <th>Akta Pengurus</th>
                            <td><a class="btn btn-success" href="{{URL::asset('../file/'.@$l->akta_pengurus)}}"
                                    download="{{$l->akta_pengurus}}"><i class="fa fa-download"></i>
                                    {{$l->akta_pengurus}} </a></td>
                            <td>APPROVE<br>
                                @if($legalitasz->status_akta_pengurus == 2)
                                <label class="switch">
                                    <input type="checkbox" checked = "true" onchange="window.location.href='/aktapengurus/{{ $legalitasz->id }}'">
                                    <span class="slider round"></span>
                                </label></td>
                                @else
                                <label class="switch">
                                        <input type="checkbox" onchange="window.location.href='/aktapengurus/{{ $legalitasz->id }}'">
                                        <span class="slider round"></span>
                                    </label></td>
                                @endif
                            <td>
                            </td>
                        </tr>


                        <tr>
                            <th>SIUP</th>
                            <td><a class="btn btn-success" href="{{URL::asset('../file/'.@$l->siup)}}"
                                    download="{{$l->siup}}"><i class="fa fa-download"></i>
                                    {{$l->siup}} </a></td>
                            <td> APPROVE<br>
                                @if($legalitasz->status_siup == 2)
                                <label class="switch">
                                    <input type="checkbox" checked = "true" onchange="window.location.href='/siup/{{ $legalitasz->id }}'">
                                    <span class="slider round"></span>
                                </label></td>
                                @else
                                <label class="switch">
                                        <input type="checkbox" onchange="window.location.href='/siup/{{ $legalitasz->id }}'">
                                        <span class="slider round"></span>
                                    </label></td>
                                @endif
                            </td>
                            <td></td>
                        </tr>

                        <tr>
                            <th>NIB</th>
                            <td><a class="btn btn-success" href="{{URL::asset('../file/'.@$l->nib)}}"
                                    download="{{$l->nib}}"><i class="fa fa-download"></i>
                                    {{$l->nib}} </a></td>
                            <td>
                                    APPROVE<br>
                                    @if($legalitasz->status_nib == 2)
                                    <label class="switch">
                                        <input type="checkbox" checked = "true" onchange="window.location.href='/nib/{{ $legalitasz->id }}'">
                                        <span class="slider round"></span>
                                    </label></td>
                                    @else
                                    <label class="switch">
                                            <input type="checkbox" onchange="window.location.href='/nib/{{ $legalitasz->id }}'">
                                            <span class="slider round"></span>
                                        </label></td>
                                    @endif
                                </td>
                            <td></td>
                        </tr>

                        <tr>
                            <th>TDP</th>
                            <td><a class="btn btn-success" href="{{URL::asset('../file/'.@$l->tdp)}}"
                                    download="{{$l->tdp}}"><i class="fa fa-download"></i>
                                    {{$l->tdp}} </a></td>
                            <td>APPROVE<br>
                                @if($legalitasz->status_tdp == 2)
                                <label class="switch">
                                    <input type="checkbox" checked = "true" onchange="window.location.href='/tdp/{{ $legalitasz->id }}'">
                                    <span class="slider round"></span>
                                </label></td>
                                @else
                                <label class="switch">
                                        <input type="checkbox" onchange="window.location.href='/tdp/{{ $legalitasz->id }}'">
                                        <span class="slider round"></span>
                                    </label></td>
                                @endif
                            </td>
                            <td>

                            </td>
                        </tr>

                        <tr>
                            <th>IUI</th>
                            <td><a class="btn btn-success" href="{{URL::asset('../file/'.@$l->iui)}}"
                                    download="{{$l->iui}}"><i class="fa fa-download"></i>
                                    {{$l->iui}} </a></td>
                            <td> APPROVE<br>
                                @if($legalitasz->status_iui == 2)
                                <label class="switch">
                                    <input type="checkbox" checked = "true" onchange="window.location.href='/iui/{{ $legalitasz->id }}'">
                                    <span class="slider round"></span>
                                </label></td>
                                @else
                                <label class="switch">
                                        <input type="checkbox" onchange="window.location.href='/iui/{{ $legalitasz->id }}'">
                                        <span class="slider round"></span>
                                    </label></td>
                                @endif
                            </td>
                            <td></td>
                        </tr>

                        <tr>
                            <th>NPWP</th>
                            <td><a class="btn btn-success" href="{{URL::asset('../file/'.@$l->npwp)}}"
                                    download="{{$l->npwp}}"><i class="fa fa-download"></i>
                                    {{$l->npwp}} </a></td>
                            <td> APPROVE<br>
                                @if($legalitasz->status_npwp == 2)
                                <label class="switch">
                                    <input type="checkbox" checked = "true" onchange="window.location.href='/npwp/{{ $legalitasz->id }}'">
                                    <span class="slider round"></span>
                                </label></td>
                                @else
                                <label class="switch">
                                        <input type="checkbox" onchange="window.location.href='/npwp/{{ $legalitasz->id }}'">
                                        <span class="slider round"></span>
                                    </label></td>
                                @endif
                            <td></td>
                        </tr>

                        <tr>
                            <th>IZIN DOMISILI</th>
                            <td><a class="btn btn-success" href="{{URL::asset('../file/'.@$l->izin_domisili)}}"
                                    download="{{$l->izin_domisili}}"><i class="fa fa-download"></i>
                                    {{$l->izin_domisili}} </a></td>
                            <td> APPROVE<br>
                                @if($legalitasz->status_izin_domisili == 2)
                                <label class="switch">
                                    <input type="checkbox" checked = "true" onchange="window.location.href='/izindomisili/{{ $legalitasz->id }}'">
                                    <span class="slider round"></span>
                                </label></td>
                                @else
                                <label class="switch">
                                        <input type="checkbox" onchange="window.location.href='/izindomisili/{{ $legalitasz->id }}'">
                                        <span class="slider round"></span>
                                    </label></td>
                                @endif
                            <td></td>
                        </tr>

                        <tr>
                            <th>IZIN LINGKUNGAN</th>
                            <td><a class="btn btn-success" href="{{URL::asset('../file/'.@$l->izin_lingkungan)}}"
                                    download="{{$l->izin_lingkungan}}"><i class="fa fa-download"></i>
                                    {{$l->izin_lingkungan}} </a></td>
                            <td> APPROVE<br>
                                @if($legalitasz->status_izin_lingkungan == 2)
                                <label class="switch">
                                    <input type="checkbox" checked = "true" onchange="window.location.href='/izinlingkungan/{{ $legalitasz->id }}'">
                                    <span class="slider round"></span>
                                </label></td>
                                @else
                                <label class="switch">
                                        <input type="checkbox" onchange="window.location.href='/izinlingkungan/{{ $legalitasz->id }}'">
                                        <span class="slider round"></span>
                                    </label></td>
                                @endif
                            </td>
                            <td></td>
                        </tr>


                        <tr>
                            <th>PSB</th>
                            <td><a class="btn btn-success" href="{{URL::asset('../file/'.@$l->psb)}}"
                                    download="{{$l->psb}}"><i class="fa fa-download"></i>
                                    {{$l->psb}} </a></td>
                            <td> APPROVE<br>
                                @if($legalitasz->status_psb == 2)
                                <label class="switch">
                                    <input type="checkbox" checked = "true" onchange="window.location.href='/psb/{{ $legalitasz->id }}'">
                                    <span class="slider round"></span>
                                </label></td>
                                @else
                                <label class="switch">
                                        <input type="checkbox" onchange="window.location.href='/psb/{{ $legalitasz->id }}'">
                                        <span class="slider round"></span>
                                    </label></td>
                                @endif
                            </td>
                            <td></td>
                        </tr>
