<?php
/**
 * Plugin Name: Hola Copilot
 * Plugin URI: https://github.com/pablodiloreto2/mug-demo-1
 * Description: Un plugin simple que saluda al público usando un shortcode
 * Version: 1.0.0
 * Author: GitHub Copilot
 * Author URI: https://github.com/features/copilot
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

// Evitar acceso directo al archivo
if (!defined('ABSPATH')) {
    exit;
}

function hola_copilot_shortcode() {
    $output = '<div class="hola-copilot-saludo">';
    $output .= '¡Hola! 👋 Soy GitHub Copilot, tu asistente de programación. ';
    $output .= '¡Bienvenido a esta increíble demo! 🚀';
    $output .= '</div>';

    // Agregamos estilos inline para el mensaje
    $output .= '<style>
        .hola-copilot-saludo {
            background: linear-gradient(135deg, #6e48aa, #9d50bb);
            color: white;
            padding: 20px;
            border-radius: 10px;
            margin: 20px 0;
            font-size: 1.2em;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            animation: fadeIn 1s ease-in;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>';

    return $output;
}
add_shortcode('hola_copilot', 'hola_copilot_shortcode');