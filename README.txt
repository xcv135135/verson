<<<<<<< HEAD
creative_20161210_v1	原檔案路徑為cplatformnew/example/  原檔案名稱為creative

						1. 案開啟可以開啟上一次的心智圖
								透過OpenDocument.js中的mindmapModel.setDocument(mindmaps.Document.fromJSON(msg));
								
						2. 案儲存save會先把沒換顏色的心智圖存起來  
								透過SaveDocument.js中的function savejson(x)
								
						3. alert('儲存完成，正在計算分群結果，請稍後...');
						
						4. 再把save的案件視窗關起來  
								透過SaveDocument.js中的view.hideSaveDialog();
								
						5. 在跳至test9.php分群換顏色
								test9.php中加入	<?php session_start(); ?>
												include("mysql_connect.inc.php");
												$user = $_SESSION['username'];
												$mindmap = $_POST['mindmap'];
								test9.php回傳改好顏色的$json
								透過SaveDocument.js中的function gototest9(x)
								
						6. 把換好顏色的心智圖顯示出來
								msg = JSON.stringify(msg);
								透過SaveDocument.js中的mindmapModel.setDocument(mindmaps.Document.fromJSON(msg));
								
						7. alert('計算完成');
						
						8. 把跳至應用頁面註解起來  
								// window.location.href = "cmapapp-bootstrap-master/index.php";
								
								123321
=======
creative_20161210_v1	原檔案路徑為cplatformnew/example/  原檔案名稱為creative

						1. 案開啟可以開啟上一次的心智圖
								透過OpenDocument.js中的mindmapModel.setDocument(mindmaps.Document.fromJSON(msg));
								
						2. 案儲存save會先把沒換顏色的心智圖存起來  
								透過SaveDocument.js中的function savejson(x)
								
						3. alert('儲存完成，正在計算分群結果，請稍後...');
						
						4. 再把save的案件視窗關起來  
								透過SaveDocument.js中的view.hideSaveDialog();
								
						5. 在跳至test9.php分群換顏色
								test9.php中加入	<?php session_start(); ?>
												include("mysql_connect.inc.php");
												$user = $_SESSION['username'];
												$mindmap = $_POST['mindmap'];
								test9.php回傳改好顏色的$json
								透過SaveDocument.js中的function gototest9(x)
								
						6. 把換好顏色的心智圖顯示出來
								msg = JSON.stringify(msg);
								透過SaveDocument.js中的mindmapModel.setDocument(mindmaps.Document.fromJSON(msg));
								
						7. alert('計算完成');
						
						8. 把跳至應用頁面註解起來  
								// window.location.href = "cmapapp-bootstrap-master/index.php";
								
								123321
>>>>>>> d3b1d8b53dc32b18bb01c9dbcea3283e91f72048
