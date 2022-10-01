@extends('layouts.app')
@section('title', 'Sales')
@section('content')

<div class="card">
    <div class="card-header">
        <h4>Tambah Jadwal</h4>
    </div>
    <div class="card-body">
        <form id="schedule-add">

            <div class="form-group">
                <label for="month_id">Bulan</label>
                <select class="form-control select2" id="month_id" name="month_id">
                    <option disabled selected>Pilih Bulan</option>
                    @foreach($months as $key => $month)
                    <option value="{{ $month->id }}">{{$month->name}}</option>
                    @endforeach
                </select>
            </div>


            <div class="form-group">
                <label for="year">Tahun</label>
                <input type="number" class="form-control" id="year" name="year" placeholder="Tahun">
            </div>

            <div class="form-group">
                <label for="location_id">Lokasi</label>
                <select class="form-control select2" id="location_id" name="location_id">
                    <option disabled selected>Pilih Bulan</option>
                    @foreach($locations as $key => $location)
                    <option value="{{ $location->id }}">{{$location->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="desc">Uraian Pekerjaan</label>
                <input type="text" class="form-control" id="desc_job" name="desc_job" placeholder="Uraian Pekerjaan">
            </div>

            <div class="form-group">
                <label for="seller_id">Tegangan</label>
                <select class="form-control select2" id="voltage" name="voltage">
                    <option disabled selected>Pilih Tegangan</option>
                    <option value="500kV">500kV</option>
                    <option value="150kV">150kV</option>
                    <option value="70kV">70kV</option>
                    <option value="20kV">20kV</option>
                

                </select>
            </div>


            <div class="form-group">
                <button class="btn btn-success" id="save-data">Save</button>
            </div>
        </form>
    </div>
</div>

<script>
  
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  $('#sales-add').submit(function(e) {
    e.preventDefault();
    $("#save-data").addClass("btn disabled btn-success btn-progress");
    
    $.ajax({
      type: 'POST',
      url:"/schedule/add",
      data:new FormData(this),
      dataType:'JSON',
      contentType: false,
      cache: false,
      processData: false,
      error: function(err){
        $("#save-data").removeClass("disabled btn-progress");
        swal("Oops!", "Error Input Data!", "error");
      },
      success: function(response){
        console.log(response.status)
        if(response.status == 200 || response.status == 201){
          swal("Success", "Data Anda Telah Disimpan!", "success");
          $("#save-data").removeClass("disabled btn-progress");
          $('#sales-add')[0].reset();
          $(".select2").val("");
          $(".select2").trigger("change");
        } else {
          $("#save-data").removeClass("disabled btn-progress");
          swal("Oops!", "Error Input Data!", "error");
        }
      },
    })
  })
</script>
@endsection