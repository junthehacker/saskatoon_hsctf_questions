<!doctype html>
<html>
  <head>
    <title>Free pizza</title>
    <script src="https://ssl.jackzh.com/file/js/jquery/jquery-1.11.3.min.js"></script>
  </head>
  <body>
    <h1>Enter your coupon below to get free pizza!</h1>
    <form>
      <input type="text" id="coupon-field" /><br>
      <button type="button" onclick="checkCoupon();">Submit</button>
    </form>
  </body>
</html>
<script type="text/javascript">
  var code = "duajbx928dlxdlh1";
  function checkCoupon(){
    if($("#coupon-field").val() == code){
      alert("your flag is hsctf{question3}");
    } else {
      alert("oops, try again");
    }
  }
</script>
