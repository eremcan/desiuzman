<style>
.exam_sheet_column_left  {display:none;}
</style>
<?php

// add_shortcode('net_test', 'arimedya_exam_shortcode_func');

function get_exam($id, $page)
{	
	$siklar = array("A","B","C","D","E","F");
	global $wpdb;
	$questions = $wpdb->get_results( 
				"SELECT * FROM arimedya_exam_answers WHERE quizID = '".$id."' order by id ASC limit 0, 50"
			);		
	$exam = $wpdb->get_row( 
				"SELECT * FROM arimedya_exam_testing WHERE quizID = '".$id."'"
			);			
	$say 		= $wpdb->get_results(
				"SELECT COUNT(*) as total FROM arimedya_exam_answers WHERE quizID = '".$id."' order by id ASC limit 0, 50"
	);
	$toplam 		= $say[0]->total;	
## REKLAM ##
	$count1 = $toplam;
	$specific = array();
	$hey = 1;

	foreach ( $questions as $attach ) {
		$specific[$attach->id] = $hey;
		++$hey;
	}	

	$question_ads 	= get_option("question_ads","no");
	$question_ads 	= trim(stripslashes($question_ads));
	$question_nos 	= get_option("question_nos","no");
	$adsNumbers 	= explode(',', $question_nos);
## REKLAM ##	
	
	$i = 0;
	$sayac1 = 400;
	$sayac2 = 401;
	$count = 1;
	$adSay = 1;
	echo '<div id="yenimufredat" data-user-friendly-name="Yeni Müfredat" class="exam-section">';
	foreach($questions as $say=>$question)
	{
		$i++;
		$answers = explode("|||", $question->answers);
		$option = explode("|||", $question->correct);
    if ($count%10 == 1)
    {  
       echo '<div class="exam_sheet" style="padding: 0 !important;">

          <div class="exam_sheet_page_information_text"><a href="/"><img src="/wp-content/themes/eduka/nettest.png" width="220" height="32" alt="logo"></a></div>
       
		<div class="konubilgi" style=" margin: 4px;text-align: center;height: 40px;font-size: 16px;">
		<span  style="font-weight: 600;">'.$exam->quiz_name.'</span><br>
		'.$exam->quiz_sub_name.'
		</div><div class="contenttest">';
    }
	
    if ($count%5 == 1)
    {  
         if ($count%2 == 1){
			 echo '
			 <!--sınav icerik başlar--> <div class="exam_sheet_column_left">';
		 } else{
			 echo '<!--sınav icerik başlar--> <div class="exam_sheet_column_right">';
		 }
    }	

?>
   <div class="question" data-question-id="<?=$i?>">
        <div class="question_number" id="yenimufredat<?=$i?>"><?=$i?>.</div>
        <div class="question_content">
           
               <?=stripslashes($question->question);?>
            <div class="answer">

				<?php
				$sakla  = array();
				foreach($answers as $answer_say=>$answer)
				{
					$sayac1++;
					$sayac2++;
					$correct_d = $option[$answer_say];
					if($correct_d == 1)
					{
						$correct = "True";
						$sakla[] .= $answer_say;
					}else{
						$correct = "False";
					}
				?>
				<div class="choice choice_<?=$sayac1?>">
					<input type="radio" id="choice_<?=$sayac1?>" class="input-answer" name="soru_YeniMufredat_<?=$i?>" data-correct="<?=$correct?>" data-question="<?=$i?>" data-option-text="<?=$siklar[$answer_say]?>">
					<label for="choice_<?=$sayac1?>">
				   <strong><?=$siklar[$answer_say]?>. </strong> <?=stripslashes($answer);?>
					</label>
				</div>
				<?php }?>
	


            </div>
			
		 <div class="result">
			<span class="hidden"><strong style="color: #ADA4A4;">Doğru Cevap: </strong>"<?=$siklar[$sakla[0]]?>" <?=stripslashes($answers[$sakla[0]]);?></span>
		</div>
		<div style="margin-bottom: 10px;float: left;">
			<?php if($exam->answer_show == 1){?><label for="kutucuk<?=$i?>" class="cevapgoster">Cevabı Göster</label><?php }?>
			<?php if($exam->excerpt_show == 1){?><button class="ozetgoster" Onclick="gostergizle()">Özet</button><?php }?>
			<input type="checkbox" id="kutucuk<?=$i?>" class="ackapa<?=$i?>" checked>
			<div class="adobewordpress<?=$i?>">
				<strong style="color: #D2322D;"><strong style="color: #ADA4A4;">Doğru Cevap: </strong>"<?=$siklar[$sakla[0]]?>" <?=stripslashes($answers[$sakla[0]]);?></strong> <br>
				<strong style="color: #39B3D7;">Soru Açıklaması</strong> <br>
				<?php $ari_aciklama = str_replace("\r\n",'<br>',trim($question->q_desc)); echo stripslashes($ari_aciklama);?>
			</div>
		</div>	
			<div class="test-reklam-alani">
				<?php 
				$key = array_search($adSay, $adsNumbers);
				if ($key !== false)
				{
					echo $question_ads;
				}
				?>
			</div>
			
    </div>
        <div class="clear"></div>
    </div>
<?php
	
    if ($count%5 == 0)
    {  
         if ($count%2 == 1){
			 echo '</div><!--sınav icerik biter--><div class="exam_sheet_middle_line"></div>';
		 } else{
			 echo '</div><!--sınav icerik biter-->';
		 }
    }
	
	if($count == $toplam)
	{
		echo '
<div id="testbitti">
TEST BİTTİ.<br>
CEVAPLARINIZI KONTROL EDİNİZ.
</div>
	<div class="check-answers-button">
        <input type="button" onclick="gstr()" value="Cevapları Kontrol Et" class="check-answers-button-style" id="check-answers">
    </div>
	
	<div id="test-results" style="padding-bottom: 10px;">

    </div>';
	}
    if ($count%10 == 0)
    {  
       echo '<div class="clear"></div>
        </div>

      <div class="exam_sheet_page_number_text"></div>
    </div>';
    }  
    $count++;
	$adSay++;
	}
	//if ($count%5 != 1) echo "</div>";
	echo '</div>';
	
	if($exam->excerpt_show == 1)
	{
		$ari_ozet 			= stripslashes($exam->excerpt);
		$ari_ozet 			= str_replace("\r\n",'<br>',trim($ari_ozet));
		echo '<div id="panel">
			<h3>Ünite Özeti <button class="uniteozet" Onclick="gizle()">X</button></h3>
				<div class="nano">
				<div class="nano-content" style="padding: 6px;">
					<div class="konu">'.$ari_ozet.'</div>
				</div>
				</div>
			</div>';		
	}
}

