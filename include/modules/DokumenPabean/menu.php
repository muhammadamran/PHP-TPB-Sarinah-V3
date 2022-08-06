<?php
if ($resultRoleModules['v_bc'] == 'show') {
    $TitleBC = 'show';
} else {
    $TitleBC = 'none';
}
?>
<li class="nav-header" style="display: <?= $TitleBC; ?>;">DOKUMEN PABEAN</li>
<li class="has-sub <?= $uriSegments[1] == 'dp_bc2_3.php' ||
                        $uriSegments[1] == 'dp_bc2_5.php' ||
                        $uriSegments[1] == 'dp_bc2_6_1.php' ||
                        $uriSegments[1] == 'dp_bc2_6_2.php' ||
                        $uriSegments[1] == 'dp_bc2_7.php' ||
                        $uriSegments[1] == 'dp_bc4_0.php' ||
                        $uriSegments[1] == 'dp_bc4_1.php'
                        ? 'active' : '' ?>" style="display: <?= $TitleBC; ?>;">
    <a href="javascript:;">
        <b class="caret"></b>
        <i class="fas fa-passport"></i>
        <span>BC</span>
    </a>
    <ul class="sub-menu">
        <li class="<?= $uriSegments[1] == 'dp_bc2_3.php' || $uriSegments[1] == 'dp_bc2_7.php' ? 'active' : '' ?>" style="display: <?= $resultRoleModules['v_bc']; ?>">
            <!-- <a href="dp_bc2_3.php">BC 2.3 / Master Data</a> -->
            <a href="dp_bc2_7.php">BC 2.7 / Master Data</a>
        </li>
        <!-- <li class="<?= $uriSegments[1] == 'dp_bc2_5.php' ? 'active' : '' ?>">
            <a href="dp_bc2_5.php">BC 2.5</a>
        </li>
        <li class="<?= $uriSegments[1] == 'dp_bc2_6_1.php' ? 'active' : '' ?>">
            <a href="dp_bc2_6_1.php">BC 2.6.1</a>
        </li>
        <li class="<?= $uriSegments[1] == 'dp_bc2_6_2.php' ? 'active' : '' ?>">
            <a href="dp_bc2_6_2.php">BC 2.6.2</a>
        </li>
        <li class="<?= $uriSegments[1] == 'dp_bc2_7.php' ? 'active' : '' ?>">
            <a href="dp_bc2_7.php">BC 2.7</a>
        </li>
        <li class="<?= $uriSegments[1] == 'dp_bc4_0.php' ? 'active' : '' ?>">
            <a href="dp_bc4_0.php">BC 4.0</a>
        </li>
        <li class="<?= $uriSegments[1] == 'dp_bc4_1.php' ? 'active' : '' ?>">
            <a href="dp_bc4_1.php">BC 4.1</a>
        </li> -->
    </ul>
</li>