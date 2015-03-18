<?php
	include_once("Voertuig.class.php");

	class Vrachtwagen extends Voertuig
	{

		private $m_iMaxLast = 30;

		public function __set($p_sProperty, $p_vValue)
		{
			parent::__set($p_sProperty, $p_vValue);
			switch($p_sProperty)
			{
				case "Maxlast":
					$this->m_iMaxLast = $p_vValue;
					break;
			}
		}

		public function __get($p_sProperty)
		{
			$vResult = parent::__get($p_sProperty);
			switch($p_sProperty)
			{
				case "Maxlast":
					$vResult = $this->m_iMaxLast;
					break;
			}
			return $vResult;
		}

		//geen constructor in deze klasse -> pakt constructor van klasse Voertuig
		/*public function __construct($m_bStereoInstallatie)
  		{
      	 	 $vResult = parent::__construct($m_sMerk, $m_iDeuren, $m_iPassagiers);
      	 	 $this->Stereo = $m_bStereoInstallatie;
     	}*/

    	public function __toString()
    	{
        	$vResult = parent::__toString();
			$vResult .= "<p>".$this->m_iMaxLast."</p>";
			return $vResult;
    	}

		public function Reserveer()
		{
			
    			echo "<h2>Bestelling voor: </h2>";
				echo "<p>Merk: " .$this->Merk."</p>";
				echo "<p>Aantal deuren: ".$this->Deuren."</p>";
				echo "<p>Aantal passagiers: ".$this->Passagiers."</p>";
				echo "<p>Type auto: Vrachtwagen</p>";
				echo "<p>Maximum last: ".$this->Maxlast." kg.</p>";
				echo "<br />";
			

		}

	}
?>