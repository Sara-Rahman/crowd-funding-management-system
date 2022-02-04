@extends('master')
@section('content')
<div class="container">
<div id="CauseToPrint">
<h1>Cause Details</h1>
<hr>


<p><b>Cause Name: {{$cause->name}}</b></p>
<p><b>Category: {{optional($cause->category)->name}}</b></p>
<p><b>Description: {{$cause->details}}</b></p>
<p><b>Location: {{$cause->location}}</b></p>
<p><b>Contact Number: {{$cause->phn_number}}</b></p>
<p><b>Target Amount: {{$cause->amount}} BDT<b></p>
<p><b>Raised Amount: {{$cause->donation->sum('amount')}} BDT</b></p>
<p>
    <img src="{{url('/uploads/causes/'.$cause->image)}}" style="border-radius:4px" width="200px" alt="cause image">
</p>
<a href="{{route('assign.volunteer',$cause->id)}}"><button type="button" class="btn btn-primary">Assign Volunteer</button></a><br><br>
 {{-- <a href="{{route('view.assign.volunteer',$cause->id)}}"><button type="button" class="btn btn-info">View Volunteer</button></a><br><br> --}}
</div>

<button class="btn btn-primary" type="submit" onClick="PrintDiv('CauseToPrint');" value="Print">Print</button>

</div> 
@endsection

<script language="javascript">
    function PrintDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
    </script>