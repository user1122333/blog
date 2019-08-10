<!DOCTYPE html>
<html >

<head>
    <h1 style="text-align: center"> BUILDING...</h1>
</head>

<body>
    {!! Form::open(['route'=> 'homepage']) !!}
    <div class="form-group">
        <!--'email',nome della colonna della tabella-->
        {!! Form::label('email' ,'Email:' , ['style'=>'h3']) !!}<br>
        {!! Form::text('email' , '' , ['class'=>'form-control','style'=>'width:220px','placeholder'=>'Inserisci@la mail']) !!}
    </div>
    {{ Form::close() }}
</body>

</html>