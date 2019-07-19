<?PHP




$methods = [

	[
		'method'=> 'data->Operational->defineDate()',
		'values'=> ['expected', 'return value'],
	],
	
	[
		'method'=> 'data->Operational->defineDate()',
		'values'=> ['exp2', 'return2'],
	],
	
	[
		'method'=> 'data->Operational->derive()',
		'values'=> ['exp3', 'return3'],
	],


];


$enter = [
	'method' => 'data->Operational->defineDate()',
	'value' => 'test',
];




checkCalls($enter, $methods);


function checkCalls($enter, $methods) {
	
	
	$part = 0;
	$m1 = explode('->', $enter['method']);
	$limit = 0;
	while (!empty($methods) && $part < count($m1) && $limit < 1000) {

		foreach ($methods as $k=>$call) {
			
			$m2 = explode('->', $call['method']);
			if ($m2[$part] !== $m1[$part]) {
				unset($methods[$k]);
			}

			
		}
		$part++;
		
		$limit++;
		
	}
	
	if (!empty($methods) && $part == count($m1)) {
		
		// we found some!
		
		var_dump($methods);
	}
	
}