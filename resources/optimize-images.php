<?php

declare(strict_types=1);

$projectImages = [
    'public/img/ESG_Report/imag.jpeg' => 'esg-report-imag',
    'public/img/ESG_Report/images (1).jpeg' => 'esg-report-images-1',
    'public/img/ESG_Report/images.jpeg' => 'esg-report-images',
    'public/img/Roaya_realestate/001-home-03-projects.webp' => 'roaya-home-projects',
    'public/img/Roaya_realestate/001-home-02-destinations.webp' => 'roaya-home-destinations',
    'public/img/Roaya_realestate/001-dashboard.webp' => 'roaya-dashboard',
    'public/img/Roaya_realestate/005-projects.webp' => 'roaya-projects',
    'public/img/Roaya_realestate/008-cms-website-content.webp' => 'roaya-cms-content',
    'public/img/hossam_x_studios/hero_secction.png' => 'hossam-hero',
    'public/img/hossam_x_studios/public_website.png' => 'hossam-public-website',
    'public/img/hossam_x_studios/Saas_page.png' => 'hossam-saas',
    'public/img/hossam_x_studios/login_page.png' => 'hossam-login',
    'public/img/green_harvest/001-home.webp' => 'green-harvest-home',
    'public/img/green_harvest/008-cms-about.webp' => 'green-harvest-about',
    'public/img/green_harvest/009-cms-services-page.webp' => 'green-harvest-services',
    'public/img/green_harvest/011-cms-blogs-page.webp' => 'green-harvest-blogs',
    'public/img/biry_suits/01-admin-dashboard.webp' => 'biry-dashboard',
    'public/img/biry_suits/03-orders-create.webp' => 'biry-orders',
    'public/img/biry_suits/45-employees-index.webp' => 'biry-employees',
    'public/img/biry_suits/50-settings-index.webp' => 'biry-settings',
    'public/img/green_hills/001-home.webp' => 'green-hills-home',
    'public/img/green_hills/001-admin-dashboard.webp' => 'green-hills-dashboard',
    'public/img/green_hills/004-contact.webp' => 'green-hills-contact',
    'public/img/green_hills/014-registered-members.webp' => 'green-hills-members',
    'public/img/green_hills/images.png' => 'green-hills-logo',
];

$standaloneImages = [
    'public/assets/images/rakan-osama.png' => ['rakan-osama.webp', 512],
    'public/img/logo_of_companies/extreme_energy.jpeg' => ['logo-extreme-energy.webp', 400],
    'public/img/logo_of_companies/logo.png' => ['logo-hossam-x-studios.webp', 800],
    'public/img/logo_of_companies/new_solution.jpeg' => ['logo-new-solution.webp', 200],
    'public/img/logo_of_companies/education_logo.jpeg' => ['logo-damietta-university.webp', 400],
];

$outputDirectory = __DIR__.'/static/public/media';

if (! is_dir($outputDirectory) && ! mkdir($outputDirectory, 0777, true) && ! is_dir($outputDirectory)) {
    throw new RuntimeException("Unable to create {$outputDirectory}");
}

$writeWebp = static function (string $sourcePath, string $targetPath, int $maximumWidth, int $quality): void {
    $sourceContents = file_get_contents($sourcePath);
    $source = $sourceContents === false ? false : imagecreatefromstring($sourceContents);

    if ($source === false) {
        throw new RuntimeException("Unable to read {$sourcePath}");
    }

    $sourceWidth = imagesx($source);
    $sourceHeight = imagesy($source);
    $targetWidth = min($maximumWidth, $sourceWidth);
    $targetHeight = (int) round($sourceHeight * ($targetWidth / $sourceWidth));
    $target = imagecreatetruecolor($targetWidth, $targetHeight);

    imagealphablending($target, false);
    imagesavealpha($target, true);
    $transparent = imagecolorallocatealpha($target, 0, 0, 0, 127);
    imagefilledrectangle($target, 0, 0, $targetWidth, $targetHeight, $transparent);
    imagecopyresampled($target, $source, 0, 0, 0, 0, $targetWidth, $targetHeight, $sourceWidth, $sourceHeight);

    if (! imagewebp($target, $targetPath, $quality)) {
        throw new RuntimeException("Unable to write {$targetPath}");
    }

    imagedestroy($source);
    imagedestroy($target);
};

foreach ($projectImages as $sourcePath => $outputName) {
    foreach ([640, 1280] as $width) {
        $writeWebp($sourcePath, "{$outputDirectory}/{$outputName}-{$width}.webp", $width, 82);
    }
}

foreach ($standaloneImages as $sourcePath => [$outputName, $maximumWidth]) {
    $writeWebp($sourcePath, "{$outputDirectory}/{$outputName}", $maximumWidth, 86);
}

copy('public/favicon.svg', __DIR__.'/static/public/favicon.svg');

echo 'Optimized '.(count($projectImages) * 2 + count($standaloneImages))." images.\n";
