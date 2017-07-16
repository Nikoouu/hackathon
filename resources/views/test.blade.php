@extends('layouts.app')

@section('content')
<div class="container">
    <form action="action.php" method="post">
        <div class="form-group row">
            <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">RUT</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-lg" name="rut" id="rut" placeholder="inserta tu rut">
            </div>
        </div>
        <p><input type="submit" /></p>
    </form>
</div>
@endsection