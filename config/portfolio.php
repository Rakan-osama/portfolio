<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Identity
    |--------------------------------------------------------------------------
    */

    'name' => 'Rakan Osama',
    'first_name' => 'Rakan',
    'role' => 'Backend Developer',
    'headline_sans' => "Hi I'm Rakan,",
    'headline_serif' => 'Backend Developer',
    'badge' => '2+ Years Experience — Laravel & PHP',
    'intro' => 'passionate about building reliable backends, clean APIs, and systems that scale with the products they power.',
    'availability' => 'Available for new opportunities',

    'email' => 'rakanosama.dev@gmail.com',
    'phone' => '01010556064',
    'phone_href' => '+201010556064',
    'location' => 'Cairo, Egypt',

    'photo' => 'assets/images/my_photo/20-removebg.png',
    'photo_alt' => 'Rakan Osama, Backend Developer',

    'github' => 'https://github.com/Rakan-osama',
    'linkedin' => 'https://www.linkedin.com/in/rakan-osama',
    'whatsapp' => 'https://wa.me/201010556064',

    'summary' => 'PHP/Laravel Backend Developer with 2+ years of experience building scalable web backends and RESTful APIs. Strong in OOP, MySQL database design, query optimization, authentication, authorization, queues, caching, third-party API integrations, Git, and backend testing.',

    /*
    |--------------------------------------------------------------------------
    | Hero social proof
    |--------------------------------------------------------------------------
    */

    'trust' => [
        'label' => 'Building production backends for',
        'emphasis' => '3 teams',
        'rest' => 'across Egypt — ERP, CRM and reporting platforms.',
        'initials' => ['EE', 'HX', 'NS'],
    ],

    /*
    |--------------------------------------------------------------------------
    | Tech strip (replaces the client logo row)
    |--------------------------------------------------------------------------
    */

    'stack' => [
        ['name' => 'PHP', 'mark' => 'php'],
        ['name' => 'Laravel', 'mark' => 'laravel'],
        ['name' => 'MySQL', 'mark' => 'mysql'],
        ['name' => 'C#', 'mark' => 'csharp'],
        ['name' => '.NET', 'mark' => 'dotnet'],
        ['name' => 'Git', 'mark' => 'git'],
    ],

    /*
    |--------------------------------------------------------------------------
    | Process
    |--------------------------------------------------------------------------
    */

    'process' => [
        [
            'number' => '01',
            'title' => 'Discover',
            'body' => 'Understanding the business domain, the requirements, and the constraints before writing a single line of code.',
        ],
        [
            'number' => '02',
            'title' => 'Design',
            'body' => 'Shaping the schema, the architecture, and the API contract so every part fits together and stays maintainable.',
        ],
        [
            'number' => '03',
            'title' => 'Deliver',
            'body' => 'Building, testing, and shipping to production with clear documentation and room to iterate on real feedback.',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Projects
    |--------------------------------------------------------------------------
    |
    | Drop a screenshot in public/assets/images/projects/ using the same
    | slug plus .webp (or .png/.jpg) and it will replace the placeholder.
    |
    */

    'projects' => [
        [
            'slug' => 'hossamxstudios',
            'name' => 'Hossam X Studios',
            'period' => 'May 2026 — Present',
            'description' => 'A custom business management platform with CRM, HRMS, accounting, an admin dashboard, and internal operations modules.',
            'tags' => ['Laravel', 'MySQL', 'CRM'],
            'url' => null,
            'image' => 'assets/images/projects/hossamxstudios.webp',
            'featured' => true,
        ],
        [
            'slug' => 'green-harvest',
            'name' => 'Green Harvest',
            'period' => 'Feb 2026 — Mar 2026',
            'description' => 'A Laravel platform with a custom CMS, an admin dashboard, and a CRM module for managing content and customer requests.',
            'tags' => ['Laravel', 'CMS', 'CRM'],
            'url' => null,
            'image' => 'assets/images/projects/green-harvest.webp',
            'featured' => true,
        ],
        [
            'slug' => 'biry-suits',
            'name' => 'Biry Suits',
            'period' => 'Jan 2026 — May 2026',
            'description' => 'A Laravel-based management platform featuring a custom admin dashboard with integrated CRM, HRMS, and CMS modules.',
            'tags' => ['Laravel', 'HRMS', 'CMS'],
            'url' => null,
            'image' => 'assets/images/projects/biry-suits.webp',
            'featured' => true,
        ],
        [
            'slug' => 'green-hills-club',
            'name' => 'Green Hills Club',
            'period' => 'Sep 2025 — Dec 2025',
            'description' => 'A web platform built with Laravel, featuring a secure admin dashboard with an integrated CRM system.',
            'tags' => ['Laravel', 'CRM', 'Dashboard'],
            'url' => null,
            'image' => 'assets/images/projects/green-hills-club.webp',
            'featured' => true,
        ],
        [
            'slug' => 'afrizone-eg',
            'name' => 'Afrizone EG',
            'period' => 'Jun 2025 — Jul 2025',
            'description' => 'Frontend and backend features built with Laravel and Bootstrap, including application logic, database operations, and user-facing interfaces.',
            'tags' => ['Laravel', 'Bootstrap', 'MySQL'],
            'url' => null,
            'image' => 'assets/images/projects/afrizone-eg.webp',
            'featured' => false,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Experience
    |--------------------------------------------------------------------------
    */

    'experience' => [
        [
            'role' => 'Backend Developer',
            'company' => 'Extreme Energy',
            'location' => 'Cairo, Egypt',
            'period' => 'Aug 2026 — Present',
            'years' => '2026 — Now',
            'icon' => 'building',
            'stack' => ['C#', '.NET', 'SQL Server', 'ESG'],
            'description' => 'Developing .NET-based backend solutions for ESG and sustainability reporting systems, supporting data validation, processing, business logic, and reporting workflows for stock exchange disclosures.',
        ],
        [
            'role' => 'Backend Developer',
            'company' => 'Hossam X Studios',
            'location' => 'Cairo, Egypt',
            'period' => 'Jun 2025 — Present',
            'years' => '2025 — Now',
            'icon' => 'code',
            'stack' => ['Laravel', 'PHP', 'MySQL', 'REST APIs'],
            'description' => 'Building Laravel-based web application backends with RESTful APIs, relational database design, authentication, authorization, validation, and scalable server-side business logic.',
        ],
        [
            'role' => 'Backend Developer',
            'company' => 'New Solution',
            'location' => 'Cairo, Egypt',
            'period' => 'Feb 2025 — Jun 2025',
            'years' => '2025',
            'icon' => 'server',
            'stack' => ['Laravel', 'MySQL', 'RBAC', 'ERP'],
            'description' => 'Developed backend features including role-based access control, database operations, validation, and admin dashboards for ERP, accounting, and CMS modules while following clean code and scalable architecture practices.',
        ],
    ],

    'education' => [
        'degree' => 'B.Sc. in Communications & Electronics Engineering',
        'school' => 'Damietta University',
        'period' => 'Sep 2018 — Jun 2023',
        'years' => '2018 — 2023',
    ],

    'languages' => [
        ['name' => 'Arabic', 'level' => 'Native'],
        ['name' => 'English', 'level' => 'Conversational'],
    ],

    /*
    |--------------------------------------------------------------------------
    | Section copy
    |--------------------------------------------------------------------------
    */

    'sections' => [
        'experience_eyebrow' => 'Experience',
        'experience_title' => 'Where I have',
        'experience_serif' => 'worked',
        'process_eyebrow' => 'How I Work',
        'process_title' => 'Here’s how it works',
        'works_eyebrow' => 'Recent Projects',
        'works_title' => 'Selected Works',
        'about_eyebrow' => 'Who Am I',
        'about_title' => 'Building backends',
        'about_serif' => 'since 2023',
        'cta_sans' => "Let's Make It",
        'cta_serif' => 'Happen',
        'cta_body' => 'always open to new opportunities, collaborations, and challenging problems. Let’s build something reliable together.',
    ],

];
