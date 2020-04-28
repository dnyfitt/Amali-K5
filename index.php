<!DOCTYPE html>
<html>
    <head>
        <title>LogIn Page</title>
		<style>
body {
  background-image: url('wlp.png');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
}
</style>
		<style>
		{
    padding:0;
    margin:0;
    overflow-x:hidden;
    display:flex;
    justify-content:center;
    align-items:center;
    height: 100vh;
}
.container{
    padding:50px;
    box-shadow:0 0 10px 1px rgba(0,0,0,0.2);
    border-radius:20px;
}
.container input{
    margin: 10px;
}
.container button{
    border:none;
    background: rgb(123,45,67);
    padding: 5px 20px;
    color:#fff;
    border-radius: 10px;
}
<style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: green;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button2 {background-color: #008CBA;} /* Blue */
.button3 {background-color: #f44336;} /* Red */ 
.button4 {background-color: #e7e7e7; color: black;} /* Gray */ 
.button5 {background-color: #FFB6C1;} /* Pink */
</style>
    </head>
    <body>
	<center>
	<img src="cc.jpg" alt=kalkulator" style="width:500px;height:250px;">
        <div class="container">
            <form action="" >
			<h3> Daftar Masuk Pengguna </h3>
                Username :<input type="text" id="txtName" placeholder="username"> <br />
                Password :<input type="password" id="txtPass" placeholder="password"> <br />
				<a href="kira.php"><input type="button" value="Login"/></a> <a href="daftar.php"><input type="button" value="Sign up"/></a>
                
            </form>
        </div>
<button class="button">White</button>
<button class="button button2">Blue</button>
<button class="button button3">Red</button>
<button class="button button4">Gray</button>
<button class="button button5">Pink</button>
		</center>
    </body>
</html>