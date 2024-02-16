<?php

namespace Fauxify\Fauxify\Provider\Eng;

use Fauxify\Fauxify\Provider\ParentBank;

class Bank extends ParentBank{
    // Commercial Banks
    // 20
    protected $classABanks = [
        "Agriculture Development Bank",
        "Nepal Bank",
        "Rastriya Baniya Bank",
        "Citizens Bank International",
        "Everest Bank",
        "Global IME Bank",
        "Himalayan Bank",
        "Kumari Bank",
        "Laxmi Sunrise Bank",
        "Machhapuchhre Bank",
        "Nabil Bank",
        "Nepal Investment Mega Bank",
        "Nepal SBI Bank",
        "NIC Asia Bank",
        "NMB Bank",
        "Prahbu Bank",
        "Prime Commercial Bank",
        "Sanima Bank",
        "Siddhartha Bank",
        "Standard Chatered Bank"
    ];

    // Development Banks
    // 17
    protected $classBBanks = [
        "Corporate Development Bank",
        "Excel Development Bank",
        "Garima Bikas Bank",
        "Green Development Bank",
        "Jyoti Bikas Bank",
        "Kamana Sewa Bikas Bank",
        "Karnali Development Bank",
        "Lumbini Bikas Bank",
        "Mahalaxmi Development Bank",
        "Miteri Development Bank",
        "Muktinath Bikash Bank",
        "Narayani Development Bank",
        "Salapa Bikash Bank",
        "Saptakoshi Development Bank",
        "Sangrila Development Bank",
        "Shine Resunga Development Bank",
        "Sindhu Bikash Bank"
    ];

    // Finance Companies
    // 17
    protected $classCBanks = [
        "Best Finance",
        "Capital Merchant Banking & Finance",
        "Central Finance",
        "Gurkhas Finance",
        "Goodwill Finance",
        "Guheshwori Merchant Banking & Finance",
        "ICFC Finance",
        "Janaki Finance",
        "Manjushree Finance",
        "Multipurpose Finance",
        "Nepal Finance",
        "Nepal Share Markets and Finance",
        "Pokhara Finance",
        "Progressive Finance",
        "Reliance Finance",
        "Samriddhi Finance Company",
        "Shree Investment & Finance"
    ];
}