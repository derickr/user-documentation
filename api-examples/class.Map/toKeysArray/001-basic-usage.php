<?hh

namespace Hack\UserDocumentation\API\Examples\Map\ToKeysArray;

$m = Map {
  'red' => '#ff0000',
  'green' => '#00ff00',
  'blue' => '#0000ff',
  'yellow' => '#ffff00',
};

$keys_array = $m->toKeysArray();

var_dump(is_array($keys_array));
var_dump($keys_array);
