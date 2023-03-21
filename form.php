<form action="" method="POST">
  <label>FIO</label>
  <input name="fio" />
  <label>EMAIL</label>
  <input name="email" type="email" class = "email">
  <label>BIRTHYEAR</label>
  <select name="year">
    <?php 
    for ($i = 1922; $i <= 2022; $i++) {
      printf('<option value="%d">%d год</option>', $i, $i);
    }
    ?>
  </select>
  <label>SEX: </label>
  <input type="radio" name="sex" checked="checked" value="1"> 
  <input type="radio" name="sex" value="2">
  <label>Number of limbs: </label>
  <input type="radio" name="limbs" checked="checked" value="1">
  <input type="radio" name="limbs" value="2">
  <input type="radio" name="limbs" value="3">
  <input type="radio" name="limbs" value="4">
  <input type="radio" name="limbs" value="5">
  <input type="submit" value="ok" />
  <div>
  <label>ABILITY: </label>
  <select name="ability" multiple="multiple">
    <option value="0">Бессмертие</option>
    <option value="1">Прохождение сквозь стены</option>
    <option value="2">Левитация</option>
    <option value="3">Автоперевод</option>
  </select>
  </div>
  <label>Ваша Биография: </label>
  <textarea name="biography"></textarea>

</form>



