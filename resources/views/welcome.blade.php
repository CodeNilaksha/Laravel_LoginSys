@extends('layouts/main')

@section('title')
    WelcomePage
@endsection

@section('body')
<h2>Welcome To Main Page</h2> <br> <hr>  
            @if(count($errors)>0)
               <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li> {{ $error }} </li>
                        @endforeach
                    </ul>
               </div>
            @endif

            @if( session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
            @if( session()->has('message1'))
                <div class="alert alert-danger">
                    {{ session()->get('message1') }}
                </div>
            @endif
          

    <div class="row">
        <div class="col-md-6">
            
            

            <h2>Register Form</h2>
            <form method="post" action=" {{ route('signup') }} ">
                 <div class="form-group">
                    <label for="exampleInputEmail1">First Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="First Name" name="firstname">
                </div>            
                 <div class="form-group">
                    <label for="exampleInputEmail1">Last Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Last Name" name="lastname">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                </div>

                <button type="submit" class="btn btn-primary">Signup</button>
                {{ csrf_field() }}
            </form>
 
        </div>

        <div class="col-md-6">
            <h2>Register Form</h2>
            <form method="post" action=" {{ route('signin') }} ">
            {{ csrf_field() }}
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Signin</button>
            </form>
        </div>
    </div>
@endsection