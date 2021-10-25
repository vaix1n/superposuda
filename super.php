		$postdata = 
		    array(
		        'apiKey' => 'QlnRWTTWw9lv3kjxy1A8byjUmBQedYqb',
		        'site' => 'test',
		        'order' => json_encode(array(
		        	'number' => '7111998', 
		        	'lastName' => 'Nuzhdaev', 
		        	'firstName' => 'Dmitry', 
		        	'patronymic' => 'Sergeevich', 
		        	'orderType' => 'fizik', 
		        	'orderMethod' => 'test',
		        	'customerComment' => 'https://github.com/vaix1n/superposuda/', 
		        	'status' => 'trouble',
		        	'items' => array(
		        		'0' => array(
		        			'externalIds' => array(
		        				'0'=>array('code' => 'AZ105R',
		        					'value' => 'Azalita'
		        				)
		        			),
		        			'comment' => 'тестовое задание'
		        		)
		        	)
		        	
		        ))

		    );

       $ch = curl_init('https://superposuda.retailcrm.ru/api/v5/orders/create'); 

       $json_post = http_build_query($postdata);

       curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded')); 
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
       curl_setopt($ch, CURLOPT_POST, 1); 
       curl_setopt($ch, CURLOPT_POSTFIELDS, $json_post); 
       curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 
       
       $result = curl_exec($ch); 
       curl_close($ch); 
