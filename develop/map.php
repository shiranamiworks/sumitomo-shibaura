<!doctype html><?php
 $page_settings = array(
  "directory_pos" => "./",
  "page_id" => "map",
  "gnav_set" => "map",
  "page_class" => "map",
  "url" => "map.html",
  "title" => "���n�ē��}�b",
  "keywords" => "���n�ē��},",
  "description" => "���n�ē��}�y�[�W�B",
  "add_stylesheet" => ["css/map.css"],
  "add_script" =>  ["js/map.js"],
  "canonical_page_id" => "map",  
  "logo_text" => "���n�ē��}�b"
);
?>

<?php require(INCLUDES."header.php"); ?>

<main>
<section id="submaincontainer">
            	<h2 class="ttl"><img src="images/map/ttl.jpg" alt="���n�ē��}"></h2>
            	<div class="mapArea"><img src="images/map/map.jpg" alt="���n�ē��}" id="map1"></div>
				<p class="zip">�����s�`��ŉY2����75�i�n�ԁj<br><span>���Z���\���ł͂���܂���B</span></p>
				<div id="btnArea">
					<div id="GoogleMap"><a href="https://maps.app.goo.gl/LsK6ztUNzeDibFMB9" target="_blank"><img src="images/map/btn_googlemap.jpg" alt="Google Map"></a></div>
					<div id="PrintMap"><a href="JavaScript:;" onclick="print_out(); return false;"><img src="images/map/btn_print.jpg" alt="���" class="pc"></a></div>
				</div>

	            <div class="container">
	                <p class="txt">��1.�s�c�O�c���E�󑐐��u�O�c�v�wA7�o���k��10���B�������[�g�̏ꍇ�i�C�x���g���{�������j�ł���A�������[�g�̏ꍇ��A9�o���k��13���B<br>���f�ڂ̒n�}�͈ꕔ���H�E�{�ݓ��𔲐����Ă��܂��B</p>
	            </div>
            </section>
</main>

<?php require(INCLUDES."footer.php"); ?>
</body>
</html>
