
@extends('template.default')
@section('content')
<div>
    <div class="jumbotron" style="height: 100vh; width:100%; padding: 150px 90px;">
    
        <div class="container">
            <div class="container-fluid  ">

                <table class="table border" id="myTable">
                    <thead>
                         <tr>
                             <td>id</td>
                             <td>name</td>
                             <td>email</td>
                             <td>date creaed</td>
                         </tr>
                    </thead>
         
                    <tbody>
                        @foreach($users as $user)
                         <tr>
                            
                             <td>{{$user->id }}</td>
                             <td>{{ $user->name }}</td>
                             <td>{{ $user->email }}</td>
                             <td>{{$user->created_at }}</td>
                           
                         </tr>
                         @endforeach
                             
                             
                    </tbody>
                </table>
                    {{--  <div class="text-center">
                        {{ $users->links()}}
                        {!! $users->links() !!}
                    </div>  --}}
            </div>
        </div>

</div>
@endsection
