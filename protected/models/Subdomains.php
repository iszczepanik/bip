<?php
class Subdomains
{
    const example = 1;
	const example2 = 2;
	const spddar = 3;
	const kontra = 4;
	const pomozmysobie = 5;
	const stowdob = 6;
	const asperger = 7;
	const pozytywnezmiany = 8;
	const mrowisko = 9;
	const naszeslaskie = 10;
	const zabrzanskiekobiety = 11;
	const piaskowysmok = 12;
	const dignam = 13;
	const naprawsobiemiasto = 14;
	const babiniec = 15;
	const ceiwr = 16;
	const dlaszopienic = 17;
	const federacjaslask = 18;
	const pkegliwice = 19;
	const nereusz = 20;
	const gniazdo = 21;
	const rtpd = 22;

    const exampleLabel = "example";
	const example2Label = "example2";
	const spddarLabel = "spddar";
	const kontraLabel = "kontra";
	const pomozmysobieLabel = "pomozmysobie";
	const stowdobLabel = "stowdob";
	const aspergerLabel = "asperger";
	const pozytywnezmianyLabel = "pozytywnezmiany";
	const mrowiskoLabel = "mrowisko";
	const naszeslaskieLabel = "naszeslaskie";
	const zabrzanskiekobietyLabel = "zabrzanskiekobiety";
	const piaskowysmokLabel = "piaskowysmok";
	const dignamLabel = "dignam";
	const naprawsobiemiastoLabel = "naprawsobiemiasto";
	const babiniecLabel = "babiniec";
	const ceiwrLabel = "ceiwr";
	const dlaszopienicLabel = "dlaszopienic";
	const federacjaslaskLabel = "federacjaslask";
	const pkegliwiceLabel = "pkegliwice";
	const nereuszLabel = "nereusz";
	const gniazdoLabel = "gniazdo";
	const rtpdLabel = "rtpd";
	
	private static $enum = array
	(
		1 => "example", 
		2 => "example2", 
		3 => "spddar",
		4 => "kontra",
		5 => "pomozmysobie",
		6 => "stowdob",
		7 => "asperger",
		8 => "pozytywnezmiany",
		9 => "mrowisko",
		10 => "naszeslaskie",
		11 => "zabrzanskiekobiety",
		12 => "piaskowysmok",
		13 => "dignam",
		14 => "naprawsobiemiasto",
		15 => "babiniec",
		16 => "ceiwr",
		17 => "dlaszopienic",
		18 => "federacjaslask",
		19 => "pkegliwice",
		20 => "nereusz",
		21 => "gniazdo",
		22 => "rtpd",
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
			Subdomains::kontra=>Subdomains::kontraLabel,
			Subdomains::pomozmysobie=>Subdomains::pomozmysobieLabel,
			Subdomains::stowdob=>Subdomains::stowdobLabel,
			Subdomains::asperger=>Subdomains::aspergerLabel,
			Subdomains::pozytywnezmiany=>Subdomains::pozytywnezmianyLabel,
			Subdomains::mrowisko=>Subdomains::mrowiskoLabel,
			Subdomains::naszeslaskie=>Subdomains::naszeslaskieLabel,
			Subdomains::zabrzanskiekobiety=>Subdomains::zabrzanskiekobietyLabel,
			Subdomains::piaskowysmok=>Subdomains::piaskowysmokLabel,
			Subdomains::dignam=>Subdomains::dignamLabel,
			Subdomains::naprawsobiemiasto=>Subdomains::naprawsobiemiastoLabel,
			Subdomains::babiniec=>Subdomains::babiniecLabel,
			Subdomains::ceiwr=>Subdomains::ceiwrLabel,
			Subdomains::dlaszopienic=>Subdomains::dlaszopienicLabel,
			Subdomains::federacjaslask=>Subdomains::federacjaslaskLabel,
			Subdomains::pkegliwice=>Subdomains::pkegliwiceLabel,
			Subdomains::nereusz=>Subdomains::nereuszLabel,
			Subdomains::gniazdo=>Subdomains::gniazdoLabel,
			Subdomains::rtpd=>Subdomains::rtpdLabel,
			
		);
	}
}