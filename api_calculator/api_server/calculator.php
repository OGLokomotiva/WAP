<html>
<body>

<form>
  <input type="text" id="display" disabled>
  <br><br>
  <input type="button" value="1" onclick="document.getElementById('display').value+='1'">
  <input type="button" value="2" onclick="document.getElementById('display').value+='2'">
  <input type="button" value="3" onclick="document.getElementById('display').value+='3'">
  <input type="button" value="+" onclick="document.getElementById('display').value+='+'">
  <br>
  <input type="button" value="4" onclick="document.getElementById('display').value+='4'">
  <input type="button" value="5" onclick="document.getElementById('display').value+='5'">
  <input type="button" value="6" onclick="document.getElementById('display').value+='6'">
  <input type="button" value="-" onclick="document.getElementById('display').value+='-'">
  <br>
  <input type="button" value="7" onclick="document.getElementById('display').value+='7'">
  <input type="button" value="8" onclick="document.getElementById('display').value+='8'">
  <input type="button" value="9" onclick="document.getElementById('display').value+='9'">
  <input type="button" value="*" onclick="document.getElementById('display').value+='*'">
  <br>
  <input type="button" value="c" onclick="document.getElementById('display').value=''">
  <input type="button" value="0" onclick="document.getElementById('display').value+='0'">
  <input type="button" value="=" onclick="document.getElementById('display').value=eval(document.getElementById('display').value)">
  <input type="button" value="/" onclick="document.getElementById('display').value+='/'">
  <br>
</form> 

</body>
</html>