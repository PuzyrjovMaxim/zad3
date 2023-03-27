<form action="" method="POST">
  <div>
  <label>fio:</label>
  <input name="fio" />
  </div>
  <div>
  <label>email:</label>
  <input name="email" type="email" class = "email">
  </div>
  <div>
  <label>birthyear:</label>
  <select name="year">
    <?php 
    for ($i = 1922; $i <= 2022; $i++) {
      printf('<option value="%d">%d год</option>', $i, $i);
    }
    ?>
  </select>
  </div>
  <div>
  <label>Пол: </label>
  <span><input type="radio" name="sex" checked="checked" value="0">М</span>
  <span><input type="radio" name="sex" value="1">Ж</span>
  </div>
  <p></p>
  <div>
  <label>Number of limbs: </label>
  <span><input type="radio" name="limbs" checked="checked" value="1">1</span>
  <span><input type="radio" name="limbs" value="2">2</span>
  <span><input type="radio" name="limbs" value="3">3</span>
  <span><input type="radio" name="limbs" value="4">4</span>
  <span><input type="radio" name="limbs" value="5">5</span>
  </div>
  <p></p>
  <div>
  <select name="ability[]" multiple="multiply">
    <option select="selected" value="1">нет</option>
    <option value="2">Телепотрация</option>
    <option value="3">Невидимость</option>
    <option value="4">Мгновенный перевод</option>
    <option value="5">полет</option>
  </select>
  </div>
  <p></p>
  <div>
  <label>Ваша Биография: </label>
  <textarea name="biography"></textarea>
  </div>
  <input type="submit" value="ok" />
</form>



