@extends('master')
@section('content')

<h1>Assign Volunteer</h1>
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



<form>

  
    <div class="container">
        <select class="form-multi-select" id="ms1" multiple data-coreui-search="true">
            <option value="0">Angular</option>
            <option value="1">Bootstrap</option>
            <option value="2">React.js</option>
            <option value="3">Vue.js</option>
            <optgroup label="backend">
              <option value="4">Django</option>
              <option value="5">Laravel</option>
              <option value="6">Node.js</option>
            </optgroup>
          </select>
    </div>

   
    
    <button type="submit" class="btn btn-success">Assign</button>
</form>
@endsection