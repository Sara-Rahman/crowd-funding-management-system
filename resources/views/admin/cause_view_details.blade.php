@extends('master')
@section('content')

<div id="CauseToPrint">
<h1>Cause Details</h1>
<hr>


<p><b>Cause Name: {{$cause->name}}</b></p>
<p><b>Category: {{optional($cause->category)->name}}</b></p>
<p><b>Description: {{$cause->details}}</b></p>
<p><b>Location: {{$cause->location}}</b></p>
<p><b>Contact Number: {{$cause->phn_number}}</b></p>
<p><b>Target Amount: {{$cause->amount}}<b></p>
<p><b>Raised Amount: {{$cause->raised_amount}}</b></p>
<p>
    <img src="{{url('/uploads/causes/'.$cause->image)}}" style="border-radius:4px" width="200px" alt="cause image">
</p>

</div>

<button class="btn btn-primary" type="submit" onClick="PrintDiv('CauseToPrint');" value="Print">Print</button>

    
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