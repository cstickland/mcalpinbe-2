<?php

function create_block_product_card_block_init()
{
    register_block_type(__DIR__);
}
add_action('init', 'create_block_product_card_block_init');
