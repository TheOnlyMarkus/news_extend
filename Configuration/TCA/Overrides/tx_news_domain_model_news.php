<?php
defined('TYPO3') || die();

$tmp_news_extend_columns = [

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
                    'tablenames' => 'tx_news_domain_model_news',
                    'table_local' => 'sys_file',
                ],
                'maxitems' => 100
            ],
            $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
        ),
        
    ],

];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_news_domain_model_news', $tmp_news_extend_columns);

$GLOBALS['TCA']['tx_news_domain_model_news']['types']['0']['showitem'] .= ',--div--;LLL:EXT:news_extend/Resources/Private/Language/locallang_db.xlf:tx_newsextend_domain_model_news,';
$GLOBALS['TCA']['tx_news_domain_model_news']['types']['0']['showitem'] .= 'teaser_images';
