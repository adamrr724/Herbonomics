<?php\n\n\trequire_once 'src/Class.php';\n\n\tclass ClassTest extends PHPUnit_Framework_TestCase\n\t{\n\n\t\tfunction test_makeTitleCase_oneWord()\n\t\t{\n\t\t//Arrange\n\t\t$test_TitleCaseGenerator = new TitleCaseGenerator;\n\t\t$input = 'beowulf';\n\n\t\t//Act\n\t\t$result = $test_TitleCaseGenerator->makeTitleCase($input);\n\n\t\t//Assert\n\t\t$this->assertEquals('Beowulf', $result);\n\t\t}\n\t}\n\n?>
