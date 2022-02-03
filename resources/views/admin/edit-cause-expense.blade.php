@extends('master')

@section('content')


<div class="container">
    <h1><b>Edit Expenses </b></h1>
   
    <hr>

    @if(session()->has('success'))
    <p class="alert alert-success">
      {{session()->get('success')}}
    </p>
    @endif

    @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>
                      {{$error}}
                    </li>   
                  @endforeach
                </ul>
              </div>
  @endif
    

    <form action="{{route('update.cause.expense',$cause_expense->id)}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
      @csrf
      {{-- <input type="hidden" value="{{$cause->cause_id}}" name="cause_id"> --}}
        <div class="form-group">
          <label for="ref_id" style="font-size:20px;"><b>Voucher ID</b></label>
          <input type="text" class="form-control" value="{{$cause_expense->ref_id}}" id="ref_id"  placeholder="Enter Voucher ID" name="ref_id">
         
        </div>
        <div class="form-group">
          <label for="details" style="font-size:20px;"><b>Expense Details</label></b>
          <input type="text" class="form-control" id="details" value="{{$cause_expense->details}}" placeholder="Enter Expense Details" name="details">
         
        </div>

        <div class="form-group">
            <label for="amount" style="font-size:20px;"><b>Amount</label></b>
            <input type="number" class="form-control" id="city" value="{{$cause_expense->amount}}"  placeholder="Enter Amount" name="amount">
           
          </div>

       

           
      <button type="submit" class="button btn-success">Submit</button>

      
  
</form> 
</div>
  

  
@endsection
  