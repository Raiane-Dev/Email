<div class="header-content">
    <h2>Inbox</h2>
    <span class="info"><?= count($repository); ?> messags, 484 unread</span>
    
    <div class="inline">
        <div class="search">
            <i data-feather="search"></i>
            <input type="search" placeholder="Search" />
        </div>

        <span class="background-icon">
            <i data-feather="edit"></i>
        </span>
    </div>
</div>

<div class="divider"></div>

<div class="list">
    <ul>
        <?php
        foreach($repository as $key => $repo){
  
            $user = $class::selectSingle($repo['to_user']);
        ?>
        <a href="<?= URL ?>home/<?= $repo['to_user'] ?>"><li class="box">
            <div>
                <img src="<?= URL_DIRECTORIES ?>Storage/email.jpg" class="bool"/>
            </div>
            <div>
                <h4><?= ($user ? $user['email'] : "Undefined"); ?></h4>
                <span class="sub"><?= ($user ? $user['ip'] : "Undefined"); ?></span>
                <p><?= $repo['message']; ?><br /></p>
            </div>
            <div class="float">
                <span class="info"><?= $repo['time']; ?></span>
            </div>
        </li></a>
        <div class="divider"></div>
        <?php } ?>
    </ul>
</div>