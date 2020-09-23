@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create your new post</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                </div>

                <form action="/post" method="POST" class="p-4">
                    @csrf
                    <textarea class="form-control " id="summary-ckeditor" name="summary-ckeditor"></textarea>
                    <button type="submit" class="btn btn-primary my-3 px-3">Submit Post</button>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- CKEDITOR CDN --}}
<script src="//cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'summary-ckeditor' );
</script>
@endsection