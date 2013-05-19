<?php

class Image //extends CActiveRecord
{
    public $image;
    public $errors;
	private static $LOGO_FILE = "LOGO_FILE";
	
	public static function GetLogo()
	{
		if (isset($_SESSION[Image::$LOGO_FILE]) && $_SESSION[Image::$LOGO_FILE] != "none")
			return ($_SESSION[Image::$LOGO_FILE]);

		if (file_exists('img/'.Yii::app()->request->subdomain.".png")) { $_SESSION[Image::$LOGO_FILE] = 'img/'.Yii::app()->request->subdomain.".png"; }
		if (file_exists('img/'.Yii::app()->request->subdomain.".jpg")) { $_SESSION[Image::$LOGO_FILE] = 'img/'.Yii::app()->request->subdomain.".jpg"; }
		if (file_exists('img/'.Yii::app()->request->subdomain.".gif")) { $_SESSION[Image::$LOGO_FILE] = 'img/'.Yii::app()->request->subdomain.".gif"; }
		
		if (isset($_SESSION[Image::$LOGO_FILE]))
			return $_SESSION[Image::$LOGO_FILE];
		
		$_SESSION[Image::$LOGO_FILE] = "none";
		return $_SESSION[Image::$LOGO_FILE];
	}
 
	private function rename()
	{
		$file_parts = explode('.', $this->image->name);
		$extension = end($file_parts);
		return Yii::app()->request->subdomain.".".$extension;
	}
	
	private function resize( $plik, $szerokosc = 220 )
	{
		// pobieramy rozszerzenie pliku, na tej podstawie
		// korzystamy potem z odpowiednich funkcji GD
		$i = explode('.', $plik);

		// rozszerzeniem pliku jest ostatni element tablicy $i
		$rozszerzenie = end($i);

		// jeœli nie mamy jpega, gifa lub png zwracamy false.
		if($rozszerzenie !== 'jpg' && $rozszerzenie !== 'gif' && $rozszerzenie !== 'png') 
			return false;

		// pobieramy rozmiary obrazka
		list($img_szer, $img_wys) = getimagesize($plik);

		// obliczamy proporcje boków
		$proporcje = $img_wys / $img_szer;

		// na tej podstawie obliczamy wysokoœæ
		$wysokosc = $szerokosc * $proporcje;

		// tworzymy nowy obrazek o zadanym rozmiarze
		// korzystamy tu z funkcji biblioteki GD
		// która musi byæ do³¹czona do twojej instalacji PHP,
		// najpierw tworzymy canvas.
		$canvas = imagecreatetruecolor($szerokosc, $wysokosc);
		switch($rozszerzenie) {
		case 'jpg':
		$org = imagecreatefromjpeg($plik);
		break;
		case 'gif':
		$org = imagecreatefromgif($plik);
		break;
		case 'png':
		$org = imagecreatefrompng($plik);
		break;
		}

		// kopiujemy obraz na nowy canvas
		imagecopyresampled($canvas, $org, 0, 0, 0, 0,
		$szerokosc, $wysokosc, $img_szer, $img_wys);

		// zapisujemy jako jpeg, jakoœæ 100/100
		if(imagejpeg($canvas, $plik, 100)) {
			return true;
		} 
		else {
			return false;
		}
	}
 
	public function save()
	{ 
		if (file_exists('img/'.Yii::app()->request->subdomain.".png")) { unlink('img/'.Yii::app()->request->subdomain.".png"); }
		if (file_exists('img/'.Yii::app()->request->subdomain.".jpg")) { unlink('img/'.Yii::app()->request->subdomain.".jpg"); }
		if (file_exists('img/'.Yii::app()->request->subdomain.".gif")) { unlink('img/'.Yii::app()->request->subdomain.".gif"); }
		
		$newName = $this->rename();
		if ($this->image->saveAs('img/'.$newName))
		{
			$this->resize('img/'.$newName);
			$_SESSION[Image::$LOGO_FILE] = null;
			return true; 
		}
		
		$errors = "Nie mo¿na zapisaæ pliku.";
		return false;
	}
 
    public function rules()
    {
        return array(
            array('image', 'file', 'types'=>'jpg, gif, png'),
        );
    }
}