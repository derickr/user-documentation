<?hh

namespace Hack\UserDocumentation\API\Examples\Set\FirstKey;

$s = Set {'red', 'green', 'blue', 'yellow'};
var_dump($s->firstKey());

$s = Set {};
var_dump($s->firstKey());
