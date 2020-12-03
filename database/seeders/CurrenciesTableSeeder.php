<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Crater\Models\Currency;

class CurrenciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currencies = [
            [
                'name' => 'US Dollar',
                'code' => 'USD',
                'symbol' => '$',
                'precision' => '2',
                'thousand_separator' => ',',
                'decimal_separator' => '.'
            ],
            [
                'name' => 'British Pound',
                'code' => 'GBP',
                'symbol' => '£',
                'precision' => '2',
                'thousand_separator' => ',',
                'decimal_separator' => '.'
            ],
            [
                'name' => 'Euro',
                'code' => 'EUR',
                'symbol' => '€',
                'precision' => '2',
                'thousand_separator' => '.',
                'decimal_separator' => ','
            ],
            [
                'name' => 'South African Rand',
                'code' => 'ZAR',
                'symbol' => 'R',
                'precision' => '2',
                'thousand_separator' => '.',
                'decimal_separator' => ','
            ],
            [
                'name' => 'Danish Krone',
                'code' => 'DKK',
                'symbol' => 'kr',
                'precision' => '2',
                'thousand_separator' => '.',
                'decimal_separator' => ',',
                'swap_currency_symbol' => true
            ],
            [
                'name' => 'Israeli Shekel',
                'code' => 'ILS',
                'symbol' => 'NIS ',
                'precision' => '2',
                'thousand_separator' => ',',
                'decimal_separator' => '.'
            ],
            [
                'name' => 'Swedish Krona',
                'code' => 'SEK',
                'symbol' => 'kr',
                'precision' => '2',
                'thousand_separator' => '.',
                'decimal_separator' => ',',
                'swap_currency_symbol' => true
            ],
            [
                'name' => 'Kenyan Shilling',
                'code' => 'KES',
                'symbol' => 'KSh ',
                'precision' => '2',
                'thousand_separator' => ',',
                'decimal_separator' => '.'
            ],
            [
                'name' => 'Kuwaiti Dinar',
                'code' => 'KWD',
                'symbol' => 'KWD ',
                'precision' => '3',
                'thousand_separator' => ',',
                'decimal_separator' => '.'
            ],
            [
                'name' => 'Canadian Dollar',
                'code' => 'CAD',
                'symbol' => 'C$',
                'precision' => '2',
                'thousand_separator' => ',',
                'decimal_separator' => '.'
            ],
            [
                'name' => 'Philippine Peso',
                'code' => 'PHP',
                'symbol' => 'P ',
                'precision' => '2',
                'thousand_separator' => ',',
                'decimal_separator' => '.'
            ],
            [
                'name' => 'Indian Rupee',
                'code' => 'INR',
                'symbol' => '₹',
                'precision' => '2',
                'thousand_separator' => ',',
                'decimal_separator' => '.'
            ],
            [
                'name' => 'Australian Dollar',
                'code' => 'AUD',
                'symbol' => '$',
                'precision' => '2',
                'thousand_separator' => ',',
                'decimal_separator' => '.'
            ],
            [
                'name' => 'Singapore Dollar',
                'code' => 'SGD',
                'symbol' => 'S$',
                'precision' => '2',
                'thousand_separator' => ',',
                'decimal_separator' => '.'
            ],
            [
                'name' => 'Norske Kroner',
                'code' => 'NOK',
                'symbol' => 'kr',
                'precision' => '2',
                'thousand_separator' => '.',
                'decimal_separator' => ',',
                'swap_currency_symbol' => true
            ],
            [
                'name' => 'New Zealand Dollar',
                'code' => 'NZD',
                'symbol' => '$',
                'precision' => '2',
                'thousand_separator' => ',',
                'decimal_separator' => '.'
            ],
            [
                'name' => 'Vietnamese Dong',
                'code' => 'VND',
                'symbol' => '₫',
                'precision' => '0',
                'thousand_separator' => '.',
                'decimal_separator' => ','
            ],
            [
                'name' => 'Swiss Franc',
                'code' => 'CHF',
                'symbol' => 'Fr.',
                'precision' => '2',
                'thousand_separator' => '\'',
                'decimal_separator' => '.'
            ],
            [
                'name' => 'Guatemalan Quetzal',
                'code' => 'GTQ',
                'symbol' => 'Q',
                'precision' => '2',
                'thousand_separator' => ',',
                'decimal_separator' => '.'
            ],
            [
                'name' => 'Malaysian Ringgit',
                'code' => 'MYR',
                'symbol' => 'RM',
                'precision' => '2',
                'thousand_separator' => ',',
                'decimal_separator' => '.'
            ],
            [
                'name' => 'Brazilian Real',
                'code' => 'BRL',
                'symbol' => 'R$',
                'precision' => '2',
                'thousand_separator' => '.',
                'decimal_separator' => ','
            ],
            [
                'name' => 'Thai Baht',
                'code' => 'THB',
                'symbol' => '฿',
                'precision' => '2',
                'thousand_separator' => ',',
                'decimal_separator' => '.'
            ],
            [
                'name' => 'Nigerian Naira',
                'code' => 'NGN',
                'symbol' => '₦',
                'precision' => '2',
                'thousand_separator' => ',',
                'decimal_separator' => '.'
            ],
            [
                'name' => 'Argentine Peso',
                'code' => 'ARS',
                'symbol' => '$',
                'precision' => '2',
                'thousand_separator' => '.',
                'decimal_separator' => ','
            ],
            [
                'name' => 'Bangladeshi Taka',
                'code' => 'BDT',
                'symbol' => 'Tk',
                'precision' => '2',
                'thousand_separator' => ',',
                'decimal_separator' => '.'
            ],
            [
                'name' => 'United Arab Emirates Dirham',
                'code' => 'AED',
                'symbol' => 'DH ',
                'precision' => '2',
                'thousand_separator' => ',',
                'decimal_separator' => '.'
            ],
            [
                'name' => 'Hong Kong Dollar',
                'code' => 'HKD',
                'symbol' => 'HK$',
                'precision' => '2',
                'thousand_separator' => ',',
                'decimal_separator' => '.'
            ],
            [
                'name' => 'Indonesian Rupiah',
                'code' => 'IDR',
                'symbol' => 'Rp',
                'precision' => '2',
                'thousand_separator' => ',',
                'decimal_separator' => '.'
            ],
            [
                'name' => 'Mexican Peso',
                'code' => 'MXN',
                'symbol' => '$',
                'precision' => '2',
                'thousand_separator' => ',',
                'decimal_separator' => '.'
            ],
            [
                'name' => 'Egyptian Pound',
                'code' => 'EGP',
                'symbol' => 'E£',
                'precision' => '2',
                'thousand_separator' => ',',
                'decimal_separator' => '.'
            ],
            [
                'name' => 'Colombian Peso',
                'code' => 'COP',
                'symbol' => '$',
                'precision' => '2',
                'thousand_separator' => '.',
                'decimal_separator' => ','
            ],
            [
                'name' => 'West African Franc',
                'code' => 'XOF',
                'symbol' => 'CFA ',
                'precision' => '2',
                'thousand_separator' => ',',
                'decimal_separator' => '.'
            ],
            [
                'name' => 'Chinese Renminbi',
                'code' => 'CNY',
                'symbol' => 'RMB ',
                'precision' => '2',
                'thousand_separator' => ',',
                'decimal_separator' => '.'
            ],
            [
                'name' => 'Rwandan Franc',
                'code' => 'RWF',
                'symbol' => 'RF ',
                'precision' => '2',
                'thousand_separator' => ',',
                'decimal_separator' => '.'
            ],
            [
                'name' => 'Tanzanian Shilling',
                'code' => 'TZS',
                'symbol' => 'TSh ',
                'precision' => '2',
                'thousand_separator' => ',',
                'decimal_separator' => '.'
            ],
            [
                'name' => 'Netherlands Antillean Guilder',
                'code' => 'ANG',
                'symbol' => 'NAƒ',
                'precision' => '2',
                'thousand_separator' => '.',
                'decimal_separator' => ','
            ],
            [
                'name' => 'Trinidad and Tobago Dollar',
                'code' => 'TTD',
                'symbol' => 'TT$',
                'precision' => '2',
                'thousand_separator' => ',',
                'decimal_separator' => '.'
            ],
            [
                'name' => 'East Caribbean Dollar',
                'code' => 'XCD',
                'symbol' => 'EC$',
                'precision' => '2',
                'thousand_separator' => ',',
                'decimal_separator' => '.'
            ],
            [
                'name' => 'Ghanaian Cedi',
                'code' => 'GHS',
                'symbol' => '‎GH₵',
                'precision' => '2',
                'thousand_separator' => ',',
                'decimal_separator' => '.'
            ],
            [
                'name' => 'Bulgarian Lev',
                'code' => 'BGN',
                'symbol' => 'Лв.',
                'precision' => '2',
                'thousand_separator' => ' ',
                'decimal_separator' => '.'
            ],
            [
                'name' => 'Aruban Florin',
                'code' => 'AWG',
                'symbol' => 'Afl. ',
                'precision' => '2',
                'thousand_separator' => ' ',
                'decimal_separator' => '.'
            ],
            [
                'name' => 'Turkish Lira',
                'code' => 'TRY',
                'symbol' => 'TL ',
                'precision' => '2',
                'thousand_separator' => '.',
                'decimal_separator' => ','
            ],
            [
                'name' => 'Romanian New Leu',
                'code' => 'RON',
                'symbol' => 'RON',
                'precision' => '2',
                'thousand_separator' => ',',
                'decimal_separator' => '.'
            ],
            [
                'name' => 'Croatian Kuna',
                'code' => 'HRK',
                'symbol' => 'kn',
                'precision' => '2',
                'thousand_separator' => '.',
                'decimal_separator' => ','
            ],
            [
                'name' => 'Saudi Riyal',
                'code' => 'SAR',
                'symbol' => '‎SِAR',
                'precision' => '2',
                'thousand_separator' => ',',
                'decimal_separator' => '.'
            ],
            [
                'name' => 'Japanese Yen',
                'code' => 'JPY',
                'symbol' => '¥',
                'precision' => '0',
                'thousand_separator' => ',',
                'decimal_separator' => '.'
            ],
            [
                'name' => 'Maldivian Rufiyaa',
                'code' => 'MVR',
                'symbol' => 'Rf',
                'precision' => '2',
                'thousand_separator' => ',',
                'decimal_separator' => '.'
            ],
            [
                'name' => 'Costa Rican Colón',
                'code' => 'CRC',
                'symbol' => '₡',
                'precision' => '2',
                'thousand_separator' => ',',
                'decimal_separator' => '.'
            ],
            [
                'name' => 'Pakistani Rupee',
                'code' => 'PKR',
                'symbol' => 'Rs ',
                'precision' => '0',
                'thousand_separator' => ',',
                'decimal_separator' => '.'
            ],
            [
                'name' => 'Polish Zloty',
                'code' => 'PLN',
                'symbol' => 'zł',
                'precision' => '2',
                'thousand_separator' => ' ',
                'decimal_separator' => ',',
                'swap_currency_symbol' => true
            ],
            [
                'name' => 'Sri Lankan Rupee',
                'code' => 'LKR',
                'symbol' => 'LKR',
                'precision' => '2',
                'thousand_separator' => ',',
                'decimal_separator' => '.',
                'swap_currency_symbol' => true
            ],
            [
                'name' => 'Czech Koruna',
                'code' => 'CZK',
                'symbol' => 'Kč',
                'precision' => '2',
                'thousand_separator' => ' ',
                'decimal_separator' => ',',
                'swap_currency_symbol' => true
            ],
            [
                'name' => 'Uruguayan Peso',
                'code' => 'UYU',
                'symbol' => '$',
                'precision' => '2',
                'thousand_separator' => '.',
                'decimal_separator' => ','
            ],
            [
                'name' => 'Namibian Dollar',
                'code' => 'NAD',
                'symbol' => '$',
                'precision' => '2',
                'thousand_separator' => ',',
                'decimal_separator' => '.'
            ],
            [
                'name' => 'Tunisian Dinar',
                'code' => 'TND',
                'symbol' => '‎د.ت',
                'precision' => '2',
                'thousand_separator' => ',',
                'decimal_separator' => '.'
            ],
            [
                'name' => 'Russian Ruble',
                'code' => 'RUB',
                'symbol' => '₽',
                'precision' => '2',
                'thousand_separator' => ',',
                'decimal_separator' => '.'
            ],
            [
                'name' => 'Mozambican Metical',
                'code' => 'MZN',
                'symbol' => 'MT',
                'precision' => '2',
                'thousand_separator' => '.',
                'decimal_separator' => ',',
                'swap_currency_symbol' => true
            ],
            [
                'name' => 'Omani Rial',
                'code' => 'OMR',
                'symbol' => 'ر.ع.',
                'precision' => '2',
                'thousand_separator' => ',',
                'decimal_separator' => '.'
            ],
            [
                'name' => 'Ukrainian Hryvnia',
                'code' => 'UAH',
                'symbol' => '₴',
                'precision' => '2',
                'thousand_separator' => ',',
                'decimal_separator' => '.'
            ],
            [
                'name' => 'Macanese Pataca',
                'code' => 'MOP',
                'symbol' => 'MOP$',
                'precision' => '2',
                'thousand_separator' => ',',
                'decimal_separator' => '.'
            ],
            [
                'name' => 'Taiwan New Dollar',
                'code' => 'TWD',
                'symbol' => 'NT$',
                'precision' => '2',
                'thousand_separator' => ',',
                'decimal_separator' => '.'
            ],
            [
                'name' => 'Dominican Peso',
                'code' => 'DOP',
                'symbol' => 'RD$',
                'precision' => '2',
                'thousand_separator' => ',',
                'decimal_separator' => '.'
            ],
            [
                'name' => 'Chilean Peso',
                'code' => 'CLP',
                'symbol' => '$',
                'precision' => '2',
                'thousand_separator' => '.',
                'decimal_separator' => ','
            ],
            [
                'name' => 'Serbian Dinar',
                'code' => 'RSD',
                'symbol' => 'RSD',
                'precision' => '2',
                'thousand_separator' => '.',
                'decimal_separator' => ','
            ],
            [
                'name' => 'Kyrgyzstani som',
                'code' => 'KGS',
                'symbol' => 'С̲ ',
                'precision' => '2',
                'thousand_separator' => '.',
                'decimal_separator' => ','
            ],
        ];

        foreach ($currencies as $currency) {
            Currency::create($currency);
        }

    }
}