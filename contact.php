<?php include "sub_header.php" ?>

<h2 class="sub-title">온라인문의</h2>
<section class="contact-section">
     <form action="">
          <p>
               <label for="id1"> 성명 </label>
               <input id="id1" type="text">
          </p>
          <p>
               <label>전화번호</label>
               <input size="1" type="tel" title="연락처 첫 세자리">
               <input size="1" type="tel" title="연락처 두번째 네자리">
               <input size="1" type="tel" title="연락처 세번째 네자리">
          </p>
          <p>
               <label for="id3">이메일</label>
               <input id="id3" type="mail">
          </p>
          <p>
               <label for="id4">제목</label>
               <input id="id4" type="text">
          </p>
          <p>
               <label for="id5">설명</label>
               <textarea id="id5" rows="10"></textarea>
          </p>
          <p>
               <label for="id6">파일첨부</label>
               <input id="id6" type="file">
          </p>
          <p>
               <button class="form-btn btn-style1" type="submit">전송</button>
               <button class="form-btn btn-style2" type="reset">취소</button>
          </p>

     </form>
</section>


<?php include "sub_footer.php" ?>