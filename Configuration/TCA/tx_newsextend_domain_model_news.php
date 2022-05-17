<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:news_extend/Resources/Private/Language/locallang_db.xlf:tx_newsextend_domain_model_news',
        'label' => 'teaser_images',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'searchFields' => '',
        'iconfile' => 'EXT:news_extend/Resources/Public/Icons/tx_newsextend_domain_model_news.gif'
    ],
    'types' => [
        '1' => ['showitem' => 'teaser_images, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language, sys_language_uid, l10n_parent, l10n_diffsource, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access, hidden, '],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'language',
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_newsextend_domain_model_news',
                'foreign_table_where' => 'AND {#tx_newsextend_domain_model_news}.{#pid}=###CURRENT_PID### AND {#tx_newsextend_domain_model_news}.{#sys_language_uid} IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        1 => '',
                        'invertStateDisplay' => true
                    ]
                ],
            ],
        ],

        'teaser_images' => [
            'exclude' => true,
            'label' => 'LLL:EXT:news_extend/Resources/Private/Language/locallang_db.xlf:tx_newsextend_domain_model_news.teaser_images',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'teaser_images',
                [
                    'appearance' => [
                        'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference'
                    ],
                    'overrideChildTca' => [
            			'types' => [
            				'0' => [
            					'showitem' => '
            					--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
            					--palette--;;filePalette'
            				],
            				\TYPO3\CMS\Core\Resource\File::FILETYPE_TEXT => [
            					'showitem' => '
            					--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
            					--palette--;;filePalette'
            				],
            				\TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
            					'showitem' => '
            					--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
            					--palette--;;filePalette'
            				],
            				\TYPO3\CMS\Core\Resource\File::FILETYPE_AUDIO => [
            					'showitem' => '
            					--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
            					--palette--;;filePalette'
            				],
            				\TYPO3\CMS\Core\Resource\File::FILETYPE_VIDEO => [
            					'showitem' => '
            					--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
            					--palette--;;filePalette'
            				],
            				\TYPO3\CMS\Core\Resource\File::FILETYPE_APPLICATION => [
            					'showitem' => '
            					--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
            					--palette--;;filePalette'
            				]
            			]
                    ],
                    'foreign_match_fields' => [
                        'fieldname' => 'teaser_images',
                        'tablenames' => 'tx_newsextend_domain_model_news',
                        'table_local' => 'sys_file',
                    ],
                    'maxitems' => 1
                ],
                $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
            ),
            
        ],
    
    ],
];
