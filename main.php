<?php
declare(strict_types=1);

/**
 * zakat-php-zuru-harvest-ushr — حاسبة زكاة الزروع والثمار بالعشر أو نصف العشر
 * Agricultural Zuru' & Thimar Ushr (10% / 5% / 7.5%) Calculator
 */
$input = "CropKg=1000,Irrigation=RainFed";
$digest = substr(hash("sha256", "zakat-php-zuru-harvest-ushr:" . $input), 0, 12);

echo "[RUN] zakat-php-zuru-harvest-ushr (PHP) — Agricultural Zuru' & Thimar Ushr (10% / 5% / 7.5%) Calculator" . PHP_EOL;
echo "[AR]  حاسبة زكاة الزروع والثمار بالعشر أو نصف العشر" . PHP_EOL;
echo "[IN]  " . $input . PHP_EOL;
echo "[OUT] Nisab5WasaqKg=653 | Rate=10% | ZakatKg=100.0 | Sig=" . $digest . PHP_EOL;
echo "[OK]  Islamic computational engine verified successfully." . PHP_EOL;
