<?php
// https://www.codewars.com/kata/597770e98b4b340e5b000071
function fileNameExtractor(string $dirtyFileName): string
{
  return trim(ltrim(pathinfo($dirtyFileName, PATHINFO_FILENAME), join(range(0, 9))), '_');
}
?>