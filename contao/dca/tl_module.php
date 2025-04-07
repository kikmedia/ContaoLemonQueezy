$GLOBALS['TL_DCA']['tl_module']['palettes']['subscription'] = '
    {title_legend},name,type;
    {config_legend},lemonSqueezyApiKey,lemonSqueezyManageUrl;
    {protected_legend:hide},protected;
    {expert_legend:hide},guests,cssID
';

$GLOBALS['TL_DCA']['tl_module']['fields']['lemonSqueezyApiKey'] = [
    'inputType' => 'text',
    'eval' => ['mandatory' => true, 'tl_class' => 'w50']
];
