<h1>My view</h1>
<?php echo $myvalue;?>
<h1>{{ $myvalue; }}</h1>

<form action ="{{url('/mycontroller')}}" method ="post">  
    @csrf
    <input type ="text" name="myinput">
    <button type = "submit">submit</button>
</form>
