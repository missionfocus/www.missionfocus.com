<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mission Focus</title>
<link rel="stylesheet" type="text/css" href="mainstyle.css" />
<script src="http://www.mint.missionfoc.us/?js" type="text/javascript"></script>
</head>

<body class="inside">

    <div id="contactInfo">
    <a class="returnLink" href="index.php">RETURN ^</a>
        <h1 class="insideTitle">CONTACT MISSION FOCUS</h1>
<p>For more information regarding our services, please fill out the below contact form.<br /><br /></p>
<?php
if (isset($_REQUEST['email']))
//if "email" is filled out, send email
  {
  //send email
  $email = $_REQUEST['email'] ;
  $subject = $_REQUEST['subject'] ;
  $message = $_REQUEST['message'] ;
  mail("andrew.eick@missionfoc.us", "[MissionFoc.us]$subject",
  $message, "From:" . $email);
  echo "Thank you for using our mail form";
  }
else
//if "email" is not filled out, display the form
  {
  echo "<form method='post' action='contact-us.php'>
  <p>Email: <input name='email' type='text' /></p><br />
  <p>Subject: <input name='subject' type='text' /></p><br />
  Message:<br />
  <textarea name='message' rows='15' cols='40'>
  </textarea><br />
  <input type='submit' />
  </form>";
  }
?>
    </div>
    
<script type="text/javascript">
  var _gauges = _gauges || [];
  (function() {
    var t   = document.createElement('script');
    t.type  = 'text/javascript';
    t.async = true;
    t.id    = 'gauges-tracker';
    t.setAttribute('data-site-id', '4f035fc9f5a1f514a1000001');
    t.src = '//secure.gaug.es/track.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(t, s);
  })();
</script>


</body>
</html>
