<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
    $("#loadtweetsbtn").click(function(){
        console.log("Clicked find tweets button");
        getTweets();
    });
</script>
<div>
    <h1>Twitter API Feed</h1>
</div>
<div class="sidebar hidden-phone">
      <div class="page-header">
        <h3>Recent Twitter feed!</h3>
        <!--<form method="GET" action="<?=$_SERVER['PHP_SELF']?>">-->
          <input id="loadtweetsnm" type="text" name="user"/>
          <input id="loadtweetsbtn" type="submit" name="submit" value="Search" />
        <!--</form>-->
        <br>
        <div id="twitter">
          <p><?php if(isset($_GET['user']) && $_GET['user']!="") echo $_GET['user'].":"; else echo "Type in a user!";?></p>
        </div>
    </div><!--page-header--> 
</div>
<div id="twitter-feed"></div>