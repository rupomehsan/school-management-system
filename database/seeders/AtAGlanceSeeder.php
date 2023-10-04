<?php

namespace Database\Seeders;

use App\Models\WebsiteSection\AtAGlance;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AtAGlanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AtAGlance::create([
            "icon" => " <i class=\"fa-solid fa-graduation-cap\"></i>",
            "title" => "সংক্ষিপ্ত পরিচিতি",
            "description" => "কুষ্টিয়া জেলায় ৩০৯টি মাধ্যমিক ও নিম্ন মাধ্যমিক বিদ্যালয়ের মধ্যে কুষ্টিয়া জিলা স্কুল, কুষ্টিয়া জেলার তথা বাংলাদেশের মধ্যে একটি স্বনামধন্য বিদ্যাপীঠ। কুষ্টিয়া শহরের প্রাণকেন্দ্রে কুষ্টিয়া-ঝিনাইদহ মহাসড়কের পূর্ব পার্শ্বে মজমপুরে (পুরাতন বাস ষ্ট্যান্ডের সন্নিকটে) অবস্থিত। যার দক্ষিণ প্রাচীর ঘেঁষে রয়েছে সার্কিট হাউস। প্রায় ২০০ গজ দক্ষিণে রেয়েছে ডি.সি. কোর্ট, পূর্ব দক্ষিণ কোণে রয়েছে ২৫০ শয্যার আধুনিক হাসপাতাল। সামান্য উত্তরে রয়েছে বিপনী বিতান সমৃদ্ধ সুপার মার্কেট, পুলিশ ষ্টেশন এবং আর একটু উত্তরদিয়ে বয়ে গেছে গড়াই নদী। সবদিক দিয়ে প্রাকৃতিক সৌন্দর্যমন্ডিত আট একর ভূমির উপর গড়ে উঠেছে ঐতিহ্যবাহী এই কুষ্টিয়া জিলা স্কুল। একটি তিনতলা ও একটি দোতলা বিশিষ্ট একাডেমিক ভবন, উত্তর পার্শ্বে রয়েছে দোতলা বিশিষ্ট ছা্ত্রাবাস, পুকুর-সুইমিং পুল ও পূর্বদিকে খোলা মাঠ। ডবল শিফটের এই বিদ্যালয়ের বর্তমান ছাত্র সংখ্যা প্রায় ২,৩৫৯ জন এবং প্রধান ও সহকারী প্রধান শিক্ষকসহ মোট শিক্ষক সংখ্যা ৫৪ জন।"
        ]);
    }
}
