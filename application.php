<?php

/**
 * Plugin Name: Application
 * Description: This plugin registers Johannes Niessen for hire.
 * Version: 42.1
 * Author: Johannes Niessen
 */

use Languages\PHP;
use Languages\JavaScript;
use Languages\MySQL;
use Languages\HTML;
use Languages\CSS;
use WordPress\Core as CMS;
use WordPress\Elementor as PageBuilder;

class Developer extends WP_Admin {

    # Config
    const POSITION    = 'Parttime / Freelance WordPress Developer';

    # Contact 
    public $email     = 'mail.johannes.niessen@gmail.com';
    public $phone     = '+49 (0)1578 1144124';
    public $location  = 'Cologne / Remote';
    
    # Application 
    public $loop = [
        'tasks'       => esc_html__( 'WordPress & Plugin Dev., Server- & DB management, Coding' ),
        'description' => esc_html__( 'Want to create secure and high-performing websites, custom
                                      layouts, widgets, templates, smooth workflows or AI-agents? 
                                      As a experienced developer I build websites and everything
                                      around it.' ),
        'soft_skills' => esc_html__( 'Team-Communication, Self-Organization, Curiosity' ),
        'button_text' => esc_html__( 'Hire Now', [ $this, 'WP_Init' ]),
        'button_type' => 'cta',
     ]; 

    /**
     * @package Experiences 
     * @since 2005
     */
    public function WP_Experience( $company = [...] ) {
        return [
            API::STATUS_RECENT => [
                'company' => 'Program', 
                'role'    => 'CEO', 
                'since'   => 2021
            ],
            API::STATUS_EXPIRED => [
                'company' => 'Brandlite GmbH', 
                'role'    => 'Head of IT', 
                'since'   => 2019
            ]
        ];
     }

    /**
     * @deprecated 0.8.15 Use `self::instance()->updater` instead.
     * @todo Reduce amount 
     */
    public function WP_Interests( $interest = '' ) {
        add_actions( 
            'Music, Sport, Social engagement, Ethics', 
            [ $this, 'WP_Init' ], 404 
        );
    }

    /**
     * @link 'linkedin.com/in/johannes-niessen/'
     * @uses WP_Skillset
     */
    public function WP_Init(): void {
        add_action('hire_me', [ $this, 'build_website_magic' ]);
    }
}

