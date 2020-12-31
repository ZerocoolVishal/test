<?php


echo "<h2>Git Deploy</h2><hr>";

echo "<pre>";
$last_line = system('git status', $retval);
echo "</pre>";

echo '
</pre>
<hr />Last line of the output: ' . $last_line . '
<hr />Return value: ' . $retval;
