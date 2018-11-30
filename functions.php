<?php

function themeConfig($form) {
    $sidebarBlock = new Typecho_Widget_Helper_Form_Element_Checkbox(
        'sidebarBlock',
        array(
            'ShowRecentPosts' => _t('显示最新文章'),
            'ShowRecentComments' => _t('显示最近回复'),
            'ShowCategory' => _t('显示分类'),
            'ShowArchive' => _t('显示归档'),
            'ShowOther' => _t('显示其它杂项')
        ),
        array(
            'ShowRecentPosts',
            'ShowRecentComments',
            'ShowCategory',
            'ShowArchive',
            'ShowOther'
        ),
        _t('侧边栏显示')
    );
    $form->addInput($sidebarBlock->multiMode());

    $analyticsCode = new Typecho_Widget_Helper_Form_Element_Textarea(
        'analyticsCode',
        NULL,
        NULL,
        _t('流量分析代码'),
        _t('填写你的网站流量分析代码, 如百度统计, GoogleAnalytics, CNZZ等.')
    );
    $form->addInput($analyticsCode);

    // $fastClick = new Typecho_Widget_Helper_Form_Element_Radio(
    //     'fastClick',
    //     array('able' => _t('启用'),
    //         'disable' => _t('禁止'),
    //     ),
    //     'disable',
    //     _t('移动端点击延迟消除'),
    //     _t('禁止网页缩放以消除单击延迟.')
    // );
    // $form->addInput($fastClick);

    $highlightjs = new Typecho_Widget_Helper_Form_Element_Radio(
        'highlightjs',
        array('able' => _t('启用'),
            'disable' => _t('禁止'),
        ),
        'able',
        _t('代码高亮'),
        _t('调用cdnjs中的highlight.js对代码染色.')
    );
    $form->addInput($highlightjs);
}