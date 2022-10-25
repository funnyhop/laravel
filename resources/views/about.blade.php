@extends('layouts.app')

@section('content')
    <h1>this is about page</h1>

    {{-- {{ 
        $x=10;
    }} --}}
{{-- @if ($x < 5)
    <h3>{{ $x }} is less than 5</h3>
@elseif ($x > 5)
    <h3>{{ $x }} is greater than 5</h3>
@else
    <h3>All conditions does not match</h3>
@endif --}}

{{-- {{ unless = "if not" }} --}}
{{-- @unless (empty($name))
    <h4>Name is not empty</h4> 
@endunless
@if (!empty($name))
    <h4>Name is not empty (if!empty)</h4>
@endif --}}

{{-- @empty(!$name)
    <h3 style="color: green;">Name isn't empty</h3>
@endempty
@empty($age)
    <h3 style="color: blue;">Age is empty</h3>
@endempty --}}

{{-- {{ isset kiem tra bien da duoc dat hay chua }} --}}
{{-- @if (isset($gender))
    <h3>Gender has been set</h3>
@else
    <h3>Gender hasn't been set</h3>
@endif

@switch($name)
    @case('Hop') --}}
    {{-- {{ phan biet hoa thuong }} --}}
        {{-- <h3>This is Mr.Hop</h3>
        @break
    @case('Adrian')
        <h3>This is Mr.Adrian</h3>
    @break
    @default
        <h3>No one selected</h3>
@endswitch --}}

{{-- @for ($i = 0; $i < 9; $i++)
    <h5>i = {{ $i }}</h5>  
@endfor --}}

{{-- @foreach ($names as $eachName)
    <h4>each name : {{ $eachName }}</h4>
@endforeach --}}

{{-- @forelse ($names as $eachName )
    <h3>each name : {{ $eachName }}</h3>
@empty
    <h3>The array is empty</h3>
@endforelse --}}

{{ $i = 0; }}
@while ($i < 10)
    <h3>i = {{ $i }}</h3>
    {{ $i++; }}
    
@endwhile
@endsection