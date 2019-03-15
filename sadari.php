<!DOCTYPE html>
<html>
<head>
    <title>Untitled Document</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <link href="sadari_css.css" rel="stylesheet" type="text/css" media="screen">
    <script type="text/javascript" src="sadari_js.js"></script>

    <style>
        
        
        
    </style>
    </head>
    <body>
        <header>
            <span>점심시간 아이스크림 내기 한판, 사다리 게임 스껄스껄</span>
            <form method="get" class="number_form">
                
                <input type="text" name="number" class="number" placeholder="게임에 참여할 인원 입력">
                <!--<input type="submit" value="입력" >-->
                <div class="sadari_users_submit">입력</div>
            </form>
        </header>
        <div id="wrap">
            <?php
            //1.number>>submit안대거나 정수 아니거나 30보다 클때 경우. 스껄스껄
            if(!preg_match('/^[1-9]$|^[1-2][0-9]$|^30$/', $_GET['number'])){
            //if(!is_numeric($_GET['number'])||$_GET['number']>=31){
            ?>
            
            <div class="content_number_choice">
                <div>아직 게임에 참여할 인원을 입력하지 않으셨네요.<br>
                     상단에 인원을 입력하고 입력버튼을 클릭해주세요    
                </div>
            </div>
            
            <?php
                
            //2.이외 경우
             }else{
            ?>
            <div class="wrap_content_userTextbox">
                <div class="content_userTextbox">
                    <ul>
                        <?php  
                            $usersSubmit = $_GET['number'];
                            for($i=1;$i<=$usersSubmit;$i++){
                        ?>

                        <li><input type="text" class="user_name" placeholder="user<?=$i?>"></li>

                        <?php 
                                //한줄에 6칸 넘으면 줄 넘김
                                if($i%6==0){
                        ?>
                        <!--리스트 줄넘김--></ul><ul>    
                        <?php
                                }
                            }
                        ?>
                    </ul>
                </div>
            </div>
            
        </div>
        <footer>
            <form>
                <input type="hidden" class="all_user_names">
                <div class="sadari_users_save">저장</div>
            </form>
        </footer>
        <!--사다리-->
                <table class="sadari_table">
                
                    <tr>
                    <?php 
                        for($i=1;$i<=$usersSubmit;$i++){ 
                    ?>
                        <th class="sadari_top" colspan="2"></th>
                    <?php } ?>
                    </tr>
                    
                    <?php for($j=0;$j<=12;$j++){ ?>
                    <tr>
                    <? for($i=0;$i<=$usersSubmit-1;$i++){ ?>
                        <td></td>
                        <td></td>
                    <? } ?>
                    </tr>
                    <? } ?>
                    <tr>
                    <?php 
                        for($i=1;$i<=$usersSubmit;$i++){ 
                    ?>
                        <th class="sadari_bottom" colspan="2"></th>
                    <?php } ?>
                    </tr>
                </table>
        
                <!--연습-->
                <table>
                    <?php for($j=1;$j<=2;$j++){ ?>
                    <tr>
                        <?php 
                            for($i=1;$i<=$usersSubmit;$i++){ ?>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                        <?php } ?>
                    </tr>
                    <?php } ?>
                    
                    <?php for($j=1;$j<=3;$j++){ ?>
                    <tr>
                        <?php for($i=1;$i<=$usersSubmit;$i++){ ?>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                        <? } ?>
                    </tr>
                    <? } ?>
                    <tr>
                        <?php 
                            for($i=1;$i<=$usersSubmit;$i++){ 
                        ?>
                            <td colspan="6"></td>
                        <?php } ?>
                    </tr>
                </table>
        
         <?php }
            ?>
    </body>
</html>