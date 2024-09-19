@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
    <p>Welcome to our website!</p>
@endsection




<!-- 
In this example, extends('layouts.app') tells Laravel to use the app.blade.php layout as the parent layout for the welcome.blade.php view.

section('title', 'Welcome') defines the title section in the parent layout, where 'Welcome' will be inserted as the title.

section('content') and endsection define the content section in the parent layout, where the content specific to the welcome.blade.php view will be inserted.

This way, you can define a common layout once and reuse it across multiple views while allowing each view to define its unique content. -->