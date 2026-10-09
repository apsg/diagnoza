<?php
namespace App;

class SchemaHelper
{
    public static function generateSchema(): array
    {
        return [
            '@context'        => 'https://schema.org',
            '@type'           => 'ProfessionalService',
            '@id'             => url('/') . '#gabinet',
            'name'            => 'Gabinet Wzmocnienie — Aleksandra Magda',
            'url'             => url('/'),
            'email'           => 'diagnoza@wzmocnienie.pl',
            'address'         => [
                '@type'           => 'PostalAddress',
                'streetAddress'   => 'Rynek Dębnicki 10/1',
                'postalCode'      => '30-319',
                'addressLocality' => 'Kraków',
                'addressCountry'  => 'PL',
            ],
            'areaServed' => [
                [
                    '@type' => 'City',
                    'name'  => 'Kraków',
                ],
                [
                    '@type' => 'AdministrativeArea',
                    'name'  => 'Województwo małopolskie',
                ],
            ],
            'hasOfferCatalog' => [
                '@type'           => 'OfferCatalog',
                'name'            => 'Cennik usług psychologicznych',
                'itemListElement' => [
                    [
                        '@type'         => 'Offer',
                        'price'         => '250',
                        'priceCurrency' => 'PLN',
                        'itemOffered'   => [
                            '@type'       => 'Service',
                            'name'        => 'Konsultacja psychologiczna',
                            'description' => 'Krótkoterminowa forma wsparcia mająca na celu doraźną pomoc. Jedno spotkanie trwa 1 godzinę. Cena: 250 PLN za godzinę.',
                        ],
                    ],
                    [
                        '@type'         => 'Offer',
                        'price'         => '1700',
                        'priceCurrency' => 'PLN',
                        'itemOffered'   => [
                            '@type'       => 'Service',
                            'name'        => 'Diagnoza ASD dzieci i młodzieży',
                            'description' => 'Wstępny wywiad rozwojowy, dwie obserwacje dziecka lub nastolatka (w tym badanie ADOS-2), opracowanie wyników, opinia psychologiczna dotycząca przebiegu procesu diagnostycznego i podsumowanie.',
                        ],
                    ],
                    [
                        '@type'         => 'Offer',
                        'price'         => '1500',
                        'priceCurrency' => 'PLN',
                        'itemOffered'   => [
                            '@type'       => 'Service',
                            'name'        => 'Diagnoza ASD osoby dorosłej',
                            'description' => 'Wywiad dotyczący bieżącego funkcjonowania i wywiad rozwojowy, badanie ADOS-2, opracowanie wyników, podsumowanie i opinia z wnioskami diagnostycznymi.',
                        ],
                    ],
                    [
                        '@type'         => 'Offer',
                        'price'         => '520',
                        'priceCurrency' => 'PLN',
                        'itemOffered'   => [
                            '@type'       => 'Service',
                            'name'        => 'Diagnoza możliwości poznawczych Stanford-Binet 5',
                            'description' => 'Badanie dla osób w wieku 2–70 lat. Jedno spotkanie trwa około 90–120 minut. Jeśli badanie wymaga kolejnego spotkania, jego koszt wynosi 150 PLN.',
                        ],
                    ],
                    [
                        '@type'         => 'Offer',
                        'price'         => '1500',
                        'priceCurrency' => 'PLN',
                        'itemOffered'   => [
                            '@type'       => 'Service',
                            'name'        => 'Diagnoza ADHD osób dorosłych',
                            'description' => 'Pięć spotkań po około 60 minut. Proces obejmuje wywiady dotyczące objawów i ich wpływu na funkcjonowanie, zapoznanie się z dokumentacją lub informacjami od bliskiej osoby, opracowanie wniosków i podsumowanie.',
                        ],
                    ],
                    [
                        '@type'         => 'Offer',
                        'price'         => '420',
                        'priceCurrency' => 'PLN',
                        'itemOffered'   => [
                            '@type'       => 'Service',
                            'name'        => 'Test MOXO',
                            'description' => 'Jedno spotkanie trwa około 50 minut. Badanie może odbyć się online i obejmuje omówienie wyników oraz pisemne podsumowanie.',
                        ],
                    ],
                    [
                        '@type'         => 'Offer',
                        'price'         => '650',
                        'priceCurrency' => 'PLN',
                        'itemOffered'   => [
                            '@type'       => 'Service',
                            'name'        => 'Badanie ADOS-2',
                            'description' => 'Dwa spotkania po około 50 minut. Cena obejmuje badanie, omówienie wniosków i pisemne podsumowanie.',
                        ],
                    ],
                ],
            ],
        ];
    }
}
