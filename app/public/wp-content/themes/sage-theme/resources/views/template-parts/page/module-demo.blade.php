@php
 $num1 = 1;
 $num2 = 1;
 $num3 = $num1 + $num2 ;
 $class = 'h2' ; 
@endphp
<div class="container">
    <h3>{{App::getNameModule(1)}}: demo 1</h3>
    @include('partials\demo\item', 
    [
        'num1' => $num1,
        'num2' => $num2,
        'num3' => $num3,
        'class' => $class,
        'sub' => 'Một + một = hai'
    ]
    )
</div>