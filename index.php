<?php
	// EX_1
	echo "<h4 style='color:red;'>Задание 1</h4>";
	$i = 0;
	while ($i <= 100) {
    	if ($i % 3 == 0) {
        	echo $i . ' ';
    	}
    	$i++;
	}

	// EX_2
	echo "<h4 style='color:red;'>Задание 2</h4>";
	$number = 0;
	do {
    	if ($number == 0) {
    	    echo $number . ' – ноль' . '<br>';
    	    $number++;
    	} elseif ($number % 2 != 0) {
    	    echo $number . ' – нечетное число' . '<br>';
    	    $number++;
    	} else {
    	    echo $number . ' – четное число' . '<br>';
    	    $number++;
    	}
	}while($number <= 10);

	// EX_3
	echo "<h4 style='color:red;'>Задание 3</h4>";
	$cities = [
		"Московская область" => ["Москва", "Зеленоград", "Клин"],
		"Ленинградская область" => ["Санкт-Петербург", "Всеволожск", "Павловск", "Кронштадт"],
		"Рязанская  область" => ["Рязань", "Ряжск", "Касимов"],
	];

	foreach ($cities as $area => $city) {
		echo "<h1>$area</h1>";
		echo implode(", ", $city);
	}

	// EX_4
	echo "<h4 style='color:red;'>Задание 4</h4>";

		$textcyr="пример";
        $textlat="primer";
        $cyr = [
            'а','б','в','г','д','е','ё','ж','з','и','й','к','л','м','н','о','п',
            'р','с','т','у','ф','х','ц','ч','ш','щ','ъ','ы','ь','э','ю','я',
            'А','Б','В','Г','Д','Е','Ё','Ж','З','И','Й','К','Л','М','Н','О','П',
            'Р','С','Т','У','Ф','Х','Ц','Ч','Ш','Щ','Ъ','Ы','Ь','Э','Ю','Я'
        ];
        $lat = [
            'a','b','v','g','d','e','io','zh','z','i','y','k','l','m','n','o','p',
            'r','s','t','u','f','h','ts','ch','sh','sht','a','i','y','e','yu','ya',
            'A','B','V','G','D','E','Io','Zh','Z','I','Y','K','L','M','N','O','P',
            'R','S','T','U','F','H','Ts','Ch','Sh','Sht','A','I','Y','e','Yu','Ya'
        ];
        $textcyr = str_replace($cyr, $lat, $textcyr);
        $textlat = str_replace($lat, $cyr, $textlat);
        echo("$textlat");
        echo("<br>$textcyr");

	// EX_5
	echo "<h4 style='color:red;'>Задание 5</h4>";
	function replaceSpace($string){
	    return preg_replace('/\s/', '_', $string);
	}

	echo replaceSpace('Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку.');


	// EX_6
	echo "<h4 style='color:red;'>Задание 6</h4>";
	$menu  = [
    	'ul',
    	'ul' => ['li', 'li', 'li'],
    	'ul' => ['li','li' => ['ul']]
	];

	function menuRender($arr) {
	    $renderArr[] = '<ul>';
    	foreach ($arr as $key => $value) {
        	if (is_array($value)) {
            	$renderArr[] = '<li>' . $key . menuRender($value) . '</li>';
        	}else {
            	$renderArr[] = '<li>' . $value . '</li>';
        	}
    	}
	    $renderArr[] = '</ul>';
    	return implode($renderArr);
	}
	echo menuRender($menu);

?>