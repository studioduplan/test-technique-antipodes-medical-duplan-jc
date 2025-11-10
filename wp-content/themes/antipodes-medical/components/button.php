<?php

//    get_template_part(slug: 'components/button', args: [
//        'text' => 'My Button',
//        'href' => 'https://www.google.co.uk',
//        'target' => '_blank',
//        'class' => '',
//        'is_icon' => false
//    ]);


$classes = 'cta';

$args['class'] = implode(' ', array_merge(explode(' ', $classes), explode(' ', $args['class'])));

?>
<a href="<?php echo $args['href']; ?>" class="<?php echo $args['class']; ?>" target="<?php echo $args['target']; ?>">
    <?php echo $args['text']; ?>
    <?php if ($args['is_icon'] === true) : ?>
        <span class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="37" height="37" viewBox="0 0 37 37" fill="none">
                                            <circle cx="18.5544" cy="18.8965" r="18" transform="rotate(-180 18.5544 18.8965)" fill="url(#paint0_linear_111_2)"></circle>
                                            <path d="M17.0544 15.1128L21.3044 19.3628L17.0544 23.6128" stroke="white" stroke-width="0.5" stroke-linecap="round"></path>
                                            <defs>
                                            <linearGradient id="paint0_linear_111_2" x1="36.5544" y1="18.8965" x2="0.554445" y2="18.8965" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#5883DD"></stop>
                                            <stop offset="1" stop-color="#09245C"></stop>
                                            </linearGradient>
                                            </defs>
                                        </svg> </span>
    <?php endif; ?>
</a>