@extends('layouts.app')

@section('content')



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Soma</div>

                <form action="/soma" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label for="text">N1</label>
                        <input type="text" name="n1" id="n1">
                    </div>
                </form>

                <form action="/soma" method="post">
                    <div class="form-group">
                    <label for="text">N2</label>
                        <input type="text" name="n2" id="n2">
                    </div>
                </form>
                <input type="submit">
                <div class="card-body"></div>
            </div>
        </div>    
    </div>    
</div>
@endsection