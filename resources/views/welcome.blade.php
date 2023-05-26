<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
</head>

<body>

    <h1>Currency</h1>
    <div id="trade">
    </div>
    <div class="data-show" id="show">
    </div>

    <script type="module">
//      var val=[];
//     Echo.channel('stock-market').listen('GetRateEvent',(e)=>{
// val=e.data.rates;
// console.log(val)
// var output = '';
// for (var property in val) {
//   output += property + ': ' + val[property]+'<br>';
// }
// document.getElementById("show").innerHTML = output;

//         })



/////////js logic////////////////
let url="https://api.apilayer.com/fixer/latest?symbols=AUD,USD,GBP,JPY";
var myHeaders = new Headers();
myHeaders.append("apikey", "X8NO8KKtpFjsjPBpnJ0SEhENVWLPBIRJ");
var requestOptions = {
  method: 'GET',
  redirect: 'follow',
  headers: myHeaders
};
async function getstockdata(){
let res=await fetch(url, requestOptions);
res=await res.json();
let val=res.rates;
let  output = '';
for (let property in val) {
  output += property + ' : ' + val[property].toFixed(2)+'<br>';
}
document.getElementById("show").innerHTML = output;
}
// getstockdata();
 setInterval(getstockdata,5000);
 </script>

    {{-- this data is coming from another api  which is in div trade --}}
    <script src="{{ asset('js/socket.js') }}"></script>

</body>

</html>
