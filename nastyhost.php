<?php require 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
 <title>NastyHosts Blacklisted You</title>
 <link rel="stylesheet" href="/main.css"/>
 <?php include 'head.i.php'; ?>
</head>
<body>
<header>
 <?php include 'navbar.i.php'; ?>
</header>
<main>
 <h1>NastyHosts Blacklisted You</h1>
 <p>Sorry, but your IP address, <code><?php echo user_ip(); ?></code> is flagged by <a href="http://nastyhosts.com">NastyHosts</a>.</p>
 <p>You won&#700;t be banned by this faucet just because of this because apart from being redndant, I have no idea if you actually did anything wrong!</p>
 <p>You can contact the owner of this faucet on Faucet&nbsp;Hub and request to be whitelisted through a private message like this: <code>/pm <?php echo $cfg_fh_username; ?> Your faucet, <?php echo $cfg_site_url; ?>, says my IP (<?php echo user_ip(); ?>) is blocked by NastyHosts. Could I please be whitelisted? Thanks in advance!</code></p>
 <p>For reference, this is what NastyHosts has to say about you:</p>
 <pre><code><?php echo file_get_contents('http://v1.nastyhosts.com/' . user_ip()); ?></code></pre>
 <p>Oh yeah, here is some other <a href="http://whatismyipaddress.com/ip/<?php echo user_ip(); ?>">information about your IP</a>.</p>
</main>
<footer>
 <?php include 'ads_q.i.php'; ?>
</footer>
</body>
</html>
