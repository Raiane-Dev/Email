<!DOCTYPE html>
<html>
<head>
    <title>Database</title>
    <script src="https://unpkg.com/feather-icons"></script>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= URL_DIRECTORIES ?>css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</head>
<body>
<header>
    <div class="head-top">
        <span class="pointer yellow"></span> <span class="pointer green"></span> <span class="pointer red"></span>
    </div>
    <nav>
        <ul>
            <li class="active"><a href="<?= URL ?>home"><i data-feather="home"></i> Home</a></li>
            <li><a href=""><i data-feather="mail"></i> Starred</a> <span>1000</span></li>
            <li><a href=""><i data-feather="clock"></i> Snoozed</a> <span>1000</span></li>
            <li><a href="<?= URL ?>send"><i data-feather="send"></i> Sent</a> <span>1000</span></li>
            <li><a href=""><i data-feather="bookmark"></i> Important</a> <span>1000</span></li>
            <li><a href=""><i data-feather="message-circle"></i> Chats</a> <span>1000</span></li>
            <li><a href=""><i data-feather="at-sign"></i> Scheduleds</a> <span>1000</span></li>
            <li><a href=""><i data-feather="file"></i> Drafts</a> <span>1000</span></li>

            <div class="divider"></div>
            <div class="inline">
                <div><h4>Folder</h4></div>
                <div><i data-feather="folder"></i></div>
            </div>
            <li><a href=""><i data-feather="folder" style="fill: var(--orange);"></i> Home</a> <span>1000</span></li>
            <li><a href=""><i data-feather="folder" style="fill: var(--green);"></i> Home</a> <span>1000</span></li>
            <li><a href=""><i data-feather="folder" style="fill: var(--red);"></i> Home</a> <span>1000</span></li>
        </ul>
    </nav>
    <div class="divider"></div>
</header>
<main>