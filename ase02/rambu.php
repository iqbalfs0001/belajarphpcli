<?php

function artiRambu($warna){
	if($warna == "merah"){
		return  "Kendaraan harus berhenti";
	}
	elseif($warna == "kuning"){
		return "Kendaraan bersiap-siap untuk jalan";
	}
	elseif($warna == "hijau"){
		return "Kendaraan harus jalan";
	}
	elseif($warna == "hitam"){
		return "Lampu lalu lintas sedang mati";
	}
	else{
		return "Lampu lalu lintas sedang rusak";
	}
}

echo "apa arti warna dalam rambu lalu lintas.\n\n";

while(true){

	echo "warna : ";
	$input = trim(fgets(STDIN));
	if($input == "exit"){
		break;
	}
	else{
		echo "{$input} : ".artiRambu($input)."\n\n";
	}
}
