<?php
global $post;
$page_id = $post->ID;

get_header();

$double_column = get_field("double_column", $page_id);

if($double_column) : 
    $image = $double_column["image"];
    $on_title = $double_column["on_title"];
    $title = $double_column["title"];
    $textarea = $double_column["textarea"];
    $button = $double_column["button"];
?>

<div class="template-page">
    <section class="space"></section>
    <section class="section sectionImageTexteBackground section--no-paddings section--no-topMargin">
        <div class="container">
            <div class="sectionContent">
                <div class="sectionContent__column">
                    <div class="image-texte">
                        <div class="image-texte__content">
                            <?php if($on_title) : ?>
                                <div class="image-texte__content__sub-title reveal"><?= $on_title ?></div>
                            <?php endif; ?>
                            <?php if($title) : ?>
                                <div class="image-texte__content__title reveal-title"><?= $title ?></div>
                            <?php endif; ?>
                            <?php if($textarea) : ?>
                                <div class="image-texte__content__description reveal"><?= $textarea ?></div>
                            <?php endif; ?>
                            <?php if($button) : ?>
                                <div class="image-texte__content__link reveal">
                                    <?php get_template_part(slug: 'components/button', args: [
                                        'text' => $button["title"],
                                        'href' => $button["url"],
                                        'target' => ($button["target"] === "_blank") ? $button["target"] : "",
                                        'class' => '',
                                        'is_icon' => true
                                    ]); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <?php if($image) : ?>
                            <div class="image-texte__image reveal">
                                <?php get_template_part(slug: 'components/image', args: [
                                    'id' => $image["ID"],
                                    'size' => 'full',
                                    'class' => 'object-fit-cover',
                                    'is_thumbnail' => false,
                                    'fetchpriority' => ''
                                ]); ?>
                            </div>
                        <?php endif; ?>
                    </div>                                            
                </div>
            </div>
        </div>
    </section>
</div>

<?php endif;

get_footer();
