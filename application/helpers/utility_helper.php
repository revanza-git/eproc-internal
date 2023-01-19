<?php
function default_date($date){
	$month = array(
				1	=> 	'Januari',
				2	=>	'Februari',
				3	=>	'Maret',
				4	=>	'April',
				5	=>	'Mei',
				6	=>	'Juni',
				7	=>	'Juli',
				8	=>	'Agustus',
				9	=>	'September',
				10	=>	'Oktober',
				11	=>	'November',
				12	=> 	'Desember');
  if($date=='lifetime'){
    return 'Seumur Hidup';
  }
	return date('d',strtotime($date)) .' '. $month[date('n',strtotime($date))] .' '.date('Y',strtotime($date));
}

function tanggal(){
  return date('Y-m-d');
}
function get_hari($date){
  $day = array(
        1 =>  'Senin',
        2 =>  'Selasa',
        3 =>  'Rabu',
        4 =>  'Kamis',
        5 =>  'Jumat',
        6 =>  'Sabtu',
        7 =>  'Minggu');

  return $day[date('N',strtotime($date))];
}
function name_generator($name)
{
  $rand = '';
  $array = explode('.' , $name);
  $length = count($array)-1;  
  
  $tgl = date("d");
  $bln = date("m");
  $thn = date("y");
  
  $jam = date("h");
  $mnt = date("i");
  $dtk = date("s");
  
  for($i=0;$i<3;$i++)
    $rand .= rand(0,9);
     
  $ext = $array[$length];
  $new = $tgl.$bln.$thn."_".$jam.$mnt.$dtk."_".$rand.".".$ext;
  return $new; 
}

function get_month($date){
  $month = array(
        1 =>  'Januari',
        2 =>  'Februari',
        3 =>  'Maret',
        4 =>  'April',
        5 =>  'Mei',
        6 =>  'Juni',
        7 =>  'Juli',
        8 =>  'Agustus',
        9 =>  'September',
        10  =>  'Oktober',
        11  =>  'November',
        12  =>  'Desember');
  return $month[date('n',strtotime($date))];
}
function get_range_date($date1,$date2){
	return ceil((strtotime($date1) - strtotime($date2))/86400)+1;
}
function terbilang($x)
{
  $abil = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
  if ($x < 12)
    return " " . $abil[$x];
  elseif ($x < 20)
    return terbilang($x - 10) . "belas";
  elseif ($x < 100)
    return terbilang($x / 10) . " puluh" . terbilang($x % 10);
  elseif ($x < 200)
    return " seratus" . terbilang($x - 100);
  elseif ($x < 1000)
    return terbilang($x / 100) . " ratus" . terbilang($x % 100);
  elseif ($x < 2000)
    return " seribu" . terbilang($x - 1000);
  elseif ($x < 1000000)
    return terbilang($x / 1000) . " ribu" . terbilang($x % 1000);
  elseif ($x < 1000000000)
    return terbilang($x / 1000000) . " juta" . terbilang($x % 1000000);
}
function currency($currency){
    return preg_replace("/[,]/", "", $currency);
  }

function showError($msg){
  if($msg!='') echo '<div class="alert alert-danger">'.$msg.'</div>';
}

function timestamp(){
  return date('Y-m-d H:i:s');
}
function email($to,$message,$subject){
  $CI =& get_instance();
  $CI->load->library('email');
  $CI->email->clear(TRUE);

  $CI->email->from('tms@pgn.co.id', 'TMS PGN');
  $CI->email->to($to); 

  // $CI->email->bcc('muarifgustiar@gmail.com'); 
  $CI->email->subject($subject);
  
  $CI->email->message($message);  
  $CI->email->send();
  // echo $CI->email->print_debugger();
}
function password_generator()
  {
    $sessid = '';
    $to_rand = array("T", "v", "q", "L", "u", "2", "3", "g", "m", "M", "O", "t", "N", "i", "9", "h", "8", "k", "K", "W", "I", "V", "1", "J", "p", "H", "y", "R", "6", "f", "U", "b", "4", "d", "s", "7", "z", "S", "P", "n", "Z", "G", "C", "w", "a", "5", "o", "A", "l", "c", "F", "Q", "X", "j", "D", "r", "Y", "x", "e", "B", "0", "E");
          
    for($i=0;$i<10;$i++){
      $angka = rand(0,61);
      $sessid .= $to_rand[$angka]; 
    }
    
    return $sessid;
  }
  
function roman2number($roman){
    $conv = array(
        array("letter" => 'I', "number" => 1),
        array("letter" => 'V', "number" => 5),
        array("letter" => 'X', "number" => 10),
        array("letter" => 'L', "number" => 50),
        array("letter" => 'C', "number" => 100),
        array("letter" => 'D', "number" => 500),
        array("letter" => 'M', "number" => 1000),
        array("letter" => 0, "number" => 0)
    );
    $arabic = 0;
    $state = 0;
    $sidx = 0;
    $len = strlen($roman);

    while ($len >= 0) {
        $i = 0;
        $sidx = $len;

        while ($conv[$i]['number'] > 0) {
            if (strtoupper(@$roman[$sidx]) == $conv[$i]['letter']) {
                if ($state > $conv[$i]['number']) {
                    $arabic -= $conv[$i]['number'];
                } else {
                    $arabic += $conv[$i]['number'];
                    $state = $conv[$i]['number'];
                }
            }
            $i++;
        }

        $len--;
    }

    return($arabic);
}


function number2roman($num,$isUpper=true) {
    $n = intval($num);
    $res = '';

    /*** roman_numerals array ***/
    $roman_numerals = array(
        'M' => 1000,
        'CM' => 900,
        'D' => 500,
        'CD' => 400,
        'C' => 100,
        'XC' => 90,
        'L' => 50,
        'XL' => 40,
        'X' => 10,
        'IX' => 9,
        'V' => 5,
        'IV' => 4,
        'I' => 1
    );

    foreach ($roman_numerals as $roman => $number)
    {
        /*** divide to get matches ***/
        $matches = intval($n / $number);

        /*** assign the roman char * $matches ***/
        $res .= str_repeat($roman, $matches);

        /*** substract from the number ***/
        $n = $n % $number;
    }

    /*** return the res ***/
    if($isUpper) return $res;
    else return strtolower($res);
}