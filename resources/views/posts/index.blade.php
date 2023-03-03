@extends('layout.app')
@section('content')
<table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
    <thead>
        <tr>
          <th>Last Name</th>
          <th>First Name</th>
          <th>Middle Name</th>
          <th>GENDER</th>
          <th>Address</th>
           
        </tr>
    </thead>

    <tbody>
        @foreach($subcriber as $subcriber)
            <tr>
              <td>{{ $subcriber->lastname }}</td>
              <td>{{ $subcriber->firstname }}</td>
              <td>{{ $subcriber->middlename }}</td>
              <td>{{ $subcriber->gender }}</td>
              <td>{{ $subcriber->address }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
    
@endsection