@extends('layouts.app2')

@section('title', 'Welcome')

@section('content')
    <p>Welcome to our website!</p>
@endsection

@push('scripts')
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
@endpush
<!-- 
@push('scripts') is used to push a JavaScript file (in this case, jQuery) onto the scripts stack.
asset('js/jquery.min.js') generates the correct URL for the jQuery file located in the public/js directory. -->

<!-- You can create additional views that push more JavaScript files onto the scripts stack, and all pushed JavaScript files will be included in the layout's header section when the view is rendered. This approach helps keep your JavaScript files organized and ensures that they are included only when needed. -->