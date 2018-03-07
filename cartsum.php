<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
<input type="text" id="msrp" name="msrp" size="5" value="200" onkeyup="calculatePercentage(this.value, document.getElementById('newprice').value)">
<br/>
<input type="text" id="newprice" name="newprice" size="5" value="100" onkeyup="calculatePercentage(document.getElementById('msrp').value, this.value)">
<br/>
<div><strong>You have saved</strong> <span id="results" style="color: green; font-size: 1.5em;">50</span> <strong>%</strong></div>

<script>
function calculatePercentage (oldval, newval) {
    percentsavings = ((- oldval - newval));
    document.getElementById("results").innerHTML = Math.round(-percentsavings);
}
</script>
</body>
</html>