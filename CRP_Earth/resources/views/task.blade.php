<html>
<head>

<link rel="stylesheet" href="{{ URL::asset('/asset/css/task.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
</head>
<body>
<h1 id="remain"></h1>

<img src="{{ URL::asset('/asset/image/1.jpg') }}" alt="" >
<div class="start-btn"><input type="submit" id="submit" value="submit" disabled></div>
      
      <div class="center modal-box">
         <div class="fas fa-times"></div>
         <div class="fas fa-envelope icon1"></div>
         <header>You Earn!</header>
         <p>
            For Watching 10 Second You earn Total
         </p>
         <form action="">
         <h1>10 Coins</h1>
            <button>Submit</button>
         </form>
         
      </div>
      <script>
         $(document).ready(function(){
           $('.start-btn').click(function(){
             $('.modal-box').toggleClass("show-modal");
             $('.start-btn').toggleClass("show-modal");
           });
           $('.fa-times').click(function(){
             $('.modal-box').toggleClass("show-modal");
             $('.start-btn').toggleClass("show-modal");
           });
         });
      </script>



</body>
</html>

<script>
window.onload=counter;
function counter()
{
var seconds = 10;
countDown();
function countDown()
{
document.getElementById("remain").innerHTML=seconds;
if(seconds>0)
{
    
--seconds;
setTimeout(countDown,1000);


}

if(seconds == 0)
{
    
    document.getElementById('submit').disabled = false;
  
}

}
}

</script>
