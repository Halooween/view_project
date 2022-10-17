@extends('layout.main')
@section('content')
    <main role="main"  class="container-fluid flex-fill">

        <div class="wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 form">
                        <h2 class="mt-5 create">{{ $create_heading }}</h2>
                        <form action="{{ route('user.store') }}" method="post" >
                            @csrf 
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control "  >
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control "  >
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control "  >
                            </div>
                            
                            <input type="submit" name="create" class="btn btn-primary" value="Submit">
                            <a href="{{ route('user.index') }}" class="btn btn-secondary ml-2">Cancel</a>
                        </form>
                    </div>
                </div>        
            </div>
        </div>
        </main>
@endsection


