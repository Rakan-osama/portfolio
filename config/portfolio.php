<?php

/*
|--------------------------------------------------------------------------
| Portfolio Content
|--------------------------------------------------------------------------
|
| Every piece of information displayed on the portfolio lives here.
| Update the values below to change the website content without
| touching any Blade template.
|
| NOTE: Projects/experience `url` values stay hidden while they are empty.
*/

return [

    // ── Identity ─────────────────────────────────────────────────────────
    'name' => 'Rakan Osama',
    'first_name' => 'Rakan',
    'title' => 'Backend Developer',
    'email' => 'rakanosama.dev@gmail.com',
    'phone' => '01010556064',
    'location' => 'Cairo, Egypt',

    // TODO: Add your real profile URLs (they stay hidden while empty)
    'socials' => [
        'linkedin' => '',
        'github' => '',
    ],

    // Badge shown on the hero card tile
    'availability_badge' => 'Open to backend roles & projects',

    // ── Hero ─────────────────────────────────────────────────────────────
    'hero' => [
        'tagline' => 'Available for work',
        'intro' => '<strong class="font-medium text-zinc-700 dark:text-zinc-300">PHP/Laravel Backend Developer</strong> with 2+ years of experience building scalable web backends and RESTful APIs — fast, reliable, and built to last.',
        'code_sample' => <<<'CODE'
            class Rakan extends BackendDeveloper
            {
                public function stack(): array
                {
                    return ['PHP', 'Laravel', 'MySQL'];
                }

                public function focus(): array
                {
                    return [
                        'RESTful APIs'   => 'auth, validation, integrations',
                        'Databases'      => 'design, optimization, transactions',
                        'Architecture'   => 'OOP, SOLID, clean, scalable',
                    ];
                }
            }
            CODE,
        'stats' => [
            ['value' => '5+', 'label' => 'Projects delivered'],
            ['value' => '3', 'label' => 'Companies'],
            ['value' => '2y+', 'label' => 'Experience'],
        ],
    ],

    // ── Expertise ("Services") ───────────────────────────────────────────
    // 'icon' supports: 'server', 'database', 'dashboard'
    'expertise' => [
        [
            'icon' => 'server',
            'title' => 'Backend & RESTful APIs',
            'description' => 'Scalable server-side business logic, authentication, authorization, validation and third-party API integrations — delivered as clean, well-tested Laravel applications.',
            'tags' => ['PHP', 'Laravel', 'REST APIs', 'Backend Testing'],
        ],
        [
            'icon' => 'database',
            'title' => 'Database Design & Optimization',
            'description' => 'Relational schema design, transactions, indexing and query optimization for fast, reliable MySQL-backed applications with complex business rules.',
            'tags' => ['MySQL', 'Schema Design', 'Query Optimization', 'Queues & Caching'],
        ],
        [
            'icon' => 'dashboard',
            'title' => 'Admin Dashboards & CMS Modules',
            'description' => 'Role-based access control and secure admin dashboards powering ERP, accounting, CMS, CRM and HRMS modules for real business operations.',
            'tags' => ['RBAC', 'ERP', 'CMS', 'CRM', 'HRMS'],
        ],
    ],

    // ── Projects ─────────────────────────────────────────────────────────
    'projects' => [
        [
            'abbr' => 'HX',
            'name' => 'hossamxstudios website',
            'period' => 'May 2026 - Present',
            'description' => 'Built a custom business management platform with CRM, HRMS, accounting, admin dashboard, and internal operations modules.',
            'tags' => ['Laravel', 'CRM', 'HRMS', 'Accounting'],
            // TODO: Add the live URL (the link stays hidden while empty)
            'url' => '',
            'gradient' => 'from-orange-500/70 via-amber-500/60 to-rose-600/70',
        ],
        [
            'abbr' => 'GH',
            'name' => 'green harvest',
            'period' => 'February 2026 - March 2026',
            'description' => 'Built a Laravel-based platform with a custom CMS, admin dashboard, and CRM module for managing content and customer requests.',
            'tags' => ['Laravel', 'CMS', 'Admin Dashboard', 'CRM'],
            'url' => '',
            'gradient' => 'from-green-500/70 via-emerald-500/60 to-teal-600/70',
        ],
        [
            'abbr' => 'BS',
            'name' => 'biry suits',
            'period' => 'January 2026 - May 2026',
            'description' => 'Developed a Laravel-based management platform featuring a custom admin dashboard with integrated CRM, HRMS, and CMS modules.',
            'tags' => ['Laravel', 'Admin Dashboard', 'CRM', 'HRMS', 'CMS'],
            'url' => '',
            'gradient' => 'from-indigo-500/70 via-violet-500/60 to-purple-600/70',
        ],
        [
            'abbr' => 'GHC',
            'name' => 'green hills club',
            'period' => 'September 2025 - December 2025',
            'description' => 'Developed a web platform using Laravel, featuring a secure admin dashboard with an integrated CRM system.',
            'tags' => ['Laravel', 'Admin Dashboard', 'CRM'],
            'url' => '',
            'gradient' => 'from-sky-500/70 via-cyan-500/60 to-blue-600/70',
        ],
        [
            'abbr' => 'AZ',
            'name' => 'afrizone-eg',
            'period' => 'June 2025 - July 2025',
            'description' => 'Developed frontend and backend features using Laravel and Bootstrap, including application logic, database operations, and user-facing interfaces.',
            'tags' => ['Laravel', 'Bootstrap', 'Frontend & Backend'],
            'url' => '',
            'gradient' => 'from-fuchsia-500/70 via-pink-500/60 to-rose-600/70',
        ],
    ],

    // ── About ────────────────────────────────────────────────────────────
    'about' => [
        'paragraphs' => [
            "I'm Rakan, a backend developer based in Cairo with 2+ years of experience shipping Laravel-based platforms across CRM, ERP, and sustainability domains. I specialize in turning complex business requirements into clean, scalable server-side architecture.",
            "I believe great backends are invisible — well-designed schemas, fast queries, and dependable APIs that get out of the product's way. My work follows OOP and SOLID principles, with authentication, authorization, queues, and caching handled from day one.",
        ],
        'education' => [
            'degree' => 'B.Sc. in Communications & Electronics Engineering',
            'university' => 'Damietta University',
            'period' => 'September 2018 - June 2023',
        ],
        'skills' => [
            'technologies' => ['PHP', 'Laravel', 'MySQL', 'C#', '.NET', 'Razor Pages', 'Git'],
            'core_concepts' => [
                'OOP',
                'SOLID Principles',
                'Relational Database Design',
                'Query Optimization',
                'Transactions',
                'Queues & Background Jobs',
                'Caching',
                'RESTful APIs',
                'Authentication & Authorization',
                'API Integration',
                'Backend Testing',
            ],
        ],
    ],

    // ── Experience ───────────────────────────────────────────────────────
    'experience' => [
        [
            'role' => 'Backend Developer',
            'company' => 'Extreme Energy',
            'location' => 'Cairo',
            'period' => 'August 2026 - Present',
            'description' => 'Develop .NET-based backend solutions for ESG and Sustainability Reporting systems, supporting data validation, processing, business logic, and reporting workflows for stock exchange disclosures.',
            'stack' => ['C#', '.NET', 'Razor Pages'],
        ],
        [
            'role' => 'Backend Developer',
            'company' => 'hossam-x-studios',
            'location' => 'Cairo',
            'period' => 'June 2025 - Present',
            'description' => 'Built Laravel-based web application backends with RESTful APIs, relational database design, authentication, authorization, validation, and scalable server-side business logic.',
            'stack' => ['PHP', 'Laravel', 'MySQL'],
        ],
        [
            'role' => 'Backend Developer',
            'company' => 'New Solution',
            'location' => 'Cairo',
            'period' => 'February 2025 - June 2025',
            'description' => 'Developed backend features including role-based access control, database operations, validation, and admin dashboards for ERP, accounting, and CMS modules while following clean code and scalable architecture practices.',
            'stack' => ['PHP', 'Laravel', 'MySQL'],
        ],
    ],
];
