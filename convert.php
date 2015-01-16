<script type="text/javascript">
	
	function convertToRupiah(objek) {
	  separator = ".";
	  a = objek.value;
	  b = a.replace(/[^\d]/g,"");
	  c = "";
	  panjang = b.length; 
	  j = 0; 
	  for (i = panjang; i > 0; i--) {
	    j = j + 1;
	    if (((j % 3) == 1) && (j != 1)) {
	      c = b.substr(i-1,1) + separator + c;
	    } else {
	      c = b.substr(i-1,1) + c;
	    }
	  }
	  objek.value = c;

	}       

	function convertToAngka()
	{	var nominal= document.getElementById("nominal").value;
		var angka = parseInt(nominal.replace(/,.*|[^0-9]/g, ''), 10);
		document.getElementById("angka").innerHTML= angka;
	}

</script>

	Nominal Rupiah : Rp <input id="nominal" onkeyup="convertToRupiah(this);" type="text" name="nominal" />
	<button OnClick="convertToAngka();">Ubah</button>
	<div id='angka'></div>


<B>Pada PHP :<br></b>
<?php

function convertToRupiah($angka)
{
	return number_format($angka,0,',','.');
}

function convertToAngka($rupiah)
{
	$int = ereg_replace("[^0-9]", "", $rupiah); 
	return $int;
}


$angka = 1000000;


$harga = convertToRupiah($angka);

$ke_angka = convertToAngka($harga);

echo "
Hasilnya :<br>
Nilai Awal : $angka<br>
Rupiah : Rp $harga,- <br>
Angka Lagi : $ke_angka";

?>



