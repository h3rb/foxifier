<HTML>
<TITLE> THE FOXIFIER - SCRAPE THE LEFT TO MAKE IT RIGHT </TITLE>
<BODY>
<h1>Welcome to The Foxifier Online.</h1>

<p>The Foxifier takes pasted text and converts it from Liberal Drivel to content Monica Crowley, Ann Coulter or Bill O'Reilly would be proud of.  Try it!  It's free!  Free yourself and your readers from the burden of Leftist propaganda.</p>

<b>Paste in your leftist rhetoric*:</b>
<form action="index.php" method=POST>
<textarea name="leftishtick" id="leftishtick" rows=10 cols=50>
</textarea><BR>
<BR>
* - Works best if you paste in articles about race, homosexuality (LGBTQ), President Obama, Democrats, immigration or science.
<BR>
<input type="submit"><BR>
</form>
<BR>
<h2>See results here:</h2>
<?php


$foxnews=array(
 "fist bump"=>"terrorist fist jab",
 "fist thump"=>"signal that young people get",
 "same-sex marriage"=>"blasphemous homosexual marriage",
 "welfare"=>"Left's redistributionism",
 "Clinton"=>"Criminal Clinton",
 "Vice President Joe Biden"=>"silly Joe Biden",
 "Trump"=>"Trump, who is already making America Great",
 "Nicaraguan"=>"Taco Day Host",
 "climate change"=>"non-existant climate change scam invented by Leftist scientists",
 "Cunningham"=>"liberal stooge",
 "Lord Business"=>"Mitt Romney lookalike",
 "science"=>"made-up facts",
 "LGBTQ"=>"NAMBLA member practicing bestiality",
 "gays"=>"child molestors",
 "Blacks"=>"sympathy voters",
 "Black Americans"=>"super predators",
 "Obama"=>"so-called American President, a.k.a. secretly a muslim dictator",
 "Swedes"=>"pure",
 "Americans"=>"impure bestials",
 "manufacturing"=>"good jobs in the USA",
 "feminists"=>"feminists (responsible for statutory rape)",
 "women drivers"=>"unmaneuverable women drivers",
 "co-ed schools"=>"unfair to boys",
 "Elie Wiesel"=>"Holocaust winner",
 "Jesus"=>"Santa",
 "Santa"=>"Jesus",
 "Jesus and Santa"=>"White Men",
 "poor people"=>"not actually poor people with refridgerators",
 "violence in our schools"=>"violence in our schools (due to removing God from them)",
 "SpongeBob"=>"SpongeBob, long-time pusher of the Global Warming agenda",
 "woman president"=>"woman president, obviously having a downside",
 "Muslim"=>"Islamic Terrorist",
 "Mr. Rogers"=>"Mr Rogers, an evil, evil man for making kids feel special",
 "Democrats"=>"'communists' who want to kill 10% of the population",
 "rape"=>"rape (how much rape is too much?)",
 "immigrants"=>"criminals",
 "liberal"=>"Leftist",
 "debt downside"=>"drag of debt",
 "Milton Friedman"=>"late great economist Milton Friedman",
 "horrific blunders"=>"absurdities",
 "War on Poverty"=>"Johnson's Great Society War on Poverty",
 "delayed"=>"hamstrung",
 "stimulus"=>'"stimulus"',
 "difficulty"=>"hot mess",
 "issue"=>"hot mess",
 "authority"=>"regime",
 "clean energy jobs"=>'so-called clean energy jobs',
 "Obama is serious"=>"Obama is fundamentally unserious",
 "Medicare"=>"welfare state",
 "Palestine"=>"Arab and Muslim regimes",
 "Mexican American"=>"Mexican",
 "Climate Change"=>"so-called Climage Change",
 "global warming"=>"so-called global warming",
 "celebrate"=>"apparently celebrate",
);

if ( isset($_POST['leftishtick']) ) {
 echo '<p>';
 echo convert_left_to_right($_POST['leftishtick'],$foxnews);
 echo '</p>';
}

function convert_left_to_right( $input, $arr ) {
 foreach ($arr as $a=>$b) {
  $input=str_ireplace($a,$b,$input);
 }
 echo $input;
}

?>
See our "secret sauce" conversion method:
 <button onclick="javascript:onclickshow();">click here!</button><BR>
<script type="text/javascript">
function onclickshow() {
var ar = document.getElementById("sauce");
   ar.style.display = "block";
}
</script>
<ul id="sauce" style="display:none;">
<?php
 foreach ( $foxnews as $a=>$b) {
  echo '<li>'.$a.'&rarr;'.$b.'</li>';
 }
?>
</ul>
<hr size=1>
license: it's cool to take screenshots, write about this, link us and fox yourself.  use this for whatever you want.<BR>
copyRIGHT &copy; 2017 <a href="http://orcs.biz">orcs.biz</a><BR>
Contribute changes and improvements: <a href="http://github.com/h3rb/foxifier">on github</a>
</body>
</html>