function arimedya_exam_shortcode_func( $atts )
{
	$quizID = $atts['id'];
	
?>

<?php get_exam($quizID, 1);?>	




<div class="bottom-fixer"></div>

    <script src="http://jqueryjs.googlecode.com/files/jquery-1.3.2.min.js" type="text/javascript"></script>
   
    
	
	<?php
		echo '<script src="' .PLUGIN_URL . '/css/sinavlayout.js' . '" type="text/javascript"></script>';	
	?>
	
	<?php
		echo '<link rel="stylesheet" type="text/css" href="' .PLUGIN_URL . '/css/style.css' . '"> ';	
	?>
	
	
	
    <script type="text/javascript">
		function goster()
		{

		$("div#panel").show(100); 

		}

		function gizle()
		{

		$("div#panel").hide(100); 

		}

		function gostergizle()
		{

		$("div#panel").toggle(100); 

		}


		$(document).ready(function () {
		$("div#panel").hide(100); 
		});
	</script>
    <script id="examSectionList" type="text/x-jquery-tmpl">
       	   <div>  </div>
        <div class="results_container">
            {{each examSections}}
            <div class="results_column">
                <div class="results_column_header">
                    <span></span>
					
                </div>
				  <div class="general-results">
                
                    <div class="puan"><div class="cevapsonuc">${successRate}</div>Puan</div> 
					
					
					<div class="dogru"><div class="cevapsonuc">${rightAnswerCount}</div>Doğru</div> 	
					<div class="yanlis"><div class="cevapsonuc">${wrongAnswerCount}</div>Yanlış</div> 
					<div class="bos"><div class="cevapsonuc">${emptyAnswerCount}</div>Boş</div> 
                   <div class="clear"></div>
				   
				<div class="cevapanahtari" style="margin-top: 12px; border-bottom: 4px solid #f6f6f6;padding-bottom: 10px; margin-bottom: 4px;">Cevap Anahtarı</div>
				
                </div>
                {{each questions}}
				
                <a href="#${target}" style="text-decoration: none;">
				
                    <div class="results_column_line {{if score == 1}}rigth-answer{{else score == -1}}wrong-answer{{else score == 0}}empty-answer{{/if}}">
                       <div><span style="  font-weight: 600;width: 64px;    text-align: right;    float: left;">${id}. Soru </span>
					   <span style="  font-weight: 600;width: 50px;    text-align: right;    float: left;">${selectedOption}</span></div>
                       {{if score !== 1}}
                        <span style=" font-weight: 600;   width: 50px;    text-align: right;    float: left;"> ${rightOption}</span>
                        {{/if}}
                    </div>
                </a>
                {{/each}}
              
            </div>
            {{/each}}
        </div>
        <div class="results-footer">
            <span></span><br />
           buraya yerleştir
		   
		   
		   
		   
        </div>
    </script>
    




	<style type="text/css">
		.altfooter{display: none;}
	</style>
	

<?php
}

