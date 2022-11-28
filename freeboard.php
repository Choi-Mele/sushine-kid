<?php include "sub_header.php" ?>
<script src="./js/store.js"></script>
<h2 class="sub-title">자유게시판</h2>

<section class="freeboard-section">
          
     <form action="" class="search-form">
          <select>
               <option label="제목"></option>
               <option label="내용"></option>
               <option label="작성자"></option>
          </select>
          <input type="text">
          <button class="btn-style1"><i class="fa-solid fa-magnifying-glass"></i> 검색</button>
     </form>
     </section>
     <!-- 앞 쪽 추 가 : prepend -->
     <script>
       $('.freeboard-section').prepend(` 
          <table class="board">
            <thead>
              <tr>
                <th scope="col">번호</th>
                <th scope="col">제목</th>
                <th scope="col">작성자</th>
                <th scope="col">작성일자</th>
                <th scope="col">조회수</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
       `)
       freeboardArrCopy = [...freeboardArr]
       freeboardArrCopy.reverse().forEach(function(v){ /* reverse 배열을 뒤집는 명령어// 할 때는 반드시 배열을 복사한 뒤 복사한 배열을 뒤집자 */
         $(`.freeboard-section .board tbody`).append(`
            <tr>
              <td>${v.id}</td>
              <td><a href="#">${v.title} </a></td>
              <td>${v.auth}</td>
              <td>${v.date}</td>
              <td>${v.read}</td>
            </tr>
          `)//append
       })//forEach
       
     </script>

<?php include "sub_footer.php" ?>