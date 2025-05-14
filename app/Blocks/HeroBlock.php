<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;

class HeroBlock extends Block
{
    /**
     * Nazwa bloku.
     */
    public $name = 'Hero Block';

    /**
     * Opis bloku.
     */
    public $description = 'A simple hero block with a title and subtitle.';

    /**
     * Kategoria bloku.
     */
    public $category = 'theme';

    /**
     * Ikona bloku.
     */
    public $icon = 'dashicons-cover-image';

    /**
     * Słowa kluczowe pomagające znaleźć blok w edytorze.
     */
    public $keywords = ['hero', 'banner', 'header'];

    /**
     * Tryb podglądu w edytorze.
     */
    public $mode = 'preview';

    /**
     * Domyślne wyrównanie bloku.
     */
    public $align = 'wide';

    /**
     * Definiuje, które opcje wyrównania są wspierane.
     */
    public $supports_align = ['wide', 'full'];

    /**
     * Dane przykładu dla podglądu bloku.
     * @var array
     */
    public $example = [ // USUNIĘTO typ 'array'
        'attributes' => [
            'mode' => 'preview',
            'data' => [
                'title' => 'Przykładowy Tytuł Hero',
                'subtitle' => 'To jest przykładowy podtytuł dla bloku hero.',
                'background_color' => '#f0f0f0',
            ],
        ],
    ];

    /**
     * Pola ACF dla tego bloku.
     *
     * @return array
     */
    public function fields(): array
    {
        return [
            [
                'key' => 'hero_field_title',
                'name' => 'hero_title',
                'label' => 'Title',
                'type' => 'text',
                'required' => 1,
            ],
            [
                'key' => 'hero_field_subtitle',
                'name' => 'hero_subtitle',
                'label' => 'Subtitle',
                'type' => 'textarea',
            ],
            [
                'key' => 'hero_field_background_color',
                'name' => 'hero_background_color',
                'label' => 'Background Color',
                'type' => 'color_picker',
                'default_value' => '#eeeeee',
            ],
        ];
    }

    /**
     * Dane przekazywane do widoku Blade.
     *
     * @return array
     */
    public function with(): array
    {
        $example_data = $this->example['attributes']['data'] ?? [];

        return [
            'title' => get_field('hero_title') ?: ($example_data['title'] ?? 'Default Title'),
            'subtitle' => get_field('hero_subtitle') ?: ($example_data['subtitle'] ?? ''),
            'background_color' => get_field('hero_background_color') ?: ($example_data['background_color'] ?? '#eeeeee'),
        ];
    }
}