?>

<div id=""></div>



       <script src="http://www.prototurk.com/p/theme/scripts/jquery-1.11.1.min.js?v=4" type="text/javascript"></script>

   <script type="text/javascript">
	function gizgos()
		{
		$("#formx").hide(100); 
	$(".exam_sheet_column_left").show(100); 		
		}
function gstr()
		{
	setTimeout(function(){

	
var cevappuan = $('.puan').text();
var cevapdogru = $('.dogru').text();
var cevapyanlis = $('.yanlis').text();
var cevapbos = $('.bos').text();
document.getElementById('puancx').value=cevappuan ; 
document.getElementById('dogrucx').value=cevapdogru ; 
document.getElementById('yanliscx').value=cevapyanlis ; 
document.getElementById('boscx').value=cevapbos ; 




		
var veriler = $('#formxform').serialize(); 
$.ajax({ 
type: "POST", 
url: "mesaj.php", 
data: veriler, 
success:function(cevap){ 
$("#mesajgonder2").html(""+cevap); 
} 
})




}, 1000);		}
		
		</script>
		<div   id="formx">
		<form  method="POST" id="formxform">
	İsim : <input  id="isim" name="isim">
	<p>Soyisim : <input  id="soyisim" name="soyisim" >
<p>	Meslek : <input  id="meslek" name="meslek">
	<p>Kurum/Okul : <input  name="kurum" id="kurum">
	<p>E Mail: <input  id="email" name="email">
	<p>Telefon: <input  id="telefon" name="telefon">
<p>	<select name="egitim" id="egitim">
	<option>Toefl</option>
	<option>Ielts</option>
	<option>Gmat</option>
	<option>Gre</option>
	<option>Sat</option>
	<option>Act</option>
	</select>
	<input  id="puancx"  name="puancx" style="display:none;">
	<input  id="dogrucx" name="dogrucx"  style="display:none;">
	<input  id="yanliscx"  name="yanliscx"  style="display:none;">
	<input  id="boscx"name="boscx"   style="display:none;">
	
	</form><input onclick="gizgos()"  type="submit" value="Teste Başla">
	</div>
	<div class="exam_sheet_column_left">asd</div>
	