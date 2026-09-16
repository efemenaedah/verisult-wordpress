# Verisult College WordPress Website

Public project documentation and custom frontend assets for the Verisult College website redevelopment.

## Project purpose

Verisult College is a career-focused training institute that helps newcomers, career changers and underemployed professionals translate existing experience into employable skills, recognized certifications and project-ready capability.

The website is organized around four service pillars:

1. Career development and employment support
2. Upskilling and professional training
3. Certifications
4. Employer and workforce solutions

The core homepage message is:

> Get Trained. Get Hired. Deliver Projects.

## Repository scope

This repository tracks project documentation, the Astra child-theme scaffold, custom CSS and JavaScript, and approved page-builder exports.

It deliberately does **not** contain WordPress core, the live database, user records, form submissions, uploaded media, backups, credentials or commercial theme/plugin packages.

## Technology

| Area | Technology | Project use |
| --- | --- | --- |
| CMS | WordPress | Site administration and content management |
| Legacy theme | Upstudy Education | Original site/demo foundation |
| Modernization theme | Astra + Verisult child theme | Maintainable custom frontend direction |
| Primary page builder | Elementor Free | Homepage and general content pages |
| Specialized page builder | Thrive Architect | Career Accelerator Program landing page |
| Learning | Tutor LMS | Course delivery and course information |
| Forms | Contact Form 7 | Enquiries and employer forms |
| Events | WP Events Manager | Training and event listings |
| Marketing | Mailchimp for WordPress | Newsletter subscriptions |
| Delivery | Zoom integration | Online training support |
| Backups | UpdraftPlus | Site backup and recovery |
| Safe development | WP Staging | Isolated testing before production changes |

Plugin availability and licensing must be confirmed in the target WordPress environment before deployment.

## Brand direction

- Practical, career-focused and professional
- Clean corporate education design
- Deep green: `#064A2C`
- Orange: `#F15A0A`
- Modern sans-serif typography
- Generous whitespace, rounded cards and clear calls to action

## Information architecture

Primary navigation:

- Programs
- Career Services
- Certifications
- Employers
- Community
- About

Important calls to action:

- Take Career Assessment
- Explore Programs
- Book Consultation
- Partner With Us

Key offerings include Get Hired, Career Accelerator Program (CAP), Project Management, AI and Automation, Data Analysis, Business Analysis, PMP, CAPM, Six Sigma, Lean Six Sigma and Scrum Master training.

## Recommended repository structure

```text
verisult-wordpress/
├── .github/
│   ├── ISSUE_TEMPLATE/
│   └── PULL_REQUEST_TEMPLATE.md
├── docs/
│   ├── content-architecture.md
│   ├── implementation-guide.md
│   ├── maintenance-and-handover.md
│   ├── plugin-register.md
│   └── staging-and-deployment.md
├── exports/
│   ├── elementor/
│   └── thrive/
├── wp-content/
│   └── themes/
│       └── verisult-astra-child/
│           ├── assets/
│           │   ├── css/
│           │   └── js/
│           ├── functions.php
│           └── style.css
├── .gitignore
└── README.md
```

## Step-by-step project process

### 1. Audit and protect the existing website

1. Review the live site, active theme, plugins, navigation and forms.
2. Record the current page URLs and take reference screenshots.
3. Create a full files-and-database backup.
4. Confirm that a restoration method is available.
5. Keep all redesign work isolated from production.

### 2. Prepare staging

1. Create or refresh the WordPress staging copy with WP Staging.
2. Confirm that staging cannot be indexed by search engines.
3. Confirm that outgoing form emails and payment actions cannot affect real users.
4. Verify that changes made in staging do not modify production.
5. Never store the staging URL, credentials or database export in this public repository.

### 3. Establish the frontend foundation

1. Confirm whether the target build will retain Upstudy or complete the Astra migration.
2. When Astra is used, install Astra and activate `verisult-astra-child`.
3. Configure global colours, typography, buttons, container widths and spacing.
4. Use Elementor Free for the main site pages.
5. Retain Thrive Architect only where required, particularly the CAP landing page.
6. Avoid editing parent-theme files directly.

### 4. Build the global header and navigation

1. Add the Verisult logo and primary navigation.
2. Use a clear high-priority action such as **Take Career Assessment** or **Explore Programs**.
3. Check transparent-header contrast over the hero section.
4. Remove duplicate menus, invalid imported links and unused demo headers.
5. Test dropdown and folded mobile navigation at common breakpoints.

