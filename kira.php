<html>
    <head>
        <title>Prompt Calculator</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <style>
	body {
    margin: 0;
    padding: 0;
    background-color: crimson;
    text-align: center;
}

*{
    font-family: 'Montserrat', sans-serif;
    color: #fff;
}

.btn{
    margin: 30px;
}

.btn button{
    outline: none;
    padding: 20px;
    font-size: 20px;
    background-color: transparent;
    border: 2px solid #fff;
    margin: 10px;
    transition: .2s;
}

.btn button:hover{
    background-color: #fff;
    color: #000;
}

small{ 
    justify-content: right;
    height: 100vh;
    position: fixed;
    text-align: left;
    font-size: 7px;
    padding: 10px;
    background-color: #00000075;
    z-index: -10;
    display: flex;
    width: 40px;
    margin-top: -23px;
}

button{
    border: none;
    padding: 10px;
    border-bottom: 2px solid #fff;
    background-color: transparent;
    font-size: 15px;
}

.tutorbtn{
    outline: none;
    border-bottom: 2px solid #fff;
}
</style>
	</head>
    <body>
	<script>
	function plus(){
    var a = parseFloat(prompt("First Number"));
    var b = parseFloat(prompt("Second Number"));
    alert(a + b);
}

function minus(){
    var a = prompt("First Number");
    var b = prompt("Second Number");
    alert(a - b);
}

function star(){
    var a = prompt("First Number");
    var b = prompt("Second Number");
    alert(a * b);
}

function slash(){
    var a = prompt("First Number");
    var b = prompt("Second Number");
    alert(a / b);
}

function percent(){
    var a = prompt("First Number");
    var b = prompt("Second Number");
    alert(a % b);
}

function tutor(){
    alert ("Pilih operasi dan masukkan nombor pertama yang ingin dioperasikan, kemudian masukkan nombor kedua. Hasil akan dikeluarkan selepas kekedua nombor dimasukan ! ")
}
	</script>

        <small><br><br><br>Muhammad Daniel Fitry <3 </small>
        <h1>Pilih Operasi: 	 </h1>
        <div class="btn"><button onclick="plus()">(+)</button>
        <button onclick="minus()">(-)</button>
        <button onclick="star()">(x)</button>
        <button onclick="slash()">(÷)</button>
        <button onclick="percent()">(%)</button></div>
        <br /><br /><button onclick="tutor()" class="tutorbtn">How To Use ?</button>
		<br>
		<br>
		
		<tr>
         <td><a href="papar.php"><button onclick="myFunction()">Utama</button></a>

<script>
function myFunction() {
  alert("Memaparkan data pengguna !");
}
</script>
		 <a href="kira.php"><button onclick="myFunction()">Kalkulator</button></a>

<script>
function myFunction() {
  alert("Sistem Kalkulator Berjaya Dibuka");
}
</script>
		<a href="index.php"><button onclick="myFunction()">Log out</button></a>

<script>
function myFunction() {
  alert("Log out berjaya !");
}
</script>
	   </tr>
    </body>
</html>