<?php
$people = [
  ['Taro', 25, '男性'],
  ['Jiro', 20, '男性'],
  ['Hanako', 16, '女性']
];

foreach ($people as $person) {
  echo $person[0] . '(' . $person[1] . '歳' . $person[2] . ')'. '<br />';
}
?>