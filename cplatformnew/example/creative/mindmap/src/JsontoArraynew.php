<?php

	$json = $_POST["json"];
	//$json = '{"id":"69209718-d4d5-40b1-aa70-19573590c641","title":"Central%20Idea","mindmap":{"root":{"id":"bc4d1ff6-06e1-438c-9bb7-82c45e674ce6","parentId":null,"text":{"caption":"Central%20Idea","font":{"style":"normal","weight":"bold","decoration":"none","size":20,"color":"#000000"}},"offset":{"x":0,"y":0},"foldChildren":false,"branchColor":"#000000","children":[{"id":"7570addb-8354-4020-9437-56454f891273","parentId":"bc4d1ff6-06e1-438c-9bb7-82c45e674ce6","text":{"caption":"New Idea","font":{"style":"normal","weight":"normal","decoration":"none","size":15,"color":"#000000"}},"offset":{"x":-116,"y":95},"foldChildren":false,"branchColor":"#c3660e","children":[]},{"id":"43ea3085-9ff6-4ab8-81a9-22a1e8725f82","parentId":"bc4d1ff6-06e1-438c-9bb7-82c45e674ce6","text":{"caption":"New Idea","font":{"style":"normal","weight":"normal","decoration":"none","size":15,"color":"#000000"}},"offset":{"x":1,"y":-122},"foldChildren":false,"branchColor":"#f882e3","children":[{"id":"36ccc0b8-85dd-4016-b4c8-da09ac9f9817","parentId":"43ea3085-9ff6-4ab8-81a9-22a1e8725f82","text":{"caption":"New Idea","font":{"style":"normal","weight":"normal","decoration":"none","size":15,"color":"#000000"}},"offset":{"x":282,"y":-230},"foldChildren":false,"branchColor":"#f882e3","children":[]}]},{"id":"e2632e45-3d2b-4434-94be-1c8427adc2fd","parentId":"bc4d1ff6-06e1-438c-9bb7-82c45e674ce6","text":{"caption":"New Idea","font":{"style":"normal","weight":"normal","decoration":"none","size":15,"color":"#000000"}},"offset":{"x":305,"y":-1},"foldChildren":false,"branchColor":"#e49cfc","children":[]},{"id":"cb7c97cb-1bbf-44df-8d44-31c0d40cb4fc","parentId":"bc4d1ff6-06e1-438c-9bb7-82c45e674ce6","text":{"caption":"New Idea","font":{"style":"normal","weight":"normal","decoration":"none","size":15,"color":"#000000"}},"offset":{"x":57,"y":110},"foldChildren":false,"branchColor":"#f35f16","children":[]}]}},"dates":{"created":1420620663257,"modified":1420620669300},"dimensions":{"x":4000,"y":2000},"autosave":false}';
	    $newjson["id"]="";
		$newjson["parentId"]="";
		$newjson["caption"]="";
	function std_class_object_to_array($stdclassobject)
	{	
		global  $Id;
	
	    global  $parentId;
		
		global  $caption;
	
	    $_array = is_object($stdclassobject) ? get_object_vars($stdclassobject) : $stdclassobject;

	    foreach ($_array as $key => $value) 
		{
	        $value = (is_array($value) || is_object($value)) ? std_class_object_to_array($value) : $value;
	        $array[$key] = $value;
			
			if( $key == "id" && !is_array($array[$key]) )
			{
				//echo $key.": ".$array[$key]."<br><br>";
				
				$Id[] = $array[$key];
			}
			else if( $key == "parentId" && !is_array($array[$key]) )
			{
				//echo $key.": ".$array[$key]."<br><br>";
				
				$parentId[] = $array[$key];
			}
			else if( $key == "caption" && !is_array($array[$key]) )
			{
				//echo $key.": ".$array[$key]."<br><br>";
				
				$caption[] = $array[$key];
			}
	    }

	    return @$array;
	}
    
	std_class_object_to_array(json_decode($json));
	
	//var_dump($Id); //第一個index是最外層的，不是node的id
	
	//var_dump($parentId);
	
	for( $i=1; $i < count($Id) ; $i++)
	{
		//echo "id: ".$Id[$i].", parentId: ".$parentId[$i-1].", caption: ".$caption[$i-1]."<br><br>";
		if($newjson["id"]=="")
		{
		$newjson["id"]=$Id[$i];
		$newjson["parentId"]=$parentId[$i-1];
		$newjson["caption"]=$caption[$i-1];

		}

		else
		{
			$newjson["id"]=$newjson["id"].",".$Id[$i];
			$newjson["parentId"]=$newjson["parentId"].",".$parentId[$i-1];
			$newjson["caption"]=$newjson["caption"].",".$caption[$i-1];
		}
	}
	



	//$encode= json_encode(std_class_object_to_array(json_decode($json)));
	//echo $encode;
	echo json_encode($newjson);
?>
