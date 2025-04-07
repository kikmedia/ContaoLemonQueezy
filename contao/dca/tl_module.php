// contao/dca/tl_module.php
use Contao\CoreBundle\DataContainer\PaletteManipulator;

$GLOBALS['TL_DCA']['tl_module']['palettes']['subscription'] = '
    {title_legend},name,headline,type;
    {config_legend},lemonSqueezyApiKey,lemonSqueezyManageUrl;
    {template_legend:hide},customTpl;
    {protected_legend:hide},protected;
    {expert_legend:hide},guests,cssID
';

$GLOBALS['TL_DCA']['tl_module']['fields']['lemonSqueezyApiKey'] = [
    'inputType' => 'text',
    'eval' => [
        'mandatory' => true,
        'tl_class' => 'w50',
        'decodeEntities' => true
    ],
    'sql' => "varchar(255) NOT NULL default ''"
];

$GLOBALS['TL_DCA']['tl_module']['fields']['lemonSqueezyManageUrl'] = [
    'inputType' => 'text',
    'eval' => [
        'mandatory' => true,
        'tl_class' => 'w50',
        'rgxp' => 'url',
        'decodeEntities' => true
    ],
    'sql' => "varchar(255) NOT NULL default ''"
];
