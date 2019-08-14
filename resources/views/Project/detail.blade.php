@extends('layout.master')

@section('content')

<div class="main">
        <div class="main-content">
          <div class="container-fluid">
            <div class="row">
              
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                      <div class="x_title">
                        <h2>Detail Project<small>Sessions</small></h2>
                       
                        <div class="clearfix"></div>
                      </div>
                      <div class="x_content">
    
    
                        <!-- Smart Wizard -->
                        {{-- <p>This is a basic form wizard example that inherits the colors from the selected scheme.</p> --}}
                          
                          
                          <div id="step-1">
                            <form class="form-horizontal form-label-left">
                                <table class="table">
                                    <tbody>
                                      {{-- @foreach ($project as $p) --}}
    
                                      
                                      <br>
                                      <tr>
                                        <td>Nama Projek :</td>
                                      <td id="username-val">{{@$project1->nama_project}}</td>
                                      </tr>
                                      <tr>
                                        <td>Kategori :</td>
                                      <td id="email-val">{{@$project1->kategori_project}}</td>
                                      </tr>
                                      <tr>
                                        <td>Forecast :</td>
                                      <td id="card-type-val">{{@$project1->forecast}}</td>
                                      </tr>
                                      <tr>
                                        <td>Pricelist :</td>
                                        <td id="card-number-val">{{@$project1->pricelist}}</td>
                                      </tr>
                                      <tr>
                                        <td>Nama Brand :</td>
                                        <td id="cvc-val">{{@$project1->nama_brand}}</td>
                                      </tr>
                                      <tr>
                                        <td>Gramasi :</td>
                                        <td id="montd-val">{{@$project1->gramasi}}</td>
                                      </tr>
                                      <tr>
                                        <td>Konfigurasi Kemas :</td>
                                        <td id="year-val">{{@$project1->konfigurasi_kemas}}</td>
                                      </tr>
                                      <tr>
                                          <td>Umur Simpan :</td>
                                          <td id="year-val">{{@$project1->umur_simpan}}</td>
                                      </tr>
                                        <tr>
                                            <td>Gambaran Proses :</td>
                                            <td id="year-val">{{@$project1->gambaran_proses}}</td>
                                        </tr>
                                        <tr>
                                            <td>Urgensi Projek :</td>
                                            <td id="year-val">{{@$project1->urgensi_project}}</td>
                                          </tr>
                                          {{-- <tr>
                                              <td>Timeline Launch :</td>
                                              <td id="year-val">{{@$project1->timeline}}</td>
                                            </tr> --}}
                                      {{-- @endforeach --}}
                                    </tbody>
                                  </table>
                            </form>
    
                          </div>
                          
                          
    
                        </div>
                        <!-- End SmartWizard Content -->
    
    
    
    
                        <!-- End SmartWizard Content -->
                      </div>
                    </div>
                  </div>
            
            </div>
          </div>
        </div>
      </div>

@stop