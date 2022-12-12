<?php include "sub_header.php" ?>

     <h2 class="sub-title">로그인</h2>

     <section class="login-section">
          <h3 class="hidden">로그인박스</h3>

          <div class="login-box">
               <p> LOGIN</p>
               <div class="inner-box">
                    <div class="input-row">
                         <span><i class="fa-regular fa-address-card"></i></span> <input type="id" title="아이디">
                    </div>
                    <div class="input-row">
                         <span><i class="fa-solid fa-key"></i></span> <input type="password" title="패스워드">
                    </div>
                    <div class="input-select">
                         <input type="checkbox"> <span class="weak">로그인 상태 유지</span>
                    </div>
                    <button>로그인</button>
                    <hr>
                    <p class="weak">SNS 로그인</p>
                    <ul class="sns-log">
                         <li class="weak"><a href="#">facebook</a></li>
                         <li class="weak"><a href="#">google</a></li>
                         <li class="weak"><a href="#">naver</a></li>
                         <li class="weak"><a href="#">kakao</a></li>
                    </ul>
               </div><!-- inner-box -->
          </div><!-- login-box -->
          <ul class="question">
               <li class="weak registration"><a href="#"> 회원가입</a></li>
               <li class="weak find-id"><a href="#"> 아이디 찾기</a></li>
               <li class="weak find-pw"><a href="#"> 비밀번호 찾기</a></li>
          </ul>

     </section>


<?php include "sub_footer.php" ?>