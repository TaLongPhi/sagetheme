@php
 $num1 = 2;
 $num2 = 2;
 $num3 = $num1 + $num2 ;
 $class = 'h4' ; 
@endphp
<div class="container">
    <h3>{{App::getNameModule(1)}}: demo 1</h3>
    <div>
        <p class="{{$class}}">{{$num1}} + {{$num2}} = {{$num3}}</p>
        <p>Hai + hai = bốn</p>
    </div>
</div>