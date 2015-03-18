<?php
	include_once("Voertuig.class.php");

	class Sportwagen extends Voertuig
	{

		private $m_bStereoInstallatie;

		public function __set($p_sProperty, $p_vValue)
		{
			parent::__set($p_sProperty, $p_vValue);
			switch($p_sProperty)
			{
				case "Stereo":
					$this->m_bStereoInstallatie = $p_vValue;
					break;
			}
		}

		public function __get($p_sProperty)
		{
			$vResult = parent::__get($p_sProperty);
			switch($p_sProperty)
			{
				case "Stereo":
					$vResult = $this->m_bStereoInstallatie;
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
			$vResult .= "<p>".$this->m_bStereoInstallatie."</p>";
			return $vResult;
    	}

		public function Reserveer()
		{
			
    			echo "<h2>Bestelling voor: </h2>";
				echo "<p>Merk: " .$this->Merk."</p>";
				echo "<p>Aantal deuren: ".$this->Deuren."</p>";
				echo "<p>Aantal passagiers: ".$this->Passagiers."</p>";
				echo "<p>Type auto: Sportwagen</p>";
				echo "<br />";
			

		}

	}
?>