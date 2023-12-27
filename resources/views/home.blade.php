
<h1>Good Morning {{$name}}</h1>

<!-- if condition -->
@php
    $value = 10;
@endphp

@if($value > 5)
    <p>The value is greater than 5.</p>
@else
    <p>The value is less than or equal to 5.</p>
@endif

<!-- foreach loop condition -->

@php
    $items = [10, 20, 30, 40, 50];
@endphp


@foreach($items as $item)

        <p>{{ $item }}</p>
   
@endforeach

<!-- foreach loop condition with Index -->
@php
    $items = ['Dhaka', 'Chittagong', 'Comilla'];
@endphp

@foreach($items as $index => $item)
<p>Item[{{ $index }}] = {{ $item }}</p>
@endforeach




<script>
    // Define a JavaScript variable using Blade syntax
    var message = "Hello, {{ $name }}!";

    // Output the variable value
    alert(message);
</script>