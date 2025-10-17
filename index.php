<html>
<head>
  <title> Serveri logid</title>
  <meta charset="UTF-8">
</head>
<body style="font-family: monospace; background-color: #111; color: #0f0;">
<h2>logisüsteem</h2>

<h3>github logs</h3>
<pre><?php @readfile('/var/log/github_push_logs.log'); ?></pre>

<h3>package logs</h3>
<pre><?php @readfile('/var/log/packages_logs.log'); ?></pre>

</body>
</html>
