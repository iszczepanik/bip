<?php
class Subdomains
{
    const example = 1;
	const example2 = 2;
	const spddar = 3;
    
    const exampleLabel = "example";
	const example2Label = "example2";
	const spddarLabel = "spddar";
	
	private static $enum = array
	(
		1 => "example" , 2 => "example2" , 3 => "spddar"
	);

	public static function GetOrdinal($name) 
	{
		return array_search($name, self::$enum);
	}

	public static function GetDescription($ordinal) 
	{
		return self::$enum[$ordinal];
	}
	
	public static function GetSubdomainsArray()
	{
		return array(
			Subdomains::example=>Subdomains::exampleLabel, 
			Subdomains::example2=>Subdomains::example2Label, 
			Subdomains::spddar=>Subdomains::spddarLabel, 
		);
	}
}