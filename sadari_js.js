$(document).ready(function(){
        //인원수 입력 버튼
		$('.number_form>div').click(function(){
            var num=$('.number').val();
            var numberCheck = /^[1-9]$|^[1-2][0-9]$|^30$/g;
            if(numberCheck.test(num)){
                 $(".number_form").submit();
            }else{
                alert("1에서 30까지 숫자를 입력하세요"); 
                $('.number').val(null);
                $('.number').focus();
            }
        });
            
        //유저 이름 입력 
        $('.sadari_users_save').click(function(){
            var all_user_names='';
            var user_empty=false;
            $('.user_name').each(function(index){
               
               if($(this).val()==''){
                  alert('유저 이름을 입력해주세요');
                  user_empty=true;
                  return false;
               
                   
                  }else{
                    //all_user_names=all_user_names+$(this).val()+',';
                    $('.sadari_top').eq(index).html($(this).val());
                  }
                    
            });
                //유저입력칸이 비어있으면 return
                if(user_empty){
                 return false;  
                }
                
                //문자열 마지막 콤마 제거
                //all_user_names=all_user_names.substring(0, all_user_names.length-1)
                //hidden에 저장
                //$('.all_user_names').val(all_user_names);
                //alert($('.all_user_names').val());
            
            
                //가로줄연습
            
                //유저수 칸 개수
                var user_num=$('.sadari_top').length;
               
                //마지막 가로줄 위치
                var last_garo=$('.sadari_top tr').length-2;
            
                for(var i=0;i<user_num-1;i++){
                    if(i%2==0){
                        for(var eqNum=1; eqNum<=2; eqNum++){
                            
                            //현재 가로줄 위치
                            var now_garo=2;
                            for(var childAddNum=1; now_garo<=last_garo; childAddNum++){
                                $('table.sadari_table tr:nth-child('+now_garo+')').children('td')
                                .eq(2*i+eqNum).css({'border-bottom':'3px solid red'});
                                
                                if(childAddNum%2==0){
                                    now_garo+=2;
                                }else{
                                    now_garo+=3;
                                }
                                //$('table.sadari_table tr:nth-child(5)').children('td').eq(2*i+eqNum).css({'border-bottom':'3px solid red'});
                                //$('table.sadari_table tr:nth-child(7)').children('td').eq(2*i+eqNum).css({'border-bottom':'3px solid red'});
                                //$('table.sadari_table tr:nth-child(10)').children('td').eq(2*i+eqNum).css({'border-bottom':'3px solid red'});
                                //$('table.sadari_table tr:nth-child(12)').children('td').eq(2*i+eqNum).css({'border-bottom':'3px solid red'});
                            
                            }                  
                    }else{
                        for(var eqNum=1; eqNum<=2; eqNum++){
                            for(var childNum=3; childNum<=last_garo; childNum+=5){
                                $('table.sadari_table tr:nth-child(+'childNum'+)').children('td').eq(2*i+eqNum).css({'border-bottom':'3px solid red'});
                            }
                        }
            
        });
            
            
	});