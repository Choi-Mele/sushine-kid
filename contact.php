<?php include "sub_header.php" ?>
<script src="./js/online.js" defer></script>

<h2 class="sub-title">온라인문의</h2>
<section class="contact-section">
     <form action="">
          <p>
               <label for="id1"> 성명 </label>
               <input id="id1" type="text" placeholder="홍길동">
          </p>
          <p>
               <label>전화번호</label>

               <span>
                    <input type="tel" placeholder="010" title="연락처 첫 세자리">
                    <input type="tel" placeholder="1234" title="연락처 두번째 네자리">
                    <input type="tel" placeholder="1234" title="연락처 세번째 네자리">
               </span>
          </p>
          <p>
               <label for="id3">이메일</label>
               <input id="id3" type="mail" placeholder="abc@abc.com">
          </p>
          <p>
               <label for="id4">제목</label>
               <input id="id4" type="text" placeholder="제목">
          </p>
          <p>
               <label for="id5">설명</label>
               <textarea id="id5" rows="10" placeholder="문의 내용을 적어주세요"></textarea>
          </p>
          
          <div class="filebox">
               <input class="upload-name" value="첨부파일을 추가하면 경로가 표시돼요" placeholder="첨부파일">
               <label for="file">파일찾기</label>
               <input type="file" id="file">
          </div>
          
          <p>
               <button class="form-btn btn-style1" type="submit">전송</button>
               <button class="form-btn btn-style2" type="reset">취소</button>
          </p>

     </form>
</section>


<?php include "sub_footer.php" ?>