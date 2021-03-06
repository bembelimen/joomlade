<?php defined('_JEXEC') or die; ?>
<div class="jpattern area-joomla">
    <h4>Joomla! downloaden</h4>
    <?php if ($params->get('show_version', true)) : ?>
        <p class="name"><?php echo JText::_('MOD_JVERSION_VERSION_PREFIX'); ?><?php echo $release->version; ?></p>
    <?php endif; ?>
    <?php if ($params->get('show_download', true)) : ?>
        <p>
            <a href="<?php echo $release->downloadUrl; ?>" class="btn btn-primary download blue">
                <span class="fa fa-cloud-download"></span> <?php echo JText::_('MOD_JVERSION_DOWNLOAD'); ?>
            </a>
        </p>
    <?php endif; ?>
    <?php if ($params->get('show_download_count', true)) : ?>
        <p class="downloads">
            <?php echo number_format($release->downloads, 0, ',',
                '.') ?><?php echo JText::_('MOD_JVERSION_DOWNLOADS'); ?>
        </p>
    <?php endif; ?>
</div>

