
 <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-28382926-1', 'auto');
  
// on ajoute les custom variables du tableau associatif
var i=1;
for(var key in gaCustomVariables)
{
  ga('set', 'dimension'+i, gaCustomVariables[key]);
  i++;
}



  
  ga('send', 'pageview');

</script>
 
