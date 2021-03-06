#
# Nagios configuration to check Bird daemons via the Bird's Eye API
#
# Generated by IXP Manager on <?= date('Y-m-d H:i:s') . "\n" ?>
#
#
<?php
    $hosts = [];
    $cmd_name = 'check_birdseye_daemon' . ( $t->vlanid ? ('_vlanid_' . $t->vlanid) : '' );
    $hg_name  = 'bird-daemons'          . ( $t->vlanid ? ('-vlanid-' . $t->vlanid) : '' );
?>

define command{
        command_name    <?= $cmd_name . "\n" ?>
        command_line    <?= config( 'ixp_api.nagios.birdseye_check' ) ?> -a $ARG1$
}

<?php foreach( $t->routers as $n => $d ):
    if( !$d->hasApi() ):
        continue;
    endif;
?>

define host     {
        use                     <?= config( 'ixp_api.nagios.infra_host' ) . "\n" ?>
        host_name               bird-<?= $n . "\n" ?>
        alias                   <?= $d->name() . "\n" ?>
        address                 <?= $d->mgmtIp() . "\n" ?>
}

    <?php $hosts[] = "bird-{$n}"; ?>

<?php endforeach; ?>

define hostgroup {
    hostgroup_name          <?= $hg_name . "\n" ?>
    alias                   Individual Bird Daemons
    members                 <?php echo $t->softwrap( $hosts, 3, ', ', ', \\', 28 ) . "\n" ?>
}

<?php foreach( $t->routers as $n => $d ): 

    if( !$d->hasApi() ):
        continue;
    endif;
?>



define service     {
    use                     <?= config( 'ixp_api.nagios.infra_service' ) . "\n" ?>
    host_name               bird-<?= $n . "\n" ?>
    service_description     Bird BGP Service
    check_command           <?= $cmd_name ?>!<?= $d->api() . "\n" ?>
}

<?php endforeach; ?>


### END ###
