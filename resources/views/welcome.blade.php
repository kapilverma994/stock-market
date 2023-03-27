
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
       <script src="{{asset('js/app.js')}}"></script>   
</head>
<body>
    
    <h1>Currency</h1>
<div class="data-show" id="show">

</div>
    <script type="module">
     var val=[];
    Echo.channel('stock-market').listen('GetRateEvent',(e)=>{
val=e.data.rates;
console.log(val)
var output = '';
for (var property in val) {
  output += property + ': ' + val[property]+'<br>';
}
document.getElementById("show").innerHTML = output;

        })
    
    
    </script>
</body>
</html>