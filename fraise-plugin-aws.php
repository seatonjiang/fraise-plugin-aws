<?php

/**
 * Plugin Name: Fraise - 对象存储工具包
 * Description: 使用分布式存储服务所需的工具包，具有高扩展性、低成本、可靠安全等优点。
 * Version: 2025.06.03
 * Plugin URI: https://github.com/seatonjiang/fraise-plugin-aws
 * Author: Seaton Jiang
 * Author URI: https://seatonjiang.com
 * License: MIT License
 * License URI: https://github.com/seatonjiang/fraise-plugin-aws/blob/main/LICENSE
 */

if (!defined('ABSPATH')) {
    exit;
}

if (!has_action('fraise-plugin-aws')) {
    add_action('fraise-plugin-aws', function () {
        require_once plugin_dir_path(__FILE__) . '/vendor/autoload.php';
    });
}
