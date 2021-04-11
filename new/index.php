<?php 
/*
function parse($file){
    $css = file_get_contents($file);
    preg_match_all( '/(?ims)([a-z0-9\s\.\:#_\-@,]+)\{([^\}]*)\}/', $css, $arr);
    $result = array();
    foreach ($arr[0] as $i => $x){
        $selector = trim($arr[1][$i]);
        $rules = explode(';', trim($arr[2][$i]));
        $rules_arr = array();
        foreach ($rules as $strRule){
            if (!empty($strRule)){
                $rule = explode(":", $strRule);
                $rules_arr[trim($rule[0])] = trim($rule[1]);
            }
        }

        $selectors = explode(',', trim($selector));
        foreach ($selectors as $strSel){
            $result[$strSel] = $rules_arr;
        }
    }
    return $result;
}

//trims empty spaces in array elements (recursively trim multidimesional arrays)
function trimData($data){
   if($data == null)
       return null;

   if(is_array($data)){
       return array_map('trimData', $data);
   }else return trim($data);
}


$css1 = parse('style1.css');
$css2 = parse('style2.css');

$css1_keys = array_keys($css1);


foreach($css1_keys as $keys){
	
	if (strpos($keys, 'h1') !== false) { 
    echo $keys." ".$css1[$keys]["font-family"]."<br>";
	}
}


echo "<pre>";
print_r($css1);
echo "</pre>";
*/

include("cssparse.php");
$parsed_css = parse('cssfrom.css');

$css_keys = array_keys($parsed_css);



function get_string_between($string, $start, $end){
    $string = ' ' . $string;
    $ini = strpos($string, $start);
    if ($ini == 0) return '';
    $ini += strlen($start);
    $len = strpos($string, $end, $ini) - $ini;
    return substr($string, $ini, $len);
}


$re = '/class="\s*(.*?)\s*"/s';
$str = file_get_contents("getcss.php");


preg_match_all($re, $str, $matches, PREG_SET_ORDER, 0);

foreach($matches as $class)
{
	//echo $class[1]."<br>";
	
	$class_individual = explode(" ",$class[1]);
	
	foreach($class_individual as $classname)
	{
		$classname = $classname;
		$content = file_get_contents("cssfrom.css");
		
			foreach($css_keys as $css_word){
			if($classname)
			if (strpos($css_word, $classname) !== false) {				
				echo $css_word."{";
				//var_dump($parsed_css[$css_word]);
				foreach(array_keys($parsed_css[$css_word]) as $csstitle)
				{
				echo $csstitle.":".$parsed_css[$css_word][$csstitle].";";
				}
				echo "}";					
			}
			}
	}
	

echo "<pre>";
//print_r($class_individual);
echo "</pre>";
}










$re = '/id="\s*(.*?)\s*"/s';
$str = file_get_contents("getcss.php");

preg_match_all($re, $str, $matches, PREG_SET_ORDER, 0);

foreach($matches as $id)
{
	//echo $class[1]."<br>";
	
	$id_individual = explode(" ",$id[1]);
	
	foreach($id_individual as $idname)
	{
		$classname = "#".$idname;
		$content = file_get_contents("cssfrom.css");
		//preg_match_all('/{(.*?)}/', $content, $matches);
		
		foreach($css_keys as $css_word){
			if($classname)
			if (strpos($css_word, $classname) !== false) {				
				echo $css_word."{";
				//var_dump($parsed_css[$css_word]);
				foreach(array_keys($parsed_css[$css_word]) as $csstitle)
				{
				echo $csstitle.":".$parsed_css[$css_word][$csstitle].";";
				}
				echo "}";
							
			}
		}
	}	

echo "<pre>";
//print_r($class_individual);
echo "</pre>";
}


?>
