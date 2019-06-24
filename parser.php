<?php

		function parser($adrs,$coin_name){
			$out_arr[0]=1;
			for ($num=0;$num<count($adrs);$num++){
				$adr=trim($adrs[$num]);
				$linc="https://www.blockchain.com/ru/eth/address/${adr}";
				$result = file_get_contents("$linc");
				if($result){
					$pos_first=0;
					$pos_last=0;
					for ($i=0;$i<7;$i++){
						$pos_first=$pos_last;
						$pos_last = strpos((string)$result, (string)$coin_name, $pos_first+ strlen($coin_name));
				
					}
			
					$result = substr($result , $pos_first ,  $pos_last- strlen($coin_name)-$pos_first);
					$last = strrchr($result,' ');
					$last = substr($last , 13);
					$out_arr[$num]=$last;
				}else{
					$out_arr[$num]=0;
				}
				sleep(1);
			}
			return $out_arr;
		}
		
?>
