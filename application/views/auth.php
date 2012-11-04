<? if($error){?>
<p style="color:red; text-align:center">Логин или пароль введены неверно.</p>
<?}?>
            <form method="post">
                <h2>Авторизация</h2><br>
                <input type="text" name="login"><br><br>
                <input type="password" name="password"><br><br>
                <input type="submit" name="btnlogin" value="Войти">
            </form>