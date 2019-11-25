<tr>
    <th>KTP</th>
    <td><a class="btn btn-success" href="{{URL::asset('../file/'.@$l->ktp)}}"
            download="{{$l->ktp}}"><i class="fa fa-download"></i>
            {{$l->ktp}} </a></td>
    <td> APPROVE<br>
        @if($legalitasz->status_ktp == 2)
        <label class="switch">
            <input type="checkbox" checked = "true" onchange="window.location.href='/ktp/{{ $legalitasz->id }}'">
            <span class="slider round"></span>
        </label></td>
        @else
        <label class="switch">
                <input type="checkbox" onchange="window.location.href='/ktp/{{ $legalitasz->id }}'">
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
    </td>
    <td></td>

</tr>

<tr>
    <th>IUMK</th>
    <td><a class="btn btn-success" href="{{URL::asset('../file/'.@$l->iumk)}}"
            download="{{$l->iumk}}"><i class="fa fa-download"></i>
            {{$l->iumk}} </a></td>
    <td> APPROVE<br>
        @if($legalitasz->status_iumk == 2)
        <label class="switch">
            <input type="checkbox" checked = "true" onchange="window.location.href='/iumk/{{ $legalitasz->id }}'">
            <span class="slider round"></span>
        </label></td>
        @else
        <label class="switch">
                <input type="checkbox" onchange="window.location.href='/iumk/{{ $legalitasz->id }}'">
                <span class="slider round"></span>
            </label></td>
        @endif
    </td>
    <td></td>

</tr>

<tr>
    <th>SPPL/AMDAL/UKL/UPL</th>
    <td><a class="btn btn-success" href="{{URL::asset('../file/'.@$l->sppl_amdal_ukl_upl)}}"
            download="{{$l->sppl_amdal_ukl_upl}}"><i class="fa fa-download"></i>
            {{$l->sppl_amdal_ukl_upl}} </a></td>
    <td> APPROVE<br>
        @if($legalitasz->status_sppl_amdal_ukl_upl == 2)
        <label class="switch">
            <input type="checkbox" checked = "true" onchange="window.location.href='/amdal/{{ $legalitasz->id }}'">
            <span class="slider round"></span>
        </label></td>
        @else
        <label class="switch">
                <input type="checkbox" onchange="window.location.href='/amdal/{{ $legalitasz->id }}'">
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
