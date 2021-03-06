@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Редактирование Продукта #{{ $product->id }}</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/products') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::model($product, [
                            'method' => 'PATCH',
                            'url' => ['/admin/products', $product->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('admin.products.form', ['formMode' => 'edit'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
<script>
$(document).ready(function() {
    $('#productImages').fileinput({
        thema: 'fa',
        uploadUrl: "/admin/upload-images",
        showUpload: false,
        allowedFileExtensions:['jpg', 'png', 'gif'],
        overwriteInitial:false,
        maxFileSize:1500
    })
});    
</script>

@endsection