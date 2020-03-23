@extends('layouts.sidebar')
@section('breadcrumbs')
{{ Breadcrumbs::render('facility') }}
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title" style="padding:8px">Student Fee Detail</div>
                </div>
                <div class="card-body">
                    <h4 class="h4">Fees fill</h4>
                    <form action="/feerecord" method="post">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-6">
                                <select name="fee" id="fee" class="form-control">
                                    <option selected disabled>Select Installment</option>
                                    <option value="1st Installment">First Installment</option>
                                    <option value="2nd Installment">Second Installment</option>
                                    <option value="3rd Installment">Final Installment</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <select name="class_id" id="" class="form-control classCheck">
                                    <option value="">Select Class</option>
                                    @foreach ($class_id as $item)
                                        <option value="{{$item->id}}">{{$item->class}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-head-fixed table-bordered text-center">
                              <thead>
                                <tr>
                                  <th>Student</th>
                                  <th>Amount</th>
                                  <th>Fill Date</th>
                                  <th>Action</th>
                                </tr>
                              </thead>
                              <tbody>

                              </tbody>
                            </table>
                        </div>
                        <div class="form-group text-right p-2">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="/plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<script>
    $('.classCheck').change(function(e){
        const class_id = $(this).val();
        const fee = $('#fee').val(); fee == null ? (alert('Please select installment.'), window.location.reload()) : '';
        const _token = $('input[name="_token"]').val();
        $.ajax({
        type: "post",
        url: "/fee/check",
        data: {'class_id':class_id,'_token':_token, 'fee':fee},
        success: function (response) {
            if (response == 'Already Exist') {
                alert('Already Exist');
                 window.location.reload();
            } else if(response == '1st Installment not found.') {
                alert('1st Installment not found.');
                 window.location.reload();
            } else if(response == 'Previous Installment not found.'){
                alert('Previous Installment not found.');
                 window.location.reload();
            } else {
            $("tbody").each(function(){
            $(this).find('tr').remove();
            });
            for (let index = 0; index < response.length; index++) {
            const element = response[index];
            var input =
            "<tr>"+
            "<td>"+element.name+"<input type='text' value='"+element.id+"' hidden name='studentname[]'></td>"+
            "<td><input type='text' name='amount[]' class='form-control' id='' placeholder='Enter Amount Fees'></td>"+
            "<td><input type='text' name='date[]' class='form-control' id='' placeholder='Enter Date'></td>"+
            "<td><select name='action[]' id='' class='form-control'>"+
            "<option selected disabled>Select Action</option>"+
            "<option value='1'>Paid</option>"+
            "<option value='0'>Unpaid</option>"+
            "</select>"
            "</td>"+
            "</tr>";
            $("tbody").append(input);
            }
            }
        }
        });
    });
    // $('.classCheck').change(function(e){
    //     const class_id = $(this).val();
    //     const fee = $('#fee').val();
    //     const _token = $('input[name="_token"]').val();
    //     $.ajax({
    //     type: "post",
    //     url: "/fee/check",
    //     data: {'class_id':class_id,'_token':_token, 'fee':fee},
    //     success: function (response) {
    //     console.log(response);
    //     $("tbody").each(function(){
    //     $(this).find('tr').remove();
    //     });
    //     for (let index = 0; index < response.length; index++) {
    //     const element = response[index];
    //     var input = "<tr>"+
    //     "<td>"+element.name+"<input type='text' value='"+element.id+"' hidden name='studentname[]'></td>"+
    //     "<td><select name='action[]' id='' class='form-control'>"+
    //     "<option selected disabled>Select Action</option>"+
    //     "<option value='1'>Paid</option>"+
    //     "<option value='0'>Unpaid</option>"+
    //     "</select>"
    //     "</td>"+
    //     "</tr>";
    //     $("tbody").append(input);
    //     }
    //     }
    //     });
    // });
</script>
@endsection
