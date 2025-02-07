<html>
    <title> atmiya university
</title>
<body>
    <h1>services</h1>
    <p>services atmiya university</p>
    <ul>
        
@php
    
    foreach($services as $service)
    {
        echo "<li> $service</li>";
    }
    @endphp


    </ul>
    <p>{{route('homepage')}}</p>
</body>
</html>
