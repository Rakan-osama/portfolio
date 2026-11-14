<div align="center">

# ✦ Software Engineer Portfolio

**A personal engineering portfolio for Rakan Osama**

[![Live website](https://img.shields.io/badge/VIEW_LIVE_PORTFOLIO-0F766E?style=for-the-badge)](https://portfolio-two-iota-rescma6hc4.vercel.app/)
[![GitHub Profile](https://img.shields.io/badge/GITHUB_PROFILE-111827?style=for-the-badge&logo=github)](https://github.com/Rakan-osama)

*Projects · Professional Experience · Technical Skills · Contact*

</div>

---

## Overview

This is my personal portfolio project, built around a **Laravel application** and designed to present my work as a **Software Engineer**. It brings my background, projects and development interests into one accessible place for potential clients, engineering teams and recruiters.

The repository uses **PHP 8.3+** and **Laravel 13**, as declared in its `composer.json`. The public portfolio is linked above; deployment details may differ from the source project.

## Goals

- Create a clear personal identity as a software engineer with backend and full-stack experience.
- Present selected work across business platforms, APIs, data engineering and application development.
- Provide a straightforward way to connect for opportunities and collaboration.
- Deliver an accessible, responsive presentation of technical experience.

## Technology

| Area | Technology |
| --- | --- |
| Application | PHP, Laravel |
| UI | Web frontend and responsive interface |
| Development workflow | Composer, Laravel Artisan, Git |
| Quality tooling | PHPUnit (declared as a development dependency) |

## Local development

Prerequisites: **PHP 8.3+**, Composer, Node.js / npm and a database appropriate for your local environment.

```bash
git clone https://github.com/Rakan-osama/portfolio.git
cd portfolio
composer install
cp .env.example .env
php artisan key:generate
npm install
```

Configure your database and other required values in `.env`, then:

```bash
php artisan migrate
npm run dev
php artisan serve
```

On Windows, create `.env` by copying `.env.example` manually if `cp` is unavailable. These are standard Laravel setup steps; adapt them to the actual deployed environment.

## About the developer

**Rakan Osama** — Software Engineer with 2+ years of experience building web applications, business dashboards, CRM/HRMS/CMS workflows and REST APIs.

**[LinkedIn](https://www.linkedin.com/in/rakan-osama/)** · **[Email](mailto:rakanosama.dev@gmail.com)** · **[Live Portfolio](https://portfolio-two-iota-rescma6hc4.vercel.app/)**

---

*Made to showcase engineering work, not just a list of technologies.*
