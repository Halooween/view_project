@extends('layout.main')
@section('content')
    <main role="main"  class="container-fluid flex-fill">

        <div class="wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mt-5 mb-3 clearfix">
                            <h2 class="pull-left">{{ $heading}}</h2>
                            <a href="{{ route('user.create')}}" class="btn btn-success pull-right">add new user
                            </a>                       
    
                        </div>
    
                        <table class="table table-bordered table-striped " id="table_id">
                            <thead>
                                <tr>
                                    <th>Username</th>
                                    <th>Email</th>
    
                                </tr>
                            </thead>
                            
                            <tbody>
    
                                @foreach ($datas as $user)
                              
                                <tr>
                                    <td>{{ $user->username }}</td>
                                    <td>{{ $user->email }}</td>
                                    
    
                                 </tr>
                                @endforeach   
                            </tbody> 
                           
                        </table>
                    </div>
                </div>
            </div>
        </div> 
    </main>
@endsection  

    
   