### 5. Build the homepage

Recommended section order:

1. Hero — “Get Trained. Get Hired. Deliver Projects.”
2. Audience cards — newcomers, career changers and underemployed professionals
3. Five-step career journey
4. Four service pillars
5. Featured programs and certifications
6. Career support and success stories
7. Employer and community partnership section
8. EPIC values
9. Final call to action
10. Footer with learner, employer, community, company, newsletter and legal links

Use real, verified metrics only. Do not publish placeholder statistics as factual claims.

### 6. Build supporting pages

Create and review:

- About
- Programs
- Career Services
- Certifications
- Employers
- Community
- Contact
- Privacy Policy
- Individual course pages

The Employers page should clearly explain training, talent-pipeline, recruitment-support and work-placement partnership services, followed by the appropriate enquiry form.

### 7. Migrate the CAP landing page

1. Confirm Thrive Architect is installed and licensed in staging.
2. Export the landing page from the source WordPress environment.
3. Import it into a new draft page in staging.
4. Check fonts, images, links, forms and responsive styling.
5. Do not publish until every dependency and CTA is tested.
6. Store only an approved, sanitized export in `exports/thrive/`.

### 8. Build course and certification content

1. Use a reusable structure for learning outcomes, audience, prerequisites, delivery, schedule, cost and registration.
2. For PMP schedules, prefer responsive cards over wide tables.
3. Check desktop heading visibility, responsive ordering, text colour and container spacing.
4. Confirm all dates, prices and registration links immediately before publication.

### 9. Configure forms and integrations

1. Build learner, consultation and employer forms using the approved form plugin.
2. Configure recipient addresses in WordPress or the mail service, never in this repository.
3. Add consent language and links to the privacy policy.
4. Test validation, confirmation messages and email delivery.
5. Confirm Mailchimp, Zoom and event integrations only where needed.

### 10. Complete responsive and accessibility QA

Test at minimum:

- Desktop, laptop, tablet and mobile widths
- Keyboard navigation and visible focus states
- Heading hierarchy and colour contrast
- Alternative text for informative images
- Form labels, errors and confirmation messages
- Header, dropdown and mobile menu behaviour
- Buttons, internal links and external links
- Page speed and appropriately compressed images

### 11. Review staging

1. Clear WordPress, plugin, server and CDN caches.
2. Compare staging against the approved content and design direction.
3. Obtain stakeholder approval.
4. Record known limitations and rollback instructions.
5. Create a fresh production backup immediately before launch.

### 12. Deploy to production

1. Deploy only approved files and content.
2. Do not replace the entire production database without reviewing newer production data.
3. Re-save permalinks if routes return 404 errors.
4. Recheck forms, menus, SSL, responsive behaviour and analytics.
5. Monitor the site after launch and retain the pre-launch backup.

### 13. Handover and maintenance

1. Give each administrator an individual account with the least required privilege.
2. Document the active theme, page builders and plugin responsibilities.
3. Schedule backups and test restoration periodically.
4. Apply WordPress, theme and plugin updates in staging first.
5. Review forms, links, course dates and employer information regularly.

## Git workflow

```bash
git clone https://github.com/efemenaedah/verisult-wordpress.git
cd verisult-wordpress
git switch -c feature/short-description

# Make and test changes

git add .
git commit -m "Describe the completed change"
git push -u origin feature/short-description
```

Open a pull request, test the branch in staging, obtain approval and merge into `main`. WordPress database and media changes should be migrated through the approved hosting/staging process rather than Git.

## Current known risks

- Upstudy demo imports can create duplicate pages, headers, menus and invalid menu relationships.
- Elementor content is stored mainly in the database; Git alone cannot reproduce the complete site.
- The CAP page depends on Thrive Architect and may require additional Thrive components.
- Some PMP schedule headings previously required desktop/laptop visibility troubleshooting.
- Production content can change while staging work is in progress, so database replacement requires careful review.

## Security

Never commit credentials, personal information, database exports, form submissions, backups or private URLs. If a secret is accidentally committed, revoke it immediately and remove it from Git history; deleting the latest file alone is not sufficient.

## Licence

No open-source licence has been selected. Public visibility does not grant permission to reuse Verisult branding, content or proprietary assets.

