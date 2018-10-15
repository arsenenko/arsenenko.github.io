

<!DOCTYPE html>
<html>
<link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/3/35/Tux.svg/200px-Tux.svg.png" type="image/x-icon">

 




<center><H1> <em> Проверка сложности пароля</center></H1></em><a><center><b>Are you sure you use good passwords???</b></center>

<center><img src="https://image.ibb.co/jmTjde/936_v3.png" alt="password">
<center><img src="https://image.ibb.co/cMCzBz/strelki.jpg" alt="password">
<center>
<form name="my_form" method="post" action="#" onsubmit="return checkPassword(this);">
<p>
<em><b>Проверка стойкости пароля:</b> </em> <input type="password" name="password"/>
</p>
<p>
<input type="submit" name="check" value="Проверить" />
</p>
</form>
</center>
<center>
<script type="text/javascript">
  function checkPassword(form) {
    var password = form.password.value; 
    var s_letters = "qwertyuiopasdfghjklzxcvbnm"; 
    var b_letters = "QWERTYUIOPLKJHGFDSAZXCVBNM"; 
    var digits = "0123456789"; 
    var specials = "!@#$%^&*()_-+=\|/.,:;[]{}";
    var is_s = false; 
    var is_b = false; 
    var is_d = false; 
    var is_sp = false; 
    for (var i = 0; i < password.length; i++) {
      
      if (!is_s && s_letters.indexOf(password[i]) != -1) is_s = true;
      else if (!is_b && b_letters.indexOf(password[i]) != -1) is_b = true;
      else if (!is_d && digits.indexOf(password[i]) != -1) is_d = true;
      else if (!is_sp && specials.indexOf(password[i]) != -1) is_sp = true;
    }
    var rating = 0;
    var text = "";
    if (is_s) rating++; 
    if (is_b) rating++; 
    if (is_d) rating++; 
    if (is_sp) rating++; 
 
    if (password.length < 6 && rating < 3) text = "Простой";
    else if (password.length < 6 && rating >= 3) text = "Средний";
    else if (password.length >= 8 && rating < 3) text = "Средний";
    else if (password.length >= 8 && rating >= 3) text = "Сложный";
    else if (password.length >= 6 && rating == 1) text = "Простой";
    else if (password.length >= 6 && rating > 1 && rating < 4) text = "Средний";
    else if (password.length >= 6 && rating == 4) text = "Сложный";
    alert(text); 
    return false; 
  }
</script>
</center>


<p>  Check the reliability of your passwords on our website.
