<?php return [
    'plugin' => [
        'name' => 'Snipcart Shop',
        'description' => 'Ecommerce plugin using the Snipcart backend for October CMS',
        'titles' => [
            'products' => [
                'create' => 'Produkt erstellen',
                'update' => 'Produkt bearbeiten',
                'preview' => 'Produkt-Vorschau',
            ]
        ],
        'settings' => [
            'category' => 'Shop',
            'label' => 'Snipcart-Shop konfigurieren',
            'description' => 'Konfigurieren Sie Ihren Shop',
            'sections' => [
                'currencies' => 'Währungen',
                'currencies_comment' => 'Welche Währungen werden in Ihrem Shop verwendet?'
            ],
            'currencies' => 'Geben Sie jeweils nur den offiziellen dreistelligen Währungscode ein.',
            'currency_code' => 'Währungscode'
        ],
        'common' => [
            'shop' => 'Shop',
            'products' => 'Produkte',
            'cart' => 'Warenkorb',
            'shipping' => 'Versand',
            'taxes' => 'Steuern',
            'inventory' => 'Lagerbestand',
            'custom_fields' => 'Benutzerdefinierte Felder',
            'variants' => 'Varianten',
            'select_placeholder' => '-- Bitte wählen',
            'main_image' => 'Hauptbild',
            'images' => 'Bilder',
            'select_image' => 'Bild auswählen',
            'allowed' => 'Erlaubt',
            'not_allowed' => 'Nicht erlaubt',
        ],
        'variant' => [
            'method' => [
                'single' => 'Artikel',
                'variant' => 'Artikelvarianten',
            ]
        ],
        'custom_field_options' => [
            'text' => 'Textfeld',
            'textarea' => 'Mehrzeiliges Textfeld',
            'dropdown' => 'Auswahlliste',
            'checkbox' => 'Checkbox',
            'add' => 'Option hinzufügen',
            'name' => 'Name',
            'price' => 'Aufpreis',
            'attributes' => 'Attribute',
            'option' => 'Option'
        ],
        'product' => [
            'user_defined_id' => 'Artikelnummer',
            'name' => 'Produktname',
            'published' => 'Veröffentlicht',
            'published_comment' => 'Dieser Artikel ist im Shop sichtbar',
            'stock' => 'Lagerbestand',
            'price' => 'Preis',
            'description_short' => 'Kurzbeschreibung',
            'description' => 'Beschreibung',
            'weight' => 'Gewicht (g)',
            'length' => 'Länge (mm)',
            'height' => 'Höhe (mm)',
            'width' => 'Breite (mm)',
            'quantity_default' => 'Standard-Bestellmenge',
            'quantity_min' => 'Minimale Bestellmenge',
            'quantity_max' => 'Maximale Bestellmenge',
            'inventory_management_method' => 'Inventarverwaltungs-Methode',
            'allow_out_of_stock_purchases' => 'Nicht-an-Lager-Kauf erlauben',
            'allow_out_of_stock_purchases_comment' => 'Dieser Artikel darf auch dann bestellt werden, wenn er nicht an Lager ist',
            'stackable' => 'In Warenkorb zusammenfassen',
            'stackable_comment' => 'Beim mehrmaligen Hinzufügen zum Warenkorb diesen Artikel nur einmal auflisten (Anzahl erhöhen)',
            'shippable' => 'Versand möglich',
            'shippable_comment' => 'Dieser Artikel kann versendet werden',
            'taxable' => 'Besteuert',
            'taxable_comment' => 'Auf diesen Artikel fallen Steuern an',
            'add_currency' => 'Währung hinzufügen',
            'currency' => 'Währung',
        ],
        'custom_fields' => [
            'name' => 'Feldname',
            'type' => 'Typ',
            'options' => 'Optionen',
            'required' => 'Pflichtfeld',
            'required_comment' => 'Dieses Feld muss beim Tätigen einer Bestellung ausgefüllt werden',
            'is_required' => 'Pflichtfeld',
            'is_not_required' => 'Kein Pflichtfeld',
        ],
    ],
];