<?php

$people = [
  ['Taro', 25, 'men'],
  ['Jiro', 20, 'men'],
  ['hanako', 16, 'women']
];

foreach ($people as $person) {
  echo $person[2] . '(' . $person[1] . '歳' . $person[2] . ')'. '<br />';
}
