<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<label for="jokes">Pick what type of jokes you like</label>
<div class="combo-wrap">
  <input type="text" id="jokes" role="combobox" aria-owns="joketypes" aria-autocomplete="list" aria-expanded="false" data-active-option="item1" aria-activedescendant="item1">
  <span aria-hidden="true" data-trigger="multiselect"></span>
  <ul id="joketypes" role="listbox">
    <li class="active" role="option" id="item1">Puns</li>
    <li class="option" role="option" id="item2">Riddles</li>
    <li class="option" role="option" id="item3">Observations</li>
    <li class="option" role="option" id="item4">Knock-knock</li>
    <li class="option" role="option" id="item5">One liners</li>
  </ul>
</div>
</body>
</html>