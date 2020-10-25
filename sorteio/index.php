<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - CSS Roulette Wheel</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->

<?php


if (isset($_POST['num'])){
  
    echo '<script type="text/javascript">',
    'start();',
    '</script>'
    ;
}else{
    header("location: ../index.php");
}


?>


<div class="main">
 <div class="plate" id="plate">
    <ul class="inner">
      <li class="number"><label><input type="radio" name="pit" value="32" /><span class="pit">32</span></label></li>
      <li class="number"><label><input type="radio" name="pit" value="15" /><span class="pit">15</span></label></li>
      <li class="number"><label><input type="radio" name="pit" value="19" /><span class="pit">19</span></label></li>
      <li class="number"><label><input type="radio" name="pit" value="4" /><span class="pit">4</span></label></li>
      <li class="number"><label><input type="radio" name="pit" value="21" /><span class="pit">21</span></label></li>
      <li class="number"><label><input type="radio" name="pit" value="2" /><span class="pit">2</span></label></li>
      <li class="number"><label><input type="radio" name="pit" value="25" /><span class="pit">25</span></label></li>
      <li class="number"><label><input type="radio" name="pit" value="17" /><span class="pit">17</span></label></li>
      <li class="number"><label><input type="radio" name="pit" value="34" /><span class="pit">34</span></label></li>
      <li class="number"><label><input type="radio" name="pit" value="6" /><span class="pit">6</span></label></li>
      <li class="number"><label><input type="radio" name="pit" value="27" /><span class="pit">27</span></label></li>
      <li class="number"><label><input type="radio" name="pit" value="13" /><span class="pit">13</span></label></li>
      <li class="number"><label><input type="radio" name="pit" value="36" /><span class="pit">36</span></label></li>
      <li class="number"><label><input type="radio" name="pit" value="11" /><span class="pit">11</span></label></li>
      <li class="number"><label><input type="radio" name="pit" value="30" /><span class="pit">30</span></label></li>
      <li class="number"><label><input type="radio" name="pit" value="8" /><span class="pit">8</span></label></li>
      <li class="number"><label><input type="radio" name="pit" value="23" /><span class="pit">23</span></label></li>
      <li class="number"><label><input type="radio" name="pit" value="10" /><span class="pit">10</span></label></li>
      <li class="number"><label><input type="radio" name="pit" value="5" /><span class="pit">5</span></label></li>
      <li class="number"><label><input type="radio" name="pit" value="24" /><span class="pit">24</span></label></li>
      <li class="number"><label><input type="radio" name="pit" value="16" /><span class="pit">16</span></label></li>
      <li class="number"><label><input type="radio" name="pit" value="33" /><span class="pit">33</span></label></li>
      <li class="number"><label><input type="radio" name="pit" value="1" /><span class="pit">1</span></label></li>
      <li class="number"><label><input type="radio" name="pit" value="20" /><span class="pit">20</span></label></li>
      <li class="number"><label><input type="radio" name="pit" value="14" /><span class="pit">14</span></label></li>
      <li class="number"><label><input type="radio" name="pit" value="31" /><span class="pit">31</span></label></li>
      <li class="number"><label><input type="radio" name="pit" value="9" /><span class="pit">9</span></label></li>
      <li class="number"><label><input type="radio" name="pit" value="22" /><span class="pit">22</span></label></li>
      <li class="number"><label><input type="radio" name="pit" value="18" /><span class="pit">18</span></label></li>
      <li class="number"><label><input type="radio" name="pit" value="29" /><span class="pit">29</span></label></li>
      <li class="number"><label><input type="radio" name="pit" value="7" /><span class="pit">7</span></label></li>
      <li class="number"><label><input type="radio" name="pit" value="28" /><span class="pit">28</span></label></li>
      <li class="number"><label><input type="radio" name="pit" value="12" /><span class="pit">12</span></label></li>
      <li class="number"><label><input type="radio" name="pit" value="35" /><span class="pit">35</span></label></li>
      <li class="number"><label><input type="radio" name="pit" value="3" /><span class="pit">3</span></label></li>
      <li class="number"><label><input type="radio" name="pit" value="26" /><span class="pit">26</span></label></li>
      <li class="number"><label><input type="radio" name="pit" value="0" /><span class="pit">0</span></label></li>
    </ul>
    <div class="data">
      <div class="data-inner">
        <div class="mask"></div>
        <div class="result">
          <div class="result-number">00</div>
          <div class="result-color">red</div>        
        </div>
      </div>
    </div>
  </div>
  <div class="previous-results">
    <ol class="previous-list">
      <li class='visuallyhidden placeholder'>No results yet.</li>
    </ol>
  </div>
</div>
<div class="main">

</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js'></script>
<script  src="./script.js"></script>

</body>
</html>
